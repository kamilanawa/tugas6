<?php

namespace App\Http\Controllers;

use App\Models\ModelSupplier;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ControllerSupplier extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function readsupplier()
    {
        $xx = new ModelSupplier();
        $supplier = $xx->Readsupplier();
        return view('datasupplier', ['supplier' => $supplier]);
    }
    public function tambahsupplier()
    {
        return view('tambahsupplier');
    }

    public function simpansupplier(Request $x)
    {
        $xx = new ModelSupplier();
        $xx->Simpansupplier($x);
        return redirect('/supplier');
    }

    public function editsupplier($kodesup)
    {
        $xx = new ModelSupplier();
        $supplier = $xx->Editsupplier($kodesup);
        return view('editsupplier', ['supplier' => $supplier]);
    }

    public function edittsupplier(Request $x)
    {
        $xx = new ModelSupplier();
        $xx->Edittsupplier($x);
        return redirect('/supplier');
    }

    public function hapussupplier($kodesup)
    {
        $xx = new ModelSupplier();
        $xx->Hapussupplier($kodesup);
        return redirect('/supplier');
    }

    public function carisupplier($cari)
    {
        $xx = new ModelSupplier();
        $supplier = $xx->Carisupplier($cari);
        // print_r($supplier);
        return view('datasupplier',['supplier' => $supplier]);
    }
}
