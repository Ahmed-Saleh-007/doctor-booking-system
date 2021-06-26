@extends('doctor.index')
@section('content')

                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ count(doctor()->user()->addresses) }}</h3>

                                <p>My Clinics</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-user-md"></i>
                            </div>
                            <a href="{{ durl('profile') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ App\Models\Book::where('doctor_id', doctor()->user()->id)->count() }}</h3>

                                <p>My Reservations</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                            <a href="{{ durl('doctor_appointments') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ App\Models\Book::where('doctor_id', doctor()->user()->id)->where('confirm', 1)->count() }}</h3>

                                <p>My Confirmed Reservations</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar-check"></i>
                            </div>
                            <a href="{{ durl('doctor_appointments') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class=" text-center">
                        <!--col-->
                        <section class="col-12">
                            <img src="{{url('/design/adminlte')}}/dist/img/doctor.gif"  class="img-circle"width="270"  alt="User Image">
                        </section>
                        <!--col-->

                        </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->

@endsection
