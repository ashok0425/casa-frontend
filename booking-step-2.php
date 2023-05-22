<?php $title = "Checkout";
require 'includes/header.php' ?>
<!-- Checkout Section -->
<section class="checkout--section padding">
    <ul class="checkout--steps stepTwo">
        <li class="active">
            <h6>Booking</h6>
            <span>Enter your booking details</span>
        </li>
        <li class="active">
            <h6>Checkout</h6>
            <span>Use your preferred payment method</span>
        </li>
        <li>
            <h6>Confirmation</h6>
            <span>Recieve a confirmation email</span>
        </li>
    </ul>
    <div class="container">
        <div class="checkout--payment">
            <div class="paymentMethod">
                <h3>Select your payment method</h3>
                <ul>
                    <li><button><img src="/img/icons/icon-paypal.svg" alt=""></button></li>
                    <li><button><img src="/img/icons/icon-esewa.svg" alt=""></button></li>
                    <li><button><img src="/img/icons/icon-visacard.svg" alt=""></button></li>
                    <li><button><img src="/img/icons/icon-mastercard.svg" alt=""></button></li>
                </ul>
            </div>
            <div class="btn--holder center">
                <a href="#" class="btn btn--secondary" title="Pay Now">Pay Now</a>
                <a href="#" class="btn btn--primary" title="Pay at Hotel">Pay at Hotel</a>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section -->
<?php
require 'includes/footer.php'
?>