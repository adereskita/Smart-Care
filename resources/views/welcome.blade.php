<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tel-U Smar Care</title>

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
            <div class="uk-navbar-left uk-margin-medium-left">
                <div class="uk-navbar-nav uk-margin-large-left">
                    <a id="tel-u-logo" class="uk-link-heading" style="color:#ffffff" href="#">
                        <img class="uk-margin-remove-right" src="images/smart-care-logo.svg" width=40 height=40 alt="" uk-svg>
                        <span id="nav-app-name" class="uk-visible@m">
                            Smart Care
                        </span>
                    </a>
                </div>
            </div>
            <div class="uk-navbar-right uk-margin-medium-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-nav"><a style="color:#ffffff" href="#">Home</a></li>
                    <li><a style="color:#ffffff" href="#">Feature</a></li>
                </ul>
                <div class="uk-navbar-item uk-visible@m">
                    <a id="login" class="uk-button uk-button-default tm-button-default uk-icon" 
                    style="color:#ffffff; border-radius:15px " href="#">Login</a>
                </div>
            </div>
         </div> 
<!-- sticky navbar -->
    </div>

<div id="home" class="uk-container uk-background-cover uk-position-top uk-height-large uk-width-1-1 uk-padding-large" style="background-image: linear-gradient(#6BAFB1, #B2DCDF, #F9F5FC); height:42em">

    <!-- Welcome Page -->
    <!-- <div class="uk-container uk-margin-medium-left uk-margin-medium-top"> -->
    <div class="uk-container uk-margin-medium-left uk-margin-small-top uk-grid-collapse uk-child-width-expand@s" uk-grid>
        <div>
        <h2 id="heading-text" class="uk-margin-remove-bottom uk-margin-large-top" style="color:#FFFFFF">
            Now it's easy <br>
            to daily check up <br>
            your health
        </h2>
            <p class="uk-margin-small-top" style="color:#ffffff; font-size:14pt">
            with smart care.
            </p>
            <a id="sign-in" class="uk-button uk-button-default tm-button-default uk-icon" 
                    style="color:#ffffff; border-radius:15px " href="#">
                    Sign up
            </a>
        </div>
        
    </div>
        
<!-- card view -->
    <div class="uk-child-width-1-3@m uk-child-width-expand@s uk-grid-large uk-grid-match uk-margin-small-left" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-width-2-3@m uk-height-medium">
                <img class="uk-margin-remove-right" src="images/smart-care-logo.svg" width=48 height=48 alt="" uk-svg>
                <h3 class="uk-card-title uk-text-center">
                    Health Diagnose
                </h3>
                <p class="uk-text-muted">
                    We take good care of you
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-width-2-3@m uk-height-small">
                <h3 class="uk-card-title uk-text-center">
                    Call Service
                </h3>
                <p class="uk-text-muted">
                    Take initiative to call
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-width-2-3@m uk-height-small">
                <h3 class="uk-card-title uk-text-center">
                    Health Record
                    </h3>
                <p class="uk-text-muted">
                    Intellegent collecting health data
                </p>
            </div>
        </div>
    </div>
    
<!-- end of home -->
</div>
    <!-- uikit js -->
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
