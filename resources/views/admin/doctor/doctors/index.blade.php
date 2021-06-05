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

<!--
    create modal view using by ajax
-->

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

            {!! Form::open(['id' => 'store_form', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('name_en', trans('admin.name_en')) !!}
                {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name_ar', trans('admin.name_ar')) !!}
                {!! Form::text('name_ar', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', trans('admin.email')) !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', trans('admin.password')) !!}
                {!! Form::password('password', ['class' => 'form-control', 'data-strength' => '']) !!}
                <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
            </div>

            <div class="form-group">
                {!! Form::label('degree', trans('doctor.doctor-degree')) !!}
                {!! Form::select('deg_id', App\Models\DoctorDegree::pluck('name_ar', 'id'), null, ['class' => 'form-control', 'data-strength' => '']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('specialist', trans('doctor.specialist')) !!}
                {!! Form::select('spec_id', App\Models\Specialist::pluck('ar_name', 'id'), null, ['class' => 'form-control', 'data-strength' => '']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('country', trans('doctor.country')) !!}
                {!! Form::select('country_id', App\Models\Country::pluck('name_en', 'id'), null, ['class' => 'form-control', 'data-strength' => '']) !!}
            </div>

            <div class="form-group">
                <h4>{{trans('admin.image')}}</h4>
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload-create" name="image"/>
                        <label for="imageUpload-create">
                            <i class="fa fa-pencil-alt"></i>
                        </label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview-create" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
                    </div>
                </div>
            </div>
            {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>

<!--
    view modal view using by ajax
-->

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

<!--
    edit modal view using by ajax
-->

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

<!--
    delete modal view using by ajax
-->

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

<!--
    delete all modal view using by ajax
-->

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
@include('admin.doctor.doctors.ajax.script')
@endpush
@endsection
