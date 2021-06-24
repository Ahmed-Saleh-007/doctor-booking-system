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
                    {!! Form::date('date_of_birth', $doctor->date_of_birth, ['class'=>'form-control','required'=>'required']) !!}

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
                            <input type='file' id="imageUpload-edit" name="image"/>
                            <label for="imageUpload-edit">
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

        <!-- Sub Specialist Table -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('admin.subspecialists')</h3>
            </div>
            <div class="card-body">
                @if(count($doctor->subspecialists) > 0)
                <table class="table table-bordered table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th>@lang('admin.Id')</th>
                            <th> @lang('admin.name_en') </th>
                            <th> @lang('admin.name_ar') </th>
                            <th> @lang('admin.actions') </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctor->subspecialists as $subspecialist)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$subspecialist->name_en}}</td>
                            <td>{{$subspecialist->name_ar}}</td>
                            <td>
                                <a  onclick="return confirm('Are you sure?')" href="#" id="delete">
                                    <form style="display: inline;" class="delete-ajax" action="{{route('doctor.deleteDoctorSubSpecialist', $subspecialist->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class='label label-danger label-rounded label-icon' type='submit' value='submit' style="border:none;background:none">
                                            <i class='fa fa-trash' style="opacity: 0.9;font-size: 16px;margin: 0 5px;margin: 0 5px;color: #F44336;"> </i>
                                        </button>
                                    </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <tr>
                    <p class="text-center">
                        @lang('doctor.no_subspecialist')
                    </p>
                </tr>
                @endif
                <div class="mt-3">
                    <a href="{{ route('doctor.addDoctorSubSpecialist') }}" class="btn btn-primary">@lang('doctor.new_subspecialist')</a>
                </div>
            </div>
        </div>

        <!-- Addresses Table -->
        <!-- /.box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('admin.Doctor Address')</h3>
            </div>
            <div class="card-body">
                @if(count($doctor->addresses) > 0)
                    <table class="table table-bordered table-hover datatable-highlight">
                        <thead>
                            <tr>
                                <th>@lang('admin.Id')</th>
                                <th> @lang('admin.address_en') </th>
                                <th> @lang('admin.address_ar') </th>
                                <th> @lang('admin.District') </th>
                                <th> @lang('admin.Fees') </th>
                                <th> @lang('admin.Actions') </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctor->addresses as $address)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$address->address_en}}</td>
                                <td>{{$address->address_ar}}</td>
                                <td>
                                    @if (direction() == 'rtl')
                                    {{$address->district['name_ar']}}
                                    @else
                                    {{$address->district['name_en']}}
                                    @endif
                                </td>
                                    <td>{{$address->fees}}</td>
                                <td>
                                    {{-- edit doctor Address --}}
                                    <a href="{{route('doctor.editDoctorAddress',$address->id) }}" >
                                        <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-alt" style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #FFC107;"></i></span>
                                    </a>
                                    <a  onclick="return confirm('Are you sure?')" href="#" id="delete">
                                        <form style="display: inline;" action="{{route('doctor.deleteDoctorAddress',$address->id)}}"  method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class='label label-danger label-rounded label-icon' type='submit' value='submit' style="border:none;background:none">
                                                <i class='fa fa-trash' style="opacity: 0.9;font-size: 16px;margin: 0 5px;margin: 0 5px;color: #F44336;"> </i>
                                            </button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <tr>
                        <p class="text-center">
                            @lang('admin.no addresses to show')
                        </p>
                    </tr>
                @endif
                    <div class="mt-3">
                        <a href="{{ route('doctor.addDoctorAddress',$doctor->id) }}" class="btn btn-primary">@lang('admin.Add Address')</a>
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
