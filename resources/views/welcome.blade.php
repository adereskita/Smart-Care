<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home | Tel-U Smart Care</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body class ="uk-height-1-1 uk-width-1-1">

<!-- NAVBAR -->
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <div id="navbar-sticky" class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-margin-small-left">
                <div class="uk-navbar-nav uk-margin-large-left">
                    <a id="tel-u-logo" class="uk-link-heading uk-text-light" style="color:#ffffff" href="#">
                        <img class="uk-margin-remove-right" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg>
                        <span id="nav-app-name" class="uk-visible@m">
                            Smart Care
                        </span>
                    </a>
                </div>
            </div>
            <div class="uk-navbar-right uk-margin-large-right">
                <ul id="nav-item" class="uk-navbar-nav uk-text-light">
                    <li class="uk-nav"><a style="color:#ffffff" href="#heading-line" uk-scroll>Home</a></li>
                    <li class="uk-nav"><a style="color:#ffffff" href="#feature-container" uk-scroll>Feature</a></li>
                    <li class="uk-nav"><a style="color:#ffffff" href="#about-container" uk-scroll>About</a></li>
                    <li class="uk-nav"><a style="color:#ffffff" href="#contact-head" uk-scroll>Contact Us</a></li>
                </ul>
                <div class="uk-navbar-item uk-visible@m">
                    <a id="login" class="uk-button uk-button-default tm-button-default uk-icon uk-text-light" 
                    style="color:#ffffff; border-radius:15px " href="#">Login</a>
                </div>
            </div>
         </div> 
<!-- sticky navbar -->
    </div>

<div id="home" class="uk-container uk-background-cover uk-position-top uk-height-large uk-width-1-1 uk-padding-large">

    <!-- Welcome Page -->
    <!-- <div class="uk-container uk-margin-medium-left uk-margin-medium-top"> -->
    <div class="uk-container uk-margin-medium-left uk-margin-small-top uk-grid-collapse uk-child-width-expand@s" uk-grid>
            <div class="" id="heading-line">
                <h2 id="heading-text" class="uk-margin-remove-bottom uk-margin-large-top uk-margin-large-left uk-animation-fade" style="color:#FFFFFF">
                    Now it's easy <br>
                    to daily check up <br>
                    your health
                </h2>
                    <p class="uk-margin-small-top uk-margin-large-left uk-text-light" style="color:#ffffff; font-size:14pt">
                    with smart care.
                    </p>
                    <a id="sign-in" class="uk-text-light uk-button uk-button-default tm-button-default uk-icon uk-margin-large-left" 
                            style="color:#ffffff; border-radius:15px " href="/register">
                            Sign up
                    </a>
            </div>
    </div>
        <div id="heading-img" class="uk-position-right uk-margin-large-right">
            <img id="heading-image" class="uk-margin-large-right uk-margin-medium-top uk-animation-slide-top-small" src="images/undraw_medicine_home.svg" width=520 height=520 alt="" uk-svg>
        </div>
        
