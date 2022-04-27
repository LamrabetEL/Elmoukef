@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
        @php
            $user = !empty(Auth::user()) ? Auth::user() : '';
            $role = !empty($user) ? $user->getRoleNames()->first() : array();
        @endphp
    <section class="wt-haslayout wt-dbsectionspace" id="profile_settings">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-right">
                @if (Session::has('message'))
                    <div class="flash_msg">
                        <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                    </div>
                @endif
                <div class="wt-dashboardbox">
                    <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        <h2>{{{ trans('lang.manage_users') }}}</h2>
                        <form class="wt-formtheme wt-formsearch">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="keyword" value="{{{ !empty($_GET['keyword']) ? $_GET['keyword'] : '' }}}"
                                        class="form-control" placeholder="{{{ trans('lang.ph_search_users') }}}">
                                    <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                        @if ($users->count() > 0)
                            <table class="wt-tablecategories">
                                <thead>
                                    <tr>
                                        <th>{{{ trans('lang.user_name') }}}</th>
                                        <th>{{{ trans('lang.ph_email') }}}</th>
                                        <th>{{{ trans('lang.role') }}}</th>
                                        <th>{{{ trans('lang.verification_status') }}}</th>
                                        <th>{{{ trans('lang.verification_status_cnie') }}}</th>
                                        <th>Numero</th>
                                        <th>Document</th>
                                        <th>{{{ trans('lang.action') }}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user_data)
                                        @php $user = \App\User::find($user_data['id']); @endphp
                                        @if ($user->getRoleNames()->first() != 'admin')
                                            <tr class="del-user-{{ $user->id }}">
                                                <td>{{{ ucwords(\App\Helper::getUserName($user->id)) }}}</td>
                                                <td>{{{ $user->email }}}</td>
												<td>
												@if ($role === 'admin')
												<?php $rols = array( "admin" => "1", "employer" => "2","freelancer" => "3","moderateur" => "4");?>
												<select name="roles" id="payout_year" value="role" onchange="changerole(this)">
													<?php foreach ($rols as $keye_role => $role_key){
														if($keye_role == $user->getRoleNames()->first()){
															echo '<option value=\'{"id_user":"'.$user->id.'", "role":'.$role_key.'}\' selected>'.$keye_role.'</option>';
														}else{
															echo '<option value=\'{"id_user":"'.$user->id.'", "role":'.$role_key.'}\' >'.$keye_role.'</option>';
														}
													}
													?>
												 </select>
												@endif
												@if ($role === 'moderateur')
													{{ $user->getRoleNames()->first() }}
												@endif
												</td>                                                <td id="verify_user-{{$user->id}}">
                                                    @if ($user->user_verified == 1)
                                                        <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-{{$user->id}}', '{{$user->id}}', 'not_verify')">{{ trans('lang.verified') }}</a>
                                                    @else
                                                        <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-{{$user->id}}', '{{$user->id}}', 'verify')" style="color:red">{{ trans('lang.not_verified') }}</a>
                                                    @endif
                                                </td>
												
                                                <td id="verify_user-{{$user->id}}">
                                                    @if ($user->validation_document == 1)
                                                        <a href="javascript:;" class="" onclick="verifierdocument({{ $user->id }})">{{ trans('lang.verified') }}</a>
                                                    @else
                                                        <a href="javascript:;" class="" onclick="verifierdocument({{ $user->id }})" style="color:red">{{ trans('lang.not_verified') }}</a>
                                                    @endif
                                                </td>		
                                                <td id="verify_user-{{$user->id}}">
                                                    {{ $user->numero }}
                                                </td>
                                                <td id="verify_user-{{$user->id}}">
                                                    @if ($user->type_document == 'particulier')
														<a href="/{{ $user->document }}" target="_blank">CNIE</a>
                                                    @else
														{{ $user->document }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="wt-actionbtn">
                                                        <a href="javascript:void()" v-on:click.prevent="deleteUser({{$user->id}})" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                        <a href="{{ url('profile/'.$user->slug) }}" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            @if (file_exists(resource_path('views/extend/errors/no-record.blade.php')))
                                @include('extend.errors.no-record')
                            @else
                                @include('errors.no-record')
                            @endif
                        @endif
                        @if ( method_exists($users,'links') )
                            {{ $users->links('pagination.custom') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>

function verifierdocument(data){

$.ajax({
    url: 'verifierdocument',
    type: 'post',
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	},
    data: {
        user_id: data
    },
    success: function (data) {
        location.reload();
    }
});

}

	function changerole(selectObject) {
		var value = selectObject.value;  		
		$.ajax({
			url: 'change_role',
			type: 'post',
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			data: {
				new_role: value
			},
			success: function (data) {
				console.log(data);
				//location.reload();
			}
		});

	}
</script>