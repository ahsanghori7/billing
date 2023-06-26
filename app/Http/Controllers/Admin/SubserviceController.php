<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\SubServiceInterface;
use App\Http\Resources\SubserviceResource;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SubserviceRequest;

class SubserviceController extends Controller
{
    public function __construct(
        protected SubServiceInterface $subservice
    ) {
        $this->subservice = $subservice;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($this->subservice->all()->isNotEmpty()) {
            return SubserviceResource::collection($this->subservice->all(
                ['service','country','integration','operator']
            ));
        } else {
            return response()->json(['success' => false, 'message' => "no record found"]);
        }
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
    public function store(SubserviceRequest $request)
    {
        $created = $this->subservice->create($request->all());
        if ($created) {
            return response()->json(['success' => true, 'message' => "subservice has been created"], 201);
        } else {
            return response()->json(['error' => true, 'message' => "subservice has not been created"], 422);
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
    public function update(SubserviceRequest $request, string $id)
    {
        $updated = $this->subservice->update(['id' => $id], $request->all());
        if ($updated) {
            return response()->json(['success' => true, 'message' => "subservice has been updated"], 200);
        } else {
            return response()->json(['error' => true, 'message' => "subservice has not been updated"], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $res = DB::transaction(function () use ($id) {
            if ($this->subservice->update(['id' => $id], ['status' => false])) {
                $this->subservice->deleteById($id);
                return ['success' => true, 'message' => "record has been deleted"];
            } else {
                return ['success' => false, 'message' => "record has not been deleted"];
            }
        });

        return response()->json($res, 200);
    }
}
