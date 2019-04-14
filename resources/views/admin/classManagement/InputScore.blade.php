@extends('admin.layout.master.master')
@section('main-content')
  <section class="content-header">
    <h1><b>SCORE MANAGEMENT</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Score management</li>
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
            </p>
          </div>

          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Score Midtem</th>
                  <th>Score Final</th>
                  <th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Course Name</th>
                  <th>Description</th>
                  <th>Term</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>