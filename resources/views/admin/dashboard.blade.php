@extends('admin.index')
@section('pageTitle', trans('admin.dashboard'))
@section('content')
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ App\Models\Doctor::count() }}</h3>

                            <p>Doctors</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-user-md"></i>
                        </div>
                        <a href="{{ aurl('doctors') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ App\Models\Patient::count() }}</h3>

                            <p>Patients</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="{{ aurl('patients') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ App\Models\Book::count() }}</h3>

                            <p>Reservations</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar-alt"></i>
                        </div>
                        <a href="{{ aurl('books') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ App\Models\Book::where('confirm', 1)->count() }}</h3>

                            <p>Confirmed Reservations</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar-check"></i>
                        </div>
                        <a href="{{ aurl('books') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
