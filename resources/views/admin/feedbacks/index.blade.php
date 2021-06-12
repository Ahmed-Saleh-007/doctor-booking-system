@extends('admin.index')
@section('pageTitle', trans('admin.feedback'))
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

@push('js')

{!! $dataTable->scripts() !!}

@include('admin.feedbacks.ajax.script')

@endpush

@endsection
