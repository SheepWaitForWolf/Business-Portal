<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Form;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Feedback;
use App\Models\LocalAuthority;
use App\Models\Absence;
use App\Models\School;
use App\Http\Requests;
use Response;
use DB;
use Log;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function showLogin()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
         if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) 
        {
        return redirect('/home');
        }
        else {
        return redirect('/login')->withErrors([
            'email' => 'The credentials you entered did not match our records. Try again?',
            ]);
    }
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }

    public function displayUserInfo(Request $request)
    {
        $inboxcount = 13;
        $childcount = count(DB::table('portal_child_mst')->select('*')->get());
       
        $username = json_decode(json_encode(DB::table('portal_users_mst')->select(DB::raw('SUBSTRING_INDEX(name, " ", 1) as firstname'))->where('email', '=', 'big_tony@gmail.com')->get()));

        $fname = $username[0]->firstname;

        return view('home')->with('childcount', $childcount)->with('inboxcount', $inboxcount)->with('fname', $fname);
    }

}
