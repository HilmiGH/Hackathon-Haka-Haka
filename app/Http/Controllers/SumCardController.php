<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SumCardController extends Controller
{
    public function getTotalPenjualanHarian()
    {
        // Ambil total penjualan harian dari tabel detail_keranjang
        $totalPenjualanHarian = DB::table('detail_keranjang')
            ->whereDate('created_at', now())
            ->sum('jumlah_produk');

        return response()->json(['totalPenjualan' => $totalPenjualanHarian]);
    }
}

