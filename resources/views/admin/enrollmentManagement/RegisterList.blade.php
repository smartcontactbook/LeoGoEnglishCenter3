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
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Address</th>
								<th>Test Schedule</th>
								<th>Score</th>
								<th>Appointment</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $stt=0 ?>
							@foreach($getRegister as $value)
							<?php $stt=$stt+1 ?>
								<tr>
									<td>{!! $stt !!}</td>
									<td>{{$value->First_Name}}</td>
									<td>{{$value->Email}}</td>
									<td>{{$value->Phone_Number}}</td>
									<td>{{$value->Address}}</td>
									<td>{{$value->Test_Schedule}}</td>
									<td>{{$value->Score}}</td>
									<td>
										@if($value->Test_Schedule != null)
											<button type="button" class=" btn btn-success btn-sm">
												<i class="fa fa-check"></i></button>
										@else
											<button type="button" class=" btn btn-success btn-sm">
												<i class="fa fa-close"></i></button>
										@endif
									</td>
									<th>
										@if($value->Test_Schedule != null)
										@else
											<button 
											type="button" 
											class=" btn btn-info" 
											data-toggle="modal" 
											data-target="#schedule" 
											data-id="{{$value->id}}" 
											data-name="{{$value->First_Name}}" 
											data-phone="{{$value->Phone_Number}}" 
											data-schedule="{{$value->Test_Schedule}}" 
											data-date="{{$value->Birth_Day}}">
												<i class="fa fa-calendar-o"></i>
										</button></td>
										@endif
										<button 
										type="button" 
										class="btn btn-warning editLeftRight btn-sm"
										data-toggle="modal" 
										data-target="#score"
										data-id="{{$value->id}}" 
										data-firstname="{{$value->First_Name}}"
										data-lastname="{{$value->Last_Name}}"
										data-parent="{{$value->Parent_Name}}" 
										data-email="{{$value->Email}}"
										data-phone="{{$value->Phone_Number}}" 
										data-score="{{$value->Score}}" 
										data-date="{{$value->Birth_Day}}">
											<i class="	fa fa-edit"></i>
										</button>
										@if($value->Test_Schedule != null)
										<form action="{{ route('postAddChildren') }}" method="POST">
											{{csrf_field()}}
											<input type="hidden" name="txt_idAddChildren" value="{{ $value->id }}">
												<button type="submit" 
												class=" btn btn-warning editLeftRight btn-sm">
													<i class="fa fa-plus-square"></i>
												</button>
											</form>
										@else
										@endif

										<form action="{{ route('postDelRegister') }}" method="POST">
											{{csrf_field()}}
											<input type="hidden" name="txt_idDelChildren" value="{{ $value->id }}">
											<button type="submit" class="btn btn-danger btn-sm">
												<i class="fa fa-trash-o"></i>
											</button>
										</form>
									</th>
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
								<th>Score</th>
								<th>Appointment</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
<!-- {{-- START MODAL SCHEDULE --}}
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
				                      <label 
				                      type="text" 
				                      id="txt_phone" 
				                      class="form-control" 
				                      value="{!! old('txt_phone') !!}" 
				                      name="txt_phone"></label>
				                      </fieldset>
				                    </div>
				                  </div>
				                  <div class="col-lg-6">
				                    <div class="form-group">
				                      <label>Test schedule</label>
					                      <input 
					                      id="txt_testSchedule" 
					                      class="form-control" 
					                      type="datetime-local" 
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
        var date = button.data('date') 
        var phone = button.data('phone') 
        var name = button.data('name')
        var schedule = button.data('schedule')
        var modal = $(this)
        modal.find('.modal-body #txt_testId').val(id);
        modal.find('.modal-body #txt_name').val(name);
        modal.find('.modal-body #txt_date').val(date);
        modal.find('.modal-body #txt_phone').val(phone);
        modal.find('.modal-body #txt_testSchedule').val(schedule);
      }) 
    </script>
{{-- END MODAL SCHEDULE --}}

