

<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block">+1 234 5678 9101</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block">info@yourdomain.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0"><img src="{{ asset('images/logo1.jpg')}}" style="width: 80%; height: 80%" alt=""></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right main-navbar" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="" class="nav-link">Trang chủ</a> 
                
                </li>
                <li><a href="" class="nav-link">Giới thiệu</a>
                <ul class="sub-menu">
                    <li><a href="">Công ty Talent Wins</a></li>
                    <hr>
                    <li><a href="#">E-Learning</a></li>
                    <hr>
                    <li><a href="#">Ban cố vấn</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{ route('tinTuc') }}" class="nav-link">Tin tức</a>
                  <ul class="sub-menu">
                    <li><a href="">Tin tức Công nghệ</a></li>
                    <hr>
                    <li><a href="#">Tin tức Doanh nghiệp</a></li>
               
                    
                  </ul>
               </li>
                <li><a href="{{ route('dichvu') }}" class="nav-link">Dịch vụ</a>
                <ul class="sub-menu">
                    <li><a href="" >Đào tạo trực tuyến</a></li>
                      <hr>
                    <li><a href="#">Kiểm tra trực tuyến</a></li>
                    
                  </ul>
              </li>
                <li><a href="{{ route('traiNghiem') }}" class="nav-link">Trải nghiệm</a></li>
                <li><a href="" class="nav-link">Liên hệ</a></li>
                <li><a href="" class="nav-link">Trải nghiệm</a></li>
                <li><a href="{{ route('lienhe') }}" class="nav-link">Liên hệ</a></li>
              
              </ul>
            </nav>
          </div>

<!-- mobile -->
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
