
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
                                        <button type="button" class="btn btn-primary btn-sm btn-flat" style="border-radius: 3px;" data-toggle="modal" data-target="#exampleModal">Profile</button>
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

        {{-- edit profile modal --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">


                        <div id="ajax_edit_errors"></div>

                        {!! Form::open(['route' => ['admins.edit-profile','admin' => admin()->user()], 'files' => true]) !!}
                        @method('post')
                        <input type="text" name="id" class="hidden" id="id" value="{{isset($admin) ? $admin->id : admin()->user()->id}}">

                        <div class="form-group">
                            {!! Form::label('name_en', trans('admin.name_en')) !!}
                            {!! Form::text('name_en', isset($admin) ? $admin->name_en : admin()->user()->name_en, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name_ar', trans('admin.name_ar')) !!}
                            {!! Form::text('name_ar', isset($admin) ? $admin->name_ar : admin()->user()->name_ar, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', trans('admin.email')) !!}
                            {!! Form::email('email', isset($admin) ? $admin->email : admin()->user()->email, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', trans('admin.password')) !!}
                            {!! Form::password('password', ['class' => 'form-control', 'data-strength' => '']) !!}
                            <h6 id="pass-msg" style="display:none; color:#dd4b39;">{{ trans('admin.password_massage') }}</h6>
                        </div>
                        <div class="form-group">
                            <h4>{{trans('admin.image')}}</h4>
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload-edit" name="image"/>
                                    <label for="imageUpload-edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </label>
                                </div>
                                <div class="avatar-preview">
                                    @if(!empty(isset($admin) ? $admin->image : admin()->user()->image))
                                    <div id="imagePreview-edit" style="background-image: url({{ url('storage/' . (isset($admin) ? $admin->image : admin()->user()->image )) }});"></div>
                                    @else
                                    <div id="imagePreview-edit" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}


                    </div>

                </div>
                </div>
            </div>
            {{-- end of edit profilr modal --}}
