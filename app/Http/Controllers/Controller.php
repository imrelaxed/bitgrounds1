<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * The authenticated user.
     *
     * @var \App\User|null
     */
    protected $user;

    /**
     * Is the user signed in?
     *
     * @var \App\User|null
     */
    protected $signedIn;

    /**
     * Share Application Settings throughout the app.
     *
     * @var $app_settings
     */
    protected $app_settings;

    /**
     * Create a new controller instance.
     *
     */
}
