<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Menghitung jumlah laki-laki (jenis_kelamin = 'L') dan perempuan (jenis_kelamin = 'P')
        $jumlahLakiLaki = DB::table('pelanggans')->where('jenis_kelamin', 'L')->count();
        $jumlahPerempuan = DB::table('pelanggans')->where('jenis_kelamin', 'P')->count();
        // Menghitung total pelanggan
        $totalPelanggan = $jumlahLakiLaki + $jumlahPerempuan;

        // Menghitung persentase laki-laki dan perempuan
        $lakiLakiPercentage = ($jumlahLakiLaki / $totalPelanggan) * 100;
        $perempuanPercentage = ($jumlahPerempuan / $totalPelanggan) * 100;
        
        return view('admin.dashboard', compact('jumlahLakiLaki', 'jumlahPerempuan', 'lakiLakiPercentage', 'perempuanPercentage', 'totalPelanggan'));
    }
}

