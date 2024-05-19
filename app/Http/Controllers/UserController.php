<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //aituku kaj ami korsi



    public function dashboard()
    {
        return view ('dashboard.user.user_dashboard');
    }
    public function invoice()
    {
        $dete['getInvoice']=Order::where('user_id',Auth::user()->id)->get();
        return view('dashboard.user.invoice',$dete);

    }


    //mainly  aituku
    //
    public function addtocart($id)
    {   $data['item'] = Furniture::find($id);
        return view("frontend.cart",$data);
      
      

    }

    public function post_addtocart($id, Request $request)
    {
        if ($request->quantity > 0) {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->quantity = $request->quantity;
            $cart->furniture_id = $id;
            $cart->total = Furniture::find($id)->price * $request->quantity;
            $cart->save();

            return redirect('/_user/addtocart/' . $id)->with('success', 'Added to cart');
        }else{
            return redirect('/_user/addtocart/' . $id)->with('error', 'Atleast One item should be added');
        }
    }
    public function cart(){
        $data['getMyCart']= Cart::where('user_id',Auth::user()->id)->get();
        $data['getFurniture'] =Furniture::all();
        $data['total_amount'] = 0;
        foreach ($data['getMyCart'] as $item) {
            $data['total_amount'] += $item->total;
        }
        return view('frontend.cart_list',$data);
    }


    public function edit_cart($id){
        $data['getCart'] = Cart::find($id);
        $data['getFurniture'] = Furniture::find($data['getCart']->furniture_id);
        return view('frontend.edit_cart',$data);
    }

    public function post_edit_cart($id, Request $request){
        if ($request->quantity > 0) {
            $cart = Cart::find($id);
            $cart->quantity = $request->quantity;
            $cart->total = Furniture::find($cart->furniture_id)->price * $request->quantity;
            $cart->save();

            return redirect('/_user/cart')->with('success', 'Edited');
        } else {
            return redirect('/_user/cart')->with('error', 'Atleast One item should be added');
        }
    }

    public function delete_cart($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/_user/cart')->with('success', 'Deleted');
}



}
