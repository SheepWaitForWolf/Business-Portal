<?php // Route::get('/',['uses'=>'IdP_AuthenticationController@getUserHome','as'=>'get.auth.userhome']);

Route::get('/',['uses'=>'SchoolsOnline\HomePageController@getLandingPage','as'=>'get.schoolsonline.homepage.landingpage']);
Route::get('/login',['uses'=>'SchoolsOnline\HomePageController@getLandingPage','as'=>'get.schoolsonline.homepage.landingpage']);
Route::get('/doLogin',['uses'=>'IdP_AuthenticationController@doLogin','as'=>'get.schoolsonline.auth.doLogin']);

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/userhome',['uses'=>'SchoolsOnline\UserHomeController@getUserHome','as'=>'get.schoolsonline.userhome.getUserHome']);
    Route::get('/doLogout',['uses'=>'IdP_AuthenticationController@doLogout','as'=>'get.schoolsonline.auth.doLogout']);


    Route::get('/userhome/claimchildrecord/startprocess',['uses'=>'SchoolsOnline\SchoolServicesController@claimChildStart','as'=>'get.schoolsonline.auth.claimChildStart']);
    Route::get('/userhome/claimchildrecord/startprocess/step1',['uses'=>'SchoolsOnline\SchoolServicesController@getClaimChildStartStep1','as'=>'get.schoolsonline.auth.claimChildStartStep1']);
    Route::post('/userhome/claimchildrecord/startprocess/step1',['uses'=>'SchoolsOnline\SchoolServicesController@postClaimChildStartStep1','as'=>'post.schoolsonline.auth.claimChildStartStep1']);
    Route::get('/userhome/claimchildrecord/startprocess/step2/{id}',['uses'=>'SchoolsOnline\SchoolServicesController@getClaimChildStartStep2','as'=>'get.schoolsonline.auth.claimChildStartStep2']);
    Route::post('/userhome/claimchildrecord/startprocess/step2',['uses'=>'SchoolsOnline\SchoolServicesController@postClaimChildStartStep2','as'=>'post.schoolsonline.auth.claimChildStartStep2']);
    Route::get('/userhome/claimchildrecord/successprocess',['uses'=>'SchoolsOnline\SchoolServicesController@getSuccessProcess','as'=>'get.schoolsonline.auth.getSuccessProcess']);
    Route::get('/userhome/claimchildrecord/failedprocess',['uses'=>'SchoolsOnline\SchoolServicesController@getFailedProcess','as'=>'get.schoolsonline.auth.getFailedProcess']);
    Route::get('/userhome/claimedchildrecord/showchildren',['uses'=>'SchoolsOnline\UserHomeController@showClaimedChildren','as'=>'get.schoolsonline.auth.showClaimedChildren']);

    Route::get('/userhome/claimedchildrecord/services/{id}',['uses'=>'SchoolsOnline\UserHomeController@claimedChildServices','as'=>'get.schoolsonline.auth.claimedChildServices']);

    Route::get('/userhome/claimedchildrecord/services/{id}/reportabsence',['uses'=>'SchoolsOnline\UserHomeController@claimedChildServicesReportAbsence','as'=>'get.schoolsonline.auth.claimedChildServices.reportAbsence']);
    Route::get('/userhome/claimedchildrecord/services/{id}/placementrequest',['uses'=>'SchoolsOnline\UserHomeController@claimedChildServicesPlacementRequest','as'=>'get.schoolsonline.auth.claimedChildServices.placementRequest']);
    Route::get('/userhome/claimedchildrecord/services/{id}/freeschoolmean',['uses'=>'SchoolsOnline\UserHomeController@claimedChildServicesFreeSchoolMeal','as'=>'get.schoolsonline.auth.claimedChildServices.freeSchoolMeal']);

    Route::get('/userhome/requestPINLetter',['uses'=>'SchoolsOnline\SchoolServicesController@requestPINLetter','as'=>'get.schoolsonline.auth.requestPINLetter']);
    Route::post('/userhome/requestPINLetter',['uses'=>'SchoolsOnline\SchoolServicesController@postRequestPINLetter','as'=>'post.schoolsonline.auth.requestPINLetter']);

    // Services Route
    Route::get('/userhome/services/placementrequest',['uses'=>'SchoolsOnline\SchoolServicesController@getPlacementRequestForm','as'=>'get.schoolsonline.auth.getPlacementRequestForm']);