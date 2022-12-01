<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Status;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use Illuminate\Http\JsonResponse;

class StatusController extends ApiController
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
     * @param StoreStatusRequest $request
     * @return JsonResponse
     */
    public function store(StoreStatusRequest $request): JsonResponse
    {
        $data = Status::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Status $status
     * @return JsonResponse
     */
    public function show(Status $status): JsonResponse
    {
        return $this
            ->appendBody('data', $status)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStatusRequest $request
     * @param Status $status
     * @return JsonResponse
     */
    public function update(UpdateStatusRequest $request, Status $status): JsonResponse
    {
        $status->update($request->validated());
        return $this
            ->appendBody('data', $status)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Status $status
     * @return JsonResponse
     */
    public function destroy(Status $status): JsonResponse
    {
        if($status->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
