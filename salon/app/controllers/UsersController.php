<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 25/9/15
 * Time: 10:05 PM
 */


class UsersController extends BaseController{

    /**
     * Display a listing of qusers
     *
     * @return Response
     */
     
    public $layout = 'layouts.main';
    public function index()
    {
        $qusers = User::all();
        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new post
     *
     * @return Response
     */
    public function create()
    {
        return View::make('qusers.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
       // var_dump($data);die;
        $user['fname'] = $data['fname'];
        $user['lname'] = $data['lname'];
        $user['email'] = $data['email'];
        $user['role'] = 3;
        $user['password'] = Hash::make($data['password']);
        $userObj = new User;
        $userSave = $userObj->create($user);
        
        $profile['user_id'] = $userSave->id;
        $profile['gender'] = $data['gender'];
        $profile['postal_code'] = $data['postal_code'];
        $profile['profile_name'] = $data['profile_name'];
        
        $profileObj = new Profile;
        $profileSave = $profileObj->create($profile);
        return Redirect::to('/')->with('message', 'Signed up succesflly');
    }
    
    public function login(){
        
        $rules = array("email" => "required|email",
                        "password" => "required"
                        );
        $validator = Validator::make(Input::All(),$rules);
        
        if($validator->fails()){
            return Redirect::to('/')->withErrors($validator);
        }else{  
            
            $remember_me = Input::get('remember_me');
            //echo $remember_me;die;
            $remember = False;
            if($remember_me){
                $remember = True;
            }
            $where = array("email" => Input::get('email'), 'password' => Input::get('password'));
            
            if(Auth::attempt($where,$remember)){
                if(Auth::user()->is_client())
                     return Redirect::to('/business/dashboard/')->with('message' ,'Successfully Login!');
                else
                    return Redirect::to('/')->with('message' ,'Successfully Login!');
            }else{
                //$queries = DB::getQueryLog();
                //$last_query = end($queries);
                return Redirect::to('/')->with('error' ,'Invalid Username/Password');
            }
        }
    }
    
    public function logout(){
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Quser::findOrFail($id);

        return View::make('qusers.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Quser::find($id);

        return View::make('qusers.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = Quser::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Quser::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $post->update($data);

        return Redirect::route('qusers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Quser::destroy($id);

        return Redirect::route('qusers.index');
    }
    
    public function update_profile(){
        $user_id = Auth::id();
        if(Input::All()){
            $rules = array('profile_name' => 'required',
                            'gender' => 'required'
                            );
                            
            $validation = Validator::make(Input::All(),$rules);
            if($validation->fails()){
                return Redirect::to('/profile');
            }else{
                //Upload profile pic//
                
                if(Input::hasFile('profile_pic')){
                    $profile_pic = Input::file('profile_pic');
                    //echo public_path();die;
                    $imageUploadDir = Helper::user_profile_path();
                    $profile_pic->move($imageUploadDir,$profile_pic->getClientOriginalName());
                    $profile_pic = $profile_pic->getClientOriginalName();;
                }else{
                    $profile_exist = Profile::find($user_id);
                    $profile_pic = $profile_exist->profile_pic;
                    //echo "<pre>";print_r($profile_exist);die;
                }
                
                //upload profile end
                
                $profile_name = Input::get('profile_name');
                $gender = Input::get('gender');
                DB::table('profile')
                    ->where('user_id', $user_id)
                    ->update(array('profile_name' => $profile_name,'gender' => $gender,'profile_pic' => $profile_pic));
                return Redirect::to('/profile')->with('message',"Profile Updated Successfully");   
            }
        }   
       
        return View::make('profile.index')->with('data',$data);        

    }
    
    public function change_password(){
        if(Input::All()){
            $email = Auth::user()->email;
            $where = array("email" => $email, 'password' => Input::get('old_password'));
           // var_dump(Auth::attempt($where));die;
            if(Auth::attempt($where)){
                $rules = array('new_password' => 'required|min:6|confirmed',
                                'new_password_confirmation' => 'required|min:6'
                                );
                $validation = Validator::make(Input::All(),$rules);
                if($validation->fails()){
                    return Redirect::to('/profile')->withErrors($validation);
                }else{
                    $user_id = Auth::id();
                    DB::table('users')
                        ->where('id', $user_id)
                        ->update(array('password' => Hash::make(Input::get('new_password'))));
                    return Redirect::to('/profile')->with('message',"Message Change Successfully! ");  
                }
            }else{
                return Redirect::to('/profile')->with('message' ,'Password not match with old password!');
            }
        }
    }
    
    public function search(){
        if(Input::All()){
            $book_for = Input::get('book_for');
            $book_location = Input::get('book_location');
            $book_date = Input::get('book_date');
            //match service in services table if this service exist//
            
            $services = Services::where('title', 'like','%'.$book_for.'%')
                                ->orWhere('description', 'like','%'.$book_for.'%')
                                ->get();
           
            //match location from venue table who match this service with business id

            $business_ids = array();
            foreach($services as $key => $val){
                $business_ids[] =  $val->business_id;
            }
            $venueFind = Venue::where('city', 'like','%'.$book_location.'%')
                                    ->whereIn('business_id', $business_ids)
                                    ->get();
            
            $last_query = DB::getQueryLog();
          // echo "<pre>";print_r($last_query);die;
           // return View::make('search.listing')->with('data',$services);
           $result = array();
           foreach($venueFind as $venue => $venueVal){
                $userBookings = $venueVal->business->user_booking();
                $last_query = DB::getQueryLog();
                //echo "<pre>";print_r($last_query);die;
                if(isset($userBookings) && count($userBookings) > 0){
                    //compare date
                    $date1 = date("m-d-Y",strtotime($userBookings->booking_date));
                    //echo $book_date.'<br>';
                    //echo $date1.'<br>';die;
                    if(!strtotime($date1) == strtotime($book_date)){
                        $result[] = $venueVal->business;
                    }
                }else{
                    //show in listing
                   // echo "<pre>";print_r($venueVal);die;
                    $result[] = $venueVal->business;
                }
           }
           $data['city'] = Venue::get_unique_city();
           $data['salon_listing'] = $result;
           $this->layout->nest('content', 'search.listing',$data);
            //echo "<pre>";print_r($services);die; 
            //match in user booking table if this service already booked
        }else{
            return Redirect::to('/');
        }
    }

}