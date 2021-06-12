<script type="text/javascript">

    $("#country_n").change(function(){
        if($(this).val() !== '' && $(this).val() !== null){
        $.ajax({
            url:'{{ url('admin/country') }}'+'/'+ $(this).val() + '/city_name/',
            method: 'GET',
            success: function(data) {
                console.log(data);
                // $('#city_id').html(data);
                var select = $('#city_id');
                if(data.length == 0){
                    select.empty();
                    select.append('<option value="">' + ' @lang('admin.Choose_One')' + '</option>');
                    select.append('<option value="">' + 'No Cities' + '</option>');
                }else{
                    select.empty();
                    select.append('<option value="">' + ' @lang('admin.Choose_One')' + '</option>');
                }
                $.each(data,function(key, value) {
                    let name = value.name_en != null ? value.name_en : value.name_ar
                    select.append('<option value=' + value.id + '>' + name + '</option>')

                });
            }
        });
        }else{
            // var select = $('#city_id');
            // select.append('<option>' + ' @lang('admin.Choose_One')' + '</option>');
        }
    });
</script>
