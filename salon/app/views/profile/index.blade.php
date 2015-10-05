<?php
$gender = array("M" => "Male","F" => "Female");
?>
<!-- begin:my-account -->
<div class="my-account">
   <div class="row">
      <div class="col-md-4">
         hhhhhhhhhhh
      </div>
      <div class="col-md-8">
         hhhhhhhh
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-4 account-bg">
         <div class="row">
            <div class="col-md-12">
                @if(isset($profile->profile_pic)  && $profile->profile_pic != "")
                    <img src="{{ URL::to('/assets/images/profile_pic/'.$profile->profile_pic); }}" style="width:250px"/>
                @else
                    <img src="{{ URL::to('/assets/images/profile_pic/default.png'); }}"/>
                @endif
               <!--img src="images/prfl-img.png"-->
               <div class="account-text">
                  <h3>{{ $user->full_name(); }}</h3>
                  <p><i class="fa fa-female"></i> {{ $gender[$profile->gender];  }}</p>
                  <div class="account-btn"><a href="#" data-toggle="modal" data-target="#modal-edit_profile">Edit My Profile</a></div>
                  <!-- begining:Edit Password -->
                  <div class="modal fade" id="modal-edit_profile" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Edit Profile</h4>
                           </div>
                           <div class="modal-body">
                            {{ Form::open(array('url' => '/update','files' => true)) }}
                                <div class="form-group">
                                    <label for="password">Profile Name</label>
                                    <input  type="text" name="profile_name" value="{{  $profile->profile_name }}" class="form-control input-lg" >
                                 </div>
                                 
                                 <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender"  class="form-control input-lg" >
                                        <option value="M" <?php if($profile->gender == "M") : echo "selected"; endif; ?>>Male</option>
                                        <option value="F" <?php if($profile->gender == "F") : echo "selected"; endif; ?>>Female</option>
                                    </select>
                                    <!--input type="password" id="password_confirmation" name="new_password_confirmation" class="form-control input-lg" placeholder="Verify Password"-->
                                 </div>
                                 
                                 <div class="form-group">
                                    <label for="email">Email</label>
                                    <input  type="text" disabled="disabled" name="" value="{{  $user->email }}" class="form-control input-lg" >
                                 </div>
                                 
                                 <div class="form-group">
                                    <label for="profile pic">Profile Pic</label>
                                    <input  type="file" name="profile_pic" class="" >
                                 </div>
                           </div>
                           <div class="modal-footer">            
                                    <input type="submit" value="Update Profile"  name="submit" class="btn btn-warning btn-block btn-lg" value="Submit">
                                </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:Edit Password-->
                  
                  
                  
                  
                  <div class="account-bottomline"></div>
                  <div class="account-info">
                     LOGIN INFO 
                     <p>{{  $user->email }}</p>
                  </div>
                  <div class="account-info"><a href="#" data-toggle="modal" data-target="#modal-signin"><i class="fa fa-pencil"></i> Change Password</a></div>
                  <!-- begining:change-paswword -->
                  <div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">CHANGE PASSWORD</h4>
                           </div>
                           <div class="modal-body">
                              <form role="form"  method="post" action="{{ url('/password'); }}">
                                 <div class="form-group">
                                    <label for="password">Old Password</label>
                                    <input  type="password" name="old_password" class="form-control input-lg" placeholder="Old Password">
                                 </div>
                                 <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input  id="new_password" type="password" name="new_password"  class="form-control input-lg" placeholder="New Password">
                                 </div>
                                 <div class="form-group">
                                    <label for="password">Verify Password</label>
                                    <input type="password" id="password_confirmation" name="new_password_confirmation" class="form-control input-lg" placeholder="Verify Password">
                                 </div>
                           </div>
                           <div class="modal-footer">  
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">          
                                    <input type="submit" value="Change Password"  name="submit" class="btn btn-warning btn-block btn-lg" value="Submit">
                                </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:change-paswword -->
                  
                  <div class="account-bottomline"></div>
                  <div class="account-info">
                     PUBLIC PROFILE 
                     <p>Known as "{{  $profile->profile_name }}" on UK Salon</p>
                  </div>
                  <div class="account-info"><a href="#"><i class="fa fa-arrow-right"></i>
                     Check how others see your profile </a>
                  </div>
                  <div class="account-dvdr"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- beginner:tabs -->
      <div class="col-md-8">
         <div id="tabs" class="tabs">
            <nav>
               <ul>
                  <li><a href="#section-1" class=""><span><i class="fa fa-book"></i> Bookings</span></a></li>
                  <li><a href="#section-2" class=""><span><i class="fa fa-heart"></i> Wallet</span></a></li>
               </ul>
            </nav>
            <div class="content">
               <section id="section-1">
                  <h3>Sushi Gumbo Beetroot</h3>
                  <p>Sushi gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
               </section>
               <section id="section-2">
                  <h3>Asparagus Cucumber Cake</h3>
                  <p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
               </section>
            </div>
            <!-- /content -->
         </div>
         <!-- /tabs -->
      </div>
   </div>
</div>
<!-- end:my-account -->
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
<!-- begin:partner -->
<!-- end:partner -->

<script src="{{ URL::to('/assets/js/cbpFWTabs.js'); }}"></script>
<script>
    new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>