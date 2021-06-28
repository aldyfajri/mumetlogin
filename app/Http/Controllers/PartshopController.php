<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartshopModel;


class PartshopController extends Controller
{
    public function __construct()
    {
        $this->PartshopModel = new PartshopModel();
    }

    public function daftarpartshop()
    {
        $partshops = PartshopModel::get();
        return view('partshop.partshop', compact("partshops"));
    }

    public function inputpartshop()
    {
        return view('partshop.inputpartshop');
    }

    public function inputdatapartshop(Request $request)
    {
        // return Request();
        $request->validate([
            'nama_partshop' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|unique:posts',
            'jenis_partshop' => 'required',
        ], [
            'nama_partshop.required' => 'wajib diisi cuk',
            'alamat.required' => 'wajib diisi cuk',
            'no_hp.required' => 'wajib diisi gan',
            'no_hp.unique' => 'ngga boleh sama bro',
            'jenis_partshop.required' => 'wajib diisi cuks'
        ]);

        // $this->PartshopModel->inputData($data);
        PartshopModel::create($request->all());
        return redirect()->route('partshop')->with('pesan', 'data berhasil ditambahkan');
    }
}
