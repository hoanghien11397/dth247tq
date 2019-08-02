

<!-- <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body">
        
      </div>
      
    </div> -->
   
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
              <span class="mr-3 "><a href="tel://#" class="p-2"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block">+1 234 5678 9101</span></a></span>
              <span class=""><a href="#" class="p-2"><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block">info@yourdomain.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner" style="border-bottom: 1px solid #AEB404">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6  col-xl-2 d-none d-xl-block">
            <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0"><img src="{{ asset('images/logo1.jpg')}}" style="width: 80%; height: 80%" alt=""></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right main-navbar dt" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="" class="nav-link" style="font-size: 18px">Trang chủ</a> 
                
                </li>
                <li><a href="" class="nav-link"style="font-size: 18px">Giới thiệu</a>
                <ul class="sub-menu ">
                    <li><a href=""style="font-size: 18px">Công ty Talent Wins</a></li>
                    <hr>
                    <li><a href="#"style="font-size: 18px">E-Learning</a></li>
                    <hr>
                    <li><a href="#"style="font-size: 18px">Ban cố vấn</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{ route('tinTuc') }}" class="nav-link" style="font-size: 18px">Tin tức</a>
                  <ul class="sub-menu">
                    <li><a href=""style="font-size: 18px">Tin tức Công nghệ</a></li>
                    <hr>
                    <li><a href="#"style="font-size: 18px">Tin tức Doanh nghiệp</a></li>
               
                    
                  </ul>
               </li>
                <li><a href="{{ route('dichvu') }}" class="nav-link" style="font-size: 18px">Dịch vụ</a>
                <ul class="sub-menu">
                    <li><a href="" style="font-size: 18px">Đào tạo trực tuyến</a></li>
                      <hr>
                    <li><a href="#"style="font-size: 18px">Kiểm tra trực tuyến</a></li>
                    
                  </ul>
              </li>
                <li><a href="{{ route('traiNghiem') }}" class="nav-link" style="font-size: 18px">Trải nghiệm</a></li>
         
                <li><a href="{{ route('lienhe') }}" class="nav-link" style="font-size: 18px">Liên hệ</a></li>
              
              </ul>
            </nav>
          </div>
<!-- mobile -->
          <div class=" d-block d-xl-none">
          
          <nav class="navbar navbar-expand-md  navbar-light mobile">
              <img src="{{ asset('images/logo1.jpg')}}" style="width: 50%; height: 50%" alt="">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo" style="border:none" >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse  navbar-collapse" id="demo">
                  <ul class="navbar-nav">
                    <li class="nav-item active dropdown">
                    <a href="#" class="nav-link" style="font-size: 16px">Trang chủ</a>
                    </li>
                    <li class="nav-item active dropdown">
                      <a href="" class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Giới thiệu</a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href=""style="font-size: 16px">Công ty Talent Wins</a></li>
                              <br>
                              <li><a href="#"style="font-size: 16px">E-Learning</a></li>
                              <br>
                              <li><a href="#"style="font-size: 16px">Ban cố vấn</a></li>
                        
                        </ul>
                    </li>

                    <li class="nav-item active dropdown">
                      <a href="{{ route('tinTuc') }}" class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Tin tức</a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px">Tin tức Công nghệ</a></li>
                              <br>
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px">Doanh nghiệp</a></li>
                              
                        
                        </ul>
                    </li>

                    <li class="nav-item active dropdown">
                      <a href="{{ route('dichvu') }}" class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Dịch vụ</a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('dichvu') }}"style="font-size: 16px">Đào tạo trực tuyến</a></li>
                              <br>
                              <li><a href="{{ route('dichvu') }}"style="font-size: 16px">Kiểm tra trực tuyến</a></li>
                              
                        
                        </ul>
                    </li>
                      
                    <li class="nav-item active dropdown">
                    <a href="{{ route('traiNghiem') }}" class="nav-link" style="font-size: 16px">Trải nghiệm</a>
                    </li>

                    <li class="nav-item active dropdown">
                    <a href="{{ route('lienhe') }}" class="nav-link" style="font-size: 16px">Liên hệ</a>
                    </li>
                      
                  </ul>
                </div>  
              </nav>
          </div>

<!-- mobile -->

<!-- <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div> -->







        </div>
      </div>
      
    </header>
