<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::latest()->paginate(5);
 
        return view('siswas.index',compact('siswas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIS' => 'required',
            'Nama' => 'required',
            'Jns_kelamin' => 'required',
            'Temp_lahir' => 'required',
            'Tgl_lahir' => 'required',
            'Alamat' => 'required',
            'Asal_sekolah' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
        ]);
 
        Siswa::create($request->all());
 
        return redirect()->route('siswas.index')
                        ->with('success','Berhasil menambahkan data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('siswas.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswas.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'NIS' => 'required',
            'Nama' => 'required',
            'Jns_kelamin' => 'required',
            'Temp_lahir' => 'required',
            'Tgl_lahir' => 'required',
            'Alamat' => 'required',
            'Asal_sekolah' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
        ]);
 
        $siswa->update($request->all());
 
        return redirect()->route('siswas.index')
                        ->with('success','Berhasil memperbarui data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
 
        return redirect()->route('siswas.index')
                        ->with('success','Berhasil menghapu data.');
    }
}
