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
		$groups = Auth::user()->business()->service_groups()->orderBy('id','desc')->get();
		
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
	

	
	public function ajax()
	{
		if(Request::ajax()){
			
			$post = Input::all();

			if(isset($post['action']) && !empty($post['action'])){

				switch ($post['action']) {
					case 'service-add':
						$data = array(
							'business_id' => Auth::user()->business()->id,
							'name'=> $post['service_name']
						);

						ob_clean();
						$group = ServiceGroup::create($data);
						
						$group['business_id'] = Auth::user()->business()->id;

						echo View::make('business::ajax.new_group', $group);

						exit();

						break;
					default:
						# code...
						break;
				}

			}

		}
	}

	/**
	 * Display the specified resource.
	 * GET /salondashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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