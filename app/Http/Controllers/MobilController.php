<?php

namespace App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMobil = Mobil::all();
        return view('mobils.data-mobil',compact('dtMobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobils.create-mobil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mobil::create([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
        ]);

        toast('Data Berhasil Tersimpan', 'success');
        return redirect('data-mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mob = Mobil::findorfail($id);
        return view('mobils.edit-mobil',compact('mob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mob = Mobil::findorfail($id);
        $mob->update($request->id());

        toast('Data Berhasil Update', 'success');
        return redirect('data-mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mob = Mobil::findorfail($id);
        $mob->delete();
        
        toast('Data Berhasil Dihapus', 'info');
        return back();
    }
}
