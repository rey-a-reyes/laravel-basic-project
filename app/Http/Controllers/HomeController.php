<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function add_product(Request $request){
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }

}
