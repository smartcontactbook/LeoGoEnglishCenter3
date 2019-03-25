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
						<button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button>
						<a href="{{ route('register.create') }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Add</button></a>
					</p>
				</div>

				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Parent Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th>Appointment</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Win 95+</td>
								<td>Trident</td>
								<td>Internet</td>
								<td> 4</td>
								<td>Trident</td>
								<td>Internetr 4.0</td>
								<td>Win 95+</td>
								<td><button type="button" class=" btn btn-success"><i class="fa fa-check"></i></button></td>
								<th>
									<button type="button" class=" btn btn-info" data-toggle="modal" data-target="#setschedule" data-id="" data-name="" data-phone="" data-date=""><i class="fa fa-calendar-o"></i></button></td>
									<button type="button" class="btn btn-warning editLeftRight"><i class="	fa fa-caret-square-o-right"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
							<tr>
								<td>2</td>
								<td>Win 95+</td>
								<td>Trident</td>
								<td>Internet</td>
								<td> 4</td>
								<td>Trident</td>
								<td>Internetr 4.0</td>
								<td>Win 95+</td>
								<td><button type="button" class=" btn btn-success"><i class="fa fa-check"></i></button></td>
								<th>
									<button type="button" class=" btn btn-info" ><i class="fa fa-calendar-o"></i></button></td>
									<button type="button" class="btn btn-warning editLeftRight"><i class="fa fa-caret-square-o-right"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
														<tr>
								<td>3</td>
								<td>Win 95+</td>
								<td>Trident</td>
								<td>Internet</td>
								<td> 4</td>
								<td>Trident</td>
								<td>Internetr 4.0</td>
								<td>Win 95+</td>
								<td><button type="button" class=" btn btn-success"><i class="fa fa-check"></i></button></td>
								<th>
									<button type="button" class=" btn btn-info" ><i class="fa fa-calendar-o"></i></button></td>
									<button type="button" class="btn btn-warning editLeftRight"><i class="	fa fa-caret-square-o-right"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</th>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Parent Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th>Appointment</th>
								<th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
{{-- START MODAL --}}
	    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
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
          <h4 class="modal-title">TEST SCHEDULE</h4>
        </div>
        <form method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
          <div class="modal-body">
            <div class="box-body">
              <input class="form-control" type="hidden" name="txt_testId" id="txt_testId" value="">
              <div class="form-group">
                <label for="exampleInputEmail1">Full name</label>
                <label type="input" class="form-control" id="txt_name" name="txt_name"value="" ></label>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Date</label>
                <label class="form-control" id="txt_date" name="txt_date" value=""></label>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Phone number</label>
                      <fieldset class="form-group"><label type="text" id="txt_phone" class="form-control" name="txt_phone"></label>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Test schedule</label>
                      <input id="txt_testSchedule" class="form-control" type="datetime-local" name="txt_testSchedule">
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
       $('#setschedule').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id')
        var date = button.data('date') 
        var phone = button.data('phone') 
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #txt_testId').val(id);
        modal.find('.modal-body #txt_name').val(name);
        modal.find('.modal-body #txt_date').val(date);
        modal.find('.modal-body #txt_phone').val(phone);
      }) 
    </script>
    {{-- END MODAL --}}
</section>
@endsection