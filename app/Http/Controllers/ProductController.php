<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Protype;
use App\Models\Sale;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //danh muc
        $category = Protype::all();
        
        //san pham moi
        $new_product_phone = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('products.type_id', '=', 1)->limit(6)->orderBy('product_id', 'DESC')->get();
        $new_product_lap = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('products.type_id', '=', 2)->limit(6)->orderBy('product_id', 'DESC')->get();
        $new_product_tablet = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('products.type_id', '=', 3)->limit(6)->orderBy('product_id', 'DESC')->get();
        $new_product_sw = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('products.type_id', '=', 4)->limit(6)->orderBy('product_id', 'DESC')->get();
        $new_product_tainghe = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('products.type_id', '=', 5)->limit(6)->orderBy('product_id', 'DESC')->get();
    }
    public function detail_product($id)
    {
        $pro = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('product_id', '=', $id)->get();
        $product_ralate = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('product_id', '=', $id)->get();
        return view('detail', compact('pro','product_ralate'));
    }
}
