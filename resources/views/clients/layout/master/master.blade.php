
<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head data-page="">
    <title>Anh Van LeoGo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="en"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=yes">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="twitter:url" content="index.html"/>

    <!-- No Google Translate toolbar -->
    <meta name="google" content="notranslate">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo_144.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo_32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo_16.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/logo_144.png')}}">
    <link rel="icon" type="image/png" sizes="144x144" href="{{ asset('assets/images/logo_144.png')}}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('assets/images/logo_256.png')}}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/manifest.json')}}">
    <meta name="theme-color" content="#ba141a">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css')}}">
    <script>
      var assets_url = 'index.html';
      var app_lang = 'vi';
      var current_url = 'index.html';
    </script>
    <style>
    .swal2-container {
      z-index: 99999 !important;
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow-y: visible !important;
    }
  </style>
</head>
<body data-module="main">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5TGJQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <section class="wrapper">
    @include('clients/layout/header/header')

    @include('clients/layout/banner/banner')

    <div class="clear"></div>

    <section class="school-overview">
      <div class="overview container">
        <div class="overview__about clearfix">
          <div class="overview__about__us">
            <h5 class="title">
              <span class="ico"></span>
              <span>MỖI NĂM GẦN 250.000 GIA ĐÌNH TIN CHỌN VUS</span>
            </h5>
            <div class="description">
              <div>
                Anh văn Hội Việt Mỹ VUS là hệ thống Anh ngữ uy tín hàng đầu tại Việt Nam với hàng triệu học viên đã tin tưởng theo học. Với chất lượng giảng dạy đạt chuẩn quốc tế cùng các trung tâm hiện đại trên khắp cả nước, VUS mang đến những khoá học dành riêng cho từng độ tuổi và trình độ giúp học viên có nền tảng Anh ngữ vững chắc, tăng khả năng giao tiếp và đạt kết quả cao trong các kỳ thi Anh ngữ quốc tế.
              </div>
              <div class="seemore-block s_center">
                <a class="button arrow_next upper" href="about-us/index.html">
                  Xem chi tiết                                        
                </a>
              </div>
              <div class="clear-10"></div>
            </div>
          </div>
          <div class="overview__about__us fr">
            <div class="video">
              <iframe src="https://www.youtube.com/embed/DkEhZQ9EESw?rel=0&amp;autoplay=0&amp;loop=1" allow="autoplay; encrypted-media" frameborder="0"
              style="width:100%;margin:0 auto">
            </iframe>
          </div>
        </div>
      </div>
      <div class="clear"></div>         
      </div>
      <div class="container"><hr class="line"></div>
      <div class="home_lydo">
        <div class="inside container">
          <div class="headline-main">
            <h4 class="headline fl">
              Lý do chọn vus
              <span></span>
            </h4>
          </div>
          <div class="clear-30"></div>
          <ul class="list home_lydo">
            <li>
              <div>
                <img src="Assets/images/vneas.svg" border="0" alt="Chất lượng giảng dạy đạt chuẩn quốc tế">
              </div>
              <div>
                <strong>Chất lượng giảng dạy chuẩn quốc tế</strong>
                <p>VUS được tổ chức NEAS chứng 
                nhận chất lượng giảng dạy và dịch vụ đạt chuẩn quốc tế.</p>
              </div>
            </li>
            <li>
              <div>
                <img src="Assets/images/university.svg" border="0" alt="Đối tác chiến lược uy tín">
              </div>
              <div>
                <strong>Đối tác chiến lược uy tín</strong>
                <p>VUS liên kết đào tạo với The City University of New York (CUNY), Đại học công lập lớn thứ ba Hoa Kỳ.</p>
              </div>
            </li>
            <li>
              <div>
                <img src="Assets/images/icon_doingugiaovien_home.svg" border="0" alt="Đội ngũ giảng dạy chuyên môn cao">
              </div>
              <div>
                <strong>Đội ngũ giảng dạy chuyên môn cao</strong>
                <p>Gần 2.000 giáo viên bản xứ và Việt Nam, 100% 
                có bằng giảng dạy Anh ngữ theo tiêu chuẩn quốc tế.</p>
              </div>
            </li>
            <li>
              <div>
                <img src="Assets/images/icon_phanmem.svg" border="0" alt="Phần mềm học tập chuyên dụng">
              </div>
              <div>
                <strong>Phần mềm học tập chuyên dụng</strong>
                <p>Các phần mềm iTools, Oxford Online Practice và Imagine Learning English hỗ 
                trợ tối đa việc học tại lớp và ôn luyện tại nhà.</p>
              </div>
            </li>
            <li>
              <div>
                <img src="Assets/images/icon_dadang.svg" border="0" alt="Chương trình học đa dạng">
              </div>
              <div>
                <strong>Chương trình học đa dạng</strong>
                <p>Chương trình học được thiết kế riêng cho từng độ 
                tuổi và nhu cầu từ trẻ em mẫu giáo đến người lớn bận rộn.</p>
              </div>
            </li>
            <li>
              <div>
                <img src="Assets/images/kyluc.svg" border="0" alt="Đội ngũ tư vấn viên tận tâm">
              </div>
              <div>
                <strong>Kỷ lục Việt Nam</strong>
                <p>VUS đạt kỷ lục về số lượng học viên đạt chứng chỉ Anh ngữ quốc tế nhiều nhất Việt Nam với hơn 100.000 em.</p>
              </div>
            </li>
          </ul>         
        </div>
      </div>
      @include('clients/layout/sidebar/sidebar')
      <div class="lineFoot"></div>
    </section>

    <section class="list-course clearfix">
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
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/anh-ngu-mau-giao-smartkids/index.html" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
                  <img src="{{ asset('image/media/1017/0-02-06-c524811784982bce02bd3955be3795a7172a9a11a7b100624d57d59f611397cf558b2834.jpg')}}" alt="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
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
                    <a href="programs/anh-ngu-mau-giao-smartkids/index.html" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
                      <h5 class="title">
                        Anh Ngữ Mẫu Gi&#225;o SMARTKIDS
                      </h5>
                      <span class="desc">                                                                           
                        4 – 6 tuổi
                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Nền tảng vững chắc ngay từ bước khởi đầu, gi&#250;p c&#225;c em ph&#225;t &#226;m chuẩn, h&#236;nh th&#224;nh sự tự tin, dạn dĩ khi tiếp x&#250;c với tiếng Anh.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/anh-ngu-mau-giao-smartkids/index.html" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/anh-ngu-thieu-nhi-superkids/index.html" title="Anh Ngữ Thiếu Nhi SUPERKIDS">
                  <img src="{{ asset('media/1055/0-02-06-98c78cae40fec9a61ab602417aefcf8e05cb990a9eb6dd5033e8e4f8b3580bb149934001.jpg')}} " alt="Anh Ngữ Thiếu Nhi SUPERKIDS">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      02
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/anh-ngu-thieu-nhi-superkids/index.html" title="Anh Ngữ Thiếu Nhi SUPERKIDS">
                      <h5 class="title">
                        Anh Ngữ Thiếu Nhi SUPERKIDS
                      </h5>
                      <span class="desc">                                                                           
                        6 – 11 tuổi
                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    C&#244;ng nghệ giảng dạy Tiếng Anh của Hoa Kỳ độc quyền tại VUS gi&#250;p ph&#225;t &#226;m chuẩn, tự tin giao tiếp v&#224; đạt kết quả cao trong c&#225;c kỳ thi Anh ngữ quốc tế Cambridge Starters, Movers, Flyers.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/anh-ngu-thieu-nhi-superkids/index.html" title="Anh Ngữ Thiếu Nhi SUPERKIDS" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/anh-ngu-thieu-nien-young-leaders/index.html" title="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS">
                  <img src="{{ asset('image/media/2035/0-02-06-4bddea95b619c395c5ab5626cb2e6ab5271f97e0ecef01b5c26c3c0aea2638137c6dac2e.jpg')}}" alt="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      03
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/anh-ngu-thieu-nien-young-leaders/index.html" title="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS">
                      <h5 class="title">
                        Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS
                      </h5>
                      <span class="desc">                                                                           
                        11 – 15 tuổi
                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Chương tr&#236;nh cập nhật, nội dung giảng dạy mang t&#237;nh to&#224;n cầu gi&#250;p học vi&#234;n giao tiếp lưu lo&#225;t, r&#232;n luyện kỹ năng v&#224; tự tin đạt điểm cao trong c&#225;c kỳ thi chứng chỉ Anh ngữ quốc tế.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/anh-ngu-thieu-nien-young-leaders/index.html" title="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/luyen-thi-chung-chi-quoc-te-ielts-toefl-ibt/index.html" title="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT">
                  <img src="media/2042/0-02-06-1d7f487e979681b8c4febd7460dbd1bedcad2b03ccaaafdfb01582120c0f945f7d70153e.jpg" alt="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      04
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/luyen-thi-chung-chi-quoc-te-ielts-toefl-ibt/index.html" title="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT">
                      <h5 class="title">
                        Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT
                      </h5>
                      <span class="desc">                                                                           
                        từ 15 tuổi
                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Trang bị kiến thức, ho&#224;n thiện kỹ năng v&#224; r&#232;n luyện chiến thuật l&#224;m b&#224;i để đạt điểm cao trong c&#225;c kỳ thi quốc tế IELTS, TOEFL iBT nhằm đ&#225;p ứng nhu cầu học tập v&#224; c&#244;ng việc của mỗi học vi&#234;n.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/luyen-thi-chung-chi-quoc-te-ielts-toefl-ibt/index.html" title="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/chuong-trinh-interactive-english-become-a-leader/index.html" title="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH ">
                  <img src="media/2059/0-02-06-8752a98a7d64dd471220eba26015dbc69715fc203fbacb8eedba683400d7d7c6a2a9ae4e.jpg" alt="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH ">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      05
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/chuong-trinh-interactive-english-become-a-leader/index.html" title="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH ">
                      <h5 class="title">
                        Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH 
                      </h5>
                      <span class="desc">                                                                           
                        từ 16 tuổi
                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Trang bị kiến thức Anh ngữ nền tảng v&#224; ho&#224;n thiện 4 kỹ năng Anh ngữ quan trọng gi&#250;p học vi&#234;n tự tin trong c&#244;ng việc v&#224; cuộc sống cũng như sẵn s&#224;ng cho c&#225;c kỳ thi Anh ngữ Quốc tế.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/chuong-trinh-interactive-english-become-a-leader/index.html" title="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH " class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/anh-ngu-dam-thoai-ung-dung-italk/index.html" title="Anh Ngữ Giao Tiếp iTALK">
                  <img src="media/2073/0-02-06-5eaff12491dd6ae0bc92b3b81214f35f4f2f6896204f7117af3d33ca8fbc5ce75ade7809.jpg" alt="Anh Ngữ Giao Tiếp iTALK">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      06
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/anh-ngu-dam-thoai-ung-dung-italk/index.html" title="Anh Ngữ Giao Tiếp iTALK">
                      <h5 class="title">
                        Anh Ngữ Giao Tiếp iTALK
                      </h5>
                      <span class="desc">                                                                           
                        từ 17 tuổi
                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Gi&#250;p học vi&#234;n giao tiếp tiếng Anh tự tin trong thời gian ngắn nhất để phục vụ cho nhu cầu học tập, l&#224;m việc, du lịch hoặc định cư nước ngo&#224;i.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/anh-ngu-dam-thoai-ung-dung-italk/index.html" title="Anh Ngữ Giao Tiếp iTALK" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/anh-ngu-cap-toc-danh-cho-nguoi-mat-goc/index.html" title="Lớp Cấp Tốc Cho Người “Mất Gốc”">
                  <img src="media/23707/0-02-06-652bb0ecf30a594888fdc6733ce00668d82a7ad06fd62e6753c361f4c957de26a03a7b38.jpg" alt="Lớp Cấp Tốc Cho Người “Mất Gốc”">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      07
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/anh-ngu-cap-toc-danh-cho-nguoi-mat-goc/index.html" title="Lớp Cấp Tốc Cho Người “Mất Gốc”">
                      <h5 class="title">
                        Lớp Cấp Tốc Cho Người “Mất Gốc”
                      </h5>
                      <span class="desc">                                                                           

                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Lộ tr&#236;nh học tập được tăng tốc ph&#249; hợp với người cần học nhanh v&#224; đạt hiệu quả tức th&#236;, cải thiện 4 kỹ năng Anh ngữ cấp tốc trong thời gian ngắn v&#224; đạt hiệu quả tối ưu.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/anh-ngu-cap-toc-danh-cho-nguoi-mat-goc/index.html" title="Lớp Cấp Tốc Cho Người “Mất Gốc”" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/chuong-trinh-danh-rieng-cho-doanh-nghiep/index.html" title="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp">
                  <img src="media/23100/0-02-06-7a24fb0068183a2099956fdd19e569e5b1bda51cb26b2e9416e0af7e6910785d7cff40e.jpg" alt="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      08
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/chuong-trinh-danh-rieng-cho-doanh-nghiep/index.html" title="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp">
                      <h5 class="title">
                        Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp
                      </h5>
                      <span class="desc">                                                                           

                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Thiết kế ph&#249; hợp với y&#234;u cầu của từng tổ chức, theo đặc th&#249; của từng ng&#224;nh nghề để người học giao tiếp Anh ngữ thật tự tin v&#224; chuy&#234;n nghiệp, hỗ trợ tốt nhất cho c&#244;ng việc.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/chuong-trinh-danh-rieng-cho-doanh-nghiep/index.html" title="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-course__item">
            <div class="list-course__item__content">
              <div class="thumbnail_img">
                <a href="programs/anh-ngu-100percent-giao-vien-nuoc-ngoai/index.html" title="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
                  <img src="media/26231/100gvnn.jpg" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
                </a>
              </div>
              <div class="list-course__item__detail">
                <div class="list-course__item__desc">
                  <div class="bg-radiant" bg-color="#fff">
                    <span class="bg-radiant__index" text-color="#000">
                      09
                    </span>
                  </div>
                  <div class="title-desc">
                    <a href="programs/anh-ngu-100percent-giao-vien-nuoc-ngoai/index.html" title="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
                      <h5 class="title">
                        Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i
                      </h5>
                      <span class="desc">                                                                           

                      </span>
                    </a>
                  </div>
                  <div class="desc-detail overflow-lines line-clamp">
                    Chương tr&#236;nh d&#224;nh cho học vi&#234;n từ 4 đến 15 tuổi, với nội dung học cập nhật, chất lượng đ&#224;o tạo chuẩn quốc tế c&#249;ng đội ngũ 100% Gi&#225;o vi&#234;n Nước ngo&#224;i chuy&#234;n m&#244;n cao, am hiểu t&#226;m l&#253; lứa tuổi gi&#250;p học vi&#234;n tiến bộ nhanh v&#224; trải nghiệm m&#244;i trường học quốc tế.
                  </div>
                </div>
                <div class="btn-block">
                  <a href="programs/anh-ngu-100percent-giao-vien-nuoc-ngoai/index.html" title="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i" class="viewmore">
                    <span>&gt;&gt;&gt;&nbsp;Xem chi tiết</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="arPrev"></div>
        <div class="arNext"></div>
      </div>
      <div class="list-course-mb visible-xs">
        <ul>

          <li class="actives">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/1017/0-02-06-c524811784982bce02bd3955be3795a7172a9a11a7b100624d57d59f611397cf558b28345bc7.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131816555630000000&amp;upscale=false&amp;bgcolor=fff" alt="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
                <span class="text-index" text-color="#000">01</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/anh-ngu-mau-giao-smartkids/index.html" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
                    <h5 class="headline">
                      Anh Ngữ Mẫu Gi&#225;o SMARTKIDS
                    </h5>
                    <span class="desc">
                      4 – 6 tuổi
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Nền tảng vững chắc ngay từ bước khởi đầu, gi&#250;p c&#225;c em ph&#225;t &#226;m chuẩn, h&#236;nh th&#224;nh sự tự tin, dạn dĩ khi tiếp x&#250;c với tiếng Anh.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/1055/0-02-06-98c78cae40fec9a61ab602417aefcf8e05cb990a9eb6dd5033e8e4f8b3580bb1499340019104.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131789130540000000&amp;upscale=false&amp;bgcolor=fff" alt="Anh Ngữ Thiếu Nhi SUPERKIDS">
                <span class="text-index" text-color="#000">02</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/anh-ngu-thieu-nhi-superkids/index.html" title="Anh Ngữ Thiếu Nhi SUPERKIDS">
                    <h5 class="headline">
                      Anh Ngữ Thiếu Nhi SUPERKIDS
                    </h5>
                    <span class="desc">
                      6 – 11 tuổi
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  C&#244;ng nghệ giảng dạy Tiếng Anh của Hoa Kỳ độc quyền tại VUS gi&#250;p ph&#225;t &#226;m chuẩn, tự tin giao tiếp v&#224; đạt kết quả cao trong c&#225;c kỳ thi Anh ngữ quốc tế Cambridge Starters, Movers, Flyers.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/2035/0-02-06-4bddea95b619c395c5ab5626cb2e6ab5271f97e0ecef01b5c26c3c0aea2638137c6dac2eefeb.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131789130660000000&amp;upscale=false&amp;bgcolor=fff" alt="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS">
                <span class="text-index" text-color="#000">03</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/anh-ngu-thieu-nien-young-leaders/index.html" title="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS">
                    <h5 class="headline">
                      Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS
                    </h5>
                    <span class="desc">
                      11 – 15 tuổi
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Chương tr&#236;nh cập nhật, nội dung giảng dạy mang t&#237;nh to&#224;n cầu gi&#250;p học vi&#234;n giao tiếp lưu lo&#225;t, r&#232;n luyện kỹ năng v&#224; tự tin đạt điểm cao trong c&#225;c kỳ thi chứng chỉ Anh ngữ quốc tế.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/2042/0-02-06-1d7f487e979681b8c4febd7460dbd1bedcad2b03ccaaafdfb01582120c0f945f7d70153e57dd.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131816557650000000&amp;upscale=false&amp;bgcolor=fff" alt="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT">
                <span class="text-index" text-color="#000">04</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/luyen-thi-chung-chi-quoc-te-ielts-toefl-ibt/index.html" title="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT">
                    <h5 class="headline">
                      Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT
                    </h5>
                    <span class="desc">
                      từ 15 tuổi
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Trang bị kiến thức, ho&#224;n thiện kỹ năng v&#224; r&#232;n luyện chiến thuật l&#224;m b&#224;i để đạt điểm cao trong c&#225;c kỳ thi quốc tế IELTS, TOEFL iBT nhằm đ&#225;p ứng nhu cầu học tập v&#224; c&#244;ng việc của mỗi học vi&#234;n.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/2059/0-02-06-8752a98a7d64dd471220eba26015dbc69715fc203fbacb8eedba683400d7d7c6a2a9ae4e6b9c.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131789130870000000&amp;upscale=false&amp;bgcolor=fff" alt="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH ">
                <span class="text-index" text-color="#000">05</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/chuong-trinh-interactive-english-become-a-leader/index.html" title="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH ">
                    <h5 class="headline">
                      Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH 
                    </h5>
                    <span class="desc">
                      từ 16 tuổi
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Trang bị kiến thức Anh ngữ nền tảng v&#224; ho&#224;n thiện 4 kỹ năng Anh ngữ quan trọng gi&#250;p học vi&#234;n tự tin trong c&#244;ng việc v&#224; cuộc sống cũng như sẵn s&#224;ng cho c&#225;c kỳ thi Anh ngữ Quốc tế.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/2073/0-02-06-5eaff12491dd6ae0bc92b3b81214f35f4f2f6896204f7117af3d33ca8fbc5ce75ade7809d50b.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131789130980000000&amp;upscale=false&amp;bgcolor=fff" alt="Anh Ngữ Giao Tiếp iTALK">
                <span class="text-index" text-color="#000">06</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/anh-ngu-dam-thoai-ung-dung-italk/index.html" title="Anh Ngữ Giao Tiếp iTALK">
                    <h5 class="headline">
                      Anh Ngữ Giao Tiếp iTALK
                    </h5>
                    <span class="desc">
                      từ 17 tuổi
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Gi&#250;p học vi&#234;n giao tiếp tiếng Anh tự tin trong thời gian ngắn nhất để phục vụ cho nhu cầu học tập, l&#224;m việc, du lịch hoặc định cư nước ngo&#224;i.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/23707/0-02-06-652bb0ecf30a594888fdc6733ce00668d82a7ad06fd62e6753c361f4c957de26a03a7b38766a.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131789131080000000&amp;upscale=false&amp;bgcolor=fff" alt="Lớp Cấp Tốc Cho Người “Mất Gốc”">
                <span class="text-index" text-color="#000">07</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/anh-ngu-cap-toc-danh-cho-nguoi-mat-goc/index.html" title="Lớp Cấp Tốc Cho Người “Mất Gốc”">
                    <h5 class="headline">
                      Lớp Cấp Tốc Cho Người “Mất Gốc”
                    </h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Lộ tr&#236;nh học tập được tăng tốc ph&#249; hợp với người cần học nhanh v&#224; đạt hiệu quả tức th&#236;, cải thiện 4 kỹ năng Anh ngữ cấp tốc trong thời gian ngắn v&#224; đạt hiệu quả tối ưu.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/23100/0-02-06-7a24fb0068183a2099956fdd19e569e5b1bda51cb26b2e9416e0af7e6910785d7cff40eb768.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131735480410000000&amp;upscale=false&amp;bgcolor=fff" alt="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp">
                <span class="text-index" text-color="#000">08</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/chuong-trinh-danh-rieng-cho-doanh-nghiep/index.html" title="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp">
                    <h5 class="headline">
                      Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp
                    </h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Thiết kế ph&#249; hợp với y&#234;u cầu của từng tổ chức, theo đặc th&#249; của từng ng&#224;nh nghề để người học giao tiếp Anh ngữ thật tự tin v&#224; chuy&#234;n nghiệp, hỗ trợ tốt nhất cho c&#244;ng việc.
                </div>                                    
              </div>
            </div>
          </li>
          <li class="">
            <div class="thumbnail-title">
              <div class="thumbnail_img">
                <div class="bg-gradient" bg-color="#fff"></div>
                <img src="media/26231/100gvnn338d.jpg?anchor=center&amp;mode=crop&amp;width=460&amp;height=323&amp;rnd=131735480470000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
                <span class="text-index" text-color="#000">09</span>
              </div>
              <div class="title-wrapper">
                <div class="title">
                  <span class="toggle-open">
                    <i class="ico-minus"></i>
                    <i class="ico-plus"></i>
                  </span>
                  <a href="programs/anh-ngu-100percent-giao-vien-nuoc-ngoai/index.html" title="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
                    <h5 class="headline">
                      Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i
                    </h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail-content-wrapper">
              <div class="detail-content">
                <div class="detail line-clamp">
                  Chương tr&#236;nh d&#224;nh cho học vi&#234;n từ 4 đến 15 tuổi, với nội dung học cập nhật, chất lượng đ&#224;o tạo chuẩn quốc tế c&#249;ng đội ngũ 100% Gi&#225;o vi&#234;n Nước ngo&#224;i chuy&#234;n m&#244;n cao, am hiểu t&#226;m l&#253; lứa tuổi gi&#250;p học vi&#234;n tiến bộ nhanh v&#224; trải nghiệm m&#244;i trường học quốc tế.
                </div>                                    
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

