
<!DOCTYPE html>
<html>

<!-- Mirrored from www.w3web.co.in/uk-salon/connect/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2015 11:12:05 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Uk Salon</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/datepicker.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
  <link href="{{ URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/iCheck/flat/blue.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/morris/morris.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/datepicker/datepicker3.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/daterangepicker/daterangepicker-bs3.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <a href="{{url('/')}}" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>U</b>K</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg">Uk Salon</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-envelope-o"></i>
                      <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                          <li><!-- start message -->
                            <a href="#">
                              <div class="pull-left">
                                <img src="{{ URL::asset('assets/css/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li><!-- end message -->
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="{{ Auth::user()->profile->profile_pic() }}" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                AdminLTE Design Team
                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="{{ Auth::user()->profile->profile_pic() }}" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Developers
                                <small><i class="fa fa-clock-o"></i> Today</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Sales Department
                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Reviewers
                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                  </li>
                  <!-- Notifications: style can be found in dropdown.less -->

                  <!-- Tasks: style can be found in dropdown.less -->

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="{{ Auth::user()->profile->profile_pic() }}" style="max-width: 160px" class="user-image" alt="User Image">
                      <span class="hidden-xs">{{Auth::user()->full_name() }}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="{{ Auth::user()->profile->profile_pic()}}" class="img-circle" alt="User Image">
                        <p>
                          {{Auth::user()->full_name()}}
                          <small>Member since {{ date('M. Y', strtotime(Auth::user()->business->created_at)) }}</small>
                        </p>
                      </li>
                      <!-- Menu Body -->

                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="{{url('/profile')}}" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="{{url('/users/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->

                </ul>
              </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="{{Auth::user()->profile->profile_pic()}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>{{Auth::user()->full_name() }}</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              <!-- search form -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
              <!-- /.search form -->
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">

                <li><img src="{{ Auth::user()->business->profile_pic() }}" class="img-responsive" alt=""/></li>
                <li class="header">{{ Auth::user()->business->name }}</li>
                <li class="active ">
                  <a href="index-2.html">
                    <i class="fa fa-home"></i> <span>Home</span> 
                  </a>

                </li>



                <li>
                  <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calender</span> 
                  </a>

                </li>



                <li>
                  <a href="{{ url('/business/dashboard/menu') }}">
                    <i class="fa fa-navicon"></i> <span>Menu</span> 
                  </a>

                </li>



                <li>
                  <a href="clients.html">
                    <i class="fa fa-users"></i> <span>Clients</span> 
                  </a>

                </li>



                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Reports</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="list-of-bookings.html"><i class="fa fa-circle-o"></i>  List of Bookings</a></li>
                    <li><a href="sales-report.html"><i class="fa fa-circle-o"></i> Sales Reports</a></li>

                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-gears"></i> <span>Settings</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">

                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Venue <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="{{url('/business/dashboard/venue')}}"><i class="fa fa-circle-o"></i> Venu Details</a></li>
                        <li><a href="opening-hours.html"><i class="fa fa-circle-o"></i> Opening Hours</a></li>
                        <li><a href="policies.html"><i class="fa fa-circle-o"></i>Policies</a></li>
                  <!-- <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sample <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>-->
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Finance <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="payments.html"><i class="fa fa-circle-o"></i> Payments</a></li>
                    <li><a href="billing-details.html"><i class="fa fa-circle-o"></i> Belling Information</a></li>
                    <li><a href="bank-details.html"><i class="fa fa-circle-o"></i>Bank Details</a></li>

                  </ul>
                </li>
                
                
                
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Team <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="team.html"><i class="fa fa-circle-o"></i> Team</a>></li>
                    <li><a href="team-pricing-levels.html"><i class="fa fa-circle-o"></i> Pricing Levels</a></li>


                  </ul>
                </li>
                
                
                
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Notifications <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="client-notifications.html"><i class="fa fa-circle-o"></i> Client Notifications</a></li>
                    <li><a href="contacting-you.html"><i class="fa fa-circle-o"></i> Contacting You</a></li>


                  </ul>
                </li>
                
                
                
                
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Online Booking <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="online-booking-settings.html"><i class="fa fa-circle-o"></i> Settings</a></li>
                    <li><a href="booking-widget.html"><i class="fa fa-circle-o"></i> Booking Widget</a></li>


                  </ul>
                </li>
                
              </ul>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="position:relative">
        <!-- Content Header (Page header) -->
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
        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>I</b> 
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="#">Uk Salon</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Miles Clapham on 21 Aug</h4>
          </div>
          <div class="modal-body">
            <div class="well">
              <p><a href="#"><strong>Miles Clapham</strong></a> &nbsp; | &nbsp; 
                <a href="#"><i class="fa fa-pencil"></i> Edit Details</a></p>

                <p><a href="#"><i class="fa fa-phone"></i> +44 7867 977860</a> 
                 &nbsp; | &nbsp;
                 <a href="#"><i class="fa fa-envelope"></i> miles.clapham@gmail.com</a></p>
               </div>



               <div class="bs-callout bs-callout-success">
                <div class="row">
                  <div class="col-md-12 ">
                    <p>CONFIRMED</p>
                    <label>Service and SKU</label>
                    <select class="form-control select2" style="width: 100%;"><optgroup label="Wash, cut &amp; blow dry with conditioning treatment" data-group-id="16927"><option value="462044" class="offer" data-duration="60">Wash, Cut, Blow Dry and Conditioning Treatment</option></optgroup><optgroup label="Men's treatments" data-group-id="19994"><option value="463803" class="offer" data-sku-id="138477" data-duration="25">Men's Wet Shave  ( 25 min)</option><option value="461963" class="offer" data-sku-id="135265" data-duration="40">Men's Cut and Finish ( 40 min)</option><option value="461964" class="offer" data-duration="60">Beard Trimming</option><option value="485029" class="offer" data-duration="60">Gents' Colour Treatment</option><option value="485030" class="offer" data-sku-id="163989" data-duration="60">Gents' Wash, Cut and Wet Shave (1 h)</option><option value="461965" class="offer" data-duration="60">Men's Shaving Treatments</option></optgroup><optgroup label="wash cut blow" data-group-id="16926"><option value="485031" class="offer" data-duration="60">Wash, Cut and Blow Dry</option></optgroup><optgroup label="Packages" data-group-id="3132"><option value="474605" class="offer" data-duration="60">Full Colour, Wash and Cut</option><option value="530662" class="offer" data-duration="60">Keratin Hair Treatment</option><option value="896683" class="offer" data-duration="60">Half Head of Highlights, Wash and Cut or Full Head of Highlights, Wash and Cut</option><option value="896701" class="offer" data-duration="60">Conditioning Treatment and Blow Dry</option></optgroup><optgroup label="Hair" data-group-id="3133"><option value="461958" class="offer" data-sku-id="135231" data-duration="30">Ladies' Hair Conditioning Treatments ( 30 min)</option><option value="461957" class="offer" data-duration="60">Ladies' Haircut</option><option value="461959" class="offer" data-duration="60">Ladies Foil High/ Lowlights Treatment</option><option value="461961" class="offer" data-duration="60">Ladies' Keratin Treatment</option><option value="461960" class="offer" data-duration="60">Ladies' Colour Treatment</option><option value="566180" class="offer" data-duration="60">Wash and Blow Dry</option></optgroup><optgroup label="Hair removal" data-group-id="63755"><option value="461962" class="offer" data-duration="60">Ladies' Threading Treatments</option><option value="461967" class="offer" data-duration="60">Men's Threading Treatments</option></optgroup></select>
                  </div></div>
                  <div class="row">

                    <div class="col-md-3">
                     <div class="form-group">
                       <label>Date</label>
                       <input type="text" class="form-control" value="mm/dd/yy" data-date-format="mm/dd/yy" id="dp1" >
                     </div>
                   </div> 

                   <div class="col-md-3">
                    <div class="form-group">
                     <label>Time</label>           
                     <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">08:00</option>
                      <option>09:00</option>
                      <option>10:00</option>
                      <option>11:00</option>
                      <option>12:00</option>
                      <option>13:00</option>
                      <option>13:00</option>
                    </select>
                  </div>
                </div> 

                <div class="col-md-3">
                 <div class="form-group">
                   <label>Duration</label> 
                   <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">10 min</option>
                    <option>20 min</option>
                    <option>50 min</option>
                    <option>1h 20 min</option>
                    <option>20 min</option>
                    <option>20 min</option>
                    <option>20 min</option>
                    <option>20 min</option>
                    <option>20 min</option>

                  </select>
                </div>
              </div> 



              <div class="col-md-3">
               <div class="form-group">
                <label>Team member</label>  
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Not set</option>
                  <option>Girts</option>
                  <option>Youseef</option>


                </select>
              </div>
            </div>                  

          </div>

          <p><i class="fa fa-pencil"></i> Booked on 20 August 2015 22:21 via Wahanda. See details.</p>
          <table class="table table-responsive table-hover table-bordered">
            <tr><td>Add note</td> <td>No show </td> <td>Delete</td> <td class="danger">PAID £18</td></tr>

          </table>
        </div>

        <div class="bs-callout bs-callout-danger">
          <div class="row">
            <div class="col-md-12 ">
              <p>UNCONFIRMED</p>
              <label>Service and SKU</label>
              <select class="form-control select2" style="width: 100%;"><optgroup label="Wash, cut &amp; blow dry with conditioning treatment" data-group-id="16927"><option value="462044" class="offer" data-duration="60">Wash, Cut, Blow Dry and Conditioning Treatment</option></optgroup><optgroup label="Men's treatments" data-group-id="19994"><option value="463803" class="offer" data-sku-id="138477" data-duration="25">Men's Wet Shave  ( 25 min)</option><option value="461963" class="offer" data-sku-id="135265" data-duration="40">Men's Cut and Finish ( 40 min)</option><option value="461964" class="offer" data-duration="60">Beard Trimming</option><option value="485029" class="offer" data-duration="60">Gents' Colour Treatment</option><option value="485030" class="offer" data-sku-id="163989" data-duration="60">Gents' Wash, Cut and Wet Shave (1 h)</option><option value="461965" class="offer" data-duration="60">Men's Shaving Treatments</option></optgroup><optgroup label="wash cut blow" data-group-id="16926"><option value="485031" class="offer" data-duration="60">Wash, Cut and Blow Dry</option></optgroup><optgroup label="Packages" data-group-id="3132"><option value="474605" class="offer" data-duration="60">Full Colour, Wash and Cut</option><option value="530662" class="offer" data-duration="60">Keratin Hair Treatment</option><option value="896683" class="offer" data-duration="60">Half Head of Highlights, Wash and Cut or Full Head of Highlights, Wash and Cut</option><option value="896701" class="offer" data-duration="60">Conditioning Treatment and Blow Dry</option></optgroup><optgroup label="Hair" data-group-id="3133"><option value="461958" class="offer" data-sku-id="135231" data-duration="30">Ladies' Hair Conditioning Treatments ( 30 min)</option><option value="461957" class="offer" data-duration="60">Ladies' Haircut</option><option value="461959" class="offer" data-duration="60">Ladies Foil High/ Lowlights Treatment</option><option value="461961" class="offer" data-duration="60">Ladies' Keratin Treatment</option><option value="461960" class="offer" data-duration="60">Ladies' Colour Treatment</option><option value="566180" class="offer" data-duration="60">Wash and Blow Dry</option></optgroup><optgroup label="Hair removal" data-group-id="63755"><option value="461962" class="offer" data-duration="60">Ladies' Threading Treatments</option><option value="461967" class="offer" data-duration="60">Men's Threading Treatments</option></optgroup></select>
            </div></div>
            <div class="row">

              <div class="col-md-3">
               <div class="form-group">
                 <label>Date</label>
                 <input type="text" class="form-control" value="mm/dd/yy" data-date-format="mm/dd/yy" id="dp1" >
               </div>
             </div> 

             <div class="col-md-3">
              <div class="form-group">
               <label>Time</label>           
               <select class="form-control select2" style="width: 100%;">
                <option selected="selected">08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>13:00</option>
              </select>
            </div>
          </div> 

          <div class="col-md-3">
           <div class="form-group">
             <label>Duration</label> 
             <select class="form-control select2" style="width: 100%;">
              <option selected="selected">10 min</option>
              <option>20 min</option>
              <option>50 min</option>
              <option>1h 20 min</option>
              <option>20 min</option>
              <option>20 min</option>
              <option>20 min</option>
              <option>20 min</option>
              <option>20 min</option>

            </select>
          </div>
        </div> 



        <div class="col-md-3">
         <div class="form-group">
          <label>Team member</label>  
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Not set</option>
            <option>Girts</option>
            <option>Youseef</option>


          </select>
        </div>
      </div>                  

    </div>

    <p><i class="fa fa-pencil"></i> Booked on 20 August 2015 22:21 via Wahanda. See details.</p>
    <table class="table table-responsive table-hover table-bordered">
      <tr><td>Add note</td> <td>No show </td> <td>Delete</td> <td class="danger">UNPAID £18</td></tr>

    </table>
  </div>



  <div class="btn btn-primary"><i class="fa fa-plus"></i>Add Next Service</div>



