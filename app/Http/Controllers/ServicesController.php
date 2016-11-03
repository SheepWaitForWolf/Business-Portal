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
use App\Models\Property;
use App\Models\School;
use App\Http\Requests;
use Response;
use DB;
use Log;


class ServicesController extends Controller
{

     public function getProperties() {

        $properties = DB::table('business_properties_mst')->simplePaginate(25);
        $feedbacks = Feedback::all();
    	return view('properties')->with('properties', $properties)->with('feedbacks', $feedbacks);
    }

     public function getFeedbackPage() {
    	$feedbacks = Feedback::all();

        return view('feedback')->with('feedbacks', $feedbacks);
    }

      public function postFeedbackPage(Request $request) {

        $feedback = new Feedback;
        $feedback->f_name = $request->f_name;
        $feedback->l_name = $request->l_name;
        $feedback->company = $request->company;
        $feedback->service = $request->service;
        $feedback->rating = $request->rating;
        $feedback->message = $request->message;

        $feedback->save();

        return $this->getFeedbackPage();

        return redirect()->route('get.services.feedback');


    }

    public function deleteFeedbackPage($id){

       $feedback = Feedback::find($id);
       $feedback->delete();
       return;
    }


    public function postMapping(Request $request, $id)
    {
        $mappingrecord = new UserChildMap;
        $mappingrecord->user_id = $id;
        $mappingrecord->child_id = $request->child_id;
        $mappingrecord->relationship_type = $request->relationship_type;

        $mappingrecord->save();
        return;
    }

}
