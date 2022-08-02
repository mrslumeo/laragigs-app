<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all Listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }


    //show all Listings

    public function show(Listing $listing) {
        return view('listing.show', [
            'listing' => $listing
        ]);
    }

}
