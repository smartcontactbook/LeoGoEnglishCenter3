@extends('admin.layout.master.master')
@section('main-content')
<link id="headInilabsCSSLink" href="https://demo.inilabs.net/school/v4.2/assets/inilabs/themes/default/inilabs.css" rel="stylesheet">
<section class="content-header">
  <h1><b>LIBRARY MANAGEMENT</b>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Library management</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      @if(Auth::guard('staff')->check())
        <div class="box">
          <div class="col-lg-12">
            @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('flash_message') !!}
              </div>
            @endif
          </div>
          <div class="box-header">
            <p class="pull-right box-title">
              <button type="button" class="btn btn-primary btn-sm editLeftRight"><i class="fa fa-reply-all">Back</i></button>
              <a href="{{ route('e-book.create') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add</button></a>
            </p>
          </div>
          <div class="box-body">
            <ul class="nav nav-tabs">
              @foreach($getEbookOfCourses as $value)
                <input type="hidden" name="txt_idClass">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-12">
                  <ul class="products-list product-list-in-box">
                    <div class="single_ebooks">
                      <div class="thumbnail">
                        <img src="{{asset('image/')}}/ebook/{{ $value->eBook_image }}" alt="Bangla">
                        <div class="caption">
                          <h5>{{ $value->eBook_Name }}</h5>
                          <p>{{ $value->Author }}</p>
                        </div>
                      </div>
                      <ul>
                        <li><a href="{{ route('e-book.edit', $value->eBook_id) }}" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                        <li><a href="{{($value->file)}}" data-placement="top" data-toggle="tooltip" target="_blank"data-original-title="{{ $value->eBook_description }}"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                      </ul>
                    </div>
                  </ul>
                </div>
              @endforeach
            </ul>
          </div>
        </div>
      @else
        <div class="box">
          <div class="box-body">
            <ul class="nav nav-tabs">
              @foreach($getEbookOfCourses as $value)
                <input type="hidden" name="txt_idClass">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-12">
                  <ul class="products-list product-list-in-box">
                    <div class="single_ebooks">
                      <div class="thumbnail">
                        <img src="{{asset('image/')}}/ebook/{{ $value->eBook_image }}" alt="Bangla">
                        <div class="caption">
                          <h5>{{ $value->eBook_Name }}</h5>
                          <p>{{ $value->Author }}</p>
                        </div>
                      </div>
                      <ul>
                        <li><a href="{{($value->file)}}" data-placement="top" data-toggle="tooltip" target="_blank"data-original-title="{{ $value->eBook_description }}"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </ul>
                </div>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
    </div>
  </div>
</section>
@endsection
