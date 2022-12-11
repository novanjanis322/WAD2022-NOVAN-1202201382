<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('pages.login-novan');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add-novan');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listcar()
    {
        return view('pages.listcar-novan');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailcar($id)
    {
        $detail = Showroom::where ('id',$id)->get();
        return view('pages.detail-novan',['detail' => $detail]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $showrooms = Showroom::all();
        return view('pages.listcar-novan', ['showrooms' => $showrooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $move_gambar = $request->file('File');
        $move_gambar->move(public_path('asset'), $move_gambar->getClientOriginalName());
        $store = new Showroom;
        $store->name = $request->NamaMobil;
        $store->owner = $request->NamaPemilik;
        $store->brand = $request->Merek;
        $store->purchase_date = $request->Tanggal;
        $store->description = $request->Deskripsi;
        $store->image = $request->File->getClientOriginalName();
        $store->status = $request->status;
        $store->save();
        return redirect()->route('insertcar.index')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Showroom::where ('id',$id)->get();
        return view('pages.edit-novan',['detail' => $detail]);
        
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
        $showrooms = Showroom::all();
        $update = Showroom::find($id);

        if ($request->foto) {
            $foto_baru = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('asset'), $foto_baru);
        } else {
            $foto_baru = $update->image;
        }
        $update->name = $request->NamaMobil;
        $update->owner = $request->NamaPemilik;
        $update->brand = $request->Merek;
        $update->purchase_date = $request->Tanggal;
        $update->description = $request->Deskripsi;
        $update->image = $foto_baru;
        $update->status = $request->status;
        $update->save();
        return view('pages.listcar-novan',['showrooms' => $showrooms]);     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Showroom::where ('id',$id)->delete();
        $showrooms = Showroom::all();
        return view('pages.listcar-novan',['showrooms' => $showrooms]);
    }

}
