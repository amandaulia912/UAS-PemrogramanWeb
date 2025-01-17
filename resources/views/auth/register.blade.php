<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{url('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url('AdminLTE/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{url('AdminLTE/css/sb-admin-2.min.css') }}">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{ route('register-proses') }}" method="post">
                                @csrf
                            <div class="form-group">
                                    <input type="nama" name="nama" class="form-control form-control-user" placeholder="Nama Lengkap" value="{{ old('nama')}}">
                                </div>
                                @error('email')
                                    <small>{{ $message }}</small>
                                 @enderror
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" placeholder="Masukan Email" value="{{ old('email')}}">
                                </div>
                                @error('email')
                                    <small>{{ $message }}</small>
                                 @enderror
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Masukan Password" value="{{ old('password')}}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('AdminLTE/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{url('AdminLTE/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('AdminLTE/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('AdminLTE/js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($message = Session::get('succes'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
@endif

@if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
@endif

</body>

</html>