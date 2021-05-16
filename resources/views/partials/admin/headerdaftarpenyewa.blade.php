<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ url('assets/img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Daftar Penyewa</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- Vue JS -->
    <script type="text/javascript" src="{{ url('js/vue/vue.js') }}"></script>

    <!-- bootstrap css -->
    <link href="{{ url('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">

    <!-- Bootstrap core CSS     -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
    
    <!-- Animation library for notifications   -->
    <link href="{{ url('css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ url('css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link href='{{ url('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}' rel='stylesheet' type='text/css'>
    <link href="{{ url('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ url('css/tambahsewa-style.css') }}">
</head>
<body onload="buatId()>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="{{ url('img/sidebar.png') }}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                    Gor Tangerang
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/admin">
                        <i class="fa fa-columns"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/admin/daftarpenyewa">
                        <i class="fa fa-calendar-check-o"></i>
                        <p>Daftar Penyewaan</p>
                    </a>
                </li>
                {{-- <li>
                    <a href="/tambahsewa">
                        <i class="fa fa-calendar-plus-o"></i>
                        <p>Tambah Sewa</p>
                    </a>
                </li> --}}
                <li>
                    <a href="/admin/rekap">
                        <i class="fa fa-file-excel-o"></i>
                        <p>Rekap</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>
