<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\JsonResponse;

class AgentController extends ApiController
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
     * @param StoreAgentRequest $request
     * @return JsonResponse
     */
    public function store(StoreAgentRequest $request): JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Agent $agent
     * @return JsonResponse
     */
    public function show(Agent $agent): JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAgentRequest $request
     * @param Agent $agent
     * @return JsonResponse
     */
    public function update(UpdateAgentRequest $request, Agent $agent): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Agent $agent
     * @return JsonResponse
     */
    public function destroy(Agent $agent): JsonResponse
    {
        if($agent->delete()) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
