<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan1;
class Karyawan1Controller extends Controller
{
    public function show(){
        $karyawan = karyawan1::all();
        return view('welcome', compact('karyawan'));
    }
    public function login(){
        return view('karyawan');
    }
    public function store(Request $request){
        $request->validate([
            'namakaryawan'=>'required|between:5,20',
            'umurkaryawan'=>'required|numeric|gt:20',
            'alamatkaryawan'=>'required|between:10,40',
            'no_telp'=>'required|starts_with:08|digits_between:9,12|regex:/^08\d{7,10}$/'
        ]);
        Karyawan1::create([
            'namakaryawan'=>$request->namakaryawan,
            'umurkaryawan'=>$request->umurkaryawan,
            'alamatkaryawan'=>$request->alamatkaryawan,
            'no_telp'=>$request->no_telp
        ]);
        return redirect(route('show'));
    }
    public function edit($id){
        $karyawan=karyawan1::findOrFail($id);
        return view('karyawanedit', compact('karyawan'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'namakaryawan'=>'required|between:5,20',
            'umurkaryawan'=>'required|numeric|gt:20',
            'alamatkaryawan'=>'required|between:10,40',
            'no_telp'=>'required|starts_with:08|digits_between:9,12|regex:/^08\d{7,10}$/',
        ]);
        $karyawan=karyawan1::findOrFail($id);
        $karyawan->update([
            'namakaryawan'=>$request->namakaryawan,
            'umurkaryawan'=>$request->umurkaryawan,
            'alamatkaryawan'=>$request->alamatkaryawan,
            'no_telp'=>$request->no_telp
        ]);
        return redirect(route('show'));
    }
    public function delete($id){
        karyawan1::destroy($id);
        return redirect(route('show'));
    }
}
