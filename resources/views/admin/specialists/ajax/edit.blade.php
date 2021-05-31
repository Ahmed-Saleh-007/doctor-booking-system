<div id="ajax_edit_errors"></div>
{!! Form::open(['id' => 'update_form']) !!}
<input type="text" name="id" class="hidden" id="id" value="{{$specialist->id}}">
<div class="form-group">
{!! Form::label('en_name', trans('admin.name_en')) !!}
{!! Form::text('en_name', $specialist->en_name, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('ar_name', trans('admin.name_ar')) !!}
{!! Form::text('ar_name', $specialist->ar_name, ['class' => 'form-control']) !!}
</div>
{!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
