@extends('admin.layout.master.master')
@section('main-content')
	<section class="content-header">
		<h1><b>EDIT CHILDREN</b>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"> Home</a></li>
			<li><a href="#">Children management</a></li>
			<li class="active">Edit children</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<form method="POST" action="{!! route('children.update', $getEditChildren->id) !!}" enctype="multipart/form-data">
						{!! csrf_field() !!}
						{{method_field('patch')}}
						@include('errors.errors')
						<div class="row">
							<div class="box-header" align="center">
								<h3 class="box-title"><b>INFORMATION</b></h3>
								
							</div>
							<div class="col-sm-4">
								<div class="box-body">
									<input type="hidden" name="txt_idChildren" value="{{$getEditChildren->id}}">
									<input type="hidden" name="txt_password" value="{{$getEditChildren->password}}">
									<div class="form-group">
										<label>Full Name</label>
										<input
										id="txt_FirstName"
										name="txt_FirstName"
										value="{!! old('txt_FirstName', $getEditChildren->Full_Name) !!}"
										type="text"
										class="form-control"
										placeholder="Enter first name"
										/>
									</div>
									<div class="form-group">
										<label>Date:</label>
										<div class="input-group date" data-provide="datepicker">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-th"></span>
											</div>
											<input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date', $getEditChildren->Birth_Day) !!}">
										</div>
									</div>
									<div class="form-group">
										<label>Gender</label>
										<select id="txt_gender"  name="txt_gender" class="form-control select2">
											@if($getEditChildren->Gender == 1)
												<option value="{!!old('txt_gender', 'Male')!!}" disabled=""></option>
											@else
												<option value="{!!old('txt_gender', 'Female')!!}" disabled=""></option>
											@endif
											<option value="1" id="txt_gender">Male</option>
											<option value="0" id="txt_gender">Female</option>
										</select>
									</div>
									<div class="form-group">
										<label>Adress</label>
										<input type="text" id="txt_address" class="form-control" required placeholder="Address"
										name="txt_address" value="{!! old('txt_address', $getEditChildren->Address) !!}">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="box-body">
									<div class="form-group">
										<label>Parent Name</label>
										<input
										id="txt_ParentName"
										name="txt_ParentName"
										value="{!! old('txt_ParentName', $getEditChildren->Parent_Name) !!}"
										type="text"
										class="form-control"
										placeholder="Enter first name"
										/>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="text" id="txt_email" class="form-control" placeholder="Emaill" required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid" name="txt_email" value="{!! old('txt_email', $getEditChildren->email) !!}">
									</div>
									<div class="form-group">
										<label>Phone number</label>
										<fieldset class="form-group"><input type="text" id="txt_phone" class="form-control" placeholder="Phone" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="Invalid format phone number"  name="txt_phone" value="{!! old('txt_phone', $getEditChildren->Phone_Number) !!}">
										</fieldset>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea id="txt_description" rows="3" class="form-control" name="txt_description" placeholder="Enter Description" required>{!!old('txt_description',$getEditChildren->Description) !!}</textarea>
									</div>

								</div>
							</div>

							<div class="col-sm-4">
								<div class="box-body">
									<div class="avatar-upload">
	                                    <div class="avatar-edit">
	                                        {!! Form::hidden('old_avatar', $getEditChildren->avatar) !!}
	                                        {!! Form::file('new_avatar', ['id' => 'imageUpload', 'accept' => '.png, .jpg, .jpeg']) !!}
	                                        {!! Form::label('imageUpload', ' ') !!}
	                                    </div>
	                                    <div class="avatar-preview">
	                                        <div id="imagePreview">
	                                            <img src="{{ asset('image/avatar').'/'.$getEditChildren->avatar }}">
	                                        </div>
	                                    </div>
	                                </div>
								</div>
							</div>
						</div>
						<div align="center">
							<p class="box-title">
								<a href="{{ route('lecturer.index') }}"><button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button></a>
								<button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
							</p>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection