<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->middleware('guest:admin')->except('adminLogout');
        $this->middleware('guest:employee')->except('logout');
        $this->middleware('guest:doctor')->except('logout');
        $this->middleware('guest:patient')->except('logout');
        $this->middleware('guest:associate')->except('logout');
    }

//==========Admin Login Begin ================
    public function showAdminLoginForm()
    {
        return view('auth.login', ['route' => route('admin.login-view'), 'title' => 'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (\Auth::guard('admin')->attempt($request->only('email', 'password'), $request->get('remember'))) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }



//========= Admin Login End =============

//==========Employee Login Begin ================
    public function showEmployeeLoginForm()
    {
        return view('auth.login', ['route' => route('employee.login-view'), 'title' => 'Employee']);
    }

    public function employeeLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (\Auth::guard('employee')->attempt($request->only('email', 'password'), $request->get('remember'))) {
            return redirect()->intended('/employee/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    public function employeeLogout(Request $request)
    {

        \Auth::guard('employee')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
//========= Employee Login End =============

//==========Doctor Login Begin ================
    public function showDoctorLoginForm()
    {
        return view('auth.login', ['route' => route('doctor.login-view'), 'title' => 'Doctor']);
    }

    public function doctorLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (\Auth::guard('doctor')->attempt($request->only('email', 'password'), $request->get('remember'))) {
            return redirect()->intended('/doctor/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    public function doctorLogout(Request $request)
    {

        \Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
//========= Doctor Login End =============

//==========Patient Login Begin ================
    public function showPatientLoginForm()
    {
        return view('auth.login', ['route' => route('patient.login-view'), 'title' => 'Patient']);
    }

    public function patientLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (\Auth::guard('patient')->attempt($request->only('email', 'password'), $request->get('remember'))) {
            return redirect()->intended('/patient/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    public function patientLogout(Request $request)
    {

        \Auth::guard('patient')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
//========= Patient Login End =============

//==========Associate Login Begin ================
    public function showAssociateLoginForm()
    {
        return view('auth.login', ['route' => route('associate.login-view'), 'title' => 'Associate']);
    }

    public function associateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (\Auth::guard('associate')->attempt($request->only('email', 'password'), $request->get('remember'))) {
            return redirect()->intended('/associate/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    public function associateLogout(Request $request)
    {

        \Auth::guard('associate')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
//========= Associate Login End =============

}