<div class="hidden-xs">
  <div class="bar-advisory clearfix">
    <div class="desc">
      <span class="icon"></span>
      <span class="text">
        Bạn cần tư vấn kh&#243;a học ph&#249; hợp?
      </span>
    </div>
    <div class="btn-advisory">
      <div class="btn-regular btn-regular--lr40" onclick="myApp.openPopup('.popup__signup')">
        <span>Đăng k&#253; tư vấn</span>
      </div>
    </div>
  </div>
</div>

<section class="list-reviews">
  <div class="headline-main">
    <h4 class="headline">
      PHỤ HUYNH V&#192; HỌC VI&#202;N N&#211;I VỀ VUS
      <span></span>
    </h4>
  </div>
  <div class="clear-10"></div>
  <div class="review-content container" data-module="slide-reviews">

    <div class="review-content__wrapper">
      <div class="review-wrapper__content">
        <div class="review-slide-item">
          <div class="review-slide-item__content">
            <div class="review-slide-item__ava">
              <img src="media/24823/ngovanchien2f0f.png?anchor=center&amp;mode=crop&amp;width=100&amp;height=100&amp;rnd=131701691220000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
            </div>
            <div class="review-slide-item__detail overflow-lines">
              <div class="line-clamp">Mình thấy VUS có chất lượng giảng dạy uy tín nên chọn cho con học. Trong quá trình học, gia đình thấy cháu có tiến bộ rõ rệt, hiện đang là một trong những học sinh giỏi Anh văn lớp chuyên của trường.</div>
            </div>
            <div class="review-slide-item__info">
              <div class="name">
                Anh NGUYỄN VĂN CHIẾN (Phụ huynh)
              </div>
            </div>
          </div>
        </div>
        <div class="review-slide-item">
          <div class="review-slide-item__content">
            <div class="review-slide-item__ava">
              <img src="media/23648/laanhthua0ce.png?anchor=center&amp;mode=crop&amp;width=100&amp;height=100&amp;rnd=131701691300000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
            </div>
            <div class="review-slide-item__detail overflow-lines">
              <div class="line-clamp">Tại VUS, giáo viên được tuyển chọn kỹ lưỡng, đảm bảo chất lượng giảng dạy, nhiều cấp độ dành cho mọi độ tuổi, giúp con học tiếng Anh xuyên suốt. Tôi rất hài lòng khi thấy con tiến bộ  vượt bậc, đạt kết quả cao trong các kỳ thi Anh ngữ.</div>
            </div>
            <div class="review-slide-item__info">
              <div class="name">
                Chị L&#202; ANH THƯ (Phụ huynh) 
              </div>
            </div>
          </div>
        </div>
        <div class="review-slide-item">
          <div class="review-slide-item__content">
            <div class="review-slide-item__ava">
              <img src="media/23703/chixuantiencc2b.png?anchor=center&amp;mode=crop&amp;width=100&amp;height=100&amp;rnd=131701691440000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
            </div>
            <div class="review-slide-item__detail overflow-lines">
              <div class="line-clamp">Gia đình có dự định sang Mỹ nên đầu tư tiếng Anh cho con từ rất sớm. Tôi chọn VUS vì được bạn bè, đồng nghiệp giới thiệu và thấy rất yên tâm khi con học rất hiệu quả, thường đứng hạng Nhất môn tiếng Anh ở trường.</div>
            </div>
            <div class="review-slide-item__info">
              <div class="name">
                Chị NGUYỄN T. XU&#194;N TI&#202;N (Phụ huynh)
              </div>
            </div>
          </div>
        </div>
        <div class="review-slide-item">
          <div class="review-slide-item__content">
            <div class="review-slide-item__ava">
              <img src="media/24845/asset-38101.png?anchor=center&amp;mode=crop&amp;width=100&amp;height=100&amp;rnd=131701693090000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
            </div>
            <div class="review-slide-item__detail overflow-lines">
              <div class="line-clamp">Thầy cô biết cách truyền cảm hứng để mọi người luôn thấy mình được nghe nói tiếng Anh liên tục. Học viên được khuyến khích nói và đừng sợ sai, thầy cô luôn sẵn sàng chỉnh sửa để mình nói chuẩn và rõ ràng hơn.</div>
            </div>
            <div class="review-slide-item__info">
              <div class="name">
                Chị NGUYỄN TR&#218;C QUỲNH - Nh&#226;n Vi&#234;n Văn Ph&#242;ng
              </div>
            </div>
          </div>
        </div>
        <div class="review-slide-item">
          <div class="review-slide-item__content">
            <div class="review-slide-item__ava">
              <img src="media/24853/asset-150ec.png?anchor=center&amp;mode=crop&amp;width=100&amp;height=100&amp;rnd=131701692140000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
            </div>
            <div class="review-slide-item__detail overflow-lines">
              <div class="line-clamp">Giáo viên thường chỉ ra được những lỗi sai trong phát âm người Việt hay mắc phải. Chủ đề học đa dạng và được luyện tập nhiều giúp em tăng độ phản xạ khi bước ra giao tiếp ngoài thực tế. Với chi phí hợp lý, em rất hài lòng về lựa chọn học tại đây.</div>
            </div>
            <div class="review-slide-item__info">
              <div class="name">
                NGUYỄN HO&#192;NG THIỆN - Sinh Vi&#234;n
              </div>
            </div>
          </div>
        </div>
        <div class="review-slide-item">
          <div class="review-slide-item__content">
            <div class="review-slide-item__ava">
              <img src="media/24856/picture1490a.png?anchor=center&amp;mode=crop&amp;width=100&amp;height=100&amp;rnd=131701689290000000&amp;upscale=false&amp;bgcolor=fff" alt="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
            </div>
            <div class="review-slide-item__detail overflow-lines">
              <div class="line-clamp">Từ khi học VUS, con thấy tự tin hơn trong giao tiếp vì có nhiều cơ hội trò chuyện với thầy cô người nước ngoài. Thầy cô bản ngữ nên luôn được chỉnh sửa khi có lỗi phát âm. Điều này giúp con rèn luyện được cách phát âm của mình và nói tốt hơn rất nhiều.</div>
            </div>
            <div class="review-slide-item__info">
              <div class="name">
                Em ĐẶNG GIA CH&#205; (VUS B&#224; Hom) - KET 148
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="prevAr"></div>
        <div class="nextAr"></div>
      </div>
    </div>
  </div>
  <div class="lineFoot"></div>
