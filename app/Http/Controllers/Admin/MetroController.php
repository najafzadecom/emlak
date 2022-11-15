<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Metro;
use App\Http\Requests\StoreMetroRequest;
use App\Http\Requests\UpdateMetroRequest;
use Illuminate\Http\JsonResponse;

class MetroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMetroRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Metro $metro
     * @return \Illuminate\Http\Response
     */
    public function show(Metro $metro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Metro $metro
     * @return \Illuminate\Http\Response
     */
    public function edit(Metro $metro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMetroRequest $request
     * @param Metro $metro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetroRequest $request, Metro $metro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Metro $metro
     * @return JsonResponse
     */
    public function destroy(Metro $metro): JsonResponse
    {
        if($metro->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
