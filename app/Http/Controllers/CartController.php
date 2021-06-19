<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{

	public function shop(){
		$products=Product::all();
		//dd($products);
		return view('shop',compact('products'))->withTitle('E-COMMERCE STORE | SHOP');
	}

	public function cart(){
		$cartCollection = \Cart::getContent();
		//dd($cartCollection);
		return view('cart',compact('cartCollection'))->withTitle('E-COMMERCE STORE | CART');
	}




    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->img,
            'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Product is Added to Cart!');
   }

   public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }
}
