<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekap</title>
    <link href="{{ url('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ url('//code.jquery.com/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ url('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}"></script>
    <link href="{{ url('css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link href='{{ url('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}' rel='stylesheet' type='text/css'>
    <link href="{{ url('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

  </head>
  <body>


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
                    <li >
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
                    <li class="active">
                        <a href="/admin/rekap">
                            <i class="fa fa-file-excel-o"></i>
                            <p>Rekap</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/user">
                            <i class="fa fa-user-circle"></i>
                            <p>Users</p>
                        </a>
                    </li>

                </ul>
        	</div>
        </div>
