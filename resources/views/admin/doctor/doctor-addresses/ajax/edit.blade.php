<?php
$longitude = !empty($address->longitude) ? $address->longitude : '31.24238681793213';
$latitude  = !empty($address->latitude)  ? $address->latitude  :'30.034024628931657';
?>
<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form']) !!}
    <input type="text" name="id" class="hidden" id="id" value="{{$doctor_address->id}}">

    <div class="form-group">
        {!! Form::label('address_en', trans('admin.address_en')) !!}
        {!! Form::text('address_en', $doctor_address->address_en, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address_ar', trans('admin.address_ar')) !!}
        {!! Form::text('address_ar', $doctor_address->address_ar, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fees', trans('doctor.fees')) !!}
        {!! Form::number('fees', $doctor_address->fees, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Doctor_name', trans('doctor.name_'. session('lang'))) !!}
        {!! Form::select('doctor_id', App\Models\Doctor::pluck('name_'. session('lang'), 'id'), $doctor_address->doctor_id, ['class' => 'form-control', 'data-strength' => '']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('district_name', trans('admin.district')) !!}
        {!! Form::select('district_id', App\Models\District::pluck('name_'. session('lang'), 'id'), null, ['class' => 'form-control', 'data-strength' => '']) !!}
    </div>

    <input type="hidden" value="{{ $longitude }}" id="longitude" name="longitude">
    <input type="hidden" value="{{ $latitude }}" id="latitude" name="latitude">
    <div class="form-group">
        <div id="location-on-map" style="width: 100%; height: 400px;"></div>
    </div>
    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}


@push('js')
 <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyB9Oce9T0S649tJA6783gdB48pudzGg9H0'></script>
 <script type="text/javascript" src='{{ url('design/adminlte/dist/js/locationpicker.jquery.js') }}'></script>

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
        locationNameInput: $('#address')
      },
  });
 </script>

