@extends('admin.layout.master.master')
@section('main-content')
  <section class="content-header">
    <h1><b>ADD COURSE</b>
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
        	<div class="row">
        		<div class="col-sm-4">
        			<h4>Course name </h4>
        		</div>
        		<div class="col-sm-8">
        			<div class="input-group">
        				<span class="input-group-addon">
        					<i class="fa fa-book" />
        				</span>
        				<input type="email" class="form-control" placeholder="Enter name" />
        			</div>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-4">
        			<h4>Course name </h4>
        		</div>
        		<div class="col-sm-8">
        			<div class="input-group">
        				<span class="input-group-addon">
        					<i class="fa fa-book" />
        				</span>
        				<input type="email" class="form-control" placeholder="Enter name" />
        			</div>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-4">
        			<h4>Course name </h4>
        		</div>
        		<div class="col-sm-8">
        			<div class="input-group">
        				<span class="input-group-addon">
        					<i class="fa fa-book" />
        				</span>
        				<input type="email" class="form-control" placeholder="Enter name" />
        			</div>
        		</div>
        	</div>
            <div class="box-body">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        {!! Form::hidden('old_avatar', $getCourse->avatar) !!}
                        {!! Form::file('new_avatar', ['id' => 'imageUpload', 'accept' => '.png, .jpg, .jpeg']) !!}
                        {!! Form::label('imageUpload', ' ') !!}
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview">
                            <img src="{{ asset('image/avatar').'/'.$getCourse->avatar }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection