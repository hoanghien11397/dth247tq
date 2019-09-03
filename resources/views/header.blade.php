
<header class="site-navbar py-2 bg-white js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6  col-xl-2 d-none d-xl-block">
            <h1 class="mb-0 site-logo"><a href="{{ route('home') }}" class="text-black h2 mb-0"><img src="{{ asset('images/logo1.jpg')}}" style="width: 75%; height: 75%" alt=""></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right main-navbar dt" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="" class="nav-link" style="font-size: 18px">  Trang chủ </a> 
                
                </li>
                <li><a href="{{ route('gioithieu') }}" class="nav-link"style="font-size: 18px"> Giới thiệu <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px;padding-left:5px"></i></a>
                <ul class="sub-menu ">
                    <li><a href=""style="font-size: 16px">Công ty Talent Wins</a></li>
                  
                    <li><a href="#"style="font-size: 16px">E-Learning</a></li>
                  
                    <li><a href="#"style="font-size: 16px">Ban cố vấn</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{ route('tinTuc') }}" class="nav-link" style="font-size: 18px">Tin tức  <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px;padding-left:5px"></i></a>
                  <ul class="sub-menu">
                    <li><a href="#home"style="font-size: 16px">Tin tức về nhân sự</a></li>
                   
                    <li><a href="#menu1"style="font-size: 16px">Tin tức về đào tạo phát triển</a></li>
                    <li><a href="#menu2"style="font-size: 16px">Tin tức quản trị doanh nghiệp</a></li>
               
                    
                  </ul>
               </li>
                <li><a href="#" class="nav-link" style="font-size: 18px">Dịch vụ  <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px;padding-left:5px"></i></a>
                <ul class="sub-menu">
                    <li><a href="" style="font-size: 16px">Đào tạo trực tuyến</a></li>
                   
                    <li><a href="#"style="font-size: 16px">Kiểm tra trực tuyến</a></li>
                    
                  </ul>
              </li>
                <li><a href="#" class="nav-link" style="font-size: 18px">Demo sản phẩm</a></li>
                <li><a href="#" class="nav-link" style="font-size: 18px">Talent Wins <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px;padding-left:5px"></i></a>
                  <ul class="sub-menu">
                      <li><a href="" style="font-size: 16px">Talent Wins Technology</a></li>
                    
                      <li><a href="#"style="font-size: 16px">Talent Wins Solution</a></li>

                      <li><a href="#"style="font-size: 16px">Talent Wins Academy</a></li>
                      
                      
                    </ul>
              </li>
         
                <li><a href="{{ route('lienhe') }}" class="nav-link" style="font-size: 18px">Liên hệ</a></li>
                <i class="fas fa-search pl-3 search1" style="font-size:22px" onclick=" myFunction2()"></i>
                <div class=" float-right" id="search">
                <input type="text" class="form-control form-control-sm " placeholder="Tìm kiếm....">
                </div>
              </ul>
            </nav>
          </div>
<!-- mobile -->
          <div class=" d-block d-xl-none" style="width: 100%;">
          
          <nav class="navbar navbar-expand-md  navbar-light mobile">
              <a href="" style="width: 10%"><img src="{{ asset('images/logo.png')}}" style="width: 100%" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo" style="border:none" >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse  navbar-collapse" id="demo" style="width:100px;float:right">
                  <ul class="navbar-nav">
                    <li class="nav-item active dropdown">
                    <a href="#" class="nav-link" style="font-size: 16px">Trang chủ</a>
                    </li>
                    <li class="nav-item active dropdown">
                      <a href="{{ route('gioithieu') }}" class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Giới thiệu   <i class="fa fa-angle-down float-right" aria-hidden="true" style="font-size: 18px;padding-right:10px"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Công ty Talent Wins</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">E-Learning</a></li>
                              <br>
                              <li><a href="{{ route('gioithieu') }}"style="font-size: 16px;color:black">Ban cố vấn</a></li>
                        
                        </ul>
                    </li>

                    <li class="nav-item active dropdown">
                      <a href="{{ route('tinTuc') }}" class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Tin tức  <i class="fa fa-angle-down float-right" aria-hidden="true" style="font-size: 18px;padding-right:10px"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px;color:black">Tin tức về nhân sự</a></li>
                              <br>
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px;color:black">Tin tức về đào tạo phát triển</a></li>
                              <br>
                              <li><a href="{{ route('tinTuc') }}"style="font-size: 16px;color:black">Tin tức quản trị doanh nghiệp</a></li>
                              
                        
                        </ul>
                    </li>

                    <li class="nav-item active dropdown">
                      <a href="#" class="nav-link"style="font-size: 16px"  data-toggle="dropdown">Dịch vụ  <i class="fa fa-angle-down float-right" aria-hidden="true" style="font-size: 18px;padding-right:10px"></i></a>
                          <ul class=" dropdown-menu showlist">
                              <li><a href="#"style="font-size: 16px;color:black">Đào tạo trực tuyến</a></li>
                              <br>
                              <li><a href="#"style="font-size: 16px;color:black">Kiểm tra trực tuyến</a></li>
                              
                        
                        </ul>
                    </li>
                      
                    <li class="nav-item active dropdown">
                    <a href="#" class="nav-link" style="font-size: 16px">Demo sản phẩm</a>
                    </li>

                    <li class="nav-item active dropdown">
                    <a href="{{ route('lienhe') }}" class="nav-link" style="font-size: 16px">Liên hệ</a>
                    </li>
                    <i class="fas fa-search pl-3 search1" style="font-size:22px" onclick=" myFunction2()" aria-hidden="true"></i>
                       

                  </ul>
                </div> 
               

           
                       	<!-- Menu -->
				<form>
					<input type="text" name="search" placeholder="Search..">
					<button type="submit"><i class="fa fa-search"></i></button>
				
				</form>

				<!-- Social -->
				<div class="social flex-w flex-l-m p-r-20">
					<a href="#"><i class="fa fa-user m-l-21" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i></a>

				
				</div> 
         
              
                
                
              </nav>
          </div>

<!-- mobile -->

<!-- <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div> -->







        </div>
      </div>
      
    </header>
