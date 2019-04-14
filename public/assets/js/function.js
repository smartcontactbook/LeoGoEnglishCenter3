var commonMethod = {
    /* SweetAlert */
    showAlert: function (msg, callback) {
        myApp['swal']({
            title: "",
            html: msg,
            type: "warning",
            // showConfirmButton: false,
            timer: 2500,
            showCancelButton: false,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "OK"
        }).then(function (result) {
            console.log(result);
            if (callback) callback();
        });
    },
    showSuccess: function (msg, callback) {
        myApp['swal']({
            title: "",
            html: msg,
            type: "success",
            // showConfirmButton: false,
            timer: 2500,
            showCancelButton: false,
            confirmButtonClass: "btn-success",
            confirmButtonText: "OK"
        }).then(function (result) {
            console.log(result);
            if (callback) callback();
        });
    },
    showConfirm: function (msg, callback) {
        myApp['swal']({
            title: "",
            html: msg,
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "OK"
        }).then(function (result) {
            console.log(result);
            if (callback) callback();
        });
    },

    /* Validator */
    validateEmptyText: function (input) {
        return (!input || 0 === input.length);
    },
    validatePhoneNo: function (phone) {
        var flag = false;
        phone = phone.replace('(+84)', '0');
        phone = phone.replace('+84', '0');
        phone = phone.replace('0084', '0');
        phone = phone.replace(/ /g, '');
        if (phone != '') {
            var firstNumber = phone.substring(0, 2);
            if ((firstNumber == '09' || firstNumber == '03' || firstNumber == '07' || firstNumber == '08') && phone.length == 10) {
                if (phone.match(/^\d{10}/)) {
                    flag = true;
                }
            } else if (firstNumber == '01' && phone.length == 11) {
                if (phone.match(/^\d{11}/)) {
                    flag = true;
                }
            }
        }
        return flag;
    },
    validateEmail: function (e) {
        var n = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return n.test(e)
    }
};
var VusFunc = {
    init: function () {
        //common binding event handler
        VusFunc.common();
        //VusFunc.loadProvince();
    },
    common: function () {
        $(document).on('submit', '#form__consult__register__popup', function (event) {
            event.preventDefault();
            VusFunc.submitConsultRegistration('form__consult__register__popup');
        });
        $(document).on('submit', '#form__consult__register', function (event) {
            event.preventDefault();
            VusFunc.submitConsultRegistration('form__consult__register');
        });
        $(document).on('change', '.student-corner .filter-block__dropdown select', function () {
            var year = $('#select__year').val();
            var program = $('#select__program').val();
            var score = $('#select__score').val();
            window.location.href = location.protocol + '//' + location.host + location.pathname + '?year=' + year + '&prog=' + program + '&score=' + score;
        });
        $(document).on('change', '.student-articles .filter-block__dropdown select', function () {
            var year = $('#select__year').val();
            var stage = $('#select__stage').val();
            window.location.href = location.protocol + '//' + location.host + location.pathname + '?year=' + year + '&stage=' + stage;
        });
        $(document).on('change', '#select__category', function () {
            var category = $(this).val();
            window.location.href = location.protocol + '//' + location.host + location.pathname + '?category=' + category;
        });
        $(document).on('change', '.news-filter__mobile select', function () {
            var type = $('.news-filter__mobile select option:selected').data('type');
            window.location.href = location.protocol + '//' + location.host + location.pathname + '?type=' + type;
        });
    },

    loadProvince: function (callback) {
        var ddl = $('.select-city');
        var stl = $('.course-tool__location .custom-scroll');
        var text_select = $('#txtCity').data('text-select');
        if (ddl.length > 0) {
            ///Umbraco/Surface/Survey/GetProvince
            $.ajax({
                type: "POST",
                url: "https://student-api.vus.edu.vn/GetProvince",
                data: {},
                cache: false,
                dataType: "json",
                async: true,
                success: function (response) {
                    if (response && response.StatusCode === 1) {
                        var d = (response.Data) || [];
                        if (d.length > 0) {
                            ddl.empty();
                            ddl.append('<option value="">' + text_select + '*</option>');

                            stl.empty();

                            $.each(d, function (i, p) {
                                ddl.append('<option value="' + p.Value + '">' + p.Name + '</option>');
                                stl.append('<li class="" data-value="' + p.Name + '"><span class="text">' + p.Name + '</span></li>');
                            });

                            if (typeof callback === 'function')
                                callback();
                        } else if (typeof callback === 'function')
                            callback();
                    } else {
                        //error load province

                        if (typeof callback === 'function')
                            callback();
                    }
                },
                error: function (response) {
                    console.log('Error : ', response);

                    if (typeof callback === 'function')
                        callback();
                }
            });
        } else if (typeof callback === 'function')
            callback();
    },

    submitConsultRegistration: function (formId) {
        var $button = $("#" + formId + " button[type=submit]");
        $button.children("span").html("PLEASE WAIT");
        var formElement = $("#" + formId);
        var fullnameElement = $("#" + formId + " .txtFullname");
        var dobElement = $("#" + formId + " .txtDateofBirth");
        var contactNameElement = $("#" + formId + " .txtContactName");
        var cityElement = $("#" + formId + " .select-city");
        var emailElement = $("#" + formId + " .txtEmail");
        var phoneElement = $("#" + formId + " .txtPhone");
        var addinfo = $("#" + formId + " .nhucauhoc");
        var noteElement = $("#" + formId + " .txtNote");
        var SourceBlock = $("#" + formId + " input[name=source_block]").val();
        var langID = $("#hdLangID").val();
        var Fullname = fullnameElement.val();
        var DateOfBirth = dobElement.val();
        var ContactName = contactNameElement.val();
        var City = cityElement.val();
        var CityName = $("#" + formId + " .select-city option:selected").text();
        var Email = emailElement.val();
        var Phone = phoneElement.val().replace(/\s+/ig, '');
        if (addinfo.val() != "") {
            var UserNote = addinfo.val() + " - " + noteElement.val();
        } else {
            var UserNote = noteElement.val();
        }
        //UTM Tracking
        var UTMSource = $("#hdUTMSource").val();
        var UTMCamp = $("#hdUTMCampaign").val();
        var UTMMedium = $("#hdUTMMedium").val();
        var PrevURL = $("#hdPrevURL").val();
        var UserAgent = $("#hdUserAgent").val();
        var SessionUTM = $("#hdSessionUTM").val();
        var pageName = $("#hdPage").val();

        if (commonMethod.validateEmptyText(Fullname)) {
            commonMethod.showAlert(fullnameElement.data('text-required'), function () {
                fullnameElement.focus();
            });
            $button.children("span").html($button.attr("data-title"));
            return false;
        }
        if (commonMethod.validateEmptyText(DateOfBirth)) {
            commonMethod.showAlert(dobElement.data('text-required'), function () {
                dobElement.focus();
            });
            $button.children("span").html($button.attr("data-title"));
            return false;
        }
        if (commonMethod.validateEmptyText(City)) {
            commonMethod.showAlert(cityElement.data('text-required'), function () {
                cityElement.focus();
            });
            $button.children("span").html($button.attr("data-title"));
            return false;
        }
        if (!commonMethod.validateEmail(Email)) {
            commonMethod.showAlert(emailElement.data('text-invalid'), function () {
                emailElement.focus();
            });
            $button.children("span").html($button.attr("data-title"));
            return false;
        }
        if (commonMethod.validateEmptyText(Phone)) {
            commonMethod.showAlert(phoneElement.data('text-required'), function () {
                phoneElement.focus();
            });
            $button.children("span").html($button.attr("data-title"));
            return false;
        }
        if (!commonMethod.validatePhoneNo(Phone)) {
            commonMethod.showAlert(phoneElement.data('text-invalid'), function () {
                phoneElement.focus();
            });
            $button.children("span").html($button.attr("data-title"));
            return false;
        }
        $button.prop("disabled", true);
        setTimeout(function () {
            $button.prop("disabled", false);
            $button.children("span").html($button.attr("data-title"));
            formElement[0].reset();
            setTimeout(function () {
                window.location = "https://vus.edu.vn/thank-you/?TYID=1";
            }, 100);
        }, 2000);
        return true;
    },

    searchTool: function () {
        var ages = ['4-6', '6-11', '11-15', '15-18', '18-22', '22'];
        var needs = [
            [],
            [],
            ['lay-chung-chi-quoc-te', 'ren-luyen-ky-nang'],
            ['lay-chung-chi-quoc-te', 'hoc-can-ban-mat-goc', 'nhu-cau-giao-tiep']
        ];

        var age = $('.course-tool__age .result').attr('data-value');
        var age_message = $('.course-tool__age').attr('data-required');
        var need = $('.course-tool__need .result').attr('data-value');
        var need_message = $('.course-tool__need').attr('data-required');
        var location = $('.course-tool__location .result').attr('data-value');
        var time = $('.course-tool__time .result').attr('data-value');
        var budget = $('.course-tool__budget .result').attr('data-value');

        // console.log(age);
        // console.log(need);

        if (!age) {
            commonMethod.showAlert(age_message, function () {
                //$("#txtPhone").focus();
            });
            return false;
        }

        if (!need && age && age != '4-6' && age != '6-11') {
            commonMethod.showAlert(need_message, function () {
                //$("#txtPhone").focus();
            });
            return false;
        }

        $('.popup__search-detail input[name=location]').val(location);
        $('.popup__search-detail input[name=timeclass]').val(time);
        $('.popup__search-detail input[name=budget]').val(budget);
        $('.popup__search-detail input[name=need]').val(need);
        $('.popup__search-detail input[name=age]').val(age);

        /* find result mechanics */
        var courseId = '';
        if (age == '4-6') {
            courseId = '1168';
        } else if (age == '6-11') {
            courseId = '1220';
        } else if (age == '11-15' || age == '15-18' || age == '18-22' || age == '22') {
            if (need == 'chung-chi-quoc-te') {
                courseId = '1311';
            } else if (need == 'ren-luyen-ky-nang') {
                courseId = '1293';
            } else if (need == 'hoc-can-ban-mat-goc') {
                courseId = '1344';
            } else if (need == 'nhu-cau-giao-tiep') {
                courseId = '1345';
            }
        }
        console.log(courseId);
        $('.popup__search-result .popup__search-detail').addClass('hidden');
        $('.popup__search-result .popup__search-detail-' + courseId).removeClass('hidden');

        if (location) {
            $('.search-detail__icons--location').removeClass('hidden');
            $('.search-detail__icons--location p').text(location);
        } else {
            $('.search-detail__icons--location').addClass('hidden');
        }
        if (time) {
            $('.search-detail__icons--time').removeClass('hidden');
            $('.search-detail__icons--time p').text(time);
        } else {
            $('.search-detail__icons--time').addClass('hidden');
        }
        if (budget) {
            $('.search-detail__icons--budget').removeClass('hidden');
            $('.search-detail__icons--budget p').text(budget);
        } else {
            $('.search-detail__icons--budget').addClass('hidden');
        }

        myApp.openPopup('.popup__search');

    },

    submitSearchRegister: function (form) {
        // console.log(form);
        var location = $('.popup__search-detail input[name=location]').val();
        var timeclass = $('.popup__search-detail input[name=timeclass]').val();
        var budget = $('.popup__search-detail input[name=budget]').val();
        var need = $('.popup__search-detail input[name=need]').val();
        var age = $('.popup__search-detail input[name=age]').val();

        var fullname = form.find('input[name=fullname]').val();
        var email = form.find('input[name=email]').val();
        var phone = form.find('input[name=phone]').val();
        var near_by = form.find('input[name=near_by]').val();
        var courseName = form.find('input[name=courseName]').val();
        // console.log(fullname);

        var langID = $("#hdLangID").val();
        //UTM Tracking
        var UTMSource = $("#hdUTMSource").val();
        var UTMCamp = $("#hdUTMCampaign").val();
        var UTMMedium = $("#hdUTMMedium").val();

        var PrevURL = $("#hdPrevURL").val();
        var UserAgent = $("#hdUserAgent").val();
        var SessionUTM = $("#hdSessionUTM").val();
        var pageName = $("#hdPage").val();

        if (commonMethod.validateEmptyText(fullname)) {
            commonMethod.showAlert(form.find('input[name=fullname]').data('text-required'), function () {
                form.find('input[name=fullname]').focus();
            });
            return false;
        }
        if (commonMethod.validateEmptyText(phone)) {
            commonMethod.showAlert(form.find('input[name=phone]').data('text-required'), function () {
                form.find('input[name=phone]').focus();
            });
            return false;
        }
        if (!commonMethod.validatePhoneNo(phone)) {
            commonMethod.showAlert(form.find('input[name=phone]').data('text-invalid'), function () {
                form.find('input[name=phone]').focus();
            });
            return false;
        }
        if (!commonMethod.validateEmail(email)) {
            commonMethod.showAlert(form.find('input[name=email]').data('text-invalid'), function () {
                form.find('input[name=email]').focus();
            });
            return false;
        }


        $.ajax({
            type: "POST",
            url: "/Umbraco/Surface/ConsultRegister/SearchToolRegister",
            data: {
                langID: langID,
                fullname: fullname,
                phone: phone,
                email: email,
                near_by: near_by,
                location: location,
                timeclass: timeclass,
                budget: budget,
                need: need,
                age: age,
                courseName: courseName,
                pageName: pageName,
                UTMSource: UTMSource,
                UTMCamp: UTMCamp,
                UTMMedium: UTMMedium,
                PrevURL: PrevURL,
                UserAgent: UserAgent,
                SessionUTM: SessionUTM
            },
            cache: false,
            dataType: "json",
            async: false,
            success: function (response) {
                console.log(response);
                if (response.StatusCode == 1) {
                    //Send GET to VUS API
                    var url_api = response.APIURL;
                    var iscallingapi = response.CallApi;
                    if (iscallingapi == "true") {
                        $.ajax({
                            type: "GET",
                            url: url_api,
                            success: function () {
                                console.log("call VUS API success");
                            },
                            error: function () {
                                console.log("call VUS API failed");
                            }
                        });
                    }

                    form[0].reset();

                    //jAlert(response.Message);


                    /*
                    ga('send', {
                        hitType: 'event',
                        eventCategory: 'Register Completed',
                        eventAction: 'click',
                        eventLabel: 'From Website'
                    });
                    var TYLink = $("#hdTYLink").val();
                    TYLink = TYLink + "?TYID=" + response.StatusCode;
                    window.location.href = TYLink;
                    //window.open(TYLink, "Thank you", "width=500,height=500");
                    */

                    setTimeout(function () {
                        window.location.href = "https://vus.edu.vn/thank-you/?TYID=1";
                    }, 1000);

                    commonMethod.showSuccess(response.Message, function () {
                        $('.popup.active .popup__exit').click();
                    });
                } else if (response.StatusCode == 2) {
                    form.find('input[name=fullname]').val('');
                    form.find('input[name=email]').val('');
                    form.find('input[name=phone]').val('');
                    form.find('input[name=near_by]').val('');
                    commonMethod.showSuccess(response.Message, function () {
                        $('.popup.active .popup__exit').click();
                    });
                } else {
                    commonMethod.showAlert(response.Message, function () {
                        //$("#txtPhone").focus();
                    });
                }
            },
            error: function (response) {
                console.log(response);
            }
        });

        return false;
    },

    setBlock: function (b) {
        $('#form__consult__register__popup input[name=source_block]').val(b);
    }
};

