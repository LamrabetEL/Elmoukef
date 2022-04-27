<!DOCTYPE html>
<html lang="en">

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
	    /*! CSS Used from: http://elmoukef.ma/vendor/bootstrap/css/bootstrap.min.css */
        *,::after,::before{box-sizing:border-box;}
        a{color:#0d6efd;text-decoration:underline;}
        a:hover{color:#0a58ca;}
        img{vertical-align:middle;}
        label{display:inline-block;}
        button{border-radius:0;}
        button:focus:not(:focus-visible){outline:0;}
        button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
        button{text-transform:none;}
        [type=submit],button{-webkit-appearance:button;}
        ::-moz-focus-inner{padding:0;border-style:none;}
        fieldset{min-width:0;padding:0;margin:0;border:0;}
        .form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
        @media (prefers-reduced-motion:reduce){
        .form-control{transition:none;}
        }
        .form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);}
        .form-control::-moz-placeholder{color:#6c757d;opacity:1;}
        .form-control::placeholder{color:#6c757d;opacity:1;}
        .form-control:disabled{background-color:#e9ecef;opacity:1;}
        /*! CSS Used from: https://use.fontawesome.com/releases/v5.8.1/css/all.css */
        .fa{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
        .fa-times:before{content:"\f00d";}
        .fa{font-family:"Font Awesome 5 Free";}
        .fa{font-weight:900;}
        /*! CSS Used from: http://elmoukef.ma/css/templatemo-chain-app-dev.css */
        a:hover,a:focus,a:active{color:#4cbdc4;}
        .wt-btn:hover,.wt-btn{background:#4cbdc4;}
        input:focus,.form-control:focus{border-color:#4cbdc4;}
        /*! CSS Used from: http://elmoukef.ma/css/animated.css */
        a:hover,a:focus,a:active{color:#4cbdc4;}
        .wt-btn:hover,.wt-btn{background:#4cbdc4;}
        input:focus,.form-control:focus{border-color:#4cbdc4;}
        /*! CSS Used from: http://elmoukef.ma/css/owl.css */
        a:hover,a:focus,a:active{color:#4cbdc4;}
        .wt-btn:hover,.wt-btn{background:#4cbdc4;}
        input:focus,.form-control:focus{border-color:#4cbdc4;}
        /*! CSS Used from: http://elmoukef.ma/css/app.css */
        *,:after,:before{box-sizing:border-box;}
        a{color:#3490dc;text-decoration:none;background-color:transparent;}
        a:hover{color:#1d68a7;text-decoration:underline;}
        img{border-style:none;}
        img{vertical-align:middle;}
        label{display:inline-block;margin-bottom:.5rem;}
        button{border-radius:0;}
        button:focus:not(:focus-visible){outline:0;}
        button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
        button,input{overflow:visible;}
        button{text-transform:none;}
        [type=submit],button{-webkit-appearance:button;}
        [type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
        input[type=checkbox]{box-sizing:border-box;padding:0;}
        fieldset{min-width:0;padding:0;margin:0;border:0;}
        .form-control{display:block;width:100%;height:calc(1.6em + .75rem + 2px);padding:.375rem .75rem;font-size:.9rem;font-weight:400;line-height:1.6;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
        @media (prefers-reduced-motion:reduce){
        .form-control{transition:none;}
        }
        .form-control::-ms-expand{background-color:transparent;border:0;}
        .form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057;}
        .form-control:focus{color:#495057;background-color:#fff;border-color:#a1cbef;outline:0;box-shadow:0 0 0 .2rem rgba(52,144,220,.25);}
        .form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
        .form-control::-moz-placeholder{color:#6c757d;opacity:1;}
        .form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
        .form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
        .form-control::placeholder{color:#6c757d;opacity:1;}
        .form-control:disabled{background-color:#e9ecef;opacity:1;}
        .form-group{margin-bottom:1rem;}
        @media print{
        *,:after,:before{text-shadow:none!important;box-shadow:none!important;}
        a:not(.btn){text-decoration:underline;}
        img{page-break-inside:avoid;}
        }
        /*! CSS Used from: http://elmoukef.ma/css/normalize-min.css */
        a{background-color:transparent;}
        a:active,a:hover{outline:0;}
        img{border:0;}
        button,input{color:inherit;font:inherit;margin:0;}
        button{overflow:visible;}
        button{text-transform:none;}
        button{-webkit-appearance:button;cursor:pointer;}
        button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
        input{line-height:normal;}
        input[type=checkbox]{box-sizing:border-box;padding:0;}
        fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em;}
        /*! CSS Used from: http://elmoukef.ma/css/fontawesome/fontawesome-all.min.css */
        .fa{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
        .fa-times:before{content:"\f00d";}
        .fa{font-family:Font Awesome\ 5 Free;}
        .fa{font-weight:900;}
        /*! CSS Used from: http://elmoukef.ma/css/font-awesome.min.css */
        .fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
        .fa-times:before{content:"\f00d";}
        /*! CSS Used from: http://elmoukef.ma/css/main.css */
        *{margin:0px;padding:0px;}
        a{text-decoration:none;}
        a:hover,a:focus,a:active{outline:none;text-decoration:none;}
        img{height:auto;max-width:100%;}
        button{border:none;}
        .form-control,input[type="password"],input[type="email"]{color:#999;outline:none;height:50px;background:#fff;font-size:14px;-webkit-box-shadow:none;box-shadow:none;line-height:18px;padding:10px 20px;border-radius:4px;display:inline-block;vertical-align:middle;border:1px solid #ddd;text-transform:inherit;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
        .form-control::-webkit-input-placeholder{color:#999;}
        .form-control:-moz-placeholder{color:#999;}
        .form-control::-moz-placeholder{color:#999;}
        .form-control:-ms-input-placeholder{color:#999;}
        .form-control::-ms-input-placeholder{color:#999;}
        input:focus,.form-control:focus{color:#999;border-color:#ddd;-webkit-box-shadow:none!important;box-shadow:none!important;}
        .form-group{width:100%;float:left;margin:0 0 20px;}
        label{color:#666;display:block;font-weight:400;margin-bottom:10px;}
        .wt-checkbox,.wt-checkbox label{margin:0;width:100%;float:left;position:relative;}
        .wt-checkbox label{cursor:pointer;display:block;padding:0 0 0 20px;}
        .wt-checkbox input[type=checkbox]{display:none;}
        .wt-checkbox input[type=checkbox] + label:before{top:4px;left:0;color:#373542;font-size:14px;line-height:14px;content:'\f00c';position:absolute;font-family:'Font Awesome 5 Free';}
        .wt-checkbox input[type=checkbox]:checked + label:before{content:'\f00c';}
        .wt-checkbox input[type=checkbox] + label{color:#767676;font-size:14px;font-weight:500;line-height:20px;padding:0 0 0 30px;text-transform:capitalize;}
        .wt-checkbox input[type=checkbox] + label{line-height:14px;}
        .wt-checkbox input[type=checkbox] + label:before{top:1px;color:#999;}
        .wt-checkbox input[type=checkbox]:checked + label:before{content:'';}
        .wt-checkbox input[type=checkbox] + label:before{top:0;content:'';width:20px;height:20px;background:#fff;line-height:18px;border-radius:4px;border:1px solid #bbb;}
        .wt-checkbox input[type=checkbox] + label:after{top:0;left:0;opacity:0;width:20px;height:20px;color:#00cc8d;font-size:10px;content:'\f00c';line-height:20px;position:absolute;text-align:center;visibility:hidden;font-family:'FontAwesome';}
        .wt-checkbox input[type=checkbox]:checked + label:after{opacity:1;visibility:visible;}
        .wt-checkbox input[type=checkbox] + label:before{width:14px;height:14px;border-radius:0;}
        .wt-checkbox input[type=checkbox] + label:after{width:auto;height:auto;line-height:15px;content:'\f14a';font-size:16px;}
        .wt-checkbox input[type=checkbox]:checked + label:before{border-color:#00cc8d;}
        .wt-btn{color:#fff;padding:0 50px;background:#fff;position:relative;text-align:center;border-radius:5px;display:inline-block;vertical-align:middle;text-transform:uppercase;font:700 13px/50px 'Poppins', Arial, Helvetica, sans-serif;}
        .wt-btn[type=submit]{border:0!important;}
        .wt-btn:hover{-webkit-box-shadow:10px 10px 25px 0 rgba(0,0,0,0.25);box-shadow:10px 10px 25px 0 rgba(0,0,0,0.25);}
        .wt-btn:hover,.wt-btn:focus{color:#fff;}
        .wt-formtheme{width:100%;float:left;}
        .wt-formtheme fieldset{border:0;margin:0;padding:0;width:100%;float:left;position:relative;}
        .wt-loginformhold{top:51px;right:0;z-index:9;width:350px;display:none;overflow:hidden;background:#fff;border-radius:4px;position:absolute;line-height:normal;-webkit-box-shadow:5px 10px 20px 0 rgba(0,0,0,0.25);box-shadow:5px 10px 20px 0 rgba(0,0,0,0.25);}
        .wt-loginheader{float:left;width:100%;padding:20px 20px 0;}
        .wt-loginheader span{color:#323232;font-size:16px;line-height:16px;display:inline-block;vertical-align:middle;}
        .wt-loginheader a{color:#ddd;float:right;font-size:14px;line-height:16px;}
        .wt-logininfo{float:left;width:100%;}
        .wt-loginform fieldset{padding:20px;}
        .wt-loginform fieldset .form-group{margin:0 0 10px;}
        .wt-logininfo .wt-btn{padding:0 30px;line-height:36px;float:left;}
        .wt-logininfo .wt-checkbox{width:auto;margin-left:20px;padding:11px 0;}
        .wt-logininfo .wt-checkbox label{font-size:14px;color:#767676;line-height:36px;}
        .wt-loginfooterinfo{width:100%;float:left;background:#f7f7f7;}
        .wt-loginfooterinfo a{width:50%;float:left;color:#55acee;text-align:center;position:relative;line-height:50px;}
        .wt-loginfooterinfo a + a:before{top:50%;left:0;content:'';width:2px;height:30px;background:#ddd;position:absolute;margin:-15px 0 0;}
        a:focus{text-decoration:none!important;}
        /*! CSS Used from: http://elmoukef.ma/css/responsive.css */
        @media (max-width:480px){
        .wt-loginformhold{right:-100px;}
        .wt-loginformhold{width:300px;}
        }
        /*! CSS Used from: http://elmoukef.ma/css/color.css */
        a,a:hover,a:focus,a:active{color:#ff5851;}
        .wt-btn:hover,.wt-btn{background:#ff5851;}
        input:focus,.form-control:focus{border-color:#ff5851;}
        /*! CSS Used from: Embedded */
        a,a:hover,a:focus,a:active{color:#4cbdc4;}
        .wt-btn:hover,.wt-btn{background:#4cbdc4;}
        input:focus,.form-control:focus{border-color:#4cbdc4;}
        /*! CSS Used from: http://elmoukef.ma/css/transitions.css */
        *:after,*:before,a,.wt-btn{-webkit-transition:all 300ms ease-in-out;-moz-transition:all 300ms ease-in-out;-ms-transition:all 300ms ease-in-out;-o-transition:all 300ms ease-in-out;transition:all 300ms ease-in-out;}
        /*! CSS Used fontfaces */
        @font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display:auto;src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot);src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.svg#fontawesome) format("svg");}
        @font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:auto;src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot);src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.svg#fontawesome) format("svg");}
        @font-face{font-family:'FontAwesome';src:url('http://elmoukef.ma/fonts/fontawesome-webfont.eot?v=4.7.0');src:url('http://elmoukef.ma/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'),url('http://elmoukef.ma/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('http://elmoukef.ma/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('http://elmoukef.ma/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('http://elmoukef.ma/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');unicode-range:U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');unicode-range:U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');unicode-range:U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');unicode-range:U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
        @font-face{font-family:'Poppins';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
	
	.header-area .main-nav .nav li:last-child a:hover, .background-header .main-nav .nav li:last-child a:hover, .header-area .main-nav .nav li:nth-child(6) a:hover, .background-header .main-nav .nav li:nth-child(6) a:hover {
        color: gray !important;
    }

	   .wt-userlogedin{display: block;}
.wt-userlogedin .wt-userimg{
	float:left;
	margin-right:10px;
}
.wt-username{overflow:hidden;}
.wt-username h3{
	font-size:16px;
	font-weight:400;
	margin: 0 0 5px;
	line-height:16px;
}
.wt-username span{
	display:block;
	font-size:13px;
	line-height:15px;
}
	</style>
	
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="http://elmoukef.ma" class="logo">
              <img src="{{ asset('template_new/assets/images/logo.png') }}" alt="Chain App Dev">
            </a>
            <ul class="nav">
              <li class="scroll-to-section">
                <a href="index.php" class="active">Accueil @extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.mastermine') </a>
              </li>
              <li class="scroll-to-section">
                <a href="http://elmoukef.ma/register">Devenir Maalam</a>
              </li>
              @guest
              <li class="scroll-to-section"><a onclick="showmenu();" style="cursor: pointer;">Connexion</a>
                <div class="wt-loginformhold"
                style="display: none; top: 51px; right: 0; z-index: 9; width: 350px; display: none; overflow: hidden; background: #fff; border-radius: 4px; position: absolute; line-height: normal; -webkit-box-shadow: 5px 10px 20px 0 rgb(0 0 0/ 25%); box-shadow: 5px 10px 20px 0 rgb(0 0 0/ 25%);">
                  <div class="wt-loginheader">
                    <span><font style="vertical-align: inherit;"><font
                        style="vertical-align: inherit;"><font
                          style="vertical-align: inherit;"><font
                            style="vertical-align: inherit;">To log in</font></font></font></font>
                    </span>
                      <a href="javascript:showmenu();"><i class="fa fa-times"></i></a>
                  </div>
                  <form method="POST" action="login" class="wt-formtheme wt-loginform do-login-form">
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
                </div>
              </li>
              <li class="scroll-to-section">
                <a href="register">Inscription</a>
              </li>
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
                        Helper::getUserName(Auth::user()->id) }}}
                      </h3>
                      <span style="display: block; font-size: 13px; line-height: 15px; max-width: 130px; text-align: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{{
                          !empty(Auth::user()->profile->tagline) ?
                          str_limit(Auth::user()->profile->tagline, 26, '') :
                          Helper::getAuthRoleName() }}}
                      </span>
                      @if (file_exists(resource_path('views/extend/back-end/includes/profile-menu.blade.php'))) 
                          @include('extend.back-end.includes.profile-menu')
                      @else 
                          @include('back-end.includes.profile-menu')
                      @endif
                  </div>
                  
                </li>
              @endauth
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connexion avec Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connexion avec Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Ou utilisez votre adresse e-mail </span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Inscription</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email /Login</label>
                <input type="text" />
                <br />

                <label>Mot de passe</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Se souvenir de moi sur cet ordinateur</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Retour</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Mot de passe oubli�?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Nom</label>
                <input type="text" />
                <br />

                <label>Addresse Email</label>
                <input type="email" />
                <br />

                <label>Mot de passe</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Envoyez-moi des mises � jour occasionnelles par e-mail</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Retour</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Inscription</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>CONFIEZ VOS TRAVAUX A NOS BRICOLEURS</h2>
                    
                  </div>
                  <div class="col-lg-12">
                    
                    <div class="white-button scroll-to-section">
                      <a href="#contact">POSTER UNE DEMANDE DE TRAVAUX  <i class="fab fa-bullhorn"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('template_new/assets/images/slider-dec.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>POSTEZ <em>VOTRE DEMANDE</em></h4>
            <img src="{{ asset('template_new/assets/images/heading-line-dec.png') }}" alt="">          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>Electricité</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>plomberie</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>Pose cuisine/meuble</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>revêtement mur</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
      </div>
    </div>


<br>
        <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item cinq-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>revêtement sol</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item six-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>serrurerie</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item sept-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>climatisation</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item huit-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>bricolage</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
      </div>
    </div>
<br>

        <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item neuf-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>jardinage</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item dix-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>réparation électroménager</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item onz-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>parabole/TV</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item douz-service">
            <div class="icon"></div>
            <a href="{{route('redireCategorie')}}" style="color:#212529;"><h4>Aluminium</h4></a>
            <div class="text-button">
            </div>
          </div>
        </div>
      </div>
    </div>




  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Comment   <em>ça</em> marche?</h4>
            <img src="{{ asset('template_new/assets/images/heading-line-dec.png') }}" alt="">
            
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">1. Décrivez votre besoin et postez</a></h4>
              </div>
              <div class="box-item">
                <h4><a href="#">2. Les jobbers disponibles et compétents vous proposent leurs services</a></h4>
              </div>
               <div class="box-item">
                <h4><a href="#">3. Evaluez et réglez votre jobber une fois le job terminé</a></h4>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="gradient-button">
                <a href="#">Postez votre demande</a>
              </div>
                          </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
          <!--  <img src="assets/images/about-right-dec.png" alt="">-->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/3MmaodBR0Mk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Nos  <em>Derniers</em> Avis</h4>
            <img src="{{ asset('template_new/assets/images/heading-line-dec.png') }}" alt="">
           
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    
                      @foreach ($platformReview as $key => $rev)
                      @if($key == 0)
                        <div class="active" >
                      @else
                      <div>
                      @endIf
                          <div class="thumb">
                          <div class="row">
                            <div class="col-lg-4 col-sm-4 col-12">
                              <h4>{{$rev->user->first_name}}</h4>
                              <span class="date">{{ \Carbon\Carbon::parse($rev->created_at)->format('d M, Y')}}</span>
                            </div>
                            <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                              <span class="category">{{$rev->category->title}}</span>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-12">
                            @for ($i = 0; $i < $rev->rating; $i++)
                              <i class="fa fa-star"></i>
                            @endfor
                                <span class="rating">{{$rev->rating}}</span>
                            </div>
                          </div>
                        </div>
                        </div>
                      @endforeach
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                  @foreach ($platformReview as $key => $rev)
                     @if($key == 0)
                        <li class="active" >
                      @else
                      <li>
                      @endIf
                     <div>
                       <div class="thumb" >
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="{{ asset('template_new/assets/images/quote.png') }}" alt="">
                                <p>{{ $rev->review }}</p>
                              </div>
                              <div class="down-content">
                                <img src="{{ asset('template_new/assets/images/client-image.jpg') }}" alt="">
                                <div class="right-content">
                                  <h4>{{ $rev->user->first_name }}</h4>
                                  <span></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  @endforeach
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<br><br>
  <div id="about" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Qu'est ce que le <em>Maalam</em> ?</h4>
            <img src="{{ asset('template_new/assets/images/heading-line-dec.png') }}" alt="">
            
          </div>
          <div class="row">
            <p>Nous vous proposons un concept de vente de services entre particuliers ou professionnels. 
Vous (l’annonceur) publiez une annonce à la recherche d’un Maalam pour vous aider.
Le Maalam prend connaissance de votre annonce et vous propose un devis chiffré.
Ainsi vous recevez plusieurs devis de différents Maalam dans votre région avec leurs profils, leurs notations et leurs historiques de travaux effectué. Vous n’avez plus qu’à choisir celui qui vous convient.
Nos Maalam sont garantis certifiés et vérifiés.
</p>
          </div>
        </div>
        <div class="col-lg-6">
         <img src="{{ asset('template_new/assets/images/a1.jpg') }}" width="485" height="454">
        </div>
      </div>
    </div>
  </div>

<br><br>


  <div id="about" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <img src="{{ asset('template_new/assets/images/a2.jpg') }}" width="485" height="454">
        </div>
        <div class="col-lg-6">
          
         <div class="section-heading">
            <h4>EL MOUKEF la plateforme dédiée à vos  <em>travaux</em> </h4>
            <img src="{{ asset('template_new/assets/images/heading-line-dec.png') }}" alt="">
            <p>A travers la plateforme El moukef, c’est le marché des travaux qui fait sa révolution !
Le principe est simple : mettre en relation un « annonceur » (vous) ayant besoin d’une personne compétente et vérifiée afin de faire réaliser ses travaux et un « Maalam » ayant les compétences et la capacité de réaliser ces travaux.
Notre système de notation de « l’annonceur » et du « Maalam » nous permettent de vous garantir le sérieux de tous nos membres.
</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>


<br><br>
  <div id="about" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Maalam chez <em>Elmoukef,</em> vous avez tout à y gagné !</h4>
            <img src="{{ asset('template_new/assets/images/heading-line-dec.png') }}" alt="">
            
          </div>
          <div class="row">
            <p>Etre Maalam chez El moukef vous permet d’avoir des notifications à chaque fois qu’un annonceur poste une demande de travaux dans votre secteur et en rapport avec vos compétences. Cela vous permet d’être au courant de toutes les offres de votre ville et de ne rien rater !
L’inscription sur EL moukef est gratuite. 
</p>
          </div>
        </div>
        <div class="col-lg-6">
         <img src="{{ asset('template_new/assets/images/a3.jpg') }}" width="485" height="454">
        </div>
      </div>
    </div>
  </div>



 

  <script>
	function showmenu(){
		$("div[class=wt-loginformhold]").toggle();
	}

	function showmenuuser(){
		$("[id=wt-profiledashboard]").toggle();
	}
  </script>
  <!-- Scripts -->
  <script src="{{ asset('template_new/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template_new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template_new/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('template_new/assets/js/animation.js') }}"></script>
  <script src="{{ asset('template_new/assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('template_new/assets/js/popup.js') }}"></script>
  <script src="{{ asset('template_new/assets/js/custom.js') }}"></script>
</body>
</html>