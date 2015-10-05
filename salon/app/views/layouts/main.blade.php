<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.w3web.co.in/uk-salon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2015 12:38:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="arillo is responsive html real estate theme">
    <meta name="author" content="afriq yasin ramadhan">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.html')}}">

    <title>UK Salon</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/datepicker.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/business.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
</head>

<body id="top">

<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url(); }}"><span>UK <strong> Salons</strong></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Location <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Manchester</a></li>
                        <li><a href="#">Centeral Salonon</a></li>
                        <li><a href="#">Scotland</a></li>
                        <li><a href="#">Wales</a></li>
                        <li><a href="#">Northumbria page</a></li>
                    </ul>
                </li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Suggest A Salon</a></li>
                <li>{{ link_to('business/', "List Your Salon"); }}</li>
                <?php
                //echo "test";
                //var_dump(Auth::check()) ;
                if(Auth::check()){
                    $userId = Auth::id();
                    $user = User::find($userId);
                    ?>
                    <li class="dropdown">
                        <a href="{{ url('users/logout') }}" class="dropdown-toggle" data-toggle="dropdown">{{ $user->fname .' '. $user->lname }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('profile') }}">Profile</a></li>
                            <li><a href="{{ url('users/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    <?php  
                }else{
                    ?>
                    <li><a href="#" class="signin" data-toggle="modal" data-target="#modal-signin">Sign in</a></li>
                    <li><a href="#" class="signup" data-toggle="modal" data-target="#modal-signup">Sign up</a></li>
                    <?php
                }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->

</nav>    <!-- end:navbar -->
 @if ($errors->has())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>        
    @endforeach
</div>
@endif

@if (Session::has('message'))
<div class="alert alert-info">
    {{ Session::get('message')}}     
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error')}}     
</div>
@endif

{{ $content }}

<!-- begin:partner -->

<!-- end:partner -->

<!-- begin:footer -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>About Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About UK Salons</a></li>
                        <li><a href="#">We are hiring </a></li>
                        <li><a href="#">Feedback For Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Customer Service</a></li>
                        <li><a href="#">For Salon Owners</a></li>
                        <li><a href="#">HELP</a></li>
                        <li><a href="#">GIFT CARDS</a></li>

                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>EXPLORE</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Android App</a></li>
                        <li><a href="#">IOS App</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h2>UK Salons</h2>
                    <address>
                        <strong>Our Business Adress.</strong><br>
                        Dummy text Dummy text<br>
                        <br>
                        Telp. : +01-23456789<br>
                        Email : hello@uksalons.com
                    </address>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- break -->

        <!-- begin:copyright -->
        <div class="row">
            <div class="col-md-12 copyright">
                <p>Copyright &copy; 2015 Company, Inc. All Right Reserved.</p>

                <a href="#top" class="btn btn-warning scroltop"><i class="fa fa-angle-up"></i></a>
                <ul class="list-inline social-links">
                    <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Gplus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end:copyright -->

    </div>
</div>
<!-- end:footer -->

<!-- begin:modal-signin -->

