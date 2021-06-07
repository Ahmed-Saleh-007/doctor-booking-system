@extends('admin.index')
@section('content')

<?php
$longitude = !empty(old('longitude')) ? old('longitude') : '31.24238681793213';
$latitude  = !empty(old('latitude'))  ? old('latitude')  :'30.034024628931657';
?>
<div class="card">
    <div class="card-header">
        <div class="card-title">{{$title}}</div>
    </div>
    <div class="card-body">
        {!! $dataTable->table(['class' => 'dataTable table table-striped table-hover table-bordered'], true) !!}
    </div>
</div>

<!-- view modal view using by ajax -->
<div id="ajax_view" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_view_content">

            </div>
        </div>
    </div>
</div>

<!-- edit modal view using by ajax -->
<div id="ajax_edit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_edit_content">

            </div>
        </div>
    </div>
</div>

<!-- delete modal view using by ajax -->
<div id="ajax_delete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_delete_content">
                @csrf
                <h4 class="mb-3">{{ trans('admin.delete_this') }}</h4>
                <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.no') }}</button>
                <button class="btn btn-danger" id="delete" >Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- delete all modal view using by ajax -->
<div id="mutlipleDelete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <div class="empty_record hidden">
                        <h4>{{ trans('admin.please_check_some_records') }} </h4>
                    </div>
                    <div class="not_empty_record hidden">
                        <h4>{{ trans('admin.ask_delete_itme') }} <span class="record_count"></span> ? </h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="empty_record hidden">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.close') }}</button>
                </div>
                <div class="not_empty_record hidden">
                    @csrf
                    <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.no') }}</button>
                    <button class="btn btn-danger" id="ajax_delete_all" >{{ trans('admin.yes') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- create modal view using by ajax -->
<div id="ajax_create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{trans('doctor.addAddress')}}</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_create_content">

                <div id="ajax_create_errors"></div>

                {!! Form::open(['id' => 'store_form']) !!}
                <div class="form-group">
                    {!! Form::label('address_en', trans('admin.address_en')) !!}
                    {!! Form::text('address_en', old('address_en'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address_ar', trans('admin.address_ar')) !!}
                    {!! Form::text('address_ar', old('address_ar'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fees', trans('doctor.fees')) !!}
                    {!! Form::number('fees', old('fees'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Doctor_name', trans('doctor.name_'. session('lang'))) !!}
                    {!! Form::select('doctor_id', App\Models\Doctor::pluck('name_'. session('lang'), 'id'), null, ['class' => 'form-control', 'data-strength' => '']) !!}
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


                {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}

            </>
        </div>
    </div>
</div>


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

{!! $dataTable->scripts() !!}

@include('admin.doctor.doctor-addresses.ajax.script')

@endpush

@endsection
