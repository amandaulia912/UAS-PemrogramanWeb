<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use Illuminate\Support\Facades\Validator;

class CriteriaController extends Controller {
    public function kriteria(){
        $data = kriteria::get();
        return view ('kriteria', compact('data'));
    }

    public function create(){
        return view('createKriteria');
       }
  
       public function store(Request $request){
        $validator = Validator::make($request->all(),[
         'nama' => 'required|string',
         'kode' => 'required|string',
         'bobot' => 'required|integer',
         'tipe' => 'required|in:benefit,cost',
        ]);
  
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
  
        $data['nama'] = $request->nama;
        $data['kode'] = $request->kode;
        $data['bobot'] = $request->bobot;
        $data['tipe'] = $request->tipe;
  
        kriteria::create($data);
  
        return redirect()->route('kriteria');
       }
  
       public function edit(Request $request,$id){
        $data = kriteria::find($id);
  
        return view('editKriteria', compact('data'));
       }
  
       public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
         'nama' => 'required|string',
         'kode' => 'required|string',
         'bobot' => 'required|integer',
         'tipe' => 'required|in:benefit,cost',
        ]);
  
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
  
        $data['nama'] = $request->nama;
        $data['kode'] = $request->kode;
        $data['bobot'] = $request->bobot;
        $data['tipe'] = $request->tipe;
  
        if($request->password){
           $data['password'] = Hash::make($request->password);
  
        }
  
        kriteria::whereId($id)->update($data);
  
        return redirect()->route('kriteria');
       }
  
       public function delete(Request $request,$id){
        $data = kriteria::find($id);
  
        if($data){
           $data->delete();
        }
        return redirect()->route('kriteria');
       }
}
