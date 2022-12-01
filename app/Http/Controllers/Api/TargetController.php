<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Target;
use App\Http\Requests\StoreTargetRequest;
use App\Http\Requests\UpdateTargetRequest;
use Illuminate\Http\JsonResponse;

class TargetController extends ApiController
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
     * @param StoreTargetRequest $request
     * @return JsonResponse
     */
    public function store(StoreTargetRequest $request): JsonResponse
    {
        $data = Target::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Target $target
     * @return JsonResponse
     */
    public function show(Target $target): JsonResponse
    {
        return $this
            ->appendBody('data', $target)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTargetRequest $request
     * @param Target $target
     * @return JsonResponse
     */
    public function update(UpdateTargetRequest $request, Target $target): JsonResponse
    {
        $target->update($request->validated());
        return $this
            ->appendBody('data', $target)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Target $target
     * @return JsonResponse
     */
    public function destroy(Target $target): JsonResponse
    {
        if($target->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
