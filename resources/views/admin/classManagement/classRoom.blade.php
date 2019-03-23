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
              <li class="active"><a href="#activity" data-toggle="tab">Course 01</a></li>
              <li><a href="#timeline" data-toggle="tab">Course 02</a></li>
              <li><a href="#settings" data-toggle="tab">Course 03</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="row">
                  <div class="col-sm-3">
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                        <li class="edit-item">
                          <div class="edit-product-info">
                            <h4 class="edit-p">Class 01</h4>
                            <img src="{{ asset('image/avatar').'/logo.png' }}" class="img-circle edit-image"  alt="Avatar">
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <div class="row">
                              <label class="control-label edit-row">Course</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Start day</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">End date</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Qty Students</label>
                              <div class="pull-right">
                                <label class="label label-danger edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Remain classes</label>
                              <div class="pull-right">
                                <label class="label label-success edit-pull-right"> Test</label>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <button type="submit" class="btn edit-button">List</button>
                            <button type="submit" class="btn pull-right edit-button">Absence</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <div class="col-sm-3">
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                        <li class="edit-item">
                          <div class="edit-product-info">
                            <h4 class="edit-p">Class 02</h4>
                            <img src="{{ asset('image/avatar').'/logo.png' }}" class="img-circle edit-image"  alt="Avatar">
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <div class="row">
                              <label class="control-label edit-row">Course</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Start day</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">End date</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Qty Students</label>
                              <div class="pull-right">
                                <label class="label label-danger edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Remain classes</label>
                              <div class="pull-right">
                                <label class="label label-success edit-pull-right"> Test</label>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <button type="submit" class="btn edit-button">List</button>
                            <button type="submit" class="btn pull-right edit-button">Absence</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>


                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                                <div class="row">
                  <div class="col-sm-3">
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                        <li class="edit-item">
                          <div class="edit-product-info">
                            <h4 class="edit-p">Class 01</h4>
                            <img src="{{ asset('image/avatar').'/logo.png' }}" class="img-circle edit-image"  alt="Avatar">
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <div class="row">
                              <label class="control-label edit-row">Course</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Start day</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">End date</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Qty Students</label>
                              <div class="pull-right">
                                <label class="label label-danger edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Remain classes</label>
                              <div class="pull-right">
                                <label class="label label-success edit-pull-right"> Test</label>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <button type="submit" class="btn edit-button">List</button>
                            <button type="submit" class="btn pull-right edit-button">Absence</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                  </div>

                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                                <div class="row">
                  <div class="col-sm-3">
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                        <li class="edit-item">
                          <div class="edit-product-info">
                            <h4 class="edit-p">Class 01</h4>
                            <img src="{{ asset('image/avatar').'/logo.png' }}" class="img-circle edit-image"  alt="Avatar">
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <div class="row">
                              <label class="control-label edit-row">Course</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Start day</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">End date</label>
                              <div class="pull-right">
                                <label class="label edit-lable edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Qty Students</label>
                              <div class="pull-right">
                                <label class="label label-danger edit-pull-right"> Test</label>
                              </div>
                            </div>
                            <div class="row">
                              <label class="control-label edit-row">Remain classes</label>
                              <div class="pull-right">
                                <label class="label label-success edit-pull-right"> Test</label>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <button type="submit" class="btn edit-button">List</button>
                            <button type="submit" class="btn pull-right edit-button">Absence</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                  </div>

                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection