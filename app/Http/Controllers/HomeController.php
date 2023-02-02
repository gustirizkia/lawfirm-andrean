<?php

namespace App\Http\Controllers;

use App\Models\Tulisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $artikel = Tulisan::orderBy('id', 'desc')->limit(10)->get();
        $tim = DB::table('tims')->orderBy('id', 'asc')->get();
        return view('pages.home', [
            'tulisans' => $artikel,
            'tim' => $tim
        ]);
    }
}
