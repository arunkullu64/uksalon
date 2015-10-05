<div id="content">
    {{ Form::open(array('url' => '/business/signup', 'class'=>'signup-form', 'id'=>'business-signup-form' )) }}
    <div class="fullheight-wrapper">
        <div class="vcenter-parent">
            <div class="vcenter">

                <div class="tagline">
                    <h1 class="title">Sign up for a free account</h1>
                    <h2 class="sub-text">Get listed and join thousands of businesses already on Wahanda</h2>
                </div>

                <div class="content-box">
                    <div class="box-wrapper clearfix">
                        <span class="info-banner">Important</span>
                        <div class="form-row">
                            <label for="venue-name">Business name</label>
                            {{ Form::text('business_name','',array('id'=>'venue-name','data-validation-req'=>'Please enter your business name')); }}
                            <span class="input-note name-info">Name that you advertise to your customers</span>
                        </div>
                        <div class="form-row post-code">
                            <label for="postal-ref">Post code</label>
                            {{ Form::text('postal_code','',array('id'=>'postal-ref','data-validation-req'=>'Please enter the postcode')); }}
                            <div class="country">
                                <div class="wrapper">
                                    <select class="form-control" name="country">
                                        <option value="UK" selected="">UK</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="contact-name">Your name</label>
                            {{ Form::text('full_name','',array('id'=>'contact-name','data-validation-req'=>'Please enter your name')); }}
                        </div>
                        <div class="form-row">
                            <label for="contact-email">Your email</label>
                            {{ Form::email('email','',array('id'=>'contact-email','data-validation-req'=>'Please enter your email address')); }} 
                            <div class="text-holder">
                                <span class="logged-in-email hide"></span>
                                <span class="log-out hide">Not you?</span>
                            </div>
                        </div>
                        <div class="action-row">
                            <button class="main-button button" type="submit">
                                <span class="button-value">Continue</span>
                            </button>
                        </div>

                        <div class="marketing-copy">

                            <p>A bit about us
                            </p>

                            <ol>
                                <li>We're the world’s fastest growing online health and beauty marketplace
                                </li>
                                <li>Getting listed improves your web presence, making your business easier to find
                                </li>
                                <li>Our free online booking system makes managing your business simple and gives you the option to sell through Wahanda
                                </li>
                                <li>Pay just 20% plus  VAT commission on sales we send you and receive payment within 15 days
                                </li>
                                <li>Any data you share with us belongs to you and we promise to keep it secure</li></ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}

    </div>