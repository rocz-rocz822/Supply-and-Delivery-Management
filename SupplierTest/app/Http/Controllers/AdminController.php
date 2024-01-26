<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.index');
    }

    public function supply() {
        return view('admin.pages.supply');
    }
    
    public function returned() {
        return view('admin.pages.returned');
    }

    public function transaction() {
        return view('admin.pages.transaction');
    }

    public function create() {
        return view('admin.create');
    }

    public function create_repeater(Request $request) {
        $category = $request->category;
        $product = $request->product;
        $quantity = $request->quantity;
        
        for ($i=0; $i < count($name); $i++) {
            $datasave = [
                'CategoryName'=>$category,
                'ProductName'=>$product,
                'Quantity'=>$quantity,
            ];
            DB::table('StockOrder')->insert($datasave);
        }
        Session::put('success', "Save Data Successfully!");
        return back();
        //dd($request->all());
    }
}
