@extends('doctor.index')
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
       @if (direction() == 'rtl')
           <h3 class="card-title">@lang('admin.Doctor Name') : {{$doctor->name_ar}}</h3>
       @else
           <h3 class="card-title">@lang('admin.Doctor Name') : {{$doctor->name_en}}</h3>
       @endif
    </div>
    <!-- /.box-header -->
    <div class="card-body">
        {!! Form::open(['url'=>'/doctor/doctor-address/create/'.$doctor->id,'method'=>'Post']) !!}
        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('address_en',trans('admin.address_en')) !!}
                {!! Form::text('address_en',old('address_en'),['class'=>'form-control','required'=>'required']) !!}
            </div>
            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('address_ar',trans('admin.address_ar')) !!}
                {!! Form::text('address_ar',old('address_ar'),['class'=>'form-control','required'=>'required']) !!}
            </div>

            <div class="form-group col-md-6 col-sm-12">
                {!! Form::label('fees',trans('admin.Fees')) !!}
                {!! Form::text('fees',old('fees'),['class'=>'form-control','required'=>'required']) !!}
            </div>

            <div class="form-group col-md-6 col-sm-12">
                 <label for="country_id" class="control-label col-sm-3">@lang('admin.Country')</label>
                 <div>
                    <select required class="form-control"  name="country_id" id="country_n">
                        <option selected value="">@lang('admin.Choose_One')</option>
                       @foreach($countries as $country)
                            <option value="{{$country->id}}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
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
                        <option value="">  @lang('admin.Choose_One') </option>
                    </select>

                </div>
            </div>


            <div class="form-group col-md-6 col-sm-12">
                {{ Form::label('district_id',trans('admin.District'),['class' => 'control-label col-sm-3']) }}
                <div>
                    <select name="district_id" id="district_id" class="form-control">
                        <option value="">  @lang('admin.Choose_One') </option>
                    </select>

                </div>
            </div>

        </div>
        <input type="hidden" value="{{ $longitude }}" id="longitude" name="longitude">
        <input type="hidden" value="{{ $latitude }}" id="latitude" name="latitude">
        <div class="form-group">
            <div id="location-on-map" style="width: 100%; height: 400px;"></div>
        </div>
        {!! Form::submit(trans('admin.Add Address'), ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection