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
                          placeholder="Enter class name"
                          required pattern="^[a-zA-Z]*$" title="First class name invalid"
                          />
                        </div>
                        <div class="form-group">
                          <label>Quantity student</label>
                          <input type="number" name="quantity"  class="form-control" min="1" max="20">
                        </div>      
                        <div class="form-group">
                          <label>Time start</label>
                          <input type="time" id="appt"  class="form-control" name="appt" min="9:00" max="18:00" required>
                        </div>
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
                          <input type="number" name="quantity"  class="form-control" min="1" max="24">
                        </div>
                        <div class="form-group">
                          <label>End start</label>
                          <input type="time" id="appt" name="appt"  class="form-control" min="9:00" max="18:00" required>
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
                          <input type="text" id="txt_address" class="form-control" required placeholder="Enter Tuition"
                          name="txt_address" value="">
                        </div>
                        <div class="form-group">
                          <label>Lecturer</label>
                          <select id="txt_gender"  name="txt_gender" class="form-control select2">
                            <option value="1" id="txt_gender">Male</option>
                            <option value="0" id="txt_gender">Female</option>
                          </select>
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
                          <label>Day of the week</label>
                          <select id="txt_gender"  name="txt_gender" class="form-control select2">
                            <option value="1" id="txt_gender">Male</option>
                            <option value="0" id="txt_gender">Female</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Tutor</label>
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
            <div class="col-md-8">
              <div class="box ">
                <div class="box-header with-border edit-background">
                  <h4 class="box-title edit-h4">List of students in class
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
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>InternetExplorer 4.0</td>
                <td>Win 95+</td>
                <td> 4</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>InternetExplorer 4.0</td>
                <td>Win 95+</td>
                <td> 4</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>InternetExplorer 4.0</td>
                <td>Win 95+</td>
                <td> 4</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>InternetExplorer 4.0</td>
                <td>Win 95+</td>
                <td> 4</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Address</th>
              </tr>
            </tfoot>
          </table>
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            <div class="col-md-4">
              <div class="box ">
                <div class="box-header with-border edit-background">
                  <h4 class="box-title edit-h4">List of students waiting
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
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Students</label>
                      <select id="txt_gender"  name="txt_gender" class="form-control select2">
                        <option value="1" id="txt_gender">Nguyen Duc Thien</option>
                        <option value="0" id="txt_gender">Nguyen Thi Khanh Ly</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label></label>
                      <button type="submit" class="btn edit-button">Add</button>
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