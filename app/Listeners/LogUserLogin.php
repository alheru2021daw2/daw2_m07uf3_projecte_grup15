<?php

namespace App\Listeners;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Support\Facades\Mail;

class LogUserLogin
{
    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        /** @var Authenticatable|null $user */
        $user = Auth::user();
        
        if ($user) {
            $user->hora_entrada = now();
            $user->save();
        }
	if($user && $user->role==='basic'){
	
	$capDepartamentUsers = User::where('role', 'cap_departament')->get();

	foreach ($capDepartamentUsers as $capDepartamentUser){
		Mail::to($capDepartamentUser->email)->send(new \App\Mail\UserLoggedIn($user));
	}
    }
}
}
