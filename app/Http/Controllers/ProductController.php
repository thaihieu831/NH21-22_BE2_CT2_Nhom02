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

        //san pham noi bat
        $feature_product_phone = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('feature', '=', 1)->where('products.type_id', '=', 1)->limit(5)->orderBy('product_id', 'DESC')->get();
        $feature_product_lap = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('feature', '=', 1)->where('products.type_id', '=', 2)->limit(5)->orderBy('product_id', 'DESC')->get();
        $feature_product_tablet = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('feature', '=', 1)->where('products.type_id', '=', 3)->limit(5)->orderBy('product_id', 'DESC')->get();
        $feature_product_sw = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('feature', '=', 1)->where('products.type_id', '=', 4)->limit(5)->orderBy('product_id', 'DESC')->get();
        $feature_product_tainghe = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('feature', '=', 1)->where('products.type_id', '=', 5)->limit(5)->orderBy('product_id', 'DESC')->get();

        //san pham ban chay
        $topselling_phone = Sale::leftJoin('products', 'products.product_id', '=', 'sales.product_id')->leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('sales.sell_number', '>', '100')->where('products.type_id', '=', '1')->limit(3)->orderBy('sale_id', 'DESC')->get();
        $topselling_laptop = Sale::leftJoin('products', 'products.product_id', '=', 'sales.product_id')->leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('sales.sell_number', '>', '100')->where('products.type_id', '=', '2')->limit(3)->orderBy('sale_id', 'DESC')->get();
        $topselling_sw = Sale::leftJoin('products', 'products.product_id', '=', 'sales.product_id')->leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('sales.sell_number', '>', '100')->where('products.type_id', '=', '4')->limit(3)->orderBy('sale_id', 'DESC')->get();
        return view('index', compact('new_product_phone','new_product_lap','new_product_tablet','new_product_sw','new_product_tainghe', 'category', 'feature_product_phone','feature_product_lap','feature_product_sw','feature_product_tablet','feature_product_tainghe', 'topselling_phone', 'topselling_laptop', 'topselling_sw'));
    }
    public function detail_product($id)
    {
        $pro = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('product_id', '=', $id)->get();
        $product_ralate = Product::leftJoin('protypes', 'products.type_id', '=', 'protypes.type_id')->where('product_id', '=', $id)->get();
        return view('detail', compact('pro','product_ralate'));
    }
}
