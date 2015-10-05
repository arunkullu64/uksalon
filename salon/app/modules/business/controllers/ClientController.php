<?php

class ClientController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /client
	 *
	 * @return Response
	 */
	public $layout = 'layouts.main';

	public function index()
	{
		$this->layout->nest('content', 'business::portal.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * 
	 *
	 * @return Response
	 */
	public function signup_store()
	{
		$rules = array(
			'business_name'	=> 'required',
	        'postal_code'	=> 'required',
	        'country'		=> 'required',
	        'full_name'		=> 'required',
	        'email'			=> 'required|email|unique:users',
	    );

		$validator = Validator::make($data = Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $token = md5(time());
        Session::put('token',$token);
        Session::put('data', $data);

        return Redirect::to('/business/venue/?token='.$token);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /client
	 *
	 * @return Response
	 */
	public function signup_form()
	{
		$this->layout->nest('content', 'business::portal.signup');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /client
	 *
	 * @return Response
	 */
	public function venue_form()
	{
		$get_token = Input::get('token');
		
		if(isset($get_token) && !empty($get_token)){
			$token = Session::get('token');

			if($token == Input::get('token')){
				$data = Session::get('data');
				$this->layout->nest('content', 'business::portal.venue_details', $data);

				return;
			}
		}

		return Redirect::to('/business/signup')->with('error', 'Token missmatch, please try again.');
		
	}


	/**
	 * Display the specified resource.
	 * GET /client/{id}
	 *
	 * @return Response
	 */
	public function venue_store()
	{
		$rules = array(
			'type_id'	=> 'required|numeric',
	        'address'	=> 'required|unique:venue',
	        'city'		=> 'required',
	        'state'		=> 'required',
	        'phone_number'	=> 'required|numeric',
	        'old_booking_style' => 'required',
		    'signup_reason' => 'required',
	    );

		$validator = Validator::make($data = Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $token = md5(time());
        Session::put('token',$token);

        $previous_step = Session::get('data');
        $data = array_merge($previous_step,$data);

        Session::put('data', $data);

        return Redirect::to('/business/complete/?token='.$token);
	}

	
	public function complete_form()
	{
		$get_token = Input::get('token');
		
		if(isset($get_token) && !empty($get_token)){
			$token = Session::get('token');

			if($token == Input::get('token')){
				$data = Session::get('data');
				$this->layout->nest('content', 'business::portal.complete', $data);

				return;
			}
		}

		return Redirect::to('/business/signup')->with('error', 'Token missmatch, please try again.');
	}


	public function complete_store()
	{
		$rules = array(
			'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        );

		$validator = Validator::make($data = Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $final_data = Session::get('data');
        $data = array_merge($final_data,$data);

        $user_name = explode(' ', $data['full_name']);

        $data['fname'] = isset($user_name[0])?$user_name[0]:'';
        $data['lname'] = isset($user_name[1])?$user_name[1]:'';

        $plain_password = $data['password'];

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        $user->role = 2;
        $venu = Venue::create($data);
        $profile = Profile::create($data);

        $data['name'] = $data['business_name'];
        unset($data['business_name']);

        $business = Business::create($data);

        $business->user_id = $user->id;
        $profile->user_id = $user->id;
        $venu->business_id = $business->id;

        $user->save();
        $business->save();
        $profile->save();
        $venu->save();

        $where = array("email" => $user->email, 'password' => $plain_password);
            
        if(Auth::attempt($where)){
            return Redirect::to('/business/dashboard/')->with('message' ,'Successfully Login!');
        }

        return Redirect::to('/')->with('message', 'Signed up succesflly');
	}

	

}