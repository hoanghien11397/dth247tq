
@extends('master-layout')


@section('content')
   
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1>E-Learning Talent Wins</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-6 mb-lg-0 position-relative">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/YjyNxGa0ThI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <div class="experience">
              <span class="year">50 years</span>
              <span class="caption">of experience</span>
            </div> -->
          </div>
          <div class="col-md-5 ml-auto">
            <h3 class="section-sub-title">About Us</h3>
            <h2 class="section-title mb-3">Welcome To Elearning</h2>
            <p class="mb-4">E-learning là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến.
E-learning là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).</p>
            <p><a href="#" class="btn btn-primary btn-black--hover">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <!-- <h3 class="section-sub-title">Team</h3> -->
            <h3 class="section-title mb-3" style="font-size: 30px">BAN CỐ VẤN</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>John Rooster</h3>
              <p class="position text-muted">Co-Founder, President</p>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Tom Sharp</h3>
              <p class="position text-muted">Co-Founder, COO</p>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Winston Hodson</h3>
              <p class="position text-muted">Marketing</p>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="section-sub-title">How it works</h3>
            <h2 class="section-title mb-3">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class=" box-with-humber">
              <h2 class="text-black">Innovate</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
              <ul class="list-unstyled ul-check primary">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class=" box-with-humber">
              <h2 class="text-black">Create</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
              <ul class="list-unstyled ul-check primary">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class=" box-with-humber">
              <h2 class="text-black">Scale</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
              <ul class="list-unstyled ul-check primary">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->



    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">E-Learning</h3>
            <h2 class="section-title mb-3" style="font-size: 30px">GIẢI PHÁP ĐÀO TẠO E-LEARNING</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic1.png" alt=""></div>
              <div>
                <h3>1. Xác định nhu cầu đào tạo</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Khảo sát nhu cầu đào tạo</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Thi, kiểm tra đánh giá xác định năng lực, sự thiếu hụt kiến thức kỹ năng</span>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic2.png" alt=""></div>
              <div>
                <h3>2. Lập và quản lý kế hoạch đào tạo</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Lập kế hoạch đào tạo</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý kế hoạch đào tạo</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý các chương trình đào tạo</span>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic3.png" alt=""></div>
              <div>
                <h3>3. Học tập</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Đào tạo theo chức danh, kế hoạch, mục tiêu cá nhân</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Đánh giá trong đào tạo: đánh giá học viên; đánh giá giảng viên; đánh giá tổ chức khóa học...</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý chi phí đào tạo</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý khóa học</span>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4">
                <img src="http://trinam.com.vn/images/trinam/giaiphap/ic4.png" alt="">
              </div>
              <div>
                <h3>4. Thi - Kiểm tra</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Tổ chức thi: Thi chính thức; thi thử; thi ôn luyện</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Thi và giám sát thi</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Chấm thi và lên điểm</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Khiếu nại và giải quyết khiếu nại</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý chi phí thi</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý ngân hàng câu hỏi</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý ngân hàng đề thi</span>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic9.png" alt="">></div>
              <div>
                <h3>5. Học, thi trên Mobile</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Học theo chức danh, kế hoạch, mục tiêu cá nhân</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Thi chính thức; thi thử; thi ôn luyện</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Xem và tham khỏa thư viện</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Học khóa học realtime</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic5.png" alt=""></div>
              <div>
                <h3>6. Thư viện</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Thư viện bài giảng</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Thư viện tài liệu</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Thư viện chương trình đào tạo</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý chức danh</span>
               <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý khung kiến thức</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý khung năng lực</span>
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic7.png" alt=""></div>
              <div>
                <h3>7. Giảng dạy trực tuyến Realtime</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý lịch dạy trực tuyến</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Thiết lập các đối tượng tham dự; thông báo tới các đối tượng quá SMS, Email...</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Chuẩn bị tài nguyên cho buổi dạy trực tuyến</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Dạy học trực tuyến bằng webcam, micro, bảng trắng, chia sẻ màn hình...</span>
               <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Ghi và xem lại lịch dạy trực tuyến</span>
               
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic8.png" alt=""></div>
              <div>
                <h3>8. Quản trị, báo cáo</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý người dùng</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Quản lý cơ cấu, tổ chức, nhóm người dùng</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Phân quyền hệ thống</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Giám sát hệ thống</span>
               <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Báo cáo thống kê</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Theo dõi đánh giá M & E và phân tích dự báo ra quyết định</span>
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic6.png" alt=""></div>
              <div>
                <h3>9. Đánh giá sau đào tạo</h3>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Học viên tự đánh giá nhận xét</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Người quản lý trực tiếp nhận xét đánh giá</span>
                <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Chuẩn bị tài nguyên cho buổi dạy trực tuyến</span>
               <br>
               <span><i class="fas fa-check" style="color:#61c357"></i>  Giảng viên đánh giá</span>
               <br>
                <span><i class="fas fa-check" style="color:#61c357"></i>  Lãnh đạo đánh giá</span>
               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">People Says</h3>
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

    <!-- <section class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

              
              <div class="col-12 mb-4">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary icon-adb"></span></div>
                  <div>
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary icon-assignment"></span></div>
                  <div>
                    <h3>Intuitive Thinkers</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section> -->
  
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">News</h3>
            <h2 class="section-title mb-3" style="font-size: 30px">TIN TỨC</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Contact</h3>
            <h2 class="section-title mb-3" style="font-size: 30px">LIÊN HỆ</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Liên hệ</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Họ Đệm</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Tên</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Chủ đề</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Nội dung</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <a href="#" class="bg-primary py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div>
        </div>
      </div>  
    </a>
    
    @endsection