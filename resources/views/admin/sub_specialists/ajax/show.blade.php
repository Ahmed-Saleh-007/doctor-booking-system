<div class="card">
    <div class="card-body">
      <h5 class="card-title">@lang('admin.name_en'):</h5>
      <p class="card-text">{{ $sub_specialist->en_name }}</p>
      <h5 class="card-title">@lang('admin.name_ar'):</h5>
      <p class="card-text">{{ $sub_specialist->ar_name }}</p>
      <h5 class="card-title">Main Specialist:</h5>
      @if (lang() == 'ar')
        <p class="card-text">{{ $sub_specialist->specialist->ar_name }}</p>  
      @else
        <p class="card-text">{{ $sub_specialist->specialist->en_name }}</p>  
      @endif
    </div>
</div>