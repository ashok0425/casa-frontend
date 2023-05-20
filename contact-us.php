<?php $title = "Contact Us";
require 'includes/header.php' ?>
<!-- Inner Banner Section -->
<section class="innerBanner--section" style="background: url('/img/contact-banner-bg.png')center center no-repeat; background-size:cover;">
    <div class="container">
        <div class="innerBanner--text">
            <h1>Contact us</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Section -->
<!-- Contact Section -->
<section class="contact--section padding">
    <div class="container">
        <div class="contact--box">
            <div class="contact--formBox">
                <h3 class="sz-36 mb-20 col-purple">Contact Us For More Information</h3>
                <form class="contact--form">
                    <div class="form--group">
                        <input type="text" name="your-name" id="your-name" class="form--control solidB" placeholder="Your Name" onblur="this.placeholder='Your Name'" onfocus="this.placeholder=''">
                    </div>
                    <div class="form--group">
                        <input type="email" name="your-email" id="your-email" class="form--control solidB" placeholder="Your Email" onblur="this.placeholder='Your Email'" onfocus="this.placeholder=''">
                    </div>
                    <div class="form--group">
                        <input type="text" name="mobile-number" id="mobile-number" class="form--control solidB" placeholder="Mobile Number" onblur="this.placeholder='Mobile Number'" onfocus="this.placeholder=''">
                    </div>
                    <div class="form--group">
                        <textarea name="message" id="message" rows="3" class="form--control solidB" placeholder="Your Message" onblur="this.placeholder='Your Message'" onfocus="this.placeholder=''"></textarea>
                    </div>
                    <div class="submit--holder">
                        <button type="submit" class="btn btn--secondary" aria-label="contact-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="contact--infoBox">
                <h3 class="sz-36 mb-20 col-purple text-center">Directly reach out to us here</h3>
                <ul class="general--infoBox">
                    <?php $array = array(
                        ['icon' => '/img/icons/icon-mail.svg', 'label' => 'Email', 'value' => 'support@hbs.com', 'url' => 'mailto:support@hbs.com'],
                        ['icon' => '/img/icons/icon-headphone.svg', 'label' => 'Call Support', 'value' => '+977 9818020201', 'url' => 'tel:+977 9818020201'],
                        ['icon' => '/img/icons/icon-instagram.svg', 'label' => 'Instagram', 'value' => '@hotelsinnepal', 'url' => '@hotelsinnepal'],
                        ['icon' => '/img/icons/icon-facebook.svg', 'label' => 'Facebook', 'value' => '@hotelsinnepal', 'url' => '@hotelsinnepal'],
                        ['icon' => '/img/icons/icon-linkedin.svg', 'label' => 'Linkedin', 'value' => '@hotelsinnepal', 'url' => '@hotelsinnepal'],
                        ['icon' => '/img/icons/icon-twitter.svg', 'label' => 'Twitter', 'value' => '@hotelsinnepal', 'url' => '@hotelsinnepal'],
                    );
                    foreach ($array as $item) {
                        include 'includes/components/general-info-item.php';
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<?php
require 'includes/sidebar/newsletter.php';
require 'includes/footer.php'
?>