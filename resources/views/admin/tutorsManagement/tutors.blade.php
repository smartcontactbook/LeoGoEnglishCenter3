@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>TUTOR MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Tutor management</li>
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
						<a href="{{ route('tutor.create') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add</button></a>
					</p>
				</div>

				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $stt=0 ?>
							@foreach($getTutor as $value)
							<?php $stt=$stt+1 ?>
								<tr>
									<td>{!! $stt !!}</td>
									<td>{{$value->Full_Name}}</td>
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
										<a href="{{ route('tutor.edit', $value->id) }}"><button type="button" class="btn btn-warning btn-sm editLeftRight"><i class="	fa fa-edit"></i></button></a>
										<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
									</th>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
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
@endsection