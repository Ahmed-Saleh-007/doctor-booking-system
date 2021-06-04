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
        {!! Form::label('city_id', trans('admin.city')) !!}
        @if (lang() == 'ar')
            <div class="form-group">
                {!! Form::select('city_id', App\Models\City::pluck('name_ar', 'id'), $district->city_id, ['placeholder' => trans('admin.city') . '...', 'class' => 'form-control']) !!}
            </div>
        @else
            <div class="form-group">
                {!! Form::select('city_id', App\Models\City::pluck('name_en', 'id'), $district->city_id, ['placeholder' => trans('admin.city') . '...', 'class' => 'form-control']) !!}
            </div>
        @endif
    </div>

    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
