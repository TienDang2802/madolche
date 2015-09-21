<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['jobs'] = ['tutita','tiendang'];
        return view('home',$data);
	}

    public function env() {
        /*$env_path = __DIR__.'/../.env';
        //$set_env = trim($env_path);
        if(file_exists($env_path)){
            //putenv("APP_ENV=local");
        }
        putenv("APP_ENV=local");*/
        $env = \App::detectEnvironment(function(){
            $env_path = __DIR__.'/../.env';
            $set_env = trim($env_path);
            if(file_exists($env_path)){
                putenv("APP_ENV=local");
            }
            putenv("APP_ENV=product");
        });
        var_dump(\App::environment());
    }

}
