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
              <button type="button" class="btn btn-primary btn-sm editLeftRight"><i class="fa fa-reply-all">Back</i></button>
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus">Add</i></button>
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
                  <th>
                    <button type="button" class="btn btn-warning editLeftRight" data-toggle="modal" data-target="#edit" data-courseid="{{ $getCourse->id }}" data-name="{{ $getCourse->Course_Name }}" data-description="{{ $getCourse->Description }}" data-term="{{ $getCourse->Term }}" ><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-success editLeftRight" data-toggle="modal" data-target="#addLevel" data-id="{{ $getCourse->id_course }}" data-name="{{ $getCourse->Course_Name }}"
                     >Add Level</button>
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








<div class="main-content">
  <div class="container-modal">
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

    {{-- modal add level --}}
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addLevel">
        <div class="modal-dialog modal-lg">
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
            <h4 class="modal-title">List Level Of Course</h4>
          </div>
          <div class="modal-body">
            <div id="message"></div>
            <div class="box-body">
              <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Level Name</th>
                    <th>Score Min</th>
                    <th>Score Max</th>
                  </tr>
                </thead>
                <tbody class="add-level">

                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button>
            <button type="submit" id="save" class="saveScore" >Save
            </button><!-- 
            <button type="submit" class="btn btn-primary">Save</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- /.modal -->
    

    <script type="text/javascript">
      $(document).ready(function(){

        $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var courseid = button.data('courseid')
        var name = button.data('name') 
        var description = button.data('description') 
        var term = button.data('term') 
        var modal = $(this)
        modal.find('.modal-body #txt_courseid').val(courseid);
        modal.find('.modal-body #txt_name').val(name);
        modal.find('.modal-body #txt_description').val(description);
        modal.find('.modal-body #cmb_term').val(term);
        }) 

        $('#addLevel').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #txt_courseid').val(id);
        var code = ''
        $.ajax({
            type : 'GET',
            url : 'http://127.0.0.1:8000/LevelOfCourse/'+id,

            success: function(response){
              console.log(response);
              code = `<tr>
                <td contenteditable id="Level_Name"></td>
                <td contenteditable id="Score_min"></td>
                <td contenteditable id="Score_max"></td>
                <td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td>
                </tr>`;
              for(var i = 0; i < response.data.length; i++)
              {
                console.log(data);
                var item = response.data[i];
                code +=`
                <tr>
                <td contenteditable class="column_name" data-column_name="First_Name" data-id="${item.id_level}">${item.Course_Name} </td>
                <td contenteditable class="column_name" data-column_name="First_Name" data-id="${item.id_level}">${item.Level_Name} </td>
                <td contenteditable class="column_name" data-column_name="Class_Name" data-id="${item.id_level}">${item.Score_min} </td>
                <td contenteditable class="column_name" data-column_name="Score_Midtem" data-id="${item.id_level}">${item.Score_max} </td>

                </tr>`;
              }
             //console.log(code);
            $('.add-level').html(code);
            }
          })
        }) 
        //<meta name="csrf-token" content="{{ csrf_token() }}">
        //
        var token = $('input[name="_token"]').val();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
       $(document).on('blur', '.column_name', function(){
          var coluumn_name = $(this).data("column_name");
          var coluumn_value = $(this).text();
          var idd = $(this).data("courseid");
          if(coluumn_value != ''  )
          {
            
            //confirm("Are you sure you want "+coluumn_value)
           $.ajax({
            url:'http://127.0.0.1:8000/LevelOfCourse/update_data',

            method:"POST",

            data:{column_name:coluumn_name, 
                  column_value:coluumn_value, 
                  id:idd, 
                  _token:token},
            success:function(data)
            {
              console.log(data);
             $('.message').html(data);
            }
           })
          }
          else
          {
           $('.message').html("<div class='alert alert-danger'>Enter some value</div>");
          }
         });

       
        });

    </script>
  </section>
@endsection