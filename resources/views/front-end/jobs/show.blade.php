@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ?
'extend.front-end.master':
 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@section('title'){{ $job->title }} @stop
@section('description', strip_tags( html_entity_decode($job->description)))
@section('content')
    @php $breadcrumbs = Breadcrumbs::generate('jobDetail',$job->slug); @endphp
    @if (file_exists(resource_path('views/extend/front-end/includes/inner-banner.blade.php')))
        @include('extend.front-end.includes.inner-banner', 
            ['title' => trans('lang.job_detail'), 'inner_banner' => $job_inner_banner, 'show_banner' => 'true' ]
        )
    @else 
        @include('front-end.includes.inner-banner', 
            ['title' =>  trans('lang.job_detail'), 'inner_banner' => $job_inner_banner, 'show_banner' => 'true' ]
        )
    @endif
    <div class="wt-haslayout wt-main-section">
        <div class="container">
            <div class="row">
                <div class="job-single wt-haslayout">
                    <div id="jobs" class="wt-twocolumns wt-haslayout">
                        @if (Session::has('error'))
                            <div class="flash_msg">
                                <flash_messages :message_class="'danger'" :time='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
                            </div>
                        @endif
                        @if (!empty($job))
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                                <div class="wt-proposalholder">
                                    @if (!empty($job->is_featured) && $job->is_featured === 'true')
                                        <span class="wt-featuredtag"><img src="{{{ asset('images/featured.png') }}}" alt="{{ trans('lang.img') }}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                    @endif
                                    @if (
                                        !empty($job->professional_level) ||
                                        !empty($job->title) ||
                                        !empty($location['title'])  ||
                                        !empty($job->project_type) ||
                                        !empty($job->duration)
                                        )
                                        <div class="wt-proposalhead">
                                            @if (!empty($job->title))
                                                <h2>{{{ $job->title }}}</h2>
                                            @endif
                                            @if (
                                                !empty($job->professional_level) ||
                                                !empty($location['title'])  ||
                                                !empty($job->price) ||
                                                !empty($job->duration)
                                                )
                                                <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                                    @if (!empty($job->project_level))
                                                        <li>
                                                            <span>
                                                                <img class="wt-job-icon" src="{{asset('images/job-icons/job-level.png')}}">
                                                                {{{Helper::getProjectLevel($job->project_level)}}}
                                                            </span>
                                                        </li>
                                                    @endif
                                                    @if (!empty($job->location->title))
                                                        <li><span><img src="{{{asset(Helper::getLocationFlag($job->location->flag))}}}" alt="{{ trans('lang.img') }}"> {{{ $job->location->title }}}</span></li>
                                                    @endif
                                                    @if (!empty($job->project_type))
                                                        <li><span class="wt-clicksavefolder"><img class="wt-job-icon" src="{{asset('images/job-icons/job-type.png')}}"> {{ trans('lang.type') }} {{{$project_type}}}</span></li>
                                                    @endif
                                                    @if (!empty($job->duration))
                                                        <li><span class="wt-dashboradclock"><img class="wt-job-icon" src="{{asset('images/job-icons/job-duration.png')}}"> {{ trans('lang.duration') }} {{{ Helper::getJobDurationList($job->duration) }}}</span></li>
                                                    @endif
                                                    {{-- @if (!empty($job->price))
                                                        <li>
                                                            <span>
                                                                <i class="wt-budget">{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}</i> {{{ $job->price }}}
                                                            </span>
                                                        </li>
                                                    @endif --}}
                                                </ul>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="wt-btnarea"><a href="javascript:void(0);" @click.prevent="check_auth('{{{ url('job/proposal/'.$job->slug) }}}')" class="wt-btn">{{{ trans('lang.send_propsal') }}}</a></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                                <div class="wt-projectdetail-holder">
                                    @if (!empty($job->description))
                                        <div class="wt-projectdetail">
                                            <div class="wt-title">
                                                <h3>{{ trans('lang.project_detail') }}</h3>
                                            </div>
                                            <div class="wt-description">
                                                @php echo htmlspecialchars_decode(stripslashes($job->description)); @endphp
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty($job->skills) && $job->skills->count() > 0)
                                        <div class="wt-skillsrequired">
                                            <div class="wt-title">
                                                <h3>{{ trans('lang.skills_req') }}</h3>
                                            </div>
                                            <div class="wt-tag wt-widgettag">
                                                @foreach ($job->skills as $skill)
                                                    <a href="{{{url('search-results?type=job&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty($attachments) && $job->show_attachments === 'true' && !empty($job->employer))
                                        <div class="wt-attachments">
                                            <div class="wt-title">
                                                <h3>{{ trans('lang.attachments') }}</h3>
                                            </div>
                                            <ul class="wt-attachfile">                                                
                                                @foreach ($attachments as $attachment)
                                                    <li>
                                                        <span>{{{Helper::formateFileName($attachment)}}}</span>
                                                        <em>
                                                            @if (Storage::disk('local')->exists('uploads/jobs/'.$job->employer->id.'/'.$attachment))
                                                                {{ trans('lang.file_size') }} {{{Helper::bytesToHuman(Storage::size('uploads/jobs/'.$job->employer->id.'/'.$attachment))}}}
                                                            @endif
                                                            @if (!empty($attachment) && !empty($job->user_id))
                                                                <a href="{{route('getfile', ['type'=>'jobs','attachment'=> $attachment,'id'=> $job->user_id])}}"><i class="lnr lnr-download"></i></a>
                                                            @endif
                                                        </em>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
								
								
								
								



                            <div class="wt-freelancerholder wt-rcvproposalholder">
                                    <div class="wt-tabscontenttitle">
                                        <h2>{{ trans('lang.received_proposals') }}</h2>
                                    </div>
                                    @if (!empty($proposals))
                                        <div class="wt-managejobcontent">
                                            @foreach ($proposals as $proposal)
                                                @php
                                                    $user = \App\User::find($proposal->freelancer_id);
                                                    $profile = \App\User::find($proposal->freelancer_id)->profile;
                                                    $user_image = !empty($profile) ? $profile->avater : '';
                                                    $profile_image = !empty($user_image) ? '/uploads/users/'.$proposal->freelancer_id.'/'.$user_image : 'images/user-login.png';
													$last_name = $user->last_name;
                                                    $user_name = $user->first_name.' '.$last_name[0];
                                                    $feedbacks = \App\Review::select('feedback')->where('receiver_id', $proposal->freelancer_id)->count();
                                                    $avg_rating = App\Review::where('receiver_id', $proposal->freelancer_id)->sum('avg_rating');
                                                    $rating  = $avg_rating != 0 ? round($avg_rating/\App\Review::count()) : 0;
                                                    $reviews = \App\Review::where('receiver_id', $proposal->freelancer_id)->get();
                                                    $stars  = $reviews->sum('avg_rating') != 0 ? (($reviews->sum('avg_rating')/$feedbacks)/5)*100 : 0;
                                                    $average_rating_count = !empty($feedbacks) ? $reviews->sum('avg_rating')/$feedbacks : 0;
                                                    $completion_time = !empty($proposal->completion_time) ? \App\Helper::getJobDurationList($proposal->completion_time) : '';
                                                    $attachments = !empty($proposal->attachments) ? unserialize($proposal->attachments) : '';
                                                    $attachments_count = 0;
                                                    if (!empty($attachments)){
                                                        $attachments_count = count($attachments);
                                                    }
                                                    $reviews = \App\Review::where('receiver_id', $user->id)->count();
                                                    $badge = Helper::getUserBadge($user->id);
                                                    if (!empty($enable_package) && $enable_package === 'true') {
                                                        $feature_class = !empty($badge) ? 'wt-featured' : '';
                                                        $badge_color = !empty($badge) ? $badge->color : '';
                                                        $badge_img  = !empty($badge) ? $badge->image : '';
                                                    } else {
                                                        $feature_class = '';
                                                        $badge_color = '';
                                                        $badge_img    = '';
                                                    }
                                                @endphp
                                                <div class="wt-userlistinghold wt-proposalitem {{ $feature_class }}">
                                                    @if(!empty($enable_package) && $enable_package === 'true')        
                                                        @if (!empty($badge))
                                                            <span class="wt-featuredtag" style="border-top: 40px solid {{ $badge_color }};">
                                                                <img src="{{{ asset(Helper::getBadgeImage($badge_img)) }}}" alt="{{ trans('lang.is_featured') }}" data-tipso="Plus Member" class="template-content tipso_style">
                                                            </span>
                                                        @endif
                                                    @endif    
                                                    <figure class="wt-userlistingimg">
                                                        <img src="{{{ asset($profile_image) }}}" alt="{{ trans('lang.profile_img') }}" class="mCS_img_loaded">
                                                    </figure>
                                                    <div class="wt-proposaldetails">
                                                        @if (!empty($user_name))
                                                            <div class="wt-contenthead">
                                                                <div class="wt-title">
                                                                    <a href="{{ url('profile/'.$user->slug) }}">{{{ $user_name }}}</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="wt-proposalfeedback">
                                                            <span class="wt-stars"><span style="width: {{ $stars }}%;"></span></span>
                                                            <span class="wt-starcontent">{{{ round($average_rating_count) }}}<sub>{{ trans('lang.5') }}</sub> <em>({{{ $feedbacks }}} {{ trans('lang.feedbacks') }})</em></span>
                                                        </div>
                                                    </div>
                                                    <div class="wt-rightarea">
                                                        <div class="wt-btnarea">
                                                            @if (empty($accepted_proposal))
                                                                @if (!empty($order))
                                                                   @if ($order->product_id == $proposal->id)     
                                                                        <h5>{{trans('lang.pending_hiring')}}</h5>
                                                                   @endif
                                                                @else
                                                                    <a href="javascript:void(0);"  v-on:click.prevent="hireFreelancer('{{{$proposal->id}}}', '{{$mode}}')" class="wt-btn">{{ trans('lang.hire_now') }}</a>
                                                                @endif
                                                            @endif
                                                        </div>

                                                        <div class="wt-btnarea">
																<a href="javascript:void(0);"   onclick="send_message('{{{$user->id}}}','{{{$job->user_id}}}')" class="wt-btn">Envoyer un message</a>

                                                        </div>
														
                                                        <div class="wt-hireduserstatus">
                                                            <h5>{{ !empty($symbol) ? $symbol['symbol'] : '$' }}{{{$proposal->amount}}}</h5>
                                                            @if(!empty($completion_time))
                                                                <span>{{{ $completion_time }}}</span>
                                                            @endif
                                                        </div>
                                                        <div class="wt-hireduserstatus">
                                                            <i class="far fa-envelope"></i>
                                                            <a href="javascript:void(0);"  v-on:click.prevent="showCoverLetter('{{ $proposal->id }}')" ><span>{{ trans('lang.cover_letter') }}</span></a>
                                                        </div>
                                                        <div class="wt-hireduserstatus">
                                                            <i class="fa fa-paperclip"></i>
                                                            @if (!empty($attachments))
                                                                {!! Form::open(['url' => url('proposal/download-attachments'), 'class' =>'post-job-form wt-haslayout', 'id' => 'download-attachments-form-'.$proposal->id]) !!}
                                                                    @foreach ($attachments as $attachment)
                                                                        @if (Storage::disk('local')->exists('uploads/proposals/'.$proposal->freelancer_id.'/'.$attachment))
                                                                            {!! Form::hidden('attachments['.$received_proposal_count.']', $attachment, []) !!}
                                                                            @php $received_proposal_count++; @endphp
                                                                        @endif
                                                                    @endforeach
                                                                    {!! Form::hidden('freelancer_id', $proposal->freelancer_id, []) !!}
                                                                {!! form::close(); !!}
                                                                <a href="javascript:void(0);"  v-on:click.prevent="downloadAttachments('{{'download-attachments-form-'.$proposal->id}}')" ><span>{{{ $received_proposal_count }}} {{ trans('lang.files_attached') }}</span></a>
                                                            @else
                                                                <span>{{{ $attachments_count }}} {{ trans('lang.files_attached') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                            @include('extend.errors.no-record')
                                        @else 
                                            @include('errors.no-record')
                                        @endif
                                    @endif
                                </div>
								
								
								
								
								
								
								
								
								
								
                            </div>
                        @endif
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            @if (file_exists(resource_path('views/extend/front-end/jobs/sidebar/index.blade.php')))
                                @include('extend.front-end.jobs.sidebar.index')
                            @else
                                @include('front-end.jobs.sidebar.index')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var popupMeta = {
            width: 400,
            height: 400
        }
        $(document).on('click', '.social-share', function(event){
            event.preventDefault();

            var vPosition = Math.floor(($(window).width() - popupMeta.width) / 2),
                hPosition = Math.floor(($(window).height() - popupMeta.height) / 2);

            var url = $(this).attr('href');
            var popup = window.open(url, 'Social Share',
                'width='+popupMeta.width+',height='+popupMeta.height+
                ',left='+vPosition+',top='+hPosition+
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                return false;
            }
        })
		
		function send_message(id,author_id){
			//https://elmoukef.ma/message/send-private-message
 
			 $.ajax({
				url: '/message/send-private-message',
				type: 'post',
				data: {
					author_id: 4,
					receiver_id: author_id,
					message: 'Bonjour',
					status: 0
				},
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				dataType: 'json',
				success: function (data) {
					window.location.href = "/message-center";
				}
			});

		}
    </script>
@endpush
