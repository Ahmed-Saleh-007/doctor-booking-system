<div id="ajax_edit_errors"></div>

{!! Form::open(['id' => 'update_form']) !!}
    <input type="hidden" name="id" id="id" value="{{$doctor_time->id}}">
    <input type="hidden" name="doctor_address_id" value="{{ $doctor_time->doctor_address_id }}">
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
        ], $doctor_time->day, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('from', trans('admin.from')) !!}
        {!! Form::time('from', $doctor_time->from, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('to', trans('admin.to')) !!}
        {!! Form::time('to', $doctor_time->to, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('session_number', trans('admin.session_number')) !!}
        {!! Form::text('session_number', $doctor_time->session_number, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fees', trans('admin.fees')) !!}
        {!! Form::text('fees', $doctor_time->fees, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('doctor_id', trans('admin.doctor')) !!}
        <div class="form-group">
            {!! Form::select('doctor_id', App\Models\Doctor::pluck('name_' . session('lang'), 'id'), $doctor_time->doctor_id, ['placeholder' => trans('admin.doctor') . '...', 'class' => 'form-control']) !!}
        </div>
    </div>

    {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
