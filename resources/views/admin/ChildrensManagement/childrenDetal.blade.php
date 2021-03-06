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
      {{-- {{ route('getChartOfStudent') }} --}}
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
        @foreach($getDetailChildrens2 as $value)
          <div style="border-top:1px solid #23292F; border-left:1px solid #23292F; border-right:1px solid #23292F; border-bottom:1px solid #23292F;" class="box" id="e1">
            <div class="box-header" style="background-color:#FFFFFF;">
              <h3 class="box-title" style="color:#23292F;">{{ $value->Class_Name }}
              </h3>
            </div>
            <div class="box-header">
              <div id="chartContainer" style="height: 430px; width: 100%;"></div>

            </div>
            <div class="box-body mark-bodyID mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="border-top:1px solid #23292F;">
              <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center" rowspan="2" style="background-color:#395C7F;color:#fff;">Subject
                        </th>
                        <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Begin
                        </th>
                        <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Test 1
                        </th>
                        <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Test 2
                        </th>
                        <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Exam mid
                        </th>
                        <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Test 3
                        </th>
                        <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Exam final
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
                        <th class="bg-sky text-center ">Mark
                        </th>
                        <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark
                        </th>
                        <th class="bg-sky text-center ">Mark
                        </th>
                        <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark
                        </th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <tr>
                        <td class="text-black" data-title="Subject">{{ $value->Level_Name }}
                        </td>
                        <td class="text-black" data-title="Mark">{{ $value->Score }}
                        </td>
                        <td class="text-black" data-title="Highest Mark">{{ $value->Score_max }}
                        </td>
                        <td class="text-black" data-title="Mark">
                          @if($value->Score_Test1 == null)
                            0
                          @else
                            {{ $value->Score_Test1 }}
                          @endif
                        </td>
                        <td class="text-black" data-title="Highest Mark">{{ $value->Score_max}}
                        </td>
                        <td class="text-black" data-title="Mark">
                          @if($value->Score_Test2 == null)
                            0
                          @else
                            {{ $value->Score_Test2 }}
                          @endif
                        </td>
                        <td class="text-black" data-title="Highest Mark">{{ $value->Score_max}}
                        </td>
                        <td class="text-black" data-title="Mark">
                          @if($value->Score_Midtem == null)
                            0
                          @else
                            {{ $value->Score_Midtem }}
                          @endif
                        </td>
                        <td class="text-black" data-title="Highest Mark">{{ $value->Score_max}}
                        </td>
                        <td class="text-black" data-title="Mark">
                          @if($value->Score_Test3 == null)
                            0
                          @else
                            {{ $value->Score_Test3 }}
                          @endif
                        </td>
                        <td class="text-black" data-title="Highest Mark">{{ $value->Score_max}}
                        </td>
                        <td class="text-black" data-title="Mark">
                          @if($value->Score_Final == null)
                            0
                          @else
                            {{ $value->Score_Final }}
                          @endif
                        </td>
                        <td class="text-black" data-title="Highest Mark">{{ $value->Score_max}}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="box-footer" style="padding-left:0px;">
                    @php
                      $total = $value->Score_Final + $value->Score_Midtem + $value->Score_Test1 + $value->Score_Test2 + $value->Score_Test3;
                      $average = ( $total ) / 5;
                      if ($average >= 8.5) {
                        $grate = "Loại A";
                      } else if (($average >= 7) && ($average < 8.5)) {
                        $grate = "Loại B";
                      } else if (($average >= 5.5) && ($average < 7)) {
                        $grate = "Loại C";
                      } else if (($average > 4) && ($average < 5.5)) {
                        $grate = "Loại D";
                      } else {
                        $grate = "Loại F";
                      }
                    @endphp
                    <p class="text-black">Total Marks : 
                      <span class="text-red text-bold"> {{ $total }}
                      </span>&nbsp;&nbsp;&nbsp;&nbsp;Average Marks : 
                      <span class="text-red text-bold">{{ $average }}
                      </span>&nbsp;&nbsp;&nbsp;&nbsp;Average Grade : 
                      <span class="text-red text-bold">{{ $grate }}
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
        @endforeach
      </div>
    </div>
  </div>
</div>
</div>
</section>

<?php
foreach($getDetailChildrens2 as $value) 
$dataPoints = array(
  array("y" => $value->Score_Test1, "label" => "Test1"),
  array("y" => $value->Score_Test2, "label" => "Test2"),
  array("y" => $value->Score_Midtem, "label" => "MidTem"),
  array("y" => $value->Score_Test3, "label" => "Test3"),
  array("y" => $value->Score_Final, "label" => "Final")
);

?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  title: {
    text: "Score chart of Student"
  },
  axisY: {
    title: "Number of Scores"
  },
  data: [{
    type: "line",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

@endsection

