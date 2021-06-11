@extends('admin.index')
@section('content')

@push('js')
<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyB9Oce9T0S649tJA6783gdB48pudzGg9H0'></script>
<script type="text/javascript" src='{{ url('design/adminlte/dist/js/locationpicker.jquery.js') }}'></script>
<?php
$longitude = !empty(old('longitude')) ? old('longitude') : '31.24238681793213';
$latitude  = !empty(old('latitude'))  ? old('latitude')  :'30.034024628931657';

?>
 <script>
  $('#location-on-map').locationpicker({
      location: {
          longitude:{{ $longitude }},
          latitude: {{ $latitude }}
      },
      radius: 300,
      markerIcon: '{{ url('design/adminlte/dist/img/map-marker-2-xl.png') }}',
      inputBinding: {
        longitudeInput: $('#longitude'),
        latitudeInput: $('#latitude'),
       // radiusInput: $('#us2-radius'),
        locationNameInput: $('#address')
      },
      //enableAutocomplete: true

  });
 </script>

@include('admin.commonUsedCode.city')
@include('admin.commonUsedCode.district')

@endpush


<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('admin.Create Doctor')</h3>
    </div>
    <!-- /.box-header -->
    <div class="card-body">
        {!! Form::open(['route'=>'doctors.store','method'=>'Post', 'files' => true]) !!}
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {!! Form::label('name_en',trans('admin.name_en')) !!}
                    {!! Form::text('name_en',old('name_en'),['class'=>'form-control','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name_ar',trans('admin.name_ar')) !!}
                    {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control','required'=>'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email',trans('admin.email')) !!}
                    {!! Form::email('email',old('email'),['class'=>'form-control','required'=>'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('mobile', trans('admin.mobile')) !!}
                    {!! Form::text('mobile', old('mobile'), ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('age', trans('admin.Age')) !!}
                    {!! Form::text('age', old('age'), ['class'=>'form-control','required'=>'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password',trans('admin.password')) !!}
                    {!! Form::password('password',['class'=>'form-control', 'data-strength' => '','required'=>'required']) !!}
                    <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
                </div>

                <div class="form-group">
                     <label for="gender" class="label">@lang('admin.Gender')</label>
                     <div class="">
                        <select required class="form-control input" name="gender">
                            <option selected value="">@lang('admin.Choose One')</option>

                            <option value="0" {{ old('gender') == '0' ? 'selected' : '' }}>@lang('admin.Male')</option>

                            <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>@lang('admin.Female')</option>

                        </select>
                    </div>
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
                            <div id="imagePreview" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('degree_id', trans('admin.doctorDegrees')) !!}
                {!! Form::select('deg_id', App\Models\DoctorDegree::pluck('name_'.session('lang'), 'id'), old('deg_id'), ['class' => 'form-control', 'placeholder' => trans('admin.Choose One')]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('specialist', trans('doctor.specialist')) !!}
                {!! Form::select('spec_id', App\Models\Specialist::pluck(session('lang').'_name', 'id'), old('spec_id'), ['class' => 'form-control', 'data-strength' => '']) !!}
            </div>
            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('session_time',trans('admin.Session Time')) !!}
                {!! Form::text('session_time',old('session_time'),['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6 col-sm-12">
                <label for="country_id" class="control-label col-sm-3">@lang('admin.Country')</label>
                <div>
                   <select class="form-control"  name="country_id" id="country_n">

                       <option selected value="">@lang('admin.Choose_One')</option>

                      @foreach($countries as $country)
                           <option value="{{$country->id}}">
                               @if (direction() == 'rtl')
                                   {{$country->name_ar}}
                               @else
                                   {{$country->name_en}}
                               @endif
                           </option>
                       @endforeach

                   </select>
               </div>
           </div>

           <div class="form-group col-md-6 col-sm-12">
               {{ Form::label('city_id',trans('admin.City'),['class' => 'control-label col-sm-3']) }}
               <div>
                   <select name="city_id" id="city_id" class="form-control">
                       <option value="">  @lang('admin.Choose One') </option>
                   </select>

               </div>
           </div>


           <div class="form-group col-md-6 col-sm-12">
               {{ Form::label('district_id',trans('admin.District'),['class' => 'control-label col-sm-3']) }}
               <div>
                   <select name="district_id" id="district_id" class="form-control">
                       <option value="">  @lang('admin.Choose One') </option>
                   </select>

               </div>
           </div>

            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('address_ar',trans('admin.address_ar')) !!}
                {!! Form::text('address_ar',old('address_ar'),['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('address_en',trans('admin.address_en')) !!}
                {!! Form::text('address_en',old('address_en'),['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('fees',trans('admin.Address Fees')) !!}
                {!! Form::text('fees',old('fees'),['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>
        <input type="hidden" value="{{ $longitude }}" id="longitude" name="longitude">
        <input type="hidden" value="{{ $latitude }}" id="latitude" name="latitude">
        <div class="form-group">
            <div id="location-on-map" style="width: 100%; height: 400px;"></div>
        </div>
        {!! Form::submit(trans('admin.Add New'), ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection
