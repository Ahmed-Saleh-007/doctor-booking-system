
<div class="container">


    <span id="statistics_id">
        <div class="row  mt-4">
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-2 w-100">@lang('admin.doctors_specialists')</h5>
                        <canvas id="myChart_1" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 mb-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-2 w-100">@lang('admin.doctors_revenue')</h5>
                        <select id="seleted_year" class="custom-select text-center mb-3">
                            <option selected>Select Year</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021" selected>2021</option>
                            <option value="2022">2022</option>
                        </select>
                        <canvas id="myChart_2" class="w-100 h-100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </span>
</div>




@push("js")

<script>
   //calculate total price of days
   $( document ).ready(function() {
       $(document).on('change','#seleted_year',function(){
           var year = $('#seleted_year').val();
            console.log("year",year);

            charts.doctor_revenue(year);
        });
    });
</script>
@endpush








