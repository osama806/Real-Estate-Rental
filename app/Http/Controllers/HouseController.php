<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        $data = [
            "houses"        =>      $houses
        ];
        return view(view: "information", data: $data);
    }
}
