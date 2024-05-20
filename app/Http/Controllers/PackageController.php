<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages=Package::orderBy('id', 'asc')->get();
        return view ('packages.listar',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers= Driver::all();
        return view('packages.create',compact('drivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $package=new Package();
        $package->code=$request->code;
        $package->description=$request->description;
        $package->receiver=$request->receiver;
        $package->address=$request->address;
        $package->address=$request->address;
        $package->driver_id=$request->driver_id;
        $package->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return view('packages.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('packages.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $package->code=$request->code;
        $package->description=$request->description;
        $package->receiver=$request->receiver;
        $package->address=$request->address;
        $package->save();
        return redirect('package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('package.index');
    }
}
