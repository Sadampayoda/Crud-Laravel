<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CrudController;
use GuzzleHttp\Psr7\Request;

class Crud extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function scopeSearch($query,$search){

        $query->when($search ?? false, function($query,$search){
            return $query->where('judul',"like",'%'.$search.'%');
        });
    }
}
