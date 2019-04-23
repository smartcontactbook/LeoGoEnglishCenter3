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

  <section class="list-reviews">
    <div class="headline-main">
      <h4 class="headline">
        CÁC KHÓA HỌC TẠI LEOGO
        <span></span>
      </h4>
      <div class="clear-10"></div>
      <div class="desc container">
        Tuỳ tr&#236;nh độ v&#224; nhu cầu của học vi&#234;n, LeoGo lu&#244;n c&#243; những kho&#225; học ph&#249; hợp nhất.
      </div>
    </div>
    <div class="clear-10"></div>
    <div class="list-course-content hidden-xs container" data-module="list-course">

      <div class="list-course-wrapper">
          @foreach($getCourses as $getCourse)
            <div class="list-course__item">
              <div class="list-course__item__content">
                <div class="thumbnail_img">
                  <a href="{{ route('getCoursesWeb', $getCourse->id) }}" title="Anh Ngữ LeoGo">
                    <img src="{{asset('image/')}}/avatar/{{ $getCourse->image }}" alt="Anh Ngữ LeoGo">
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
                      <a href="{{ route('getCoursesWeb', $getCourse->id) }}" title="Anh Ngữ LeoGo">
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
                    <a href="{{ route('getCoursesWeb', $getCourse['id']) }}" title="Anh Ngữ LeoGo" class="viewmore">
                      <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach       
        <div>
          <div class="prevAr"></div>
          <div class="nextAr"></div>
        </div>
      </div>
    </div>
    <div class="lineFoot"></div>
  </section>

  <div class="hidden-xs">
    <div class="bar-advisory clearfix">
      <div class="desc">
       <i class="icofont-notepad"></i>
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

  <section class="infrastructure" data-module="infrastructure">
    <div class="headline-main">
      <h4 class="headline">
        CƠ SỞ VẬT CHẤT
        <span></span>
      </h4>
    </div>
    <div class="clear"></div>
    <div class="infrastructure__wrapper-dots">
      <div class="infrastructure__wrapper container">
        <div class="infrastructure__block">

          <div class="infrastructure__item infrastructure__grid--big" data-img="">
            <img src="{{ asset('image/media/24903/vusquangtrung-31.jpg') }}">
          </div>
          <div class="infrastructure__item infrastructure__grid--medium" data-img="">
            <img src="{{ asset('image/media/24902/vusquangtrung-19.jpg') }}">
          </div>
          <div class="infrastructure__item infrastructure__grid--medium" data-img="">
            <img src="{{ asset('image/media/24911/vusquangtrung-73.jpg') }}">
          </div>
          <div class="infrastructure__item infrastructure__grid--medium" data-img="">
            <img src="{{ asset('image/media/24901/dsc5681.jpg') }}">
          </div>
          <div class="infrastructure__item infrastructure__grid--medium" data-img="">
            <img src="{{ asset('image/media/24907/il0105.jpg') }}">
          </div>
          <div class="infrastructure__item infrastructure__grid--medium" data-img="">
            <img src="{{ asset('image/media/24925/vusquangtrung-60.jpg') }}">
          </div>
        </div>
      </div>
      <div class="arrow visible-xs">
        <span class="btn__prevAr"></span>
        <span class="btn__nextAr"></span>
      </div>
    </div>
    <div class="lineFoot visible-xs"></div>
  </section>
