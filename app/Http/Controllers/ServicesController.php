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

    public function getSchools(Request $request){
        
        $authorities = LocalAuthority::all();
        $absences = Absence::all();
        $id = intval($id = $request->d);
        $la_name = LocalAuthority::find($id)->la_name;
        $schools = DB::select('SELECT school_name FROM portal_schools_mst WHERE local_authority_id = :id', ['id' => $id]);
        $response = Response::make($schools, "200");
        $response->header('Content-Type', 'text/json');
        return $response;
        return $la_name;
    }

     public function getAbsencePage(Request $request) {

        $authorities = LocalAuthority::all();
        $absences = Absence::all();
        $schools = DB::select('SELECT school_name FROM portal_schools_mst WHERE local_authority_id = :id', ['id' => 1]);
        $response = $schools;
    	return view('absence')->with('authorities', $authorities)->with('absences', $absences)->with('schools', $schools)->with('response', $response);
    }

     public function getAnnualUpdatePage() {
        $children = Child::all();
        $authorities = LocalAuthority::all();
        $absences = Absence::all();

    	return view('annualupdate')->with('children', $children)->with('authorities', $authorities);
    }

     public function getProperties() {
        $properties = Property::all();
        $feedbacks = Feedback::all();
    	return view('properties')->with('properties', $properties)->with('feedbacks', $feedbacks);
    }

     public function getSchoolMealsPage() {
    	return view('schoolmeals');
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

   
    public function postAbsencePage(Request $request)
    {
        $la_name = LocalAuthority::find($request->la)->la_name;
        $absencerecord = new Absence;
        $absencerecord->f_name = $request->f_name;
        $absencerecord->l_name = $request->l_name;
        $absencerecord->la = $la_name;
        $absencerecord->school = $request->school;
        $absencerecord->school_id = $request->id;

        $absencerecord->doa = $request->doa;
        $absencerecord->reason_for_absence = $request->reason_for_absence;
        $absencerecord->save();

        // return $this->getAbsencePage();

        return redirect()->route('post.services.postAbsencePage');
    }

     public function postChildren(Request $request)
    {
        $childrecord = new Child;
        $childrecord->f_name = $request->f_name;
        $childrecord->l_name = $request->l_name;
        $childrecord->gender = $request->gender;
        $childrecord->dob = $request->dob;
        $childrecord->class_level = $request->class_level;
        $childrecord->school = $request->school;
        $childrecord->local_authority_id = $request->local_authority_id;
        $childrecord->save();

        // return $this->getChildren();

        return redirect()->route('get.services.getChildren');


        
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


     public function updateChildren(Request $request)
    {
        $childrecord = Child::find($request->child_id);
        $childrecord->f_name = $request->f_name;
        $childrecord->l_name = $request->l_name;
        $childrecord->gender = $request->gender;
        $childrecord->dob = $request->dob;
        $childrecord->save();

        return $this->getChildren();
        
    }

    public function deleteChild($id){

       $childrecord = Child::find($id);
       $childrecord->delete();
       return $this->getChildren();
       // return redirect()->route('get.services.geredirect()->route('get.services.getChildren')tChildren');
    }

    public function deleteAbsencePage($id){

       $absencerecord = Absence::find($id);
       $absencerecord->delete();
       return;
    }

}
