@extends('master-layout')


@section('content')
<main>

    <!-- top content -->
    <div id="lien-he">   
  
    
    <div class="row" style="padding-top:100px" >
        <div class="col-12">
            <div class="tt-1">
                THÔNG TIN LIÊN HỆ
            </div>
            <div class="sp-1"></div>
        </div>
    </div>
    </div>
    <div class="clear-fix">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.924361769746!2d105.88374461440684!3d20.99566889428429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aeae4b8b4c3b%3A0x7ee056fcaef47246!2zMTk0IFRoYW5oIMSQw6BtLCBUaGFuaCBUcsOsLCBIb8OgbmcgTWFpLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1567324705488!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <!-- bann do -->
    <div class="content-main mt-5">
        <div class="container">
            <div class="contact ">
                <div class="row">

                    <div class="col-sm-6" style="background-color: #F0FFF0; border-radius: 50px">
                        <form style="padding: 10px 20px">
                            <h6 class="text-center mt-3" style="color:green">Anh Chị vui lòng để lại thông tin liên hệ</h6>
                            <h6 class="text-center" style="color:green">để được eWins tư vấn, hỗ trợ</h6>

                            <div class="form-group mb-0">
                                <label for="email" class="text-ct">Họ tên</label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập họ và tên..." name="email">
                            </div>
                            <div class="form-group mb-0">
                                <label for="email" class="text-ct">Số điện thoại</label>
                                <input type="email" class="form-control d-right" id="email" placeholder="Nhập số điện thoại" name="email">
                            </div>
                            <div class="form-group mb-0">
                                <label for="email" class="text-ct">Email</label>
                                <input type="email" class="form-control d-right" id="email" placeholder="Nhập địa chỉ email..." name="email">
                            </div>
                            <div class="form-group">
                                <label for="comment" class="text-ct">Nội dung</label>
                                <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung" name="text"></textarea>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Gửi</button>
                        </form>
                    </div>

                    <div class="col-sm-6 pl-4 pb-4" style="background-color: #F0FFF0; border-radius: 50px">
                        <!-- <h3 class="contact__company-title">Liên hệ</h3> -->

                        <h4 class="">
                            DTH 247
                        </h4>

                        <ul class="m-b-70">
                            <li class="txt14 m-b-14">
                                <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                                8th floor, 379 Hudson St, New York, NY 10018
                            </li>

                            <li class="txt14 m-b-14">
                                <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                                (+1) 96 716 6879
                            </li>

                            <li class="txt14 m-b-14">
                                <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                                contact@site.com
                            </li>
                        </ul>


                    </div>
                </div>
            </div>


        </div>

    </div>
</main>

@endsection