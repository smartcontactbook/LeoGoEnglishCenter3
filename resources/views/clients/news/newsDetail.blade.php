@extends('clients.layout.master.master')
@section('main-content-client')
<section class="banner-home">
    <div class="banner-block" data-module="top-banner">
        <div class="banner__wrapper">
            <div class="banner__img hidden-xs">
                <img src="{{asset('image/media/237698/website-banner2423.jpg') }}" alt="" style="height: 290px">
            </div>

            <div class="banner__detail">                    
            </div>
        </div>
    </div>
</section>

<div class="breadcum">
   <div class="redirect-trees hidden-xs container">
      <a href="/" class="">Trang chủ</a>
      <span class='fa fa-angle-right'></span>					
      <a href="#" title="">Tin tức & Sự kiện</a>
      <span class='fa fa-angle-right'></span>					
      <h1><a class="active" title="Anh Ngữ Thiếu Nhi SUPERKIDS">{{ $getNewsDetail->title }}</a></h1>
  </div>   
</div>

<div class="container">
    <div class="main-column">
        <div class="post-detail">
            <div class="post-detail__type"><span class="ico ico-news"></span>Tin tức</div>
            <h1 class="post-detail__title">{!! $getNewsDetail->title !!}</h1>
            <div class="post-detail__date">{!! $getNewsDetail->create_at !!}</div>
            <div class="post-detail__content">
                {!! $getNewsDetail->content !!}
            </div>
        </div>
        <div class="post-detail__action" style="display:none">
            <a href="#" class="btn-regular"><span>Đăng ký ngay</span></a>
        </div>
    </div>
    <div class="side-column">
        <div class="related-post">
            <h2 class="related-post__heading">Có thể bạn quan tâm</h2>
            <div class="related-post__list">
                @foreach($getNewsLimit as $value)
                <div class="related-post__item">
                    <div class="news-item--verticle">
                        <a href="{{ route('getNewsDetail', ['slug'=> str_slug($value->title), 'id'=>$value->id] )}}" title="{!! $value->title !!}">
                            <div class="news-item__img--verticle">
                                <img src="{{asset('image/')}}/news/{{ $value->image }}?anchor=center&amp;mode=crop&amp;width=280&amp;height=215&amp;rnd=132012465530000000&amp;upscale=false&amp;bgcolor=fff" alt="{!! $value->title!!}">
                            </div>
                            <div class="news-item__content--verticle">
                                <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                                <div class="news-item__date">
                                01/05/2019                                        </div>
                                <h4 class="news-item__title--verticle">{!! $value->description !!}</h4>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=597564efe29218001169f6a2&amp;product=sticky-share-buttons"></script>
</div>

@endsection