function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}

$(document).ready(function () {
    VusFunc.init();

    $search_bar = $(".search-campus");
    if ($search_bar.is(":visible")) {
        $(window).on("scroll", function () {
            var $obj = $(this);
            $top = $obj.scrollTop();
            if ($top > 100) {
                $search_bar.addClass("sticky");
            } else {
                $search_bar.removeClass("sticky");
            }
        });
    }
    // RESET STYLE BANNER
    $(".top-banner-slide").css({"height": ($("img:visible", $(".top-banner-slide")).height()) + "px"});
    $(window).on("resize", function () {
        $(".top-banner-slide").css({"height": ($("img:visible", $(".top-banner-slide")).height()) + "px"});
    });
    // google map vus location
    var $obj = $("div.map_google");
    if ($obj.is(":visible")) {

        $Latitude = $("div#map_google", $obj).attr("data-latitude");
        $Longitude = $("div#map_google", $obj).attr("data-longitude");
        $content = $("div#map_google", $obj).attr("data-content");
        $("div#map_google", $obj).gMap({
            zoom: 16,
            markers: [{
                icon: {image: "/Assets/images/maker.png", iconsize: [37, 51], iconanchor: [18, 46]},
                latitude: $Latitude,
                longitude: $Longitude,
                popup: true,
                html: $content
            }]
        });
    }

    // SCROLL TU VAN
    var $href = window.location.href;
    if ($href.lastIndexOf("#dangkytuvan") != -1) {
        $.scrollTo("section.contact-signup", 500);
    }

    // FIND COURSE 
    $ul_timkhoahoc = $("ul.timkhoahoc");
    $ul_timkhoahoc.on("click", "li", function (event) {
        event.preventDefault();
        var $obj = $(this);
        $obj.addClass("selected");
        //$("#hidden_khoahoc").val($obj.attr("data-value"));
        //$("#hidden_doituong").val($obj.attr("data-target"));
        document.ConsultForm.hidden_link.value = $obj.attr("data-link");
        document.ConsultForm.hidden_child.value = $obj.attr("data-child");
        document.ConsultForm.hidden_khoahoc.value = $obj.attr("data-value");
        document.ConsultForm.hidden_doituong.value = $obj.attr("data-target");
        $("div.timkhoahoc").slideUp(200);
        $("div." + $obj.attr("data-target")).slideDown(300, function () {
            $.scrollTo($("div.timkhoahoc"), 400);
            $(this).css({"height": "auto"});
        });
    });

    $ul_nhucauhoc = $("ul.nhucauhoc");
    $ul_nhucauhoc.on("click", "li", function (event) {
        event.preventDefault();
        var $obj = $(this);
        var $parent = $obj.parent("ul").parent(".container");
        if (!$obj.hasClass("selected")) {
            $obj.addClass("selected");
        } else {
            $obj.removeClass("selected");
        }
        var $nhucau = "";
        $listchon = $("li.selected", $parent);
        $.each($listchon, function ($k, $v) {
            $nhucau += $(this).attr("data-value") + ",";
        });
        $nhucau = $nhucau.replace(/[\,\s]+$/ig, "");
        document.ConsultForm.hidden_nhucau.value = $nhucau;

    });
    $(".tiep_theo").on("click", function (event) {
        event.preventDefault();
        var $obj = $(this);

        // KIEM TRA DA CHON NHU CAU HAY CHUA 
        if (document.ConsultForm.hidden_nhucau.value == "") {
            alert("Vui lòng chọn ít nhất một nhu cầu học");
            return false;
        }
        // END KIEM TRA 
        $("div.nhucauhoc:visible").slideUp(200);
        $("div.thongtinhocvien").slideDown(300, function () {
            $.scrollTo($("div.timkhoahoc"), 400);
            $(this).css({"height": "auto"});
        });
    });

    $('select.hocphichuongtrinh').on("change", function () {
        var $obj = $(this);
        var $parent = $obj.parent("div.col2").parent(".inside");
        $("img:first", $parent).animate({opacity: 0.25}, 300, function () {
            $(this).attr("src", $("option:selected", $obj).attr("data-img")).animate({opacity: 1}, 100);
            $("input.UserNote", $("form#formhocphivus")).val("Nhận thông tin học phí khóa học: " + $("option:selected", $obj).text());
        });
    });

    if ($('select.hocphichuongtrinh').is(":visible")) {
        $('select.hocphichuongtrinh').trigger("change");
    }

    $("form#formhocphivus").on("submit", function (event) {
        event.preventDefault();
        var $obj = $(this);
        $("input#butt_submit_register", $obj).prop("disabled", true).val("PLEASE WAIT");
        setTimeout(function () {
            $("input#butt_submit_register", $obj).prop("disabled", false);
            $("input#butt_submit_register", $obj).val($("input#butt_submit_register", $obj).attr("data-title"));
            $("form#formhocphivus").html("<p style='text-align:left;font-size:18px;color:#f00'>Cám ơn bạn đã liên hệ</p>");
            setTimeout(function () {
                window.location = "https://vus.edu.vn/thank-you/?TYID=1";
            }, 100);
        }, 2000);
    });

    $("select#City", $("form#formhocphivus")).on("change", function () {
        var $obj = $(this);
        var $options = $obj.children("option");
        $.each($options, function ($k, $v) {
            if ($(this).is(":selected")) {
                if ($(this).attr("data-city") != null) {
                    $("input#CityName", $("form#formhocphivus")).val($(this).attr("data-city"));
                }
            }
        })
    });
    //FORM 
    $('#ConsultForm').on('submit', function (e) {
        e.preventDefault();
        var $obj = $(this);
        document.ConsultForm.UserNote.value = document.ConsultForm.UserNote_tmp.value + "\n" + document.ConsultForm.hidden_doituong.value.toUpperCase() + "\n" + document.ConsultForm.hidden_khoahoc.value + "\n" + document.ConsultForm.hidden_nhucau.value;
        $('#ConsultSubmitBtn').val("PLEASE WAIT").prop('disabled', true);
        setTimeout(function () {
            $('#ConsultForm')[0].reset();
            if (document.ConsultForm.hidden_child.value != null && document.ConsultForm.hidden_child.value != "") {
                $("div.thongtinhocvien:visible").slideUp(200);
                $("div.khoahocphuhopvoiban").slideDown(300, function () {
                    $(this).css({"height": "auto"});
                    $("div.courses__item[data-rel=" + document.ConsultForm.hidden_child.value + "]").css({"display": "block"});
                });
                $("iframe#iframe-findcourse").attr("src", "https://vus.edu.vn/thank-you/?TYID=1");

            } else {
                window.location = "https://vus.edu.vn/";
                return false;
            }
            $('#ConsultSubmitBtn').prop('disabled', false);
            $('#ConsultSubmitBtn').val("Xem kết quả");
        }, 2000);
    });
    //END FORM
});

