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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
<body class ="uk-height-1-1 uk-width-1-1">
    <div id="register-card" class="uk-card uk-card-default uk-height-large uk-card-body uk-card-large uk-padding-remove uk-margin-small-top uk-margin-small-bottom uk-width-3-4@m uk-align-center" uk-grid>
    <!-- <div class="uk-inline"> -->
        <div class="uk-position-left">
            <h3 id="signup-text" class="uk-card-title uk-margin-medium-top">
                Sign Up
            </h3>
            <form action="" method="">
                <fieldset id="field-form" class="uk-fieldset uk-width-large uk-padding-small">
                    <div class="uk-margin">
                        <input class="uk-input" name="name" type="text" placeholder="Name">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" name="password" type="password" placeholder="Password">
                    </div>
                    <button class="uk-button uk-button-primary uk-width-1-3 uk-padding-remove uk-align-center uk-margin-small">Sign Up</button>
                        <p class="uk-text-light uk-text-center">
                            By clicking "Sign up" you are agree with our 
                            <a href="">Terms & Condition</a>
                        </p>
                </fieldset>
            </form>
        </div>
            <div class="uk-position-right">
                <div id="color-overlay" >
                    <h2 class="uk-text-bold uk-light">Welcome Back!</h2>
                </div>
                <!-- <img class="" src="/images/diagnose.png" width="400" height="400" alt=""> -->
            </div>
        <!-- </div> -->
    </div>
    
    <!-- uikit js -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
