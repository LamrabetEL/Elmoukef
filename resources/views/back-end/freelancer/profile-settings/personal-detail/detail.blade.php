<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.your_details') }}}</h2>
</div>
<div class="wt-formtheme">
    <fieldset>
        <div class="form-group form-group-half">
            <span class="wt-select">
                {!! Form::select( 'gender', ['male' => 'Male', 'female' => 'Female'], e($gender), ['placeholder' => trans('lang.ph_select_gender')] ) !!}
            </span>
        </div>
        <div class="form-group form-group-half">
            {!! Form::text( 'first_name', e(Auth::user()->first_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_first_name')] ) !!}
        </div>
        <div class="form-group form-group-half">
            {!! Form::text( 'last_name', e(Auth::user()->last_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_last_name')] ) !!}
        </div>
        <div class="form-group form-group-half">
            {!! Form::number( 'hourly_rate', e($hourly_rate), ['class' =>'form-control', 'placeholder' => trans('lang.ph_service_hoyrly_rate')] ) !!}
        </div>
        <div class="form-group">
            {!! Form::text( 'tagline', e($tagline), ['class' =>'form-control', 'placeholder' => trans('lang.ph_add_tagline')] ) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}
        </div>
    </fieldset>
</div>
<br>
<div class="wt-formtheme wt-jobcategories wt-tabsinfo" style="padding-top: 10px;">
    <fieldset>
        <div class="form-group">
            <span class="wt-select">
                {!! Form::select( 'voiture', ['1' => 'Oui', '0' => 'Non'], e($voiture), ['placeholder' => trans('lang.ph_permis')] ) !!}
            </span>
        </div>
    </fieldset>
</div>

<div class="wt-jobcategories wt-tabsinfo">
	<div class="wt-tabscontenttitle">
		<h2>{{ trans('lang.job_cats') }}</h2>
	</div>
	<div class="wt-divtheme wt-userform wt-userformvtwo">
		<div class="form-group">
			<span class="wt-select">
				{!! Form::select('categories[]', $categories, $cattt, array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_job_cats'))) !!}
			</span>
		</div>
	</div>
</div>