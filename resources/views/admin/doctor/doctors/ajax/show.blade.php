<div class="card">
    <div class="card-body">
      <h5 class="card-title">@lang('admin.name_en'):</h5>
      <p class="card-text">{{ $doctor->name_en }}</p>
      <h5 class="card-title">@lang('admin.name_ar'):</h5>
      <p class="card-text">{{ $doctor->name_ar }}</p>
      <h5 class="card-title">@lang('admin.email'):</h5>
      <p class="card-text">{{ $doctor->email }}</p>
      <div class="avatar-upload">
        <div class="avatar-preview">
            @if(!empty($doctor->image))
            <div style="background-image: url({{ url('storage/' . $admin->image) }});"></div>
            @else
            <div style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
            @endif
        </div>
    </div>
    </div>
 </div>