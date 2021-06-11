
<script type="text/javascript">
    $("#city_id").change(function(){
        console.log($(this).val());
        if($(this).val() !== '' && $(this).val() !== null){
        $.ajax({
            url: '{{ url('admin/city') }}'+'/'+ $(this).val() + '/district_name/',
            method: 'GET',
            success: function(data) {
                console.log(data);
                // $('#district_id').html(data.html);
                var select = $('#district_id');

                if(data.length == 0){
                    select.empty();
                    select.append('<option value="">' + ' @lang('admin.Choose_One')' + '</option>');
                    select.append('<option value="">' + 'No Districtes' + '</option>');
                }else{
                    select.empty();
                    select.append('<option value="">' + ' @lang('admin.Choose_One')' + '</option>');
                }
                $.each(data,function(key, value) {
                    let name = value.name_en != null ? value.name_en : value.name_ar
                    select.append('<option value=' + value.id + '>' + name + '</option>');
                });
            }
        });
        }else{
        //     var select = $('#district_id');
        //     select.empty();
        // select.append('<option>' + ' @lang('admin.Choose_One')' + '</option>');
         }
    });
</script>
