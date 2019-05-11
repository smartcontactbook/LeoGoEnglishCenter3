
<div id="div1">
  @extends('admin.layout.master.master')
  @section('main-content')
  <style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    #customers td, #customers th {
      /*border: 1px solid #ddd;*/
      padding: 8px;
    }
    #customers td input {
      border: none;
      background-color: #F3F781;
      text-align: center;
      border-radius: 6px;
      /*padding: 8px;*/
    }
    #customers tr:nth-child(even){
      background-color: #f2f2f2;
    }
    #customers tr:hover {
      background-color: #ddd;
    }
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #4CAF50;
      color: white;
    }
  </style>
  <section class="content-header">
    <h1>
      <b>CLASS MANAGEMENT
      </b>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">Home
        </a>
      </li>
      <li class="active">Class management
      </li>
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

{{--
            @endif
          </div>
          <div class="box-header">
            <p class="pull-right box-title">
              <button type="button" class="btn btn-primary editLeftRight">
                <i class="fa fa-reply-all">Back
                </i>
              </button>
              <a href="{{ route('classRoom.create') }}">
                <button type="button" class="btn btn-success">
                  <i class="fa fa-plus">
                  </i>Add
                </button>
              </a>
            </p>
          </div>
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                @foreach($getCourses as $count=>$getCourse) 
      --}}
                <li role="presentation" @if($count == 0) class="active" @endif>
                  <a href="#tab-{{ $getCourse->id }}" aria-controls="#tab-{{ $getCourse->id }}" role="tab" data-toggle="tab">{{ $getCourse->Course_Name }}
                  </a>
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
                                  <button type="button" 
                                          class="btn edit-button edit-icon pull-right"
                                          data-toggle="modal" 
                                          data-idleogoclass="{{$value->id_leogo}}" 
                                          data-target="#editClass"
                                          > 
                                    <i class="fa fa-eyedropper" aria-hidden="true">
                                    </i>
                                  </button>
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
                                  <label class="control-label edit-row">Course
                                  </label>
                                  <div class="pull-right">
                                    <label class="label edit-lable edit-pull-right">{{ $value->Course_Name }}
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="control-label edit-row">Start day
                                  </label>
                                  <div class="pull-right">
                                    <label class="label edit-lable edit-pull-right">{{ $value->Start_Date }}
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="control-label edit-row">End date
                                  </label>
                                  <div class="pull-right">
                                    <label class="label edit-lable edit-pull-right">{{ $value->End_Date}}
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="control-label edit-row">Qty Students
                                  </label>
                                  <div class="pull-right">
                                    <label class="label label-danger edit-pull-right">{{ $value->QuantityStudent }}
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="control-label edit-row">Remain classes
                                  </label>
                                  <div class="pull-right">
                                    <label class="label label-success edit-pull-right">{{ $value->QuantitySession }}
                                    </label>
                                  </div>
                                  <div class="row">
                                    <label class="control-label edit-row">Status</label>
                                    <div class="pull-right">
                                        @if($value->Status == 1)
                                          <a href="{{ route('changeStatus', $value->id_class) }}">
                                            <button type="button" class="label label-success edit-pull-right">
                                            <i class="fa fa-check"></i></button>
                                          </a>
                                        @else
                                          <a href="{{ route('changeStatus', $value->id_class) }}">
                                            <button type="button" class="label label-danger edit-pull-right">
                                            <i class="fa fa-close"></i></button>
                                          </a>

                                        @endif
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                              <div class="box-body">
                                <input type="hidden" name="txt_idClass" value="{{ $value->id_leogo }}"> 
                                <button 
                                        type="button" 
                                        class="btn edit-button edit-itemJs" 
                                        data-toggle="modal" 
                                        data-id="{{$value->id_leogo}}" 
                                        data-target="#listChildren">
                                  List
                                </button>
                                <a href="{{ route('register.create') }}">
                                  <button 

                                      type="button" 
                                      class="btn edit-button edit-itemJs" 
                                      data-toggle="modal" 
                                      data-id="{{$value->id_leogo}}" 
                                      data-target="#listChildren">
                                      List
                                  </button>
                                  <a href="{{ route('register.create') }}">
                                  <button 
                                    type="button" 
                                    class="btn pull-right edit-button edit-itemJs" 
                                    data-toggle="modal" 
                                    data-id="{{$value->id_leogo}}" 
                                    data-target="#inputscore">
                                      Score
                                  </button>
                                  </a>
                                </div>
                              </li>
                            </ul>
                          </div>
{{--                           <!-- /.box-body -->
=======
                                          type="button" 
                                          class="btn pull-right edit-button edit-itemJs" 
                                          data-toggle="modal" 
                                          data-id="{{$value->id_leogo}}" 
                                          data-target="#inputscore">
                                    Score
                                  </button>
                                </a>
                              </div>
                            </li>
                          </ul>

                        </div> 
                        --}}
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
    {{-- START MODAL SCHEDULE --}}
    <div class="main-content">
      <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editClass">
        <div class="container bg-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 style="text-align: center;">
                  <span class="label label-warning" id="qid">2
                  </span>     Choose option
                </h3>
              </div>
              <div class="modal-body">
                <div class="quiz" id="quiz" data-toggle="buttons">
                  <a href="">
                    <label class="element-animation1 btn btn-lg btn-primary btn-block">
                      <span class="btn-label">
                        <i class="glyphicon glyphicon-chevron-right">
                        </i>
                      </span> 
                      <input type="radio" name="q_answer" value="1">Change information
                    </label>
                  </a>

                  <a href="">
                    <label class="element-animation2 btn btn-lg btn-primary btn-block">
                      <span class="btn-label">
                        <i class="glyphicon glyphicon-chevron-right">
                        </i>
                      </span> 
                      <input type="radio" name="q_answer" value="2">Change schedule
                    </label>
                  </a>
                </div>
              </div>
              <div class="modal-footer text-muted">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="main-content">
      <div class="container-modal">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="listChildren">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header Editheader">
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        >
                  <span aria-hidden="true">×
                  </span>
                </button>
                <h4 class="modal-title">List Children Of Class
                </h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
                  <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID
                        </th>
                        <th>Name
                        </th>
                        <th>Birth day
                        </th>
                        <th>Gender
                        </th>
                        <th>Email
                        </th>
                        <th>Phone
                        </th>
                        <th>Score
                        </th>
                        <th>Address
                        </th>
                        <th>Move
                        </th>
                      </tr>
                    </thead>
                    <tbody class="list-student">
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close
                </button>
                <button type="submit" class="btn btn-primary">Save
                </button>
              </div>
            </div>
          </div>
{{-- <<<<<<< Level_migration
          <div class="modal-footer">
            <button
            type="button"
            class="btn btn-success btn-xs"
            data-dismiss="modal"
            aria-label="Close"
            > Save
            </button>
=======
        </div> --}}
        {{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="inputscore">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header Editheader">
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        >
                  <span aria-hidden="true">×
                  </span>
                </button>
                <h4 class="modal-title">List Children Of Class
                </h4>
              </div>
              <div class="panel-heading">Sample Data
              </div>
              <div class="modal-body">
                <div id="message">
                </div>
                <div class="box-body">
                  <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name
                        </th>
                        <th>Class Name
                        </th>
                        <th>Score Midtem
                        </th>
                        <th>Score Final
                        </th>
                      </tr>
                    </thead>
                    <tbody class="input-score">
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close
                </button>
                <button type="submit" id="save" class="saveScore" >Save
                </button>
                <!-- 
<button type="submit" class="btn btn-primary">Save</button> -->
              </div>
            </div>
{{-- >>>>>>> master --}}
          {{-- </div>
        </div> --}} 
      </div>
    </div>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="inputscore">
      <div class="modal-dialog modal-lg">
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
          <div id="message"></div>
          <div class="box-body">
            <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Class Name</th>
                  <th>Score Midtem</th>
                  <th>Score Final</th>
                </tr>
              </thead>
              <tbody class="input-score">

              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button
          type="button"
          class="btn btn-success btn-xs"
          data-dismiss="modal"
          aria-label="Close"
          > Save
        </button>
      </div>
    </div>
  </div>
</div>
          <!-- 
            <button type="submit" class="btn btn-primary">Save</button> -->

    <div class="main-content">
      <div class="container-modal">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="listTest">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header Editheader">
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        >
                  <span aria-hidden="true">×
                  </span>
                </button>
                <h4 class="modal-title">Move Class
                </h4>
              </div>
              <form id="move-class">
                <div class="modal-body">
                  <div class="box-body">
                    <div class="row">
                      <div class="col-sm-4 col-xs-6">
                        <input type="lable" hidden name="txt_id_new" id="txt_id_new" value="txt_id_new" disabled >
                        <input type="text" hidden name="txt_qtystu" id="txt_qtystu" value="txt_qtystu">
                        {{-- 
                        <input type="lable" hidden name="txt_id_new2" id="txt_id_new" value="txt_id_new" disabled > --}}
                        <table id="customers">
                          <tr>
                            <th colspan="2">Information old class
                            </th>
                          </tr>
                          <tr>
                            <td>Full Name
                            </td>
                            <td>
                              <input type="lable" name="txt_name" id="txt_name" value="txt_name" disabled >
                            </td>
                          </tr>
                          <tr>
                            <td>Class Name
                            </td>
                            <td>
                              <input type="lable" name="txt_classname" id="txt_classname" value="txt_classname" disabled >
                            </td>
                          </tr>
                          <tr>
                            <td>Level
                            </td>
                            <td>
                              <input type="lable" name="txt_levelname" id="txt_levelname" value="txt_levelname" disabled >
                            </td>
                          </tr>
                          <tr>
                            <td>Course
                            </td>
                            <td>
                              <input type="lable" name="txt_coursename" id="txt_coursename" value="txt_coursename" disabled >
                            </td>
                          </tr>
                          <tr>
                            <td>Learned
                            </td>
                            <td>
                              <input type="lable" name="txt_qtysession" id="txt_qtysession" value="txt_qtysession" disabled >
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect2">Chosse New Class
                          </label>
                          {{-- 
                          <input type="text" hidden name="" id="txt_id_level" value="{!! old('txt_id_level') !!}"> --}}
                          <select class="form-control dynamic" name="txt_id_class"  id="txt_id_class" data-dependent="state" value="{!! old('cmb_newClass') !!}">
                            <option value="">---...---
                            </option>
                            @foreach($getNewClass as $value)
                            <option class="dynamic" value="{{ $value->id }}" data-idlevel="{{ $value->id_level}}" data-idclass="{{ $value->id }}" id="txt_id_class" data-qtystudent="{{ $value->QuantityStudent }}">{{ $value->Class_Name }}
                            </option>
                            {{-- 
                            <input type="text" hidden name="txt_id_level" id="txt_id_level" value="{{ $value->id_level}}"> --}}
                            @endforeach
                            <input type="text" class="operations-supplierCapacity" name="txt_id_level" hidden />
                            <input type="text" class="operations-qtystudent" name="txt_qty_student" hidden />
                            <input type="text" name="txt_id_old_class" id="txt_id_old_class" hidden>
                            {{ csrf_field() }}
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <table id="customers">
                          <tr>
                            <th colspan="2">Information new class
                            </th>
                          </tr>
                          <tr>
                            <td>Full Name
                            </td>
                            <td>
                              <input type="lable" name="txt_name" id="txt_name" value="txt_name" disabled >
                            </td>
                          </tr>
                        </table>
                        <div class="show-test" id="customers">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-primary move">Save
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="inputscore">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header Editheader">
                  <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                          >
                    <span aria-hidden="true">×
                    </span>
                  </button>
                  <h4 class="modal-title">List Children Of Class
                  </h4>
                </div>
                <div class="panel-heading">Sample Data
                </div>
                <div class="modal-body">
                  <div id="message">
                  </div>
                  <div class="box-body">
                    <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
                    <table id="example2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Name
                          </th>
                          <th>Class Name
                          </th>
                          <th>Score Midtem
                          </th>
                          <th>Score Final
                          </th>
                        </tr>
                      </thead>
                      <tbody class="input-score">
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left"data-dismiss="modal">Close
                  </button>
                  <button type="submit" id="save" class="saveScore" >Save
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(function(){
        var loading = $('#loadbar').hide();
        $(document)
        .ajaxStart(function () {
          loading.show();
        }).ajaxStop(function () {
          loading.hide();
        });
      });
      function fetchdata(){
        $.ajax({
          type : 'GET',
          url : 'http://127.0.0.1:8000/classRoom',
          success: function(response){
            $data = $(response);
            $('#div1').fadeOut().html($data).fadeIn();  
            // $('#div1').load(response);
          }
        })
      }
      $(document).ready(function(){

          $('#editClass').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id_leogo_class = button.data('idleogoclass')
            console.log(id_leogo_class)
            var modal = $(this)
            modal.find('.modal-body #txt_id_leogo_class').val(id_leogo_class);
            $.ajax({

            })
          })
          // var id_class = 0;
          $('#listTest').on('show.bs.modal', function (event) {
            $('#listChildren').modal('hide');
            var button = $(event.relatedTarget) 
            var idchildrennew = button.data('idnew')
            console.log(idchildrennew)
            var id_old_class = button.data('oldclass')
            var full_name = button.data('fullname')
            var classname = button.data('classname')
            var coursename = button.data('coursename')
            var qtysession = button.data('qtysession')
            var levelname = button.data('levelname')
            var qtystu = button.data('qtystu')
            var modal = $(this)
            modal.find('.modal-body #txt_qtystu').val(qtystu);
            modal.find('.modal-body #txt_id_old_class').val(id_old_class);
            modal.find('.modal-body #txt_id_new').val(idchildrennew);
            modal.find('.modal-body #txt_name').val(full_name);
            modal.find('.modal-body #txt_classname').val(classname);
            modal.find('.modal-body #txt_coursename').val(coursename);
            modal.find('.modal-body #txt_qtysession').val(qtysession);
            modal.find('.modal-body #txt_levelname').val(levelname);
          });
          $('.move').click(function (){
            var data = $('#move-class').serialize();
            // console.log('123');
            var bla = $('#txt_id_new').val();
            //         var level = $(this).find(':selected').data('idlevel');
            console.log(bla);
            $.ajax({
              type : 'POST',
              data : data,
              url : 'http://127.0.0.1:8000/moveClass/'+bla,
              success: function(data){
                $('#listTest').modal('hide');
                // fetchdata();
              }
              ,
            })
          });
          // $( "#code" ).on('show', function(){
          //     // alert("Show!");
          // });
          $( "#listChildren" ).on('shown', function(){
            // alert("Shown!");
          });
          $('.dynamic').change(function(){
            var capacityValue = $('select.dynamic').find(':selected').data('idlevel');
            var qtySudentValue = $('select.dynamic').find(':selected').data('qtystudent');
            $('.operations-supplierCapacity').val(capacityValue);
            $('.operations-qtystudent').val(qtySudentValue);
            console.log(qtySudentValue);
            var select = $(this).children("option:selected").val();
            var value = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              type: 'GET',
              url: 'http://127.0.0.1:8000/fetchNew/'+select,
              success:function(data)
              {
                $('.show-test').html(data);
              }
            })
          });


          $('#listChildren').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id')
            console.log(id);
            var modal = $(this)
            modal.find('.modal-body #txt_id').val(id);
            var code = ''
            $.ajax({
              type : 'GET',
              // data : b,
              url : 'http://127.0.0.1:8000/StudentOfClass/'+id,
              success: function(response){
                console.log(response);
                for(var i = 0; i < response.data.length; i++)
                {
                  var item = response.data[i];
                  code +=`<tr>
                  <td>${i+1}
                  </td>
                  <td>${item.Full_Name}
                  </td>
                  <td>${item.Birth_Day}
                  </td>
                  <td>${item.Gender}
                  </td>
                  <td>${item.email}
                  </td>
                  <td>${item.Phone_Number}
                  </td>
                  <td>${item.Score}
                  </td>
                  <td>${item.Address}
                  </td>
                  <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#listTest" data-idnew="${item.id_children_new}
                  " data-fullname="${item.Full_Name}
                  " data-classname="${item.Class_Name}
                  " data-coursename="${item.Course_Name}
                  " data-levelname="${item.Level_Name}
                  " data-qtysession="${item.QuantitySession}
                  " data-oldclass="${id}
                  " data-qtystu="${item.QuantityStudent}
                  "><i class="fas fa-exchange-alt"></i></button></td>
                  </tr>`;
                }
                $('.list-student').html(code);
              }
            })
          }) 
          $('#inputscore').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #txt_id').val(id);
            var code = ''
            $.ajax({
              type : 'GET',
              // data : b,
              url : 'http://127.0.0.1:8000/ScoreOfStudent/'+id,
              success: function(response){
                //console.log(response);
                for(var i = 0; i < response.data.length; i++)
                {
                  var item = response.data[i];
                  // var gender = '';
                  // if(${item.Gender} == 1)
                  //   gender = Male;
                  // else
                  //   gender = FeMale;
                  code +=`<tr>
                  <td contenteditable class="column_name" data-column_name="First_Name" data-id="${item.id_history_user}
                  ">${item.Full_Name}
                  </td>
                  <td contenteditable class="column_name" data-column_name="Class_Name" data-id="${item.id_history_user}
                  ">${item.Class_Name}
                  </td>
                  <td contenteditable class="column_name" data-column_name="Score_Midtem" data-id="${item.id_history_user}
                  ">${item.Score_Midtem}
                  </td>
                  <td contenteditable class="column_name" data-column_name="Score_Final" data-id="${item.id_history_user}
                  ">${item.Score_Final}
                  </td>
                  </tr>`;
                }
                //console.log(code);
                $('.input-score').html(code);
              }
            })
          }) 
          //<meta name="csrf-token" content="{{ csrf_token() }}">
          //
          var token = $('input[name="_token"]').val();
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $(document).on('blur', '.column_name', function(){
            var coluumn_name = $(this).data("column_name");
            var coluumn_value = $(this).text();
            var idd = $(this).data("id");
            if(coluumn_value != ''  )
            {
              //confirm("Are you sure you want "+coluumn_value)
              $.ajax({
                url:'http://127.0.0.1:8000/StudentOfClass/update_data',
                method:"POST",
                data:{
                  column_name:coluumn_name, 
                  column_value:coluumn_value, 
                  id:idd, 
                  _token:token}
                  ,
                  success:function(data)
                  {
                    console.log(data);
                    $('.message').html(data);
                  }
                })
            }
            else
            {
              $('.message').html("<div class='alert alert-danger'>Enter some value</div>");
            }
          });
        });
    </script>
</section>
@endsection
    
    </div>