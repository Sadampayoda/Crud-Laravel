<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CrudController;

class Crud extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public static function ProccesCreateData(){
        return 'tes';
    }
}
