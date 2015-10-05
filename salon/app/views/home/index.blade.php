<!-- begin:header -->
<div id="header" class="header-slide">

    <div class="container">
        <div class="row">
            <div class="hero-top-shadow"> </div>
            <div class="col-md-5">

                <div class="quick-search">
                    <div class="heading-title2">
                        <h2>Book A Salon</h2>
                        <?php
                        //echo "<pre>";print_r($city);
                        ?>
                    </div>
                    <div class="row">
                        {{ Form::open(array('url' => '/search')); }}
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="js-searchbar-input-city" type="text" size="50" placeholder="What would you like to book for" autocomplete="off" runat="server" class="form-control" value="" name="book_for">
                                </div>
                            </div>
                            <!-- break -->

                            <!-- break -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="mm/dd/yy" data-date-format="mm/dd/yy" name="book_date" id="dp1" >

                                </div>

                            </div>
                            <!-- break -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <select name="book_location" class="form-control">
                                        <option value="" data-search-parameter-name="offer-result-type" >
                                            Select City
                                        </option>
                                        <?php
                                        foreach($city as $key => $val){
                                            ?>
                                            <option value="<?php echo $val->city; ?>" data-search-parameter-name="offer-result-type" >
                                                <?php 
                                                echo $val->city;
                                                ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                        <!--option value="ESCAPE" data-search-parameter-name="offer-result-type" >
                                            Your Location
                                        </option>


                                        <option value="SPA_DAY" data-search-parameter-name="offer-result-type" >
                                            Location  1
                                        </option>


                                        <option value="SPA_BREAK" data-search-parameter-name="offer-result-type" >
                                            Location  2
                                        </option>



                                        <option value="1" data-search-parameter-name="fixed-stay-nights" >
                                            Location  3
                                        </option>


                                        <option value="2" data-search-parameter-name="fixed-stay-nights" >
                                            Location  4
                                        </option>


                                        <option value="3" data-search-parameter-name="fixed-stay-nights" >
                                            Location 5
                                        </option>


                                        <option value="4" data-search-parameter-name="fixed-stay-nights" >
                                            Location  6
                                        </option-->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12"><input type="submit" name="submit" value="Search" class="btn btn-warning btn-lg btn-block"></div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- end:header -->

<!-- begin:service -->



<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>How It Works<small>You need to do is very simple just join us</small></h2>
            </div>
        </div>

        <div class="container services">
            <div class="col-md-3 service-content">
                <div class="icon-surround-1"><span>1</span><i class=" glyphicon glyphicon-heart"></i></div>
                <h4>Join</h4>

            </div>
            <div class="col-md-3 service-content">
                <div class="icon-surround-1"><span>2</span><i class="glyphicon glyphicon-calendar"></i></div>
                <h4>Book A Salon</h4>

            </div>
            <div class="col-md-3 service-content">
                <div class="icon-surround-1"><span>3</span><i class="glyphicon glyphicon-user"></i></div>
                <h4>Get Your Booking</h4>

            </div>
            <div class="col-md-3 service-content">
                <div class="icon-surround-1"><span>4</span><i class="glyphicon glyphicon-thumbs-up"></i></div>
                <h4>Enjoy!</h4>

            </div>
        </div>



    </div>
</div>
<!-- end:service -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <!-- begin:latest -->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h2>RECOMMENDED FOR YOU</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img02.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Your SPA</h4>
                            <span>xxxxx</span>
                        </div>
                        <div class="property-status">
                            <span>For Sale</span>
                        </div>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 2 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img03.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Dummy text</h4>
                            <span>xxxxx<small>/year</small></span>
                        </div>
                        <div class="property-status">
                            <span>For Rent</span>
                        </div>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 2 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img04.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Your SPA</h4>
                            <span>xxxxx</span>
                        </div>
                        <div class="property-status">
                            <span>For Sale</span>
                        </div>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 2 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img05.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Your SPA</h4>
                            <span>xxxxx<small>/year</small></span>
                        </div>
                        <div class="property-status">
                            <span>For Rent</span>
                        </div>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 2 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- end:latest -->

        <!-- begin:for-sale -->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h2> MOST POPULAR </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img06.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Your SPA</h4>
                            <span>xxxxx</span>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 2 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>

                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img07.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Your SPA</h4>
                            <span>xxxxx</span>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>

                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="{{ URL::asset('assets/images/img08.jpg')}}" alt="arillo real estate theme">
                        <div class="property-price">
                            <h4>Your SPA</h4>
                            <span>xxxxx</span>
                        </div>
                    </div>
                    <div class="property-content">
                        <h3><a href="#">The Dummy Text</a> <small>22, JJ Road, Yogyakarta</small></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="property-features">
                        <span><i class="fa fa-home"></i> xxxxx</span>
                        <span><i class="fa fa-hdd-o"></i> 2 Cutting</span>
                        <span><i class="fa fa-male"></i> 2 Shaving</span>

                    </div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- end:for-sale -->

        <!-- begin:for-rent -->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h2>Best Deals in Your Area</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="property-container">
                    <div class="property-content-list">
                        <div class="property-image-list">
                            <img src="{{ URL::asset('assets/images/img04.jpg')}}" alt="arillo real estate theme">
                            <div class="property-price">
                                <h4>Dummy text</h4>
                                <span>xxx<small>/Per Seating</small></span>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> Dummy</span>
                                <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                                <span><i class="fa fa-male"></i> 2 Shaving</span>


                            </div>
                        </div>
                        <div class="property-text">
                            <h3><a href="#"> Dummy text In Rego Park</a> <small>22, JJ Road, Yogyakarta</small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="property-container">
                    <div class="property-content-list">
                        <div class="property-text">
                            <h3><a href="#">Salon In Central Park</a> <small>22, JJ Road, Yogyakarta</small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="property-image-list">
                            <img src="{{ URL::asset('assets/images/img02.jpg')}}" alt="arillo real estate theme">
                            <div class="property-price">
                                <h4>Dummy text</h4>
                                <span>xxx<small>/Per Seating</small></span>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> Dummy</span>
                                <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                                <span><i class="fa fa-male"></i> 2 Shaving</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>





        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="property-container">
                    <div class="property-content-list">
                        <div class="property-image-list">
                            <img src="{{ URL::asset('assets/images/img04.jpg')}}" alt="arillo real estate theme">
                            <div class="property-price">
                                <h4>Dummy text</h4>
                                <span>xxx<small>/Per Seating</small></span>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> Dummy</span>
                                <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                                <span><i class="fa fa-male"></i> 2 Shaving</span>


                            </div>
                        </div>
                        <div class="property-text">
                            <h3><a href="#"> Dummy text In Rego Park</a> <small>22, JJ Road, Yogyakarta</small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="property-container">
                    <div class="property-content-list">
                        <div class="property-text">
                            <h3><a href="#">Salon In Central Park</a> <small>22, JJ Road, Yogyakarta</small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="property-image-list">
                            <img src="{{ URL::asset('assets/images/img02.jpg')}}" alt="arillo real estate theme">
                            <div class="property-price">
                                <h4>Dummy text</h4>
                                <span>xxx<small>/Per Seating</small></span>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> Dummy</span>
                                <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                                <span><i class="fa fa-male"></i> 2 Shaving</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>






        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="property-container">
                    <div class="property-content-list">
                        <div class="property-image-list">
                            <img src="{{ URL::asset('assets/images/img04.jpg')}}" alt="arillo real estate theme">
                            <div class="property-price">
                                <h4>Dummy text</h4>
                                <span>xxx<small>/Per Seating</small></span>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> Dummy</span>
                                <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                                <span><i class="fa fa-male"></i> 2 Shaving</span>


                            </div>
                        </div>
                        <div class="property-text">
                            <h3><a href="#"> Dummy text In Rego Park</a> <small>22, JJ Road, Yogyakarta</small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="property-container">
                    <div class="property-content-list">
                        <div class="property-text">
                            <h3><a href="#">Salon In Central Park</a> <small>22, JJ Road, Yogyakarta</small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="property-image-list">
                            <img src="{{ URL::asset('assets/images/img02.jpg')}}" alt="arillo real estate theme">
                            <div class="property-price">
                                <h4>Dummy text</h4>
                                <span>xxx<small>/Per Seating</small></span>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> Dummy</span>
                                <span><i class="fa fa-hdd-o"></i> 3 Cutting</span>
                                <span><i class="fa fa-male"></i> 2 Shaving</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>

        <!-- end:for-rent -->
    </div>
</div>
<!-- end:content -->

<!-- begin:testimony -->
<div id="testimony" style="background-image: url(/assets/images/img17.html);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div id="testislider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="testimony-container">
                                <div class="testimony-image" style="background: url(/assets/images/team01.jpg)"></div>
                                <div class="testimony-content">
                                    <h3>First Name</h3>
                                    <blockquote>
                                        <p>Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text
                                            Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text .</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-container">
                                <div class="testimony-image" style="background: url(/assets/images/team02.jpg)"></div>
                                <div class="testimony-content">
                                    <h3>First Name</h3>
                                    <blockquote>
                                        <p>Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text
                                            Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text .</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-container">
                                <div class="testimony-image" style="background: url(/assets/images/team03.jpg)"></div>
                                <div class="testimony-content">
                                    <h3>First Name</h3>
                                    <blockquote>
                                        <p>Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text
                                            Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text .</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#testislider" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#testislider" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end:testimony -->

<!-- begin:news -->
<div id="news">
    <div class="container">
        <div class="row">
            <!-- begin:blog -->
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-sm bg-white">
                            <h2>Latest From Blog</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(/assets/images/img02.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(/assets/images/img03.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(/assets/images/img15.html);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:blog -->

            <!-- begin:popular -->
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-sm bg-white">
                            <h2>lartest from news</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(/assets/images/img02.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(/assets/images/img02.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(/assets/images/img02.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:popular -->

            <!-- begin:agent -->
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-sm bg-white">
                            <h2>Our Support team</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(/assets/images/team03.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">Julia</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> johndoe@domain.com</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(/assets/images/avatar.png);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">John Doe</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> johndoe@domain.com</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(/assets/images/team01.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">Jane Doe</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> johndoe@domain.com</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:agent -->
        </div>
    </div>
</div>
<!-- end:news -->

<!-- begin:subscribe -->
<div id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2 col-sm-8 col-xs-12">
                <h3>Get Newsletter Update</h3>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Enter your mail">
                    <span class="input-group-btn">
                        <button class="btn btn-warning btn-lg" type="submit"><i class="fa fa-envelope"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:subscribe -->