</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>


<div class="modal fade" id="modal-add-service-group" tabindex="-1" role="dialog" aria-labelledby="modal-pass" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add service group</h4>
            </div>
            <form role="form">
              <div class="modal-body">
                  <div class="form-group">
                      <input required type="text" name="service_group_name" class="form-control" placeholder="Group name" />
                  </div>
                 
              </div>
              <div class="modal-footer">
                  <input type="button" id="create-group" class="btn btn-primary btn-block btn-lg" value="Add">
              </div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" class="modal fade" id="team-services" aria-hidden="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h4 class="modal-title">CREATE NEW SERVICE</h4>
      </div>
	  {{ Form::open(array('url' => '/business/dashboard/menu/save', 'class'=>'men-form', 'id'=>'menu-create-form' )) }}
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="menu-popupefct">
              <ul>
                <li>Services and Pricing</li>
                <li>IMAGES</li>
                <li>Description</li>
                <li>Fine print</li>
                <li>Distribution</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row menu-popupefct-mid">
          <div class="col-md-12"> 
            <div class="row">
              <div class="col-md-3">Service Title
              </div>
              <div class="col-md-9"><input type="text" name="title" class="form-control" placeholder="Name">
              </div>
            </div>
            <div class="popup-dvdr"></div>
            <div class="row">
			  
              <div class="col-md-3">Treatment type    </div>
              <div class="col-md-9">
			  {{ Form::select('service_category_id', ServiceCategory::orderBy('name', 'asc')->lists('name','id'), null, array('class'=>'form-control') ) }}
            </div>
          </div>
          <div class="popup-dvdr"></div>
          <div class="row">
            <div class="col-md-3">Pricing Type</div>
            <div class="col-md-9"><select class="form-control">
              <optgroup>
                <option value="simple">Simple</option>
                <option value="by-employee-cat">Based on staff pricing levels</option>
                <option value="custom">Multiple options</option>
              </optgroup>
            </select>
          </div>
        </div>
        <div class="popup-dvdr"></div>
        <div class="row">
          <div class="col-md-3">Duration    </div>
          <div class="col-md-3"><select class="form-control" name="duration">
            <optgroup>
              <option value="0">Not set</option>
              <option value="5"> 05 min</option>
              <option value="10"> 10 min</option>
              <option value="15"> 15 min</option>
              <option value="20"> 20 min</option>
              <option value="25"> 25 min</option>
              <option value="30"> 30 min</option>
              <option value="35"> 35 min</option>
              <option value="40"> 40 min</option>
              <option value="45"> 45 min</option>
              <option value="50"> 50 min</option>
              <option value="55"> 55 min</option>
              <option selected="selected" value="60">1 h</option>
              <option value="65">1 h 05 min</option>
              <option value="70">1 h 10 min</option>
              <option value="75">1 h 15 min</option>
              <option value="80">1 h 20 min</option>
              <option value="85">1 h 25 min</option>
              <option value="90">1 h 30 min</option>
              <option value="95">1 h 35 min</option>
              <option value="100">1 h 40 min</option>
              <option value="105">1 h 45 min</option>
              <option value="110">1 h 50 min</option>
              <option value="115">1 h 55 min</option>
              <option value="120">2 h</option>
              <option value="135">2 h 15 min</option>
              <option value="150">2 h 30 min</option>
              <option value="165">2 h 45 min</option>
              <option value="180">3 h</option>
              <option value="195">3 h 15 min</option>
              <option value="210">3 h 30 min</option>
              <option value="225">3 h 45 min</option>
              <option value="240">4 h</option>
              <option value="270">4 h 30 min</option>
              <option value="300">5 h</option>
              <option value="330">5 h 30 min</option>
              <option value="360">6 h</option>
              <option value="390">6 h 30 min</option>
              <option value="420">7 h</option>
              <option value="450">7 h 30 min</option>
              <option value="480">8 h</option>
              <option value="540">9 h</option>
              <option value="600">10 h</option>
              <option value="660">11 h</option>
              <option value="720">12 h</option>
            </optgroup>
          </select>
        </div>
        <div class="col-md-3"><input name="price" type="text" class="form-control" placeholder="Price, £ ">
        </div>
        <div class="col-md-3"><input type="text" class="form-control" placeholder="Sale, £">
        </div>
      </div>
      <div class="popup-dvdr"></div>
      <div class="row">
        <div class="col-md-3">Cleanup time</div>
        <div class="col-md-9"><select class="form-control">
          <optgroup>
            <option value="0">None</option>
            <option value="5">5 minutes</option>
            <option value="10">10 minutes</option>
            <option value="15">15 minutes</option>
            <option value="20">20 minutes</option>
            <option value="25">25 minutes</option>
            <option value="30">30 minutes</option>
          </optgroup>
        </select>
      </div>
    </div>
    <div class="popup-dvdr2"></div>
    <div class="row">
      <div class="col-md-12">TEAM - who is taking online appointments for this service </div>   

    </div>
    <div class="row">
      <div class="col-md-4 popup-bottomarea"><i class="fa fa-check"></i> <img alt="" class="img-responsive" src="bootstrap/images/person.png"><p>Denisa</p></div>
      <div class="col-md-4 popup-bottomarea"><i class="fa fa-check"></i> <img alt="" class="img-responsive" src="bootstrap/images/person.png"><p>Denisa</p></div>
      <div class="col-md-4 popup-bottomarea"><i class="fa fa-check"></i> <img alt="" class="img-responsive" src="bootstrap/images/person.png"><p>Yourself</p></div>

    </div>
  </div>
