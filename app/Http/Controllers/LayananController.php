<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.layanan');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'string|required',
            'email' => 'email|required',
            'phone' => 'numeric|required',
            'jenis' => 'string|required',
            'layanan' => 'string|required',
            'deskripsi' => 'required'
        ];
        $message = [
            'required' => ':attribute harus diisi',
            'email' => ':attribute harus format email'
        ];

        $valid = Validator::make($request->all(), $rules, $message);

        if($valid->fails()){
        // dd($valid->errors()->first());
            return redirect()->back()->with('errorMsg', $valid->errors()->first());
        }

        $data = $request->except('_token');
        $insert = Lead::create($data);

        return redirect()->back()->with('successMsg', "Data anda sudah kami terima selanjutnya akan di proses oleh tim kami");

    }
}
