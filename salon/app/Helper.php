<?php 

define('ADMIN', 1);
define('CLIENT', 2);
define('CUSTOMER', 3);

Class Helper 
{
    
	public static function SQL_date($date=false)
    {
        $date =  $date ? new Carbon($date) : Carbon::now();
        return $date->toDateTimeString();
    }

    public static function Userprofilepicpath()
    {
    	$path = APP_PUBLIC_DIR.'/uploads/profile_pic/';
    	return $path;
    }

    public static function Ownerprofilepicpath()
    {
        $path = APP_PUBLIC_DIR.'/uploads/venueowner_profile_pic/';
        return $path;
    }

    public static function Offerpicpath()
    {
        $path = APP_PUBLIC_DIR.'/uploads/offer_pic/';
        return $path;
    }
    public static function Venuepicpath()
    {
        $path = APP_PUBLIC_DIR.'/uploads/venue_pic/';
        return $path;
    }
     /**
     *
     * Function to generate the gender array
     *
     *
     * @return array 
     */
    public static function getGenderArray()
    {
        $gender = array(
                array('label'=>'Male','value'=>'m'),
                array('label'=>'Female','value'=>'f')
            );
        return $gender;
    }

    /**
     *
     * Function to apply validations on the sign up form
     *
     * @param array $input
     * 
     * @return Response
     */
    public static function validateSignup($input, $role)
    {
        if($role == 'user')
        {
            $rules = array(
           
            'user_first_name' => 'required|min:3',
            'user_last_name'  => 'required|min:2',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
            'user_postal_code'=> 'required',
            'termsandconditions'=> 'accepted',
            );
        }
        else
        {
            $rules = array(
           
            'venue_user_first_name' => 'required|min:3',
            'venue_user_last_name'  => 'required|min:2',
            'email'      => 'required|email|unique:venueowners',
            'password'   => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
            'venue_user_postal_code'=> 'required',
            'venue_name' => 'required',
            'termsandconditions'=> 'accepted',
            'venue_user_mobile_number' => 'required',
            //'venue_abn'=>'required',
            );
        }
         $messages=array(
            'termsandconditions.accepted'=>'The Terms & Conditions and the Privacy Policy must be accepted.',
            'venue_user_mobile_number.required'=> 'Please provide your phone number so our customers may be able to contact you.'
            );
        return \Validator::make($input, $rules,$messages);
    }

    
    /**
     *
     * Function to apply validations on the Login form
     *
     * @param array $input
     * 
     * @return Response
     */
    public static function validateLogin($input)
    {
        $rules = array(
        'email'      => 'required|email',
        'password'   => 'required|min:5'
        );
        return \Validator::make($input, $rules);
    }

    /**
     *
     * Function to apply validation for the password fields
     *
     * @param array $input
     * 
     * @return Response
     */
    public static function validatePassword($input)
    {
        $rules = array(
        'old_password'  => 'required|min:5',
        'password'      => 'required|min:5|confirmed',
        'password_confirmation'   => 'required|min:5'
        );
        return \Validator::make($input, $rules);
    }

    /**
     *
     * Function to apply validation for the password fields
     *
     * @param array $input
     * 
     * @return Response
     */
    public static function validateNewPassword($input)
    {
        $rules = array(
        
        'password'      => 'required|min:5|confirmed',
        'password_confirmation'   => 'required|min:5'
        );
        return \Validator::make($input, $rules);
    }
    /**
     *
     * Function to apply validation for the venue form fields
     *
     * @param array $input
     * 
     * @return Response
     */
    public static function validateVenueForm($input)
    {

    $rules = array(
                'venue_name' => 'Required',
                //'venue_code' => 'Required',
                'venue_address' => 'Required',
                'venue_phone' => 'Required',
                'venue_email' => 'Required|email',
                //'venue_website' => 'Required|url',
                'venue_suburb' => 'Required',
                'venue_image' => 'image|max:2000',
                'venue_acn'=>'required',
            );
        return \Validator::make($input, $rules);
    }

    public static function getVenueNameById($id){
       return VenueDao::getVenueNamefromId($id);
    }
}
?>
