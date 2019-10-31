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
<form id="form-input" action="./createData/created" method="POST" class="uk-form-horizontal">
	<h3>Input Data Pasien</h3><br>
    {{csrf_field()}}
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nama Pasien</label>
        <div class="uk-form-controls">
            <input name="name" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tempat Lahir</label>
        <div class="uk-form-controls">
            <input name="place_of_birth" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Tanggal Lahir</label>
        <div class="uk-form-controls">
            <input name="date_of_birth" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-form-label">Jenis Kelamin</div>
        <div name="gender" class="uk-form-controls uk-form-controls-text">
            <label><input class="uk-radio" value="pria" type="radio" name="gender"> Laki - Laki </label>
            <label><input class="uk-radio" value="wanita" type="radio" name="gender"> Perempuan </label>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Alamat</label>
        <div class="uk-form-controls">
            <textarea name="address" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Riwayat Penyakit</label>
        <div class="uk-form-controls">
            <textarea name="history_of_disease" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Sistol</label>
        <div class="uk-form-controls">
            <input name="sistol" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Diostol</label>
        <div class="uk-form-controls">
            <input name="diestol" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <p uk-margin>
        <button class="uk-button uk-button-primary" style="float: right;">Submit</button>
        <button class="uk-button uk-button-danger" style="float: right;">Previous</button>
    </p>



</form>
</section>


</body>
</html>
