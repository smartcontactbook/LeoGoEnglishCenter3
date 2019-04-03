@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>ADD CLASS</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Class management</li>
    <li class="active">Add class</li>
  </ol>
</section>
<section class="content">
    @include('errors.errors')
  	<div class="row">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box ">
              <div class="box-header with-border edit-background">
                <h4 class="box-title edit-h4">Class information
                </h4>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus">
                    </i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              
              <div class="box-body">
                <form action="{!! route('classRoom.store')!!}" method="POST">
                  {!! csrf_field() !!}
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="form-group">
                        <label>Class name</label>
                        <input
                        id="txt_ClassName"
                        name="txt_ClassName"
                        value="{!! old('txt_ClassName') !!}"
                        type="text"
                        class="form-control"
                        placeholder="Enter class name"
                        required pattern="^[a-zA-Z]*$" title="First class name invalid"
                        />
                      </div>
                      <div class="form-group">
                        <label>Quantity student</label>
                        <input type="number" name="quantityStudent"  class="form-control" min="1" max="20">
                      </div>

                      <div class="form-group">
                        <label>Lecturer</label>
                        <select id="cmb_lecturer"  name="cmb_lecturer" class="form-control select2"  value="{!! old('cmb_lecturer') !!}">
                          @foreach($getLecturers as $item)
                          <option value="{{ $item["id"] }}" id="cmb_lecturer">{{ $item["Last_Name"] }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="form-group">
                        <label>Course</label>
                        <select id="cmb_course"  name="cmb_course" class="form-control select2" value="{!! old('cmb_course') !!}">
                          @foreach($getCourses as $item)
                          <option value="{{ $item["id"] }}" id="cmb_course">{{ $item["Course_Name"] }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Quantity session</label>
                        <input type="number" name="quantitySession"  class="form-control" min="1" max="24">
                      </div>
                      <div class="form-group">
                        <label>Tutor</label>
                        <select id="cmb_tutor"  name="cmb_tutor" class="form-control select2" value="{!! old('cmb_tutor') !!}">
                          @foreach($getTutors as $item)
                          <option value="{{ $item["id"] }}" id="cmb_tutor">{{ $item["Last_Name"] }}</option>
                          @endforeach
                        </select>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="form-group">
                        <label>Start date:</label>
                        <div class="input-group date" data-provide="datepicker">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input type="text" class="form-control" id="txt_dateStart" name="txt_dateStart" value="{!! old('txt_dateStart') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Tuition</label>
                        <input type="text" id="txt_Tuition" class="form-control" required placeholder="Enter Tuition"
                        name="txt_Tuition" value="">
                      </div>

                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="form-group">
                        <label>End date:</label>
                        <div class="input-group date" data-provide="datepicker">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input type="text" class="form-control" id="txt_dateEnd" name="txt_dateEnd" value="{!! old('txt_dateEnd') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="txt_description" value="{!!old('txt_description') !!}" rows="5" class="form-control" name="txt_description" placeholder="Enter Description" required></textarea>
                      </div>
                      <!-- /.description-block -->
                    </div>
                  </div>
                  <div align="center">
                    <p class="box-title">
                      <a href="{{ route('classRoom.index') }}"><button type="button" class="btn btn-primary editLeftRight">
                        <i class="fa fa-reply-all">Back</i></button></a>


                      <button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
                    </p>
                  </div>
                </form>
                <!-- /.row -->
              </div>

              <!-- ./box-body -->
            </div>
            <!-- /.box -->
          </div>

          <!-- /.col -->
        </div>
      </div>

    </div>


</section>
@endsection