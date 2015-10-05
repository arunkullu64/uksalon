<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 25/9/15
 * Time: 10:05 PM
 */


class ProfileController extends BaseController{
    public $layout = 'layouts.main';
    public function index()
    {
        $user_id = Auth::id();
        //echo $user_id;
        $data['user_id'] = $user_id;
        $user = User::find($user_id);
        $data['user'] = $user;
        $data['profile'] = $user->profile();
       // $queries = DB::getQueryLog();
        //$last_query = end($queries);
       // echo "<pre>";print_r($queries);
        $this->layout->nest('content', 'profile.index',$data);
    }
}