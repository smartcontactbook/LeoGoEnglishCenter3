@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>CHILDRENS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Children management</li>
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
						<a href=""><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add</button></a>
					</p>
				</div>

				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped"  style="font-size: 12px; text-align: center;">
						<thead>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled" style="width: 90px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $stt=0 ?>
							@foreach($getChildrens as $value)
							<?php $stt=$stt+1 ?>
								<tr>
									<td>{!! $stt !!}</td>
									 <td class="text-center"><img src="{{asset('image/')}}/avatar/{{ $value->avatar }}" style='max-width:50px;max-height:50px' class='img img-thumbnail' /></td>
									<td>{{$value->Full_Name}}</td>
									<td>{{$value->Parent_Name}}</td>
									<td>{{$value->email}}</td>
									<td>{{$value->Birth_Day}}</td>
									<td>{{$value->Phone_Number}}</td>
									<td>
										@if($value->Gender == 1)
											<span>Female</span>
										@else
											<span>Male</span>
										@endif
									</td>
									<td>{{$value->Address}}</td>
									<th>
										{{-- <a href="{{ route('children.edit', $value->id) }}"><button type="button" class="btn btn-info btn-sm editLeftRight" data-toggle="modal" data-target="#modal-default" data-avatar="{{ $value->avatar}}" data-full_name = "{{ $value->Full_Name }}" data-email = "{{ $value->email}}" data-start_date = "{{ $value->Start_Date }}" data-end_date = "{{ $value->End_Date }}" data-score = "{{ $value->Score }}" data-description = "{{ $value->Description}}" data-parent_name = "{{ $value->Parent_Name }}" data-phone_number = "{{ $value->Phone_Number }}" data-gender = "{{ $value->Gender }}" data-address = "{{ $value->Address}}" data-class_name = "{{ $value->Class_Name}}"><i class="far fa-eye"></i></button></a> --}}

										<a href="{{ route('children.show', $value->id) }}"><button type="button" class="btn btn-info btn-sm editLeftRight"><i class="far fa-eye"></i> </button></a>
										<a href="{{ route('children.edit', $value->id) }}"><button type="button" class="btn btn-warning btn-sm editLeftRight"><i class="	fa fa-edit"></i></button></a>
										<button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
									</th>

									
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>

							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <div class="modal fade bd-example-modal-lg" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
    <!-- <div class="modal fade" id="modal-default"  role="dialog">
      <div class="modal-dialog">
      	<div class="modal-content"> -->
      		<div class="modal-header Editheader">
      			<button
      			type="button"
      			class="close"
      			data-dismiss="modal"
      			aria-label="Close"
      			>
      			<span aria-hidden="true">×</span>
	      		</button>
	      		<h4 class="modal-title">SHOW DETAIL</h4>
      		</div>
	      	<form role="form" method="POST" action="" enctype="multipart/form-data">
	      		{!! csrf_field() !!}
	      		<div class="modal-body">
	      			<div class="box-body">
	      				<section class="content">

	      					<div class="row">
	      						<div class="col-md-3">
	      							<div class="box box-primary">
	      								<div class="box-body box-profile">
	      									<img class="profile-user-img img-responsive img-circle"  src="{{ asset('image/avatar').'/'.->avatar }}" alt="User profile picture">

	      									<h3 class="profile-username text-center"></h3>

	      									<p class="text-muted text-center">
	      										@if(Auth::guard('staff')->user()->Role_ID == 1)
	      										Admin
	      										@else
	      										Staff
	      										@endif
	      									</p>

	      									<ul class="list-group list-group-unbordered">
	      										<li class="list-group-item">
	      											<b>Email</b> <a  class="pull-right">{{Auth::guard('staff')->user()->email }}></a>
	      										</li>
	      										<li class="list-group-item">
	      											<b>Birth Day</b> <a class="pull-right">{{Auth::guard('staff')->user()->Birth_Day }}</a>
	      										</li>
	      										<li class="list-group-item">
	      											<b>Phone Number</b> <a class="pull-right">{{Auth::guard('staff')->user()->Phone_Number }}</a>
	      										</li>
	      										<li class="list-group-item">
	      											<b>Gender</b> <a class="pull-right">
	      												@if(Auth::guard('staff')->user()->Gender == 1)
	      												Male
	      												@else
	      												Female
	      												@endif
	      											</a>
	      										</li>
	      										<li class="list-group-item">
	      											<b>Address</b> <a class="pull-right">{{Auth::guard('staff')->user()->Address }}</a>
	      										</li>
	      									</ul>
	      								</div>
	      								<!-- /.box-body -->
	      							</div>
	      							<!-- /.box -->
