<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title></title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tel-U Smar Care</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body class ="uk-height-1-1 uk-width-1-1">
<section>
  <nav class="uk-margin-remove-bottom">
  <div >
    <ul>
      <li><img class="" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg><br>
      		<a href="dashboardView">Dashboard</a></li>
      <li><img class="" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg><br>
      		<a href="#">History</a></li>
      <li><img class="" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg><br>
      		<a href="#">Profile</a></li>
    </ul>
  </nav>
  </div>
<form id="form-input" class="uk-form-horizontal">
	<h3>Input Data Pasien</h3>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nama Pasien</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Your Name">
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tempat Lahir</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tanggal Lahir</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>
	 <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tinggi Badan</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Berat Badan</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Sistol</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Diostol</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Select</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-form-label">Radio</div>
        <div class="uk-form-controls uk-form-controls-text">
            <label><input class="uk-radio" type="radio" name="radio1"> Option 01</label>
            <label><input class="uk-radio" type="radio" name="radio1"> Option 02</label>
        </div>
    </div>

</form>
</section>


</body>
</html>