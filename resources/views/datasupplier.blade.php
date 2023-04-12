@extends('main')
@section('content')

<body>
    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>
    <div class="container flex-grow-1 container-p-y">
        <div class="row mb-4">
            <div class="col-4">
                <input type="text" class="form-control form-control-sm" id="cari" name="cari">
            </div>
            <div class="col-8">
                <button class="btn btn-outline-warning btn-sm" onclick="MyCari()">Cari</button>
                <button class="btn btn-secondary btn-sm ms-3" onclick="BatalCari()">Batal</button>
            </div>
        </div>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <div class="col-xxl">
                <div class="card shadow mb-5">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="mb-2 mt-2 text-dark mr-4 ">
                                    Daftar Data Supplier
                                </h5>
                            </div>
                            <div class="col-4">
                                <div class="d-sm-flex float-end">
                                    <button id="tambah" class="d-none d-sm-inline-block btn btn-sm btn-brand shadow-sm " onclick="window.location.href='{{ url()->current()}}/tambah';">Tambah</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        @if(session('status'))
                        <div class="alert alert-success"> 
                            {{session('status')}}
                        </div>
                        @endif
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Telp</th>
                                        <th>Keterangan</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($supplier as $row)
                                    <tr>
                                        <td>{{$row->kodesup}}</td>
                                        <td>{{$row->namasup}}</td>
                                        <td>{{$row->telp}}</td>
                                        <td>{{$row->keterangan}}</td>
                                        <td>{{$row->alamat}}</td>
                                        <td>
                                            <a href="{{ url()->current() }}/edit/{{$row->kodesup}}" class="btn-warning btn-sm text-decoration-none">Edit</a> |
                                            <a href="{{ url()->current() }}/hapus/{{$row->kodesup}}" onclick="return confirm('Apakah anda ingin menghapus ?')" class="btn-danger btn-sm text-decoration-none">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    function MyCari() {
        var x = document.getElementById("cari").value;
        window.location.href = "{{ url('supplier')}}/cari/" + x + "";
    }

    function BatalCari(){
        window.location.href = "{{ url('supplier')}}";
    }
</script>

@endsection