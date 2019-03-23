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
	<div class="row">
				<div class="col-lg-12">
					@if(Session::has('flash_message'))
          <div class="alert alert-{!! Session::get('flash_level') !!}">
           {!! Session::get('flash_message') !!}
         </div>
         @endif
       </div>
{{-- 				<div class="box-header">
					<p class="pull-right box-title">
						<button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button>
						<a href="{{ route('lecturer.create') }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Save</button></a>
					</p>
				</div> --}}
				<div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box ">
                <div class="box-header with-border edit-background">
                  <h4 class="box-title">Class information
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
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Class name</label>
                          <input
                          id="txt_FirstName"
                          name="txt_FirstName"
                          value="{!! old('txt_FirstName') !!}"
                          type="text"
                          class="form-control"
                          placeholder="Enter first name"
                          required pattern="^[a-zA-Z]*$" title="First name invalid"
                          />
                        </div>
                        <div class="form-group">
                          <label>Quantity student</label>
                          <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                          name="txt_address" value="{!! old('txt_address') !!}">
                        </div>                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Course</label>
                          <select id="txt_gender"  name="txt_gender" class="form-control select2">
                            <option value="1" id="txt_gender">Male</option>
                            <option value="0" id="txt_gender">Female</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Quantity session</label>
                          <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                          name="txt_address" value="{!! old('txt_address') !!}">
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
                            <input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date') !!}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Tuition</label>
                          <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                          name="txt_address" value="{!! old('txt_address') !!}">
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
                            <input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date') !!}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Gender</label>
                          <select id="txt_gender"  name="txt_gender" class="form-control select2">
                            <option value="1" id="txt_gender">Male</option>
                            <option value="0" id="txt_gender">Female</option>
                          </select>
                        </div>
                      <!-- /.description-block -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="txt_description" value="{!!old('txt_description') !!}" rows="3" class="form-control" name="txt_description" placeholder="Enter Description" required></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box ">
                <div class="box-header with-border edit-background">
                  <h4 class="box-title">Class information
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
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Class name</label>
                          <input
                          id="txt_FirstName"
                          name="txt_FirstName"
                          value="{!! old('txt_FirstName') !!}"
                          type="text"
                          class="form-control"
                          placeholder="Enter first name"
                          required pattern="^[a-zA-Z]*$" title="First name invalid"
                          />
                        </div>
                        <div class="form-group">
                          <label>Quantity student</label>
                          <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                          name="txt_address" value="{!! old('txt_address') !!}">
                        </div>                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="form-group">
                          <label>Course</label>
                          <select id="txt_gender"  name="txt_gender" class="form-control select2">
                            <option value="1" id="txt_gender">Male</option>
                            <option value="0" id="txt_gender">Female</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Quantity session</label>
                          <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                          name="txt_address" value="{!! old('txt_address') !!}">
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
                            <input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date') !!}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Tuition</label>
                          <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                          name="txt_address" value="{!! old('txt_address') !!}">
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
                            <input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date') !!}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Gender</label>
                          <select id="txt_gender"  name="txt_gender" class="form-control select2">
                            <option value="1" id="txt_gender">Male</option>
                            <option value="0" id="txt_gender">Female</option>
                          </select>
                        </div>
                      <!-- /.description-block -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="txt_description" value="{!!old('txt_description') !!}" rows="3" class="form-control" name="txt_description" placeholder="Enter Description" required></textarea>
                      </div>
                    </div>
                  </div>
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