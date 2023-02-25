<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    public function authenticate()
    {
        return response()->json([
            "status"    => "success",
            "message"   => __("auth.logout_success"),
        ], Response::HTTP_OK);
    }
}
