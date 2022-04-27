@extends('master')
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>ELMOUKEF.MA - Votre service de mise en relation avec les maalmines</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template_new/assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('template_new/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('template_new/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

	<style>
	   .header-area .main-nav .nav li a{
	       font-weight: 600 !important;
	   }
	   
	   li {
            line-height: 28px;
            list-style: none !important;
        }
	</style>
	
  </head>
  
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="http://elmoukef.ma" class="logo">
              <img src="{{ asset('template_new/assets/images/logo.png') }}" alt="Chain App Dev" style="margin-top: 15px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Accueil</a></li>
              <li class="scroll-to-section"><a href="#services">Devenir Maalam</a></li>
              <li class="scroll-to-section"><a href="#about">A Propos</a></li>
              @guest
              <li class="scroll-to-section"><a onclick="showmenu();" style="cursor: pointer;">Connexion</a>
              		<div class="wt-loginformhold"
									style="display: none; top: 51px; right: 0; z-index: 9; width: 350px; display: none; overflow: hidden; background: #fff; border-radius: 4px; position: absolute; line-height: normal; -webkit-box-shadow: 5px 10px 20px 0 rgb(0 0 0/ 25%); box-shadow: 5px 10px 20px 0 rgb(0 0 0/ 25%);">
									<div class="wt-loginheader">
										<span><font style="vertical-align: inherit;"><font
												style="vertical-align: inherit;"><font
													style="vertical-align: inherit;"><font
														style="vertical-align: inherit;">To log in</font></font></font></font></span>
										<a href="javascript:showmenu();"><i class="fa fa-times"></i></a>
									</div>
									<form method="POST" action="login"
										class="wt-formtheme wt-loginform do-login-form">
										@csrf
										<fieldset>
											<div class="form-group">
												<input id="email" type="email" name="email"
													placeholder="E-mail" required="required"
													autofocus="autofocus" class="form-control">
											</div>
											<div class="form-group">
												<input id="password" type="password" name="password"
													placeholder="Password" required="required"
													class="form-control">
											</div>
											<div class="wt-logininfo">
												<button type="submit" class="wt-btn do-login-button">
													<font style="vertical-align: inherit;"><font
														style="vertical-align: inherit;"><font
															style="vertical-align: inherit;"><font
																style="vertical-align: inherit;">To log in</font></font></font></font>
												</button>
												<span class="wt-checkbox"><input id="remember"
													type="checkbox" name="remember"> <label for="remember"><font
														style="vertical-align: inherit;"><font
															style="vertical-align: inherit;"><font
																style="vertical-align: inherit;"><font
																	style="vertical-align: inherit;">Remember me</font></font></font></font></label></span>
											</div>
											<div class="wt-logininfo" style="text-align: center;">
												<a href="#" style="display: inline;"><img
													src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg"
													style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;"></a>
												<a href="#" style="display: inline;"><img
													src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png"
													style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;"></a>
												<a href="/sign-in/linkedin" style="display: inline;"><img
													src="https://iconarchive.com/download/i97467/sicons/flat-shadow-social/linkedin.ico"
													style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;"></a>
											</div>
										</fieldset>
										<div class="wt-loginfooterinfo">
											<a href="password/reset"
												class="wt-forgot-password" style="display: inline;"><font
												style="vertical-align: inherit;"><font
													style="vertical-align: inherit;"><font
														style="vertical-align: inherit;"><font
															style="vertical-align: inherit;">Forgot your password?</font></font></font></font></a>
											<a href="register" style="display: inline;"><font
												style="vertical-align: inherit;"><font
													style="vertical-align: inherit;"><font
														style="vertical-align: inherit;"><font
															style="vertical-align: inherit;">Create an account</font></font></font></font></a>
										</div>
									</form>
						</div></li>
		      <li class="scroll-to-section"><a href="register">Inscription</a></li>
<!-- 		      <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fas fa-sign-in-alt"></i>Demande S.O.S</a></div></li>  -->
		      @endguest
		     						 @auth
                                        @php
                                            $user = !empty(Auth::user()) ? Auth::user() : '';
                                            $role = !empty($user) ? $user->getRoleNames()->first() : array();
                                            $profile = \App\User::find(Auth::user()->id)->profile;
                                            $user_image = !empty($profile) ? $profile->avater : '';
                                            $employer_job = \App\Job::select('status')->where('user_id', Auth::user()->id)->first();
                                            $profile_image = !empty($user_image) ? '/uploads/users/'.$user->id.'/'.$user_image : 'images/user-login.png';
                                            $payment_settings = \App\SiteManagement::getMetaValue('commision');
                                            $payment_module = !empty($payment_settings) && !empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
                                            $employer_payment_module = !empty($payment_settings) && !empty($payment_settings[0]['employer_package']) ? $payment_settings[0]['employer_package'] : 'true';
                                        @endphp
                                        <li class="scroll-to-section wt-userlogedin" onclick="showmenuuser();" style="cursor: pointer;">
                                            <figure class="wt-userimg" style="float: left;margin-right: 10px;">
                                                <img style="max-width: 40px;width: 100%;display: block;border-radius: 50px;" src="{{{ asset(Helper::getImage('uploads/users/' . Auth::user()->id, $profile->avater, '' , 'user.jpg')) }}}" alt="{{{ trans('lang.user_avatar') }}}">
                                            </figure>
                                            <div class="wt-username" style="overflow: hidden;">
												<h3 style="max-width: 130px; text-align: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 18px; margin-bottom: 3px; font-size: 16px; font-weight: 400; margin: 0 0 5px; font-style: normal; text-transform: capitalize; font-family: 'Poppins', Arial, Helvetica, sans-serif;">{{{
													Helper::getUserName(Auth::user()->id) }}}</h3>
												<span style="display: block; font-size: 13px; line-height: 15px; max-width: 130px; text-align: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{{
        										!empty(Auth::user()->profile->tagline) ?
        										str_limit(Auth::user()->profile->tagline, 26, '') :
        										Helper::getAuthRoleName() }}}</span>
											</div>
                                            @if (file_exists(resource_path('views/extend/back-end/includes/profile-menu.blade.php'))) 
                                                @include('extend.back-end.includes.profile-menu')
                                            @else 
                                                @include('back-end.includes.profile-menu')
                                            @endif
                                        </li>
                                    @endauth
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  
@section('slider')
	@yield('homeSlider')
