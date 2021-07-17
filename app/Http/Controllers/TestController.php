<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        /**
         * 
         * belongsToThrough package example https://github.com/staudenmeir/belongs-to-through
         */
        // $datas = Country::with('shops')->get();
        // $datas = Shop::with(['city', 'country'])->limit(1)->get();
        // $datas = User::with(['city', 'country', 'shop'])->limit(1)->get();

        /**
         * 
         * belongsToThrough package example https://github.com/staudenmeir/eloquent-has-many-deep
         */
        $datas = Country::with(['users'])->where('id', 81)->limit(1)->get();

        // dd($datas);
        return view('test', compact('datas'));
    }
}
