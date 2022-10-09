<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CrudSearch;

class CrudController extends Controller
{
    public function index(){
        return view('conten.index',[
            'page' => 'Home'
        ]);
    }
    

   
}
