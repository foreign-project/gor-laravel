<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand capitalize" href="#">Selamat Datang, Admin {{ Auth::user()->nama }}</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p class="capitalize">
                                    {{ Auth::user()->nama }}&emsp;
                                    <b class="caret"></b>
                                </p>

                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
                          </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container-fluid">
            <p class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Tim Basing Aja</a>, Teknik Informatika - ITERA
            </p>
        </div>
    </footer>

</div>
</div>

<!--   Core JS Files   -->
<script src="{{ url('js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{ url('js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ url('js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="{{ url('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE') }}"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ url('js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<!-- <script src="assets/js/demo.js"></script> -->

<!-- datepicker from gijgo -->
<script src="{{ url('https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js') }}" type="text/javascript"></script>
<link href="{{ url('https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css') }}" rel="stylesheet" type="text/css" />


<script src="{{ url('js/schedule-script.js') }}"></script>
<script src="{{ url('js/schedule-back-script.js') }}"></script>
<script src="{{ url('js/tambahsewa-back-script.js') }}"></script>
</body>
</html>