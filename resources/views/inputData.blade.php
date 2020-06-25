<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Input Patient | Smart Care</title>

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
            <input id="namas" name="name" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">NIK KTP</label>
        <div class="uk-form-controls">
            <input id="id_nik" name="id_nik" class="uk-input" id="form-horizontal-text" type="text" placeholder="NIK KTP">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
            <input id="emails" name="email" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
     <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Tempat Lahir</label>
        <div class="uk-form-controls">
            <input id="ttl" name="place_of_birth" class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Tanggal Check Up</label>
        <div class="uk-form-controls">
            <input id="tgl-check" name="date" class="uk-input" id="form-horizontal-text" type="date" placeholder="">
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <div class="uk-form-label">Jenis Kelamin</div>
        <div name="gender" class="uk-form-controls uk-form-controls-text">
            <label><input id="laki" class="uk-radio" value="pria" type="radio" name="gender"> Laki - Laki </label>
            <label><input id="perempuan" class="uk-radio" value="wanita" type="radio" name="gender"> Perempuan </label>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Alamat</label>
        <div class="uk-form-controls">
            <textarea id="alamats" name="address" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Riwayat Penyakit</label>
        <div class="uk-form-controls">
            <textarea id="riwayats" name="history_of_disease" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Penyakit</label>
        <div class="uk-form-controls">
            <textarea id="penyakits" name="disease" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Deskripsi</label>
        <div class="uk-form-controls">
            <textarea id="deskripsi" name="deskripsi" class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin uk-width-2-3">
        <label class="uk-form-label" for="form-horizontal-text">Obat</label>
            <div class="uk-form-controls">
                <span id="result"></span>
                <div>
                    <table class="uk-table">
                        <caption>obat rekomendasi untuk pasien</caption>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

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
        <button id="btn-submits" class="uk-button uk-button-primary uk-width-1-2 uk-align-center uk-margin">Submit</button>
    </div>
</form>
</section>

<script src="{{ mix('js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        var count = 1;

        addRow(count);

        function addRow(number) {
        var html='<tr>';
        html += '<td><input class="uk-input" placeholder="nama obat" type="text" name="nama_obat[]"></td>';

        if (number > 1) {
            html += '<td><button id="btn-delete" class="uk-button-medium uk-button-danger uk-width-1-2 uk-align-center uk-margin"> <span class="" uk-icon="close"></span></button></td></tr>';
            $('tbody').append(html);
        } else {
            html += '<td><a class="uk-button-small uk-button-primary" id="addrow">add</a></td></tr>';
            $('tbody').append(html);

        }
    } 

        $(document).on('click', '#addrow', function(){
            count++;
            addRow(count);
        });
        $(document).on('click', '#btn-delete', function(){
            count--;
            $(this).closest("tr").remove();
            
        });
        $('#form-input').on('submit', '#btn-submits', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{ route("createData.created") }}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#btn-submits').attr('disabled','disabled');
                },
                success:function(data)
                {
                    if(data.error)
                    {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<p>'+data.error[count]+'</p>';
                        }
                        $('#result').html('<div class="uk-alert-danger">'+error_html+'</div>');
                    }
                    else
                    {
                        addRow(1);
                        $('#result').html('<div class="uk-alert-success">'+data.success+'</div>');
                    }
                    $('#btn-submits').attr('disabled', false);
                }
            });
        });
    });
</script>


</body>
</html>
