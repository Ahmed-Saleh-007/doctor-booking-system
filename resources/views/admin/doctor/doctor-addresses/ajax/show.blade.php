
<div class="card">
    <div class="card-body">
        <h5 class="card-title">@lang('admin.address_en'):</h5>
        <p class="card-text">{{ $doctor_address->address_en }}</p>
        <h5 class="card-title">@lang('admin.address_ar'):</h5>
        <p class="card-text">{{ $doctor_address->address_ar }}</p>
        <h5 class="card-title">@lang('doctor.fees'):</h5>
        <p class="card-text">{{ $doctor_address->fees }}</p>
        <h5 class="card-title">@lang('doctor.name_en'):</h5>
        <p class="card-text">{{ $doctor_address->doctor->name_en }}</p>
        <h5 class="card-title">@lang('doctor.name_ar'):</h5>
        <p class="card-text">{{ $doctor_address->doctor->name_ar }}</p>
        <h5 class="card-title">@lang('admin.district'):</h5>
        <p class="card-text">{{ $doctor_address->district->name_en }}</p>
    </div>
</div>
