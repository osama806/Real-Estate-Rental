<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function cleanPrice()
    {
        $estates = Estate::all();
        foreach ($estates as $estate) {
            // لحذف كل المحارف التي ليست ارقام
            $priceNewForm = preg_replace("/[^0-9]/", "", $estate->price);
            // لحذف اخر صفرين
            $estate->price = substr($priceNewForm, 0, -2);
            $estate->save();
        }
        return redirect()->route("estates.index");
    }
    public function index()
    {
        $estates = Estate::all();
        $data = [
            "estates"       =>      $estates
        ];
        return view(view: "Owner.Estate.index", data: $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: "Owner.Estate.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "broker"            =>      "required|string|max:255",
            "type"              =>      "required|string|max:255",
            "price"             =>      "required|numeric",
            "beds"              =>      "required|numeric",
            "paths"             =>      "required|numeric",
            "address"           =>      "required|string|max:255",
            "state"             =>      "required|string|max:255",
            "locality"          =>      "required|string|max:255",
            "sub_locality"      =>      "required|string|max:255",
            "street"            =>      "required|string|max:255",
        ]);
        $record_create = Estate::create([
            "broker"            =>      $request->broker,
            "type"              =>      $request->type,
            "price"             =>      $request->price,
            "beds"              =>      $request->beds,
            "paths"             =>      $request->paths,
            "address"           =>      $request->address,
            "state"             =>      $request->state,
            "locality"          =>      $request->locality,
            "sub_locality"      =>      $request->sub_locality,
            "street"            =>      $request->street_name,
            "owner"             =>      auth()->user()->name,
            "reserved"          =>      "no",
            "rented"            =>      "no"
        ]);
        if (!$record_create) {
            $record_create->delete();
            return redirect()->back()->with("msg", "This information not saved, Because of a problem");
        }
        return redirect()->route("estates.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estate = Estate::find($id);
        $data = [
            "estate"        =>      $estate
        ];
        return view(view: "Owner.Estate.show", data: $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estate = Estate::find($id);
        $data = [
            "estate"        =>      $estate
        ];
        return view(view: "Owner.Estate.edit", data: $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estate = Estate::find($id);
        $request->validate([
            "broker"            =>      "required|string|max:255",
            "type"              =>      "required|string|max:255",
            "price"             =>      "required|numeric",
            "beds"              =>      "required|numeric",
            "paths"             =>      "required|numeric",
            "address"           =>      "required|string|max:255",
            "state"             =>      "required|string|max:255",
            "locality"          =>      "required|string|max:255",
            "sub_locality"      =>      "required|string|max:255",
            "street"            =>      "required|string|max:255",
        ]);
        $estate->broker = $request->broker;
        $estate->type = $request->type;
        $estate->price = $request->price;
        $estate->beds = $request->beds;
        $estate->paths = $request->paths;
        $estate->address = $request->address;
        $estate->state = $request->state;
        $estate->locality = $request->locality;
        $estate->sub_locality = $request->sub_locality;
        $estate->street_name = $request->street;
        $estate->save();
        return redirect()->route("estates.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estate = Estate::find($id);
        $estate->delete();
        return redirect()->route("estates.index");
    }
}
