<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Horizontal - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="/assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal position-relative">

            <header class="mb-3 ">

                <!-- <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                        </div>
                        <div class="header-top-right">

                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="assets/images/faces/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">John Ducky</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Member</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="auth-login.html">Logout</a></li>
                                </ul>
                            </div>

                            
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div> -->

                <nav class="main-navbar"
                    style="background-color: #A9B2FFF7; box-shadow: 5px 5px 5px 0px rgba(0,0,0,25%); ">
                    <div class="container m-0" style="max-width: 2000px;">
                        <ul>
                            <li class="menu-item  ">
                                <div class="logo">
                                    <a href="{{ url('/menfess') }}"><img src="assets/images/logo/Posisten.png" alt="Logo"></a>
                                    <a href="{{ url('/login') }}"><img src="assets/images/logo/admin.png"
                                            style="text-align: right;" alt="Logo"></a>
                                    {{-- <a href=""><img src="{{ asset('/images/log-out.png') }}" alt="Logo" ></a> --}}
                                </div>
                            </li>
                            <li class="menu-item ">
                                <div class="logo display-flex">
                                    <a href="{{ route('logout') }}" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="/assets/images/log-out.png" alt="Logo" class=""></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <!-- <ul>
                            <div class="btn" >

                            </div>
                        </ul> -->
                        
                    </div>
                    
                </nav>


            </header>

            <button type="button" class="btn btn-lg btn-floating position-fixed" data-bs-toggle="modal"
                data-bs-target="#exampleModal" style="right: 0; bottom: 0; z-index: 10;">
                <img src="assets/images/create.png">
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Menfess</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action={{ url('/menfess/add') }} method="POST">
                                @csrf
                                <div class="modal-body">
                                    <textarea cols="50" placeholder="Privasi aman 100%!" name="menfess"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <div class="content-wrapper container" style="margin-left: 0px; padding-left: 0px; max-width: 1330px;">

                <!-- <div class="page-heading">
                    <h3>Horizontal Layout</h3>
                </div> -->
                <div class="page-content">
                    <section class="row">
                        @yield('content')
                    </section>
                </div>

            </div>

            <!-- <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/pages/horizontal-layout.js"></script>

    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

</body>

</html>
