@extends('master-layout')


@section('content')
  <main>

    <!-- top content -->
    <div class="content__top-img">
      <h3>
        Hơn 1000 giao diện web cực đẹp và liên tục được cập nhật
      </h3>
      <p>
        Thay đổi dễ dàng theo phong cách của riêng của bạn
      </p>
      <div class="input-group mb-3" style="width: 25%; margin: auto">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append search">
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>

    <!-- bann do -->
    <div class="content-main">
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1564646356611!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="contact">
          <div class="row">
            <div class="col-sm-5" ><h3 class="contact__company-title">Liên hệ</h3>
            <p class="contact__company-desc">Thiết kế web nhanh 247</p>
            <p class="contact__company-name">Công ty Công nghệ và Dịch vụ Talent Wins</p>
            <div class="contact__box">
                            <p class="contact__box-location">
                                <i class="fas fa-map-marker-alt fa-fw" aria-hidden="true"></i>
                                <span>Tòa nhà CT2, khu đô thị Constrexim Thái Hà, Phạm Văn Đồng, Hà Nội</span>
                            </p>
                            <p>
                                <i class="fas fa-phone-alt fa-fw" aria-hidden="true"></i>
                                <span>0919 756 006</span>
                            </p>
                            <p>
                                <i class="fas fa-envelope fa-fw" aria-hidden="true"></i>
                                <a href=""><span>contact@talentwins.co</span></a>
                            </p>
                        </div>
            </div>
              <div class="col-sm-7">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="email">Tên của bạn</label>
                    <input type="email" class="form-control" id="email" placeholder="your name" name="email">
                  </div>
                  <div class="form-group">
                    <label for="email">Địa chỉ email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="email">Số điện thoại</label>
                    <input type="email" class="form-control" id="email" placeholder="Số điện thoại" name="email">
                  </div>
                 
                  <div class="form-group">
                    <label for="comment">Nội dung</label>
                    <textarea class="form-control" rows="4" id="comment" placeholder="nội dung" name="text"></textarea>
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
              </div>
          </div>
        </div>
     

      </div>

    </div>
  </main>

@endsection
