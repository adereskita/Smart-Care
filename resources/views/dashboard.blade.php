<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard | Smart Care</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body class ="uk-height-1-1 uk-width-1-1">

@if (session()->has('success'))
     <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ session()->get('success') }}</p>
    </div>
@endif
	<section>
	  <nav id="navbar" class="uk-width-1-5@m uk-flex-center@m uk-flex-left@l">
            <div class="uk-nav uk-nav-default">
                <a class="uk-link-reset" href="./dashboard">
                    <img class="uk-margin uk-margin-left uk-margin-top" src="images/smart-care-logo.png" width=30 height=30 alt="">
                    <span class="uk-text-large uk-margin-small-left uk-text-bold">Smart Care</span>
                </a>
                <a class="uk-link-heading" href="./dashboard">
                    <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left" style="border-right: solid #6BAFB1">
                        <span uk-icon="icon: settings; ratio: 1"></span>
                        <span class="uk-margin-small-left">Dashboard</span>
                    </div>
                </a>
                <a id="history" class="uk-link-heading" href="./history">
                    <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                        <span uk-icon="icon: list; ratio: 1"></span>
                        <span class="uk-margin-small-left">History</span>
                    </div>
                </a>
                <a id="profiles" class="uk-link-heading" href="./profile">
                    <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                        <span uk-icon="icon: user; ratio: 1"></span>
                        <span class="uk-margin-small-left">Profile</span>
                    </div>
                </a>
                <a class="uk-link-heading" href="./logout">
                    <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                        <span uk-icon="icon: close; ratio: 1" style="color:#F0506E;"></span>
                        <span class="uk-margin-small-left uk-text-danger">Logout</span>
                    </div>
                </a>
            </div>
        </nav>

@foreach ($data as $item)
<div id="container" class="uk-margin-left uk-margin-right">
        <img id="dashboard-img" class="uk-flex uk-margin-top uk-flex-right" src="./images/Telemedicine.png" width="260" height="260" alt="">

    <div id="dashboard" class="uk-margin-large-top">
	    <div id="dash-card" class="uk-width-5-6 uk-margin-medium-top uk-margin-left uk-card-body ">
            <div class="uk-align-left">
                <h4 class=" uk-text-justify uk-text-bold">Welcome back,
                    <span class="uk-text-capitalize">{{$item->name}} !
                    </span>
                </h4>
                    <p class="uk-text-justify uk-text-lead"> Lets find out what's going on <br>
                        with our patients.
                    </p>
            </div>
        </div>
    </div>

    <div class="uk-margin-left uk-margin-medium-top uk-height-small uk-align-left">
        <div id="recent" class="uk-margin-right uk-padding uk-overflow-auto uk-width-1">
            <h3 class="uk-margin-bottom uk-align-left">
                Recent History
            </h3>
                <a class="uk-text-capitalize uk-button uk-button-primary uk-width-1-6 uk-padding-remove" href="/createData">
                    Daftar Pasien
                </a>
            <div class="uk-overflow-auto uk-margin">
                <table class="uk-text-small uk-table uk-table-small uk-table-divider uk-table-responsive uk-table-justify uk-table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Check up</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Riwayat Penyakit</th>
                                <th>Sistol</th>
                                <th>Diastol</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    @foreach($patients as $item)
                        <tbody>
                            <tr class="uk-text-capitalize">
                                <td>{{$item->name}}</td>
                                <td>{{$item->place_of_birth}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->history_of_disease}}</td>
                                <td>{{$item->sistol}}</td>
                                <td>{{$item->diastol}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
@endforeach
        </section>


<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
