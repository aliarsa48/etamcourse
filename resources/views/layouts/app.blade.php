<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" type="dashboard/image/x-icon" href="/dashboard/img/favicon.ico">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="/fonts/icomoon/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/jquery-ui.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="/css/aos.css">
  <link href="/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="/css/style.css">



</head>
<style>
  .textbiru {
    color: #183661;
  }
  .textbiru:hover {
    color: #ff6c00;
  }
  .biru {
    background: #183661;
  }
  .biru:hover {
    background: #ff6c00;
  }
  .oren {
    background: #ff6c00;
  }

  .textoren {
    color: #ff6c00;
  }

  .borderbiru {
    border-color: #183661;
  }
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3 textbiru"><span class="icon-question-circle-o mr-2"></span> Mempunyai Pertanyaan?</a> 
            <a href="#" class="small mr-3 textbiru"><span class="icon-phone2 mr-2"></span> 081352409624</a> 
            <a href="mailto:aliarsa48@gmail.com?subject=Re:132" target="_blank" class="small mr-3 textbiru"><span class="icon-envelope-o mr-2"></span>aliarsa@gmail.com</a> 
          </div>
          <div class="col-lg-3 text-right">

            @guest
                            <a href="{{'/login'}}" class="small mr-3 textbiru"><span class="icon-unlock-alt"></span> Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{'/register'}}" class="small btn btn-primary px-4 py-2 rounded-0 biru borderbiru"><span class="icon-users"></span> Daftar </a>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle textbiru" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->level == 'admin')
                                        <a class="dropdown-item" href="{{ route('admin') }}">
                                            Dashboard
                                        </a>
                                    @elseif (Auth::user()->level == 'pengajar')
                                        <a class="dropdown-item" href="{{ route('teacher') }}">
                                            Dashboard
                                        </a>
                                    @else
                                        <a class="dropdown-item" href="/student">
                                            Dashboard
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest


          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{'/'}}" class="d-block">
              <img src="/images/coursenesia.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                
                <li>
                  <a href="{{'/'}}" class="nav-link text-left">Beranda</a>
                </li>
                
                <li class="has-children">
                  <a href="#" class="nav-link text-left">Kelas</a>
                  <ul class="dropdown">
                    <li><a href="/categories/pengembangan-web">Pengembangan Web</a></li>
                    <li><a href="/categories/database">Database</a></li>
                    <li><a href="/categories/jaringan">Jaringan</a></li>
                    <li><a href="/categories/desain">Desain</a></li>
                    <li><a href="/categories/marketing">Marketing</a></li>
                  </ul>
                </li>
                
                <!--<li>-->
                <!--  <a href="/course" class="nav-link text-left">Kelas</a>-->
                <!--</li>-->
                
                <li>
                  <a href="/about" class="nav-link text-left">Tentang</a>
                </li>
                
                <li>
                    <a href="/contact" class="nav-link text-left">Kontak</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

@yield('content')

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <p class="mb-4"><img src="/images/coursenesiaori.png" width="60%" alt="Image" class="img-fluid"></p>
            <p>Ilmu pengetahuan itu ada dimana saja, dan tidak selalu ada di sekolah, asalkan kamu ingin belajar, maka kamu bisa mempelajari segala hal baru yang belum pernah kamu temukan. DeKADE COURSE merupakan salah satu kelas online untuk mendapatkan ilmu pengetahuan dan mengembangkan kemampuan kalian</p>  
            <p><a href="#">Belajarlah lagi</a></p>
          </div>

          <div class="col-lg-2">
              <h3 class="footer-heading"><span >Kategori Kelas</span></h3>
              <ul class="list-unstyled">
                  <li><a href="/categories/pengembangan-web">Pengembangan Web</a></li>
                  <li><a href="/categories/database">Database</a></li>
                  <li><a href="/categories/jaringan">Jaringan</a></li>
                  <li><a href="/categories/desain">Desain</a></li>
                  <li><a href="/categories/marketing">Marketing</a></li>

          </div>
          <div class="col-lg-2">
              <h3 class="footer-heading"><span>Kontak</span></h3>
              <ul class="list-unstyled">
                  <li><a href="/help">Pusat Bantuan</a></li>
                  <li><a href="/team">Tim KELASKU</a></li>

              </ul>
          </div>

<!--TAMBAHAN FOOTER OZI-->
          <div class="col-lg-2">
              <h3 class="footer-heading"><span>Lainnya</span></h3>
              <ul class="list-unstyled">
                  <li><a href="/syarat">Syarat dan Ketentuan</a></li>
                  <li><a href="/kebijakan">Kebijakan Privasi</a></li>

              </ul>
          </div> 
        </div>

        <div class="row"  style="margin-bottom: -40px; margin-top: -70px;">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> DeKADE COURSE | <i  aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.fancybox.min.js"></script>
  <script src="/js/jquery.sticky.js"></script>
  <script src="/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>