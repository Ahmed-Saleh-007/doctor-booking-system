<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form', 'files' => true]) !!}
<input type="text" name="id" class="hidden" id="id" value="{{$doctor->id}}">
<div class="form-group">
    {!! Form::label('name_en', trans('admin.name_en')) !!}
    {!! Form::text('name_en', $doctor->name_en, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name_ar', trans('admin.name_ar')) !!}
    {!! Form::text('name_ar', $doctor->name_ar, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', trans('admin.email')) !!}
    {!! Form::email('email', $doctor->email, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', trans('admin.password')) !!}
    {!! Form::password('password', ['class' => 'form-control', 'data-strength' => '']) !!}
    <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
</div>
<div class="form-group">
    {!! Form::label('specialist', trans('doctor.specialist')) !!}
    {!! Form::select('spec_id', App\Models\Specialist::pluck('ar_name', 'id'), $doctor->specialist->ar_name, ['class' => 'form-control', 'data-strength' => '']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', trans('doctor.country')) !!}
    {!! Form::select('country_id', App\Models\Country::pluck('name_en', 'id'), $doctor->country->name_en, ['class' => 'form-control', 'data-strength' => '']) !!}
</div>
<div class="form-group">
    {!! Form::label('degree', trans('doctor.degree')) !!}
    {!! Form::select('deg_id', App\Models\DoctorDegree::pluck('name_ar', 'id'), $doctor->degree->name_ar, ['class' => 'form-control', 'data-strength' => '']) !!}
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
            @if(!empty($doctor->image))
            <div id="imagePreview-edit" style="background-image: url({{ url('storage/' . $doctor->image) }});"></div>
            @else
            <div id="imagePreview-edit" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
            @endif
        </div>
    </div>
</div>
{!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}