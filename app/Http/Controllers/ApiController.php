<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Temperature;
use Carbon\Carbon;
use Carbon\CarbonTimeZone;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //Store the temperature
    //Time get saved as well. Could be used instead of the time GET request
    public function store(Request $request)
    {
        $temperature = new Temperature;
        $temperature->value = $request->input('value');
        $temperature->save();
        return response()->json(['message' => 'Temperature recorded successfully'], 201);
    }

    //Return the temperature
    public function index()
    {
        $temperatures = Temperature::all();
        return response()->json($temperatures, 200);
    }

    //get the latest temperature value
    public function getLastValue()
    {
        $lastValue = Temperature::orderBy('created_at', 'desc')->first();
        return response()->json(['value' => $lastValue->value]);
    }
    //Return current timestamp
    public function time()
    {
        $mytime = now();
        
        return response()->json($mytime);
    }

    //Returns the current status of the brushless fan: On/off
    public function fanStatus()
    {
        //write the code to get the status of the fan
        //$fanStatus = ...;
        //return response()->json($fanStatus);
    }

    //Changes the current status of the brushless fan: On/off
    public function changeFanStatus()
    {
        //Could also do this in the java application
    }
}
