<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelSupplier extends Model
{
    use HasFactory;
    public function Readsupplier()
    {
        $supplier = DB::table('supplier')->get();
        return $supplier;
    }
    public function Simpansupplier($x)
    {
        $supplier = DB::table('supplier')->insert([
            'kodesup' => $x->kode,
            'namasup' => $x->nama,
            'telp' => $x->telp,
            'keterangan' => $x->keterangan,
            'alamat' => $x->alamat
        ]);
    }
    public function Editsupplier($kodesup)
    {
        $supplier = DB::table('supplier')->where('kodesup', $kodesup)->get();
        return $supplier;
    }

    public function Edittsupplier($x)
    {
        $supplier = DB::table('supplier')->where('kodesup', $x->kode)->update([
            'kodesup' => $x->kode,
            'namasup' => $x->nama,
            'telp' => $x->telp,
            'keterangan' => $x->keterangan,
            'alamat' => $x->alamat
        ]);
    }

    public function Hapussupplier($kodesup)
    {
        $supplier = DB::table('supplier')->where('kodesup', $kodesup)->delete();
    }

    public function Carisupplier($cari)
    {
        $supplier = DB::table('supplier')->where('kodesup',$cari)->get();
        return $supplier;
    }
}
