<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    //

    public function index ()
    {
        $categories=Money::all(); 
        return view('index',compact('categories'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $category = new Money();
        $category->price = $request->input('price');
        $category->day = Carbon::now()->format('l'); // اسم اليوم
        $category->save();
        return redirect()->route('index');
    }


}
