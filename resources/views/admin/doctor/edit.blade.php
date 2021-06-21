@extends('admin.index')
@section('content')


<div class="card">
  <div class="card-header">
    <h3 class="card-title">@lang('admin.Edit Doctor')</h3>
  </div>
    <!-- /.box-header -->
    <div class="card-body">
        {!! Form::open(['route'=>['doctors.update',$doctor->id], 'method'=>'put', 'files' => true ]) !!}

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {!! Form::label('name_en', trans('admin.name_en')) !!}
                    {!! Form::text('name_en', $doctor->name_en, ['class'=>'form-control','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
                    {!! Form::text('name_ar', $doctor->name_ar, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', trans('admin.email')) !!}
                    {!! Form::email('email', $doctor->email, ['class'=>'form-control','required'=>'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('mobile', trans('admin.mobile')) !!}
                    {!! Form::text('mobile', $doctor->mobile, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('date_of_birth', trans('admin.date_of_birth')) !!}
                    {!! Form::text('date_of_birth', $doctor->date_of_birth, ['class'=>'form-control','required'=>'required']) !!}
                </div>

                <div class="form-group">
                    {{ Form::label('country',trans('country'),['class' => 'control-label col-sm-3']) }}
                    {!! Form::select('country_id', App\Models\Country::pluck('name_'.session('lang'), 'id')
                        , $doctor->country_id,['class' => 'form-control', 'placeholder' => 'Choose Country...']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', trans('admin.password')) !!}
                    {!! Form::password('password', ['class'=>'form-control', 'data-strength' => '']) !!}
                    <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
                </div>

                <div class="form-group">
                    {{ Form::label('gender',trans('admin.Gender'),['class' => 'control-label col-sm-3']) }}
                    <div class="">
                        <select name="gender" class="form-control" required>
                            <option value="male" {{($doctor->gender == "male")? 'selected' : ''}}>@lang('admin.Male')</option>
                            <option value="female" {{($doctor->gender == "female")? 'selected' : ''}}>@lang('admin.Female')</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('degree_id', trans('admin.doctorDegrees')) !!}
                    {!! Form::select('deg_id', App\Models\DoctorDegree::pluck('name_'.session('lang'), 'id'), $doctor->deg_id, ['class' => 'form-control', 'placeholder' => trans('admin.Choose One')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('specialist', trans('admin.specialist')) !!}
                    {!! Form::select('spec_id', App\Models\Specialist::pluck('name_'.session('lang'), 'id'), $doctor->spec_id, ['class' => 'form-control', 'data-strength' => '']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('session_time',trans('admin.Session Time')) !!}
                    {!! Form::text('session_time',$doctor->session_time,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 up_img">
                <div class="form-group">
                    <h1>
                        {{trans('admin.image')}}
                    </h1>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" name="image"/>
                            <label for="imageUpload">
                                <i class="fa fa-pencil-alt"></i>
                            </label>
                        </div>
                        <div class="avatar-preview">
                            @if(!empty($doctor->image))
                            <div id="imagePreview-edit" style="background-image: url({{ url('storage/' . $doctor->image) }});"></div>
                            @else
                            <div id="imagePreview-edit" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::submit(trans('admin.Edit'), ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
