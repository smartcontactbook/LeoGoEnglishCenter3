@extends('admin.layout.master.master')
@section('main-content')

  <section class="content-header">
    <h1><b>ADD COURSE</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Course</li>
      <li class="active">Add Course</li>
    </ol>
  </section>
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <form role="form" method="POST" action="{!! route('course.store') !!}" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course name</label>
                      <input type="input" class="form-control" id="exampleInputEmail1 txt_name" name="txt_name" placeholder="Enter course name" value="{!! old('txt_name') !!}" required title="Course name invalid">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea class="form-control" id="txt_description" name="txt_description" rows="4" placeholder="Enter description" value="{!! old('txt_description') !!}" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Term</label>
                      <select id="cmb_term" name="cmb_term" class="form-control" value="{!! old('cmb_term') !!}">
                        <option value="1" id="cmb_term">1 month</option>
                        <option value="2" id="cmb_term">2 month</option>
                        <option value="3" id="cmb_term">3 month</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group" id="wrapper">
                      <label>Choose image</label>
                      {{-- <div > --}}
                       <input name="image" type="file" accept="image/*" onchange="preview_image(event)">
                       <img name="image" id="output_image"/>
                      {{-- <input type="file" name="file" id="profile-img"> --}}
                      {{-- <img src="" id="profile-img-tag" width="200px" /> --}}
                      {{-- <input type='file' onchange="readURL(this);" /> --}}
                      {{-- <img id="blah" src="http://placehold.it/180" alt="your image" /> --}}
                     {{--  <input type="file" name="file" id="profile-img">
                      <img src="" id="profile-img-tag" width="200px" /> --}}
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
            <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>
@endsection