{{-- START MODAL SCORE --}}

	    <div class="modal fade" id="score" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     	<div class="modal-dialog">
     	<div class="modal-content">
        <div class="modal-header Editheader">
            <button type="button"class="close"data-dismiss="modal"aria-label="Close">
            	<span aria-hidden="true">×</span>
          	</button>
          	<h4 class="modal-title">ENTER SCORE</h4>
        </div>
        <form method="POST">
          {{method_field('patch')}}
          {{csrf_field()}}
          <div class="modal-body">
            <div class="box-body">
              <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value="">
             	<div class="form-group">
               	  <label for="exampleInputEmail1">First Name</label>
               		<input 
               		type="input"  
               		class="form-control " 
               		id="txt_firstname" 
               		name="txt_firstname" 
               		value="{!! old('txt_firstname') !!}" >
               	  </label>
               	  <label for="exampleInputEmail1">Last Name</label>
               		<input 
               		type="input"  
               		class="form-control " 
               		id="txt_lastname" 
               		name="txt_lastname" 
               		value="{!! old('txt_lastname') !!}" >
               	  </label>
              	</div>	
             	<div class="form-group">
               	  <label for="exampleInputPassword1">Parent Name</label>
                	<input 
                	type="input"  
               		class="form-control " 
               		id="txt_parent" 
               		name="txt_parent" 
               		value="{!! old('txt_parent') !!}" >
               	  </label>
              	</div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Phone number</label>
	                      <input 
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
	                      <input 
	                      type="input" 
	                      class="form-control" 
	                      <label 
	                      type="text" 
	                      id="txt_email" 
	                      class="form-control" 
	                      value="{!! old('txt_email') !!}" 
	                      name="txt_email">
	                  </label>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Birth Day</label>
	                      <input 
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
	                      <input 
	                      id="txt_score" 
	                      class="form-control" 
	                      type="text" 
	                      value="{!! old('txt_score') !!}" 
	                      name="txt_score"></label>
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
     <script type="text/javascript">
       $('#score').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id')
        var date = button.data('date') 
        var phone = button.data('phone') 
        var firstname = button.data('firstname')
        var lastname = button.data('lastname')
        var score = button.data('score')
        var email = button.data('email')
        var parent = button.data('parent')
        var modal = $(this)
        modal.find('.modal-body #txt_testId').val(id);
        modal.find('.modal-body #txt_firstname').val(firstname);
        modal.find('.modal-body #txt_lastname').val(lastname);
        modal.find('.modal-body #txt_birthday').val(date);
        modal.find('.modal-body #txt_phone').val(phone);
        modal.find('.modal-body #txt_score').val(score);
        modal.find('.modal-body #txt_email').val(email);
        modal.find('.modal-body #txt_parent').val(parent);

      }) 
    </script>
    {{-- END MODAL SCORE --}}

    {{-- START MODAL SCHEDULE --}}

	    <div class="modal fade" id="test" role="dialog">
     	<div class="modal-dialog" role="document">
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
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
     <script type="text/javascript">
       $('#score').on('show.bs.modal', function (event) {
      }) 
    </script>
{{-- END MODAL SCHEDULE --}}
 -->
{{-- START MODAL --}}

<div class="main-content">
  	<div class="container-modal">
	{{-- START MODAL SCHEDULE --}}
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
					                      <label 
					                      type="text" 
					                      id="txt_phone" 
					                      class="form-control" 
					                      value="{!! old('txt_phone') !!}" 
					                      name="txt_phone"></label>
					                      </fieldset>
					                    </div>
					                  </div>
					                  <div class="col-lg-6">
					                    <div class="form-group">
					                      <label>Test schedule</label>
						                      <input 
						                      id="txt_testSchedule" 
						                      class="form-control" 
						                      type="datetime-local" 
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
	        var date = button.data('date') 
	        var phone = button.data('phone') 
	        var name = button.data('name')
	        var schedule = button.data('schedule')
	        var modal = $(this)
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
	          	<h4 class="modal-title">ENTER SCORE</h4>
	        </div>
	        <form method="POST" action="{{ route('postUpdateRegister') }}">
	          {{csrf_field()}}
	          <div class="modal-body">
	            <div class="box-body">
	              <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value="">
	             	<div class="form-group">
	               	  <label for="exampleInputEmail1">First Name</label>
	               		<input 
	               		type="input"  
	               		class="form-control " 
	               		id="txt_firstname" 
	               		name="txt_firstname" 
	               		value="{!! old('txt_firstname') !!}" >
	               	  </label>
	               	  <label for="exampleInputEmail1">Last Name</label>
	               		<input 
	               		type="input"  
	               		class="form-control " 
	               		id="txt_lastname" 
	               		name="txt_lastname" 
	               		value="{!! old('txt_lastname') !!}" >
	               	  </label>
	              	</div>	
	             	<div class="form-group">
	               	  <label for="exampleInputPassword1">Parent Name</label>
	                	<input 
	                	type="input"  
	               		class="form-control " 
	               		id="txt_parent" 
	               		name="txt_parent" 
	               		value="{!! old('txt_parent') !!}" >
	               	  </label>
	              	</div>
	              <div class="form-group">
	                <div class="row">
	                  <div class="col-lg-6">
	                    <div class="form-group">
	                      <label>Phone number</label>
		                      <input 
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
		                      <input 
		                      type="input" 
		                      class="form-control" 
		                      <label 
		                      type="text" 
		                      id="txt_email" 
		                      class="form-control" 
		                      value="{!! old('txt_email') !!}" 
		                      name="txt_email">
		                  </label>
	                      </fieldset>
	                    </div>
	                  </div>
	                  <div class="col-lg-6">
	                    <div class="form-group">
	                      <label>Birth Day</label>
		                      <input 
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
		                      <input 
		                      id="txt_score" 
		                      class="form-control" 
		                      type="text" 
		                      value="{!! old('txt_score') !!}" 
		                      name="txt_score"></label>
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
	     <script type="text/javascript">
	       $('#score').on('show.bs.modal', function (event) {
	        var button = $(event.relatedTarget) 
	        var id = button.data('id')
	        var date = button.data('date') 
	        var phone = button.data('phone') 
	        var firstname = button.data('firstname')
	        var lastname = button.data('lastname')
	        var score = button.data('score')
	        var email = button.data('email')
	        var parent = button.data('parent')
	        var modal = $(this)
	        modal.find('.modal-body #txt_testId').val(id);
	        modal.find('.modal-body #txt_firstname').val(firstname);
	        modal.find('.modal-body #txt_lastname').val(lastname);
	        modal.find('.modal-body #txt_birthday').val(date);
	        modal.find('.modal-body #txt_phone').val(phone);
	        modal.find('.modal-body #txt_score').val(score);
	        modal.find('.modal-body #txt_email').val(email);
	        modal.find('.modal-body #txt_parent').val(parent);

	      }) 
	    </script>
	    {{-- END MODAL SCORE --}}
	 	</div>
</div>
{{-- END MODAL--}}

</section>



@endsection