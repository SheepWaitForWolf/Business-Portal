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
use App\User;

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
       
        $username = json_decode(json_encode(DB::table('business_users_mst')->select(DB::raw('SUBSTRING_INDEX(name, " ", 1) as firstname'))->where('email', '=', 'big_tony@gmail.com')->get()));

        $fname = $username[0]->firstname;

        return view('home')->with('inboxcount', $inboxcount)->with('fname', $fname);
    }

    public function updateUserInfo(Request $request)
    {
        $userid = Auth::id();
        $userrecord = User::find($userid);
        $userrecord->name = $request->name;
        $userrecord->username = $request->username;
        $userrecord->post_code = $request->post_code;
        $userrecord->mobile_number = $request->mobile_number;
        $userrecord->dob = $request->dob;
        $userrecord->email = $request->email;
        $userrecord->avatar = $request->avatar;
        $userrecord->save();

        $sql = json_decode(json_encode(DB::table('business_users_mst')->select('name')->where('id', '=', $userid)->get()));
        $name = $sql[0]->name;
        $inboxcount = 13;

        return view('home')->with('name', $name)->with('inboxcount', $inboxcount);
    }

}
