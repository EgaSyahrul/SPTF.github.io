<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                ->orWhere('harga', 'LIKE', "%{$search}%");
        }

        $data = $query->get();
        return view('index', compact('data'));
    }
}
