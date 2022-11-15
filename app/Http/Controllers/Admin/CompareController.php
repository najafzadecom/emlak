<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compare;
use App\Http\Requests\StoreCompareRequest;
use App\Http\Requests\UpdateCompareRequest;
use Illuminate\Http\JsonResponse;

class CompareController extends Controller
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
     * @param StoreCompareRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompareRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Compare $compare
     * @return \Illuminate\Http\Response
     */
    public function show(Compare $compare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Compare $compare
     * @return \Illuminate\Http\Response
     */
    public function edit(Compare $compare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompareRequest $request
     * @param Compare $compare
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompareRequest $request, Compare $compare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Compare $compare
     * @return JsonResponse
     */
    public function destroy(Compare $compare): JsonResponse
    {
        if($compare->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
