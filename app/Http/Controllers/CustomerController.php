<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\MobilController;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtCustomer = Customer::with('mobil')->get();
        return view('customers.data-customer',compact('dtCustomer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mob = Mobil::all();
        return view('customers.create-customer',compact('mob'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::create([
            'nama' => $request->nama,
            'id_mobil' => $request->id_mobil,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
        ]);

        toast('Data Berhasil Tersimpan', 'success');
        return redirect('data-customer');
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
        $mob = Mobil::all();
        $cst = Customer::findorfail($id);
        return view('customers.edit-customer',compact('cst', 'mob'));
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
        $cst = Customer::findorfail($id);
        $cst->update($request->all());

        toast('Data Berhasil Update', 'success');
        return redirect('data-customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cst = Customer::findorfail($id);
        $cst->delete();

        toast('Data Berhasil Dihapus', 'info');
        return back();
    }
}
