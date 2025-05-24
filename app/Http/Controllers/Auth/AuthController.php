<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{


    public function register(Request $request)
    {
        $fields = $request->all();

        $errors = Validator::make($fields, [
            'name' => 'required',
            'password' => 'required|max:6',
            'email' => 'required|email|unique:users,email',
        ]);

        if ($errors->fails()) {
            return response([
                'errors' => $errors->errors()->all(),
            ], 422);
        }

        $user = User::create([
            'name' => $fields['name'],
            'password' => bcrypt($fields['password']),
            'otp_code' => $fields['otp_code'],
            'email' => $fields['email'],
            'is_valid_email' => User::IS_INVALID_EMAIL,
        ]);

        Mail::to($user->email)->send(new SendMail($user));

        return response([
            'message' => 'Your account has been created successfully!',
            'user' => $user
        ], 200);
    }
}