<!--   <div class="container">
    <section class="" data-module="news-events">
      <div class="headline-main">
        <h4 class="headline">
          <a href="news/index.html" title="TIN TỨC &amp; SỰ KIỆN">TIN TỨC &amp; SỰ KIỆN</a>
          <span></span>
        </h4>
      </div>

      <div class="news-list">
        <div class="news-list__item">
          <div class="news-item">
            <a href="news/thi-thu-cambridge-mien-phi-tai-ha-noi/index.html" title="VUS H&#192; NỘI - CƠ HỘI THI THỬ CHỨNG CHỈ ANH NGỮ QUỐC TẾ CAMBRIDGE MIỄN PH&#205;">
              <div class="news-item__img">
                <img src="media/237738/thi-chu-ng-chi-cambridge-01d078.jpg?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=131993076780000000&amp;upscale=false&amp;bgcolor=fff" alt="VUS H&#192; NỘI - CƠ HỘI THI THỬ CHỨNG CHỈ ANH NGỮ QUỐC TẾ CAMBRIDGE MIỄN PH&#205;">
              </div>
              <div class="news-item__content">
                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                <div class="news-item__date">
                09/04/2019                        </div>
                <h4 style="margin:3px;" class="news-item__title">VUS H&#192; NỘI - CƠ HỘI THI THỬ CHỨNG CHỈ ANH NGỮ QUỐC TẾ CAMBRIDGE MIỄN...</h4>
                <div class="news-item__desc">Nhằm gi&#250;p c&#225;c em học sinh tiểu học H&#224; Nội l&#224;m quen với c&#225;c kỳ thi Anh ngữ quốc tế, VUS H&#224; Nội đồng h&#224;nh c&#249;ng Hội đồng khảo th&#237; tiếng Anh Đại học Cambridge tổ chức kỳ thi thử Cambridge Starters, Movers v&#224; Flyers d&#224;nh cho học sinh lớp 2 đến lớp 5.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="news-list__item">
          <div class="news-item">
            <a href="news/vus-ha-noi-tuan-vang-gia-soc-co-hoi-nhan-ngay-uu-dai-den-25percent-hoc-phi/index.html" title="[VUS H&#192; NỘI] TUẦN V&#192;NG GI&#193; SỐC - CƠ HỘI NHẬN NGAY ƯU Đ&#195;I ĐẾN 25% HỌC PH&#205;">
              <div class="news-item__img">
                <img src="media/237734/viber-image-2019-04-09-095808f54a.jpg?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=131992786050000000&amp;upscale=false&amp;bgcolor=fff" alt="[VUS H&#192; NỘI] TUẦN V&#192;NG GI&#193; SỐC - CƠ HỘI NHẬN NGAY ƯU Đ&#195;I ĐẾN 25% HỌC PH&#205;">
              </div>
              <div class="news-item__content">
                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                <div class="news-item__date">
                09/04/2019                        </div>
                <h4 style="margin:3px;" class="news-item__title">VUS H&#192; NỘI TUẦN V&#192;NG GI&#193; SỐC - CƠ HỘI NHẬN NGAY ƯU Đ&#195;I ĐẾN 25 HỌC PH&#205;</h4>
                <div class="news-item__desc">Từ 5/4 đến 20/4/2019, khi đăng k&#237; học tại c&#225;c cơ sở VUS tr&#234;n địa b&#224;n H&#224; Nội, bạn được tặng ngay ưu đ&#227;i v&#224;ng l&#234;n đến 25 cho 1 kh&#243;a học.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="news-list__item">
          <div class="news-item">
            <a href="news/teen-tham-gia-hoi-thao-chinh-phuc-ky-nang-noi-trong-ielts/index.html" title="“TEEN” THAM GIA HỘI THẢO CHINH PHỤC KỸ NĂNG N&#211;I TRONG IELTS">
              <div class="news-item__img">
                <img src="media/237732/img0165dfeb.jpg?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=131992753100000000&amp;upscale=false&amp;bgcolor=fff" alt="“TEEN” THAM GIA HỘI THẢO CHINH PHỤC KỸ NĂNG N&#211;I TRONG IELTS">
              </div>
              <div class="news-item__content">
                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                <div class="news-item__date">
                09/04/2019                        </div>
                <h4 style="margin:3px;" class="news-item__title">“TEEN” THAM GIA HỘI THẢO CHINH PHỤC KỸ NĂNG N&#211;I TRONG IELTS</h4>
                <div class="news-item__desc">Ng&#224;y 06/04, hệ thống Anh văn Hội Việt Mỹ VUS đ&#227; phối hợp c&#249;ng Hội đồng Anh BC tổ chức buổi Hội thảo “Chinh phục kỹ năng n&#243;i trong IELTS”. Hội thảo được hướng dẫn bởi Chuy&#234;n gia IELTS Michael Alpaugh đến từ BC với hơn 10 năm kinh nghiệm giảng dạy c&#225;c chương tr&#236;nh luyện thi chứng chỉ quốc tế.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="news-list__item">
          <div class="news-item">
            <a href="news/cho-con-lon-khon-cung-mua-he-hanh-phuc/index.html" title="CHO CON LỚN KH&#212;N C&#217;NG M&#217;A H&#200; HẠNH PH&#218;C">
              <div class="news-item__img">
                <img src="media/237727/ad-summer-019557.png?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=131991967480000000&amp;upscale=false&amp;bgcolor=fff" alt="CHO CON LỚN KH&#212;N C&#217;NG M&#217;A H&#200; HẠNH PH&#218;C">
              </div>
              <div class="news-item__content">
                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                <div class="news-item__date">
                08/04/2019                        </div>
                <h4 style="margin:3px;" class="news-item__title">CHO CON LỚN KH&#212;N C&#217;NG M&#217;A H&#200; HẠNH PH&#218;C</h4>
                <div class="news-item__desc">M&#249;a h&#232; ng&#224;y xưa của cha mẹ l&#224; những chuyến về qu&#234;, của những c&#225;nh hoa phượng &#233;p trong tập, của những ng&#224;y vui đ&#249;a c&#249;ng bạn h&#224;ng x&#243;m,… H&#232; của con nay thật kh&#225;c, cha mẹ vẫn mong con được vui chơi sau năm học d&#224;i nhưng vẫn phải thật bổ &#237;ch để cho con vừa tận hưởng niềm vui trẻ con, vừa ho&#224;n thiện bản th&#226;n để sẵn s&#224;ng lớn kh&#244;n.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="news-list__item">
          <div class="news-item">
            <a href="news/vus-app-cong-thong-tin-lien-lac-giua-phu-huynhhoc-vien-and-vus-chinh-thuc-ra-mat/index.html" title="VUS APP - CỔNG TH&#212;NG TIN LI&#202;N LẠC GIỮA PHỤ HUYNH/HỌC VI&#202;N &amp; VUS CH&#205;NH THỨC RA MẮT">
              <div class="news-item__img">
                <img src="media/237723/16b63.jpg?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=131989420440000000&amp;upscale=false&amp;bgcolor=fff" alt="VUS APP - CỔNG TH&#212;NG TIN LI&#202;N LẠC GIỮA PHỤ HUYNH/HỌC VI&#202;N &amp; VUS CH&#205;NH THỨC RA MẮT">
              </div>
              <div class="news-item__content">
                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                <div class="news-item__date">
                04/04/2019                        </div>
                <h4 style="margin:3px;" class="news-item__title">VUS APP - CỔNG TH&#212;NG TIN LI&#202;N LẠC GIỮA PHỤ HUYNH/HỌC VI&#202;N &amp; VUS CH&#205;NH...</h4>
                <div class="news-item__desc">Với mục ti&#234;u l&#224; người bạn đồng h&#224;nh đ&#225;ng tin cậy tr&#234;n h&#224;nh tr&#236;nh x&#226;y dựng nền tảng Anh ngữ vững chắc cho học vi&#234;n, Anh văn Hội Việt Mỹ VUS đ&#227; ch&#237;nh thức triển khai VUS App - Cổng th&#244;ng tin li&#234;n lạc giữa phụ huynh/ học vi&#234;n v&#224; VUS.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="news-list__item">
          <div class="news-item">
            <a href="news/chuoi-hoi-thao-hanh-trinh-hanh-phuc-lon-cung-con-cua-vus/index.html" title="CHUỖI HỘI THẢO H&#192;NH TR&#204;NH HẠNH PH&#218;C “LỚN C&#217;NG CON” CỦA VUS">
              <div class="news-item__img">
                <img src="media/237720/bu1a038608c1.jpg?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=131985847980000000&amp;upscale=false&amp;bgcolor=fff" alt="CHUỖI HỘI THẢO H&#192;NH TR&#204;NH HẠNH PH&#218;C “LỚN C&#217;NG CON” CỦA VUS">
              </div>
              <div class="news-item__content">
                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                <div class="news-item__date">
                28/03/2019                        </div>
                <h4 style="margin:3px;" class="news-item__title">CHUỖI HỘI THẢO H&#192;NH TR&#204;NH HẠNH PH&#218;C “LỚN C&#217;NG CON” CỦA VUS</h4>
                <div class="news-item__desc">”Lớn c&#249;ng con kh&#244;ng phải l&#224; một cột mốc hay một điểm đến, đ&#243; l&#224; một h&#224;nh tr&#236;nh. Muốn đi nhanh, th&#236; đi một m&#236;nh. Muốn đi xa, th&#236; đi c&#249;ng nhau. Thấu hiểu điều đ&#243;, v&#224; với mong muốn đồng h&#224;nh c&#249;ng phụ huynh tr&#234;n h&#224;nh tr&#236;nh đầy &#253; nghĩa đ&#243;, Chuỗi hội thảo H&#192;NH TR&#204;NH HẠNH PH&#218;C “LỚN C&#217;NG CON l&#224; m&#243;n qu&#224; m&#224; VUS muốn gửi tới c&#225;c qu&#253; phụ huynh. Chương tr&#236;nh...</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="clear-10"></div>
  </div> -->
