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
        $data['user_id'] = Auth::user()->id;
        $user = Auth::user();
        $data['user'] = $user;
        $data['profile'] = $user->profile;
       // $queries = DB::getQueryLog();
        //$last_query = end($queries);
       // echo "<pre>";print_r($queries);
        $this->layout->nest('content', 'profile.index',$data);
    }
}