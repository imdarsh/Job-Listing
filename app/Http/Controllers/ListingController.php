<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listing
    public function index() {
        return view('listings.index',[
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show',[
            'listing' => $listing
        ]);
    }

    
}
