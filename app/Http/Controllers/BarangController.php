<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangs;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barangs::paginate(10);
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode'=>'required|unique:barangs|max:255',
            'nama'=>'required|max:255',
            'stock'=>'required|max:255',
            'kondisi'=>'required|max:255'
        ]);

        $barangs = new barangs;
        $barangs->kode = $request->kode;
        $barangs->nama = $request->nama;
        $barangs->stock = $request->stock;
        $barangs->kondisi = $request->kondisi;
        $barangs->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = barangs::findOrFail($id);
        return view('barang.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = barangs::findOrFail($id);
        return view('barang.edit', compact('barangs'));
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
        $this->validate($request, [
            'kode'=>'required|max:255',
            'nama'=>'required|max:255',
            'stock'=>'required|max:255',
            'kondisi'=>'required|max:255'
        ]);
        $barangs = barangs::findOrFail($id);
        $barangs->kode = $request->kode;
        $barangs->nama = $request->nama;
        $barangs->stock = $request->stock;
        $barangs->kondisi = $request->kondisi;
        $barangs->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = barangs::findOrFail($id);
        $barangs->delete();
        return redirect()->route('barang.index');
    }
}
