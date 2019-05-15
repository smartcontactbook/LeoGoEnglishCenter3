@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>BRANDS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Brands management</li>
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
								<th>Active</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled" style="width: 50px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $stt=0 ?>
							@foreach($getBrands as $value)
							<?php $stt=$stt+1 ?>
							<?php  
								$status = $value->status;
							?>
								<tr id="{{ $value->id }}">
									<td>{!! $stt !!}</td>
									<td>{{$value->title}}</td>
									<td class="text-center"><img src="{{asset('image/')}}/news/{{ $value->image }}" style='max-width:80px;max-height:80px' class='img img-thumbnail' /></td>
									<td>{{$value->description}}</td>
									<td>{{$value->create_at}}</td>
									<td style="text-align: center; width: 20px">
										<a id="containnerTest">
											<div class="active{{$value->id}}">
												@if($status == 0)
												<img src="{{asset('image/')}}/leogo/cancel.png" onclick="ajaxToggoActiveStatusAdmin({{$value->id}}, 0)">
												@else
												<img src="{{asset('image/')}}/leogo/checked.png" onclick="ajaxToggoActiveStatusAdmin({{$value->id}}, 1)">
												@endif
											</div>
										</a>
									</td>
									<th>
										<a href=""><button type="button" class="btn btn-warning btn-sm editLeftRight"><i class="	fa fa-edit"></i></button></a>
										<button type="button" class="btn btn-danger btn-sm remove"><i class="far fa-trash-alt"></i></button>
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
			function ajaxToggoActiveStatusAdmin(id_user, presentStatus){
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "{{ route('postCheckOrder') }}",
					type: 'POST',
					cache: false,
					data: {
						id:id_user, status:presentStatus}
					,
					success: function(data){
						$('.active'+id_user).html(data);
					}
					,
					error: function (){
						alert('Lỗi đã xảy ra');
					}
				});
				return false;
			}

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