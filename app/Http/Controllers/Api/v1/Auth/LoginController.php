<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;

class LoginController extends ApiController
{
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) return $this->respondUnauthorized();

        request()->user()->update(['last_login' => now()]);

        $user            = request()->user();
        $tokenResult    = $user->createToken('Personal Access Token');
        $token            = $tokenResult->token;

        if (request()->remember_me) $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        $data = [
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ];
        return $this->makeResponse($data);
    }
}
