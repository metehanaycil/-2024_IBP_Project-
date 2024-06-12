<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\User;

use App\Models\Contact;

use App\Models\Product;


class AdminController extends Controller
{
    public function index()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->success('Category Added Successfully', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            return redirect()->back();
        } else {
            // Handle the case where no category is found (e.g., flash an error message)
            return redirect()->back()->with('error', 'Category not found!');
        }
    }

    public function view_users()
    {
        $data = User::all();

        return view('admin.users',compact('data'));
    }

    public function edit_user($id)
    {
        $data = User::find($id);
        return view('admin.edit_user',compact('data'));
    }
    public function update_user(Request $request,$id)
    {
        $data = User::find($id);

        $data->id = $request->id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->usertype = $request->usertype;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();

        return redirect('view_users');

    }

    public function all_messages(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $data = Contact::all();

        return view('admin.all_messages', compact('data'));
    }

    public function delete_user($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back();


    }

    public function add_product()
    {
        $category = Category::all();

        return view('admin.add_product',
            compact('category'));
    }

    public function upload_product(Request $request)
    {

        $data = new Product;

        $data->title = $request ->title;

        $data->description = $request ->description;

        $data->price = $request ->price;

        $data->quantity = $request ->qty;

        $data->category = $request ->category;

        $image = $request->file('image');

        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('products', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        toastr()->timeOut(1000)->closeButton()
            ->addSuccess('Product Added Successfully');

        return redirect()->back();

    }
    public function view_product()
    {

        $product = Product::all();
        return view('admin.view_product',
            compact('product'));
    }

}
