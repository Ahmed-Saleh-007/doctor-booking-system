<div class="card">
    <div class="card-body">
        <h5 class="card-title">@lang('admin.name_en'):</h5>
        <p class="card-text">{{ $city->name_en }}</p>
        <h5 class="card-title">@lang('admin.name_ar'):</h5>
        <p class="card-text">{{ $city->name_ar }}</p>
        <h5 class="card-title">@lang('admin.code'):</h5>
        <p class="card-text">{{ $city->code }}</p>
        <h5 class="card-title">@lang('admin.country'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? $city->country->name_en : $city->country->name_ar }}</p>
    </div>
</div>
