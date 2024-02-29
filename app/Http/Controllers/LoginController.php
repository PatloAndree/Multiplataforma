<?php

namespace App\Http\LoginControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoginControllers extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
