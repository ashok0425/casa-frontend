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
        <div class="checkout--bookingStep2">
            <div class="info">Please review your details that you have submitted, you can change the details by clicking on the edit button.</div>
            <div class="checkout--bookingInfo">
                <h3>Booking Details</h3>
                <ul>
                    <li class="w-full">
                        <b>Full name :</b><span>Prashant Shrestha</span>
                    </li>
                    <li>
                        <b>Email :</b><span>abcd@gmail.com</span>
                    </li>
                    <li>
                        <b>Phone Number :</b><span>9843048507</span>
                    </li>
                    <li class="grandTotal">
                        <b>GrandTotal :</b><span>Rs 29,500/-</span>
                    </li>
                </ul>
            </div>
            <div class="btn--holder center">
                <a href="#" title="Proceed to Checkout" class="btn btn--secondary">Proceed to Checkout</a>
                <a href="#" title="Edit Details" class="btn btn--primary">Edit Details</a>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section -->
<?php
require 'includes/footer.php'
?>