<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Associate;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:employee');
        $this->middleware('guest:patient');
        $this->middleware('guest:doctor');
        $this->middleware('guest:associate');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    //========= Admin Registration Begin  =============
        public function showAdminRegisterForm()
        {
            return view('auth.register', ['route' => route('admin.register-view'), 'title' => 'Admin']);
        }
        protected function createAdmin(Request $request)
        {
            $this->validator($request->all())->validate();
            $admin = Admin::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('admin');
        }
    //========= Admin Registration End  =============
    //========= Employee Registration Begin  =============
        public function showEmployeeRegisterForm()
        {
            return view('auth.register', ['route' => route('employee.register-view'), 'title' => 'Employee']);
        }
        protected function createEmployee(Request $request)
        {
            $this->validator($request->all())->validate();
            $employee = Employee::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('employee');
        }
    //========= Employee Registration End  =============

    //========= Patient Registration Begin  =============
    public function showPatientRegisterForm()
    {
        return view('auth.register', ['route' => route('patient.register-view'), 'title' => 'Patient']);
    }
    protected function createPatient(Request $request)
    {
        $this->validator($request->all())->validate();
        $patient = Patient::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('patient');
    }
//========= Patient Registration End  =============


//========= Doctor Registration Begin  =============
public function showDoctorRegisterForm()
{
    return view('auth.register', ['route' => route('doctor.register-view'), 'title' => 'Doctor']);
}
protected function createDoctor(Request $request)
{
    $this->validator($request->all())->validate();
    $doctor = Doctor::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
    ]);
    return redirect()->intended('doctor');
}
//========= Doctor Registration End  =============

//========= Associate Registration Begin  =============
public function showAssociateRegisterForm()
{
    return view('auth.register', ['route' => route('associate.register-view'), 'title' => 'Associate']);
}
protected function createAssociate(Request $request)
{
    $this->validator($request->all())->validate();
    $associate = Associate::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
    ]);
    return redirect()->intended('associate');
}
//========= Associate Registration End  =============
}
