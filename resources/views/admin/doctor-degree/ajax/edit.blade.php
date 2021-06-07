
<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form']) !!}
    <input type="text" name="id" class="hidden" id="id" value="{{$doctor_degree->id}}">
    <div class="form-group">
        {!! Form::label('name_en', trans('admin.name_en')) !!}
        {!! Form::text('name_en', $doctor_degree->name_en, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name_ar', trans('admin.name_ar')) !!}
        {!! Form::text('name_ar', $doctor_degree->name_ar, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', trans('admin.description')) !!}
        {!! Form::text('description', $doctor_degree->description, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
