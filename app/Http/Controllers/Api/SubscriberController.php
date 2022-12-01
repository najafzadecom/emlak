<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SubscriberController extends ApiController
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
     * @param StoreSubscriberRequest $request
     * @return JsonResponse
     */
    public function store(StoreSubscriberRequest $request): JsonResponse
    {
        $data = Subscriber::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Subscriber $subscriber
     * @return JsonResponse
     */
    public function show(Subscriber $subscriber): JsonResponse
    {
        return $this
            ->appendBody('data', $subscriber)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSubscriberRequest $request
     * @param Subscriber $subscriber
     * @return JsonResponse
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber): JsonResponse
    {
        $subscriber->update($request->validated());
        return $this
            ->appendBody('data', $subscriber)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subscriber $subscriber
     * @return JsonResponse
     */
    public function destroy(Subscriber $subscriber): JsonResponse
    {
        if($subscriber->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
