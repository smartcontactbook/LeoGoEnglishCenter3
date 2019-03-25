@extends('admin.layout.master.master')
@section('main-content')
	<section class="content-header">
		<h1><b>ADD STAFF</b>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Staff management</a></li>
			<li class="active">Add Staff</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<form method="POST" action="{!! route('staff.store') !!}">
						{!! csrf_field() !!}
						@include('errors.errors')
						<div class="row">
							<div class="box-header" align="center">
								<h3 class="box-title"><b>INFORMATION</b></h3>
								
							</div>
							<div class="col-sm-4">
								<div class="box-body">
									<div class="form-group">
										<label>First Name</label>
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
										<label>Date:</label>
										<div class="input-group date" data-provide="datepicker">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-th"></span>
											</div>
											<input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date') !!}">
										</div>
									</div>
									<div class="form-group">
										<label>User Name</label>
										<input
										type="text"
										required name="txt_UserName"
										class="form-control"
										placeholder="Enter User Name"
										/>
									</div>
									<div class="form-group">
										<label>Gender</label>
										<select id="txt_gender"  name="txt_gender" class="form-control select2">
											<option value="1" id="txt_gender">Male</option>
											<option value="0" id="txt_gender">Female</option>
										</select>
									</div>
									<div class="form-group">
										<label>Adress</label>
										<input type="text" id="txt_address" class="form-control" required placeholder="Address"
										name="txt_address" value="{!! old('txt_address') !!}">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-body">
									<div class="form-group">
										<label>Last Name</label>
										<input
										id="txt_LastName"
										name="txt_LastName"
										value="{!! old('txt_LastName') !!}"
										type="text"
										class="form-control"
										placeholder="Enter Last Name"
										required pattern="^[a-zA-Z]*$" title="Last name invalid"
										/>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="text" id="txt_email" class="form-control" placeholder="Emaill" required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid" name="txt_email" value="{!! old('txt_email') !!}">
									</div>
									<div class="form-group">
										<label htmlFor="exampleInputPassword1">Password</label>
										<input
										required name="txt_password"
										type="password"
										class="form-control"
										id="exampleInputPassword1"
										placeholder="Password"
										/>
									</div>
									<div class="form-group">
										<label>Phone number</label>
										<fieldset class="form-group"><input type="text" id="txt_phone" class="form-control" placeholder="Phone" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="Invalid format phone number"  name="txt_phone" value="{!! old('txt_phone') !!}">
										</fieldset>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea id="txt_description" value="{!!old('txt_description') !!}" rows="3" class="form-control" name="txt_description" placeholder="Enter Description" required></textarea>
									</div>

								</div>
							</div>

							<div class="col-sm-4">
								<div class="box-body">
									<div class="avatar-upload">
	                                    <div class="avatar-preview">
	                                        <div id="imagePreview">
	                                            <img name="new_avatar" src="{{ asset('image/avatar').'/default.png' }}">
	                                        </div>
	                                    </div>
	                                </div>
								</div>
							</div>
						</div>
						<div align="center">
							<p class="box-title">
								<a href="{{ route('staff.index') }}"><button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button></a>
								<button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
							</p>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection