<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>{{ trans('admin.login')}}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('') }}/design/adminlte/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ url('') }}/design/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('') }}/design/adminlte/dist/css/adminlte.min.css">
        <!-- custom style -->
        <link rel="stylesheet" href="{{ url('') }}/design/adminlte/dist/css/custom_admin_form.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        
        
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{route('admin.dashboard')}}"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">{{ trans('admin.forgot_password')}}</p>
                @if(session()->has('success'))
                <h4 class="alert alert-success">{{ session('success') }}</h4>
                @endif
                <form method="post">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" id="email" autocomplete="off">
                        <label for="email">Email</label>
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                    </div>
                      
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{ aurl('login')}}" class="forget">Sign In</a><br>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="{{ url('') }}/design/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('') }}/design/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('') }}/design/adminlte/dist/js/adminlte.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
        <script>
            $(".input-group input").change(function() {
                if ($(this).val() != "") {
                    $(this).addClass('filled');
                } else {
                    $(this).removeClass('filled');
                }
            });
        </script>
    </body>
</html>