<!-- card view -->
    <div class="uk-child-width-1-3@m uk-child-width-expand@s uk-grid-large uk-grid-match uk-margin-small-left uk-margin-xlarge-top" uk-grid>
        <div id="card-items" class="uk-margin-large-top">
            <div class="uk-card uk-card-default uk-card-body uk-width-5-6@m uk-height-medium uk-align-center">
                <div class="uk-position-center">
                    <img class="uk-margin-small-right uk-align-center uk-margin-small-bottom uk-margin-small-left" src="images/diagnose.png" width=160 height=160 alt="" uk-svg>
                    <h3 class="uk-card-title uk-text-center uk-margin-remove-bottom uk-margin-small-top">
                        Health Diagnose
                    </h3>
                    <p class="uk-text-muted uk-margin-small-top uk-align-center uk-text-center">
                        We take good care of you
                    </p>
                </div>    
            </div>
        </div>
        <div id="card-items" class="uk-margin-large-top">
            <div class="uk-card uk-card-default uk-card-body uk-width-5-6@m uk-height-medium uk-align-center">
                <div class="uk-position-center">
                    <img class="uk-margin-small-right uk-align-center uk-margin-small-bottom uk-margin-remove-left" src="images/undraw_calling.png" width=200 height=200 alt="" uk-svg>
                    <h3 class="uk-card-title uk-text-center uk-margin-remove-bottom uk-margin-small-top uk-align-center">
                        Call Service
                    </h3>
                    <p class="uk-text-muted uk-margin-small-top uk-align-center uk-text-center">
                        Take initiative to call
                    </p>
                </div>
            </div>
        </div>
        <div id="card-items" class="uk-margin-large-top">
            <div class="uk-card uk-card-default uk-card-body uk-width-5-6@m uk-height-medium uk-align-center">
                <div class="uk-position-center">
                    <img class="uk-margin-small-right uk-align-center uk-margin-small-bottom uk-margin-medium-left" src="images/health-record.png" width=120 height=120 alt="" uk-svg>
                    <h3 class="uk-card-title uk-text-center uk-margin-remove-bottom uk-margin-small-top uk-align-center">
                        Health Record
                    </h3>
                    <p class="uk-text-muted uk-margin-small-top uk-align-center uk-text-center">
                        Intellegent collecting health data
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="feature-container" class="uk-container-expand uk-margin-max-large">
        <div class="uk-margin-large-top uk-position-relative">
            <div id="feature-headlines" class="uk-position-top-center uk-margin-top">
                <span class="uk-position-top-center" uk-icon="icon: info; ratio: 1.5"></span>
                <h3 id="feature-headline" class="uk-text-lead uk-text-normal uk-text-center uk-margin-medium-top uk-margin-medium-bottom uk-padding-small">
                    Feature
                </h3>
            </div>
        </div>
        <div class="uk-margin-large-top uk-panel">
            <div>
                <img id="feature-image" class="uk-align-left uk-margin-large-left uk-margin-xlarge-top uk-padding-small" src="images/feature.png" alt="">
            </div>
            <div id="feature-text" class="uk-margin-xlarge-left uk-margin-medium-top uk-padding">
                <p class="uk-margin-xlarge-top uk-text-lead uk-text-light">Reduce Operational Risk</p>
                <p class="uk-margin-top uk-text-lead uk-text-light">Check Your Blood Pressure Anytime</p>
                <p class="uk-margin-top uk-text-lead uk-text-light">Send Your Health Record to Doctor</p>
                <p class="uk-margin-top uk-text-lead uk-text-light">Diagnose Your Symptomps Automaticaly</p>
            </div>
        </div>
    </div>
    <div id="about-contain" class="uk-container uk-margin-xlarge-top">
        <span id="about-head">
        <p id="about-headline" class="uk-text-lead uk-text-center uk-margin-medium-bottom uk-padding-small">
            About Us
        </p>
        </span>
        
        <div id="about-container" class="uk-container uk-height-medium">
            <img class="uk-align-left uk-margin-xlarge-left uk-margin-small-top" src="images/smart-care-logo.svg" width=160 height=160 alt="">
            <p id="about-text" class="uk-text-lead uk-text-light uk-text-justify uk-padding-small uk-margin-meidum-top">
            A web application that can make it easy to check blood pressure. 
            With health records, you can easily stay on track. 
            You also can send the record to the doctor.    
            </p>
        </div>
    </div>

    <a href="#" class="uk-margin-bottom uk-margin-medium-right uk-align-right" uk-totop uk-scroll></a>

    <div id="contact-head" class="uk-container uk-margin-medium-top uk-width-1-1 uk-height-small">
        <div class="uk-position-absolute">
            <h2 class="uk-text-lead uk-text-light uk-margin-medium-top uk-margin-remove-bottom uk-margin-left">
                CONTACT US
            </h2>
            <p class="uk-text-light uk-margin-remove-top uk-margin-left uk-text-uppercase">
                Contact Information
            </p>
        </div>
        <div id="contact-numb" class="uk-margin-large-right uk-align-right uk-margin-medium-top">
            <span id="phone-icon" class="" uk-icon="icon: receiver; ratio: 2"></span>
            <p class="uk-text-light uk-text-lead uk-align-right" style="color:#ffffff;">
                +6281959621425
            </p>
        </div>
        
    </div>
    <footer class="uk-margin-medium-top uk-text-center">
        Copyright, Smart Care 2019
    </footer>
<!-- end of home or body -->
</div>
    <!-- uikit js -->
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
