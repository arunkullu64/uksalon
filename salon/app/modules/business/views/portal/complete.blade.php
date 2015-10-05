{{ Form::open(array('url' => '/business/complete', 'class'=>'signup-form', 'id'=>'business-signup-form' )) }}
<div class="vcenter-parent">
    <div class="vcenter">
        <div class="tagline">
            <h1 class="title">Nearly there...</h1>
            <h2 class="sub-text">Join thousands of businesses already on Wahanda</h2>
        </div>

        <div class="content-box">
            <div class="box-wrapper clearfix">
                <div class="form-row txt-only">
                    <label>Email</label>
                    <div class="business-title">{{$email}}</div>
                </div>

                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>

                <div class="form-row">
                    <label for="password-confirm">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password-confirm" />
                </div>
                                                                      

<div class="action-row">
    <button class="button main-button submit">
        <span class="button-value">Complete Signup</span>
    </button>
</div>

<div class="marketing-copy">

    <a name="Tell_us_more_about_you" id="Tell_us_more_about_you"></a><h2>Choose Password</h2>

    <p>You’re just one step away from .
signing up with us. Just choose your password and we are ready to go.</p>          
        </div>
    </div>
</div>
</div>
</div>

{{ Form::close() }}