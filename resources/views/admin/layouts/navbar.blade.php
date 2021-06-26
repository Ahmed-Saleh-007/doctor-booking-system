
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">@lang('admin.Home')</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" id="btnFullscreen" class="nav-link"><i class="fas fa-expand"></i></a>
                    </li>

                    <!-- lang setting-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-globe"></i>
                            <span class="">{{lang()}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"style="width:auto;">
                            <a class="dropdown-item" href="{{ url('lang/ar') }}"><i class="fa fa-flag"></i> عربى</a>
                            <a class="dropdown-item" href="{{ url('lang/en') }}"><i class="fa fa-flag"></i> English</a>
                        </div>
                    </li>
                    <!-- User Account -->
                    <li class="nav-item dropdown user user-menu">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            @if (!empty(admin()->user()->image))
                                <img src="{{ url('storage/' . admin()->user()->image) }}" style="width: 35px; height: 35px;" class="img-circle" alt="User Image"/>
                            @else
                                <img src="{{url('/design/adminlte')}}/dist/img/avatar5.png" style="width: 35px; height: 35px;" class="img-circle" alt="User Image">
                            @endif
                        <span class="hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header">
                                @if (!empty(admin()->user()->image))
                                    <img src="{{ url('storage/' . admin()->user()->image) }}" style="width: 35px; height: 35px;" class="img-circle" alt="User Image"/>
                                @else
                                    <img src="{{url('/design/adminlte')}}/dist/img/avatar5.png" style="width: 35px; height: 35px;" class="img-circle" alt="User Image">
                                @endif
                                <p>
                                    @if (lang() == 'en')
                                    {{ admin()->user()->name_en }}
                                    @else
                                    {{ admin()->user()->name_ar }}
                                    @endif
                                    <small>@lang('admin.Member Since') {{admin()->user()->created_at->format('d/m/Y')}}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <button class="edit-ajax btn btn-primary btn-sm btn-flat" style="border-radius: 3px;" data-toggle="modal" data-target="#ajax_edit" data-ajax="{{ admin()->user()->id }}">Profile</button>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <a href="{{aurl('logout')}}" class="btn btn-primary btn-flat">@lang('admin.Logout')</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
