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
                url:"{{route('doctors.store')}}",
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
            url:  '{{aurl("")}}/doctors/' + $(this).data('ajax'),
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
                url:  '{{aurl("")}}/doctors/' + $(this).data('ajax') + '/edit',
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
                url: '{{aurl("")}}/doctors/' + $('#ajax_edit_content #id').val() + '/update',
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
                url:  '{{aurl("")}}/doctors/' + _id,
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
                url:  '{{route('doctors.destroyAll')}}',
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
        $('#ajax_create_content #imageUpload-create').val('');
        //$('#ajax_create_content #imagePreview-create').css('backgroundImage', 'url({{ url("/design/adminlte/dist/img/avatar5.png")}});')
        $('#ajax_create_content #ajax_create_errors').html('');   
    }
</script>