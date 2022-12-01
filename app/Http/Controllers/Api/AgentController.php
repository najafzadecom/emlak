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
        $data = Agent::create($request->validated());
        return $this
            ->appendBody('data', $data)
            ->respondSuccessMessage('Data successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param Agent $agent
     * @return JsonResponse
     */
    public function show(Agent $agent): JsonResponse
    {
        return $this
            ->appendBody('data', $agent)
            ->respondSuccessMessage('Data successfully returned');
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
        $agent->update($request->validated());
        return $this
            ->appendBody('data', $agent)
            ->respondSuccessMessage('Data successfully updated');
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

            return $this->respondSuccessMessage('Data successfully deleted');
        }

        return $this->respondSuccessMessage('Unknown error');
    }
}
