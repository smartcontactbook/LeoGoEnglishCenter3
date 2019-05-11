@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>CHILDRENS DETAIL</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Children detail</li>
	</ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-3">
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{asset('image/')}}/avatar/{{ $getDetailChildrens->avatar }}" alt="User profile picture">

          <h3 class="profile-username text-center">{{ $getDetailChildrens->Full_Name }}</h3>

          <p class="text-muted text-center">
           Children
         </p>

         <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Parent Name</b> <a class="pull-right">{{ $getDetailChildrens->Parent_Name }}</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="pull-right">{{ $getDetailChildrens->email }}</a>
          </li>
          <li class="list-group-item">
            <b>Birth Day</b> <a class="pull-right">{{ $getDetailChildrens->Birth_Day }}</a>
          </li>
          <li class="list-group-item">
            <b>Phone Number</b> <a class="pull-right">{{ $getDetailChildrens->Phone_Number }}</a>
          </li>
          <li class="list-group-item">
            <b>Gender</b> <a class="pull-right">
             @if($getDetailChildrens->Gender == 1)
             Male
             @else
             Female
             @endif
           </a>
         </li>
         <li class="list-group-item">
          <b>Address</b> <a class="pull-right">{{ $getDetailChildrens->Address }}</a>
        </li>
        <li class="list-group-item">
          <b>Score</b> <a class="pull-right">{{ $getDetailChildrens->Score }}</a>
        </li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- About Me Box -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">About Me</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i> Description</strong>

      <p class="text-muted">
        {{ $getDetailChildrens->Description }}
      </p>
      <hr>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</div>
<!-- /.col -->
<div class="col-md-9">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#activity" data-toggle="tab">Timeline</a></li>
      <li><a href="#settings" data-toggle="tab">Mark</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
        <ul class="timeline timeline-inverse">
          @foreach($getDetailChildrens2 as $value)
          <li class="time-label">
            <span class="bg-red">
              {{ $value->Start_Date}}
            </span>
          </li>
          <li>
            <i class="fa fa-envelope bg-blue"></i>

            <div class="timeline-item">

              <h3 class="timeline-header"><a href="#">Course</a>  {{ $value->Course_Name }}</h3>

              <div class="timeline-body">
                {{ $value->Description}}
              </div>
              
            </div>
          </li>
          <li>
            <i class="fa fa-user bg-aqua"></i>

            <div class="timeline-item">

              <h3 class="timeline-header no-border"><a href="#">Level :</a> {{ $value->Level_Name}}
              </h3>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-xs">Score max : {{ $value->Score_max}}</a>
                <a class="btn btn-danger btn-xs">Score min : {{ $value->Score_min}}</a>
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-comments bg-yellow"></i>

            <div class="timeline-item">

              <h3 class="timeline-header"><a href="#">Class name :</a> {{ $value->Class_Name}}</h3>

              <div class="timeline-body">
                {{ $value->Description}}
              </div>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-xs">Start Date : {{ $value->Score_max}}</a>
                <a class="btn btn-danger btn-xs">End Date : {{ $value->Score_min}}</a>
                <a class="btn btn-warning btn-flat btn-xs">Quantity Session : {{ $value->QuantitySession}}</a>
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-clock-o bg-gray"></i>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="tab-pane" id="settings">
        <div style="border-top:1px solid #23292F; border-left:1px solid #23292F; border-right:1px solid #23292F; border-bottom:1px solid #23292F;" class="box" id="e1">
          <div class="box-header" style="background-color:#FFFFFF;">
            <h3 class="box-title" style="color:#23292F;">First Semester
            </h3>
          </div>
          <div class="box-body mark-bodyID mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="border-top:1px solid #23292F;">
            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0">
              <div id="mCSB_1_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center" rowspan="2" style="background-color:#395C7F;color:#fff;">Subject
                      </th>
                      <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Exam
                      </th>
                      <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Attendance
                      </th>
                      <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Class Test
                      </th>
                      <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Assignment
                      </th>
                      <th colspan="3" class="text-center " style="background-color:#395C7F;color:#fff;">Total
                      </th>
                    </tr>
                    <tr>
                      <th class="bg-sky text-center ">Mark
                      </th>
                      <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark
                      </th>
                      <th class="bg-sky text-center ">Mark
                      </th>
                      <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark
                      </th>
                      <th class="bg-sky text-center ">Mark
                      </th>
                      <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark
                      </th>
                      <th class="bg-sky text-center ">Mark
                      </th>
                      <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark
                      </th>
                      <th class="bg-sky-total text-center">Mark
                      </th>
                      <th class="bg-purple-shipu text-center" data-title="Point">Point
                      </th>
                      <th class="bg-sky-total-grade text-center" data-title="Grade">Grade
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-black" data-title="Subject">Bangla
                      </td>
                      <td class="text-black" data-title="Mark">45
                      </td>
                      <td class="text-black" data-title="Highest Mark">70
                      </td>
                      <td class="text-black" data-title="Mark">4
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">5
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">6
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">60
                      </td>
                      <td class="text-black" data-title="Point">3.50
                      </td>
                      <td class="text-black" data-title="Grade">A-
                      </td>
                    </tr>
                    <tr>
                      <td class="text-black" data-title="Subject">Math
                      </td>
                      <td class="text-black" data-title="Mark">58
                      </td>
                      <td class="text-black" data-title="Highest Mark">58
                      </td>
                      <td class="text-black" data-title="Mark">8
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">9
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">6
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">81
                      </td>
                      <td class="text-black" data-title="Point">5.00
                      </td>
                      <td class="text-black" data-title="Grade">A+
                      </td>
                    </tr>
                    <tr>
                      <td class="text-black" data-title="Subject">English
                      </td>
                      <td class="text-black" data-title="Mark">58
                      </td>
                      <td class="text-black" data-title="Highest Mark">70
                      </td>
                      <td class="text-black" data-title="Mark">6
                      </td>
                      <td class="text-black" data-title="Highest Mark">8
                      </td>
                      <td class="text-black" data-title="Mark">9
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">3
                      </td>
                      <td class="text-black" data-title="Highest Mark">9
                      </td>
                      <td class="text-black" data-title="Mark">76
                      </td>
                      <td class="text-black" data-title="Point">4.00
                      </td>
                      <td class="text-black" data-title="Grade">A
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="box-footer" style="padding-left:0px;">
                  <p class="text-black">Total Marks : 
                    <span class="text-red text-bold">217.00
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;Average Marks : 
                    <span class="text-red text-bold">72.33
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;Average Point : 
                    <span class="text-red text-bold">4.00
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;Average Grade : 
                    <span class="text-red text-bold">A
                    </span>
                  </p>
                </div>
              </div>
              <div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: none;">
                <div class="mCSB_draggerContainer">
                  <div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 0px; left: 0px;">
                    <div class="mCSB_dragger_bar">
                    </div>
                  </div>
                  <div class="mCSB_draggerRail">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection