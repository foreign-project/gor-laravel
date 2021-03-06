<!DOCTYPE html>
<html>

<head>
    <title>Profil | Gor Tangerang</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/googlemap.js"></script>
    <!-- Vue JS -->
    <script type="text/javascript" src="js/vue/vue.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/tambahsewa-style.css">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">
    <style type="text/css">
        .maps .container-map {
            height: 400px;
            margin: 0%;
            padding: 0%;
            width: 100%;
        }

        #map {
            margin: 0%;
            padding: 0%;
            width: 100%;
            height: 100%;
            border: 1px solid blue;
        }

        #data,
        #allData {
            display: none;
        }

    </style>
</head>

<body>

    <header>
        <h2><a href="#">Gor Tangerang</a></h2>
        <nav>
            
            <li style="margin-top: 5px""><a href="/">Home</a></li>
            <li style="margin-top: 5px""><a href="#services">Layanan</a></li>
            <li style="margin-top: 5px""><a href="#maps">Lokasi</a></li>
            <li style="margin-top: 5px""><a href="#newsletter">Jadwal</a></li>
            <li style="margin-top: 5px""><a href="#contact">Kontak</a></li>
            <li> <a class="btn btn-success" href="{{ route('booking') }}">Booking</a></li>
        </nav>
    </header>


    <section class="banner-area">
        <div class="img-area"></div>
        <div class="wrapper">
            <h1 style="margin-bottom: 125px" class="typing-demo">Gor Kota Tangerang</h1>
        </div>
        <div class="banner-text">
            <h2 class="container" style="font-weight: 300; margin-bottom: 25px; font-size: 24px; padding: 0px 100px 0px 100px;">
                Gedung olahraga Tangerang adalah gedung olahraga yang terletak di Jalan A Dimyati, Sukasari, Tangerang. Gedung ini biasanya digunakan untuk event olahraga seperti DBL Tangerang, Smanitra Cup Dll.
            </h2>
            <a href="{{ route('booking') }}" class="btn" style="color: white;">Booking Now</a>
        </div>
    </section>

    <section class="services-area" id="services" style="margin-bottom: -100px;">
        <h3 class="header-text">Layanan Kami</h3>
        <p>Kami Menyediakan Layanan & Venue Olahraga Terbaik Untuk Anda </p>
        <div class="content-area">
            <div class="single-service">
                <div class="icon-area">
                    <i class="fas fa-map"></i>
                </div>
                <h2>Lapangan</h2>
                <p>Menyediakan layanan booking lapangan futsal untuk kegiatan berolahraga anda</p>
            </div>
            <div class="single-service">
                <div class="icon-area">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h2>Event Turnamen</h2>
                <p>Memberikan layanan dan harga terbaik untuk anda yang akan mengadakan acara serta turnamen olahraga
                </p>
            </div>
        </div>
    </section>

    <section class="maps" id="maps">
        <h3 class="header-text" style="margin-bottom: 30px;">Lokasi Gor Tangerang</h3>
        <div class="container-map">
            <?php
			$dump = json_encode($dump, true);
			echo '<div id="data">' . $dump . '</div>';

			$lapangan = json_encode($lapangan, true);
			echo '<div id="allData">' . $lapangan . '</div>';
			?>
            <div id="map"></div>
        </div>
    </section>

    <section class="newsletter" id="newsletter">
                <h3 class="header-text" style="color: white;">SCHEDULE</h3>
                    <input id="date-picker" width="270" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                        echo date("Y-m-d"); ?>" onchange="getJSON()" />
                <div class="content table-responsive table-full-width" style="margin-top: 50px;">
                    <div class="jadwal">
                        <div class="baris" v-for="lapangan in jadwal">
                            <div class="lapangan" style="color: white; width: 170px;">
                                <h4>Lapangan @{{ lapangan.lapangan }}</h4>
                            </div>
                            <a v-for="jam in lapangan.urutan" class="cards credentialing tombol-pilihjadwal" style="pointer-events: none; cursor: not-allowed;"
                                onclick="getDataLapangan(this.id)">
                                <div class="overlay"></div>
                                <div class="jam">@{{ jam.nomor }}</div>
                            </a>
                        </div>
                    </div>
                </div>

				<div class="keterangan">
					<div class="sudah_booking"></div>
					<h4 class="dif" style="color: white;">Sudah Booking</h4>			
				</div>
				<div class="keterangan">
					<div class="belum_booking"></div>
					<h4 style="color: white;">Belum Booking</h4>			
				</div>
    </section>

    <section class="contact" id="contact">
        <h3 class="header-text">Hubungi Kami</h3>
        <p>Untuk info booking dan pemesanan silahkan hubungi kami</p>
        <div class="content-area">
            <div class="single-contact">
                <i class="fa fa-map-marker"></i>
                <p>Jl. A. Damyati No.56, RT.003/RW.006 <br> Sukasari, Kec. Tangerang</p>
                <i class="fa fa-envelope"></i>
                <p>info@gortangerang.com</p>
                <i class="fa fa-phone"></i>
                <p>(021) 5586423</p>
            </div>
            <div class="single-contact">
                <input type="text" placeholder="Enter Your Name....">
                <input type="email" placeholder="Enter Your Email....">
                <input type="submit" value="submit">
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2021 <a href="#" style="color: #28AC75;">Tim ANR</a>, Sistem Informasi - SBD2</p>
        
    </footer>

    <script type="text/javascript">
        window.onload = function () {
            buatId();
        }

    </script>
    <script src="/js/profile.js"></script>
    <script src="https://kit.fontawesome.com/3f4aa1c6f5.js" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdg3NKQlbc9sVcuo8aRzLZQLtPoLrPZsw&callback=loadMap"
        async defer></script>
    <!--   Core JS Files   -->
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <!-- <script src="assets/js/demo.js"></script> -->

    <!-- datepicker from gijgo -->
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript">
    </script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet"
        type="text/css" />

    <script type="text/javascript">
        $(document).ready(function () {
            $('#date-picker').datepicker({

                uiLibrary: 'bootstrap',
                format: 'yyyy-mm-dd'

            });
        });

    </script>


    <script src="js/schedule-script.js"></script>
    <script src="js/schedule-back-script.js"></script>
    <script src="js/tambahsewa-back-script.js"></script>

    <script>
        jQuery(document).ready(function () {
            $('.counter').counterUp({
                delay: 50,
                time: 1000
            });
        });
    </script>
    
</body>

</html>