</section>

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
          <img src="media/24903/vusquangtrung-31.jpg">
        </div>
        <div class="infrastructure__item infrastructure__grid--medium" data-img="">
          <img src="media/24902/vusquangtrung-19.jpg">
        </div>
        <div class="infrastructure__item infrastructure__grid--medium" data-img="">
          <img src="media/24911/vusquangtrung-73.jpg">
        </div>
        <div class="infrastructure__item infrastructure__grid--medium" data-img="">
          <img src="media/24901/dsc5681.jpg">
        </div>
        <div class="infrastructure__item infrastructure__grid--medium" data-img="">
          <img src="media/24907/il0105.jpg">
        </div>
        <div class="infrastructure__item infrastructure__grid--medium" data-img="">
          <img src="media/24925/vusquangtrung-60.jpg">
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
<div class="container">
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
</div>
<section class="location-block" data-module="module-map">
  <div class="headline-main visible-xs">
    <h4 class="headline">
      TRUNG TÂM ANH NGỮ VUS
    </h4>
  </div>
  <div class="theme-grid-red-box visible-xs mobile-show-off hide" show-off=".map-wrapper">
    Xem chi tiết
    <span class="fa fa-angle-down"></span>
  </div>
  <div class="map-wrapper clearfix">
    <div class="find-setting">
      <h5 class="title hidden-xs">
        TRUNG TÂM ANH NGỮ VUS
      </h5>
      <div class="clear-20 hide-992"></div>
      <div class="list-options">
        <div class=" list-options__item list_options__city ico-checkin">
          <select type-filter="city" default-val="TP. HCM" class="select-box__filter-mb filter-select-box-map">
            <option value="">Tìm theo thành phố</option>
            <option value="TP. HCM" data-city="TP. HCM">TP. HCM</option>
            <option value="H&#224; Nội" data-city="H&#224; Nội">H&#224; Nội</option>
            <option value="Bi&#234;n H&#242;a" data-city="Bi&#234;n H&#242;a">Bi&#234;n H&#242;a</option>
            <option value="B&#236;nh Dương" data-city="B&#236;nh Dương">B&#236;nh Dương</option>
            <option value="Vũng T&#224;u" data-city="Vũng T&#224;u">Vũng T&#224;u</option>
          </select>
        </div>
        <div class=" list-options__item list_options__district ico-checkin">
          <select type-filter="district" class="select-box__filter-mb filter-select-box-map">
            <option value="">Tìm theo Quận</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 1">Quận 1</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 2">Quận 2</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 4">Quận 4</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 5">Quận 5</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 6">Quận 6</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 7">Quận 7</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 9">Quận 9</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 10">Quận 10</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận 12">Quận 12</option>
            <option data-city="TP. HCM" value="TP. HCM-Ph&#250; Nhuận">Ph&#250; Nhuận</option>
            <option data-city="TP. HCM" value="TP. HCM-T&#226;n B&#236;nh">T&#226;n B&#236;nh</option>
            <option data-city="TP. HCM" value="TP. HCM-T&#226;n Ph&#250;">T&#226;n Ph&#250;</option>
            <option data-city="TP. HCM" value="TP. HCM-G&#242; Vấp">G&#242; Vấp</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận B&#236;nh Thạnh">Quận B&#236;nh Thạnh</option>
            <option data-city="TP. HCM" value="TP. HCM-Quận Thủ Đức">Quận Thủ Đức</option>
            <option data-city="H&#224; Nội" value="H&#224; Nội-Quận Thanh Xu&#226;n">Quận Thanh Xu&#226;n</option>
            <option data-city="H&#224; Nội" value="H&#224; Nội-Quận Cầu Giấy">Quận Cầu Giấy</option>
            <option data-city="H&#224; Nội" value="H&#224; Nội-Quận Đống Đa">Quận Đống Đa</option>
            <option data-city="H&#224; Nội" value="H&#224; Nội-Quận Hai B&#224; Trưng">Quận Hai B&#224; Trưng</option>
            <option data-city="H&#224; Nội" value="H&#224; Nội-Quận Nam Từ Li&#234;m">Quận Nam Từ Li&#234;m</option>
            <option data-city="H&#224; Nội" value="H&#224; Nội-Quận H&#224; Đ&#244;ng">Quận H&#224; Đ&#244;ng</option>
            <option data-city="Bi&#234;n H&#242;a" value="Bi&#234;n H&#242;a-Đồng Nai">Đồng Nai</option>
            <option data-city="B&#236;nh Dương" value="B&#236;nh Dương-Thủ Dầu Một">Thủ Dầu Một</option>
            <option data-city="Vũng T&#224;u" value="Vũng T&#224;u-Vũng T&#224;u">Vũng T&#224;u</option>
          </select>
        </div>
        <div class=" list-options__item list_options__geolocation hide">
          <div class="geo_location_mb">
            <span class="btn-text-w-ico btn-geo-2 btn-regular btn-regular--tb10">
              <i class="ico ico-compass-white"></i>
              <span class="text">Tìm theo vị trí</span>
            </span>
          </div>
        </div>
        <div class=" list-options__item list__options__mode-view">
          <span class="text w-60 "><a href="contact-us/index.html">
          Xem Tất Cả Trung Tâm VUS</a>

        </span>
        <span class="ico-side">
         <span class="inline-block ico ico-map active" affect="#map_canvas"></span>
         <span class="inline-block ico ico-grid" affect="#map_grid"></span>
       </span>
     </div>
     <!-- end new html -->
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
<ul id="list-data-google-map" class="hidden">
  <li data-lat="10.769820505613863"
  data-lng="106.68601402586444"
  data-name="VUS Nguyễn Thị Minh Khai Q. 1"
  data-description="189 Nguyễn Thị Minh Khai, Q. 1, TP. HCM"
  data-address="189 Nguyễn Thị Minh Khai, Q. 1, TP. HCM"
  data-phone="(028) 3 925 9889 - ext: 185"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 1"
  data-url="/contact-us/ho-chi-minh-city/quan-1/van-phong-trung-tam/" 
  data-type="marker"></li>
  <li data-lat="10.7891972"
  data-lng="106.6923429"
  data-name="VUS V&#245; Thị S&#225;u Q. 1"
  data-description="78 V&#245; Thị S&#225;u, Q. 1, TP. HCM"
  data-address="78 V&#245; Thị S&#225;u, Q. 1, TP. HCM"
  data-phone="(028) 3 820 6742"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 1"
  data-url="/contact-us/ho-chi-minh-city/quan-1/vus-vo-thi-sau-q1/" 
  data-type="marker"></li>
  <li data-lat="10.796122"
  data-lng="106.731073"
  data-name="VUS Trần N&#227;o Q. 2"
  data-description="58B Trần N&#227;o, Q. 2, TP. HCM"
  data-address="58B Trần N&#227;o, Q. 2, TP. HCM"
  data-phone="(028) 7 300 0591"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 2"
  data-url="/contact-us/ho-chi-minh-city/quan-2/vus-tran-nao-q2/" 
  data-type="marker"></li>
  <li data-lat="10.788512"
  data-lng="106.757639"
  data-name="VUS Nguyễn Duy Trinh Q. 2"
  data-description="223 - 225 Nguyễn Duy Trinh, Q. 2, TP. HCM"
  data-address="223 - 225 Nguyễn Duy Trinh, Q. 2, TP. HCM"
  data-phone=" (‭028) 7 300 8682‬"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 2"
  data-url="/contact-us/ho-chi-minh-city/quan-2/vus-nguyen-duy-trinh-q2/" 
  data-type="marker"></li>
  <li data-lat="10.759189339090312"
  data-lng="106.69868209755327"
  data-name="VUS Kh&#225;nh Hội Q. 4"
  data-description="243 - 245 Kh&#225;nh Hội, Q. 4, TP. HCM"
  data-address="243 - 245 Kh&#225;nh Hội, Q. 4, TP. HCM"
  data-phone="(028) 3 943 3416"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 4"
  data-url="/contact-us/ho-chi-minh-city/quan-4/vus-khanh-hoi-q4/" 
  data-type="marker"></li>
  <li data-lat="10.756681654994193"
  data-lng="106.67010461342238"
  data-name="VUS An Dương Vương Q. 5"
  data-description="135 An Dương Vương, Q. 5, TP. HCM"
  data-address="135 An Dương Vương, Q. 5, TP. HCM"
  data-phone="(028) 3 830 5210"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 5"
  data-url="/contact-us/ho-chi-minh-city/quan-5/vus-an-duong-vuong-q5/" 
  data-type="marker"></li>
  <li data-lat="10.754246339128679"
  data-lng="106.63294146965859"
  data-name="VUS B&#224; Hom Q. 6"
  data-description="61 - 63 B&#224; Hom, Q. 6, TP. HCM"
  data-address="61 - 63 B&#224; Hom, Q. 6, TP. HCM"
  data-phone="(028) 3 817 2779"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 6"
  data-url="/contact-us/ho-chi-minh-city/quan-6/vus-ba-hom-q6/" 
  data-type="marker"></li>
  <li data-lat="10.7453553"
  data-lng="106.6220903"
  data-name="VUS Hậu Giang Q. 6"
  data-description="961 Hậu Giang, Q. 6, TP. HCM"
  data-address="961 Hậu Giang, Q. 6, TP. HCM"
  data-phone="(028) 3 759 3727"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 6"
  data-url="/contact-us/ho-chi-minh-city/quan-6/vus-hau-giang-q6/" 
  data-type="marker"></li>
  <li data-lat="10.728603015445032"
  data-lng="106.72036627116393"
  data-name="VUS Nguyễn Khắc Viện Q. 7"
  data-description="25 Nguyễn Khắc Viện, Q. 7, TP. HCM"
  data-address="25 Nguyễn Khắc Viện, Q. 7, TP. HCM"
  data-phone="(028) 5 413 7768"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 7"
  data-url="/contact-us/ho-chi-minh-city/quan-7/vus-nguyen-khac-vien-q7/" 
  data-type="marker"></li>
  <li data-lat="10.845054928055841"
  data-lng="106.77255989345701"
  data-name="VUS Xa Lộ H&#224; Nội Q. 9"
  data-description="706A Xa Lộ H&#224; Nội, Q. 9, TP. HCM"
  data-address="706A Xa Lộ H&#224; Nội, Q. 9, TP. HCM"
  data-phone="(028) 3 736 7326"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 9"
  data-url="/contact-us/ho-chi-minh-city/quan-9/vus-xa-lo-ha-noi-q9/" 
  data-type="marker"></li>
  <li data-lat="10.759185773575108"
  data-lng="106.6645761182117"
  data-name="VUS Nguyễn Ch&#237; Thanh Q. 10"
  data-description="444 Nguyễn Ch&#237; Thanh, Q. 10, TP. HCM"
  data-address="444 Nguyễn Ch&#237; Thanh, Q. 10, TP. HCM"
  data-phone="(028) 3 957 5636"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 10"
  data-url="/contact-us/ho-chi-minh-city/quan-10/vus-nguyen-chi-thanh-q10/" 
  data-type="marker"></li>
  <li data-lat="10.796959605224101"
  data-lng="106.64550702156521"
  data-name="VUS Trường Chinh Q. 12"
  data-description="187 Trường Chinh, Q. 12, TP. HCM"
  data-address="187 Trường Chinh, Q. 12, TP. HCM"
  data-phone="(028) 3 719 2411"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 12"
  data-url="/contact-us/ho-chi-minh-city/quan-12/vus-truong-chinh-q12/" 
  data-type="marker"></li>
  <li data-lat="10.8676395"
  data-lng="106.6160856"
  data-name="VUS Nguyễn Ảnh Thủ Q. 12"
  data-description="1113 Nguyễn Ảnh Thủ, Q. 12, TP. HCM"
  data-address="1113 Nguyễn Ảnh Thủ, Q. 12, TP. HCM"
  data-phone="(028) 7 300 6687 "
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận 12"
  data-url="/contact-us/ho-chi-minh-city/quan-12/vus-nguyen-anh-thu-q12/" 
  data-type="marker"></li>
  <li data-lat="10.800417859596465"
  data-lng="106.68469841111448"
  data-name="VUS Phan X&#237;ch Long Q. Ph&#250; Nhuận"
  data-description="422 Phan X&#237;ch Long, Q. Ph&#250; Nhuận, TP. HCM"
  data-address="422 Phan X&#237;ch Long, Q. Ph&#250; Nhuận, TP. HCM"
  data-phone="(028) 3 995 9828"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Ph&#250; Nhuận"
  data-url="/contact-us/ho-chi-minh-city/quan-phu-nhuan/vus-phan-xich-long-q-phu-nhuan/" 
  data-type="marker"></li>
  <li data-lat="10.801376458813243"
  data-lng="106.65208082911374"
  data-name="VUS Cộng H&#242;a Q. T&#226;n B&#236;nh"
  data-description="105 Cộng H&#242;a, Q. T&#226;n B&#236;nh, TP. HCM"
  data-address="105 Cộng H&#242;a, Q. T&#226;n B&#236;nh, TP. HCM"
  data-phone="(028) 6 292 2080"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-T&#226;n B&#236;nh"
  data-url="/contact-us/ho-chi-minh-city/quan-tan-binh/vus-cong-hoa-q-tan-binh/" 
  data-type="marker"></li>
  <li data-lat="10.797350984986853"
  data-lng="106.65849541628563"
  data-name="VUS &#218;t Tịch Q. T&#226;n B&#236;nh"
  data-description="201/36A &#218;t Tịch, Q. T&#226;n B&#236;nh, TP. HCM"
  data-address="201/36A &#218;t Tịch, Q. T&#226;n B&#236;nh, TP. HCM"
  data-phone="(028) 3 811 2844"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-T&#226;n B&#236;nh"
  data-url="/contact-us/ho-chi-minh-city/quan-tan-binh/vus-ut-tich-q-tan-binh/" 
  data-type="marker"></li>
  <li data-lat="10.769892691893093"
  data-lng="106.63272576627037"
  data-name="VUS H&#242;a B&#236;nh Q. T&#226;n Ph&#250;"
  data-description="45B H&#242;a B&#236;nh, Q. T&#226;n Ph&#250;, TP. HCM"
  data-address="45B H&#242;a B&#236;nh, Q. T&#226;n Ph&#250;, TP. HCM"
  data-phone="(028) 3 961 1966"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-T&#226;n Ph&#250;"
  data-url="/contact-us/ho-chi-minh-city/quan-tan-phu/vus-hoa-binh-q-tan-phu/" 
  data-type="marker"></li>
  <li data-lat="10.825671562937805"
  data-lng="106.67949214756845"
  data-name="VUS Nguyễn Kiệm Q. G&#242; Vấp"
  data-description="679 Nguyễn Kiệm, Q. G&#242; Vấp, TP. HCM"
  data-address="679 Nguyễn Kiệm, Q. G&#242; Vấp, TP. HCM"
  data-phone="(028) 3 894 1888"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-G&#242; Vấp"
  data-url="/contact-us/ho-chi-minh-city/quan-go-vap/vus-nguyen-kiem-q-go-vap/" 
  data-type="marker"></li>
  <li data-lat="10.8357834"
  data-lng="106.6594857"
  data-name="VUS Quang Trung Q. G&#242; Vấp"
  data-description="651 - 651B Quang Trung, Q. G&#242; Vấp, TP. HCM"
  data-address="651 - 651B Quang Trung, Q. G&#242; Vấp, TP. HCM"
  data-phone="(028) 7 301 7768"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-G&#242; Vấp"
  data-url="/contact-us/ho-chi-minh-city/quan-go-vap/vus-quang-trung-q-go-vap/" 
  data-type="marker"></li>
  <li data-lat="10.811928"
  data-lng="106.712457"
  data-name="VUS Morning Star Q. B&#236;nh Thạnh"
  data-description="Số 57 Quốc lộ 13, Q. B&#236;nh Thạnh, TP. HCM"
  data-address="Số 57 Quốc lộ 13, Q. B&#236;nh Thạnh, TP. HCM"
  data-phone="(028) 3 551 4299"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận B&#236;nh Thạnh"
  data-url="/contact-us/ho-chi-minh-city/quan-binh-thanh/vus-morning-star-q-binh-thanh/" 
  data-type="marker"></li>
  <li data-lat="10.853017"
  data-lng="106.765621"
  data-name="VUS T&#244; Vĩnh Diện Q. Thủ Đức"
  data-description="09A T&#244; Vĩnh Diện, Q. Thủ Đức, TP. HCM"
  data-address="09A T&#244; Vĩnh Diện, Q. Thủ Đức, TP. HCM"
  data-phone="(028) 7 300 0445"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận Thủ Đức"
  data-url="/contact-us/ho-chi-minh-city/quan-thu-duc/vus-to-vinh-dien-q-thu-duc/" 
  data-type="marker"></li>
  <li data-lat="10.8613868"
  data-lng="106.7431925"
  data-name="VUS T&#244; Ngọc V&#226;n Q. Thủ Đức"
  data-description="485 T&#244; Ngọc V&#226;n, Tam Ph&#250;, Q. Thủ Đức, TP. HCM"
  data-address="485 T&#244; Ngọc V&#226;n, Tam Ph&#250;, Q. Thủ Đức, TP. HCM"
  data-phone="(028) 7 300 1356"
  data-city="TP. HCM"
  data-show-city="TP. HCM"
  data-district="TP. HCM-Quận Thủ Đức"
  data-url="/contact-us/ho-chi-minh-city/quan-thu-duc/vus-to-ngoc-van-q-thu-duc/" 
  data-type="marker"></li>
  <li data-lat="21.004335"
  data-lng="105.802413"
  data-name="VUS L&#234; Văn Lương"
  data-description="Lầu 3, T&#242;a nh&#224; Golden Palace,  L&#244; C3 L&#234; Văn Lương, Quận Thanh Xu&#226;n, H&#224; Nội"
  data-address="Lầu 3, T&#242;a nh&#224; Golden Palace,  L&#244; C3 L&#234; Văn Lương, Quận Thanh Xu&#226;n, H&#224; Nội"
  data-phone="(024) 3 388 1199"
  data-city="H&#224; Nội"
  data-show-city="H&#224; Nội"
  data-district="H&#224; Nội-Quận Thanh Xu&#226;n"
  data-url="/contact-us/ha-noi/quan-thanh-xuan/vus-le-van-luong/" 
  data-type="marker"></li>
  <li data-lat="21.034643"
  data-lng="105.793486"
  data-name="VUS Cầu Giấy"
  data-description="Tầng 2 &amp; 3, T&#242;a Nh&#224; CTM, 299 Cầu Giấy, Phường Dịch Vọng, Quận Cầu Giấy, H&#224; Nội"
  data-address="Tầng 2 &amp; 3, T&#242;a Nh&#224; CTM, 299 Cầu Giấy, Phường Dịch Vọng, Quận Cầu Giấy, H&#224; Nội"
  data-phone="‎(024) 7 309 6979"
  data-city="H&#224; Nội"
  data-show-city="H&#224; Nội"
  data-district="H&#224; Nội-Quận Cầu Giấy"
  data-url="/contact-us/ha-noi/quan-cau-giay/vus-cau-giay/" 
  data-type="marker"></li>
  <li data-lat="21.013265"
  data-lng="105.827402"
  data-name="VUS Nguyễn Lương Bằng"
  data-description="Lầu 1,187 Nguyễn Lương Bằng, Quận Đống Đa, H&#224; Nội"
  data-address="Lầu 1,187 Nguyễn Lương Bằng, Quận Đống Đa, H&#224; Nội"
  data-phone="(024) 7 306 6979"
  data-city="H&#224; Nội"
  data-show-city="H&#224; Nội"
  data-district="H&#224; Nội-Quận Đống Đa"
  data-url="/contact-us/ha-noi/quan-dong-da/vus-nguyen-luong-bang/" 
  data-type="marker"></li>
  <li data-lat="20.993383"
  data-lng="105.868526"
  data-name="VUS Times City"
  data-description="Tầng 1 &amp; 2 Shophouse 06, T&#242;a T11 Times City, 458 Minh Khai, Quận Hai B&#224; Trưng, H&#224; Nội"
  data-address="Tầng 1 &amp; 2 Shophouse 06, T&#242;a T11 Times City, 458 Minh Khai, Quận Hai B&#224; Trưng, H&#224; Nội"
  data-phone="(024) 7 308 6979"
  data-city="H&#224; Nội"
  data-show-city="H&#224; Nội"
  data-district="H&#224; Nội-Quận Hai B&#224; Trưng"
  data-url="/contact-us/ha-noi/quan-hai-ba-trung/vus-vincom-times-city/" 
  data-type="marker"></li>
  <li data-lat="21.0359608"
  data-lng="105.7605225"
  data-name="VUS MỸ Đ&#204;NH"
  data-description="Shophouse B17-09, Vinhome Gardenia (KĐT Th&#224;nh Phố Xanh), H&#224;m Nghi, Quận Nam Từ Li&#234;m, H&#224; Nội "
  data-address="Shophouse B17-09, Vinhome Gardenia (KĐT Th&#224;nh Phố Xanh), H&#224;m Nghi, Quận Nam Từ Li&#234;m, H&#224; Nội "
  data-phone="(024) 7 305 6979"
  data-city="H&#224; Nội"
  data-show-city="H&#224; Nội"
  data-district="H&#224; Nội-Quận Nam Từ Li&#234;m"
  data-url="/contact-us/ha-noi/quan-nam-tu-liem/vus-my-dinh/" 
  data-type="marker"></li>
  <li data-lat="10.945390"
  data-lng="106.821913"
  data-name="VUS Bi&#234;n H&#242;a"
  data-description="213 - 215 V&#245; Thị S&#225;u, P. Thống Nhất, Bi&#234;n H&#242;a, Đồng Nai"
  data-address="213 - 215 V&#245; Thị S&#225;u, P. Thống Nhất, Bi&#234;n H&#242;a, Đồng Nai"
  data-phone="(025) 1 730 6979"
  data-city="Bi&#234;n H&#242;a"
  data-show-city="Bi&#234;n H&#242;a"
  data-district="Bi&#234;n H&#242;a-Đồng Nai"
  data-url="/contact-us/bien-hoa/dong-nai/vus-bien-hoa/" 
  data-type="marker"></li>
  <li data-lat="10.976195"
  data-lng="106.670262"
  data-name="VUS B&#236;nh Dương - Becamex"
  data-description="Tầng 2, TTTM Becamex, 230 Đại Lộ B&#236;nh Dương, Thủ Dầu Một, B&#236;nh Dương"
  data-address="Tầng 2, TTTM Becamex, 230 Đại Lộ B&#236;nh Dương, Thủ Dầu Một, B&#236;nh Dương"
  data-phone="(027) 4 222 2033"
  data-city="B&#236;nh Dương"
  data-show-city="B&#236;nh Dương"
  data-district="B&#236;nh Dương-Thủ Dầu Một"
  data-url="/contact-us/binh-duong/thu-dau-mot/vus-binh-duong/" 
  data-type="marker"></li>
  <li data-lat="10.994070"
  data-lng="106.650540"
  data-name="VUS B&#236;nh Dương 2 - CMT8"
  data-description="78 C&#225;ch Mạng Th&#225;ng T&#225;m, phường Ch&#225;nh Mỹ, th&#224;nh phố Thủ Dầu Một, tỉnh B&#236;nh Dương"
  data-address="78 C&#225;ch Mạng Th&#225;ng T&#225;m, phường Ch&#225;nh Mỹ, th&#224;nh phố Thủ Dầu Một, tỉnh B&#236;nh Dương"
  data-phone="(027) 4 730 1979"
  data-city="B&#236;nh Dương"
  data-show-city="B&#236;nh Dương"
  data-district="B&#236;nh Dương-Thủ Dầu Một"
  data-url="/contact-us/binh-duong/thu-dau-mot/vus-binh-duong-2-cmt8/" 
  data-type="marker"></li>
  <li data-lat="10.348689"
  data-lng="107.082175"
  data-name="VUS Vũng T&#224;u"
  data-description="498 Trương C&#244;ng Định, TP. Vũng T&#224;u"
  data-address="498 Trương C&#244;ng Định, TP. Vũng T&#224;u"
  data-phone="(025) 4 730 6979"
  data-city="Vũng T&#224;u"
  data-show-city="Vũng T&#224;u"
  data-district="Vũng T&#224;u-Vũng T&#224;u"
  data-url="/contact-us/vung-tau/vung-tau/vus-vung-tau/" 
  data-type="marker"></li>
