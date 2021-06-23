<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form']) !!}

    <input type="text" name="id" class="hidden" id="id" value="{{$book->id}}">
    <div class="form-group">
        {!! Form::label('doctor_id', trans('admin.doctor_id')) !!}
        {!! Form::select('doctor_id',App\Models\Doctor::pluck('name_'.session('lang'), 'id'), $book->doctor_id, ['class' => 'form-control doctor_id']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address_id', trans('admin.address_id')) !!}
        {!! Form::select('address_id',App\Models\DoctorAddress::where('doctor_id', $book->doctor_id)->pluck('address_'.session('lang'), 'id'), $book->address_id, ['class' => 'form-control address', 'placeholder'=>'...']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('patient_id', trans('admin.patient_id')) !!}
        {!! Form::select('patient_id',App\Models\Patient::pluck('name_'.session('lang'), 'id'), $book->patient_id, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('day', trans('admin.day')) !!}
        {!! Form::select('day',[
            'SATURDAY'  => trans('admin.saturday'),
            'SUNDAY'    => trans('admin.sunday'),
            'MONDAY'    => trans('admin.monday'),
            'TUESDAY'   => trans('admin.thursday'),
            'WEDNESDAY' => trans('admin.wednesday'),
            'THURSDAY'  => trans('admin.thursday'),
            'FRIDAY'    => trans('admin.friday') ,
        ], $book->day, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fees', trans('admin.fees')) !!}
        {!! Form::text('fees', $book->fees, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('date', trans('admin.date')) !!}
        {!! Form::date('date', $book->date, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('time', trans('admin.time')) !!}
        {!! Form::time('time', $book->time, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="confirm" {{ $book->confirm ? 'checked' : '' }}>
        <label class="form-check-label" for="exampleCheck1">{{ trans('admin.confirmed') }}</label>
    </div>

    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
