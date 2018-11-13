<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\UserLogs;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    protected function attemptLogin(Request $request)
    {
        $userLog = new UserLogs();

        $credentials = $request->only('email', 'password');

        if (Auth::once($credentials)) {
            $emailNotFound = false;
            $passwordError = false;
        }else{
            $passwordError = true;

            if(User::where('email', '=', $request["email"])->count() == 0){
                $emailNotFound = true;
            }else{
                $emailNotFound = false;
            }
        }

        $userLog->ip = $request->ip();
        $userLog->email = $request["email"];
        $userLog->passwordError = $passwordError;
        $userLog->emailNotFound = $emailNotFound;

        $userLog->saveOrFail();

        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
