<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Interfaces\MessagesTemplateInterface;
use App\Http\Requests\MessagesRequest;
use App\Http\Resources\MessagesResource;

class MessagesController extends Controller
{
    public function __construct(
        protected MessagesTemplateInterface $messagesTemplate
    ) {
        $this->messagesTemplate = $messagesTemplate;
    }

    /**
     * Display a listing of the resource.
     */
    public function getMessages(MessagesRequest $request)
    {
        return MessagesResource::collection($this->messagesTemplate->filter($request)) ??
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
    public function store(MessagesRequest $request)
    {
        if ($this->messagesTemplate->create($request->all())) {
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
    public function update(MessagesRequest $request, string $id)
    {
        if ($this->messagesTemplate->update(['id' => $id], $request->all())) {
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
            if ($this->messagesTemplate->deleteById($id)) {
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
