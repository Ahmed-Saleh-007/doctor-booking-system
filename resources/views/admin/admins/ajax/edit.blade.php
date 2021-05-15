<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form', 'files' => true]) !!}
<input type="text" name="id" class="hidden" id="id" value="{{$admin->id}}">
<div class="form-group">
    {!! Form::label('name_en', trans('admin.name_en')) !!}
    {!! Form::text('name_en', $admin->name_en, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
    {!! Form::text('name_ar', $admin->name_ar, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', trans('admin.email')) !!}
    {!! Form::email('email', $admin->email, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', trans('admin.password')) !!}
    {!! Form::password('password', ['class' => 'form-control', 'data-strength' => '']) !!}
    <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
</div>
<div class="form-group">
    <h4>{{trans('admin.image')}}</h4>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload-edit" name="image"/>
            <label for="imageUpload-edit">
                <i class="fa fa-pencil-alt"></i>
            </label>
        </div>
        <div class="avatar-preview">
            @if(!empty($admin->image))
            <div id="imagePreview-edit" style="background-image: url({{ Storage::url($admin->image) }});"></div>
            @else
            <div id="imagePreview-edit" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
            @endif
        </div>
    </div>
</div>
{!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