<!-- end:modal-signup -->
<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in</h4>
            </div>
            {{ Form::open(array('action' => 'UsersController@login')) }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="emailAddress">Email address</label>
                        {{  Form::email('email',"",array("class" => "form-control input-md","placeholder" => "Email")) }}
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember_me" value="1"> Keep me logged in
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <p>Don't have account ? <a href="#modal-signup"  data-toggle="modal" data-target="#modal-signup">Sign up here.</a></p>
                    <input type="button" class="btn btn-warning btn-block btn-lg" value="Sign in">
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
<!-- end:modal-signin -->

<!-- begin:modal-signup -->
<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="modal-signup" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-danger" style="display: none;" id="error_msg"></div>
                <div class="alert alert-info" style="display: none;" id="success_msg"></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREATE A  PROFILE</h4>
                <p><em>Tell us a bit about yourself and we’ll set up your profile so you can post reviews, ask the UK Salon community questions, and book even faster next time.</em></p>
            </div>
            {{ Form::open(array('url' => 'signup')) }}
            <div class="modal-body">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            {{  Form::email("email", "",array("class"=>"form-control input-md","id" => "signup_email", "placeholder"=>"Email" )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('fname','',array("class"=>"form-control input-md","id" => "signup_fname", "placeholder"=>"First Name")); }}
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <input name="password" value="" type="password" class="form-control input-md" id="signup_password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            {{ Form::text('lname','',array("class"=>"form-control input-md", "id" => "signup_lname","placeholder"=>"Last Name")); }}
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <i class=" glyphicon glyphicon-question-sign pull-right question" rel="tooltip" title="" data-placement="top" data-original-title="How you'll be known to UK Salon community. At least 5 chars"></i>
                            {{ Form::text('profile_name','',array("class"=>"form-control","id" => "signup_profile_name", "placeholder"=>"Profile Name")); }}
                        </div>
                        <div class="form-group">
                            <i class=" glyphicon glyphicon-question-sign pull-right question" rel="tooltip" title="" data-placement="top" data-original-title="Tell us where you're based and we'll help you find amazing venues nearby."></i>
                            {{ Form::text('postal_code','',array("class"=>"form-control", "id" => "signup_postal_code","placeholder"=>"Post Code")); }}
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="radio-chck">
                                    <div class="radio_btn">
                                        <input type="radio" value="F" name="gender" id="gender_f" checked>
                                        <div id="a1"></div>
                                    </div>
                                    <span class="radio-yes">Female</span>
                                    <div class="radio_btn">
                                        <input type="radio" value="M" name="gender" id="gender_m">
                                        <div id="a2"></div>
                                    </div>
                                    <span class="radio-no">Male</span>
                                </div>
                            </div></div></div>

                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <div class="form-group">

                            <div class="row">
                                <div class="Check_btn">
                                    <input type="checkbox"  id="c1">
                                    <div id="c2"></div>
                                </div>
                                <span>Receive our newsletter with news and exclusive treatments and stays near you</span>
                            </div>
                        </div>

                    </div>
                    <div class="checkbox">
                        <label>
                            <input id="agree" type="checkbox" name="agree"> Agree to our <a href="#">terms of use</a> and <a href="#">privacy policy</a>
                        </label>
                    </div>

            </div>
            <div class="modal-footer">
                <p>Already have account ? <a href="#modal-signin" data-toggle="modal" data-target="#modal-signin"> Sign in here.</a></p>
                <input id="signup_submit" type="button" class="btn btn-warning btn-block btn-lg" value="Join">
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>


<div class="modal fade" id="modal-pass" tabindex="-1" role="dialog" aria-labelledby="modal-pass" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Change password</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Old Password">
                        <span><a href="#">Send me a password reminder >></a></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Verify Password">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-warning btn-block btn-lg" value="Submit">
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<style type="text/css">
    .datepicker{ background:#fff; color:#fc6e51; border:1px solid #ccc; width:26%;}
</style>


<script src="{{ URL::asset('assets/js/jquery.js')}}"></script>
<script>
$(function(){
    __base_url = "";
    __base_url = "<?php echo url(); ?>";
})
</script>
<script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="{{ URL::asset('assets/js/gmap3.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.easing.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.jcarousel.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.backstretch.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/script.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('#dp1').datepicker({
            format: 'mm-dd-yyyy',
            autoclose: true
        });
    });
</script>

<script src="{{ URL::asset('assets/js/range.min.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/datetimepicker-master/jquery.datetimepicker.css')}}"/>
<script src="{{ URL::asset('assets/js/datetimepicker-master/jquery.js')}}"></script>
<script src="{{ URL::asset('assets/js/datetimepicker-master/jquery.datetimepicker.js')}}"></script>
<script>/*
     window.onerror = function(errorMsg) {
     $('#console').html($('#console').html()+'<br>'+errorMsg)
     }*/
    $('#datetimepicker').datetimepicker({
        dayOfWeekStart: 1,
        lang: 'en',
        disabledDates: ['1986/01/08', '1986/01/09', '1986/01/10'],
        startDate: '1986/01/05'
    });


    $('#default_datetimepicker').datetimepicker({
        formatTime: 'H:i',
        formatDate: 'd.m.Y',
        //defaultDate:'8.12.1986', // it's my birthday
        defaultDate: '+03.01.1970', // it's my birthday
        defaultTime: '10:00',
        timepickerScrollbar: false
    });


    $('#datetimepicker_mask').datetimepicker({
        mask: '9999/19/39 29:59'
    });


    $('#datetimepicker3').datetimepicker({
        inline: true
    });

    var logic = function (currentDateTime) {
        if (currentDateTime && currentDateTime.getDay() == 6) {
            this.setOptions({
                minTime: '11:00'
            });
        } else
            this.setOptions({
                minTime: '8:00'
            });
    };
    
</script>

<script type="text/javascript">
    $(function () {
        var offset = $("#sidebar-2").offset();
        var topPadding = 100;
        $(window).scroll(function () {
            if ($(window).scrollTop() > offset.top) {
                $("#sidebar-2").stop().animate({
                    marginTop: $(window).scrollTop() - offset.top + topPadding
                });
            } else {
                $("#sidebar-2").stop().animate({
                    marginTop: 0
                });
            }
            ;
        });
    });
</script>

</body>

<!-- Mirrored from www.w3web.co.in/uk-salon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2015 12:38:53 GMT -->
</html>