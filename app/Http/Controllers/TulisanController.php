<?php

namespace App\Http\Controllers;

use App\Models\Tulisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TulisanController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->dataArtikel($request);
        // return response()->json($data);

        return view('pages.artikel', [
            'items' => $data,
            'lastPage' => $data->lastPage(),
            'currentPage' => $data->currentPage()
        ]);
    }

    public function dataArtikel(Request $request)
    {
        $data = Tulisan::orderBy('id', 'desc')->paginate(12);
        return $data;
    }

    public function show($slug)
    {
        $item = DB::table('tulisans')->where('slug', $slug)->first();
        if(!$item){
            return abort(404);
        }
        $lainnya = DB::table('tulisans')->where('id', '!=', $item->id)->limit(10)->get();
        return view('pages.detail-artikel', [
            'item' => $item,
            'lainnya' => $lainnya
        ]);
    }
}
