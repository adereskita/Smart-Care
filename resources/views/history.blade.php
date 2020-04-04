<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>History | Smart Care</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body class ="uk-height-1-1 uk-width-1-1">
<section>
            <nav id="navbar" class="uk-width-1-5@m uk-height-1-1@m uk-flex-center@m uk-flex-left@l">
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
                        <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left" style="border-right: solid #6BAFB1">
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

        <div  id="viewPasien" class="uk-container uk-height-1-1 uk-overflow-auto uk-margin">
                <h2 class="uk-heading uk-align-left">
                    Patients List
                </h2>
                <a class="uk-align-right uk-link-reset" href="/createData">
                    <button class="uk-button uk-button-primary" uk-button>
                        Create Patient
                    </button>
                </a>

                {{-- <div class="uk-overflow-auto uk-margin"> --}}
                <table class="uk-table uk-table-small uk-table-divider uk-table-responsive uk-table-justify uk-table-hover">
                    <thead>
                     <tr>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Riwayat Penyakit</th>
                        <th>Dokter</th>
                        <th>Sistol</th>
                        <th>Diastol</th>
                        <th>Status</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                    </thead>
        @foreach($data_patient as $Patients)
            <tbody>
                <tr class="uk-text-capitalize">
                    <td>{{$Patients->name}}</td>
                    <td>{{$Patients->place_of_birth}}</td>
                    <td>{{$Patients->date_of_birth}}</td>
                    <td>{{$Patients->gender}}</td>
                    <td>{{$Patients->address}}</td>
                    <td>{{$Patients->history_of_disease}}</td>
                    <td>{{$Patients->doctor_name}}</td>
                    <td>{{$Patients->sistol}}</td>
                    <td>{{$Patients->diastol}}</td>
                    <td>{{$Patients->status}}</td>
                    <!-- <td>
                        <button class="uk-button uk-button-danger uk-button-small uk-text-capitalize">Delete</button>
                    </td> -->
                </tr>
            </tbody>
        @endforeach
                </table>
        <!-- {{-- </div> --}} -->
            </div>
        </div>
</section>
        <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
