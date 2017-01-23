<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;


class ProductsController extends Controller
{
    public function selectproducts()
     {
         $results = Products::select_products();
         $data = array(
              'results'  => $results,
             );
         return view('/home',$data);

       }
    public function showproducts($id)
     {
         $products = Products::where('id', $id)->first();
       //  return $member;
         return view('single_product' , compact('products'));
     }

     public function updatecart(Request $Request)
      {
        //Create 'cart' if it doesn't already exist
          if (!isset($_SESSION['SHOPPING_CART'])){ $_SESSION['SHOPPING_CART'] = array(); }
        	//Updates Qty for all items
        	foreach ($Request['items_qty'] as $itemID => $qty) {
        		//If the Qty is "0" remove it from the cart
        		if ($qty == 0) {
        			//Remove it from the cart
        			unset($_SESSION['SHOPPING_CART'][$itemID]);
        		}
        		else if($qty >= 1) {
        			//Update to the new Qty
        			$_SESSION['SHOPPING_CART'][$itemID]['qty'] = $qty;

  		}
  	}

        $data = array(
              'id' =>  $Request->get('id'),
             'name'  =>$Request -> get('name'),
              'price' => $Request->get('price'),
              'qty' =>  $qty
            );
            return view('/checkout',$data);
    //return $data;

      }
      public function updateinfo(Request $Request)
            {
                  /* ถ้าใช้ตัวนี้ ไม่มีผลค่ะ ไม่ error แต่ ไม่เก็บ session */
                if (!isset($_SESSION['SHOPPING_CART'])){ $_SESSION['SHOPPING_CART'] = array(); }

            /*  ติด isset น่าจะใช้งานไม่ได้ หรือบลู ใช้ function ของ session ผิด

              if (!isset($Request->session()->get('SHOPPING_CART')))
                {
                  $Request->session()->get('SHOPPING_CART') = array();
                }
                */

                      // if (isset($Request['id']) && isset($Request['price']) && isset($Request['qty'])){
                       if (isset($Request['id']) && isset($Request['price'])){
                           	$data = array(
                              'id' =>  $Request->input('id'),
                           		'name'  => $Request->input('name'),
                           		//Item Price
                           		'price' => $Request->input('price'),
                           		//Qty wanted of item
                           		'qty' =>  $Request->input('qty')
                           		);
                           	//Add this item to the shopping cart
                            //	$Request->session()->set('SHOPPING_CART' , '') =  $data;
                            /* ตรงงนี้ เหมือนกัน ใช้ session ไม่ได้ */
                              $_SESSION['SHOPPING_CART'][] =  $data;
                            //  return Redirect('/cart');
                              return view('/cart',$data);

                    /* บลู ลอง ถึงส่วนนี้อยู่ค่ะ */
                       }
                       //Allowing the modification of individual items no longer keeps this a simple shopping cart.
                       //We only support emptying and removing
              else if (isset($_GET['remove'])){
                  //Remove the item from the cart
                  //  ลบ session SHOPPING_CART  3
                  //	unset($_SESSION['SHOPPING_CART'][$_GET['remove']]);

                  // ให้ไปไหน 2
                 	// header('Location: ' . $_SERVER['PHP_SELF']);
             }
              else if (isset($_GET['empty'])){

                        // เคลีย session 1
                        //	session_destroy();

                        // ให้ไปที่ไหน
                         return Redirect('/cart');

              }
              else if (isset($Request['update'])) {
                           	//Updates Qty for all items
                           	foreach ($Request['items_qty'] as $itemID => $qty) {
                           		 //If the Qty is "0" remove it from the cart
                             		if ($qty == 0) {
                             			//Remove it from the cart
                             			unset($_SESSION['SHOPPING_CART'][$itemID]);
                             		}
                             		else if($qty >= 1) {
                             			//Update to the new Qty
                             			$_SESSION['SHOPPING_CART'][$itemID]['qty'] = $qty;
                             		}
                           	}
                            // ให้ไปไหน
                           return Redirect('/checkout');

              }

        }
        public function checkoutprocess(Request $Request)
              {
                           // test session
                  $qty = $Request->get('items_qty');

                  $Request->session()->set('qty', $qty);

                   return Redirect('/welcome');


              }



}
