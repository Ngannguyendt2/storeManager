<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\StaticAnalysis\HappyPath\AssertIsArray\consume;

class ProductController extends Controller
{
    //
    private $product;
    public function __construct(Product $product)
    {
        $this->product=$product;
    }
    public function home(){
        $products=$this->product::all();
        return view('index',compact('products'));
    }
    public function index(){
        $products=$this->product::all();
        return view('products.list',compact('products'));
    }
    public function edit($id){
        $product=Product::find($id);
        return view('products.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $product=Product::find($id);
        $product->name=$request->name;
        $product->productCode=$request->productCode;
        $product->price=$request->price;
        $product->detail=$request->detail;
        if($request->file('image')){
            $currentImage=$product->image;
            if($currentImage){
                unlink(storage_path('app/public/'.$currentImage));
            }

            $path=$request->file('image')->store('images','public');
            $product->image=$path;
        }
        $product->save();
        return redirect()->route('products.index');
    }
}
