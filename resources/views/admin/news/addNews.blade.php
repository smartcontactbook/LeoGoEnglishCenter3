@extends('admin.layout.master.master')
@section('main-content')
<style>
	#wrapper
	{
		margin:0 auto;
		padding:0px;
	}
	#output_image
	{
		max-width:300px;
	}
</style>
<section class="content-header">
	<h1><b>Add News</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Add News</a></li>
	</ol>
</section>
<section class="content">
	<div class="row">
		@if (count($errors) > 0)
		<ul><li>{{ $error }}</li></ul>
		@endif
		<div class="col-xs-12">
			<div class="box">
				<form role="form" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<div class="modal-body">
						<div class="box-body">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Title</label>
											<input type="input" class="form-control" id="exampleInputEmail1 txt_name" name="txt_name" placeholder="Enter course name" value="{!! old('txt_name') !!}" required title="Course name invalid">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Description</label>
											<textarea class="form-control" id="txt_description" name="txt_description" rows="4" placeholder="Enter description" value="{!! old('txt_description') !!}" required></textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Type</label>
											<select id="cmb_type" name="cmb_type" class="form-control" value="{!! old('cmb_type') !!}">
												<option value="0" id="cmb_type">News</option>
												<option value="1" id="cmb_type">Brand</option>
											</select>
										</div>
										<div class="form-group" id="wrapper">
											<label>Choose image</label>
											{{-- <div > --}}
												<input name="image" type="file" accept="image/*" onchange="preview_image(event)">
												<img name="image" id="output_image"/>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<label >Content</label>
											<textarea name="txt_content" id="txt_content"></textarea>
											<script> CKEDITOR.replace( 'txt_content', {
												filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
												filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
												filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
												filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
												filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
												filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
											} ); </script>
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
	@endsection