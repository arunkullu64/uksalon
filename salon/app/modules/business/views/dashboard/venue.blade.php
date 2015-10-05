@section('css')

@stop

@section('js')
    <script src="{{ URL::asset('assets/js/functions.js')}}"></script>
@stop

<div class="row">
	<div class="col-md-12">
		<section class="content-header">
			<h1>
				Venue Details           
			</h1>        
		</section>
	</div>	
</div>

<section class="content">
	<div class="row">
		<div class="col-md-12"> 
			<div class="nav-tabs-custom">
				<div class="tab-content">

					{{ Form::model($salon, array('url' => '/business/dashboard/venue/save', 'class'=>'men-form', 'id'=>'venue-update-form', 'files' => true )) }}
					<div class="row">
						<div class="col-md-12">
							<div class="menu-table">
								<div class="row">
									<div class="col-md-4">
										<div class="venue-logo">
											<img src="{{ $salon->profile_pic() }}" class="img-responsive" alt="">
										    <div>
                                                {{ Form::file('image',Input::old('name')) }}
                                            </div>
                                        </div>
									</div>
									<div class="col-md-8">
										{{ Form::text('name',Input::old('name'), ['placeholder'=>'Enter your venue name here', 'class'=>'form-control vernue-formmargin'])}}
										<div class="row">
											<div class="col-md-7">
												<div class="form-group">
													<label for="inputEmail3" class="col-md-4 control-label">Primary Type</label>
													<div class="col-md-8">
														{{ Form::select('type_id', BusinessType::select_type(), Input::old('type_id'), array('class'=>'form-control') ) }}
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>		 
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="menu-table">
										<h4><i class="fa fa-map-marker"></i> Where is your venue located?</h4>
									</div>
								</div>		  
							</div>
							<div class="row">
								<div class="col-md-6 vernue-formmargin2">
									
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Address</label>
										<div class="col-md-8">
											{{ Form::textarea("venue[address]",Input::old("venue[address]"), ["class"=>"form-control",'rows'=>'2']) }}
											 
										</div>
									</div>             
									<br><br><br> <br>           
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">City</label>
										<div class="col-md-8">
                                            {{ Form::text("venue[city]",Input::old("venue[city]"), ["class"=>"form-control"]) }}
										</div>
									</div>
                                    <br><br>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-4 control-label">State</label>
                                        <div class="col-md-8">
                                            {{ Form::text("venue[state]",Input::old("venue[state]"), ["class"=>"form-control"]) }}
                                        </div>
                                    </div>
                                    <br><br><br> <br>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-4 control-label">Postcode</label>
                                        <div class="col-md-8">
                                            {{ Form::text("venue[postal_code]",Input::old("venue[postal_code]"), ["class"=>"form-control"]) }}
                                        </div>
                                    </div>
                                    <br><br>
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Country</label>
										<div class="col-md-8">
											{{ Form::select('venue[country]', $country, Input::old("venue[country]"), array('class'=>'form-control') ) }}
										</div>
									</div>
									<br><br> 
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Phone Number</label>
										<div class="col-md-8">
                                            {{ Form::text("phone_number",Input::old("phone_number"), ["class"=>"form-control"]) }}
                                        </div>
									</div>                    
									<br><br> 
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Email</label>
										<div class="col-md-8">
                                            {{ Form::text("email",Input::old("email"), ["class"=>"form-control"]) }}
										</div>
									</div>                    
									<br><br> 
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Website</label>
										<div class="col-md-8">
                                            {{ Form::text("website",Input::old("website"), ["class"=>"form-control"]) }}
                                        </div>
									</div> 

								</div>	 


								<div class="col-md-6 vernue-formmargin2">

									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Location on the map</label>
										<div class="col-md-8">
											<div class="google-maps">
												<iframe src="https://www.google.com/maps/embed/v1/place?key={{MAP_API_KEY}}&q={{$salon->full_address()}}" width="600" height="450" frameborder="0" style="border:0"></iframe>
											</div><br><br>
										</div>
									</div>
									<br><br>
									<div class="form-group">
										<label for="inputEmail3" class="col-md-4 control-label">Description</label>
										<div class="col-md-8">
                                            {{ Form::textarea("description",Input::old("description"), ["class"=>"form-control",'rows'=>'2']) }}
                                        </div>
									</div>   
								</div>				 
							</div>
							<button type="submit" class="btn btn-success btn-lg pull-right"> <i class="glyphicon glyphicon-ok"></i> Save</button>
						</div>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>  
	<div class="row">
		<div class="col-md-12 featuredservicestxt">
			<h1>Venue Photos</h1>
            @if ($salon->get_extra_images())
                @foreach($salon->get_extra_images() as $key=>$img)
                    <div class="col-md-2">
                        <div class="featuredservicesbanner">
                            <ul>
                                <li><img src="{{$img}}" class="img-responsive" alt=""></li>
                            </ul>
                        </div>
                        <a href="javascript:void(0)" data-key="{{$key}}" class="remove-img">Remove</a>
                    </div>
                @endforeach
            @endif

			<div class="col-md-2">
                {{ Form::open(array('url' => '/business/dashboard/venue/images', 'id'=>'venue-update-form', 'files' => true )) }}
                {{ Form::file('extra_image[]',array('multiple'=>true)) }}
                <button type="submit" class="venue-addbtn">
					<i class="fa fa-plus"></i> Add image
				</button>
                {{ Form::close() }}
			</div>
		</div>
	</div> 		  
</section>  