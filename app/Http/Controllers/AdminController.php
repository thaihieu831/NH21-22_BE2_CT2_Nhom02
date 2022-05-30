<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\User;
use App\Models\Sale;
use App\Models\Cart;
use App\Models\Wishlist;

class AdminController extends Controller
{
    public function showProduct()
    {
        $all_product = Product::orderBy('product_id', 'desc')->paginate(9);
        return view('admin.product', compact('all_product'));
    }
    public function showProtype()
    {
        $all_protype = Protype::all();
        return view('admin.protype', compact('all_protype'));
    }
    public function showManu()
    {
        $all_manu = Manufacture::all();
        return view('admin.manufacture', compact('all_manu'));
    }
    public function showUser()
    {
        $all_user = User::all();
        return view('admin.user', compact('all_user'));
    }
    public function showSale()
    {
        $all_sale = Sale::orderBy('sale_id', 'desc')->paginate(9);
        return view('admin.sale', compact('all_sale'));
    }
    public function showOrder()
    {
        $all_order = Order::all();
        return view('admin.order', compact('all_order'));
    }
    public function showCart()
    {
        $all_cart = Cart::all();
        return view('admin.cart', compact('all_cart'));
    }
    public function showWish()
    {
        $all_wish = Wishlist::all();
        return view('admin.wishlist', compact('all_wish'));
    }
    public function ShowAddProduct()
    {
        $all_typeProduct = Protype::all();
        $all_manuProduct = Manufacture::all();
        return view('admin.add-product', compact('all_typeProduct','all_manuProduct'));
    }
    public function addProduct(Request $request)
    {
        if ($request->has('file')) {

            $image = $request->file;
            $ext = $request->file->extension();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'gif' || $ext == 'jpeg' || $ext == 'JPG' || $ext == 'PNG' || $ext == 'GIF' || $ext == 'JPEG') {
                $file_name = time() . '-' . 'product' . '.' . $ext;

                $product = new Product();
                $product->product_name = $request->name;
                $product->type_id = $request->protype;
                $product->manu_id = $request->manufacture;
                $product->description = $request->description;
                $product->image = $file_name;
                $product->price = $request->price;
                $product->feature = $request->featured;
                $product->created_at = DATE(NOW());
                $product->updated_at = DATE(NOW());

                $product->save();
                $image->move(public_path('img'), $file_name);

                return redirect()->route('showProduct')->with('Success', 'Thêm mới thành công');
            } else {
                return redirect()->back()->with('Error', 'Ảnh không hợp lệ (jpg, png, jpeg, gif)');
            }
        } else {
            return redirect()->back()->with('Error', 'Ảnh không được bỏ trống');
        }
    }
    public function deleteProduct($id)
    {
        if (count(Order::where('product_id', $id)->get()) == 0) {
            Product::find($id)->delete();
            return  redirect()->back()->with('Success', 'Xóa thành công');
        } else {
            return  redirect()->back()->with('Error', 'Không thể xóa sản phẩm');
        }
    }
    public function ShowEditProduct($id)
    {
        $all_typeProduct = Protype::all();
        $all_manuProduct = Manufacture::all();
        $product = Product::where('product_id', '=', $id)->first();
        return view('admin.edit-product', compact('all_typeProduct', 'product','all_manuProduct'));
    }
    public function editProduct($id, Request $request)
    {
        if ($request->has('file')) {

            $image = $request->file;
            $ext = $request->file->extension();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'gif' || $ext == 'jpeg' || $ext == 'JPG' || $ext == 'PNG' || $ext == 'GIF' || $ext == 'JPEG') {

                $file_name = time() . '-' . 'product' . '.' . $ext;
                $product = Product::where('product_id', '=', $id)->first();

                $product->product_name = $request->name;
                $product->type_id = $request->protype;
                $product->manu_id = $request->protype;
                $product->description = $request->description;
                $product->image = $file_name;
                $product->price = $request->price;
                $product->feature = $request->featured;
                $product->created_at = DATE(NOW());
                $product->updated_at = DATE(NOW());


                $product->save();
                $image->move(public_path('img'), $file_name);

                return redirect()->route('showProduct')->with('Success', 'Cập nhật thành công');
            } else {
                return redirect()->back()->with('Error', 'Ảnh không hợp lệ (jpg, png, jpeg, gif)');
            }
        } else {
            return redirect()->back()->with('imageError', 'Ảnh không được bỏ trống');
        }
    }
}
