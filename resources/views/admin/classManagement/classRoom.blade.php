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
                                  <button type="button" class="btn edit-button" data-toggle="modal" data-target="#listChildren" data-id="{{ $value->id}}" >List</button>
                                  <button type="button" class="btn pull-right edit-button">Absence</button>
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

  <div class="modal fade" id="listChildren"  role="dialog">
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
          <h4 class="modal-title">List Children Of Class</h4>
        </div>
          <div class="modal-body">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birth day</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>

                    <th>Score</th>
                    <th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt=0 ?>
                  @foreach($getCourses as $getCourse)
                  <?php $stt=$stt+1 ?>
                  <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $getCourse->Course_Name }}</td>
                    <td>{{ $getCourse->Description }}</td>
                    <td>{{ $getCourse->Term }}</td>
                    <td>{{ $getCourse->Level_Name }}</td>
                    <th>
                      <button type="button" class="btn btn-warning editLeftRight" data-toggle="modal" data-target="#edit" data-courseid="{{ $getCourse->id_course }}" data-name="{{ $getCourse->Course_Name }}" data-description="{{ $getCourse->Description }}" data-term="{{ $getCourse->Term }}" data-level="{{ $getCourse->Level_Name }}"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </th>
                  </tr>
                  @endforeach
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
<script type="text/javascript">
       $('#listChildren').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #txt_id').val(id);
      }) 
    </script>
</section>
@endsection