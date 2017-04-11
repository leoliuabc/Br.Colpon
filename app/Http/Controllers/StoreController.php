<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Store;
use App\Offer;

class StoreController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($titleslug,$id)
    {
        $top_stores = Store::top_stores();
        $store = Store::find($id);
        $new_offers = Offer::new_offers();
        return view('store',['top_stores' => $top_stores,'store' => $store,'new_offers' =>$new_offers]);
    }

    public function map()
    {
        $initials = Store::initials();
        $stores = Store::all();
        return view('storemap',['initials' => $initials,'stores' => $stores]);
    }
}
