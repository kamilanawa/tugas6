<?php

namespace App\Http\Controllers;

use App\Models\GudangModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControllerGudang extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function readgudang(Request $request){

        $tanggalAwal = $request->get('tanggalawal');
        $tanggalAkhir = $request->get('tanggalakhir');

        $xx = new GudangModel();
        $gudang = $xx->Readgudang($tanggalAwal, $tanggalAkhir);
        return view('gudang.datagudang')
            ->with([
                'gudang' => $gudang,
                'tanggalawal' => $tanggalAwal,
                'tanggalakhir' => $tanggalAkhir,
            ]);
        // return view("gudang.datagudang");
    }

    public function tambahgudang(){
        return view('gudang.tambahdatagudang');
    }

    public function view(){
        return view('gudang.test');
    }

    public function gudangmaster($kodetr, $tanggal, $nama_sup, $telp, $alamat, $keterangan, $grandtotal){
        $xx = new GudangModel();
        $xx->SimpanMasterGudang($kodetr, $tanggal, $nama_sup, $telp, $alamat, $keterangan, $grandtotal);
    }

    public function gudangdetail($kodetr, $kodebr, $harga, $jumlah){
        $xx = new GudangModel();
        $xx->SimpanDetailGudang($kodetr, $kodebr, $harga, $jumlah);
    }

}
