<?php

namespace App\Repositories;

use App\Models\Barang;

class BarangRepository
{
    public function getAll()
    {
        $barang = Barang::orderBy('name')->get()->map(function ($barang){
            return [
                'id_barang' => $barang->id,
                'nama' => $barang->name,
            ];
        });

        return $barang;
    }
}

?>