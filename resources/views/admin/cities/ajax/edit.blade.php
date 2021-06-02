<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form']) !!}
    <input type="text" name="id" class="hidden" id="id" value="{{$city->id}}">
    <div class="form-group">
        {!! Form::label('name_en', trans('admin.name_en')) !!}
        {!! Form::text('name_en', $city->name_en, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name_ar', trans('admin.name_ar')) !!}
        {!! Form::text('name_ar', $city->name_ar, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('code', trans('admin.code')) !!}
        {!! Form::text('code', $city->code, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('country_id', trans('admin.country')) !!}
        @if (lang() == 'ar')
            <div class="form-group">
                {!! Form::select('country_id', App\Models\Country::pluck('name_ar', 'id'), $city->country_id, ['placeholder' => trans('admin.country') . '...', 'class' => 'form-control']) !!}
            </div>
        @else
            <div class="form-group">
                {!! Form::select('country_id', App\Models\Country::pluck('name_en', 'id'), $city->country_id, ['placeholder' => trans('admin.country') . '...', 'class' => 'form-control']) !!}
            </div>
        @endif
    </div>

    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
