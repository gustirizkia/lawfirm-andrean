<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index($slug){
        $item = DB::table('tims')->where('slug', $slug)->first();
        if(!$item){
            return redirect()->route('index-home');
        }

        return view('pages.partner', [
            'item' => $item
        ]);
    }
}
