@extends('doctor.index')
@section('content')

<div class="card">
    <div class="card-header">
       @if (direction() == 'rtl')
           <h3 class="card-title">@lang('admin.Doctor Name') : {{$doctor->name_ar}}</h3>
       @else
           <h3 class="card-title">@lang('admin.Doctor Name') : {{$doctor->name_en}}</h3>
       @endif
    </div>
    <!-- /.box-header -->
    <div class="card-body">
        {!! Form::open(['route'=>'doctor.storeDoctorSubSpecialist','method'=>'Post']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                 <label for="specialist_id" class="control-label">@lang('doctor.subspecialist')</label>
                 <div>
                    <select required class="form-control"  name="subspecialist_id" >
                       <option selected value="">@lang('admin.Choose One')</option>
                       @foreach($subspecialists as $subspecialist)
                            <option value="{{$subspecialist->id}}" {{ old('subspecialist_id') == $subspecialist->id ? 'selected' : '' }}>
                                @if (direction() == 'rtl')
                                    {{$subspecialist->name_ar}}
                                @else
                                    {{$subspecialist->name_en}}
                                @endif
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection