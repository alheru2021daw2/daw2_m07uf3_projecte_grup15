use Illuminate\Auth\Events\Login;

protected $listen = [
    'Illuminate\Auth\Events\Login' => [
        'App\Listeners\LogUserLogin',
    ],
    'Illuminate\Auth\Events\Logout' => [
        'App\Listeners\LogUserLogout',
    ],
];
