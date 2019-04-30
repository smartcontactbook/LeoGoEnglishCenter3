<header data-module="scroll-sticky header">
    <div class="header__social-bar clearfix hidden-xs">
        <div class="social-language">
            <div class="language">
                <div style="display:inline-block; padding-top: 10px">

<!--                     <a target="_blank" href="" title="Super Summer 2019">
                        <img src="{{asset('assets/images/Supper_Summer_Logo.svg')}}" style="width:150px;margin:0" alt="Super Summer 2019" border="0">
                    </a> -->
                    <a href="" class="btn-regular" >
              Tiếng Anh Giao Tiếp iTALK</a>
                    <a href="" class="btn-regular">
              Teaching at LeoGo</a>
                </div>
            </div>
            <div class="social">
                <div class="contact-phone" style="background: url({{ asset('assets/images/telephone.svg')}}) no-repeat 0;background-size:14px;padding-left:24px;font-family: Roboto,'san-serif';font-weight:300;display:inline-block;color:#fff">
                    Hotline: <a href="tel:091 145 77 99" title="091 145 77 99" style="color:#fff">091 145 77 99</a>
                </div>
                <a href="https://www.facebook.com/leogocenter/" class="ico-fb hide" target="_blank"></a>
                <a href="https://www.youtube.com/channel/UCfUWwTaz_1Ticrno2ogXGUw" class="ico-utube hide" target="_blank"></a>
            </div>
        </div>
    </div>
    <div class="header__nav clearfix hidden-xs">
        <div class="header__logo">
            <a href="index.html">
                <img id="logo" src="{{ asset('image/avatar/logo.png')}}" style="width: 100px; height: 60px" alt="">
                <img id="logo-sticky" src="{{ asset('image/avatar/logo.png')}}" style="width: 100px; height: 60px">
            </a>
        </div>

        <div class="header__wrap-nav">
            <ul>
                <li class="">
                    <a class="text_menu" href="about-us/index.html"><span>Giới thiệu về LeoGo</span></a>
                    <div class="sub-menu">
                        <ul>
                            <li class="">
                                <a href="{{ route('getHome') }}">
                                    <div>Giới Thiệu LeoGo</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="{{ route('getQuatily') }}">
                                    <div>Chuẩn đ&#224;o tạo quốc tế</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="{{ route('getTeacher') }}">
                                    <div>Đội Ngũ Giảng Dạy</div>
                                </a>

                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a class="text_menu" href="programs/index.html"><span>C&#225;c kh&#243;a học</span></a>
                    <div class="sub-menu">
                        <ul>
                          @foreach($course as $value)
                            <li class="">
                                <a href="">
                                    <div>{{ $value->Course_Name }}</div>
                                </a>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </li>
                <li class=" extHref">
                    <a class="text_menu"><span>G&#243;c học vi&#234;n</span></a>
                    <div class="sub-menu">
                        <ul>
                            <li class="">
                                <a href="">
                                    <div>Học vi&#234;n ti&#234;u biểu</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="">
                                    <div>G&#243;c vinh danh học vi&#234;n</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="">
                                    <div>Road to IELTS</div>
                                </a>

                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a class="text_menu" href=""><span>Tin tức sự kiện</span></a>
                    <div class="sub-menu">
                        <ul>
                            <li class="">
                                <a href="">
                                    <div>Tin tức sự kiện</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="gallery/photo/index.html">
                                    <div>Thư viện h&#236;nh ảnh</div>
                                </a>

                            </li>
                        </ul>
                    </div>
                </li>
                <li class=" extHref">
                    <a class="text_menu" href="#"><span>Job Opportunities </span></a>
                    <div class="sub-menu">
                        <ul>
                            <li class="">
                                <a href="">
                                    <div>Tuyển dụng nh&#226;n vi&#234;n</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="">
                                    <div>TEACHING AT VUS</div>
                                </a>

                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header__find-sign">
            <div class="header__find"></div>
            <div class="header__find__input">
                <input type="text" class="global__search__input" placeholder="T&#236;m kiếm...">
            </div>

            <a href="#" class="header__sign btn-regular" style="padding-left:35px;padding-right:10px" onclick="VusFunc.setBlock('Main menu - Popup contact'); myApp.openPopup('.popup__signup')">
                <i class="icofont-location-arrow" style="margin-left: -20px"></i>
                <!-- <img src="{{ asset('image/avatar/navigation.png')}}" style="margin-left:-30px; margin-right: 5px; padding-top:px" > -->
                <span style="white-space:nowrap">
      Li&#234;n hệ ngay
    </span>
            </a>
        </div>
    </div>
    <div class="header__resp">
        <div class="header__resp__nav clearfix">
            <a href="index.html"><img id="logo" src="{{ asset('image/avatar/logo.png')}}" style="width: 100px; height: 65px" alt=""></a>
            <div class="hamburger-block">
                <div class="hamburger">
                    <div class="line">CLOSE</div>
                </div>
            </div>
        </div>
        <div class="header__resp__list-menu">
            <ul>

                <li class="">
                    <div class="text_menu"><span>Giới thiệu về VUS</span><i class="fa fa-angle-right"></i></div>
                    <div class="sub-menu">
                        <ul>
                            <li class="">
                                <a href="about-us/index.html">
                                    <div><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Giới Thiệu VUS</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="about-us/chat-luong-giang-day.html">
                                    <div><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Chuẩn đ&#224;o tạo quốc tế</div>
                                </a>

                            </li>
                            <li class="">
                                <a href="teachers/teachers-hall-of-frame/index.html">
                                    <div><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Đội Ngũ Giảng Dạy</div>
                                </a>

                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <div class="text_menu"><span>C&#225;c kh&#243;a học</span><i class="fa fa-angle-right"></i></div>
                    <div class="sub-menu">
                        <ul>
                            <li class="">
                                <a href="findcourses/index.html">
                                    <div><i class="fa fa-angle-right"></i>&nbsp;&nbsp;T&#236;m kh&#243;a học ph&#249; hợp</div>
                                </a>
                            </li>
                        </ul>
                        <div class="header__resp__search">
                            <input type="text" class="global__search__input" placeholder="T&#236;m kiếm...">
                            <button type="button" class="ico-find btn-find"></button>
                        </div>
                        <div class="btn-sign-up">
                            <div class="btn-regular btn-regular--bg-white btn-regular--lr40" onclick="VusFunc.setBlock('Main menu - Popup contact'); myApp.openPopup('.popup__signup')">
                                <span>Đăng k&#253; tư vấn</span>
                            </div>
                        </div>
                        <div class="header__resp__social">
                            <div class="social">
                                <a href="https://www.facebook.com/pg/AnhvanhoiVietMy.VUS/about/" class="ico-fb" target="_blank"></a>
                                <a href="https://www.youtube.com/channel/UCfUWwTaz_1Ticrno2ogXGUw" class="ico-utube" target="_blank"></a>
                            </div>
                            <div class="language">
                            </div>
                        </div>
                    </div>
        </div>

</header>