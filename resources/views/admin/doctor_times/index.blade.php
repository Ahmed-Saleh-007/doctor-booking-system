@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">{{$title}}</div>
    </div>
    <div class="card-body">
        {!! $dataTable->table(['class' => 'dataTable table table-striped table-hover table-bordered'], true) !!}
    </div>
</div>

<!-- view modal view using by ajax -->
<div id="ajax_view" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_view_content">

            </div>
        </div>
    </div>
</div>

<!-- edit modal view using by ajax -->
<div id="ajax_edit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_edit_content">

            </div>
        </div>
    </div>
</div>

<!-- delete modal view using by ajax -->
<div id="ajax_delete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_delete_content">
                @csrf
                <h4 class="mb-3">{{ trans('admin.delete_this') }}</h4>
                <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.no') }}</button>
                <button class="btn btn-danger" id="delete" >Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- delete all modal view using by ajax -->
<div id="mutlipleDelete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <div class="empty_record hidden">
                        <h4>{{ trans('admin.please_check_some_records') }} </h4>
                    </div>
                    <div class="not_empty_record hidden">
                        <h4>{{ trans('admin.ask_delete_itme') }} <span class="record_count"></span> ? </h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="empty_record hidden">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.close') }}</button>
                </div>
                <div class="not_empty_record hidden">
                    @csrf
                    <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.no') }}</button>
                    <button class="btn btn-danger" id="ajax_delete_all" >{{ trans('admin.yes') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- create modal view using by ajax -->
<div id="ajax_create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{trans('admin.add')}}</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body" id="ajax_create_content">

                <div id="ajax_create_errors"></div>

                {!! Form::open(['id' => 'store_form']) !!}

                <input type="hidden" name="doctor_address_id" value="{{ request('doctor_address_id') }}">
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
                    ], old('day'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('from', trans('admin.from')) !!}
                    {!! Form::time('from', old('from'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('to', trans('admin.to')) !!}
                    {!! Form::time('to', old('to'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('session_number', trans('admin.session_number')) !!}
                    {!! Form::text('session_number', old('session_number'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fees', trans('admin.fees')) !!}
                    {!! Form::text('fees', old('fees'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('doctor_id', trans('admin.doctor')) !!}
                    <div class="form-group">
                        {!! Form::select('doctor_id', App\Models\Doctor::pluck('name_' . session('lang'), 'id'), old('doctor_id'), ['placeholder' => trans('admin.doctor') . '...', 'class' => 'form-control']) !!}
                    </div>
                </div>

                {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@push('js')

{!! $dataTable->scripts() !!}

@include('admin.doctor_times.ajax.script')

@endpush

@endsection
