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
	<div class="breadcum">
		<div class="redirect-trees hidden-xs container">
					<a href="/" class="">Trang chủ</a>
	<span class='fa fa-angle-right'></span>					<a href="/programs/" title="C&#225;c Kh&#243;a Học / Lớp Học Tiếng Anh Tại LEOGO">C&#225;c Kh&#243;a Học / Lớp Học Tiếng Anh Tại LEOGO</a>
	<div class="section_block">
		<div class="container">
		    <div class="headline-main">
		        <h4 class="headline">
		            Xây Dựng Nền Tảng Anh Ngữ Vững Chắc Ngay Từ Bước Khởi Đầu
		            <span></span>
		        </h4>
		    </div>
		    <div class="clear"></div>
		    <ul class="list home_lydo">
								<li>
									<div>
										<img src="/Assets/images/vneas.svg" border="0" alt="Chất lượng giảng dạy đạt chuẩn quốc tế">
									</div>
									<div>
										<strong>Chất lượng giảng dạy chuẩn quốc tế</strong>
										<p>VUS được tổ chức NEAS chứng 
								nhận chất lượng giảng dạy và dịch vụ đạt chuẩn quốc tế.</p>
									</div>
								</li>
								<li>
									<div>
										<img src="/Assets/images/university.svg" border="0" alt="Đối tác chiến lược uy tín">
									</div>
									<div>
										<strong>Đối tác chiến lược uy tín</strong>
										<p>VUS liên kết đào tạo với The City University of New York (CUNY), Đại học công lập lớn thứ ba Hoa Kỳ.</p>
									</div>
								</li>
							</ul>
		    <div class="clear"></div>
		</div>
		</div>
	<div class="section_block phuongphaphoc bgpink">
    <div class="container">
        <div class="headline-main">
            <h4 class="headline">
                PHƯƠNG PHÁP HỌC THÔNG QUA KHÁM PHÁ
                <span></span>
            </h4>
        </div>
        <div class="clear"></div>
        <ul class="list phuongphaphoc">
            <li><img src="/Assets/images/phat_trien_tu_duy.svg" border="0" alt="Phát triển tư duy">
			<p>
			Phát triển tư duy
			</p>
			<div class="text">Trẻ phát triển nhận thức, hành vi, cảm xúc và mối quan hệ xã hội. Từ đó, gia tăng sự linh hoạt, thúc đẩy tính độc lập và rèn luyện kỹ năng giải quyết vấn đề.</div>
			</li>
            <li><img src="/Assets/images/khuyen_khich_sang_tao.svg" border="0" alt="Khuyến khích sáng tạo">
			<p>
			Khuyến khích sáng tạo
			</p>
				<div class="text">Khi trí óc và cơ thể trẻ được thoải mái hoạt động, trẻ có thể đưa ra những giải pháp bất ngờ cho vấn đề bằng trí tưởng tượng phong phú của mình.</div></li>
            <li><img src="/Assets/images/nguon_dam_me_hoc_tap.svg" border="0" alt="Khơi nguồn đam mê">
			<p>
			Nguồn đam mê học tập
			</p>
					<div class="text">Thông qua những khám phá mới từ những hoạt động vui học, trẻ tìm thấy những sở thích, đam mê và năng khiếu của bản thân.</div></li>
            <li><img src="/Assets/images/tao_dung_ket_noi.svg" border="0" alt="Tạo dựng kết nối">
			<p>
			Tạo dựng kết nối
			</p>
						<div class="text">Các trò chơi mang tính tương tác với bạn bè giúp trẻ hiểu về các mối quan hệ xã hội, xác định các giới hạn, các quy tắc ứng xử, học cách chia sẻ và cảm thông,…</div></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

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
  @endsection