<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "product";
    public $fillable = ['product_name','quantity','price','categories_id','user_id'];

    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
