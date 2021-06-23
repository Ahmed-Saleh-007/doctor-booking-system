<div class="card">
    <div class="card-body">

        <h5 class="card-title">@lang('admin.doctor'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? $book->doctor->name_en : $book->doctor->name_ar }}</p>

        <h5 class="card-title">@lang('admin.address'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? $book->address->address_en : $book->address->address_ar }}</p>

        <h5 class="card-title">@lang('admin.patient'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? $book->patient->name_en : $book->patient->name_ar }}</p>

        <h5 class="card-title">@lang('admin.day'):</h5>
        <p class="card-text">{{ $book->day }}</p>

        <h5 class="card-title">@lang('admin.fees'):</h5>
        <p class="card-text">{{ $book->fees }}</p>

        <h5 class="card-title">@lang('admin.confirm'):</h5>
        <p class="card-text">{{ $book->confirm }}</p>

        <h5 class="card-title">@lang('admin.date'):</h5>
        <p class="card-text">{{ $book->date }}</p>

        <h5 class="card-title">@lang('admin.time'):</h5>
        <p class="card-text">{{ $book->time }}</p>

    </div>
</div>
