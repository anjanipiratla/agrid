<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $code = random_int(100000, 999999);

        // Check if the email already exists
        if (User::where('email', $request->email)->exists()) {
            return response()->json(['message' => 'Email already registered!'], 409);
        }

        User::firstOrCreate([
            'email' => $request->email,
            'email_verification_code' => $code,
        ]);

        // Send verficiation code to the email
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'code' => $code
        ];

        Mail::to($user['email'])->send(new WelcomeMail($user));
        
        return response()->json(['message' => 'Please check your email and validate your email!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
