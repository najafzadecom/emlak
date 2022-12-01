<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use Illuminate\Http\JsonResponse;

class MessageController extends ApiController
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
     * @param StoreMessageRequest $request
     * @return JsonResponse
     */
    public function store(StoreMessageRequest $request): JsonResponse
    {
        $data = Message::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Message $message
     * @return JsonResponse
     */
    public function show(Message $message): JsonResponse
    {
        return $this
            ->appendBody('data', $message)
            ->respondSuccessMessage('Data successfully returned');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMessageRequest $request
     * @param Message $message
     * @return JsonResponse
     */
    public function update(UpdateMessageRequest $request, Message $message): JsonResponse
    {
        $message->update($request->validated());
        return $this
            ->appendBody('data', $message)
            ->respondSuccessMessage('Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Message $message
     * @return JsonResponse
     */
    public function destroy(Message $message): JsonResponse
    {
        if($message->delete()) {

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
