<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class PagesController extends Controller
{
    public function showAllListing() {
        $dbExtract = Listing::all();
        foreach ($dbExtract as $item) {
            $mlsNum[] = $item['MLSNumber'];
            $add[] = $item['AddressDisplay'];
        }
        return view('pages/index', compact('mlsNum', 'add'));
    }
}
