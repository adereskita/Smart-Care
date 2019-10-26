<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
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
		<div id="nav-dash" class="uk-nav-container uk-height-1-2">
		    <ul class="uk-nav uk-nav-default">
		        <li class="uk-active"><a href="#">Dashboard</a></li>
		        <li class="uk-active"><a href="#">History</a></li>
		        <li class="uk-active"><a href="#">Profile</a></li>
		    </ul>
		</div>
		 <div id="dash-box" class="uk-child-width-2-3@m  uk-grid-small uk-grid-match"  uk-grid>
        <!-- <div> -->
            <div id="dash-card" class="uk-card uk-card-default uk-card-body ">
                <!-- <center><img src=""> src="images/smart-care-logo.svg" width=48 height=28 alt="" uk-svg></center> -->
                <h5 class="uk-text-center uk-text-bold"> Nabilah Ridhanti Zikra</h5>
                <span class="uk-text-center"> 20 year, padang</span>
                <div class="uk-grid-small uk-grid-match uk-margin-small" uk-grid>
                	<div class="uk-align-left">
	                	<h6>Blood</h6>
	                	<span class="uk-text-bold">0+</span>
                	</div>
                	<div class="">
	                	<h6>Height</h6>
	                	<span class="uk-text-bold">160cm</span>
                	</div>
                	<!-- <div class="">
	                	<h6>Weight</h6>
	                	<span class="uk-text-bold">60kg</span>
                	</div> -->
                </div>
            </div>
            <br>
            <h5 class="uk-align-left">Notification</h5>
            <div id="dash-card" class="uk-card uk-card-default uk-margin-small uk-card-body ">
                <!-- <center><img src=""> src="images/smart-care-logo.svg" width=48 height=28 alt="" uk-svg></center> -->
                <h5 class="uk-text-left uk-text-bold">
                    Reminder
                </h5>
                <span class="uk-text-left">
                    check your blood Preasure today
                </span>
                
                <hr>
		        <div>
		            <div class="uk-grid-small uk-grid-match uk-margin-small" uk-grid>
		                <!-- <img src="images/smart-care-logo.svg" width=48 height=28 alt="" uk-svg> -->
			            <h6>Daftar Pasien</h6>
		            </div>
                </div>
            </div>
        </div>
      	</div>

      	<div>
            <div id="countainer" class="uk-card uk-card-default uk-card-body ">
             	<h5 class="uk-text-bold">Examination</h5>
             	 <!-- <div class="uk-grid-small uk-grid-match uk-margin-small" uk-grid>
                	<div class="uk-align-left">
	                	<h6>Hypertensiv</h6>
	                	<span class="uk-text-bold">0+</span>
                	</div>
                	<div class="">
	                	<h6>Dehidrate</h6>
	                	<span class="uk-text-bold">160cm</span>
                	</div>
                	<div class="">
	                	<h6>Hypertensiv crisi</h6>
	                	<span class="uk-text-bold">60kg</span>
                	</div>
                </div> -->
             	<h5 class="uk-text-bold">Health Curve</h5>
             	<h5 class="uk-text-bold">Today Blood Preasure</h5>
            </div>
        </div>
        
	</body>
</html>