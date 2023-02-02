<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index($id){
        $item = DB::table('tims')->find($id);

        if(!$item){
            return redirect()->route('index-home');
        }

        return view('pages.partner', [
            'item' => $item
        ]);
    }
}
