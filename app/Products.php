<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;



class Products extends Model
{

   public static function select_products()
      {
          return DB::table('products')
          ->get();

      }
      public static function select_in_products()
         {
             return DB::table('product')
             ->get();

         }
}