</ul>
</section>
@include('clients/layout/register/register')
<div class="popup" data-module="popup">
  <div class="popup__detail popup__video">
    <div class="popup__content">
      <div class="popup__exit">
        <img src="assets/images/icon/ico-circle-exit.png" alt="">
      </div>
      <div id="trailer"></div>
    </div>
  </div>
  <div class="popup__detail popup__signup popup-form-wrapper">
    <div class="popup__signup-content">
      <div class="popup__content">
        <div class="popup__exit">
          <img src="assets/images/icon/ico-circle-exit.png" alt="">
        </div>
        <div class="popup__headline">
          <div class="headline">
            ĐĂNG K&#221; TƯ VẤN ĐỂ NHẬN LỘ TR&#204;NH HỌC
          </div>
        </div>
        <div class="signup-detail">
          <form action="#" id="form__consult__register__popup" class="VUS">
            <input type="hidden" name="source_block" value="Popup contact" />
            <input type="hidden" name="courseType" class="courseType o2o-courseType" value="" />
            <div class="contact-signup-content">
              <div class="input-block clearfix">
                <input type="text" class="half-w left txtFullname o2o-name" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                <input type="text" class="half-w right txtDateofBirth o2o-birthday" data-text-required="Bạn chưa nhập ng&#224;y sinh " placeholder="Ngày tháng năm sinh(dd/mm/yyyy)*">
              </div>
              <div class="input-block clearfix">
                <input type="text" class="half-w left txtContactName o2o-contactname" placeholder="T&#234;n phụ huynh">
                <select name="" id="txtCity" class="half-w right select-city o2o-city" data-text-required="Bạn chưa chọn th&#224;nh phố" data-text-select="Tỉnh/ Thành phố">
                  <option value="" data-city="">Tỉnh/ Thành phố</option> 
                  <option value="518c73f1-2621-40b8-8373-50458bbef950" data-city="HCM">Tp.Hồ Chí Minh</option> 
                  <option value="58608128-69f6-433f-8385-0bd312196547" data-city="HN">Hà Nội</option> 
                  <option value="7111df16-bde0-44b8-aa47-cf5e9e4fccd7" data-city="BD">Bình Dương</option> 
                  <option value="3329e3d9-0dd7-4367-81e9-9b385a85d4d8" data-city="DN">Đồng Nai</option> 
                  <option value="ed2cceb4-9d51-4544-bfdc-4f852ce6e198" data-city="VT">Vũng Tàu</option> 
                  <option value="Tỉnh thành khác" data-city="KHAC">Tỉnh thành khác</option> 
                </select>
              </div>
              <div class="input-block clearfix">
                <input type="text" class="half-w left txtEmail o2o-email" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                <input type="text" class="half-w right txtPhone o2o-phone" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
              </div>
              <div class="input-block clearfix">
                <select name="nhucauhoc" class="input-block nhucauhoc" style="background-color:#fff">
                  <option value="">Khóa học quan tâm</option>
                  <option value="Tiếng Anh Trẻ Em (4 - 11 Tuổi)">Tiếng Anh Trẻ Em (4 - 11 Tuổi)</option>
                  <option value="Tiếng Anh Thiếu Niên (11-15 Tuổi)">Tiếng Anh Thiếu Niên (11-15 Tuổi)</option>
                  <option value="Lớp 100% Giáo Viên Nước Ngoài">Lớp 100% Giáo Viên Nước Ngoài</option>
                  <option value="Luyện Thi IELTS, TOEFL iBT">Luyện Thi IELTS, TOEFL iBT</option>
                  <option value="Tiếng Anh Dành Cho Người Lớn">Tiếng Anh Dành Cho Người Lớn</option>
                </select>
              </div>
              <div class="input-block clearfix">
                <textarea class="block-textarea txtNote o2o-notes" data-text-required="Bạn chưa nhập th&#244;ng điệp" placeholder="Th&#244;ng tin th&#234;m về nhu cầu học"></textarea>
              </div>
              <div class="btn-submit">
                <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40" data-title="Gửi th&#244;ng tin">
                  <i class="ico ico-pen"></i>
                  <span class="text">Gửi th&#244;ng tin</span>
                </button>
              </div>
            </div>
          </form>
          <div class="contact-signup__contact">
            <div>
              <div class="hotline">
                <span class="text">
                  Khu vực miền Nam (TP HCM, B&#236;nh Dương, Bi&#234;n H&#242;a - Đồng Nai, Vũng T&#224;u)
                </span>
                <a href="tel:028.7308 3333" class="detail ico ico-phone-blue">
                  028.7308 3333
                </a>
              </div>
              <div class="hotline">
                <span class="text">
                  H&#224; Nội
                </span>
                <a href="tel:024.3388 1199" class="detail ico ico-phone-blue">
                  024.3388 1199
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="popup__detail popup__search popup-form-wrapper">
    <div class="popup__search-result container">
      <div class="popup__content">
        <div class="popup__exit">
          <img src="assets/images/icon/ico-circle-exit.png" alt="">
        </div>
        <div class="popup__search-detail popup__search-detail-1168 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Anh Ngữ Mẫu Gi&#225;o SMARTKIDS
              </h4>
              <p class="desc">
                (4 – 6 tuổi)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Nền tảng vững chắc ngay từ bước khởi đầu, giúp các em phát âm chuẩn, hình thành sự tự tin, dạn dĩ khi tiếp xúc với tiếng Anh.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/anh-ngu-mau-giao-smartkids/index.html" title="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Anh Ngữ Mẫu Gi&#225;o SMARTKIDS" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1220 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Anh Ngữ Thiếu Nhi SUPERKIDS
              </h4>
              <p class="desc">
                (6 – 11 tuổi)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Công nghệ giảng dạy Tiếng Anh của Hoa Kỳ độc quyền tại VUS giúp phát âm chuẩn, tự tin giao tiếp và đạt kết quả cao trong các kỳ thi Anh ngữ quốc tế Cambridge Starters, Movers, Flyers.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/anh-ngu-thieu-nhi-superkids/index.html" title="Anh Ngữ Thiếu Nhi SUPERKIDS">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Anh Ngữ Thiếu Nhi SUPERKIDS" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1293 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS
              </h4>
              <p class="desc">
                (11 – 15 tuổi)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Chương trình cập nhật, nội dung giảng dạy mang tính toàn cầu giúp học viên giao tiếp lưu loát, rèn luyện kỹ năng và tự tin đạt điểm cao trong các kỳ thi chứng chỉ Anh ngữ quốc tế.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/anh-ngu-thieu-nien-young-leaders/index.html" title="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Anh Ngữ Thiếu Ni&#234;n YOUNG LEADERS" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1311 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT
              </h4>
              <p class="desc">
                (từ 15 tuổi)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Trang bị kiến thức, hoàn thiện kỹ năng và rèn luyện chiến thuật làm bài để đạt điểm cao trong các kỳ thi quốc tế IELTS, TOEFL iBT nhằm đáp ứng nhu cầu học tập và công việc của mỗi học viên.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/luyen-thi-chung-chi-quoc-te-ielts-toefl-ibt/index.html" title="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Luyện Thi Chứng Chỉ Quốc Tế IELTS, TOEFL iBT" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1344 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH 
              </h4>
              <p class="desc">
                (từ 16 tuổi)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Trang bị kiến thức Anh ngữ nền tảng và hoàn thiện 4 kỹ năng Anh ngữ quan trọng giúp học viên tự tin trong công việc và cuộc sống cũng như sẵn sàng cho các kỳ thi Anh ngữ Quốc tế.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/chuong-trinh-interactive-english-become-a-leader/index.html" title="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH ">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Anh Ngữ Tương T&#225;c INTERACTIVE ENGLISH " />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1345 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Anh Ngữ Giao Tiếp iTALK
              </h4>
              <p class="desc">
                (từ 17 tuổi)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Giúp học viên giao tiếp tiếng Anh tự tin trong thời gian ngắn nhất để phục vụ cho nhu cầu học tập, làm việc, du lịch hoặc định cư nước ngoài.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/anh-ngu-dam-thoai-ung-dung-italk/index.html" title="Anh Ngữ Giao Tiếp iTALK">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Anh Ngữ Giao Tiếp iTALK" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1219 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Lớp Cấp Tốc Cho Người “Mất Gốc”
              </h4>
              <p class="desc">
                ()
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Lộ trình học tập được tăng tốc phù hợp với người cần học nhanh và đạt hiệu quả tức thì, cải thiện 4 kỹ năng Anh ngữ cấp tốc trong thời gian ngắn và đạt hiệu quả tối ưu.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/anh-ngu-cap-toc-danh-cho-nguoi-mat-goc/index.html" title="Lớp Cấp Tốc Cho Người “Mất Gốc”">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Lớp Cấp Tốc Cho Người “Mất Gốc”" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-1725 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp
              </h4>
              <p class="desc">
                ()
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Thiết kế phù hợp với yêu cầu của từng tổ chức, theo đặc thù của từng ngành nghề để người học giao tiếp Anh ngữ thật tự tin và chuyên nghiệp, hỗ trợ tốt nhất cho công việc.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/chuong-trinh-danh-rieng-cho-doanh-nghiep/index.html" title="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Chương Tr&#236;nh D&#224;nh Ri&#234;ng Cho Doanh Nghiệp" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-9308 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i
              </h4>
              <p class="desc">
                ()
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Chương trình dành cho học viên từ 4 đến 15 tuổi, với nội dung học cập nhật, chất lượng đào tạo chuẩn quốc tế cùng đội ngũ 100% Giáo viên Nước ngoài chuyên môn cao, am hiểu tâm lý lứa tuổi giúp học viên tiến bộ nhanh và trải nghiệm môi trường học quốc tế.
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/anh-ngu-100percent-giao-vien-nuoc-ngoai/index.html" title="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Tiếng Anh 100% Gi&#225;o Vi&#234;n Nước Ngo&#224;i" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="popup__search-detail popup__search-detail-12510 clearfix hidden">
          <input type="hidden" name="age" value="" />
          <input type="hidden" name="need" value="" />
          <input type="hidden" name="location" value="" />
          <input type="hidden" name="budget" value="" />
          <input type="hidden" name="timeclass" value="" />
          <div class="search-detail__info">
            <div class="headline-block">
              <h3 class="headline">
                CHƯƠNG TRÌNH HỌC<br>
                PHÙ HỢP VỚI BẠN
              </h3>
              <h4 class="title">
                Học ph&#237; VUS
              </h4>
              <p class="desc">
                (Học ph&#237; VUS)
              </p>
            </div>
            <div class="search-detail__content">
              <div class="search-detail__content__desc">
                Học phí VUS
              </div>
              <ul class="search-detail__content__list">
              </ul>
              <div class="seemore-block">
                <a class="link-seemore" href="programs/hoc-phi-vus/index.html" title="Học ph&#237; VUS">
                  T&#236;m hiểu th&#234;m
                  <span class="fa fa-long-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="search-detail__form">
            <div class="bg"></div>
            <div class="search-detail__form__block">
              <ul class="search-detail__icons">
                <li class="search-detail__icons--location">
                  <i class="ico ico-check"></i>
                  <p>Tp.Hồ Chí Minh</p>
                </li>
                <li class="search-detail__icons--budget">
                  <i class="ico ico-cash"></i>
                  <p>Dưới 10 triệu</p>
                </li>
                <li class="search-detail__icons--time">
                  <i class="ico ico-clock"></i>
                  <p>18:00 - 19:30</p>
                </li>
              </ul>
              <div class="search-detail__form__content" data-module="holder-effect">
                <form action="#" class="form__search__register" onsubmit="return false">
                  <input type="hidden" name="courseName" value="Học ph&#237; VUS" />
                  <div class="input-block">
                    <input class="input-holder" name="fullname" type="text" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="phone" type="text" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="email" type="text" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                  </div>
                  <div class="input-block">
                    <input class="input-holder" name="near_by" type="text" placeholder="VUS gần bạn">
                  </div>
                  <div class="btn-submit">
                    <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40">
                      <i class="ico ico-mail"></i>
                      <span class="text">Gửi th&#244;ng tin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('clients/layout/footer/footer')

<div id="hiddenDiv" style="display: none">
  <input type="hidden" id="hdPage" value="Home"/>
  <input type="hidden" id="hdUsername" value=""/>
  <input type="hidden" id="hdLangID" value='42'/>
  <input type="hidden" id="hdTYLink" value='/thank-you/'/>
  <input type="hidden" id="hdIsMobile" value="False"/>
  <input type="hidden" id="hdPrevURL" value=""/>
  <input type="hidden" id="hdUserAgent" value="Mozilla/4.5 (compatible; HTTrack 3.0x; Windows 98)"/>
  <input type="hidden" id="hdSessionUTM" value=""
  />
  <input type="hidden" id="hdUTMSource" value="" />
  <input type="hidden" id="hdUTMCampaign" value="" />
  <input type="hidden" id="hdUTMMedium" value="" />
  <a id="hdATYLink" href="thank-you/index.html" target="_blank"></a>
</div>
<div id="fb-customerchat" class="fb-customerchat"
page_id="1397112363883389"
ref="website"
theme_color="#334c7c"
logged_in_greeting="Xin chào ! VUS giúp được gì cho bạn?"
logged_out_greeting="Xin chào ! VUS giúp được gì cho bạn?">
</div>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/function.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.gmap.min.js')}}"></script>
<script>var dataLayer = [{'trackingId': 'UA-32781948-1', 'hostName': 'https://crm.vus.edu.vn'}];</script>
<script src="{{asset('js/tgtm.js')}}"></script>
<script>
  function send_ga_hit(page_url, page_title) {
    ga('send', {'hitType': 'pageview', 'page': page_url, 'title': page_title});
  }
</script>
</body>
</html>