<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    public function listingExtract(){
        $propInfo = Listing::all();
        return view('listings/index', compact('propInfo'));
    }
}
