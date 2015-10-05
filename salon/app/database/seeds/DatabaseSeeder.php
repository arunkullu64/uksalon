<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');

		$this->command->info('User table seeded!');
	}

}


class UserTableSeeder extends Seeder {

    public function run()
    {
    	$business_type = array(
					"28"=>"Airport Spa",
					"43"=>"Barbershop",
					"46"=>"Beauty Institute",
					"45"=>"Beauty School",
					"16"=>"Bootcamp",
					"47"=>"Brow Bar",
					"4"=>"Casino Spa",
					"20"=>"Chiropody Clinic",
					"49"=>"Chiropractic Clinic",
					"36"=>"Cruise Ship Spa",
					"35"=>"Dance Studio",
					"5"=>"Day Spa",
					"7"=>"Dental Spa",
					"2"=>"Destination Spa",
					"12"=>"Eye Clinic",
					"18"=>"Fat Farm",
					"51"=>"Fish Spa",
					"9"=>"Fitness Centre",
					"24"=>"Golf Course",
					"15"=>"Gym",
					"21"=>"Hair Salon",
					"41"=>"Hammam",
					"59"=>"Health Club",
					"29"=>"Health Farm",
					"1"=>"Hotel Spa",
					"53"=>"Makeup Studio",
					"38"=>"Martial Arts Centre",
					"48"=>"Massage &amp; Therapy Centre",
					"6"=>"Medical Spa",
					"42"=>"Mobile Beauty",
					"14"=>"Mobile Fitness",
					"57"=>"Mobile Massage",
					"8"=>"Mobile Spa",
					"27"=>"Nail Salon",
					"55"=>"Nutrition Centre",
					"58"=>"Online Retailer",
					"60"=>"Photographic Studio",
					"22"=>"Pilates Studio",
					"10"=>"Salon",
					"50"=>"Skin Clinic",
					"56"=>"Surf School",
					"25"=>"Swimming Pool",
					"37"=>"Tanning Salon",
					"23"=>"Tennis Court",
					"54"=>"Treatment Room - Beauty",
					"26"=>"Treatment Room - Spa",
					"44"=>"Treatment Room - Wellness",
					"40"=>"Waxing Salon",
					"52"=>"Weight Loss Clinic",
					"11"=>"Wellness Centre",
					"17"=>"Yoga Retreat",
					"13"=>"Yoga Studio",
				);

        foreach($business_type as $type){
		    BusinessType::create(array('type' => $type));
		}
    }

}