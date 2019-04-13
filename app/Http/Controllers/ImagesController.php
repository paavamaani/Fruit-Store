<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\cart;

class ImagesController extends Controller
{

    public function index() {

	    $fruit = new \App\image;
    	$fruits = $fruit::all();

    	return view('admin',compact('fruits'));

    }

    public function display() {

	    $fruit = new \App\image;
    	$fruits = $fruit::all();

    	return view('display',compact('fruits'));

    }

    public function addItem() {

    	return view('addItem');

    }

    public function store(Request $request) {

    	$request->validate([

    		'name' => 'required',
    		'description' => 'required|max:255',
    		'price' => 'required|numeric',
    		'image' => 'required'

    	]);

		$image = new \App\image;

		$image->name = request('name');
		$image->description = request('description');
		$image->price = request('price');

		if($request->hasfile('image')) {

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('images/',$filename);
			$image->image = $filename;

		}
		else {

			return view('addItem');
			$image->image = '';

		}

		$image->save();

		return view('addItem');


	}

	public function edit($id) {

		$fruit = image::find($id);

		return view('update',compact('fruit'));

	}

	public function update(Request $request,$id) {

		$request->validate([

    		'name' => 'required',
    		'description' => 'required|max:255',
    		'price' => 'required|numeric',
    		'image' => 'required'

    	]);

		$fruit = image::find($id);

		$fruit->name = request('name');
		$fruit->description = request('description');
		$fruit->price = request('price');

		if($request->hasfile('image')) {

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('images/',$filename);
			$fruit->image = $filename;

		}

		$fruit->save();

		return redirect('/addItem');
	}

	public function delete($id) {

		image::where('id',$id)->delete();

		return redirect('/admin');

	}

	public function addtocart($id) {

		$fruit = image::find($id);

		$item = new \App\cart;

		$item->name = $fruit->name;
		$item->description = $fruit->description;
		$item->price = $fruit->price;
		$item->image = $fruit->image;
		
		$item->save();

		return redirect('display');


	}

	public function orders() {

		$fruit = new \App\cart;
    	$fruits = $fruit::all();

    	$address = new \App\house;
    	$persons = $address::all();

    	return view('myorders',compact('fruits','persons'));

	}

}
