@extends('clients.layout.master.master')
@section('main-content-client')
	<section class="banner-home">
        <div class="banner-block" data-module="top-banner">
            <div class="banner__wrapper">
                <div class="banner__img hidden-xs">
                    <img src="{{asset('image/')}}/course/{{ $getDetail->image }}" alt="" style="height: 290px">
                </div>
                <div class="banner__img visible-xs">
                    <img src="/media/24905/spk-banner1526025992.jpg" alt="">
                </div>
                <div class="banner__detail">                    
                </div>
            </div>
        </div>
    </section>

    <div class="breadcum">
    	<div class="redirect-trees hidden-xs container">
    		<a href="/" class="">Trang chủ</a>
    		<span class='fa fa-angle-right'></span>					<a href="#" title="">C&#225;c Kh&#243;a Học / Lớp Học Tiếng Anh Tại LeoGo</a>
    		<span class='fa fa-angle-right'></span>					<h1><a class="active" title="Anh Ngữ Thiếu Nhi SUPERKIDS">{{ $getDetail->Course_Name }}</a></h1>
    	</div>   
    </div>

    <div class="section_block">
	    <div class="container">
			{{ $getDetail->content }}
	    </div>
	</div>

	@include('clients/home/review/review')
	@include('clients/home/infrastructure/infrastructure')
@endsection
