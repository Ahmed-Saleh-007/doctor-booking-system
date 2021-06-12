<div id="ajax_edit_errors"></div>
{!! Form::open(['id' => 'update_form', 'files' => true]) !!}
<input type="text" name="id" class="hidden" id="id" value="{{$sub_specialist->id}}">
<div class="form-group">
    {!! Form::label('name_en', trans('admin.name_en')) !!}
    {!! Form::text('en_name', $sub_specialist->name_en, [ 'id' => 'name_en','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
    {!! Form::text('ar_name', $sub_specialist->name_ar, ['id' => 'name_ar','class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
        {!! Form::select('spec_id', App\Models\Specialist::pluck('name_'.session('lang'), 'id'), $sub_specialist->spec_id, ['placeholder' => trans('admin.specialist') , 'class' => 'form-control']) !!}

</div>
{!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
