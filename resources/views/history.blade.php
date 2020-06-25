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

        <!-- thank you for the fix https://stackoverflow.com/questions/8781531/css-file-link-is-not-working-on-php-page -->
        <link rel="stylesheet" href="/css/history.css">
        <!-- <link href="/css/history.css" media="all" rel="stylesheet" type="text/css"/> -->


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body class ="uk-height-1-1 uk-width-1-1">
<section>
            <nav id="navbar" class="uk-width-1-6@m uk-height-1-1@m uk-flex-center@m uk-flex-left@l">
                <div id="navbar" class="uk-nav uk-nav-default">
                    <a class="uk-link-reset" href="../dashboard">
                        <img class="uk-margin uk-margin-left uk-margin-top" src="/images/smart-care-logo.png" width=30 height=30 alt="">
                        <span class="uk-text-large uk-margin-small-left uk-text-bold">Smart Care</span>
                    </a>
                    <a class="uk-link-heading" href="../dashboard">
                        <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                            <span uk-icon="icon: settings; ratio: 1"></span>
                            <span class="uk-margin-small-left">Dashboard</span>
                        </div>
                    </a>
                    <a class="uk-link-heading" href="../history">
                        <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left" style="border-right: solid #6BAFB1">
                            <span uk-icon="icon: list; ratio: 1"></span>
                            <span class="uk-margin-small-left">History</span>
                        </div>
                    </a>
                    <a class="uk-link-heading" href="../profile">
                        <div class="uk-padding-small uk-text-justify uk-text-bold uk-margin-left">
                            <span uk-icon="icon: user; ratio: 1"></span>
                            <span class="uk-margin-small-left">Profile</span>
                        </div>
                    </a>
                </div>
            </nav>

        <div  id="viewPasien" class="uk-container uk-height-1-1 uk-margin">
                <h2 class="uk-heading uk-align-left">
                    Patients List
                </h2>
                <a id="create-patient" class="uk-align-right uk-link-reset" href="/createData">
                    <button class="uk-button uk-button-primary" uk-button>
                        Create Patient
                    </button>
                </a>
                {{csrf_field()}}
                <div class="uk-margin-auto-left uk-margin-auto-right">
                    <form action="/history/search" method="GET" class="uk-search uk-search-default uk-width-1-1">
                        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                        <input name="search" class="uk-search-input" type="search" placeholder="Search..." value="{{old('search')}}">
                    </form>
                </div>
            <div class="uk-overflow-auto uk-margin">
                <table class="uk-table uk-table-small uk-table-divider uk-table-responsive uk-table-justify uk-table-hover">
                    <thead>
                     <tr>
                        <th class="sorting uk-link-muted" data-sorting_type="asc" data-column_name="name"
                        style="cursor:pointer;">@sortablelink('name', 'Nama') <span uk-icon="icon: chevron-up;" id="name_icon"></span></th>
                        <!-- <th>@sortablelink('name', 'Nama')</th> -->
                        <th>Tempat Lahir</th>
                        <th class="sorting uk-link-muted" data-sorting_type="asc" data-column_name="date"
                        style="cursor:pointer;">@sortablelink('date', 'Tanggal Check Up')<span uk-icon="icon: chevron-up;" id="date_icon"></span></th>
                        <!-- <th>@sortablelink('date', 'Tanggal Check Up')</th> -->
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
        @foreach($data_patient as $key => $Patients)
            <tbody>
                <tr class="uk-text-capitalize">
                    <td>{{$Patients->name}}</td>
                    <td>{{$Patients->place_of_birth}}</td>
                    <td>{{$Patients->date}}</td>
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
                <a id="download-table" class="" href="/exported">
                    <button class="uk-button uk-margin uk-button-default">
                        Download Table
                    </button>
                </a>
                <br/>
                Halaman : {{ $data_patient->currentPage() }} <br/>
                Jumlah Data : {{ $data_patient->total() }} <br/>
                Data Per Halaman : {{ $data_patient->perPage() }} <br/><br/>

                <div class="uk-align-center uk-flex">
                    {{$data_patient->links()}}
                </div>
                
                <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
        <!-- {{-- </div> --}} -->
            </div>
        </div>
</section>
        <script src="{{ mix('js/app.js') }}"></script>
        <!-- <script src="js/history.js"></script> -->
    <script>
        $(document).ready(function(){

            function clear_icon()
            {
            $('#name_icon').html('');
            $('#date_icon').html('');
            }

            $(document).on('keyup', '#serach', function(){
                var query = $('#serach').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                //  var page = $('#hidden_page').val();
                fetch_data( sort_type, column_name, query);
            });

            $(document).on('click', '.sorting', function(){
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';
                if(order_type == 'asc')
                {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#'+column_name+'_icon').html('<span uk-icon="icon: chevron-down;"></span>');
                }
                if(order_type == 'desc')
                {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon
                    $('#'+column_name+'_icon').html('<span uk-icon="icon: chevron-up;"></span>');
                }
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                //  var page = $('#hidden_page').val();
                var query = $('#serach').val();
                fetch_data( reverse_order, column_name, query);
            });
        });
    </script>

</body>
</html>
