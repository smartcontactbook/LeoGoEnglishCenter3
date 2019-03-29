@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>CLASS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Class management</li>
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
				<div class="box-header">
					<p class="pull-right box-title">
						<button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button>
						<a href="{{ route('classRoom.create') }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Add</button></a>
					</p>
				</div>
				<div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @foreach($getCourses as $count=>$getCourse)
{{--               @php
                dd($count);
              @endphp --}}
                <li role="presentation" @if($count == 0) class="active" @endif>
                  <a href="#tab-{{ $getCourse->id }}" aria-controls="#tab-{{ $getCourse->id }}" role="tab" data-toggle="tab">{{ $getCourse->Course_Name }}</a>
                </li>
              @endforeach
            </ul>
            <div class="tab-content">
              @foreach($getCourses as $count=>$getCourse)
                <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $getCourse->id }}">
                  <!-- Post -->
                  <div class="row">
                    @foreach($getClassOfCourses as $value)
                      @if($getCourse->id == $value->id_course)
                      <input type="hidden" name="txt_idClass">
                        <div class="col-sm-3">
                          <div class="box-body">
                            <ul class="products-list product-list-in-box">
                              <li class="edit-item">

                                <div class="edit-product-info">
                                  <h4 class="edit-p">{{ $value->Class_Name }} 
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
                                      <label class="label edit-lable edit-pull-right">{{ $value->Course_Name }}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Start day</label>
                                    <div class="pull-right">
                                      <label class="label edit-lable edit-pull-right">{{ $value->Start_Date }}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">End date</label>
                                    <div class="pull-right">
                                      <label class="label edit-lable edit-pull-right">{{ $value->End_Date}}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Qty Students</label>
                                    <div class="pull-right">
                                      <label class="label label-danger edit-pull-right">{{ $value->QuantityStudent }}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Remain classes</label>
                                    <div class="pull-right">
                                      <label class="label label-success edit-pull-right">{{ $value->QuantitySession }}</label>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <!-- /.item -->
                              <li class="item">
                                <div class="box-body">
                                  <button type="button" class="btn edit-button" data-toggle="modal" data-target="#modal-default">List</button>
                                  <button type="button" class="btn pull-right edit-button">Absence</button>
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