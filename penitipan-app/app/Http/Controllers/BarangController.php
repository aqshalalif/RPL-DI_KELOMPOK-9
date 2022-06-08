<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Repositories\BarangRepository;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    private $barangRepository;

    public function __construct(BarangRepository $barangRepository)
    {
        $this->barangRepository = $barangRepository;
    }
    
    public function index()
    {
        $barang = $this->barangRepository->getAll();

        return $barang;

    }
}
