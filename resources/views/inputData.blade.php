<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title></title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Input | Smart Care</title>

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
                <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                    <span uk-icon="icon: user; ratio: 1"></span>
                    <span class="uk-margin-small-left">Profile</span>
                </div>
            </a>
        </div>
    </nav>
<form id="form-input" action="./createData/created" method="POST" class="uk-form-horizontal uk-align-center">
	<h3>Input Data Pasien</h3><br>
    {{csrf_field()}}
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Nama Pasien</label>
        <div class="uk-form-controls">
            <input name="name" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
            <input name="email" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
     <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Tempat Lahir</label>
        <div class="uk-form-controls">
            <input name="place_of_birth" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Tanggal Check Up</label>
        <div class="uk-form-controls">
            <input name="date" class="uk-input" id="form-horizontal-text" type="date" placeholder="">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <div class="uk-form-label">Jenis Kelamin</div>
        <div name="gender" class="uk-form-controls uk-form-controls-text">
            <label><input class="uk-radio" value="pria" type="radio" name="gender"> Laki - Laki </label>
            <label><input class="uk-radio" value="wanita" type="radio" name="gender"> Perempuan </label>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Alamat</label>
        <div class="uk-form-controls">
            <textarea name="address" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Riwayat Penyakit</label>
        <div class="uk-form-controls">
            <textarea name="history_of_disease" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Penyakit</label>
        <div class="uk-form-controls">
            <textarea name="disease" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Deskripsi</label>
        <div class="uk-form-controls">
            <textarea name="description" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
@foreach ($sistol as $data)
     <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Sistol</label>
        <div class="uk-form-controls">
            <input name="sistol" class="uk-input" id="form-horizontal-text" type="text" value="{{$data}}">
        </div>
@endforeach
    </div>
@foreach ($diastol as $data)
     <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Diastol</label>
        <div class="uk-form-controls">
            <input name="diastol" class="uk-input" id="form-horizontal-text" type="text" value="{{$data}}">
        </div>
@endforeach
    </div>
    <div class="uk-margin">
        <button class="uk-button uk-button-primary uk-width-1-2 uk-align-center uk-margin">Submit</button>
    </div>
</form>
</section>

<script src="{{ mix('js/app.js') }}"></script>


</body>
</html>
