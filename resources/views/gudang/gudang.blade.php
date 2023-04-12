<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <div class="container flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <div class="col-xxl">
                <div class="card shadow mb-5">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="mb-2 mt-2 text-dark">
                                    Tambah Data Gudang
                                </h5>
                            </div>
                            <div class="col-4">
                                <div class="d-sm-flex float-end">
                                    <a href='{{ url('barang') }}'
                                        class="d-none d-sm-inline-block btn btn-sm btn-brand shadow-sm"><i
                                            class="bx bx-left-arrow-alt text-white-50"></i>Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="basicicon-default-fullname">Tanggal Datang</label>
                                <input name="tanggal" class="form-control form-control-sm" value=""
                                    type="date" placeholder="" aria-label=".formcontrol-sm example">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Nama Supplier</label>
                                        <input name="namasupplier" class="form-control form-control-sm" value=""
                                            type="text" placeholder="" aria-label=".formcontrol-sm example">
                                    </div>
                                </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="basicicon-default-fullname">Telp</label>
                                            <input name="telpon" class="form-control form-control-sm"
                                                value="" type="number" placeholder=""
                                                aria-label=".formcontrol-sm example">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Alamat</label>
                                        <input name="alamat" class="form-control form-control-sm" value=""
                                            type="text" placeholder="" aria-label=".formcontrol-sm example">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Keterangan</label>
                                        <input name="keterangan" class="form-control form-control-sm" value=""
                                            type="text" placeholder="" aria-label=".formcontrol-sm example">
                                    </div>
                                </div>
                            </div>

                        </form>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Kode</label>
                                        <input name="tanggal" id="tanggal" class="form-control form-control-sm"
                                            type="text" placeholder="" aria-label=".formcontrol-sm example" readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Nama</label>
                                        <input name="namasupplier" id="namasupplier" class="form-control form-control-sm"
                                            value="{{ old('nama') }}" type="text" placeholder=""
                                            aria-label=".formcontrol-sm example" readonly>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Satuan</label>
                                        <input name="satuan" id="satuan"
                                            class="form-control form-control-sm"type="text" placeholder=""
                                            aria-label=".formcontrol-sm example" readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Harga</label>
                                        <input name="harga" id="harga" class="form-control form-control-sm"
                                            type="number" placeholder="" aria-label=".formcontrol-sm example" readonly>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Jumlah</label>
                                        <input name="jumlah" id="jumlah" class="form-control form-control-sm"
                                            type="number" placeholder="" aria-label=".formcontrol-sm example">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="basicicon-default-fullname">Total</label>
                                        <input name="total" id="total" class="form-control form-control-sm"
                                            type="number" placeholder="" aria-label=".formcontrol-sm example">
                                    </div>
                                </div>
                                <div class="col-2 mt-4 float-end">
                                    <div class="">
                                        <label class="form-label" for="basicicon-default-fullname"></label>
                                        <button type="submit" name="simpan"class="btn btn-success float-end">Add</button>
                                    </div>
                                </div>
                            </div>
    
    
    
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
