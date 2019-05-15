@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
  <h1><b>E-BOOK MANAGEMENT</b>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">E-Book management</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-body">
          <h3 class="box-title"><li class="active">Edit E-Books</li></h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
          <div class="row">
            <div class="col-sm-10">
              <form class="form-horizontal" role="form" method="post" action="{!! route('e-book.update', $getEbookOfCourses->id) !!}" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
                @include('errors.errors')
                <div class="form-group">                        
                  <label for="name" class="col-sm-2 control-label"> Name <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="txt_eBook_Name" name="txt_eBook_Name" value="{{$getEbookOfCourses->eBook_Name}}">
                  </div>
                </div>

                <div class="form-group">                        
                  <label for="author" class="col-sm-2 control-label">Author <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="txt_Author" name="txt_Author" value="{{$getEbookOfCourses->Author}}">
                  </div>
                </div>

                <div class="form-group">                       
                  <label for="cover_photo" class="col-sm-2 control-label">Cover Photo <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <!-- <img src="{{asset('image/')}}/ebook/{{ $getEbookOfCourses->eBook_image }}" >
                    <img name="image" id="output_image"/> -->
                    <input name="image" type="file" accept="image/*" onchange="preview_image(event)"value="{{ $getEbookOfCourses->image }}">
                    <img name="image" style="width: 200px; height: 150px;" id="output_image" src="{{asset('image/')}}/ebook/{{ $getEbookOfCourses->image }}"/>


                  </div>
                </div>


              <div class="form-group">                        
                <label for="file" class="col-sm-2 control-label">File <span class="text-red">*</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="txt_file" name="txt_file" value="{{$getEbookOfCourses->file}}">
                </div>
              </div>

              <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Description <span class="text-red">*</span></label>
                <div class="col-sm-6">
                  <textarea class="form-control" id="txt_description" name="txt_description" rows="4" placeholder="Enter description"  required>{!! $getEbookOfCourses->description !!}</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input type="submit" class="btn btn-success" value="Update E-book">
                </div>
                </div>

            </form>
          </div>
        </div>
      </div>
    </div>   
  </section>
<script>
  $( ".select2" ).select2( { placeholder: "", maximumSelectionSize: 6 } );
  $(document).ready(function() {
    // $('#cover_photo').imageuploadify();
    // $('#file').imageuploadify();
     // $('input[type="file"]').imageuploadify();
  })
</script>
@endsection
