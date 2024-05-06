<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class LogUserLogout
{
    /**
     * Handle the event.
     */
    public function handle(Logout $event): void
    {
        /** @var Authenticatable|null $user */
        $user = Auth::user();
        
        if ($user) {
            $user->hora_sortida = now();
            $user->save();
        }
    }
}

