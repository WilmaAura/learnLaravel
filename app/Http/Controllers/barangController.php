<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index(){
        echo 'list Barang';
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
