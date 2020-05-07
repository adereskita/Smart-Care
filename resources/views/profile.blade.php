<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title></title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Profile | Smart Care</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body class ="uk-height-1-1 uk-width-1-1">
<section>
    <nav id="navbar" class="uk-width-1-6@m uk-height-1-1@m uk-flex-center@m uk-flex-left@l">
        <div class="uk-nav uk-nav-default">
            <a class="uk-link-reset" href="./dashboard">
                <img class="uk-margin uk-margin-left uk-margin-top" src="images/smart-care-logo.png" width=30 height=30 alt="">
                <span class="uk-text-large uk-margin-small-left uk-text-bold">Smart Care</span>
            </a>
            <a class="uk-link-heading" href="./dashboard">
                <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                    <span uk-icon="icon: settings; ratio: 1"></span>
                    <span class="uk-margin-small-left">Dashboard</span>
                </div>
            </a>
            <a class="uk-link-heading" href="./history">
                <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                    <span uk-icon="icon: list; ratio: 1"></span>
                    <span class="uk-margin-small-left">History</span>
                </div>
            </a>
            <a class="uk-link-heading" href="./profile">
                <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left" style="border-right: solid #6BAFB1">
                    <span uk-icon="icon: user; ratio: 1"></span>
                    <span class="uk-margin-small-left">Profile</span>
                </div>
            </a>
        </div>
    </nav>
@foreach ($doctor as $item)
<form id="form-input" action="./profile/updated" method="POST" class="uk-form-horizontal uk-align-center">
	<h3>Docter Profile</h3><br>
    {{csrf_field()}}
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Your Name</label>
        <div class="uk-form-controls">
        <input name="name" class="uk-input" id="form-horizontal-text" type="text" value="{{$item->name}}">
        </div>
    </div>
     <div class="uk-margin uk-width-2-3"">
        <label class="uk-form-label" for="form-horizontal-text">Docter ID</label>
        <div class="uk-form-controls">
        <input name="place_of_birth" class="uk-input" id="form-horizontal-text" type="text" value="{{$item->docId}}" disabled>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3"">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
        <input name="date_of_birth" class="uk-input" id="form-horizontal-text" type="text" value="{{$item->email}}" disabled>
        </div>
    </div>

    <div class="uk-margin uk-width-2-3"">
        <label class="uk-form-label" for="form-horizontal-text">Phone Number</label>
        <div class="uk-form-controls">
        <input id="phones" name="phone" class="uk-input" id="form-horizontal-text" type="text" value="{{$item->phone}}">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3"">
        <label class="uk-form-label" for="form-horizontal-text">Joined at</label>
        <p class="uk-margin-left uk-text-muted">
            {{$item->created_at}}
        </p>
    </div>
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-primary uk-width-1-5 uk-align-center uk-margin">
                Update
        </button>
    </div>
</form>
@endforeach
</section>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
