
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="" class="brand-link">
                    <img src="{{url('/design/adminlte')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">@lang('admin.sitename')</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            @if (!empty(doctor()->user()->image))
                                <img src="{{ url('storage/' . doctor()->user()->image) }}" style="width: 35px; height: 35px;" class="img-circle elevation-2" alt="User Image"/>
                            @else
                                <img src="{{url('/design/adminlte')}}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                            @endif
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @if (lang() == 'en')
                                    {{ doctor()->user()->name_en }}
                                @else
                                    {{ doctor()->user()->name_ar }}
                                @endif
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        {{ trans('admin.dashboard') }}
                                        @if (direction() == 'rtl')
                                            <i class="right fas fa-angle-right"></i>
                                        @else
                                            <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ durl('') }}" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('admin.control_panel') }}</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('doctor.profile') }}" class="nav-link">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>{{ trans('admin.Profile') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

        {{-- @push("js")

            <script>
               //calculate total price of days
                $( document ).ready(function() {

                    // $(document).on('change','#seleted_year',function(){

                    //     var year = $('#seleted_year').val();

                    //     $.ajax({
                    //         url:  "{{ route('clients.statistics') }}",
                    //         type: 'get',
                    //         dataType:'html',
                    //         data: {
                    //             _year: year,
                    //         },
                    //         success: function (data) {
                    //             $('#static_id').html($(data).find('#static_id').html());
                    //             charts.init(year);
                    //         }
                    //     });
                    // });

                    charts.doctor_specialist();
                });
            </script>
        @endpush --}}
