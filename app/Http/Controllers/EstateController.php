<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    public function index()
    {
        $estates = Estate::all();
        $data = [
            "estates"        =>      $estates
        ];
        return view(view: "information", data: $data);
    }
}