function IsValidEmail(email) {
    var pattern = /^([a-zA-Z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return pattern.test(email);
}

function isEmail(email) {
    return IsValidEmail(email);
}

String.prototype.trim = function () {
    return this.replace(/^\s+|\s+$/ig, "");
};
String.prototype.ltrim = function () {
    return this.replace(/^\s+/ig, "");
};
String.prototype.rtrim = function () {
    return this.replace(/\s+$/ig, "");
};

function isPhone(phone) {
    var $list_phone_invalid = ['12345678', '11111111'];
    phone = phone.trim();
    if (phone == null || phone.length < 7) {
        return false;
    }
    for ($index in $list_phone_invalid) {
        if (phone == $list_phone_invalid[$index]) {
            return false;
        }
    }
    return /^(\+84[\-\.])?[0-9]{8,12}/ig.test(phone);
}

function CheckForm($formname) {
    var form = eval("document." + $formname);
    form.Phone.value = form.Phone.value.replace(/\s+/ig, "");
    if (form.Fullname.value.length < 1) {
        alert("Vui lòng nhập Họ và tên");
        form.Fullname.focus();
        return false;
    }
    if (form.City.value.length < 1) {
        alert("Vui lòng chọn tỉnh thành");
        form.City.focus();
        return false;
    }
    if (form.ContactName.value.length < 1 && $("#ContactName").is(":visible")) {
        alert("Vui lòng nhập Họ tên phụ huynh");
        form.ContactName.focus();
        return false;
    }
    if (form.CoursePlace.value.length < 1) {
        alert("Vui lòng chọn Cơ sở VUS gần bạn");
        form.CoursePlace.focus();
        return false;
    }
    /*if (form.Email.value.length < 1) {
        alert("Vui lòng nhập Địa chỉ Email");
        form.Email.focus();
        return false;
    }*/
    if (form.Email.value.length > 0 && !IsValidEmail(form.Email.value)) {
        form.Email.value = "";
    }
    if (form.City.value.length < 1) {
        alert("Vui lòng chọn Tỉnh/Thành");
        form.City.focus();
        return false;
    }
    if (form.Phone.value.length < 1) {
        alert("Vui lòng nhập Số điện thoại");
        form.Phone.select();
        return false;
    } else if (!isPhone(form.Phone.value)) {
        alert("Số điện thoại không hợp lệ");
        form.Phone.focus();
        return false;
    }
    return true;
}

