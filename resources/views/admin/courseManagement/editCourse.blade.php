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
 max-width:300px;
}
</style>
  <section class="content-header">
    <h1><b>EDIT COURSE</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Course</li>
      <li class="active">Edit Course</li>
    </ol>
  </section>
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
             <form action="{{route('course.update', $getCourseEdit->id)}}" method="post">
              {{method_field('patch')}}
              {{csrf_field()}}
              <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course name</label>
                      <input type="input" class="form-control" id="txt_name2" name="txt_name2" placeholder="Enter course name" value="{!! old('txt_name2', $getCourseEdit->Course_Name) !!}" required  title="Course name invalid">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea class="form-control" id="txt_description" name="txt_description" rows="4" placeholder="Enter description" required>{!! old('txt_description', $getCourseEdit->Description) !!}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Term</label>
                      <select id="cmb_term" name="cmb_term" class="form-control" value="{!! old('cmb_term', $getCourseEdit->Term) !!}">
                        <option value="1" id="cmb_term">1 month</option>
                        <option value="2" id="cmb_term">2 month</option>
                        <option value="3" id="cmb_term">3 month</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group" id="wrapper">
                      <label>Choose image</label>
                      <input name="image" id="image" type="file" accept="image/*" onchange="preview_image(event)">
                      <img name="image" id="output_image" src="{{asset('image/')}}/course/{{ $getCourseEdit->image}}" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group">
                    <label >Content</label>
                    <textarea  name="txt_contentTest" id="txt_contentTest" >{!! old('txt_contentTest', $getCourseEdit->content ) !!}</textarea>
                    <script> CKEDITOR.replace( 'txt_contentTest', {
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
                {{-- <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection