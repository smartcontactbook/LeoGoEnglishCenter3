@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>RIGISTER LIST</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Rigister List</li>
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
						<button type="button" class="btn btn-primary editLeftRight">
							<i class="fa fa-reply-all">Back</i>
						</button>
						<a href="{{ route('register.create') }}">
							<button type="button" class="btn btn-success">
								<i class="fa fa-plus"></i>
								Add
							</button>
						</a>
					</p>
				</div>

				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped" style="font-size: 12px; text-align: center;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Address</th>
								<th>Test Schedule</th>
								<th>Course</th>
								<th>Appointment</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled" style="width: 85px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $stt=0 ?>
							@foreach($getRegister as $value)
							{{-- dd(); --}}
							<?php $stt=$stt+1 ?>
								<tr id="{{$value->id}}">
									<td>{!! $stt !!}</td>
									<td>{{$value->Full_Name}}</td>
									<td>{{$value->Email}}</td>
									<td>{{$value->Phone_Number}}</td>
									<td>{{$value->Address}}</td>
									<td>{{$value->Test_Schedule}}</td>
									<td>
										{{$value->Course_Name}}
									</td>
									<td>
										@if($value->Test_Schedule != null)
												<i class="fas fa-user-check" style="height: 20px"></i>
										@else
												<i class="fas fa-user-times" style="height: 20px"></i>
										@endif
									</td>
									<td>
										<button 
											type="button" 
											class=" btn btn-info btn-sm" 
											data-toggle="modal" 
											data-target="#schedule" 
											data-id="{{$value->id}}" 
											data-name="{{$value->Full_Name}}" 
											data-phone="{{$value->Phone_Number}}" 
											data-schedule="{{$value->Test_Schedule}}" 
											data-date="{{$value->Birth_Day}}">
												<i class="fa fa-calendar-o"></i>
										</button>
										@if($value->Test_Schedule != null)
											<button 
											type="button" 
											class="btn btn-warning btn-sm"
											data-toggle="modal" 
											data-target="#score"
											data-id="{{$value->id}}" 
											data-firstname="{{$value->Full_Name}}"
											data-nickname="{{$value->Nick_Name}}"
											data-parent="{{$value->Parent_Name}}" 
											data-email="{{$value->Email}}"
											data-phone="{{$value->Phone_Number}}" 
											data-score="{{$value->Score}}" 
											data-date="{{$value->Birth_Day}}"
											data-course="{{$value->Course_ID}}"
											data-nameCourse = "{{ $value->Course_Name }}"
											data-score="{{$value->Score}}">
												<i class="	fa fa-plus-square"></i>
											</button>
										@endif
										<button type="button" class="btn btn-outline-danger btn-sm remove"><i class="fas fa-trash-alt"></i></button>

										{{-- {!! Form::open(['method' => 'DELETE', 'route' => ['postDelRegister', $value->id], 'onsubmit' => 'return confirmDelete()']) !!} --}}
										
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Address</th>
								<th>Test Schedule</th>
								<th>Course</th>
								<th>Appointment</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
