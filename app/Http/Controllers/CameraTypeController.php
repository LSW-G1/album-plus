<?php

namespace App\Http\Controllers;

use App\Models\CameraType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CameraTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cameras = CameraType::all();

        return view("cameras.index", compact("cameras"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("cameras.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        CameraType::create($request->all());

        return redirect(route("cameras.index"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CameraType $camera
     * @return Response
     */
    public function edit(CameraType $camera)
    {
        return view("cameras.edit", compact("camera"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param CameraType               $camera
     * @return void
     */
    public function update(Request $request, CameraType $camera)
    {
        $camera->update($request->all());
        return redirect(route("cameras.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CameraType $camera
     * @return Response
     * @throws \Exception
     */
    public function destroy(CameraType $camera)
    {
        $camera->delete();

        return response()->json();
    }
}
