<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function detail()
    {
        return view("sections.detailproduk");
    }
}
