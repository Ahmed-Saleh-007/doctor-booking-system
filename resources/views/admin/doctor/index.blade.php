@extends('admin.index')
@section('pageTitle', trans('admin.doctor'))
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">@lang('admin.Doctor Control')</div>
    </div>
    <div class="card-body">
        {!! Form::open(['id'=>'delete_all','route'=>'doctors.destroyAll','method'=>'delete']) !!}
        {!! $dataTable->table(['class' => 'dataTable table table-striped table-hover table-bordered'], true) !!}
        {!! Form::close() !!}
    </div>
</div>
<!-- Modal -->
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
                    <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.no') }}</button>
                    <input type="submit"  value="{{ trans('admin.yes') }}"  class="btn btn-danger del_all" />
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
{!! $dataTable->scripts() !!}
@endpush

@endsection