<!--   <section class="location-block" data-module="module-map">
    <div class="headline-main visible-xs">
      <h4 class="headline">
        TRUNG TÂM ANH NGỮ LEOGO
      </h4>
    </div>
    <div class="map-wrapper clearfix">
      <div class="find-setting">
        <h5 class="title hidden-xs">
          TRUNG TÂM ANH NGỮ LEOGO
        </h5>
        <div class="clear-20 hide-992"></div>
        <div class="list-options">

          <div class=" list-options__item list_options__geolocation hide">
            <div class="geo_location_mb">
              <span class="btn-text-w-ico btn-geo-2 btn-regular btn-regular--tb10">
                <i class="ico ico-compass-white"></i>
                <span class="text">Tìm theo vị trí</span>
              </span>
            </div>
          </div>
          <div class=" list-options__item list__options__mode-view">
          <span class="ico-side">
           <span class="inline-block ico ico-map active" affect="#map_canvas"></span>
           <span class="inline-block ico ico-grid" affect="#map_grid"></span>
         </span>
       </div>
       <!-- end new html
     </div>
   </div>
    <div class="map-block">
      <div id="map_canvas" class="map-part active"></div>
      <div id="map_grid" class="map-part">
        <div class="map-grid-pc hidden-xs">
          <div class="wrapper-w-scroll">
            <div class="map_grid__wrapper"></div>
          </div>
        </div>
        <div class="map-grid-mb visible-xs">
        </div>
      </div>
    </div>
  </div>
  </section> --> -->
  
@endsection