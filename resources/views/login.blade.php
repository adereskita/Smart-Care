<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login |Smart Care</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->


    </head>
<body>
    <!-- ALERT -->
    @if (session()->has('error'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ session()->get('error') }}</p>
    </div>
    @endif

    <div id="register-card" class="uk-card uk-card-default uk-height-large uk-card-body uk-card-large uk-padding-remove uk-margin-medium-top uk-margin-small-bottom uk-width-3-4@m uk-align-center" uk-grid>
    <!-- <div class="uk-inline"> -->
        <div class="uk-position-left">
            <h3 id="signup-text" class="uk-card-title uk-margin-medium-top uk-margin-medium-left uk-margin-remove-bottom">
                Login
            </h3>
            <form action="./login/success" method="POST">
                {{ csrf_field() }}
                <fieldset id="field-form" class="uk-fieldset uk-width-large uk-padding">
                    <!-- EMAIL -->
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-large">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                            <input id="emails" class="uk-input" name="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <!-- PASSWORD -->
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-large">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                            <input id="passwords" class="uk-input" name="password" type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <a href="#" class="uk-text-light uk-text-center">
                            forgot your password?
                        </a>
                    </div>

                    <button id="btn-log" class="uk-button uk-button-primary uk-width-1-3 uk-padding-remove uk-align-center uk-margin-small">Login</button>

                </fieldset>
            </form>
        </div>
            <div id="right-card" class="uk-position-right uk-flex uk-flex-center uk-flex-middle uk-flex-wrap">
                <div id="color-overlay">

                    <h2 class="uk-text-center uk-text-bold uk-margin-xlarge-top">
                        Hello !
                    </h2>
                    <p class="uk-text-center uk-text-light">
                        Create your account here <br>
                        to start a healty journey with us !
                    </p>
                    <a id="btn-login" href="/register" class="uk-button uk-button-default uk-align-center uk-width-small">
                        Sign Up
                    </a>
                </div>
                <img class="uk-position-top-right uk-margin-right uk-margin-top" src="/images/smart-care-logo.png" width=32 height=32 alt="">
            </div>
        <!-- </div> -->
    </div>

    <!-- uikit js -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
