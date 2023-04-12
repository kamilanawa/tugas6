<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>PWL.</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="container flex-grow-1 container-p-y">
        <div class="row pt-5 mt-2 mb-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card shadow-lg rgba($black, .15) p-4">
                    <h3 class="text-center mb-3">Registrasi</h3>
                    <form action="{{ url('postregistrasi') }}" method="post">
                        {{ csrf_field() }}
                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example1">Nama</label>
                            <input type="text" id="form2Example1" name="name" class="form-control" />
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example1">Alamat</label>
                            <input type="text" id="form2Example1" name="alamat" class="form-control" />
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example1">Telp</label>
                            <input type="number" id="form2Example1" name="telp" class="form-control" />
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example1">Jenis Kelamin</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin"
                                            id="flexRadioDefault1" value="laki-laki">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin"
                                            id="flexRadioDefault1" value="perempuan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example1">Role</label>
                            <select id="role" name="role" class="form-select">
                                <option value="admin">Admin</option>
                                <option value="opeator">operator</option>
                                <option value="gudang">Gudang</option>
                            </select>
                        </div> --}}

                        <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example1">Email</label>
                            <input type="email" id="form2Example1" name="email" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label text-dark" for="form2Example2">Password</label>
                            <input type="password" id="form2Example2" name="password" class="form-control" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="kirim"
                            class="d-none d-sm-inline-block btn btn-sm btn-brand shadow-sm float-end">Sign Up</button>

                        <!-- Register buttons -->
                        <div class="text-left">
                            <p>You have member? <a href="{{ url('login') }}">Login</a></p>
                            {{-- <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button> --}}
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>
