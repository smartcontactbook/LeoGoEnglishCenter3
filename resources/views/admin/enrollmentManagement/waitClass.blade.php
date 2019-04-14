@extends('admin.layout.master.master')
@section('main-content')
<section class="content-header">
	<h1><b>WAITING CLASS MANAGEMENT</b>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Wait Class management</li>
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

       <div class="box-body">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            @foreach($getCourses as $count=>$getCourse)
            <li role="presentation" @if($count == 0) class="active" @endif>
              <a href="#tab-{{ $getCourse->id }}" aria-controls="#tab-{{ $getCourse->id }}" role="tab" data-toggle="tab">{{ $getCourse->Course_Name }}</a>
            </li>
            @endforeach
          </ul>
          <div class="tab-content">
            @foreach($getCourses as $count=>$getCourse)
            <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $getCourse->id }}">
              <div class="row">
                @foreach($getLevelOfCourses as $value3)
                @if($getCourse->id == $value3->idCourse)
                <form action="{{ route('postWaitingClass') }}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="txt_idLevel" value="{{ $value3->idLevel }}">
                  <input type="hidden" name="txt_nameLevel" value="{{ $value3->Level_Name }}">
                  <input type="hidden" name="txt_numberStudent" value="{{ $value3->user_count }}">
                  <div class="col-sm-3">
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                        <li class="edit-item">
                          <div class="edit-product-info2">
                            <h4 class="edit-p">{{ $value3->Level_Name }}</h4>
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
                                <label class="label edit-lable edit-pull-right">{{ $value3->Course_Name }}</label>
                              </div>
                            </div>

                            <div class="row">
                              <label class="control-label edit-row">Qty Students</label>
                              <div class="pull-right">
                                <label class="label label-danger edit-pull-right">{{ $value3->user_count }}</label>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="box-body">
                            <button 
                            type="button" 
                            class="btn edit-button edit-itemJs" 
                            data-toggle="modal" 
                            data-id="{{$value3->Level_ID}}" 
                            data-target="#listChildren">
                            List
                          </button>
                          <button type="submit" class="btn pull-right edit-button">New Class</button>
                        </form>
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
        <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title">List Children Waiting Of Class</h4>
    </div>
    <div class="modal-body">
      <div class="box-body">
        <!--   <input class="form-control" type="hidden" name="txt_testId" id="txt_testId"value=""> -->
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Birth day</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Score</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody class="list-student">

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
    var code = ''
    $.ajax({
        type : 'GET',
        // data : b,
        url : 'http://127.0.0.1:8000/studentOfWaitingClass/'+id,

        success: function(response){
          for(var i = 0; i < response.data.length; i++)
          {
            var item = response.data[i];
            // var gender = '';
            // if(${item.Gender} == 1)
            //   gender = Male;
            // else
            //   gender = FeMale;
            code +=`<tr>
            <td>${i+1}</td>
            <td>${item.First_Name} ${item.Last_Name}</td>
            <td>${item.Birth_Day}</td>
            <td>${item.Gender}</td>
            <td>${item.email}</td>
            <td>${item.Phone_Number}</td>
            <td>${item.Score}</td>
            <td>${item.Address}</td>
            </tr>`;
          }
        // console.log(code);
        $('.list-student').html(code);
      }
    })
  }) 
</script>


</section>
@endsection