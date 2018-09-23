<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapListings extends Controller
{
    public function mapPlot(){
      return view('maplist/mapview');
    }

}
