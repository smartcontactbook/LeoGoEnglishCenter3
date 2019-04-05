@extends('admin.layout.master.master')
@section('main-content')

<section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
		 @if(Auth::guard('staff')->check())
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('image/avatar').'/'.Auth::guard('staff')->user()->avatar }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Auth::guard('staff')->user()->First_Name }} {{Auth::guard('staff')->user()->Last_Name }}</h3>

              <p class="text-muted text-center">
              	@if(Auth::guard('staff')->user()->Role_ID == 1)
					Admin
              	@else
              		Staff
              	@endif
              </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{Auth::guard('staff')->user()->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Birth Day</b> <a class="pull-right">{{Auth::guard('staff')->user()->Birth_Day }}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone Number</b> <a class="pull-right">{{Auth::guard('staff')->user()->Phone_Number }}</a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right">
                  	@if(Auth::guard('staff')->user()->Gender == 1)
                  		Male
                  	@else
                  		Female
                  	@endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <a class="pull-right">{{Auth::guard('staff')->user()->Address }}</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Description</strong>

              <p class="text-muted">
                {{Auth::guard('staff')->user()->Description }}
              </p>
              <hr>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Settings</a></li>
              <li><a href="#settings" data-toggle="tab">Change Password</a></li>
            </ul>
            <div class="tab-content">
            	<div class="active tab-pane" id="activity">
            		<form method="post" action="{{ route('postProfile') }}" enctype="multipart/form-data" class="form-horizontal">
            			<input type="hidden" name="id_staff" value="{{Auth::guard('staff')->user()->id}}">
            			{{csrf_field()}}
            			@include('errors.errors')
            			<div class="row">
            				<div class="col-sm-8">
            					<div class="box-body">
            						<div class="form-group">
            							<label for="inputName" class="col-sm-2 control-label">First Name</label>

            							<div class="col-sm-10">
            								<input
            								id="txt_FirstName"
            								name="txt_FirstName"
            								value="{!! old('txt_FirstName', Auth::guard('staff')->user()->First_Name) !!}"
            								type="text"
            								class="form-control"
            								placeholder="Enter first name"
            								required pattern="^[a-zA-Z]*$" title="First name invalid"
            								/>
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputName" class="col-sm-2 control-label">Last Name</label>

            							<div class="col-sm-10">
            								<input
            								id="txt_LastName"
            								name="txt_LastName"
            								value="{!! old('txt_LastName', Auth::guard('staff')->user()->Last_Name) !!}"
            								type="text"
            								class="form-control"
            								placeholder="Enter Last Name"
            								required pattern="^[a-zA-Z]*$" title="Last name invalid"
            								/>
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputEmail" class="col-sm-2 control-label">Email</label>

            							<div class="col-sm-10">
            								<input type="text" id="txt_email" class="form-control" placeholder="Emaill" required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid" name="txt_email" value="{!! old('txt_email', Auth::guard('staff')->user()->email) !!}">
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputName" class="col-sm-2 control-label">BirthDay</label>

            							<div class="col-sm-10">
            								<div class="input-group date" data-provide="datepicker">
            									<div class="input-group-addon">
            										<span class="glyphicon glyphicon-th"></span>
            									</div>
            									<input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date', Auth::guard('staff')->user()->Birth_Day) !!}">
            								</div>
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputExperience" class="col-sm-2 control-label">Phone</label>

            							<div class="col-sm-10">
            								<fieldset ><input type="text" id="txt_phone" class="form-control" placeholder="Phone" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="Invalid format phone number"  name="txt_phone" value="{!! old('txt_phone', Auth::guard('staff')->user()->Phone_Number) !!}">
            								</fieldset>
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputName" class="col-sm-2 control-label">Gender</label>

            							<div class="col-sm-10">
            								<select id="txt_gender"  name="txt_gender" class="form-control select2">
            									@if(Auth::guard('staff')->user()->Gender == 1)
            									<option value="{!!old('txt_gender', 'Male')!!}" disabled=""></option>
            									@else
            									<option value="{!!old('txt_gender', 'Female')!!}" disabled=""></option>
            									@endif
            									<option value="1" id="txt_gender">Male</option>
            									<option value="0" id="txt_gender">Female</option>
            								</select>
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputExperience" class="col-sm-2 control-label">Address</label>

            							<div class="col-sm-10">
            								<input type="text" id="txt_address" class="form-control" required placeholder="Address"
            								name="txt_address" value="{!! old('txt_address', Auth::guard('staff')->user()->Address) !!}">
            							</div>
            						</div>
            						<div class="form-group">
            							<label for="inputSkills" class="col-sm-2 control-label">Description</label>

            							<div class="col-sm-10">
            								<textarea id="txt_description" value="{!!old('txt_description',Auth::guard('staff')->user()->Description) !!}" rows="3" class="form-control" name="txt_description" placeholder="Enter Description" required></textarea>
            							</div>
            						</div>
            					</div>
            				</div>
            				<div class="col-sm-4">
            					<div class="box-body">
            						<div class="avatar-upload">
            							<div class="avatar-edit">
            								{!! Form::hidden('old_avatar', Auth::guard('staff')->user()->avatar) !!}
            								{!! Form::file('new_avatar', ['id' => 'imageUpload', 'accept' => '.png, .jpg, .jpeg']) !!}
            								{!! Form::label('imageUpload', ' ') !!}
            							</div>
            							<div class="avatar-preview">
            								<div id="imagePreview">
            									<img src="{{ asset('image/avatar').'/'.Auth::guard('staff')->user()->avatar }}">
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div align="center">
            				<p class="box-title">
            					<a href="{{ route('tutor.index') }}"><button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button></a>
            					<button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
            				</p>
            			</div>
            		</form>
            		<!-- /.post -->
            	</div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
              	<form method="post" action="{{ route('postChangePasswork') }}" enctype="multipart/form-data" class="form-horizontal">
              		<input type="hidden" name="id_staff" value="{{Auth::guard('staff')->user()->id}}">
              		{{csrf_field()}}
              		@include('errors.errors')
              		<div class="form-group">
              			<label for="inputName" class="col-sm-2 control-label">Old password</label>

              			<div class="col-sm-10">
              				<input
              				required name="txt_OldPassword"
              				type="password"
              				class="form-control"
              				id="exampleInputPassword1"
              				placeholder="Password"
              				/>
              			</div>
              		</div>
              		<div class="form-group">
              			<label for="inputEmail" class="col-sm-2 control-label">New Password</label>
              			<div class="col-sm-10">
              				<input
              				required name="txt_NewPassword"
              				type="password"
              				class="form-control"
              				id="exampleInputPassword1"
              				placeholder="Password"
              				/>
              			</div>
              		</div>
              		<div class="form-group">
              			<label for="inputName" class="col-sm-2 control-label">Rep Password</label>

              			<div class="col-sm-10">
              				<input
              				required name="txt_RepPassword"
              				type="password"
              				class="form-control"
              				id="exampleInputPassword1"
              				placeholder="Password"
              				/>
              			</div>
              		</div>
              		<div class="form-group">
              			<div class="col-sm-offset-2 col-sm-10">
              				<button type="submit" class="btn btn-danger">Submit</button>
              			</div>
              		</div>
              	</form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
          @endif
    </section>
@endsection