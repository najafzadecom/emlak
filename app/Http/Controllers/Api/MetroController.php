<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Metro;
use App\Http\Requests\StoreMetroRequest;
use App\Http\Requests\UpdateMetroRequest;
use Illuminate\Http\JsonResponse;

class MetroController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMetroRequest $request
     * @return JsonResponse
     */
    public function store(StoreMetroRequest $request): JsonResponse
    {
        $data = Metro::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Metro $metro
     * @return JsonResponse
     */
    public function show(Metro $metro): JsonResponse
    {
        return $this
            ->appendBody('data', $metro)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMetroRequest $request
     * @param Metro $metro
     * @return JsonResponse
     */
    public function update(UpdateMetroRequest $request, Metro $metro): JsonResponse
    {
        $metro->update($request->validated());
        return $this
            ->appendBody('data', $metro)
            ->respondSuccessMessage('Data successfully updated');
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

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
