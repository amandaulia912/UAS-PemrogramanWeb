<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AlternatifController extends Controller {
    public function alternatif(){
        $data = alternatif::get();
        return view ('alternatif', compact('data'));
    }

    public function create(){
        return view('createAlternatif');
       }
  
       public function store(Request $request){
         $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
         ]);
   
         if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
   
         $data['nama'] = $request->nama;
         $data['C1'] = $request->C1;
         $data['C2'] = $request->C2;
         $data['C3'] = $request->C3;
         $data['C4'] = $request->C4;
   
         alternatif::create($data);
   
         return redirect()->route('alternatif');
        }
   
       public function edit(Request $request,$id){
        $data = alternatif::find($id);
  
        return view('editAlternatif', compact('data'));
       }
  
       public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
         'nama' => 'required',
         'C1' => 'required',
         'C2' => 'required',
         'C3' => 'required',
         'C4' => 'required',
        ]);
  
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
  
        $data['nama'] = $request->nama;
        $data['C1'] = $request->C1;
        $data['C2'] = $request->C2;
        $data['C3'] = $request->C3;
        $data['C4'] = $request->C4;
  
        if($request->password){
           $data['password'] = Hash::make($request->password);
  
        }
  
        alternatif::whereId($id)->update($data);
  
        return redirect()->route('alternatif');
       }
  
       public function delete(Request $request,$id){
        $data = alternatif::find($id);
  
        if($data){
           $data->delete();
        }
        return redirect()->route('alternatif');
       }

}
