<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Enums\Role;

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
    protected $redirectTo ='/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        // تحقق من الدور بعد تسجيل الدخول
        if (auth()->check()) {
            $role = auth()->user()->role;

            // إذا كان الدور Admin
            if ($role === Role::Admin) {
                return route('admin.dashboard');
            }

            // إذا كان الدور Student
            if ($role === Role::Student) {
                return route('student.dashboard');
            }
        }

        // إذا لم يتم العثور على الدور، التوجيه إلى الصفحة الرئيسية للمستخدم
        return route('user.home');
    }
}
