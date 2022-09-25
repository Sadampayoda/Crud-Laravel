<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function home(){
        return view('conten.home',[
            'page' => 'Home',
            'data' => crud::all()
        ]);
    }
    public function detil($slug){
        return view('conten.detil',[
            'page' => $slug ,
            'data' => crud::firstWhere('slug',$slug)
        ]);
    }
    public function CreateData()
    {
        return view("conten.create",[
            'page' => 'Halaman Create Data',
            'data' => Crud::ProccesCreateData()
        ]);
    }
}
