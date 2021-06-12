
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
                            @if (!empty(admin()->user()->image))
                                <img src="{{ url('storage/' . admin()->user()->image) }}" style="width: 35px; height: 35px;" class="img-circle elevation-2" alt="User Image"/>
                            @else
                                <img src="{{url('/design/adminlte')}}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                            @endif
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @if (lang() == 'en')
                                    {{ admin()->user()->name_en }}
                                @else
                                    {{ admin()->user()->name_ar }}
                                @endif
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link {{ request()->is('admin') || request()->is('admin/settings') ? 'active' : '' }}">
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
                                        <a href="{{ aurl('') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('admin.control_panel') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ aurl('settings') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('admin.settings') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link {{ request()->is('admin/admins') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        {{ trans('admin.admins') }}
                                        @if (direction() == 'rtl')
                                        <i class="right fas fa-angle-right"></i>
                                        @else
                                        <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ aurl('admins') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('admin.admin') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Spcailists and Sub Specialists Dashboard -->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link {{ request()->is('admin/specialists') || request()->is('admin/sub-specialists') ? 'active' : '' }}">
                                    <i class="fa fa-stethoscope nav-icon"></i>
                                    <p>
                                         {{ trans('doctor.specialists')}}
                                        @if (direction() == 'rtl')
                                            <i class="right fas fa-angle-right"></i>
                                        @else
                                            <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ aurl('specialists') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                {{ trans('doctor.specialists')}}
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ aurl('sub-specialists') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                {{ trans('doctor.sub-specialists')}}
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link {{ request()->is('admin/c*') || request()->is('admin/districts') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-flag"></i>
                                    <p>
                                        {{ trans('admin.countries') . '/' . trans('admin.cities') }}
                                        @if (direction() == 'rtl')
                                        <i class="right fas fa-angle-right"></i>
                                        @else
                                        <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!-- Countries Dashboard -->
                                    <li class="nav-item">
                                        <a href="{{ aurl('countries') }}" class="nav-link">
                                            <i class="far fa-flag nav-icon"></i>
                                            <p>{{ trans('admin.countries') }}</p>
                                        </a>
                                    </li>

                                    <!-- Cities Dashboard -->
                                    <li class="nav-item">
                                        <a href="{{ aurl('cities') }}" class="nav-link">
                                            <i class="far fa-flag nav-icon text-green"></i>
                                            <p>{{ trans('admin.cities') }}</p>
                                        </a>
                                    </li>

                                    <!-- Districts Dashboard -->
                                    <li class="nav-item">
                                        <a href="{{ aurl('districts') }}" class="nav-link">
                                            <i class="far fa-flag nav-icon text-orange"></i>
                                            <p>{{ trans('admin.districts') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <!-- Doctors Dashboard -->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link {{ request()->is('admin/doctor*') ? 'active' : '' }}">
                                    <i class="fas fa-user-md nav-icon"></i>
                                    <p>
                                        {{ trans('doctor.doctors') }}
                                        @if (direction() == 'rtl')
                                        <i class="right fas fa-angle-right"></i>
                                        @else
                                        <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ aurl('doctor-degree') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('doctor.doctor-degree') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ aurl('doctors') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('doctor.doctor') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                            <!-- Patients Dashboard -->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link {{ request()->is('admin/patient*') ? 'active' : '' }} ">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        {{ trans('patient.patients') }}
                                        @if (direction() == 'rtl')
                                        <i class="right fas fa-angle-right"></i>
                                        @else
                                        <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ aurl('patients') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ trans('patient.patient') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <!-- Feedback Dashboard -->
                            <li class="nav-item has-treeview">
                                <a href="{{aurl('feedbacks')}}" class="nav-link {{ request()->is('admin/feedbacks') ? 'active' : '' }}">
                                    <i class="fas fa-comments nav-icon"></i>
                                    <p>{{ trans('admin.feedback') }}</p>
                                </a>
                            </li>

                            <!-- Doctor Time Dashboard -->
                            <li class="nav-item has-treeview">
                                <a href="{{aurl('doctor_times')}}" class="nav-link">
                                    <i class="fas fa-comments"></i>
                                    <p>
                                        {{ trans('admin.doctor_times') }}
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
