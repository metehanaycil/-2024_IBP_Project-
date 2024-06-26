<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Models\Product;

use App\Models\User;

use App\Models\Cart;


use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {

        $product = Product::all();

        return view('home.index', compact('product'));
    }
    public function contact(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;

        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message',
            'Message Sent Successfully');
    }


    public function login_home()
    {
        $product = Product::all();

        return view('home.index', compact('product'));

    }

    public function add_cart($id)
    {

        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id = $user_id;

        $data->product_id = $product_id;

        $data->save();

        return redirect()->back();



    }

    public function mycart()
    {
        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $cart = Cart::where('user_id',$userid)->get();

        }

        return view('home.mycart',compact('cart'));
    }

}
