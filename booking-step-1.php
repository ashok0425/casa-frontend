<?php $title = "Checkout";
require 'includes/header.php' ?>
<!-- Checkout Section -->
<section class="checkout--section padding">
    <ul class="checkout--steps stepOne">
        <li class="active">
            <h6>Booking</h6>
            <span>Enter your booking details</span>
        </li>
        <li>
            <h6>Checkout</h6>
            <span>Use your preferred payment method</span>
        </li>
        <li>
            <h6>Confirmation</h6>
            <span>Recieve a confirmation email</span>
        </li>
    </ul>
    <div class="container">
        <form class="checkout--bookingForm">
            <div class="checkout--booking">
                <h6>Booking Details</h6>
                <div class="form--group">
                    <input type="text" name="first-name" id="first-name" class="form--control" placeholder="First Name" onblur="this.placeholder='First Name'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="text" name="last-name" id="last-name" class="form--control" placeholder="Last Name" onblur="this.placeholder='Last Name'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="email" name="email" id="email" class="form--control" placeholder="Email" onblur="this.placeholder='Email'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="text" name="phone-number" id="phone-number" class="form--control" placeholder="Phone Number" onblur="this.placeholder='Phone Number'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="text" name="address" id="address" class="form--control" placeholder="Address" onblur="this.placeholder='Address'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="text" name="city" id="city" class="form--control" placeholder="City" onblur="this.placeholder='City'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="text" name="country" id="country" class="form--control" placeholder="Country" onblur="this.placeholder='Country'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <input type="text" name="zip-code" id="zip-code" class="form--control" placeholder="Zip Code" onblur="this.placeholder='Zip Code'" onfocus="this.placeholder=''">
                </div>
            </div>
            <div>
                <h6>Check in - Check out</h6>
                <div class="form--group">
                    <input type="text" name="check-in-out" id="check-in-out" class="form--control">
                </div>
            </div>
            <div>
                <h6>Arrival Time</h6>
                <div class="form--group">
                    <input type="text" name="arrival-time" id="arrival-time" class="form--control" placeholder="Whats your expected time of arrival?" onblur="this.placeholder='Whats your expected time of arrival?'" onfocus="this.placeholder=''">
                </div>
            </div>
            <div>
                <h6>Special Needs</h6>
                <div class="form--group">
                    <input type="text" name="special-needs" id="special-needs" class="form--control" placeholder="Do you have any special needs?" onblur="this.placeholder='Do you have any special needs?'" onfocus="this.placeholder=''">
                </div>
            </div>
            <div class="checkout--coupon">
                <h6>Coupon</h6>
                <div class="form--group">
                    <input type="text" name="special-needs" id="special-needs" class="form--control" placeholder="Do you have any special needs?" onblur="this.placeholder='Do you have any special needs?'" onfocus="this.placeholder=''">
                </div>
                <div class="submit--holder">
                    <button class="btn btn--secondary" aria-label="redeem">Redeem</button>
                </div>
            </div>
            <div class="checkbox--group">
                <input type="checkbox" name="agree-tc" id="agree-tc">
                <label for="agree-tc"> I agree to the <a href="#" class="col-pink" title="Terms and Conditions">Terms and Conditions</a></label>
            </div>
            <div class="submit--holder"><button type="submit" class="btn btn--secondary" aria-label="booking-submit">Proceed to Checkout</button></div>
        </form>
    </div>
</section>
<!-- Checkout Section -->
<?php
require 'includes/footer.php'
?>