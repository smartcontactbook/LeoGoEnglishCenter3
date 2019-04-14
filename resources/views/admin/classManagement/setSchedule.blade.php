@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
  <h1><b>ADD CLASS</b>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Class management</li>
    <li class="active">Add class</li>
  </ol>
</section>
<section class="content">
  @include('errors.errors')
  <div class="row">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <div class="box ">
            
            <!-- /.box-header -->
            <div class="box-body" id="thienTest">
              <div class="row">
                {{-- <p id="msg" class="alert alert-success"></p> --}}
                <div class="col-md-12">
                  <div class="box ">
                    <div class="box-header with-border edit-background">
                      <h4 class="box-title edit-h4">Set schedule
                      </h4>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                          <i class="fa fa-minus">
                          </i>
                        </button>
                      </div>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                      <form  id="addSchedule">
                        {!! csrf_field() !!}
                      @include('errors.errors')                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Classroom</label>
                          <select id="cbm_classRoom"  name="cbm_classRoom" class="form-control select2" value="{!! old('cbm_classRoom') !!}">
                            @foreach($getClassRooms as $item)
                            <option value="{{ $item["id"] }}" id="cbm_classRoom">{{ $item["Classroom_Name"] }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Weekday</label>
                          <select id="cbm_weekday"  name="cbm_weekday" class="form-control select2" value="{!! old('cbm_weekday') !!}">
                            @foreach($getWeekdays as $item)
                            <option value="{{ $item["id"] }}" id="cbm_weekday">{{ $item["Weekday"] }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Time Study</label>
                          <select id="cbm_timeStudy"  name="cbm_timeStudy" class="form-control select2"  value="{!! old('cbm_timeStudy') !!}">
                            @foreach($getTimeStudys as $item)
                            <option value="{{ $item["id"] }}" id="cbm_timeStudy">{{ $item["Time_Start"] }} -- {{ $item["Time_End"] }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label></label>
                          <button type="button" id="add" class="btn btn-primary edit-buttonAdd addTime">Add</button>
                        </div>
                      </div>
                    </form>

                    {{-- @if($CountSetSChedule != 0) --}}
                      <table id="example3 " class="table table-bordered table-striped edit-table">
                        <thead>
                          <tr >
                            <th class="edit-th">ID</th>
                            <th class="edit-th">Weekdays</th>
                            <th class="edit-th">Classroom</th>
                            <th class="edit-th">Time</th>
                            <th class="sorting_desc_disabled sorting_asc_disabled sorting disabled"></th>
                          </tr>
                        </thead>
                        <tbody class="list-schedule">
                          
                        </tbody>
                      </table>
                   {{--  @else
                      <div class="col-md-12">
                      </div>
                    @endif --}}
                  </div>

                  <!-- ./box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
          </div>
          @if($getTemChildrenClass2 == 0)
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <div class="box ">
                  <div class="box-header with-border edit-background">
                    <h4 class="box-title edit-h4">List of students waiting
                    </h4>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus">
                        </i>
                      </button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <form action="{{ route('postTemChildrenClass') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="box-body">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Students</label>
                          <select id="cbm_student"  name="cbm_student" class="form-control select2">
                            @foreach($getChildrenNotActives as $item)
                            <option value="{{ $item["Children_ID"] }}" id="cbm_student">{{ $item->Children_ID }} </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label></label>
                          <button type="submit" class="btn edit-button-2">Add</button>
                        </div>

                      </div>
                      <!-- /.row -->
                    </div>
                  </form>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            @if($getTemChildrenClass2 != 0)
            <div class="col-md-8">
              <div class="box ">
                <div class="box-header with-border edit-background">
                  <h4 class="box-title edit-h4">List of students in class
                  </h4>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-minus">
                      </i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Children Name</th>
                        <th>Parent_Name</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Score</th>
                        <th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
                      </tr>
                    </thead>
                    <tbody class="list-student">
                      <?php $stt=0 ?>
                      @foreach($getTemChildrenClass as $value)
                      <?php $stt=$stt+1 ?>
                      <tr>
                        <td>{{ $stt }}</td>
                        <td>{{ $value->Children_Name }}</td>
                        <td>{{ $value->Parent_Name }}</td>
                        <td>{{ $value->Birth_Day }}</td>
                        <td>{{ $value->Gender }}</td>
                        <td>{{ $value->Score }}</td>
                        <td> 
                          <form action="{{ route('postDelTemChildren') }}" method="POST">
                          {{csrf_field()}}
                            <input type="hidden" name="txt_idChildren" value="{{ $value->id_Chidren }}"> 
                            <input type="hidden" name="txt_idChildrenTem" value="{{ $value->id }}"> 
                            <button type="submit" class="btn btn-danger">
                              <i class="fa fa-trash-o"></i>
                            </button>
                          </form>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->
            </div>
            @else
            <div class="col-md-8">
            </div>
            @endif
            <!-- /.col -->
          </div>
          @else
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box ">
                  <div class="box-header with-border edit-background">
                    <h4 class="box-title edit-h4">List of students in class
                    </h4>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus">
                        </i>
                      </button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Children Name</th>
                          <th>Parent_Name</th>
                          <th>Birthday</th>
                          <th>Gender</th>
                          <th>Score</th>
                          <th class="sorting_desc_disabled sorting_asc_disabled sorting disabled">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $stt=0 ?>
                        @foreach($getTemChildrenClass as $value)
                        <?php $stt=$stt+1 ?>
                        <tr>
                          <td>{{ $stt }}</td>
                          <td>{{ $value->Children_Name }}</td>
                          <td>{{ $value->Parent_Name }}</td>
                          <td>{{ $value->Birth_Day }}</td>
                          <td>{{ $value->Gender }}</td>
                          <td>{{ $value->Score }}</td>
                          <td> 
                            <form action="{{ route('postDelTemChildren') }}" method="POST">
                              {{csrf_field()}}
                              <input type="hidden" name="txt_idChildren" value="{{ $value->id_Chidren }}"> 
                              <input type="hidden" name="txt_idChildrenTem" value="{{ $value->id }}"> 
                              <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash-o"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- ./box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
            @endif
            <div align="center">
              <form action="{{ route('postAddAll') }}" method="POST">
                {!! csrf_field() !!}
                <p class="box-title">
                  <a href="{{ route('classRoom.index') }}"><button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button></a>
                  <button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
                </p>
              </form>
            </div>
          </div>
          <!-- ./box-body -->

      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</div>
</div>
  <script type="text/javascript">
    $(document).ready(function(){
      fetchdata();
      $('.addTime').click(function (){
        var data = $('#addSchedule').serialize();
        // console.log('123');
        $.ajax({
          type : 'POST',
          data : data,
          url : 'addSchedule',
          success: function(response){
            // $('.list-schedule').append("<tr ><td class='edit-th'>" + response.id + "</td><td class='edit-th'>" + response.Weekday + "</td><td class='edit-th'>" + response.Classroom_Name + "</td><td class='edit-th'>" + response.Time_Start + " " + response.Time_End + "</td><td><button id='' class='btn btn-dange delete_schedule' type='button' value='Delete' data-idtemschedule='"+response.id+"' ></button></td></tr>");
            fetchdata();
          },
        })
      });
    });
    // delete record
    $(document).on("click", ".delete_schedule" , function() {
      // $('.delete_schedule').click(function (){
      // console.log('cjvkcbd,dvd,');
      var delete_id = $(this).data('idtemschedule');
      var el = this;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        url: 'http://127.0.0.1:8000/DelTemSchedule/'+delete_id,
        type: 'get',
        data: {
          'id' : delete_id,
          '_token': $('input[name=_token]').val(),
        },
        success: function(data){
          // $(el).closest( "tr" ).remove();
          // $('.item' + data['id']).remove();
          fetchdata();
        }
      });
    });

    // fetch record
    function fetchdata(){
      $.ajax({
        type : 'GET',
          url : 'http://127.0.0.1:8000/schedules',
          success: function(response){
            var code = '';
            for(var i = 0; i < response.data.length; i++)
            {
              var item = response.data[i];
              var idSchdedule = item.id_schedule;
              // console.log(idSchdedule);
              code +=`<tr>
              <td class='edit-th'>${i+1}</td>
              <td class='edit-th'>${item.Weekday}</td>
              <td class='edit-th'>${item.Classroom_Name}</td>
              <td class='edit-th'>${item.Time_Start} -- ${item.Time_End}</td>
              </td class='edit-th'><td><button id='' class='btn btn-danger delete_schedule' type='button' value='Delete' data-idtemschedule='${idSchdedule}'></button></td>
              </tr>`;
            }
          $('.list-schedule').html(code);
        }
      })
    }
  </script>
</section>
@endsection