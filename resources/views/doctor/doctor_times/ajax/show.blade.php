<div class="card">
    <div class="card-body">

        <h5 class="card-title">@lang('admin.day'):</h5>
        <p class="card-text">{{ $doctor_time->day }}</p>

        <h5 class="card-title">@lang('admin.from'):</h5>
        <p class="card-text">{{ $doctor_time->from }}</p>

        <h5 class="card-title">@lang('admin.to'):</h5>
        <p class="card-text">{{ $doctor_time->to }}</p>

        <h5 class="card-title">@lang('admin.fees'):</h5>
        <p class="card-text">{{ $doctor_time->fees }}</p>

        <h5 class="card-title">@lang('admin.session_number'):</h5>
        <p class="card-text">{{ $doctor_time->session_number }}</p>

        <h5 class="card-title">@lang('admin.doctor'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? $doctor_time->doctor->name_en : $doctor_time->doctor->name_ar }}</p>

    </div>
</div>
