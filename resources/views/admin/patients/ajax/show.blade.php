<div class="card">
    <div class="card-body">
      <h5 class="card-title">@lang('admin.name_en'):</h5>
      <p class="card-text">{{ $patient->name_en }}</p>
      <h5 class="card-title">@lang('admin.name_ar'):</h5>
      <p class="card-text">{{ $patient->name_ar }}</p>
      <h5 class="card-title">@lang('admin.email'):</h5>
      <p class="card-text">{{ $patient->email }}</p>
      <h5 class="card-title">Mobile:</h5>
      <p class="card-text">{{ $patient->mobile }}</p>
      <h5 class="card-title">Date of Birth:</h5>
      <p class="card-text">{{ $patient->date_of_birth }}</p>
      <h5 class="card-title">Gender</h5>
      <p class="card-text">{{ $patient->gender }}</p>
      <div class="avatar-upload">
        <div class="avatar-preview">
            @if(!empty($patient->image))
            <div style="background-image: url({{ url('storage/' . $patient->image) }});"></div>
            @else
            <div style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
            @endif
        </div>
    </div>
    </div>
 </div>