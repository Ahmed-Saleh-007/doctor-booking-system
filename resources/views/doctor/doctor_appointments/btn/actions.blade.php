<div style="display:flex">

    <a class="confirm-ajax" data-toggle="modal" data-target="{{ $confirm? '' : '#ajax_confirm' }}" data-ajax="{{$id}}" style="cursor: {{ $confirm? '' : 'pointer' }} ;">
        <i class="fa fa-{{ $confirm? 'check' : 'times' }}" style="opacitytrash: 0.9;font-size: 16px;margin: 0 5px;margin: 0 5px;color:{{ $confirm? '#22bb03' : 'red' }} ;" label="ojd"></i>
    </a>

</div>
