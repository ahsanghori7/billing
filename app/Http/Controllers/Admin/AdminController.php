<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct(
        protected User $user
    ) {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
           $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->first()
            ], 422);
        }

            $data = $this->user::where(
                ['username' => $request->username, 'password' => $request->password]
            )->first();

        if ($data) {
            return response()->json($data, 200);
        }
            return response()->json(
                ['success' => false,  'message' => "invalid username or password"],
                401
            );
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
