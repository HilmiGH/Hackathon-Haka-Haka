<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopProductController extends Controller
{
    public function index()
    {
        $topProducts = DB::table('detail_keranjang')
            ->select('produk_id', DB::raw('SUM(jumlah) as total_pembelian'))
            ->groupBy('produk_id')
            ->orderByDesc('total_pembelian')
            ->take(10)
            ->get();

        return view('nama_tampilan', compact('topProducts'));
    }
}
