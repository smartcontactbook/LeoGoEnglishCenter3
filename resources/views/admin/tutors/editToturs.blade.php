@extends('admin.layout.master.master')
@section('main-content')
	<section class="content-header">
		<h1><b>EDIT TUTORS</b>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"> HOME</a></li>
			<li><a href="#">LECTURER MANAGEMENT</a></li>
			<li class="active">EDIT TUTORS</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"><b>INFORMATION</b></h3>
						<p class="pull-right box-title">
							<button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button>
							<button type="button" class="btn btn-success"><i class="fa fa-save">Save</i></button>
						</p>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="box-body">
								<div class="form-group">
									<label>First Name</label>
									<input
									type="text"
									class="form-control"
									placeholder="Enter First Name"
									/>
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<select class="form-control select2">
										<option selected="selected">Gender</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group">
									<label>User Name</label>
									<input
									type="text"
									class="form-control"
									placeholder="Enter User Name"
									/>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="box-body">
								<div class="form-group">
									<label>Last Name</label>
									<input
									type="text"
									class="form-control"
									placeholder="Enter Last Name"
									/>
								</div>
								<div class="form-group">
									<label>Phone number</label>
									<input
									type="text"
									class="form-control"
									placeholder="Enter phone number"
									data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;"data-mask/>
								</div>

								{{-- 
								<div class="form-group">s
									<label>Phone Number</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone" />
										</div>
										<input
										type="text"
										class="form-control"
										data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;"
										data-mask
										/>
									</div>
								</div> --}}
								<div class="form-group">
									<label htmlFor="exampleInputPassword1">Password</label>
									<input
									type="password"
									class="form-control"
									id="exampleInputPassword1"
									placeholder="Password"
									/>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea
									class="form-control"
									rows={4}
									placeholder="Enter Description"
									defaultValue={""}
									></textarea>
								</div>

							</div>
						</div>

						<div class="col-sm-4">
							<div class="box-body">
								<form role="form">
									<div class="form-group">
										<label>Date:</label>
										<div class="input-group date">
											<div class="input-group-addon">
											
											</div>
											<input
											type="text"
											class="form-control pull-right"
											id="datepicker"
											/>
										</div>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input
										type="text"
										class="form-control"
										placeholder="Enter Email"
										/>
									</div>
									<div class="form-group">
										<label>Adress</label>
										<input
										type="text"
										class="form-control"
										placeholder="Enter Address"
										/>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection