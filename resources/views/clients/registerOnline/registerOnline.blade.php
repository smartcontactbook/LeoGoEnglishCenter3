<div class="popup" data-module="popup">
  <div class="popup__detail popup__video">
    <div class="popup__content">
      <div class="popup__exit">
        <img src="{{ asset('assets/images/icon/ico-circle-exit.png') }}" alt="">
      </div>
      <div id="trailer"></div>
    </div>
  </div>
  <div class="popup__detail popup__signup popup-form-wrapper">
    <div class="popup__signup-content">
      <div class="popup__content">
        <div class="popup__exit">
          <img src="{{ asset('assets/images/icon/ico-circle-exit.png')}}" alt="">
        </div>
        <div class="popup__headline">
          <div class="headline">
            ĐĂNG K&#221; TƯ VẤN ĐỂ NHẬN LỘ TR&#204;NH HỌC
          </div>
        </div>
        <div class="signup-detail">
          <form action="{{ route('postRegisterOnline') }}"  method="POST" id="form__consult__register__popup" class="VUS">
              <!-- <form id="addRegisterOnline"> -->
              {!! csrf_field() !!}
            <input type="hidden" name="source_block" value="Popup contact" />
            <input type="hidden" name="courseType" class="courseType o2o-courseType" value="" />
            <div class="contact-signup-content">
              <div class="input-block clearfix">
                <input type="text" class="half-w left txtFullname o2o-name" data-text-required="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*">
                <input type="text" class="half-w right txtDateofBirth o2o-birthday" data-text-required="Bạn chưa nhập ng&#224;y sinh " placeholder="Ngày tháng năm sinh(dd/mm/yyyy)*">
              </div>
              <div class="input-block clearfix">
                <input type="text" class="half-w left txtContactName o2o-contactname" data-text-required="Bạn chưa nhập tên phụ huynh " placeholder="T&#234;n phụ huynh">
                <input type="text" class="half-w right txtPhone o2o-phone" data-text-required="Bạn chưa nhập địa chỉ " placeholder="Địa chỉ">
              </div>
              <div class="input-block clearfix">
                <input type="text" class="half-w left txtEmail o2o-email" data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
                <input type="text" class="half-w right txtPhone o2o-phone" data-text-required="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*">
              </div>
              <div class="input-block clearfix">
                <select name="nhucauhoc" class="input-block nhucauhoc" style="background-color:#fff">
                  <option value="">Khóa học quan tâm</option>
                  @foreach($getCourses as $value)
                    <option value="{{ $value->id }}">{{ $value->Course_Name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="input-block clearfix">
                  <select name="nhucauhoc" class="input-block nhucauhoc" style="background-color:#fff">
                    <option value="">Hình thức thanh toán</option>
                    <option value="0">Thanh toán sau khi nhập học</option>
                    <option value="1">Thanh toán ngay</option>
                  </select>
                </div>
              <div class="input-block clearfix">
                <textarea class="block-textarea txtNote o2o-notes" data-text-required="Bạn chưa nhập th&#244;ng điệp" placeholder="Th&#244;ng tin th&#234;m về nhu cầu học"></textarea>
              </div>
              
              <div class="btn-submit">
                <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40" data-title="Gửi th&#244;ng tin">
                  <i class="icofont-send-mail"></i>
                  <span class="text">Gửi th&#244;ng tin</span>
                </button>
                <button type="submit" class=" btn-text-w-ico btn-regular btn-regular--lr40" data-title="Gửi th&#244;ng tin" style="margin-left: 50px">
                  <i class="icofont-send-mail"></i>
                  <span class="text">Thanh Toán Ngay</span>
                </button>
              </div>
            </div>
          </form>
          <div class="contact-signup__contact">
            <div>
              <div class="hotline">
                <span class="text">   
                  Tòa nhà VNPT cầu Sông Hàn, 47 Trần Phú 
                </span>
                <a href="tel:091 145 77 99" " >
                  091 145 77 99
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
          <img src="{{ asset('assets/images/icon/ico-circle-exit.png') }}" alt="">
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