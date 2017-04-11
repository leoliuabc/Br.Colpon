<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Store;
use App\Offer;

class OfferController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($store_id,$id)
    {
        $top_stores = Store::top_stores();
        $new_offers = Offer::new_offers();
        $offer = Offer::find($id);
        $store = Store::find($store_id);
        return view('offer',['top_stores' => $top_stores,'offer' => $offer,'store' => $store,'new_offers' => $new_offers]);
    }

    public function new_offers()
    {
        $top_stores = Store::top_stores();
        $new_offers = Offer::new_offers();
        return view('newoffer',['top_stores' => $top_stores,'new_offers' => $new_offers]);
    }
}