</div>

</div>
	  <div class="modal-footer">
		<input type="hidden" name="service_group_id" value="" />
		<input type="hidden" name="business_id" value="" />
		<button class="btn btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok"></i> Create</button>
		<button data-dismiss="modal" class="btn btn-default pull-left" type="button">Close</button>
	  </div>
	  {{ Form::close() }}
	</div>
</div>
</div>


<!-- jQuery 2.1.4 -->
<script src="{{ URL::asset('assets/css/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.5 -->
<script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>

<script src="{{ URL::asset('assets/css/plugins/morris/morris.min.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/knob/jquery.knob.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ URL::asset('assets/css/plugins/fastclick/fastclick.min.js') }}"></script>

<script src="{{ URL::asset('assets/css/dist/js/app.min.js') }}"></script>

<!-- <script src="{{ URL::asset('assets/css/dist/js/pages/dashboard.js') }}"></script> -->

<script src="{{ URL::asset('assets/css/dist/js/demo.js') }}"></script>

<script src="{{ URL::asset('assets/js/bootstrap-datepicker.js') }}"></script>

@yield('js')

<script type="text/javascript">
$(function(){
 $('#dp1').datepicker({
  format: 'mm-dd-yyyy'
});
});
</script>
<style type="text/css">
#dp1 { z-index:999999;}
#myModal{ z-index:9999;}
</style>
</body>

<!-- Mirrored from www.w3web.co.in/uk-salon/connect/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2015 11:12:05 GMT -->
</html>
