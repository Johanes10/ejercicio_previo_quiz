<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trucks=Truck::orderBy('id', 'asc')->get();
        return view ('trucks.listar',compact('trucks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trucks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $truck=new Truck();
        $truck->power=$request->power;
        $truck->plate=$request->plate;
        $truck->model=$request->model;
        $truck->type=$request->type;
        $truck->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        return view('trucks.show',compact('truck'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Truck $truck)
    {
        return view('trucks.edit',compact('truck'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Truck $truck)
    {
        $truck->power=$request->power;
        $truck->plate=$request->plate;
        $truck->model=$request->model;
        $truck->type=$request->type;
        $truck->save();
        return redirect()->route('truck.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();
        return redirect()->route('truck.index');
    }
}
