<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\IntegrationInterface;
use App\Http\Requests\IntegrationRequest;
use App\Http\Resources\IntegrationResource;

class IntegrationController extends Controller
{
    public function __construct(
        protected IntegrationInterface $integration
    ) {
        $this->integration = $integration;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return IntegrationResource::collection($this->integration->get($request)) ??
        response()->json(['success' => false, 'message' => "no record found"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IntegrationRequest $request)
    {
        if ($this->integration->create($request->all())) {
            return response()->json(['success' => true, 'message' => "Integration has been created"], 201);
        } else {
            return response()->json(['error' => true, 'message' => "Integration has not been created"], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->integration->findById($id, ['*'], ['provider']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IntegrationRequest $request, string $id)
    {
        if ($this->integration->update(['id' => $id], $request->all())) {
            return response()->json(['success' => true, 'message' => "Integration has been updated"], 200);
        } else {
            return response()->json(['error' => true, 'message' => "Integration has not been updated"], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            if ($this->integration->deleteById($id)) {
                return ['success' => true, 'message' => "record has been deleted"];
            } else {
                return ['success' => false, 'message' => "record has not been deleted"];
            }
            return response()->json($res, 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
