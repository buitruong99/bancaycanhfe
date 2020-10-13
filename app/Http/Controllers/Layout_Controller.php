<?php

namespace App\Http\Controllers;
use App\Product;
use App\Intro;
use App\Info;
use App\category;
use App\Slider;
use App\contact;
use App\product_images;
use Illuminate\Http\Request;
class Layout_Controller extends Controller

{
    public function master(){
        return view('layout.master');
    }
    public function index(){
        $infos = info::all();
        $categories = category::all();
        $products = Product::all();

        return view('layout.index',compact('products','categories','infos'));

    }
    public function gioithieu(){
        $data = info::limit(5)->get();
        $intros = Intro::all();
        return view('layout.gioithieu',compact('intros','data'));

    }
//    public function slider(){
//        $slider = slider::all();
//        return view('layout.gioithieu',compact('slider'));
//
//    }
    public function tintuc(){
        $data = info::limit(5)->get();
        $infos =Info::all();
        return view('layout.tintuc',compact('infos','data'));
    }
    public function lienhe(){

        $contacts = contact::all();
        $data = info::limit(5)->get();
        return view('layout.lienhe',compact('data','contacts'));
    }
    public function postlienhe(Request $request){
        $db = new contact();
        $db->name = $request->name;
        $db->email = $request->email;
        $db->address = $request->name;
        $db->phone = $request->name;
        $db->contents = $request->contents;
        $db->save();
        return redirect()->route('lienhe');
    }
    public function sanpham(){
        $data = info::limit(5)->get();
        $products = Product::all();
        return view('layout.sanpham',compact('products','data'));
    }
    public function sanphamchitiet($id){
        $product = product::find($id);
            $dataproduct = product::where('category_id',$product->category_id)->limit(5)->get();
        return view('layout.sanphamchitiet',compact('product','dataproduct'));
    }
    public function category($id){
        $data = info::limit(5)->get();
        $category = category::where('id',$id)->get();
        $products = product::where('category_id',$id)->paginate(20);
        return view('list_categories.category',compact('products','category','data'));
    }
    public function tintucchitiet($id){
        $infos = info::find($id);
        $data = info::limit(5)->get();
        return view('list_categories.tintucchitiet',compact('infos','data'));
    }
    public function timkiem(Request $request){
        $hotInfos = Info::inRandomOrder()->limit(3)->get();
        $products = Product::where('name', 'like', '%'.$request->key.'%')->paginate(4);
        $cate = Category::all();
        $key = $request->key;
        return view('layout.timkiem',compact('hotInfos', 'products', 'cate', 'key'));
    }
}
