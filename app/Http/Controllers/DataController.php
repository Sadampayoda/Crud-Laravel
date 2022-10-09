<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Crud;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("conten.home",[
            'page' => 'Catatan',
            'data' => crud::latest()->Search(request('search'))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("conten.create",[
            'page' => 'Create data'
        ]);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ProsesValidasi = $request->validate([
            'name' => 'required|max:100|min:5',
            'judul' => 'required|max:255|unique:cruds',
            'deskripsi' => 'required'
        ]);
        $slug =  Str::of("$request->judul")->slug('-');
        $ProsesValidasi['slug'] = $slug;

        crud::create($ProsesValidasi);

        return redirect('/crud')->with('success','Catatan anda telah ditambah');


        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('conten.detil',[
            'page' => $slug ,
            'data' => crud::firstWhere('slug',$slug)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('conten.edit',[
            'page' => 'Edit',
            'data' => crud::firstWhere('id',$slug)
        ]);
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
        $data = crud::firstWhere('id',$id);

        
        if($request->judul == $data->judul){
            $ProsesValidasi = $request->validate([
                'name' => 'required|max:100|min:5',
                'deskripsi' => 'required'
            ]);
            $ProsesValidasi['judul'] = $request->judul;
        }else{
            $ProsesValidasi = $request->validate([
                'name' => 'required|max:100|min:5',
                'deskripsi' => 'required',
                'judul' => 'required|max:255|unique:cruds'
            ]);
        }
        $slug =  Str::of("$request->judul")->slug('-');
        $ProsesValidasi['slug'] = $slug;

        

        DB::table('cruds')->where('id',$id)->update($ProsesValidasi);

        return redirect('/crud')->with("update","Catatan  $data->name  telah di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Crud::destroy($id);

        return redirect('/crud')->with('destroy','Catatan anda berhasil di hapus');
    }
}
