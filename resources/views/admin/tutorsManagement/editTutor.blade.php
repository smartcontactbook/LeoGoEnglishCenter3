@extends('admin.layout.master.master')
@section('main-content')
  <section class="content-header">
    <h1><b>EDIT TUTOR</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li><a href="#">Tutor management</a></li>
      <li class="active">Edit Tutor</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <form method="post" action="{!! route('tutor.update', $getTutor->id) !!}" enctype="multipart/form-data">
                  {{method_field('patch')}}
                  {{csrf_field()}}
            @include('errors.errors')
            <div class="row">
              <div class="box-header" align="center">
                <h3 class="box-title"><b>INFORMATION</b></h3>
                
              </div>
              <div class="col-sm-4">
                <div class="box-body">
                  <input type="hidden" name="id_tutor" value="{{$getTutor->id}}">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input
                    id="txt_FirstName"
                    name="txt_FirstName"
                    value="{!! old('txt_FirstName', $getTutor->Full_Name) !!}"
                    type="text"
                    class="form-control"
                    pattern="^[a-zA-z ]*$"
                    placeholder="Enter first name"
                    />
                  </div>
                  <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date" data-provide="datepicker">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                      <input type="text" class="form-control" id="txt_date" name="txt_date" value="{!! old('txt_date', $getTutor->Birth_Day) !!}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select id="txt_gender"  name="txt_gender" class="form-control select2">
                    @if($getTutor->Gender == 1)
                    <option value="{!!old('txt_gender', 'Male')!!}" disabled=""></option>
                    @else
                    <option value="{!!old('txt_gender', 'Female')!!}" disabled=""></option>
                    @endif
                    <option value="1" id="txt_gender">Male</option>
                    <option value="0" id="txt_gender">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Adress</label>
                  <input type="text" id="txt_address" class="form-control" required placeholder="Address"
                  name="txt_address" value="{!! old('txt_address', $getTutor->Address) !!}">
                </div>
              </div>
            
            <div class="col-sm-4">
              <div class="box-body">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" id="txt_email" class="form-control" placeholder="Emaill" required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid" name="txt_email" value="{!! old('txt_email', $getTutor->email) !!}">
                </div>
                <div class="form-group">
                  <label>Phone number</label>
                  <fieldset class="form-group"><input type="text" id="txt_phone" class="form-control" placeholder="Phone" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="Invalid format phone number"  name="txt_phone" value="{!! old('txt_phone', $getTutor->Phone_Number) !!}">
                  </fieldset>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="txt_description"  rows="3" class="form-control" name="txt_description" placeholder="Enter Description" required> {!!old('txt_description',$getTutor->Description) !!}</textarea>
                </div>

              </div>
            </div>

            <div class="col-sm-4">
              <div class="box-body">
                <div class="avatar-upload">
                  <div class="avatar-edit">
                    {!! Form::hidden('old_avatar', $getTutor->avatar) !!}
                    {!! Form::file('new_avatar', ['id' => 'imageUpload', 'accept' => '.png, .jpg, .jpeg']) !!}
                    {!! Form::label('imageUpload', ' ') !!}
                  </div>
                  <div class="avatar-preview">
                    <div id="imagePreview">
                      <img src="{{ asset('image/avatar').'/'.$getTutor->avatar }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div align="center">
              <p class="box-title">
                <a href="{{ route('lecturer.index') }}"><button type="button" class="btn btn-primary editLeftRight"><i class="fa fa-reply-all">Back</i></button></a>
                <button type="submit" class="btn btn-success"><i class="fa fa-save">Save</i></button>
              </p>
            </div>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</section>
@endsection