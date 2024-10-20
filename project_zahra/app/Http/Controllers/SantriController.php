<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Pendidikan;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasantri = Santri::with('pendidikans')->get(); //with digunakan sebgai memangil relationship di model
        return view('santri.index', compact('datasantri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendidikan=Pendidikan::all();
   

    return view('santri.create',compact('pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataproses = new Santri();

        $dataproses = new Santri();
        $dataproses->nik = $request->input('nik'); 
        $dataproses->nama = $request->input('nama'); 
       $dataproses->tempat_tanggal_lahir = $request->input('tempat_tanggal_lahir'); // Comment out or remove this line
       $dataproses->nama_ayah = $request->input('nama_ayah');
       $dataproses->nama_ibu = $request->input('nama_ibu');

        $dataproses->pendidikan = $request->input('pendidikan'); 
        $dataproses->save();
    
        return redirect()->route('indexsantri')->with('success', 'Data santri berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $findsantri=Santri::with('pendidikans')->where('id',$id)->first(); //first/find memangil 1 data
        $pendidikan=Pendidikan::all();
       
        if($findsantri == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        return view('santri.show',compact('findsantri','pendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $findsantri=Santri::where('id',$id)->first();
        $pendidikan=Pendidikan::all(); 
        
        if($findsantri == null){  //pengecekan data

            return "Data Tidak Ada";
        }
        return view('santri.edit',compact('findsantri','pendidikan'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        // Remove the _token field from the array
        unset($data['_token']);
        unset($data['_method']);


        $datasantri=Santri::where('id',$id)->update($data); //insert data
        $datasantri=Santri::all();

        return view('santri.index',compact('datasantri'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $santris = Santri::findOrFail($id);

        if($santris == null){  //pengecekan data

            return "Data Tidak Ada";
        }

        // Delete the siswa record
        $santris->delete();
        $datasantri=Pekerjaan::all();

        return view('santri.index',compact('datasantri'));

    }
}
