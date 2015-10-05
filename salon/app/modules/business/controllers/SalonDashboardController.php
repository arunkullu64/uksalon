<?php

class SalonDashboardController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /salondashboard
	 *
	 * @return Response
	 */

	public $layout = 'business::layout.dashboard';

	public function index()
	{
		$this->layout->nest('content', 'business::dashboard.index');
	}

	
	public function list_menu()
	{
		$groups = Auth::user()->business->service_groups()->orderBy('id','desc')->get();
		
		$this->layout->nest('content', 'business::dashboard.menu', array('groups' => $groups));
	}
	
	public function save_menu()
	{
		if(Input::all())
		{
			$data = Input::all();
			
			$rules = array(
						"title" => "required",
                        "duration" => "required",
						"price" => "required"
                    );
			$validator = Validator::make($data ,$rules);
        
			if($validator->fails()){
				return Redirect::to('/business/dashboard/menu')->withErrors($validator);
			}else{  
			
				$data['duration']=date('H:i', mktime(0, (int)$data['duration']));
				$venu = Services::create($data);
			}
		}
		
		return Redirect::to('/business/dashboard/menu')->with('message', 'Service added succesfully');
	}

	public function list_venue()
	{
		$this->layout->nest('content', 'business::dashboard.venue', array(
				'country' => Helper::$country,
                'venue'=> Auth::user()->business->venue,
				'salon' => Auth::user()->business
			));
	}


    public function save_venue()
    {

        if(Input::all())
        {
            $data = Input::all();

            $salon = Auth::user()->business;

            $rules = array(
                "name" => "required",
                "website"=>"url",
                "image"=>"image",
                "venue"=> array(
                    "address" => "required",
                    "postal_code" => "required",
                    "city"=>"required",
                    "state"=>"required"
                )
            );
            $validator = Validator::make($data ,$rules);

            if($validator->fails()){
                return Redirect::to('/business/dashboard/venue')->withErrors($validator)->withInput(Input::all());
            }else{

                if(Input::hasFile('image')){
                    $profile_pic = Input::file('image');
                    $imageUploadDir = Helper::salon_profile_path();
                    $profile_pic->move($imageUploadDir,$profile_pic->getClientOriginalName());

                    if(!empty($salon->image) && file_exists($imageUploadDir.$salon->image))
                        unlink($imageUploadDir.$salon->image);

                    $data['image'] = $profile_pic->getClientOriginalName();
                }else{
                    $data['image'] = $salon->image;
                }


                $business = $salon->update($data);
                $venue = $salon->venue->update($data['venue']);
            }
        }

        return Redirect::to('/business/dashboard/venue')->with('message', 'Venue updated successfully');
    }

	
	public function ajax()
	{
		if(Request::ajax()){
			
			$post = Input::all();

			if(isset($post['action']) && !empty($post['action'])){

				switch ($post['action']) {
					case 'service-add':
						$data = array(
							'business_id' => Auth::user()->business->id,
							'name'=> $post['service_name']
						);

						$group = ServiceGroup::create($data);
						
						$group['business_id'] = Auth::user()->business->id;

						echo View::make('business::ajax.new_group', $group);

						exit();

						break;

                    case 'remove-salon-image':
                        $key = $post['key'];

                        echo Auth::user()->business->remove_extra_image($key);

                        exit;

                        break;

					default:
						# code...
						break;
				}

			}

		}
	}


	public function extra_images()
	{
        if(Input::hasFile('extra_image')){
            $images = Input::file('extra_image');
            $salon = Auth::user()->business;
            $extra_image = array();


            if(is_array($images)) {
                $imageUploadDir = Helper::salon_other_path() . $salon->id . '/';

                $already_uploaded = $salon->get_extra_images();

                if($already_uploaded && (count($already_uploaded)+count($images)) > MAX_SALON_IMAGE)
                {
                    return Redirect::to('/business/dashboard/venue')->with('error', 'Max 5 images can be added. Please select only '.(MAX_SALON_IMAGE-count($already_uploaded)).' more images');
                    exit();
                }


                if(!file_exists($imageUploadDir))
                    mkdir($imageUploadDir);


                foreach ($images as $img) {
                    $img->move($imageUploadDir, $img->getClientOriginalName());
                    $extra_image[] = $img->getClientOriginalName();
                }

                $uploaded_images = !empty($salon->extra_image)?json_decode($salon->extra_image,true):array();

                $salon->extra_image = json_encode(array_merge($uploaded_images,$extra_image));
                $salon->save();

                return Redirect::to('/business/dashboard/venue')->with('message', 'Venue updated successfully');
            }
        }

        return Redirect::to('/business/dashboard/venue')->with('error', 'Operation failed.');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /salondashboard/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /salondashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /salondashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}