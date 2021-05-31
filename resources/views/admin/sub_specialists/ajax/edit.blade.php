<div id="ajax_edit_errors"></div>
{!! Form::open(['id' => 'update_form', 'files' => true]) !!}
<input type="text" name="id" class="hidden" id="id" value="{{$sub_specialist->id}}">
<div class="form-group">
    {!! Form::label('name_en', trans('admin.name_en')) !!}
    {!! Form::text('en_name', $sub_specialist->en_name, [ 'id' => 'en_name','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
    {!! Form::text('ar_name', $sub_specialist->ar_name, ['id' => 'ar_name','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
    @if (lang() == 'ar')
        <div class="form-group">
            {!! Form::select('spec_id', App\Models\Specialist::pluck('ar_name', 'id'), $sub_specialist->spec_id, ['placeholder' => 'اختار التخصص...']) !!}
        </div>                
    @else
        <div class="form-group">
            {!! Form::select('spec_id', App\Models\Specialist::pluck('en_name', 'id'), $sub_specialist->spec_id, ['placeholder' => 'Pick a Specialist...']) !!}
        </div>
    @endif
</div>
{!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}