<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use Illuminate\Http\JsonResponse;

class NotificationController extends ApiController
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
     * @param StoreNotificationRequest $request
     * @return JsonResponse
     */
    public function store(StoreNotificationRequest $request): JsonResponse
    {
        $data = Notification::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Notification $notification
     * @return JsonResponse
     */
    public function show(Notification $notification): JsonResponse
    {
        return $this
            ->appendBody('data', $notification)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNotificationRequest $request
     * @param Notification $notification
     * @return JsonResponse
     */
    public function update(UpdateNotificationRequest $request, Notification $notification): JsonResponse
    {
        $notification->update($request->validated());
        return $this
            ->appendBody('data', $notification)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Notification $notification
     * @return JsonResponse
     */
    public function destroy(Notification $notification): JsonResponse
    {
        if($notification->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