<div class="main-content">
  	<div class="container-modal">
		    <div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="aria-labelledby">
	     		<div class="modal-dialog">
			     	<div class="modal-content">
			        	<div class="modal-header Editheader">
				            <button type="button"class="close"data-dismiss="modal"aria-label="Close">
				            	<span aria-hidden="true">×</span>
				          	</button>
				          	<h4 class="modal-title">TEST SCHEDULE</h4>
				        </div>
				        <form method="POST" action="{{ route('register.update','test') }}">
					          {{method_field('patch')}}
					          {{csrf_field()}}
					          <div class="modal-body">
					            <div class="box-body">
					              <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value="">
					             	<div class="form-group">
					               	  <label for="exampleInputEmail1">Full name</label>
					               		<input type="input"  class="form-control " disabled id="txt_name" name="txt_name" value="{!! old('txt_name') !!}" ></label>
					              	</div>	
					             	<div class="form-group">
					               		<label for="exampleInputPassword1">Date</label>
					                	<input type="input" class="form-control" disabled id="txt_date" name="txt_date" value="{!! old('txt_date') !!}"></label>
					              	</div>
					              <div class="form-group">
					                <div class="row">
					                  <div class="col-lg-6">
					                    <div class="form-group">
					                      <label>Phone number</label>
					                      <input 
					                      type="input" 
					                      class="form-control" disabled
					                      type="text" 
					                      id="txt_phone" 
					                      class="form-control" 
					                      value="{!! old('txt_phone') !!}" 
					                      name="txt_phone">
					                      </fieldset>
					                    </div>
					                  </div>
					                  <div class="col-lg-6">
					                    <div class="form-group">
					                      <label>Test schedule</label>
					                      <input  
					                      type ="datetime-local"
					                      id="txt_testSchedule" 
					                      class="form-control" 
					                      pattern="/([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))/"
					                      value="{!! old('txt_testSchedule') !!}" 
					                      name="txt_testSchedule">
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
	    <

	     <script type="text/javascript">
	       $('#schedule').on('show.bs.modal', function (event) {

	        var button = $(event.relatedTarget) 
	        var id = button.data('id')
	        console.log(id);
	        var date = button.data('date') 
	        var phone = button.data('phone') 
	        var name = button.data('name')
	        var schedule = button.data('schedule')
	        var modal = $(this)
	        // $("#re-id").val('id');
	        $("#re-id").val($(event.relatedTarget).data('id'));
	        modal.find('.modal-body #txt_testId').val(id);
	        modal.find('.modal-body #txt_name').val(name);
	        modal.find('.modal-body #txt_date').val(date);
	        modal.find('.modal-body #txt_phone').val(phone);
	        modal.find('.modal-body #txt_testSchedule').val(schedule);
	      }) 
	    </script>
	{{-- END MODAL SCHEDULE --}}
	  	</div>
	  
	  	<div class="container-modal">
	    {{-- START MODAL SCORE --}}

		    <div class="modal fade" id="score" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	     	<div class="modal-dialog">
	     	<div class="modal-content">
	        <div class="modal-header Editheader">
	            <button type="button"class="close"data-dismiss="modal"aria-label="Close">
	            	<span aria-hidden="true">×</span>
	          	</button>
	          	<h4 class="modal-title">ADD CHILDREN</h4>
	        </div>
	        <form method="POST" action="{{ route('postUpdateRegister') }}">
	          {{csrf_field()}}
	          <div class="modal-body">
	            <div class="box-body">
	              <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value="">
	             	<div class="form-group">
	               	  <label for="exampleInputEmail1">Full Name</label>
	               		<input 
	               		type="input"  
	               		class="form-control " 
	               		id="txt_firstname" 
	               		name="txt_firstname" 
	               		pattern="^[a-zA-z ]*$"
	               		value="{!! old('txt_firstname') !!}" disabled >
	               	  </label>
	              	</div>	
	              	<div class="form-group">
	               	  <label for="exampleInputEmail1">Nick Name</label>
	               		<input  disabled
	               		type="input"  
	               		class="form-control " 
	               		id="txt_nickname" 
	               		name="txt_nickname" 
	               		pattern="^[a-zA-z ]*$"
	               		value="{!! old('txt_nickname') !!}" >
	               	  </label>
	              	</div>	
	             	<div class="form-group">
	               	  <label for="exampleInputPassword1">Parent Name</label>
	                	<input disabled
	                	type="input"  
	               		class="form-control " 
	               		id="txt_parent" 
	               		pattern="^[a-zA-z ]*$"
	               		name="txt_parent" 
	               		value="{!! old('txt_parent') !!}" >
	               	  </label>
	              	</div>
	              <div class="form-group">
	                <div class="row">
	                  <div class="col-lg-6">
	                    <div class="form-group">
	                      <label>Phone number</label>
		                      <input disabled
		                      type="input" 
		                      class="form-control" 
		                      <label 
		                      type="text" 
		                      id="txt_phone" 
		                      class="form-control" 
		                      value="{!! old('txt_phone') !!}" 
		                      name="txt_phone">
		                  </label>
	                      <label>Email</label>
		                      <input disabled
		                      type="input" 
		                      class="form-control" 
		                      <label 
		                      type="text" 
		                      id="txt_email" 
		                      class="form-control" 
		                      value="{!! old('txt_email') !!}" 
		                      name="txt_email">
		                  </label>
		                  <label>Course</label>
							<input disabled
		                      type="input" 
		                      class="form-control" 
		                      <label 
		                      type="text" 
		                      id="txt_course" 
		                      class="form-txt_course" 
		                      value="{!! old('txt_course') !!}" 
		                      name="txt_course">
				            {{-- </label> --}}
	                      </fieldset>
	                    </div>
	                  </div>
	                  <div class="col-lg-6">
	                    <div class="form-group">
	                      <label>Birth Day</label>
		                      <input disabled
		                      type="input" 
		                      class="form-control" 
		                      <label 
		                      type="text" 
		                      id="txt_birthday" 
		                      class="form-control" 
		                      value="{!! old('txt_birthday') !!}" 
		                      name="txt_birthday">
		                  </label>
	                      <label>Score</label>
		                      <input required
		                      id="txt_score" 
		                      class="form-control" 
		                      type="number" min="0" max="1000"
		                      value="{!! old('txt_score') !!}" 
		                      name="txt_score"></label>
		                  <label>Level</label>
						      <select id="cbm_Level"  name="cbm_Level" class="form-control select2" value="{!! old('cbm_Level') !!}">
						      @foreach($getLevels as $item)
						      <option value="{{ $item["id"] }}" id="cbm_Level">
						          {{ $item["Level_Name"] }}
						      </option>
						      @endforeach
					          </select>
						  </label> 
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
</div>
<script type="text/javascript">
  $('#score').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id')
    var date = button.data('date') 
    var phone = button.data('phone') 
    var firstname = button.data('firstname')
    var nickname = button.data('nickname')
    var score = button.data('score')
    var email = button.data('email')
    var parent = button.data('parent')
    var score = button.data('score')
    var course = button.data('course')
    var nameCourse = button.data('nameCourse')
    var modal = $(this)
    modal.find('.modal-body #txt_testId').val(id);
    modal.find('.modal-body #txt_firstname').val(firstname);
    modal.find('.modal-body #txt_nickname').val(nickname);
    modal.find('.modal-body #txt_birthday').val(date);
    modal.find('.modal-body #txt_phone').val(phone);
    modal.find('.modal-body #txt_score').val(score);
    modal.find('.modal-body #txt_email').val(email);
    modal.find('.modal-body #txt_parent').val(parent);
    modal.find('.modal-body #txt_score').val(score);
    modal.find('.modal-body #txt_course').val(course);
    modal.find('.modal-body #txt_nameCourse').val(nameCourse);
  })

  $(".remove").click(function(){
    var id = $(this).parents("tr").attr("id");
    $.ajaxSetup({
      headers: {
        'csrftoken' : '{{ csrf_token() }}' }
    });

    if(confirm('Are you sure to remove this record ?'))
    {
      $.ajax({
        url: 'http://127.0.0.1:8000/delChildren/'+id,
        type: 'DELETE',
        data: {
          "id": id, "_token": "{{ csrf_token() }}",}
        ,
        error: function() {
          alert('Something is wrong');
        }
        ,
        success: function(data) {
          $("#"+id).remove();
          alert("Record removed successfully");
        }
      });
    }
  });
</script>

@endsection