@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>TUTORS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Tables</a></li>
		<li class="active">Data tables</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
						<button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button>
						<Link to='/AddLecturer'><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Add</button></Link>
					</p>
				</div>

				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Description</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<th>
									<button type="button" class="btn btn-warning editLeftRight"><i class="	fa fa-edit"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
							<tr>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<th>
									<button type="button" class="btn btn-warning editLeftRight"><i class="	fa fa-edit"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
							<tr>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<th>
									<button type="button" class="btn btn-warning editLeftRight"><i class="	fa fa-edit"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
							<tr>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td>Trident</td>
								<td>InternetExplorer 4.0</td>
								<td>Win 95+</td>
								<td> 4</td>
								<th>
									<button type="button" class="btn btn-warning editLeftRight"><i class="	fa fa-edit"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Description</th>
								<th>First Name</th>
								<th>Last Name</th>
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