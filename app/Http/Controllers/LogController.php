<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Device::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $log = new Device;
       
        // $device->nilai_min = $request->nilai_min;
        // $device->nilai_max = $request->nilai_max;
        // $device->nilai = $request->nilai;
        $log->save();
        return response()->json([
            "message" => "log telah ditambahkan."
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
