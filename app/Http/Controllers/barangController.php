<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index(){
        $barangs=[
            [
                'id' => 1,
                'sku' => '#AA12312',
                'namaBarang' => 'Barang A',
                'harga' => 15000
            ],
            [
                'id' => 2,
                'sku' => '#BB12312',
                'namaBarang' => 'Barang B',
                'harga' => 20000,
            ]
        ];
        return view('barang.index', ['barangs' => $barangs]);
    }

    public function create(){
        echo 'form Barang';
    }
    public function store(Request $request){
        echo "create Barang";
    }
    public function show($id){
        echo 'show Barang'. $id;
    }
    public function edit($id){
        echo 'form edit Barang' . $id;
    }
    
    public function update($id){
        echo 'update Barang' . $id;
    }

    public function destroy($id){
        echo 'delete Barang' . $id;
    }
}
