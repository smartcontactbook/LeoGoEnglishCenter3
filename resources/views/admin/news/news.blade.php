@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>NEWS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">NEWS management</li>
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
						<a href="{{ route('news.create') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus">Add</i></button></a>
					</p>
				</div>

				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Image</th>
								<th>Description</th>
								<th>Create at</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled" style="width: 50px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $stt=0 ?>
							@foreach($news as $value)
							<?php $stt=$stt+1 ?>
								<tr id="{{$value->id}}">
									<td>{!! $stt !!}</td>
									<td>{{$value->title}}</td>
									<td class="text-center"><img src="{{asset('image/')}}/news/{{ $value->image }}" style='max-width:80px;max-height:80px' class='img img-thumbnail' /></td>
									<td>{{$value->description}}</td>
									<td>{{$value->create_at}}</td>
									<th>
										<a href="{{ route('news.edit', $value['id']) }}"><button type="button" class="btn btn-warning btn-sm editLeftRight"><i class="	fa fa-edit"></i></button></a>
										<button type="button" class="btn btn-danger btn-sm remove"><i class="fa fa-trash-o"></i></button>
									</th>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Image</th>
								<th>Description</th>
								<th>Create at</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
			$(".remove").click(function(){
				var id = $(this).parents("tr").attr("id");
				$.ajaxSetup({
				headers: {
					'csrftoken' : '{{ csrf_token() }}' }
				});

				if(confirm('Are you sure to remove this record ?'))
				{
				$.ajax({
					url: 'http://127.0.0.1:8000/news/'+id,
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
</section>
@endsection