@endsection

@section('main')
@stack('stylesheets')
<main id="wt-main" class="wt-main  wt-haslayout {{ !empty($body_class) ? $body_class : '' }}" style="margin-top:100px;">
	@if (isset($_SERVER["SERVER_NAME"]) && $_SERVER["SERVER_NAME"] === 'amentotech.com')
		<div id="wt-demo-sidebar" class="wt-demo-sidebar">
			<div id="wt-btndemotoggle" class="wt-btndemotoggle">
				<span class="menu-icon">
					<i class="lnr lnr-layers"></i>
				</span>
			</div>
			<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
				<div class="wt-demo-holder">
					<a href="{{url('page/home-page-four')}}">
						<figure class="wt-demo-img">
							<img src="{{url('images/demo-img/img-06.jpg')}}" alt="img">
							<figcaption>
								<div class="wt-demo-tags">
									<span class="wt-demo-new">New</span>
								</div>
							</figcaption>
						</figure>
					</a>
					<a href="{{url('page/home-page-five')}}">
						<figure class="wt-demo-img">
							<img src="{{url('images/demo-img/img-07.jpg')}}" alt="img">
							<figcaption>
								<div class="wt-demo-tags">
									<span class="wt-demo-new">New</span>
								</div>
							</figcaption>
						</figure>
					</a>
					<a href="{{url('/')}}">
						<figure class="wt-demo-img">
							<img src="{{url('images/demo-img/img-01.jpg')}}" alt="img">
						</figure>
					</a>
					<a href="{{url('page/home-page-two')}}">
						<figure class="wt-demo-img">
							<img src="{{url('images/demo-img/img-02.jpg')}}" alt="img">
							<figcaption>
								<div class="wt-demo-tags">
									<span class="wt-demo-new">New</span>
								</div>
							</figcaption>
						</figure>
					</a>
					<a href="{{url('page/home-page-three')}}">
						<figure class="wt-demo-img">
							<img src="{{url('images/demo-img/img-03.jpg')}}" alt="img">
							<figcaption>
								<div class="wt-demo-tags">
									<span class="wt-demo-populor">New</span>
								</div>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="wt-demo-content">
				<div class="wt-demo-heading">
					<h4>Outstanding Demos</h4>
					<p>With easy<em> ONE CLICK INSTALL</em> and fully customizable options, our demos are the best start you'll ever get!!</p>
					<div class="wt-demo-btns">
						<a href="https://codecanyon.net/item/worketic-market-place-for-freelancers/23712284" target="blank" class="wt-demo-btn">Click To LAUNCH</a>
					</div>
				</div>
			</div>
		</div>
	@endif
	@yield('content')
</main>
@endsection

@section('footer')
<footer id="newsletter" style="
    clear: both;
">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vous avez une question?</font></font></h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address ..." autocomplete="on" required="">
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font><i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></h4>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ANG 11 janvier and Mustapha El maani residence Prima CASABLANCA, </font></font></p>
            <p><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+212 (0) 7 59 61 61 62 </font></font></a></p>
            <p><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">support@elmoukef.ma</font></font></a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Navigation</font></font></h4>
            <ul>
              <li><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Accueil</font></font></a></li>
              <li><a href="http://elmoukef.ma/register"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Devenir Maalam</font></font></a></li>
            
              </ul>
           
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A Propos</font></font></h4>
            <ul>
              <li><a href="{{route('privacyPolicy')}}" target="_blanck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CGU</font></font></a></li>
              <li><a href="{{route('cgv')}}" target="_blanck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CGV</font></font></a></li>
              <li><a href="{{route('mentionsLegals')}}" target="_blanck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mentions Legals</font></font></a></li>
              <li><a href="{{route('traitement-des-donnees-personnelles')}}" target="_blanck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Traitement des données personnelles</font></font></a></li>
              <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conact</font></font></a></li>
            </ul>
            <ul>
              
          </ul></div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <div class="logo">
              <img src="https://elmoukef.ma/template_new/assets/images/logo.png" alt="">
            </div>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nous vous proposons un concept de vente de services entre particuliers ou professionnels.
</font></font></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Copyright © 2022 </font></font><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elmoukef.ma.</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> All rights reserved. 
            </font></font></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection

@push('scripts')

<script>
	function showmenu(){
		$("div[class=wt-loginformhold]").toggle();
	}

	function showmenuuser(){
		$("[id=wt-profiledashboard]").toggle();
	}
  </script>
  
<script src="{{ asset('js/jquery.dd.min.js') }}"></script>	
<script>
	jQuery('.wt-btndemotoggle').on('click', function() {
		var _this = jQuery(this);
		_this.parents('.wt-demo-sidebar').toggleClass('wt-demoshow');
	});
	jQuery(document).ready(function(e) {
		try {
			jQuery("body select.locations").msDropDown();
		} catch(e) {
			alert(e.message);
		}
	});
</script>
@stack('scripts')
@endpush
