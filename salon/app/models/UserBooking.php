<?php
class UserBooking extends Eloquent {
    protected $fillable = ['user_id','business_id','service_id','booking_date'];
    protected $table = "user_booking";
}
