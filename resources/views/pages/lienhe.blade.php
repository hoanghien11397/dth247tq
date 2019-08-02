@extends('master-layout')


@section('content')
<main>

  <!-- top content -->
  <div class="row" style="padding-top:100px">
    <div class="col-12">
    <div class="tt-1">
                  THÔNG TIN LIÊN HỆ
                </div>
                <div class="sp-1"></div>
                </div>
    </div>
  </div>

  <!-- bann do -->
  <div class="content-main mt-5">
    <div class="container">
      <div class="contact ">
        <div class="row">
        
          <div class="col-sm-7">
            <form  style="padding-right:20px">
              <div class="form-group">
                <label for="email">Tên của bạn</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập họ và tên..." name="email">
              </div>
              <div class="form-group">
                <label for="email">Địa chỉ email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập Email..." name="email">
              </div>
              <div class="form-group">
                <label for="email">Số điện thoại</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập số điện thoại" name="email">
              </div>

              <div class="form-group">
                <label for="comment">Nội dung</label>
                <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung" name="text"></textarea>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
          </div>

          <div class="col-sm-5">
            <!-- <h3 class="contact__company-title">Liên hệ</h3> -->

            <p class="contact__company-name">Công ty Công nghệ và Dịch vụ Talent Wins</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4197783156555!2d105.7762418144078!3d21.055889892228645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455531af09891%3A0xd08dfc58f21b1858!2sThai+Ha+Constrexim+Building%2C!5e0!3m2!1svi!2s!4v1564668452400!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
        </div>
      </div>


    </div>

  </div>
</main>

@endsection