<div class="card">
    <div class="card-body">
        @if (lang() == 'ar') 
        <h5 class="card-title">@lang('admin.name_en'):</h5>
        <p class="card-text">{{ $feedback->doctor->name_ar }}</p>
        <h5 class="card-title">@lang('admin.name_en'):</h5>
        <p class="card-text">{{ $feedback->patient->name_ar }}</p>
        @else
        <h5 class="card-title">@lang('admin.name_en'):</h5>
        <p class="card-text">{{ $feedback->doctor->name_en }}</p>
        <h5 class="card-title">@lang('admin.name_en'):</h5>
        <p class="card-text">{{ $feedback->patient->name_en }}</p>
        @endif
        <h5 class="card-title">@lang('admin.comment'):</h5>
        <p class="card-text">{{ $feedback->comment }}</p>
        <h5 class="card-title">@lang('admin.rate'):</h5>
        <p class="card-text">{{ $feedback->rate }}</p>
    </div>
</div>