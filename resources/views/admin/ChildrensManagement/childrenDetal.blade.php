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
              <a href="{{ route('course.create')}}"><button type="button" class="btn btn-success btn-sm" {{-- data-toggle="modal" data-target="#modal-default" --}}><i class="fa fa-plus">Add</i></button></a>
            </p>
          </div>

          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped" style="font-size: 12px; text-align: center;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Course Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Term</th>
                  <th style="width: 128px" class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $stt=0 ?>
                  @foreach($getCourses as $getCourse)
                <?php $stt=$stt+1 ?>
                <tr>
                  <td>{{ $stt }}</td>
                  <td>{{ $getCourse->Course_Name  }}</td>
                  <td class="text-center"><img src="{{asset('image/')}}/course/{{ $getCourse->image }}" style='max-width:80px;max-height:80px' class='img img-thumbnail' /></td>
                  <td>{{ $getCourse->Description }}</td>
                  <td>{{ $getCourse->Term }}</td>
                  <th>
                    <a href="{{ route('course.edit', $getCourse->id) }}"><button type="button" class="btn btn-warning btn-sm editLeftRight"><i class="fa fa-edit"></i></button></a>
                    <button type="button" class="btn btn-warning editLeftRight" data-toggle="modal" data-target="#addLevel" data-courseid="{{ $getCourse->id }}" data-name="{{ $getCourse->Course_Name }}" data-description="{{ $getCourse->Description }}" data-term="{{ $getCourse->Term }}" >Add Level</button> 
                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                  </th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Course Name</th>
                  <th>Image</th>
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

  <!-- /.modal -->

    <script type="text/javascript">

      // CKEDITOR.replace('editor1');

      // CKEDITOR.replace('txt_contentTest');
      $.fn.modal.Constructor.prototype.enforceFocus = function() {
        var $modalElement = this.$element;
        $(document).on('focusin.modal',function(e) {
          var $parent = $(e.target.parentNode);
          if ($modalElement[0] !== e.target
            && !$modalElement.has(e.target).length
            && $(e.target).parentsUntil('*[role="dialog"]').length === 0) {
            $modalElement.focus();
        }
      });
      };
      $(document).ready(function(){

      function loadData($courseid){
        var button = $(event.relatedTarget) 

        var courseid = $courseid

        var modal = $(this)
        // console.log(txt_contentTest);
        // CKEDITOR.replace('txt_contentTest');
        modal.find('.modal-body #txt_courseid').val(courseid);
        var code = ''
        $.ajax({
            type : 'GET',
            url : 'http://127.0.0.1:8000/LevelOfCourse/'+courseid,


            success: function(response){
              var courseids = button.data('name')
              code = `<tr>
                <td  id="Course_ID">${courseid}</td>
                <td contenteditable id="Level_Name"></td>
                <td contenteditable id="Score_min"></td>
                <td contenteditable id="Score_max"></td>
                <td><button type="button" class="btn btn-success btn-xs" id="add" data-courseid="${courseid}">Add</button></td>
                </tr>`;
              for(var i = 0; i < response.data.length; i++)
              {
                var item = response.data[i];
                code +=`
                <tr>      <td  class="column_name" data-column_name="Course_Name" data-id="${item.id_level}">${item.Course_ID} </td>
                <td contenteditable class="column_name" data-column_name="Level_Name" data-id="${item.id_level}">${item.Level_Name} </td>
                <td contenteditable class="column_name" data-column_name="Score_min" data-id="${item.id_level}">${item.Score_min} </td>
                <td contenteditable class="column_name" data-column_name="Score_max" data-id="${item.id_level}">${item.Score_max} </td>
                <td><button type="button" class="btn btn-danger btn-xs delete" id="delete" data-id="${item.id_level}">Delete</button></td>
                </tr>`;
              }
            $('.add-level').html(code);
            }
          })
      }

      $('#addLevel').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var courseid = button.data('courseid')
        var modal = $(this)
        modal.find('.modal-body #txt_courseid').val(courseid);
        var code = ''
        $.ajax({
            type : 'GET',
            url : 'http://127.0.0.1:8000/LevelOfCourse/'+courseid,

            success: function(response){
              var courseids = button.data('name')
              code = `<tr>
                <td  id="Course_ID">${courseid}</td>
                <td contenteditable id="Level_Name"></td>
                <td contenteditable id="Score_min"></td>
                <td contenteditable id="Score_max"></td>
                <td><button type="button" class="btn btn-success btn-xs" id="add" data-courseid="${courseid}">Add</button></td>
                </tr>`;
              for(var i = 0; i < response.data.length; i++)
              {
                var item = response.data[i];
                code +=`
                <tr>      <td  class="column_name" data-column_name="Course_Name" data-id="${item.id_level}">${item.Course_ID} </td>
                <td contenteditable class="column_name" data-column_name="Level_Name" data-id="${item.id_level}">${item.Level_Name} </td>
                <td contenteditable class="column_name" data-column_name="Score_min" data-id="${item.id_level}">${item.Score_min} </td>
                <td contenteditable class="column_name" data-column_name="Score_max" data-id="${item.id_level}">${item.Score_max} </td>
                <td><button type="button" class="btn btn-danger btn-xs delete" id="delete" data-id="${item.id_level}">Delete</button></td>
                </tr>`;
              }
            $('.add-level').html(code);
            }
          })
        });


      var token = $('input[name="_token"]').val();
        $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


      $(document).on('click', '#add', function(){
          var Level_Name = $('#Level_Name').text();
          var Score_min = $('#Score_min').text();
          var Score_max = $('#Score_max').text();
          var course_id = $('#Course_ID').text();
          console.log(Level_Name,Score_min,Score_max,course_id)
          if(Level_Name != '' && Score_min != '' && Score_max != '' && confirm("Are you sure you want to add this records?"))
          {
           $.ajax({
            url:'http://127.0.0.1:8000/LevelOfCourse/add_data',
            method:"POST",
            data:{Level_Name:Level_Name, Score_min:Score_min, Course_ID:course_id, Score_max:Score_max, _token:token},
            success:function(data)
            {
             $('.message').html(data);
             loadData(course_id);
            }
           });
          }
          else
          {
           $('#message').html("<div class='alert alert-danger'>Both Fields are required</div>");
          }
         });


      $(document).on('blur', '.column_name', function(){
          var coluumn_name = $(this).data("column_name");
          var coluumn_value = $(this).text();
          var idd = $(this).data("id");
          var course_id = $('#Course_ID').text();
          
              console.log(course_id);
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
             $('.message').html(data);
             loadData(course_id);
            }
           })
          }
          else
          {
           $('.message').html("<div class='alert alert-danger'>Enter some value</div>");
          }
         });


      $(document).on('click', '#delete', function(){
        var idd = $(this).data("id");
        var course_id = $('#Course_ID').text();
        console.log(course_id);
        if(confirm("Are you sure you want to delete this records?"))
        {
         $.ajax({
          url:'http://127.0.0.1:8000/LevelOfCourse/delete_data',
          method:"POST",
          data:{id:idd, _token:token},
          success:function(data)
          {
            $('.message').html(data);
            loadData(course_id);

          }
        });
       }
     });

      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#profile-img-tag').attr('src', e.target.result);

          }
        });
      }

      // function readURL(input) {
      //     if (input.files && input.files[0]) {
      //         var reader = new FileReader();
              
      //         reader.onload = function (e) {
      //             $('#profile-img-tag').attr('src', e.target.result);
      //         }
      //         reader.readAsDataURL(input.files[0]);
      //     }
      // }

      $("#profile-img").change(function(){
        readURL(this);
      });


});
</script>


  </section>


@endsection
