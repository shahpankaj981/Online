<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = 'products';
   /*
    protected $table = 'products';

    protected $fillable = ['name', 'price', 'product_category_id'];
   */

   protected $fillable = ['name',
       'price',
       'product_category_id',
       'user_id' //temporary
   ];

   public function user()
   {
       return $this->belongsTo(User::class, 'user_id', 'id');
   }

}



