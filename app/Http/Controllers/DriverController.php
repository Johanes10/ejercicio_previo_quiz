<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers=Driver::orderBy('id', 'asc')->get();
        return view ('drivers.listar',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver=new Driver();
        $driver->dni=$request->dni;
        $driver->poblation=$request->poblation;
        $driver->name=$request->name;
        $driver->telephone=$request->telephone;
        $driver->address=$request->address;
        $driver->salary=$request->salary;
        $driver->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return view('drivers.show',compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('drivers.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $driver->dni=$request->dni;
        $driver->poblation=$request->poblation;
        $driver->name=$request->name;
        $driver->telephone=$request->telephone;
        $driver->address=$request->address;
        $driver->salary=$request->salary;
        $driver->save();
        return redirect()->route('driver.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('driver.index');
    }
}
