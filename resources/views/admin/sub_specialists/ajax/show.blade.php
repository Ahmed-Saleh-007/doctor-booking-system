<div class="card">
    <div class="card-body">
      <h5 class="card-title">@lang('admin.name_en'):</h5>
      <p class="card-text">{{ $sub_specialist->name_en }}</p>
      <h5 class="card-title">@lang('admin.name_ar'):</h5>
      <p class="card-text">{{ $sub_specialist->name_ar }}</p>
      <h5 class="card-title">Main Specialist:</h5>
      @if (lang() == 'ar')
        <p class="card-text">{{ $sub_specialist->specialist->name_ar }}</p>  
      @else
        <p class="card-text">{{ $sub_specialist->specialist->name_en }}</p>  
      @endif
    </div>
</div>