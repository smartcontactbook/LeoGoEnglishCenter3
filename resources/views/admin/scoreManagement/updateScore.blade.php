@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
  <h1><b>SCORE MANAGEMENT</b>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Score management</li>
  </ol>
</section>
<section class="content">
  <body>
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
          <p class="pull-right box-title">
            <a href="{{ route('classRoom.create') }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Add</button></a>
          </p>
        <div class="box-body" >
           <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
            <tr>
              <th >ID</th>
              <th class="text-center">Children Name</th>
              <th class="text-center">Class Name</th>
              <th class="text-center">Score Midtem</th>
              <th class="text-center">Score Final</th>
              <th class="text-center">Save</th>
            </tr>
            </thead>
            <!-- This is our clonable table line -->
            <tbody class="list-children">

            </tbody>
          </table>
          {{ csrf_field() }}
          <br><br>
          <div align="center">
            <button type="submit" class="btn btn-info btn-rounded btn-sm">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  <script>
$(document).ready(function(){
  fetchdata();

});
  function fetchdata(){
    $.ajax({
      type : 'GET',
        url : 'http://127.0.0.1:8000/scoreOfClass',
        success: function(response){
          console.log(response);
          var code = '';
          for(var i = 0; i < response.data.length; i++)
          {
            var item = response.data[i];
            code +=`<tr>
            <td class='edit-th'>${i+1}</td>
            <td class='edit-th'>${item.First_Name}</td>
            <td class='edit-th'>${item.Class_Name}</td>
            <td class='edit-th'>${item.Score_Midtem}</td>
            <td class='edit-th'>${item.Score_Final}</td>
            </td class='edit-th'><td><button class='btn btn-danger' type='submit'><i class='fa fa-trash-o'></i></button></td>
            </tr>`;
          }
        // console.log(code);
        $('.list-children').html(code);
      }
    })
  }

  function fetch_data()
 {
  $.ajax({
   url:'/scoreOfClass',
   type:'GET',
   success:function(respone)
   {
    console.log(respone);
    var code = '';
    code += '<tr>';
    code += '<td contenteditable id="First_Name"></td>';
    code += '<td contenteditable id="Class_Name"></td>';
    code += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    for(var count=0; count < respone.data.length; count++)
    {
     // code +='<tr>';
     // code +='<td contenteditable class="column_name" data-column_name="First_Name" data-id="'+respone.data[count].id+'">'+respone.data[count].First_Name+'</td>';
     // code += '<td contenteditable class="column_name" data-column_name="Class_Name" data-id="'+respone.data[count].id+'">'+respone.data[count].Class_Name+'</td>';
     // code +='<td contenteditable class="column_name" data-column_name="Score_Midtem" data-id="'+respone.data[count].id+'">'+respone.data[count].Score_Midtem+'</td>';
     // code += '<td contenteditable class="column_name" data-column_name="Score_Final" data-id="'+respone.data[count].id+'">'+respone.data[count].Score_Final+'</td>';
     // code += '<td><button type="button" class="btn btn-danger btn-xs delete" id="'+respone.data[count].id+'">Delete</button></td></tr>';
    }
    $('.list-children').html(code);
   }
  });
 }
</script>
</section>
@endsection

