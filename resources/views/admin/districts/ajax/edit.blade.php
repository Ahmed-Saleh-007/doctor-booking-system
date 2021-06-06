<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form']) !!}
    <input type="text" name="id" class="hidden" id="id" value="{{$district->id}}">

    <div class="form-group">
        {!! Form::label('name_en', trans('admin.name_en')) !!}
        {!! Form::text('name_en', $district->name_en, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name_ar', trans('admin.name_ar')) !!}
        {!! Form::text('name_ar', $district->name_ar, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('country_id', trans('admin.country')) !!}
        <div class="form-group country">
            {!! Form::select('country_id', App\Models\Country::pluck('name_' . session('lang'), 'id'), $district->city->country_id, ['placeholder' => trans('admin.country') . '...', 'class' => 'form-control country_id']) !!}
        </div>
    </div>

    <div class="form-group city">
        {!! Form::label('city_id', trans('admin.city')) !!}
        <div class="form-group">
            {!! Form::select('city_id', App\Models\City::where('country_id',$district->city->country_id )->pluck('name_' . session('lang'), 'id'), $district->city_id, ['placeholder' => trans('admin.city') . '...', 'class' => 'form-control']) !!}
        </div>
    </div>

    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
