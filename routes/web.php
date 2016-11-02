<?php

use App\Mail\AccountCreated;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@logout'));

Route::get('/search', [ 
    'as' => 'api.search',
    'uses' => 'Api\SearchController@search'
]);

Route::group(['middleware' => ['web','auth']], function () {

	Route::get('/accessibility', function () {
		return view('accessibility');
	});

	Route::get('/help', function () {
		return view('help');
	});

		Route::get('/startup', function () {
		return view('startup');
	});

	Route::get('/planningapp', function () {
		return view('planningapp');
	});


	Route::get('/licenses', function () {
		return view('licenses');
	});


	Route::get('/waste', function () {
		return view('waste');
	});
		
	Route::get('/missedbins', function () {
		return view('missedbins');
	});

	Route::get('/logout', array('uses' => 'HomeController@logout'));

	Route::get('/home', ['uses'=>'HomeController@displayUserInfo','as'=>'get.home.displayUserInfo']);

	Route::get('/', ['uses'=>'HomeController@doLogin','as'=>'get.home.doLogin']);
	/*
	|--------------------------------------------------------------------------
	| Services GET Routes
	|--------------------------------------------------------------------------
	*/

	Route::get('/registration/{child_id?}', ['uses'=>'ServicesController@getChildren','as'=>'get.services.getChildren']);
	Route::get('/absence/{absence_id?}', ['uses'=>'ServicesController@getAbsencePage','as'=>'get.services.getAbsencePage']);
	Route::get('/enrol/{enrol_id?}', ['uses'=>'ServicesController@getEnrolmentPage','as'=>'get.services.getEnrolmentPage']);
	Route::get('/absence', ['uses'=>'ServicesController@getAbsencePage','as'=>'get.services.getAbsencePage']);
	Route::get('/annualupdate', ['uses'=>'ServicesController@getAnnualUpdatePage','as'=>'get.services.showAnnualUpdatePage']);
	Route::get('/schoolmeals', ['uses'=>'ServicesController@getSchoolMealsPage','as'=>'get.services.showSchoolMealsPage']);
	Route::get('/getschools', ['uses'=>'ServicesController@getSchools', 'as'=>'get.services.getSchools']);


	/*
	|--------------------------------------------------------------------------
	| Services POST Routes
	|--------------------------------------------------------------------------
	*/
	Route::post('/registration/addchild/{child_id?}', ['uses'=>'ServicesController@postChildren','as'=>'post.services.postChildren']);
	Route::post('/enrol/{enrol_id?}', ['uses'=>'ServicesController@postEnrolmentPage','as'=>'post.services.postEnrolmentPage']);
	Route::post('/absence/{absence_id?}', ['uses'=>'ServicesController@postAbsencePage','as'=>'post.services.postAbsencePage']);
	Route::post('/feedback', ['uses'=>'ServicesController@postFeedbackPage','as'=>'post.services.postFeedbackPage']);
	Route::get('/feedback/{feedback_id?}', ['uses'=>'ServicesController@getfeedbackPage','as'=>'get.services.getFeedbackPage']);
	Route::put('/feedback/{feedback_id?}', ['uses'=>'ServicesController@updateFeedbackPage','as'=>'put.services.updateFeedbackPage']);
	Route::put('/registration/{child_id?}', ['uses'=>'ServicesController@updateChildren','as'=>'post.services.updateChildren']);


	/*
	|--------------------------------------------------------------------------
	| Services DELETE Routes
	|--------------------------------------------------------------------------
	*/
	Route::delete('registration/{child_id?}', ['uses'=>'ServicesController@deleteChild','as'=>'delete.services.deleteChild']);
	Route::delete('feedback/{feedback_id?}', ['uses'=>'ServicesController@deleteFeedbackPage','as'=>'delete.services.deleteFeedbackPage']);
	Route::delete('absence/{absence_id?}', ['uses'=>'ServicesController@deleteAbsencePage','as'=>'delete.services.deleteAbsencePage']);
	Route::delete('enrol/{enrol_id?}', ['uses'=>'ServicesController@deleteEnrolmentPage','as'=>'delete.services.deleteEnrolmentPage']);

	/*
	|--------------------------------------------------------------------------
	| SimpleSAML based Routes
	|--------------------------------------------------------------------------
	*/

	// Route::get('/userhome',['uses'=>'SimpleSAMLPHPController@getUserData','as'=>'get.simplesamlphp.userdata']);

	/*
	|--------------------------------------------------------------------------
	| Mail GET Routes
	|--------------------------------------------------------------------------
	*/
	Route::get('/mailbox', ['uses'=>'MailController@index','as'=>'get.mail.index']);

	Route::get('/compose', function () {
		return view('mailbox.compose');
	});

	Route::get('/readmail', function () {
		return view('mailbox.readmail');
	});

	Route::get('/outbox', function () {
		return view('mailbox.outbox');
	});

	Route::get('/drafts', function () {
		return view('mailbox.drafts');
	});

	Route::get('/junk', function () {
		return view('mailbox.junk');
	});

	Route::get('/trash', function () {
		return view('mailbox.trash');
	});

	Route::get('/newaccount', function () {
	    // send an email to myself
	    Mail::to('dglennie89@gmail.com')->send(new AccountCreated);

	    return view('welcome');
	});


});

Auth::routes();

Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached())
    {
         // add item to the sitemap (url, date, priority, freq)
         $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
         $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

         // add item with translations (url, date, priority, freq, images, title, translations)
         $translations = [
                           ['language' => 'fr', 'url' => URL::to('pageFr')],
                           ['language' => 'de', 'url' => URL::to('pageDe')],
                           ['language' => 'bg', 'url' => URL::to('pageBg')],
                         ];
         $sitemap->add(URL::to('pageEn'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', [], null, $translations);

         // add item with images
         $images = [
                     ['url' => URL::to('images/pic1.jpg'), 'title' => 'Image title', 'caption' => 'Image caption', 'geo_location' => 'Plovdiv, Bulgaria'],
                     ['url' => URL::to('images/pic2.jpg'), 'title' => 'Image title2', 'caption' => 'Image caption2'],
                     ['url' => URL::to('images/pic3.jpg'), 'title' => 'Image title3'],
                   ];
         $sitemap->add(URL::to('post-with-images'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', $images);

         // // get all posts from db
         // $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

         // // add every post to the sitemap
         // foreach ($posts as $post)
         // {
         //    $sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
         // }
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('html');

});