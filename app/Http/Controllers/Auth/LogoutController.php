<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public $guard;
    public function __invoke(Request $request)
    {

    }
    public function logout(Request $request  )
    {
        // dd(\Auth::guard()->name);
        if(auth()->guard()->name=='admin'){\Auth::guard('admin')->logout();}
        elseif(auth()->guard()->name=='employee'){\Auth::guard('employee')->logout();}
        elseif(auth()->guard()->name=='patient'){\Auth::guard('patient')->logout();}
        \Session::flush();
        header("cache-Control:no-store,no-cache, must-revalidate");
        header("cache-Control:post-check=0,pre-check=0",false);
        header("Pragma:no-cache");
        header("Expires: Sat,26 Jul 1997 05:00:00: GMT");
        $request->session()->flush();
        $request->session()->regenerate();
//  return Redirect::to('/');
        return redirect()->route('landing');
    }
}
