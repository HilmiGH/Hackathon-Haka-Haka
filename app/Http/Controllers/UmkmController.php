<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function index()
    {
        // Ambil data UMKM dari database
        $umkms = DB::table('umkms')->get();

        // Tampilkan tampilan Blade 'umkm.index' dan kirimkan data UMKM ke tampilan
        return view('admin.umkm-dashboard', compact('umkms'));
    }
    
    public function show($id)
    {
        // Mengambil data UMKM berdasarkan ID
        $umkm = DB::table('umkms')->where('id', $id)->first();

        // Tampilkan tampilan Blade 'umkm-info-dashboard' dan kirimkan data UMKM ke tampilan
        return view('admin.umkm-info-dashboard', compact('umkm'));
    }

}


