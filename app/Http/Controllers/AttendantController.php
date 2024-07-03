<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttendantDetailResource;
use App\Http\Resources\AttendantResource;
use App\Models\Attendant;
use Illuminate\Http\Request;

class AttendantController extends Controller
{
    public function index()
    {
        $attendants = Attendant::all();
        // return response()->json(['data' => $attendants]);
        return AttendantResource::collection($attendants);
    }

    public function show($id)
    {
        $attendants = Attendant::with('user:id,username')->findOrFail($id);
        return new AttendantDetailResource($attendants);
    }
  
    public function store(Request $request)
    {
        return response()->json('oke store');
    }
}
