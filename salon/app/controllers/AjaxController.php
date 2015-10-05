<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 25/9/15
 * Time: 10:05 PM
 */


class AjaxController extends BaseController{

    public function index()
    {
        $qusers = User::all();
        return View::make('users.index', compact('users'));
    }
        
    public function signup_ajax(){
        if(Request::ajax()){
            if(Input::All()){
                $user['email'] = Input::get('email');
                $user['password'] = Hash::make(Input::get('password'));
                $user['fname'] = Input::get('fname');
                $user['lname'] = Input::get('lname');
                
                $rules = array('email' => 'required|email|unique:users',"password" => "required","fname" => "required");
                $validator = Validator::make(Input::All(),$rules);
                if($validator->fails()){
                    $result = json_encode(array('errors' => $validator->getMessageBag()->toArray()));
                }else{
                    
                    $userObj = new User;
                    $userSave = $userObj->create($user);
                    $profile['user_id'] = $userSave->id;
                    $profile['gender'] = Input::get('gender');
                    $profile['postal_code'] = Input::get('postal_code');
                    $profile['profile_name'] = Input::get('profile_name');
                    
                    $profileObj = new Profile;
                    $profileSave = $profileObj->create($profile);
                    $result = json_encode(array('success' => true));
                }
                echo $result;
                exit();
                
               // $data['signup'] = 
            }   
        }
    }
}