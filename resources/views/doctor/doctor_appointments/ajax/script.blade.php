<script>

    //////////////////////////
    // Ajax handler for show//
    //////////////////////////
    $(document).ready(function () {
        $(document).on('click', '.show-ajax', function () {
            alert($(this).data('ajax'));
            $.ajax({
                url:  '{{durl("")}}/doctor_appointments/' + $(this).data('ajax'),
                type: 'get',
                success: function (data) {
                    $('#ajax_view_content').html(data);
                }
            });
        });
    });

    ////////////////////////////
    // Ajax handler for confirmation appointment//
    ////////////////////////////
    $(document).ready(function () {
        var _id = 0;
        $(document).on('click', '.confirm-ajax', function () {
            _id = $(this).data('ajax');
        });
        $(document).on('click', '#ajax_confirm_content #confirm', function () {
            $.ajax({
                url:  '{{durl("")}}/doctor_appointments/confirm/' + _id,
                type: 'post',
                data: {
                    _token: $('#ajax_confirm_content [name=_token]').val(),
                },
                success: function (data) {
                    toastr.success(data.success, 'Success Alert', {timeOut: 10000, closeButton: true, progressBar: true});
                    $('#ajax_confirm').modal('toggle');
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
                url:  '{{route('doctor_appointments.destroyAll')}}',
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
        $('#ajax_create_content #ajax_create_errors').html('');
    }

</script>
