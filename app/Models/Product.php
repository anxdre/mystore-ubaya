<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //untuk perubahan nama table
    protected $table="products";
    protected $primaryKey="id";

    public function category()
    {
        //bisa salah satu
        // return $this->belongsTo(Category::class,'category_id');
        return $this->belongsTo(category::class,'category_id');

    }

    public function supplier()
    {
        return $this->belongsTo(supplier::class,'supplier_id');

    }

    public static function ambilByNamaCategory($nama)
    {
        $products = self::join('categories','products.category_id','=','categories.id')
                        -> where('categories.name',$nama)
                        -> select('products.name')->get();
        return $products;
    }

    public function transactions(){
        $this->belongsToMany(Transactions::class, 'product_transaction','product_id','transaction_id')->withPivot('quantity','price');
    }
}
