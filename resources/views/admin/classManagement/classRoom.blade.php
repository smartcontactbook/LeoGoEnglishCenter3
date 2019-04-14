@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>CLASS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Class management</li>
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
						<a href="{{ route('classRoom.create') }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Add</button></a>
					</p>
				</div>
				<div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @foreach($getCourses as $count=>$getCourse)
{{--               @php
                dd($count);
              @endphp --}}
                <li role="presentation" @if($count == 0) class="active" @endif>
                  <a href="#tab-{{ $getCourse->id }}" aria-controls="#tab-{{ $getCourse->id }}" role="tab" data-toggle="tab">{{ $getCourse->Course_Name }}</a>
                </li>
              @endforeach
            </ul>
            <div class="tab-content">
              @foreach($getCourses as $count=>$getCourse)
                <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $getCourse->id }}">
                  <!-- Post -->
                  <div class="row">
                    @foreach($getClassOfCourses as $value)
                      @if($getCourse->id == $value->id_course)
                      <input type="hidden" name="txt_idClass">
                        <div class="col-sm-3">
                          <div class="box-body">
                            <ul class="products-list product-list-in-box">
                              <li class="edit-item">

                                <div class="edit-product-info">
                                  <h4 class="edit-p">{{ $value->Class_Name }} 
                                  <a href="" class="edit-icon pull-right"><i class="fa fa-eyedropper" aria-hidden="true"></i></a>
                                  </h4>
                                  
                                  <div class="avatar-edit">
                                    <img src="{{ asset('image/avatar').'/logo.png' }}" class="img-circle edit-image" alt="Avatar">
                                    
                                  </div>
                                </div>
                              </li>
                              <!-- /.item -->
                              <li class="item">
                                <div class="box-body">
                                  <div class="row">
                                    <label class="control-label edit-row">Course</label>
                                    <div class="pull-right">
                                      <label class="label edit-lable edit-pull-right">{{ $value->Course_Name }}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Start day</label>
                                    <div class="pull-right">
                                      <label class="label edit-lable edit-pull-right">{{ $value->Start_Date }}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">End date</label>
                                    <div class="pull-right">
                                      <label class="label edit-lable edit-pull-right">{{ $value->End_Date}}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Qty Students</label>
                                    <div class="pull-right">
                                      <label class="label label-danger edit-pull-right">{{ $value->QuantityStudent }}</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Remain classes</label>
                                    <div class="pull-right">
                                      <label class="label label-success edit-pull-right">{{ $value->QuantitySession }}</label>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <!-- /.item -->
                              <li class="item">
                                <div class="box-body">
                                  <input type="hidden" name="txt_idClass" value="{{ $value->id }}"> 
                                  <button 
                                      type="button" 
                                      class="btn edit-button edit-itemJs" 
                                      data-toggle="modal" 
                                      data-id="{{$value->id}}" 
                                      data-target="#listChildren">
                                      List
                                  </button>
                                  <button 
                                    type="button" 
                                    class="btn pull-right edit-button edit-itemJs" 
                                    data-toggle="modal" 
                                    data-id="{{$value->id}}" 
                                    data-target="#inputscore">
                                      Score
                                  </button>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <!-- /.box-body -->
                        </div>
                      @endif
                    @endforeach
                  </div>
                  <!-- /.post -->
                </div>
              @endforeach
            </div>
            <!-- /.tab-content -->
          </div>
				</div>
			</div>
		</div>
	</div>


{{-- START MODAL SCHEDULE --}}
<div class="main-content">
  <div class="container-modal">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="listChildren">
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
          <h4 class="modal-title">List Children Of Class</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Birth day</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Score</th>
                  <th>Address</th>
                </tr>
              </thead>
                <tbody class="list-student">

                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="inputscore">
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
            <h4 class="modal-title">List Children Of Class</h4>
          </div>
          <div class="panel-heading">Sample Data</div>
          <div class="modal-body">
            <div id="message"></div>
            <div class="box-body">
              <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class Name</th>
                    <th>Score Midtem</th>
                    <th>Score Final</th>
                  </tr>
                </thead>
                <tbody class="input-score">

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

<script type="text/javascript">
  $(document).ready(function(){
   $('#listChildren').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #txt_id').val(id);
    var code = ''
    $.ajax({
        type : 'GET',
        // data : b,
        url : 'http://127.0.0.1:8000/StudentOfClass/'+id,

        success: function(response){
          for(var i = 0; i < response.data.length; i++)
          {
            var item = response.data[i];
            // var gender = '';
            // if(${item.Gender} == 1)
            //   gender = Male;
            // else
            //   gender = FeMale;
            code +=`<tr>
            <td>${i+1}</td>
            <td>${item.First_Name} ${item.Last_Name}</td>
            <td>${item.Birth_Day}</td>
            <td>${item.Gender}</td>
            <td>${item.email}</td>
            <td>${item.Phone_Number}</td>
            <td>${item.Score}</td>
            <td>${item.Address}</td>
            </tr>`;
          }
         //console.log(code);
        $('.list-student').html(code);
      }
    })
  }) 


    $('#inputscore').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #txt_id').val(id);
    var code = ''
    $.ajax({
        type : 'GET',
        // data : b,
        url : 'http://127.0.0.1:8000/ScoreOfStudent/'+id,

        success: function(response){
          //console.log(response);
          for(var i = 0; i < response.data.length; i++)
          {

            var item = response.data[i];
            // var gender = '';
            // if(${item.Gender} == 1)
            //   gender = Male;
            // else
            //   gender = FeMale;
            code +=`<tr>
            <td>${i+1}</td>
            <td>${item.First_Name} ${item.Last_Name}</td>
            <td>${item.Class_Name}</td>
            <td contenteditable class="column_name" data-column_name="Score_Midtem" data-id="'+${item.id_history_user}+'">${item.Score_Midtem} </td>
            <td contenteditable class="column_name" data-column_name="Score_Final" data-id="'+${item.id_history_user}+'">${item.Score_Final} </td>
            <td><button type="button" class="btn btn-danger btn-xs delete" id="'+${item.id_history_user}+'">Delete</button></td>

            </tr>`;
          }
         //console.log(code);
        $('.input-score').html(code);
      }
    })
  }) 

    var _token = $('input[name="_token"]').val();

  
    $(document).on('blur', '.column_name', function(){
      var column_name = $(this).data("column_name");
      var column_value = $(this).text();
      var idd = $(this).data("id");
      if(column_value != ''  )
      {
        
         confirm("Are you sure you want "+idd)
       $.ajax({
        url:'http://127.0.0.1:8000/StudentOfClass/update_data',
        method:"POST",

        data:{column_name:column_name, column_value:column_value, id:idd, _token:_token},
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