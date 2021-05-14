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
                {!! Form::text('name_en', old('name_en'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name_ar', trans('admin.name_ar')) !!}
                {!! Form::text('name_ar', old('name_ar'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', trans('admin.email')) !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', trans('admin.password')) !!}
                {!! Form::password('password', ['class' => 'form-control', 'data-strength' => '']) !!}
                <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
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

<script>


    //========================//
    // AJAX handler for store //
    //========================//
    $(document).ready(function(){   
        $('.ajax-create').attr("data-toggle", "modal");
        $('.ajax-create').attr("data-target", "#ajax_create");
        $('#store_form').on('submit', function(event){
            event.preventDefault();     
            $.ajax({
                url:"{{route('admin.admins.store')}}",
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success: function (data) {
                    toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});
                    clearFields();
                    $('.buttons-reload').trigger("click");
                    $('#ajax_create').modal('toggle');
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                    var errorsHtml = '<div class="alert alert-danger"><ul class="mb-0">';
                    $.each( errors.errors, function( key, value ) {
                        errorsHtml += '<li>'+ value[0] + '</li>';
                    });
                    errorsHtml += '</ul></div>';
                    $('#ajax_create_content #ajax_create_errors').html(errorsHtml);
                }
                
            });//end of ajax request
            
        });
    });

    //////////////////////////
    // Ajax handler for show//
    //////////////////////////
    $(document).ready(function () {
      $(document).on('click', '.show-ajax', function () {
        $.ajax({
            url:  '{{aurl("")}}/admins/' + $(this).data('ajax'),
            type: 'get',
            success: function (data) {
              $('#ajax_view_content').html(data);
            }
        });
      });
    });

    //////////////////////////
    // Ajax handler for edit//
    //////////////////////////
    $(document).ready(function () {
        $(document).on('click', '.edit-ajax', function () {
            console.log($(this).data('ajax'));
            $.ajax({
                url:  '{{aurl("")}}/admins/' + $(this).data('ajax') + '/edit',
                type: 'get',
                success: function (data) {
                    $('#ajax_edit_content').html(data);
                }
            });
        });
    });

    //==========================//
    // AJAX handler for update //
    //=========================// 
    $(document).ready(function(){  
        $(document).on('submit', '#update_form', function(event){
            event.preventDefault();
            console.log(new FormData(this)); 
            $.ajax({
                url: '{{aurl("")}}/admins/' + $('#ajax_edit_content #id').val() + '/update',
                method:"post",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success: function (data) {
                    toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});
                    $('.buttons-reload').trigger("click");
                    $('#ajax_edit').modal('toggle');
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                    var errorsHtml = '<div class="alert alert-danger"><ul class="mb-0">';
                    $.each( errors.errors, function( key, value ) {
                        errorsHtml += '<li>'+ value[0] + '</li>';
                    });
                    errorsHtml += '</ul></div>';
                    $('#ajax_edit_content #ajax_edit_errors').html(errorsHtml);
                }
                
            });//end of ajax request
            
        });
    });

    ////////////////////////////
    // Ajax handler for delete//
    ////////////////////////////
    $(document).ready(function () {
        var _id = 0;
        $(document).on('click', '.delete-ajax', function () {
            console.log($(this).data('ajax'));
            _id = $(this).data('ajax');
        });
        $(document).on('click', '#ajax_delete_content #delete', function () {
            $.ajax({
                url:  '{{aurl("")}}/admins/' + _id,
                type: 'delete',
                data: {
                    _token: $('#ajax_delete_content [name=_token]').val(),
                },
                success: function (data) {
                    toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});
                    $('#ajax_delete').modal('toggle');
                    $('.buttons-reload').trigger("click");
                }
            });
        });
    });

    ////////////////////////////////
    // Ajax handler for delete all//
    ////////////////////////////////
    $(document).ready(function () {
        $(document).on('click', '#ajax_delete_all', function () {
            var items = [];
            $.each($(".item_checkbox[name='item[]']:checked"), function() {
                items.push($(this).val());
            });
            $.ajax({
                url:  '{{route('admin.admins.destroyAll')}}',
                type: 'delete',
                data: {
                    _token: $('#mutlipleDelete [name=_token]').val(),
                    item: items
                },
                success: function (data) {
                    toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});
                    $('#mutlipleDelete').modal('toggle');
                    $('.buttons-reload').trigger("click");
                }
            });
        });
    });


    //=========clear fields function=========//
    function clearFields() {
        $('#ajax_create_content #name_en').val('');
        $('#ajax_create_content #name_ar').val('');
        $('#ajax_create_content #email').val('');
        $('#ajax_create_content #password').val('');
        $('#ajax_create_content #ajax_create_errors').html('');   
    }



</script>
@endpush

@endsection
