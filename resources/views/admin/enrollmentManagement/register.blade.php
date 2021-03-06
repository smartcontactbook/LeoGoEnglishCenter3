@extends('admin.layout.master.master')
@section('main-content')
  <section class="content-header">
    <h1><b>REGISTER</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Register</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <form method="POST" action="{!! route('register.store') !!}">
            {!! csrf_field() !!}
            @include('errors.errors')
            <div class="row">
              <div class="box-header" align="center">
                <h3 class="box-title"><b>INFORMATION</b></h3>
              </div>
              <div class="col-sm-4">
                <div class="box-body">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input
                    id="txt_FirstName"
                    name="txt_FirstName"
                    value="{!! old('txt_FirstName') !!}"
                    type="text"
                    class="form-control"
                    placeholder="Enter first name"
                    required  pattern="^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ
                    ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ
                    ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]{1,50}+$" minlength="5" maxlength="30" title="First name invalid"
                    />
                  </div>
                  <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date" data-provide="datepicker">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                      <input 
                      type="text" 
                      class="form-control" 
                      id="txt_date" 
                      name="txt_date" 
                      pattern="(?:(?:0[1-9]|1[0-2])[\/\\-. ]?(?:0[1-9]|[12][0-9])|(?:(?:0[13-9]|1[0-2])[\/\\-. ]?30)|(?:(?:0[13578]|1[02])[\/\\-. ]?31))[\/\\-. ]?(?:19|20)[0-9]{2}" required
                      value="{!! old('txt_date') !!}">

                    </div>
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                    <select id="txt_gender"  name="txt_gender" class="form-control select2">
                      <option value="1" id="txt_gender">Male</option>
                      <option value="0" id="txt_gender">Female</option>
                    </select>
                  </div>
                </div>
                <!-- <div class=" -->
                  
                </div>
              
              <div class="col-sm-4">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nick Name</label>
                    <input
                    id="txt_NickName"
                    name="txt_NickName"
                    value="{!! old('txt_NickName') !!}"
                    type="text"
                    class="form-control"
                    placeholder="Enter Nick name"
                    pattern="^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ
                    ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ
                    ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]{1,50}+$" minlength="2" maxlength="10"
                    required  title="Nick name invalid"
                    />
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input 
                    type="text" 
                    id="txt_email" 
                    class="form-control" 
                    placeholder="Emaill" 
                    required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" 
                    title="Email Format Invalid" 
                    name="txt_email" 
                    value="{!! old('txt_email') !!}">
                  </div>
                  <div class="form-group">
                    <label>Phone number</label>
                    <fieldset class="form-group">
                      <input 
                      type="text" 
                      id="txt_phone" 
                      class="form-control" 
                      placeholder="Phone" 
                      maxlength="10" 
                      pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="Invalid format phone number"  name="txt_phone" 
                      value="{!! old('txt_phone') !!}">
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <label>Course</label>
                    <select id="cbm_Course"  name="cbm_Course" class="form-control select2" value="{!! old('cbm_Course') !!}">
                      @foreach($getCourseOfRegister as $item)
                      <option value="{{ $item["id"] }}" id="cbm_Course">
                        {{ $item["Course_Name"] }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="box-body">
                  <div class="form-group">
                    <label>Parent Name</label>
                    <input
                      id="txt_ParentName"
                      name="txt_ParentName"
                      value="{!! old('txt_ParentName') !!}"
                      type="text"
                      class="form-control"
                      placeholder="Enter parent name"
                      required  pattern="^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ
                      ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ
                      ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]{1,50}+$" minlength="5" max="30" title="First name invalid"
                    />
                  </div>
                  <div class="form-group">
                    <label>Adress</label>
                    <input 
                    type="text" 
                    id="txt_address" 
                    class="form-control" 
                    required placeholder="Address"
                    name="txt_address" 
                    value="{!! old('txt_address') !!}">
                  </div>
                  <div class="form-group">
                    <label>Test Schedule</label>
                    <input 
                    id="dt_Schedule"
                    name="dt_Schedule" 
                    class="form-control" 
                    type="datetime-local"
                    pattern="([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))"
                     
                    value="{!! old('dt_Schedule') !!}">
                  </div>
                </div>
              </div>

              <div align="center" class="edit-margin">
                <p class="box-title ">
                  <a href="{{ route('register.index') }}"><button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button></a>
                  <button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
                </p>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection