<section class="contact-signup">
  <div class="headline-main">
    <h4 class="headline">
      ĐĂNG K&#221; TƯ VẤN ĐỂ NHẬN LỘ TR&#204;NH HỌC
      <span></span>
    </h4>
  </div>
  <div class="contact-signup__wrapper clearfix">        
    <div class="contact-signup__content clearfix">
      <div class="contact-signup__contact">
        <div class="desc">
          Vui l&#242;ng để lại th&#244;ng tin li&#234;n lạc để ch&#250;ng t&#244;i c&#243; thể tư vấn r&#245; hơn về c&#225;c kh&#243;a học
        </div>
        <div>
          <div class="title">
            HOTLINE
          </div>
          <div class="hotline">
            <span class="text">
              Tòa nhà VNPT cầu Sông Hàn, 47 Trần Phú, Thành Phố Đà Nẵng
            </span>
            <a href="tel:091 145 77 99" class="detail ico ">
              091 145 77 99
            </a>
          </div><div class="clear-20 hide-640"></div>
          <div class="desc">Thứ Hai đến thứ Sáu: 08:30 – 12:00, 13:30 – 18:00 <br/>
            Thứ Bảy: 8:30 – 12:00<br/>
          </div>
        </div>
      </div>
      <div class="contact-signup__signup">
        <form action="{{ route('postRegisterOnline') }}"  method="POST" id="addRegisterOnline">
          <!-- <form id="addRegisterOnline"> -->
          {!! csrf_field() !!}
          <!-- <input type="hidden" name="source_block" value="Form contact" />
          <input type="hidden" name="courseType" class="courseType o2o-courseType" value="" /> -->
          <div class="contact-signup-content">
            <div class="input-block clearfix">
              <input type="text" class="half-w left txtFullname o2o-name" name="txt_name" title="Bạn chưa nhập họ v&#224; t&#234;n" placeholder="T&#234;n học vi&#234;n*" pattern="^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ
                    ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ
                    ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]{1,50}+$" required>
              <input type="text" class="half-w right txtDateofBirth o2o-birthday" required name="txt_date" title="Bạn chưa nhập ng&#224;y sinh " placeholder="Ngày tháng năm sinh(dd/mm/yyyy)*">
            </div>
            <div class="input-block clearfix">
              <input type="text" class="half-w left txtContactName o2o-contactname" required name="txt_parent" placeholder="T&#234;n phụ huynh">
              <input type="text" class="half-w right txtPhone o2o-phone" name="txt_address" placeholder="Địa chỉ" pattern="^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ
                    ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ
                    ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]{1,50}+$" required title="Bạn chưa nhập tên phụ huynh">
            </div>
            <div class="input-block clearfix">
              <input type="text" class="half-w left txtEmail o2o-email" name="txt_email" required data-text-required="Bạn chưa nhập email" data-text-invalid="Địa chỉ email kh&#244;ng hợp lệ" placeholder="Email*">
              <input type="text" class="half-w right txtPhone o2o-phone" name="txt_phone" required title="Bạn chưa nhập số điện thoại" data-text-invalid="Kh&#244;ng đ&#250;ng định dạng số điện thoại" placeholder="Số điện thoại*" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required>
            </div>
            <div class="input-block clearfix">
              <select name="cmb_course" class="input-block nhucauhoc" style="background-color:#fff">
                <option value="">Khóa học quan tâm</option>
                  @foreach($getCourse as $value)
                  
                    <option value="{{ $value['id'] }}">{{ $value['Course_Name'] }}</option>
                  @endforeach
              </select>
            </div>
            <div class="input-block clearfix">
              <textarea class="block-textarea txtNote o2o-notes" name="txt_discription" required data-text-required="Bạn chưa nhập th&#244;ng điệp" placeholder="Th&#244;ng tin th&#234;m về nhu cầu học"></textarea>
            </div>
            <div class="row">
              <div class="btn-submit s_center">
                <!-- <i class="icofont-send-mail"></i> -->
                <button type="submit" id="submitRegister" class=" btn-regular btn-regular--lr40 submitRegister" data-title="Gửi th&#244;ng tin">
                  
                  <span class="text">Gửi th&#244;ng tin</span>
                </button>
                <button type="submit" id="submitRegister" class=" btn-regular btn-regular--lr40 submitRegister" data-title="Gửi th&#244;ng tin">
                  
                    <span class="text">Thanh Toán Ngay</span>
                  </button>
              </div>
            </div>
            <div class="clear-20"></div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!--   <script type="text/javascript">
    $(document).ready(function(){
      // fetchdata();
              swal({
                title: "Delete user?",
                text: "Submit to delete",
                type: "warning",
                showCancelButton: true,
                closeOnConfirm: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Delete!"
            }.then(function(){
      $('.submitRegister').click(function (){
        var data = $('#addRegisterOnline').serialize();
        console.log('123');
        $.ajax({
          type : 'POST',
          data : data,
          url : 'registerOnline',
          success: function(response){
           if (data){
              swal("Deleted!", "User has been deleted", "success");
              window.location('http://127.0.0.1:8000/home');
           }
          else
              swal("cancelled", "User has not been deleted", "error");
          },
        })
      });
    });
  </script> -->
</section>