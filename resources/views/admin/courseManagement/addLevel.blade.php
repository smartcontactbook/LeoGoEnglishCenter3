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
body
{
 width:100%;
 margin:0 auto;
 padding:0px;
 font-family:helvetica;
 background-color:#0B3861;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
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
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus">Add</i></button>
            </p>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Course Name</th>
                    <th>Level Name</th>
                    <th>Score Min</th>
                    <th>Score Max</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="add-level">

                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){
      loadData();

      function loadData(){
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
                <td><button type="button" class="btn btn-success btn-xs" id="add" data-id="${courseid}">Add</button></td>
                </tr>`;
              for(var i = 0; i < response.data.length; i++)
              {
                var item = response.data[i];
                code +=`
                <tr>                <td  class="column_name" data-column_name="Level_Name" data-id="${item.id_level}">${item.Course_ID} </td>
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
      }


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
          if(Level_Name != '' && Score_min != '' && Score_max != '')
          {
           $.ajax({
            url:'http://127.0.0.1:8000/LevelOfCourse/add_data',
            method:"POST",
            data:{Level_Name:Level_Name, Score_min:Score_min, Course_ID:course_id, Score_max:Score_max, _token:token},
            success:function(data)
            {
             $('.message').html(data);
             loadData();
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
             loadData();
            }
           })
          }
          else
          {
           $('.message').html("<div class='alert alert-danger'>Enter some value</div>");
          }
         });


      $(document).on('click', '.delete', function(){
          var idd = $(this).data("id");

              console.log(idd);
          if(confirm("Are you sure you want to delete this records?"))
          {
           $.ajax({
            url:'http://127.0.0.1:8000/LevelOfCourse/delete_data',
            method:"POST",
            data:{id:idd, _token:token},
            success:function(data)
            {
              $('.message').html(data);
              loadData();
            }
           });
          }
         });

});
</script>


       
  </section>