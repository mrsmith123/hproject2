<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return redirect('/#login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Login successful. You will be redirected in a moment.',
                'data'    => [
                    'redirect_url' => $this->redirectTo
                ]
            ]);
        }

        return response()->json([
            'status'  => 'error',
            'message' => 'Failed to log in. Either email or password is incorrect.',
            'data'    => null
        ]);

    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => ['required', 'string'],
            'password'        => ['required', 'string'],
        ]);
    }

    public function ajaxShowForm(Request $request)
    {
        return view('forms.signin');
    }

}
