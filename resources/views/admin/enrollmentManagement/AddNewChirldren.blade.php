@extends('admin.layout.master.master')
@section('main-content')
	<section class="content-header">
		<h1><b>REGISTER</b>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Register</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<form method="POST" action="{{ route('postAddChildren') }}">
			          {{csrf_field()}}
			          <div class="modal-body">
			            <div class="box-body">
			              <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value="">
			             	<div class="form-group">
			               	  <label for="exampleInputEmail1">First Name</label>
			               		<input 
			               		type="input"  
			               		class="form-control " 
			               		id="txt_firstname" 
			               		name="txt_firstname" 
			               		value="{!! old('txt_firstname') !!}" >
			               	  </label>
			               	  <label for="exampleInputEmail1">Last Name</label>
			               		<input 
			               		type="input"  
			               		class="form-control " 
			               		id="txt_lastname" 
			               		name="txt_lastname" 
			               		value="{!! old('txt_lastname') !!}" >
			               	  </label>
			              	</div>	
			             	<div class="form-group">
			               	  <label for="exampleInputPassword1">Parent Name</label>
			                	<input 
			                	type="input"  
			               		class="form-control " 
			               		id="txt_parent" 
			               		name="txt_parent" 
			               		value="{!! old('txt_parent') !!}" >
			               	  </label>
			              	</div>
			              <div class="form-group">
			                <div class="row">
			                  <div class="col-lg-6">
			                    <div class="form-group">
			                      <label>Phone number</label>
				                      <input 
				                      type="input" 
				                      class="form-control" 
				                      <label 
				                      type="text" 
				                      id="txt_phone" 
				                      class="form-control" 
				                      value="{!! old('txt_phone') !!}" 
				                      name="txt_phone">
				                  </label>
			                      <label>Email</label>
				                      <input 
				                      type="input" 
				                      class="form-control" 
				                      <label 
				                      type="text" 
				                      id="txt_email" 
				                      class="form-control" 
				                      value="{!! old('txt_email') !!}" 
				                      name="txt_email">
				                  </label>
				                  <label>Course</label>
						                <input 
						                type="text" 
						                id="txt_course" 
						                class="form-control" 
						                value="{!! old('txt_course') !!}" 
						                name="txt_course">
						            </label>
			                      </fieldset>
			                    </div>
			                  </div>
			                  <div class="col-lg-6">
			                    <div class="form-group">
			                      <label>Birth Day</label>
				                      <input 
				                      type="input" 
				                      class="form-control" 
				                      <label 
				                      type="text" 
				                      id="txt_birthday" 
				                      class="form-control" 
				                      value="{!! old('txt_birthday') !!}" 
				                      name="txt_birthday">
				                  </label>
			                      <label>Score</label>
				                      <input 
				                      id="txt_score" 
				                      class="form-control" 
				                      type="text" 
				                      value="{!! old('txt_score') !!}" 
				                      name="txt_score"></label>
				                  <label>Level</label>
								      <select id="cbm_Level"  name="cbm_Level" class="form-control select2" value="{!! old('cbm_Level') !!}">
								      @foreach($getLevelOfCourse as $item)
								      <option value="{{ $item["id"] }}" id="cbm_Level">
								          {{ $item["Level_Name"] }}
								      </option>
								      @endforeach
							          </select>
								  </label> 
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button>
			          <button type="submit" class="btn btn-primary">Save</button>
			        </div>
			        </form>
				</div>
			</div>
		</div>
	</section>
@endsection
	        