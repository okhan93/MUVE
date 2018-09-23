<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class PropertyInfo extends Controller
{
    public function showDetails($mlsNum){
        $dbExtract = Listing::all();
        foreach ($dbExtract as $item) {
            if ($item['MLSNumber'] == $mlsNum){
                $propAdd = $item['AddressDisplay'];
                $propPrice = $item['CurrentPrice'];
                $propRemark = $item['PublicRemarks'];
                $propBed = $item['BedsTotal'];
                $propBath = $item['BathsTotal'];
                $propYr = $item['YrBuilt'];
                $propComm = $item['Community'];
                $propPin = $item['PostalCode'];
            }
        }
        return view('prop/index', compact('mlsNum', 'propAdd', 'propPrice', 'propRemark', 'propBed', 'propBath', 'propYr', 'propComm', 'propPin'));
    }
}
