@extends('admin.layout.master.master')
@section('main-content')
<script type='text/javascript'>
	function preview_image(event) 
	{
	 var reader = new FileReader();
	 reader.onload = function()
	 {
		var output = document.getElementById('output_image');
		output.src = reader.result;
	 }
	 reader.readAsDataURL(event.target.files[0]);
	}
	</script>
	<style>
	#wrapper
	{
	 margin:0 auto;
	 padding:0px;
	}
	#output_image
	{
	 max-width:250px;
	}
	</style>
	<section class="content-header">
		<h1><b>Add Event</b>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Event</a></li>
			<li><a href="#">Add Event</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			@if (count($errors) > 0)
				<ul><li>{{ $error }}</li></ul>
			@endif
			<div class="col-xs-12">
				<div class="box">
			        <form role="form" action="{{ route('postImages') }}" method="POST" enctype="multipart/form-data">
			          {!! csrf_field() !!}
			          <div class="modal-body">
			            <div class="box-body">
			              <div class="form-group">
			                <div class="row">
												<div class="col-md-6">
			                    <div class="form-group">
			                      <label for="exampleInputEmail1">Title</label>
			                      <input type="input" class="form-control" id="exampleInputEmail1 txt_name" name="txt_name" placeholder="Enter course name" value="{!! old('txt_name') !!}" required  title="Course name invalid">
													</div>
												</div>
												<div class="cold-md-6">
													<div class="form-group" id="wrapper">
														<label>Choose image</label>
															<input name="image" type="file" accept="image/*" onchange="preview_image(event)">
															<img name="image" id="output_image"/>
													</div>
												</div>
											</div>
											<div class="row">
			                    <div class="col-md-12">
			                    	<div class="form-group">
			                    		<label for="exampleInputEmail1">Chosse images</label>
			                    		<div class="form-group">
			                    			<br>
			                    			<input name="photos[]" id="file-1" type="file" multiple class="file" data-overwrite-initial="true">
			                    			<br>
			                    		</div>
			                    	</div>
			                    </div>
			                </div>
			              </div> 
			            </div>
			          </div>
			          <div class="modal-footer">
			            <button type="submit" class="btn btn-primary">Save</button>
			          </div>
			        </form>
				</div>
			</div>
		</div>
	</section>
@endsection