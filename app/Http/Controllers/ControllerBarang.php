<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ControllerBarang extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readbarang()
    {
        $xx = new AnggotaModel();
        $barang = $xx->ReadBarang();
        return view('databarang', ['barang' => $barang]);
    }
    public function tambahbarang()
    {
        return view('tambahbarang');
    }

    public function simpanbarang(Request $x)
    {
        $xx = new AnggotaModel();
        $xx->Simpanbarang($x);
        return redirect('/barang');
    }

    public function editbarang($kodebrg)
    {
        $xx = new AnggotaModel();
        $barang = $xx->Editbarang($kodebrg);
        return view('editbarang', ['barang' => $barang]);
    }

    public function edittbarang(Request $x)
    {
        $xx = new AnggotaModel();
        $xx->Edittbarang($x);
        return redirect('/barang');
    }

    public function hapusbarang($kodebrg)
    {
        $xx = new AnggotaModel();
        $xx->Hapusbarang($kodebrg);
        return redirect('/barang');
    }

    public function caribarang($cari)
    {
        $xx = new AnggotaModel();
        $barang = $xx->Caribarang($cari);
        // print_r($barang);
        return view('databarang',['barang' => $barang]);
    }
}
