@extends('clients.layout.master.master')
@section('main-content-client')
<section class="banner-home">
  <div class="banner-block" data-module="top-banner">
    <div class="banner__wrapper">
      <div class="banner__img hidden-xs">
        <img src="" alt="" style="height: 290px">
      </div>
      <div class="banner__img visible-xs">
        <img src="{{ asset('image/leogo/teacher-banner1525859932.jpg') }}" alt="">
      </div>
      <div class="banner__detail">                    
      </div>
    </div>
  </div>
</section>

<div class="breadcum">
  <div class="redirect-trees hidden-xs container">
    <a href="/" class="">Trang chủ</a>
    <span class='fa fa-angle-right'></span>                 <a href="#" title="">   Giới thiệu về LeoGo</a>
    <span class='fa fa-angle-right'></span>                 <h1><a class="active" title="">Đội ngũ giảng viên</a></h1>
  </div>   
</div>

<div class="headline-main container">
  <h4 class="headline">
    Đội ngũ giảng viên
    <span></span>
  </h4>
  <div class="clear-10"></div>
  <div class="desc">
    <p>LeoGo hiện quy tụ một lực lượng giáo viên giàu kinh nghiệm và tâm huyết với nghề lớn nhất Việt Nam với gần 2.000 giáo viên giỏi, xuất sắc. VUS áp dụng quy trình tuyển dụng chuyên nghiệp và nghiêm ngặt. 100% giáo viên&nbsp;nước ngoài&nbsp;có bằng giảng dạy Anh ngữ theo tiêu chuẩn quốc tế: TESOL, CELTA hoặc tương đương với TEFL. Ứng viên phải đủ năng lực để vượt qua nhiều vòng kiểm tra: sơ vấn, phỏng vấn, dạy demo…để được chính thức trở thành giáo viên Anh ngữ của LeoGo</p>
  </div>
</div>
<section class="gallery-detail" data-module="gallery-detail">
  <div class="infrastructure__wrapper-dots">
    <div class="infrastructure__wrapper hidden-xs container">
      @foreach($getLectures as $getLecture)
        <div class="infrastructure__block" style="position: relative; width: 1158px; height: 476px;">
          <div style="height: 220px; position: absolute; left: 0px; top: 0px;" class="infrastructure__item infrastructure__grid--medium" data-index="0" data-img="/media/24640/ai-nhi.jpg">
          <img src="{{asset('image/')}}/avatar/{{ $getLecture->avatar }}" class="op0" >
        </div>
      @endforeach
    </div>
  </div>
</div>  
</section>


@include('clients/home/review/review')
@include('clients/home/infrastructure/infrastructure')
@endsection
