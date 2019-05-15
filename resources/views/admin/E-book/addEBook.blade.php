@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
  <h3 class="box-title"><i class="fa fa-cloud"> </i>E-Books</h3>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">E-Book Management</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="col-lg-12">
          @if(Session::has('flash_message'))
          <div class="alert alert-{!! Session::get('flash_level') !!}">
            {!! Session::get('flash_message') !!}
          </div>
          @endif

        </div>
        <div class="box-header">
          <div>
            <p class="pull-right box-title">
              <a href="{{ route('e-book.index') }}">
                <button type="button" class="btn btn-primary btn-sm editLeftRight"><i class="fa fa-reply-all">Back</i></button>
              </a>
            </p>
          </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
          <div class="row">
            <div class="col-sm-10">
              <form class="form-horizontal" role="form" method="POST" action="{!! route('e-book.store') !!}" enctype="multipart/form-data">
              <!-- <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data"> -->
              {!! csrf_field() !!}
                <div class="form-group">                        
                  <label for="name" class="col-sm-2 control-label"> Name <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="txt_eBook_Name" name="txt_eBook_Name" value="">
                  </div>
                </div>

                <div class="form-group">                        
                  <label for="author" class="col-sm-2 control-label">Author <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="txt_Author" name="txt_Author" value="">
                  </div>
                </div>

                <div class="form-group">                        
                  <label for="s2id_autogen1" class="col-sm-2 control-label"> Course <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <select id="cbm_Course"  name="cbm_Course" class="form-control select2" value="{!! old('cbm_Course') !!}">
                      @foreach($getCourseOfRegister as $item)
                      <option value="{{ $item["id"] }}" id="cbm_Course">
                        {{ $item["Course_Name"] }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">                       
                  <label for="cover_photo" class="col-sm-2 control-label">Cover Photo <span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input name="image" type="file" accept="image/*" onchange="preview_image(event)">
                    <img name="image" id="output_image"/>
                  </div>
                </div>


              <div class="form-group">                        
                <label for="file" class="col-sm-2 control-label">File <span class="text-red">*</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="txt_file" name="txt_file" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Description <span class="text-red">*</span></label>
                <div class="col-sm-6">
                  <textarea class="form-control" id="txt_description" name="txt_description" rows="4" placeholder="Enter description" value="{!! old('txt_description') !!}" required></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                  <input type="submit" class="btn btn-success" value="Add E-Book" >
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
