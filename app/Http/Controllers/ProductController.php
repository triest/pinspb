<?php

namespace App\Http\Controllers;

use App\Eloquent;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Eloquent::select('id', 'name', 'art')->Paginate(50);

        return view('products.index')->with(['products' => $products]);
    }

    public function create(Request $request)
    {
        return view("products.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:10|max:100|',
            'art' => 'required|max:100|unique:products',
        ]);
        $elequent = new Eloquent();
        $elequent->name = $request->name;
        $elequent->art = $request->art;
        $elequent->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $product = Eloquent::select('id', 'name', 'art')->where('id', $id)->first();

        return view('products.edit')->with(['product' => $product]);
    }

    public function saveEdit($request)
    {
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|min:10|max:100|',
            'art' => 'max:100|unique:products',
        ]);


        $product = Eloquent::select('id', 'name', 'art')->where('id', $request->id)->first();
        if ($product != null) {
            $product->name = $request->name;
            $user = Auth::user();
            $role = $user->role()->first();
            if ($role->name == admin) {
                $product->art = $request->art;
            }
            $product->save();

            return redirect('/');
        } else {
            return redirect('/');
        }
        //*Тут проверка на права*/
    }
}
