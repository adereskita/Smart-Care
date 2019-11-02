<!DOCTYPE html>
<html>
<head>
        <title>History | Smart Care</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<section>
        <nav class="uk-margin-remove-bottom">
          <div >
            <ul>
              <li><img class="" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg><br>
                        <a href="dashboard">Dashboard</a></li>
              <li><img class="" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg><br>
                        <a href="history">History</a></li>
              <li><img class="" src="images/smart-care-logo.png" width=30 height=30 alt="" uk-svg><br>
                        <a href="profile">Profile</a></li>
            </ul>
        </nav>
        </div>
        <div  id="viewPasien" class="uk-container">
                <h4>Daftar Data Pasien</h4>
                <div class="uk-overflow-auto uk-margin">
                <table class="uk-table uk-table-divider uk-table-responsive uk-table-justify uk-table-hover">
                        <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Riwayat Penyakit</th>
                                <th>Sistol</th>
                                <th>Diestol</th>
                                <th>Status</th>
                        </tr>
                        @foreach($data_patient as $Patients)
                        <tr>
                                <td>{{$Patients->name}}</td>
                                <td>{{$Patients->place_of_birth}}</td>
                                <td>{{$Patients->date_of_birth}}</td>
                                <td>{{$Patients->gender}}</td>
                                <td>{{$Patients->address}}</td>
                                <td>{{$Patients->history_of_disease}}</td>
                                <td>{{$Patients->sistol}}</td>
                                <td>{{$Patients->diestol}}</td>
                        </tr>
                        @endforeach
                </table>
        </div>
        </div>
        </section>
        <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
