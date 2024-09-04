<?php

namespace App\Http\Controllers;

use App\Models\Hr;
use Illuminate\Http\Request;

// app/Http/Controllers/HrController.php
class HrController extends Controller
{
    public function index()
    {
        $hrs = Hr::all();
        return response()->json($hrs);
    }

    public function store(Request $request)
    {
        $hr = Hr::create($request->all());
        return response()->json($hr, 201);
    }

    public function show(Hr $hr)
    {
        return response()->json($hr);
    }

    public function update(Request $request, Hr $hr)
    {
        $hr->update($request->all());
        return response()->json($hr);
    }

    public function destroy(Hr $hr)
    {
        $hr->delete();
        return response()->json(null, 204);
    }
}


