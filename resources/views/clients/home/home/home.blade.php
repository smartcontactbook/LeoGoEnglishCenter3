@extends('clients.layout.master.master')
@section('main-content-client')

  @include('clients/layout/banner/banner')

  <div class="clear"></div>
@if (session('status'))
    <script>
        $( document ).ready(
            swal("{{ session('status') }}")
        });
    </script>
@endif
  @include('clients/home/schoolOverview/schoolOverview')

  <section class="list-course clearfix" style="background: url('{{ asset('image/avatar/bg_khoahoc.jpg') }}') center center no-repeat; background-size: cover;">
    <div class="headline-main">
      <h4 class="headline">
        C&#193;C KH&#211;A HỌC TIẾNG ANH TẠI VUS
        <span></span>
      </h4>
      <div class="clear-10"></div>
      <div class="desc container">
        Tuỳ tr&#236;nh độ v&#224; nhu cầu của học vi&#234;n, VUS lu&#244;n c&#243; những kho&#225; học ph&#249; hợp nhất.
      </div>
    </div>
    <div class="list-course-content hidden-xs container" data-module="list-course">
      <div class="list-course-wrapper">
        @foreach($getCourses as $getCourse)
          <div class="list-course__item">
            <div class="list-course__item__content">
                <div class="thumbnail_img">
                  <a href="" title="">
                    <img src="{{asset('image/')}}/avatar/{{ $getCourse->image }}" alt="">
                  </a>
                </div>
                <div class="list-course__item__detail">
                  <div class="list-course__item__desc">
                    <div class="bg-radiant" bg-color="#fff">
                      <span class="bg-radiant__index" text-color="#000">
                        01
                      </span>
                    </div>
                     <div class="title-desc">
                      <a href="" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
                        <h5 class="title">
                          {{ $getCourse->Course_Name }}
                        </h5>
                        <span class="desc">                                                                           
                          {{ $getCourse->Term }} tháng  
                        </span>
                      </a>
                    </div>
                    <div class="desc-detail overflow-lines line-clamp">
                      {{ $getCourse->Description }}
                    </div>
                  </div>
                  <div class="btn-block">
                    <a href="{{ route('getDetail', $getCourse->id) }}" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS" class="viewmore">
                      <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        @endforeach
      </div>
      <div class="arPrev" style="background: url('{{ asset('image/avatar/prev_slide.svg') }}') -4px center no-repeat; background-size: 62px;     width: 54px;height: 54px;border-radius: 50%;"></div>
      <div class="arNext" style="background: url('{{ asset('image/avatar/next_slide.svg') }}') -4px center no-repeat; background-size: 62px;     width: 54px;height: 54px;border-radius: 50%;"></div>
    </div>
  </section>

  <div class="hidden-xs">
    <div class="bar-advisory clearfix">
      <div class="desc">
       <i class="icofont-notepad" style="background: url('{{ asset('image/avatar/icon_tuvan.svg') }}') center no-repeat; width: 51px; height: 100%;float: left; background-size: 40px; display: inline-block;"></i>
        <span class="text">
          Bạn cần tư vấn kh&#243;a học ph&#249; hợp?
        </span>
      </div>
      <div class="btn-advisory">
        <div class="btn-regular btn-regular--lr40" onclick="myApp.openPopup('.popup__signup')">
          <i class="icofont-location-arrow" style="margin-left: -20px"></i>
          <span>Đăng k&#253; tư vấn</span>
        </div>
      </div>
    </div>
  </div>

  @include('clients/home/review/review')

  @include('clients/home/infrastructure/infrastructure')
  
@endsection