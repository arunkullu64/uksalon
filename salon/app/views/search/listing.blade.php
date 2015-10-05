<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-9 col-md-push-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-alt">
                            <!--h3>Deep tissue massage within 3 miles of Brighton and Hove</h3-->
                        </div>
                    </div>
                </div>
                <!-- begin:sorting -->
                <div class="row sort">
                    <div class="col-md-4 col-sm-4 col-xs-3">
                  <!--    <a href="search.html" class="btn btn-default"><i class="fa fa-th"></i></a>
                  <a href="search_list.html" class="btn btn-warning"><i class="fa fa-list"></i></a>-->
                  <!--span>Show <strong>3</strong> of <strong>30</strong> result.</span-->
              </div>
              <div class="col-md-8 col-sm-8 col-xs-9">
                <form class="form-inline" role="form">
                    <span>Sort by : </span>
                    <div class="form-group">
                        <label class="sr-only" for="sortby">Sort by : </label>
                        <select class="form-control">
                            <option>Most Recent</option>
                            <option>Price (Low &gt; High)</option>
                            <option>Price (High &gt; Low)</option>
                            <option>Most Popular (Low &gt; High)</option>
                        </select>
                    </div>
                    <span>Show : </span>
                    <div class="form-group">
                        <label class="sr-only" for="show">Show : </label>
                        <select class="form-control">
                            <option>6</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <!-- end:sorting -->

        <!-- begin:product -->
        <div class="row container-realestate">
            <?php
              //echo "<pre>";print_r($salon_listing)
            ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="property-container">
                    <?php
                    if(isset($salon_listing) && count($salon_listing) > 0){
                        foreach($salon_listing as $salonKey => $salonVal){
                            $salonAddress = $salonVal->getUser()->profile()->address;
                            ?>
                            <div class="property-content-list">
                                <div class="property-image-list">
                                    <img src="{{ URL::to('/assets/images/img13.jpg'); }}" alt="mikha real estate theme">
                                    <div class="property-price">
                                        <h4>Save</h4>
                                        <span>30%<small>/month</small></span>
                                    </div>

                                    <div class="property-status">
                                        <span>FEATURED</span>
                                    </div>
                                    <div class="property-features">
                                        <span><i class="fa fa-map-marker"></i> Show Map</span>
                                    </div>
                                </div>
                                <div class="property-text">
                                    <h3><a href="#">
                                        {{  $salonVal->name; }}

                                    </a> <small>{{ $salonAddress;  }}</small>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></h3>
                                    <p>
                                        {{  $salonVal->description; }}
                                    </p>
                                    <p><a href="#" class="btn btn-warning">More Detail &raquo;</a></p>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <?php
                                    $services = $salonVal->service;
                                    $salon_user = $salonVal->getUser();
                                    foreach($services as $servicesKey => $servicesVal){
                                        $service_id = $servicesVal->id;
                                        $duration  = date("g:i", strtotime($servicesVal->duration));
                                        ?>
                                        <tr class="a-open-offer-popup" data-offer-id="653387" data-venue-id="285731" data-booking-options="{&quot;timeOfDay&quot;:&quot;&quot;,&quot;date&quot;:&quot;&quot;,&quot;bt&quot;:&quot;&quot;}">
                                            <td class="offer-title">
                                                <a href="/service/653387-cut-and-blow-dry-with-treatment-at-marc-scot/" class="action-uri">
                                                    <span class="title-value">{{ $servicesVal->title; }} </span>
                                                    <span class="global-duration">
                                                        <span class="icon site-duration"></span>
                                                        <span class="text">{{ $duration; }} Hour</span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="offer-price">
                                                <span class="in-basket-label">In the basket</span>
                                                <span class="price">
                                                    <span class="savings ">
                                                        <span class="title">Save</span>
                                                        <span class="value">44% </span>
                                                    </span>

                                                    <button class="button main-button mini-button" data-toggle="modal" data-target="#modal-booking{{ $service_id; }}">
                                                        <span class="price ">
                                                            <span class="value">           
                                                                <span class="price-currency">&pound;</span><span class="price-integer">{{ $servicesVal->price; }}</span>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                     
                                        <!-- end:modal-open booking popup-1 -->
                                        <div class="modal fade" id="modal-booking{{ $service_id; }}" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">{{ $servicesVal->title; }}</h4>
                                                    </div>
                                                    {{ Form::open(array('action' => 'UsersController@login')) }}
                                                        Sevice Name : {{ $servicesVal->title; }} <br />
                                                        Sevice Timing : {{ $duration; }} Hour <br />
                                                        Sevice price : {{ $servicesVal->price; }} <br />
                                                        Sevice description : {{ $servicesVal->description; }} <br />
                                                        Address :  {{ $salonAddress; }}
                                                    {{ Form::close() }}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end:modal-open booking popup-1 -->

                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php 
                        }
                    }else{
                        echo 'No Result Found';
                    }
                    ?>


                </div>
            </div>
            <!-- break -->

            <!-- break -->

            <!-- break -->
        </div>









        <!-- end:product -->
        <hr>
        <!-- begin:pagination -->
        <!--div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            </-->
            <!-- end:pagination -->
        </div>
        <!-- end:article -->

        <!-- begin:sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar">

            <div class="widget widget-sidebar widget-white">
                <div class="widget-header">

                    <strong>  FILTER SEARCH RESULTS</strong>

                    <ul><li><i class="glyphicon glyphicon-map-marker fa-2x"></i> View search results on map</li></ul>

                </div> 
                <hr>
                <strong><i class="glyphicon glyphicon-calendar"></i> Availability</strong>
                <div class="form-group">
                    <input type="text" class="form-control" value="Any Date" data-date-format="mm/dd/yy" id="dp1" >

                </div>





                <div class="form-group">

                    <select class="form-control">


                        <option value="Any time" data-search-parameter-name="offer-result-type" >
                            Any time
                        </option>


                        <option value=" Morning (until 12pm)" data-search-parameter-name="offer-result-type" >
                            Morning (until 12pm)
                        </option>


                        <option value="Afternoon (12pm - 5pm)" data-search-parameter-name="offer-result-type" >
                            Afternoon (12pm - 5pm)
                        </option>



                        <option value="Evening (from 5pm)" data-search-parameter-name="fixed-stay-nights" >
                            Evening (from 5pm)
                        </option>



                    </select>
                </div>



                <hr>



                <strong><i class="glyphicon glyphicon-star"></i> I want to book </strong>

                <ul>
                    <li>
                        <input type="radio" name="brands" id="brands-abs" value="abs">
                        <label for="brands-abs"><span></span> For specific date/time</label>
                    </li>

                    <li>
                        <input type="radio" name="brands" id="brands-abs" value="abs">
                        <label for="brands-abs"><span></span>Gift / eVoucher
                            &nbsp; <i class=" glyphicon glyphicon-question-sign pull-right" style="top:5px;" rel="tooltip" title="" data-placement="top" data-original-title="Electronic vouchers (or eVouchers for short) can be
                            bought for specific treatments or stays and do not represent
                            reservation of a particular time slot. You will
                            need to contact the venue directly to book in before your eVoucher
                            expires (so keep an eye on that date) and must print your order
                            email to take to the venue as proof of purchase."></i>
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="brands" id="brands-abs" value="abs">
                        <label for="brands-abs"><span></span>Show all           
                        </label>
                    </li>

                </ul>

                <hr>

                <strong><i class="glyphicon glyphicon-map-marker"></i> Location</strong>
                <ul>             
                    <li>
                        <select class="selectpicker form-control">
                            <option data-icon="glyphicon-heart" >Where?</option>
                            <?php
                            foreach($city as $cityKey => $cityVal){
                                ?>
                                <option value="{{ $cityVal->city; }} ">{{ $cityVal->city; }} </option>
                                <?php
                            }
                            ?>
                        </select>
                    </li>
                    <li>
                        <select aria-disabled="false" class="form-control">
                            <option data-radius-value="reset" value="">
                                Widen search area
                            </option>
                            <option data-radius-value="1.0"
                            value="/places/treatment-male-waxing/offer-type-local/within-1-miles-of-central-london-london-uk/buy-as-voucher/"  >
                            within 1  mile
                        </option>
                        <option data-radius-value="3.0"
                        value="/places/treatment-male-waxing/offer-type-local/within-3-miles-of-central-london-london-uk/buy-as-voucher/"  >
                        within 3  miles
                    </option>
                    <option data-radius-value="5.0"
                    value="/places/treatment-male-waxing/offer-type-local/within-5-miles-of-central-london-london-uk/buy-as-voucher/"  >
                    within 5  miles
                </option>
                <option data-radius-value="10.0"
                value="/places/treatment-male-waxing/offer-type-local/within-10-miles-of-central-london-london-uk/buy-as-voucher/"  >
                within 10  miles
            </option>
            <option data-radius-value="20.0"
            value="/places/treatment-male-waxing/offer-type-local/within-20-miles-of-central-london-london-uk/buy-as-voucher/"  >
            within 20  miles
        </option>
    </select>
</li>
</ul>

<hr>


<strong> <i class="glyphicon glyphicon-map-marker"></i> Area</strong>

<hr>






<ul>
    <li>
        <input type="checkbox" name="brands" id="brands-abs" value="abs">
        <label for="brands-abs"><span></span> A.B.S. by Allen Schwartz</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-ag" value="ag">
        <label for="brands-ag"><span></span> AG Adriano Goldshmeid</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-aliceolivia" value="aliceolivia">
        <label for="brands-aliceolivia"><span></span> Alice &amp; Olivia</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-autumn" value="autumn">
        <label for="brands-autumn"><span></span> Autumn Cashmere</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-bcbgmaxazria" value="bcbgmaxazria">
        <label for="brands-bcbgmaxazria"><span></span> BCBGMAXAZRIA</label>
    </li>


</ul>


<a href="#credits" class="toggle"> <i class="fa fa-level-down"></i> View All (10)</a>

<div id="credits" class="hidden">
    <ul>
        <li>
            <input type="checkbox" name="brands" id="brands-megaschoni" value="megaschoni">
            <label for="brands-megaschoni"><span></span> Magaschoni</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-newyork" value="newyork">
            <label for="brands-newyork"><span></span> Marc New York</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-miller" value="miller">
            <label for="brands-miller"><span></span> Nicole Miller</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-redvalentino" value="redvalentino">
            <label for="brands-redvalentino"><span></span> Red Valentino</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-suewong" value="suewong">
            <label for="brands-suewong"><span></span> Sue Wong</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-wyatt" value="wyatt">
            <label for="brands-wyatt"><span></span> Wyatt</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-dkny" value="dkny">
            <label for="brands-dkny"><span></span> DKNY</label>
        </li>
        <li>
            <input type="checkbox" name="brands" id="brands-elie" value="elie">
            <label for="brands-elie"><span></span> Elie Tahari</label>
        </li>
    </ul>
</div>            
<hr>
<strong> <i class="glyphicon glyphicon-map-marker"></i> Treatment</strong>
<hr>
<ul>
    <li>
        <input type="checkbox" name="brands" id="brands-abs" value="abs">
        <label for="brands-abs"><span></span> A.B.S. by Allen Schwartz</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-ag" value="ag">
        <label for="brands-ag"><span></span> AG Adriano Goldshmeid</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-aliceolivia" value="aliceolivia">
        <label for="brands-aliceolivia"><span></span> Alice &amp; Olivia</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-autumn" value="autumn">
        <label for="brands-autumn"><span></span> Autumn Cashmere</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-bcbgmaxazria" value="bcbgmaxazria">
        <label for="brands-bcbgmaxazria"><span></span> BCBGMAXAZRIA</label>
    </li>
</ul>
<hr>
<strong> <i class="glyphicon glyphicon-map-marker"></i> Products Used</strong>
<hr>
<ul>
    <li>
        <input type="checkbox" name="brands" id="brands-abs" value="abs">
        <label for="brands-abs"><span></span> A.B.S. by Allen Schwartz</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-ag" value="ag">
        <label for="brands-ag"><span></span> AG Adriano Goldshmeid</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-aliceolivia" value="aliceolivia">
        <label for="brands-aliceolivia"><span></span> Alice &amp; Olivia</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-autumn" value="autumn">
        <label for="brands-autumn"><span></span> Autumn Cashmere</label>
    </li>
    <li>
        <input type="checkbox" name="brands" id="brands-bcbgmaxazria" value="bcbgmaxazria">
        <label for="brands-bcbgmaxazria"><span></span> BCBGMAXAZRIA</label>
    </li>
</ul>
<hr>
<strong>Price Range</strong>
<hr>
<div class="price-filter">
    <div id="price-filter-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 35.8%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 35.8%;"></a></div>
    <span class="pull-left">Price: <span id="price-filter-amount">$0 - $358</span></span>
    <div class="clearfix"></div>
</div>
</div>
<!-- break -->

<!-- break -->

<!-- break -->

<!-- break -->
</div>
<!-- end:sidebar -->
</div>
</div>
</div>
<!-- end:content -->