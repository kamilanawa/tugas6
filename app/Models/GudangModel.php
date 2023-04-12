<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GudangModel extends Model
{
    use HasFactory;
    public function Readgudang($tanggalAwal, $tanggalAkhir)
    {
        $result = array();
        $gudang = DB::table('gudang')
                    ->when($tanggalAwal, function($query, $tanggalAwal){
                        return $query
                            ->where('tanggal','>=', $tanggalAwal);
                    })
                    ->when($tanggalAkhir, function($query, $tanggalAkhir){
                        return $query
                            ->where('tanggal','<=', $tanggalAkhir);
                    })
                    ->get();

        foreach ($gudang as $data) {
            $barang = DB::table('detailgudang')
                        ->leftJoin('barang', 'detailgudang.kodebrg', '=', 'barang.kodebrg')
                        ->select('barang.kodebrg', 'barang.namabrg', 'barang.satuan', 'detailgudang.harga', 'detailgudang.jumlah')
                        ->where('detailgudang.kodetr', $data->kodetr)
                        ->get();
            
            array_push($result, array(
                'kodetr' => $data->kodetr,
                'tanggal' => $data->tanggal,
                'namasup' => $data->namasup,
                'telp' => $data->telp,
                'alamat' => $data->alamat,
                'keterangan' => $data->keterangan,
                'grandtotal' => $data->grandtotal,
                'barang' => json_decode(json_encode($barang))
            ));
        }
        return json_decode(json_encode($result));
    }
    public function Simpanmastergudang($kodetr, $tanggal, $namasup, $telp, $alamat, $keterangan, $grandtotal)
    {
        $supplier = DB::table('gudang')->insert([
            'kodetr' => $kodetr,
            'tanggal' => $tanggal,
            'namasup' => $namasup,
            'telp' => $telp,
            'alamat' => $alamat,
            'keterangan' => $keterangan,
            'grandtotal' => $grandtotal

        ]);
    }

    public function Simpandetailgudang($kodetr, $kodebrg, $harga, $jumlah)
    {
        $supplier = DB::table('detailgudang')->insert([
            'kodetr' => $kodetr,
            'kodebrg' => $kodebrg,
            'harga' => $harga,
            'jumlah' => $jumlah

        ]);
    }
    public function Readdetailgudang()
    {
        $detailgudang = DB::table('detailgudang')->get();
        return $detailgudang;
    }
}
