<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;

class CartController extends Controller
{
    
	public function viewcart() {

		$fruit = new \App\cart;
    	$fruits = $fruit::all();

    	return view('cart',compact('fruits'));

	}

	public function delete($id) {

		cart::where('id',$id)->delete();

		return redirect('/cartitems');

	}
	

}
