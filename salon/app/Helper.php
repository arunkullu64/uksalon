<?php 

define('ADMIN', 1);
define('CLIENT', 2);
define('CUSTOMER', 3);
define('MAP_API_KEY','AIzaSyBK6pMoAzvq1rj8TZF9xHcf_tnLfyxFSqg');
define('MAX_SALON_IMAGE',5);



Class Helper 
{
    public static $country = array(
        "AF"=>"Afghanistan",
        "AL"=>"Albania",
        "DZ"=>"Algeria",
        "AS"=>"American Samoa",
        "AD"=>"Andorra",
        "AO"=>"Angola",
        "AI"=>"Anguilla",
        "AG"=>"Antigua And Barbuda",
        "AR"=>"Argentina",
        "AM"=>"Armenia",
        "AW"=>"Aruba",
        "AU"=>"Australia",
        "AZ"=>"Azerbaijan",
        "BS"=>"Bahamas",
        "BH"=>"Bahrain",
        "BD"=>"Bangladesh",
        "BB"=>"Barbados",
        "BY"=>"Belarus",
        "BE"=>"Belgium",
        "BZ"=>"Belize",
        "BJ"=>"Benin",
        "BM"=>"Bermuda",
        "BT"=>"Bhutan",
        "BO"=>"Bolivia",
        "BA"=>"Bosnia-Herzegovina",
        "BW"=>"Botswana",
        "BR"=>"Brazil",
        "IO"=>"British Indian Ocean Territory",
        "BN"=>"Brunei Darussalam",
        "BG"=>"Bulgaria",
        "BF"=>"Burkina Faso",
        "BI"=>"Burundi",
        "KH"=>"Cambodia",
        "CM"=>"Cameroon",
        "CA"=>"Canada",
        "CV"=>"Cape Verde",
        "KY"=>"Cayman Islands",
        "CF"=>"Central African Republic",
        "TD"=>"Chad",
        "CL"=>"Chile",
        "CN"=>"China",
        "CX"=>"Christmas Island",
        "CC"=>"Cocos Islands",
        "CO"=>"Colombia",
        "KM"=>"Comoros",
        "CD"=>"Congo, Democratic Republic Of",
        "CG"=>"Congo, People's Republic Of",
        "CK"=>"Cook Islands",
        "CR"=>"Costa Rica",
        "CI"=>"Cote D'ivoire",
        "HR"=>"Croatia",
        "CU"=>"Cuba",
        "CY"=>"Cyprus",
        "CZ"=>"Czech Republic",
        "DK"=>"Denmark",
        "DE"=>"Deutschland",
        "DJ"=>"Djibouti",
        "DM"=>"Dominica",
        "DO"=>"Dominican Republic",
        "TL"=>"East Timor",
        "EC"=>"Ecuador",
        "EG"=>"Egypt",
        "SV"=>"El Salvador",
        "GQ"=>"Equatorial Guinea",
        "ER"=>"Eritrea",
        "ES"=>"España",
        "EE"=>"Estonia",
        "ET"=>"Ethiopia",
        "FK"=>"Falkland Islands",
        "FO"=>"Faroe Islands",
        "FJ"=>"Fiji",
        "FI"=>"Finland",
        "FR"=>"France",
        "GF"=>"French Guiana",
        "PF"=>"French Polynesia",
        "TF"=>"French Southern Territories",
        "GA"=>"Gabon",
        "GM"=>"Gambia",
        "GE"=>"Georgia",
        "GH"=>"Ghana",
        "GI"=>"Gibraltar",
        "GR"=>"Greece",
        "GL"=>"Greenland",
        "GD"=>"Grenada",
        "GP"=>"Guadeloupe",
        "GU"=>"Guam",
        "GT"=>"Guatemala",
        "GG"=>"Guernsey",
        "GN"=>"Guinea",
        "GW"=>"Guinea-bissau",
        "GY"=>"Guyana",
        "HT"=>"Haiti",
        "HN"=>"Honduras",
        "HK"=>"Hong Kong",
        "HU"=>"Hungary",
        "IS"=>"Iceland",
        "IN"=>"India",
        "ID"=>"Indonesia",
        "IR"=>"Iran",
        "IQ"=>"Iraq",
        "IE"=>"Ireland",
        "IM"=>"Isle of Man",
        "IL"=>"Israel",
        "IT"=>"Italia",
        "JM"=>"Jamaica",
        "JP"=>"Japan",
        "JE"=>"Jersey",
        "JO"=>"Jordan",
        "KZ"=>"Kazakhstan",
        "KE"=>"Kenya",
        "KI"=>"Kiribati",
        "KW"=>"Kuwait",
        "KG"=>"Kyrgyzstan",
        "LA"=>"Laos",
        "LV"=>"Latvia",
        "LB"=>"Lebanon",
        "LS"=>"Lesotho",
        "LR"=>"Liberia",
        "LY"=>"Libya",
        "LI"=>"Liechtenstein",
        "LT"=>"Lithuania",
        "LU"=>"Luxembourg",
        "MO"=>"Macau",
        "MK"=>"Macedonia",
        "MG"=>"Madagascar",
        "MW"=>"Malawi",
        "MY"=>"Malaysia",
        "MV"=>"Maldives",
        "ML"=>"Mali",
        "MT"=>"Malta",
        "MH"=>"Marshall Islands",
        "MQ"=>"Martinique",
        "MR"=>"Mauritania",
        "MU"=>"Mauritius",
        "YT"=>"Mayotte",
        "MX"=>"Mexico",
        "FM"=>"Micronesia",
        "MD"=>"Moldova",
        "MC"=>"Monaco",
        "MN"=>"Mongolia",
        "ME"=>"Montenegro",
        "MS"=>"Montserrat",
        "MA"=>"Morocco",
        "MZ"=>"Mozambique",
        "MM"=>"Myanmar",
        "NA"=>"Namibia",
        "NR"=>"Nauru",
        "NP"=>"Nepal",
        "NL"=>"Netherlands",
        "AN"=>"Netherlands Antilles",
        "NC"=>"New Caledonia",
        "NZ"=>"New Zealand",
        "NI"=>"Nicaragua",
        "NE"=>"Niger",
        "NG"=>"Nigeria",
        "NU"=>"Niue",
        "NF"=>"Norfolk Island",
        "KP"=>"North Korea",
        "MP"=>"Northern Mariana Islands",
        "NO"=>"Norway",
        "OM"=>"Oman",
        "PK"=>"Pakistan",
        "PW"=>"Palau",
        "PA"=>"Panama",
        "PG"=>"Papua New Guinea",
        "PY"=>"Paraguay",
        "PE"=>"Peru",
        "PH"=>"Philippines",
        "PN"=>"Pitcairn",
        "PL"=>"Poland",
        "PT"=>"Portugal",
        "PR"=>"Puerto Rico",
        "QA"=>"Qatar",
        "RE"=>"Reunion",
        "RO"=>"Romania",
        "RU"=>"Russia",
        "RW"=>"Rwanda",
        "WS"=>"Samoa",
        "SM"=>"San Marino",
        "ST"=>"Sao Tome And Principe",
        "SA"=>"Saudi Arabia",
        "CH"=>"Schweiz",
        "SN"=>"Senegal",
        "RS"=>"Serbia",
        "CS"=>"Serbia Montenegro",
        "SC"=>"Seychelles",
        "SL"=>"Sierra Leone",
        "SG"=>"Singapore",
        "SK"=>"Slovakia",
        "SI"=>"Slovenia",
        "SB"=>"Solomon Islands",
        "SO"=>"Somalia",
        "ZA"=>"South Africa",
        "GS"=>"South Georgia And Sandwich Isl.",
        "KR"=>"South Korea",
        "LK"=>"Sri Lanka",
        "BL"=>"St. Barthélemy",
        "SH"=>"St. Helena",
        "KN"=>"St. Kitts And Nevis",
        "LC"=>"St. Lucia",
        "MF"=>"St. Martin",
        "PM"=>"St. Pierre And Miquelon",
        "VC"=>"St. Vincent And The Grenadines",
        "SD"=>"Sudan",
        "SR"=>"Suriname",
        "SZ"=>"Swaziland",
        "SE"=>"Sweden",
        "SY"=>"Syria",
        "TW"=>"Taiwan",
        "TJ"=>"Tajikistan",
        "TZ"=>"Tanzania",
        "TH"=>"Thailand",
        "TG"=>"Togo",
        "TK"=>"Tokelau",
        "TO"=>"Tonga",
        "TT"=>"Trinidad And Tobago",
        "TN"=>"Tunisia",
        "TR"=>"Turkey",
        "TM"=>"Turkmenistan",
        "TC"=>"Turks And Caicos Islands",
        "TV"=>"Tuvalu",
        "UG"=>"Uganda",
        "UA"=>"Ukraine",
        "AE"=>"United Arab Emirates",
        "GB"=>"United Kingdom",
        "US"=>"United States",
        "UY"=>"Uruguay",
        "UZ"=>"Uzbekistan",
        "VU"=>"Vanuatu",
        "VA"=>"Vatican City State (Holy See)",
        "VE"=>"Venezuela",
        "VN"=>"Vietnam",
        "VG"=>"Virgin Islands (British)",
        "VI"=>"Virgin Islands (U.S.)",
        "WF"=>"Wallis And Futuna Islands",
        "EH"=>"Western Sahara",
        "YE"=>"Yemen",
        "ZM"=>"Zambia",
        "ZW"=>"Zimbabwe",
        "AT"=>"Österreich",
    );

    
    public static function salon_profile_path(){
        return public_path().'/assets/uploads/salon_profile_pic/';
    }

    public static function salon_other_path(){
        return public_path().'/assets/uploads/salon_other_pic/';
    }

    public static function user_profile_path(){
        return public_path().'/assets/uploads/profile_pic/';
    }

    public static function salon_profile_url($pic='default.jpg'){
        if($pic!='')
            return URL::to("/assets/uploads/salon_profile_pic/{$pic}");
        else
            return URL::to("/assets/uploads/salon_profile_pic/default.jpg");
    }

    public static function salon_other_url($id='',$pic='default.jpg'){
        if($pic!='')
            return URL::to("/assets/uploads/salon_other_pic/{$id}/{$pic}");
        else
            return URL::to("/assets/uploads/salon_other_pic/default.jpg");
    }

    public static function user_profile_url($pic='default.png'){
        if($pic!='')
            return URL::to("/assets/uploads/profile_pic/{$pic}");
        else
            return URL::to("/assets/uploads/profile_pic/default.png");
    }


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
