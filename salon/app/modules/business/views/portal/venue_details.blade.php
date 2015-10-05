{{ Form::open(array('url' => '/business/venue', 'class'=>'signup-form', 'id'=>'business-signup-form' )) }}
<div class="vcenter-parent">
    <div class="vcenter">
        <div class="tagline">
            <h1 class="title">Nearly there...</h1>
            <h2 class="sub-text">Join thousands of businesses already on Wahanda</h2>
        </div>

        <div class="content-box">
            <div class="box-wrapper clearfix">
                <div class="form-row txt-only">
                    <label>Business name</label>
                    <div class="business-title">{{$business_name}}</div>
                </div>
                <div class="form-row">
                    <label for="venue-type-id">Business type</label>
                    <div data-validation-req="Please select the type of your business" class="venue-type">
                        <div class="wrapper">
                            <select name="type_id" class="form-control">
                                <option value="">Choose one</option>

                                <option value="10">Salon</option>

                                <option value="21">Hair Salon</option>

                                <option value="1">Hotel Spa</option>

                                <option value="5">Day Spa</option>

                                <option value="50">Skin Clinic</option>

                                <option value="48">Massage &amp; Therapy Centre</option>

                                <optgroup label="">

                                    <option value="28">Airport Spa</option>

                                    <option value="43">Barbershop</option>

                                    <option value="46">Beauty Institute</option>

                                    <option value="45">Beauty School</option>

                                    <option value="16">Bootcamp</option>

                                    <option value="47">Brow Bar</option>

                                    <option value="4">Casino Spa</option>

                                    <option value="20">Chiropody Clinic</option>

                                    <option value="49">Chiropractic Clinic</option>

                                    <option value="36">Cruise Ship Spa</option>

                                    <option value="35">Dance Studio</option>

                                    <option value="7">Dental Spa</option>

                                    <option value="2">Destination Spa</option>

                                    <option value="12">Eye Clinic</option>

                                    <option value="18">Fat Farm</option>

                                    <option value="51">Fish Spa</option>

                                    <option value="9">Fitness Centre</option>

                                    <option value="24">Golf Course</option>

                                    <option value="15">Gym</option>

                                    <option value="41">Hammam</option>

                                    <option value="59">Health Club</option>

                                    <option value="29">Health Farm</option>

                                    <option value="53">Makeup Studio</option>

                                    <option value="38">Martial Arts Centre</option>

                                    <option value="6">Medical Spa</option>

                                    <option value="42">Mobile Beauty</option>

                                    <option value="14">Mobile Fitness</option>

                                    <option value="57">Mobile Massage</option>

                                    <option value="8">Mobile Spa</option>

                                    <option value="27">Nail Salon</option>

                                    <option value="55">Nutrition Centre</option>

                                    <option value="58">Online Retailer</option>

                                    <option value="60">Photographic Studio</option>

                                    <option value="22">Pilates Studio</option>

                                    <option value="56">Surf School</option>

                                    <option value="25">Swimming Pool</option>

                                    <option value="37">Tanning Salon</option>

                                    <option value="23">Tennis Court</option>

                                    <option value="54">Treatment Room - Beauty</option>

                                    <option value="26">Treatment Room - Spa</option>

                                    <option value="44">Treatment Room - Wellness</option>

                                    <option value="40">Waxing Salon</option>

                                    <option value="52">Weight Loss Clinic</option>

                                    <option value="11">Wellness Centre</option>

                                    <option value="17">Yoga Retreat</option>

                                    <option value="13">Yoga Studio</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="venue-address">Address</label>
                    <textarea name="address" id="venue-address"></textarea>
                </div>

                <div class="form-row">
                    <label for="venue-city">City</label>
                    {{ Form::text('city','',array('id'=>'venue-city')); }}
                </div>

                <div class="form-row">
                    <label for="venue-state">State</label>
                    {{ Form::text('state','',array('id'=>'venue-state')); }}

                    <span class="input-note">
                        <span class="postal-ref">{{$postal_code}}</span>,<span class="country-name">{{$country}}</span>
                    </span>
                </div>

                <div class="form-row">
                    <label for="venue-phone-number">Phone number</label>
                    <input type="text" value="" name="phone_number" id="venue-phone-number" />
                    <span class="input-note phone-number-info">How can we reach you?</span>
                </div>                                                                            
                <div class="form-row">
                <label class="long-label" for="booking-management-type">How do you manage your bookings?</label>
                <div class="booking-management-type">
                    <div class="wrapper">
                        <select name="old_booking_style" id="booking-management-type">
                            <option value="">Choose one</option>
                            <option data-request-booking-system-name="false" value="PP">
                                Pen &amp; Paper
                            </option>
                            <option data-request-booking-system-name="true" value="OS">
                                Online scheduling system
                            </option>
                            <option data-request-booking-system-name="true" value="DS">
                                Installed (desktop) scheduling system
                            </option>
                            <option data-request-booking-system-name="true" value="CS">
                                Other calendar software (Google Calendar, Outlook, etc.)
                            </option>
                        </select>
                    </div>
                </div>
            </div>
   
    <div class="form-row">
        <label class="long-label" for="signing-reason-type">What is your primary reason for signing up?</label>
        <div class="signing-reason-type">
            <div class="wrapper">
                <select name="signup_reason" id="signing-reason-type">
                    <option value="">Choose one</option>
                    <option value="NS">
                        Find new customers and boost sales
                    </option>
                    <option value="FS">
                        Free booking system
                    </option>
                    <option value="BO">
                        Both
                    </option>
                </select>
            </div>
        </div>
</div>

<div class="action-row">
    <span class="legal">
        <input type="checkbox" name="t-and-c" id="t-and-c" />
        <label for="t-and-c" id="t-and-c-label">
           I agree to the <span class="link a-terms-and-conditions">terms and conditions</span>
        </label>
        <div class="error-message left hide"><span>Please accept the Terms and Conditions</span></div>
    </span>

    <button id="main-button" class="button main-button submit">
        <span class="button-value">Sign up</span>
    </button>
</div>

<div class="marketing-copy">

    <a name="Tell_us_more_about_you" id="Tell_us_more_about_you"></a><h2>Tell us more about you</h2>

    <p>You’re just one step away from signing up with Wahanda. We can’t wait to
        have you on board but first we need a few details from you.</p>
        <p>Please fill out the form on the left, click <strong>Sign
            up</strong> and that’s it. Welcome to the family.</p>                
        </div>
    </div>
</div>

</div>
</div>

{{ Form::close() }}