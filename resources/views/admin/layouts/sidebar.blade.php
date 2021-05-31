
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
                                        <a href="{{ aurl('') }}" class="nav-link active">
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
                                <a href="#" class="nav-link">
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
                                <a href="#" class="nav-link">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                    <p>
                                        Specailists
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
                                            <p> Specailists </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ aurl('sub-specialists') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Sub Specailists </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Countries Dashboard -->
                            <li class="nav-item">
                                <a href="{{ aurl('countries') }}" class="nav-link">
                                    <i class="far fa-flag nav-icon"></i>
                                    <p>{{ trans('admin.countries') }}</p>
                                </a>
                            </li>

                            <!-- Doctors Dashboard -->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        {{ trans('doctor.doctor') }}
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
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
