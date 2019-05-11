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

<div class="container">
    <div class="news-filter" data-module="newsFilter">
        <ul>
            <li class="active"><a href="/news/" data-val="0"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" class="svg replaced-svg">
              <defs>
                <style>
                .cls-1 {
                    fill: #22316f;
                    fill-rule: evenodd;
                }
            </style>
        </defs>
        <path id="Forma_1" data-name="Forma 1" class="cls-1" d="M178.917,569.8a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8v6.422a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8V569.8Zm-6.334.8h4.75v4.817h-4.75v-4.817ZM190,569.8a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8v6.422a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8V569.8Zm-6.333.8h4.75v4.817h-4.75v-4.817Zm-4.75,10.169a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8V587.2a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8v-6.422Zm-6.334.8h4.75v4.817h-4.75v-4.817Zm17.417-.8a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8V587.2a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8v-6.422Zm-6.333.8h4.75v4.817h-4.75v-4.817Z" transform="translate(-171 -569)"></path>
    </svg>Trang chủ</a></li>
    <li class=""><a href="" data-val="1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.782" viewBox="0 0 24 20.782" class="svg replaced-svg">
      <defs>
        <style>
        .cls-1 {
            fill: #707070;
            fill-rule: evenodd;
        }
    </style>
</defs>
<path id="Forma_1_copy" data-name="Forma 1 copy" class="cls-1" d="M311.985,584.933H306.5a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,311.985,584.933Zm8.2,0H314.7a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,320.184,584.933Zm0-13.333H306.5a0.534,0.534,0,1,0,0,1.067h13.683A0.534,0.534,0,1,0,320.184,571.6Zm0,2.667H314.7a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,320.184,574.267Zm0,2.666H314.7a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,320.184,576.933Zm0,2.667H314.7a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,320.184,579.6Zm0,2.666H314.7a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,320.184,582.266Zm-8.2,0H306.5a0.534,0.534,0,1,0,0,1.067h5.484A0.534,0.534,0,1,0,311.985,582.266Zm0-8H306.5a0.538,0.538,0,0,0-.543.533v5.387a0.538,0.538,0,0,0,.543.533h5.484a0.538,0.538,0,0,0,.543-0.533V574.8A0.538,0.538,0,0,0,311.985,574.267Zm-0.543,5.386h-4.4v-4.319h4.4v4.319Zm14.172-8.586h-1.629v-1.6A1.077,1.077,0,0,0,322.9,568.4H303.786a1.077,1.077,0,0,0-1.086,1.067v17.066a2.694,2.694,0,0,0,2.715,2.667h18.57a2.694,2.694,0,0,0,2.715-2.667v-14.4A1.077,1.077,0,0,0,325.614,571.067Zm0,15.466a1.616,1.616,0,0,1-1.629,1.6h-18.57a1.616,1.616,0,0,1-1.629-1.6V569.467H322.9v16.266a1.348,1.348,0,0,0,1.358,1.334,0.534,0.534,0,1,0,0-1.067,0.27,0.27,0,0,1-.272-0.267v-13.6h1.629v14.4Z" transform="translate(-302.688 -568.406)"></path>
</svg>Tin tức</a></li>
</ul>
<div class="news-filter__mobile">
    <label>
        <div class="news-filter__mobile__current"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" class="svg replaced-svg">
          <defs>
            <style>
            .cls-1 {
                fill: #22316f;
                fill-rule: evenodd;
            }
        </style>
    </defs>
    <path id="Forma_1" data-name="Forma 1" class="cls-1" d="M178.917,569.8a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8v6.422a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8V569.8Zm-6.334.8h4.75v4.817h-4.75v-4.817ZM190,569.8a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8v6.422a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8V569.8Zm-6.333.8h4.75v4.817h-4.75v-4.817Zm-4.75,10.169a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8V587.2a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8v-6.422Zm-6.334.8h4.75v4.817h-4.75v-4.817Zm17.417-.8a0.8,0.8,0,0,0-.792-0.8h-6.333a0.8,0.8,0,0,0-.792.8V587.2a0.8,0.8,0,0,0,.792.8h6.333a0.8,0.8,0,0,0,.792-0.8v-6.422Zm-6.333.8h4.75v4.817h-4.75v-4.817Z" transform="translate(-171 -569)"></path>
</svg>Tất cả</div>
<select name="" id="">
    <option value="0" data-type="">Trang Chủ</option>
    <option value="1" data-type="news">Tin tức</option>
</select>
</label>
</div>
</div>
<div class="news-list">
    @foreach($getNews as $getNew)
        <div class="news-list__item">
            <div class="news-item">
                <a href="{{ route('getNewsDetail', ['slug'=> str_slug($getNew->title), 'id'=>$getNew->id] )}}" title="{!! $getNew->title !!}">
                    <div class="news-item__img">
                        <img src="{{asset('image/')}}/news/{{ $getNew->image }}?anchor=center&amp;mode=crop&amp;width=216&amp;height=141&amp;rnd=132012465530000000&amp;upscale=false&amp;bgcolor=fff" alt="{!! $getNew->title !!}">
                    </div>
                    <div class="news-item__content">
                        <div class="news-item__type"><span class="ico ico-news"></span>Tin tức</div>
                        <div class="news-item__date">
                            01/05/2019                        
                        </div>
                        <h4 style="margin-top:3px;" class="news-item__title">{!! $getNew->title !!}</h4>
                        <div class="news-item__desc"><p>{!! $getNew->description !!}</p></div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</div>
<div class="pagination"><a class="active" href="#">1</a><a class="liPage" target="_self" href="/news/?page=2">2</a><a class="liPage" target="_self" href="/news/?page=3">3</a><a class="liPage" target="_self" href="/news/?page=4">4</a><a class="liPage" target="_self" href="/news/?page=5">5</a><a href="/news/?page=2" class="next"><i class="ico ico-arrow-right-red"></i></a><a href="/news/?page=26" class=""></a></div>


{{-- 
	@include('clients/home/review/review')
	@include('clients/home/infrastructure/infrastructure') --}}
    @endsection