<script type="text/javascript">
	$(document).ready(function(){

		$('#modal-default').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var full_name = button.data('full_name')
			var email = button.data('email') 
			var start_date = button.data('start_date') 
			var end_date = button.data('end_date') 
			var score = button.data('score')
			var description = button.data('description') 
			var parent_name = button.data('parent_name') 
			var phone_number = button.data('phone_number')  
			var gender = button.data('gender')
			var address = button.data('address') 
			var class_name = button.data('class_name')
			var avatar = button.data('avatar')
			var modal = $(this)
			modal.find('.modal-body #txt_courseid').val(courseid);
			modal.find('.modal-body #txt_name').val(name);
			modal.find('.modal-body #txt_description').val(description);
			modal.find('.modal-body #cmb_term').val(term);
		}) 
	</script>
	      							<!-- About Me Box -->
	      							<div class="box box-primary">
	      								<div class="box-header with-border">
	      									<h3 class="box-title">About Me</h3>
	      								</div>
	      								<!-- /.box-header -->
	      								<div class="box-body">
	      									<strong><i class="fa fa-book margin-r-5"></i> Description</strong>

	      									<p class="text-muted">
	      										{{Auth::guard('staff')->user()->Description }}
	      									</p>
	      									<hr>
	      								</div>
	      								<!-- /.box-body -->
	      							</div>
	      							<!-- /.box -->

	      						</div>
	      						<!-- /.col -->
	      						<div class="col-md-9">
	      							<div class="nav-tabs-custom">

	      								<div class="tab-content">
	      									<div class="tab-pane" id="timeline">
	      										<!-- The timeline -->
	      										<ul class="timeline timeline-inverse">
	      											<!-- timeline time label -->
	      											<li class="time-label">
	      												<span class="bg-red">
	      													10 Feb. 2014
	      												</span>
	      											</li>
	      											<!-- /.timeline-label -->
	      											<!-- timeline item -->
	      											<li>
	      												<i class="fa fa-envelope bg-blue"></i>

	      												<div class="timeline-item">
	      													<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

	      													<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

	      													<div class="timeline-body">
	      														Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
	      														weebly ning heekya handango imeem plugg dopplr jibjab, movity
	      														jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
	      														quora plaxo ideeli hulu weebly balihoo...
	      													</div>
	      													<div class="timeline-footer">
	      														<a class="btn btn-primary btn-xs">Read more</a>
	      														<a class="btn btn-danger btn-xs">Delete</a>
	      													</div>
	      												</div>
	      											</li>
	      											<!-- END timeline item -->
	      											<!-- timeline item -->
	      											<li>
	      												<i class="fa fa-user bg-aqua"></i>

	      												<div class="timeline-item">
	      													<span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

	      													<h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
	      													</h3>
	      												</div>
	      											</li>
	      											<!-- END timeline item -->
	      											<!-- timeline item -->
	      											<li>
	      												<i class="fa fa-comments bg-yellow"></i>

	      												<div class="timeline-item">
	      													<span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

	      													<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

	      													<div class="timeline-body">
	      														Take me to your leader!
	      														Switzerland is small and neutral!
	      														We are more like Germany, ambitious and misunderstood!
	      													</div>
	      													<div class="timeline-footer">
	      														<a class="btn btn-warning btn-flat btn-xs">View comment</a>
	      													</div>
	      												</div>
	      											</li>
	      											<!-- END timeline item -->
	      											<!-- timeline time label -->
	      											<li class="time-label">
	      												<span class="bg-green">
	      													3 Jan. 2014
	      												</span>
	      											</li>
	      											<!-- /.timeline-label -->
	      											<!-- timeline item -->
	      											<li>
	      												<i class="fa fa-camera bg-purple"></i>

	      												<div class="timeline-item">
	      													<span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

	      													<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

	      													<div class="timeline-body">
	      														<img src="http://placehold.it/150x100" alt="..." class="margin">
	      														<img src="http://placehold.it/150x100" alt="..." class="margin">
	      														<img src="http://placehold.it/150x100" alt="..." class="margin">
	      														<img src="http://placehold.it/150x100" alt="..." class="margin">
	      													</div>
	      												</div>
	      											</li>
	      											<!-- END timeline item -->
	      											<li>
	      												<i class="fa fa-clock-o bg-gray"></i>
	      											</li>
	      										</ul>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      					</div>
	      				</section>
	      			</div>
	      		</div>
	      		<div class="modal-footer">
	      			<button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close</button>
	      			<button type="submit" class="btn btn-primary">Save</button>
	      		</div>
	      	</form>
      </div>
  </div>
</div> --}}


@endsection