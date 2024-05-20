<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\DriverTruck;
use App\Models\Truck;
use Illuminate\Http\Request;

class DriverTruckController extends Controller
{
    public function index()
    {
        $drivers_trucks=DriverTruck::orderBy('id', 'asc')->get();
        return view ('drivers_trucks.listar',compact('drivers_trucks'));
    }
     //Create    
     public function create(){
        
        $trucks = Truck::all();
        $drivers = Driver::all();
       
       return view('drivers_trucks.create',compact('trucks', 'drivers'));

    }
//Store
    public function store(Request $request){
       
        $driver_truck= new DriverTruck();
        $driver_truck->driver_id=$request->driver_id;//llave foranea
        $driver_truck->truck_id=$request->truck_id;
        $driver_truck->save();
    }
    
    public function show(DriverTruck $driver_truck){
            return view('drivers_trucks.show',compact('driver','truck'));
        }
    public function destroy(DriverTruck $driver_truck)
    {
        $driver_truck->delete();
        return redirect()->route('drivers_trucks.index');
    }

    
}
