<?php $title = "Checkout";
require 'includes/header.php' ?>
<!-- Checkout Section -->
<section class="checkout--section padding">
    <ul class="checkout--steps stepThree">
        <li class="active">
            <h6>Booking</h6>
            <span>Enter your booking details</span>
        </li class="active">
        <li>
            <h6>Checkout</h6>
            <span>Use your preferred payment method</span>
        </li>
        <li class="active">
            <h6>Confirmation</h6>
            <span>Recieve a confirmation email</span>
        </li>
    </ul>
    <div class="container">
        <div class="checkout--bookingStep2">
            <div class="info green">Your booking has been submitted successfully.<br />
                We just sent you a confirmation email to prashantshrestha419@gmail.com</div>
            <div class="checkout--confirmationDetail">
                <h3>Booking Details</h3>
                <ul>
                    <li>
                        <b>Full name :</b>
                        <p>Prashant Shrestha</p>
                    </li>
                    <li>
                        <b>Email :</b>
                        <p>abcd@gmail.com</p>
                    </li>
                    <li>
                        <b>Phone Number :</b>
                        <p>9843048507</p>
                    </li>
                </ul>
                <div class="actions">
                    <a href="#" title="Manage Your Bookings">Manage Your Bookings</a>
                    <a href="#" title="Print Booking Details">Print Booking Details</a>
                </div>
            </div>
            <div class="btn--holder center">
                <a href="/" class="btn btn--secondary" title="Return To Home Page">Return To Home Page</a>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section -->
<?php
require 'includes/footer.php'
?>