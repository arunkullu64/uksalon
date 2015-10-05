@section('css')

@stop

@section('js')
<script src="{{ URL::asset('assets/js/functions.js')}}"></script>
@stop


<!-- Content Header (Page header) -->
<div class="row">
  <div class="col-md-8">
    <section class="content-header">
      <h1>
       Menu           
     </h1>        
   </section>
 </div>
 <div class="col-md-4">
  <section class="content-header">
    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-service-group" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add a group</a>      
  </section>
</div>
</div>

<section id="service-container" class="content">
  @if(!empty($groups))
  @foreach($groups as $group)
  <div  data-offer-group-id="{{$group->id}}" class="row">
   <div class="col-md-12"> 
    <div class="nav-tabs-custom">
      <div class="tab-content">
        <div class="menu-bg">
          <div class="row"> 
            <div class="col-md-8">
              <h3>{{$group->name}}</h3>
            </div>
            <div class="col-md-4">
              <ul>
                <li><span class="btn btn-discount pull-right"><i class="fa fa-pencil"></i> Discount upto 30%</span> </li>
                <li>
                 <span class="btn btn-primary pull-right">
                  <a onclick="set_group_salon({{$group->id}},{{$group->business->id}})" href="" data-toggle="modal" data-target="#team-services">
                    <i class="fa fa-plus"></i> 
                    Add new service
                  </a>
                </span> 
              </li>  
            </ul>
          </div>
        </div>
      </div> 
      @if(!empty($group->services()))      
      <div class="row">
        <div class="col-md-12">
          <div class="menu-table">
            <ul>
              <li>
                <h4><i class="fa fa-gift"></i>{{$group->name}}</h4>
              </li>
              <li class="appoinment-btn"><a href="">Appointment or eVoucher</a></li>
            </ul>
            @foreach($group->services as $service)
            <ul>
              <li class="appoinment-txt">{{$service->title}}
              </li>
              <li class="appoinment-txt2">{{$service->duration}}
              </li>
              <li class="appoinment-txt3">£{{$service->price}}
              </li>
            </ul>
            @endforeach
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
</div>
@endforeach
@endif       
</section>   

<div class="row">
  <div class="col-md-12 featuredservicestxt">
    <h1>Featured services</h1>
    <p>Featured services are shown on top of your listing on UK Salon and our partners' sites. Get more attention to top offers by featuring them.
    </p>
    <div class="col-md-3">  
      <div class="featuredservicesbanner">
        <ul>
          <li><i class="fa fa-star"></i> Wash, Cut and Blow Dry   </li>
          <li><img src="bootstrap/images/bg03.jpg" class="img-responsive" alt=""></li>
        </ul>   
      </div>
    </div>
    <div class="col-md-3">  
      <div class="featuredservicesbanner">
        <ul>
          <li><i class="fa fa-star"></i> Wash, Cut and Blow Dry   </li>
          <li><img src="bootstrap/images/bg03.jpg" class="img-responsive" alt=""></li>
        </ul>   
      </div>
    </div>
    <div class="col-md-3">  
      <div class="featuredservicesbanner">
        <ul>
          <li><i class="fa fa-star"></i> Wash, Cut and Blow Dry   </li>
          <li><img src="bootstrap/images/bg03.jpg" class="img-responsive" alt=""></li>
        </ul>   
      </div>
    </div>
    <div class="col-md-3">  
      <div class="featuredservicesbanner">
        <ul>
          <li><i class="fa fa-star"></i> Wash, Cut and Blow Dry   </li>
          <li><img src="bootstrap/images/bg03.jpg" class="img-responsive" alt=""></li>
        </ul>   
      </div>
    </div>
  </div>
</div>

