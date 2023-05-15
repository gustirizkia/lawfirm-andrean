<?php

namespace App\Http\Controllers;

use App\Models\Tulisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $artikel = Tulisan::orderBy('id', 'desc')->limit(6)->get();
        $tim = DB::table('tims')->orderBy('id', 'asc')->get();
        $banner = DB::table('banners')->orderBy('id', 'desc')->get();
        $gallery = DB::table('galleries')->orderBy('id', 'desc')->get();
        $dataKonten = DB::table('kontens');
        $konten['about'] = $dataKonten->where('page', 'about')->orderBy('id', 'desc')->first();
        $konten['nilai_kami'] = DB::table('kontens')->where('page', 'nilai_kami')->orderBy('id', 'desc')->first();
        $konten['visi'] = DB::table('kontens')->where('page', 'visi')->orderBy('id', 'desc')->first();
        $konten['misi'] = DB::table('kontens')->where('page', 'misi')->orderBy('id', 'desc')->first();
        $konten['tujuan'] = DB::table('kontens')->where('page', 'tujuan')->orderBy('id', 'desc')->first();
        
        return view('pages.home', [
            'tulisans' => $artikel,
            'tim' => $tim,
            'banner' => $banner,
            'gallery' => $gallery,
            'konten' => $konten
        ]);
    }

    public function difrensiasi(Request $request)
    {
        return view('pages.difrensiasi');
    }
}
