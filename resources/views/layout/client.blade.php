<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aptech Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('public/client')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/client')}}/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <style>
        .btn-logout{
            position: relative;
        }
        .text-hidden{
            position:absolute;
            z-index: 1;
            visibility: hidden;
            background-color: #fff;
            color: black;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            width: 120px;
            top:100%
        }
        .btn-logout:hover .text-hidden{
            visibility: visible;
        }
        .pagination{
            width:300px;
            margin: 0 auto;
        } 
        .pagination li{
            margin-right: 5px;
        }

        .pagination .page-item.active .page-link{
            background-color: #dfa974;
            border-color: #dfa974;
        }
        .pagination .page-link{
            color: #dfa974;
        }
    </style>
</head>

<body style="position:relative">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <a href="#" class="bk-btn">?????t ph??ng</a>

        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="">Trang ch???</a></li>
                <li><a href="">Ph??ng</a></li>
                <li><a href="">Tin t???c</a></li>
                <li><a href="">Li??n h???</a></li>
                <li><a href="">V??? ch??ng t??i</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 0988.88.8888</li>
            <li><i class="fa fa-envelope"></i> aptech.hotel@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 0988.88.8888</li>
                            <li><i class="fa fa-envelope"></i> aptech.hotel@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="tn-right">
                            <a href="{{route('client.booking')}}" class="bk-btn">????n ?????t</a>
                            @if(auth()->guard('cus')->check())
                            <a href="{{route('client.profile')}}" class="bk-btn"> {{auth()->guard('cus')->user()->name}}</a>
                            <a href="{{route('client.logout')}}" class="bk-btn btn-logout"><i class="fa fa-sign-out"></i><p class="text-hidden">????ng xu???t</p></a>
                            @else
                            <a href="{{route('client.login')}}" class="bk-btn"><i class="fa fa-user"></i> Kh??ch h??ng</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{route('client.index')}}">
                                <img src="{{url('public/client')}}/img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="{{ Request::routeIs('client.index') ? 'active' : '' }}"><a href="{{route('client.index')}}">Trang ch???</a></li>
                                    <li class="{{ Request::routeIs('client.room') ? 'active' : '' }}"><a href="{{route('client.room')}}">Ph??ng</a></li>
                                    <li class=""><a href="{{route('client.blog')}}">Blog</a></li>
                                    <li class="{{ Request::routeIs('client.contact') ? 'active' : '' }}"><a href="{{route('client.contact')}}">Li??n h???</a></li>
                                    <li class="{{ Request::routeIs('client.about') ? 'active' : '' }}"><a href="{{route('client.about')}}">V??? ch??ng t??i</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{url('public/client')}}/img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>Ch??ng t??i truy???n c???m h???ng v?? ti???p c???n h??ng tri???u kh??ch du l???ch tr??n 90 trang web ?????a ph????ng
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Li??n h??? v???i ch??ng t??i</h6>
                            <ul>
                                <li>0988.88.8888</li>
                                <li>aptech.hotel@gmail.com</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>Nh???n tin t???c m???i nh???t</h6>
                            <p>Nh???n nh???ng tin t???c v?? ??u ????i m???i nh???t.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="T??m ki???m.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{url('public/client')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public/client')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/client')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('public/client')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{url('public/client')}}/js/jquery-ui.min.js"></script>
    <script src="{{url('public/client')}}/js/jquery.slicknav.js"></script>
    <script src="{{url('public/client')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public/client')}}/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>
    @yield('js')
    @if(Session::has('success'))
        <script>
            Swal.fire({
                title: "Th??nh c??ng",
                html: "{{Session::get('success')}}",
                icon: "success"
            })
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            Swal.fire({
                title: "Th???t b???i",
                html: "{{Session::get('error')}}",
                icon: "error"
            })
        </script>
    @endif
    @if(Session::has('login_success'))
    <script>
        toastr.success("{{Session::get('login_success')}}");
    </script>
    @endif
</body>

</html>