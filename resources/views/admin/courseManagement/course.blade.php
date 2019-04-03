@extends('admin.layout.master.master')
@section('main-content')
  <section class="content-header">
    <h1><b>COURSE MANAGEMENT</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Course management</li>
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
            <p class="pull-right box-title">
              <button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus">Add</i></button>
            </p>
          </div>

          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Course Name</th>
                  <th>Description</th>
                  <th>Term</th>
                  <th>Level</th>
                  <th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $stt=0 ?>
                  @foreach($getCourses as $getCourse)
                <?php $stt=$stt+1 ?>
                <tr>
                  <td>{{ $stt }}</td>
                  <td>{{ $getCourse->Course_Name }}</td>
                  <td>{{ $getCourse->Description }}</td>
                  <td>{{ $getCourse->Term }}</td>
                  <td>{{ $getCourse->Level_Name }}</td>
                  <th>
                    <button type="button" class="btn btn-warning editLeftRight" data-toggle="modal" data-target="#edit" data-courseid="{{ $getCourse->id_course }}" data-name="{{ $getCourse->Course_Name }}" data-description="{{ $getCourse->Description }}" data-term="{{ $getCourse->Term }}" data-level="{{ $getCourse->Level_Name }}"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                  </th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Course Name</th>
                  <th>Description</th>
                  <th>Term</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

    
    {{-- modal add --}}
    <div class="modal fade" id="modal-default"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header Editheader">
            <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
            >
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">ADD COURSE</h4>
        </div>
        <form role="form" method="POST" action="{!! route('course.store') !!}">
          {!! csrf_field() !!}>
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Course name</label>
                <input type="input" class="form-control" id="exampleInputEmail1 txt_name" name="txt_name" placeholder="Enter course name" value="{!! old('txt_name') !!}" required pattern="^[a-zA-Z]*$" title="Course name invalid">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" id="txt_description" name="txt_description" rows="2" placeholder="Enter description" value="{!! old('txt_description') !!}" required></textarea>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
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
                    <div class="form-group">
                      <label>Level</label>
                      <select class="form-control" id="cmb_level" name="cmb_level" value="{!! old('cmb_level') !!}">
                        @foreach($getLevels as $item)
                        <option value="{!! $item["id"]!!}" >{!! $item["Level_Name"]!!}</option>
                        @endforeach
                      </select>
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
    {{-- end modal add --}}

    {{-- modal edit --}}
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header Editheader">
            <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
            >
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">EDIT COURSE</h4>
        </div>
        <form action="{{route('course.update','test')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
          <div class="modal-body">
            <div class="box-body">
              <input class="form-control" type="hidden" name="idCourse" id="txt_courseid" value="{{ old('txt_courseid') }}">
              <div class="form-group">
                <label for="exampleInputEmail1">Course name</label>
                <input type="input" class="form-control" id="txt_name" name="txt_name" placeholder="Enter course name" value="{!! old('txt_name') !!}" required pattern="^[a-zA-Z]*$" title="Course name invalid">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" id="txt_description" name="txt_description" rows="2" placeholder="Enter description" value="{!! old('txt_description') !!}" required></textarea>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Term</label>
                      <select id="cmb_term" name="cmb_term" class="form-control" value="{!! old('cmb_term') !!}">
                        <option value="1">1 month</option>
                        <option value="2">2 month</option>
                        <option value="3">3 month</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Level</label>
                      <select class="form-control" id="cmb_level" name="cmb_level" value="{!! old('cmb_level') !!}">gg
                        @foreach($getLevels as $item)
                          <option value="{!! $item["id"]!!}" >{!! $item["Level_Name"]!!}</option>
                        @endforeach
                      </select>
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
  <!-- /.modal -->
    <script type="text/javascript">
       $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var courseid = button.data('courseid')
        var name = button.data('name') 
        var description = button.data('description') 
        var term = button.data('term') 
        var level = button.data('level')
        var modal = $(this)
        modal.find('.modal-body #txt_courseid').val(courseid);
        modal.find('.modal-body #txt_name').val(name);
        modal.find('.modal-body #txt_description').val(description);
        modal.find('.modal-body #cmb_term').val(term);
        modal.find('.modal-body #cmb_level').val(level);
      }) 
    </script>
  </section>
@endsection