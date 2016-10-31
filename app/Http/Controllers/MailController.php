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

class MailController extends Controller
{
    public function index()
    {
    	$emails = DB::table('business_mail_mst')->simplePaginate(20);

    	return view('mailbox.mailbox', ['emails' => $emails]);
    }
}
