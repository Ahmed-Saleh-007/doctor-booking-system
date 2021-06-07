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
 @endpush