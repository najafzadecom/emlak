<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Compare;
use App\Http\Requests\StoreCompareRequest;
use App\Http\Requests\UpdateCompareRequest;
use Illuminate\Http\JsonResponse;

class CompareController extends ApiController
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
     * @param StoreCompareRequest $request
     * @return JsonResponse
     */
    public function store(StoreCompareRequest $request): JsonResponse
    {
        $data = Compare::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Compare $compare
     * @return JsonResponse
     */
    public function show(Compare $compare): JsonResponse
    {
        return $this
            ->appendBody('data', $compare)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompareRequest $request
     * @param Compare $compare
     * @return JsonResponse
     */
    public function update(UpdateCompareRequest $request, Compare $compare): JsonResponse
    {
        $compare->update($request->validated());
        return $this
            ->appendBody('data', $compare)
            ->respondSuccessMessage('Data successfully updated');
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

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
