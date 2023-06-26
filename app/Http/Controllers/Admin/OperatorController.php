<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\OperatorInterface;
use App\Http\Requests\OperatorRequest;
use App\Http\Resources\OperatorResource;

class OperatorController extends Controller
{
    public function __construct(
        protected OperatorInterface $operator
    ) {
        $this->operator = $operator;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(OperatorRequest $request)
    {
        return OperatorResource::collection($this->operator->filter($request)) ??
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
    public function store(OperatorRequest $request)
    {
        if ($this->operator->create($request->all())) {
            return response()->json(['success' => true, 'message' => "Message has been created"], 201);
        } else {
            return response()->json(['error' => true, 'message' => "Message has not been created"], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(OperatorRequest $request, string $id)
    {
        if ($this->operator->update(['id' => $id], $request->all())) {
            return response()->json(['success' => true, 'message' => "Message has been updated"], 200);
        } else {
            return response()->json(['error' => true, 'message' => "Message has not been updated"], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            if ($this->operator->deleteById($id)) {
                return ['success' => true, 'message' => "record has been deleted"];
            } else {
                return ['success' => false, 'message' => "record has not been deleted"];
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
