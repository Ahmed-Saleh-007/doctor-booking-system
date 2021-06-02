<div class="card">
    <div class="card-body">
        <h5 class="card-title">@lang('admin.name_en'):</h5>
        <p class="card-text">{{ $district->name_en }}</p>
        <h5 class="card-title">@lang('admin.name_ar'):</h5>
        <p class="card-text">{{ $district->name_ar }}</p>
        <h5 class="card-title">@lang('admin.city'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? $district->city->name_en : $district->city->name_ar }}</p>
        <h5 class="card-title">@lang('admin.country'):</h5>
        <p class="card-text">{{ session('lang') == 'en' ? App\Models\City::find($district->city_id)->country->name_en : App\Models\City::find($district->city_id)->country->name_ar }}</p>
    </div>
</div>
