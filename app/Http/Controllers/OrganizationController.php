<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Hr;
use App\Models\Doctor;
use App\Models\Student;
use Illuminate\Http\Request;

// app/Http/Controllers/OrganizationController.php
class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        return response()->json($organizations);
    }

    public function store(Request $request)
    {
        $organization = Organization::create($request->all());
        return response()->json($organization, 201);
    }

    public function show(Organization $organization)
    {
        return response()->json($organization);
    }

    public function update(Request $request, Organization $organization)
    {
        $organization->update($request->all());
        return response()->json($organization);
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return response()->json(null, 204);
    }
}




