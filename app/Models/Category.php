<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";
    protected $primaryKey="id";


    public function products()
    {
        //bisa salah satu
        // return $this->hasMany(Product::class,'category_id');
        return $this->hasMany(products::class,'category_id','id');
    }

    public function getAll()
    {
       return $this->getAll();
    }

    public function __toString()
    {
        return $this->name;
    }
}
