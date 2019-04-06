@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>WAITING CLASS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Wait Class management</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="col-lg-12">
					@if(Session::has('flash_message'))
          <div class="alert alert-{!! Session::get('flash_level') !!}">
           {!! Session::get('flash_message') !!}
         </div>
         @endif
       </div>

       <div class="box-body">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            @foreach($getCourses as $count=>$getCourse)
            <li role="presentation" @if($count == 0) class="active" @endif>
              <a href="#tab-{{ $getCourse->id }}" aria-controls="#tab-{{ $getCourse->id }}" role="tab" data-toggle="tab">{{ $getCourse->Course_Name }}</a>
            </li>
            @endforeach
          </ul>
          <div class="tab-content">
            @foreach($getCourses as $count=>$getCourse)
            <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $getCourse->id }}">
              <div class="row">
                @foreach($getLevelOfCourses as $value3)
                @if($getCourse->id == $value3->idCourse)
                <form action="{{ route('postWaitingClass') }}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="txt_idLevel" value="{{ $value3->idLevel }}">
                  <input type="hidden" name="txt_nameLevel" value="{{ $value3->Level_Name }}">
                  <div class="col-sm-3">
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                        <li class="edit-item">

                          <div class="edit-product-info">
                            <h4 class="edit-p">{{ $value3->Level_Name }} 
                              <a href="" class="edit-icon pull-right"><i class="fa fa-eyedropper" aria-hidden="true"></i></a>
                            </h4>

                            <div class="avatar-edit">
                              <img src="{{ asset('image/avatar').'/logo.png' }}" class="img-circle edit-image" alt="Avatar">

                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <div class="row">
                              <label class="control-label edit-row">Course</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right">{{ $value3->Course_Name }}</label>
                              </div>
                            </div>

                            <div class="row">
                              <label class="control-label edit-row">Qty Students</label>
                              <div class="pull-right">
                                <label class="label label-danger edit-pull-right">{{ $value3->user_count }}</label>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <input type="hidden" name="txt_idClass" value="{{ $value3->id }}"> 
                            <button 
                            type="button" 
                            class="btn edit-button" 
                            data-toggle="modal" 
                            data-id="{{$value3->id}}" 
                            data-target="#listChildren">
                            List
                          </button>
                          <button type="submit" class="btn pull-right edit-button">New Class</button>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              @endif
              @endforeach
            </div>
            <!-- /.post -->
          </div>
          @endforeach
        </div>
        <!-- /.tab-content -->
      </div>
    </div>
  </div>
</div>
</div>




</section>
@endsection