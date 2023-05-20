<?php $title = "Become a host";
require 'includes/header.php' ?>
<!-- Host Banner -->
<section class="hostBanner--section" style="background: url('/img/hostBanner-bg.png') center center no-repeat; background-size:cover;">
    <div class="container">

    </div>
</section>
<!-- Host Banner -->
<!-- Host Section -->
<section class="host--section padding">
    <div class="container">
        <div class="host--box">
            <div class="host--formBox">
                <h3 class="sz-36 mb-20 col-purple text-center">List your hotel to get more visitors</h3>
                <form action="" class="host--form">
                    <h5>Become a host</h5>
                    <div class="form--group">
                        <input type="text" name="name" id="name" class="form--control" placeholder="Name" onblur="this.placeholder='Name'" onfocus="this.placeholder=''">
                    </div>
                    <div class="form--group">
                        <input type="text" name="phone-number" id="phone-number" class="form--control" placeholder="Phone Number" onblur="this.placeholder='Phone Number'" onfocus="this.placeholder=''">
                    </div>
                    <div class="form--group">
                        <input type="text" name="city" id="city" class="form--control" placeholder="City" onblur="this.placeholder='City'" onfocus="this.placeholder=''">
                    </div>
                    <div class="submit--holder w-full">
                        <button type="submit" class="btn btn--primary" aria-label="contact-submit">Become a host</button>
                    </div>
                    <legend>By sharing your details, you agree to our <a href="#" title="privacy policy">privacy policy</a></legend>
                </form>
            </div>
            <div class="host--detail">
                <h3 class="sz-36 mb-20 col-purple text-center">Here are some of the benefits you enjoy when listing with us...</h3>
                <ul class="general--infoBox">
                    <?php $array = array(
                        ['icon' => '/img/icons/icon-mail.svg', 'label' => 'Communicate your house rules', 'value' => '', 'url' => ''],
                        ['icon' => '/img/icons/icon-headphone.svg', 'label' => 'Easy access to support', 'value' => '', 'url' => ''],
                        ['icon' => '/img/icons/icon-wallet.svg', 'label' => 'Protect your investment', 'value' => '', 'url' => ''],
                        ['icon' => '/img/icons/icon-filter.svg', 'label' => 'Get the type of bookings you want', 'value' => '', 'url' => ''],
                        ['icon' => '/img/icons/icon-wrench.svg', 'label' => 'Easy action if an issue comes up', 'value' => '', 'url' => ''],
                        ['icon' => '/img/icons/icon-chat.svg', 'label' => 'Align with guests before booking', 'value' => '', 'url' => ''],
                    );
                    foreach ($array as $item) {
                        include 'includes/components/general-info-item.php';
                    } ?>
                </ul>
            </div>
            <?php $dir = "rtl";
            include 'includes/components/testimonial-item.php';
            ?>
        </div>
    </div>
</section>
<!-- Host Section -->
<!-- Host Info Section -->
<section class="hostInfo--section">
    <div class="container">
        <div class="hostInfo--box">
            <div class="hostInfo--text">
                <h3>Why join hands with Casa ?</h3>
                <ul>
                    <li>More than 6.4 million vacation rentals already listed</li>
                    <li>Over 1 billion vacation rental guest arrivals</li>
                    <li>More than 40% of new vacation rental listings get their first booking within a week</li>
                </ul>
            </div>
            <figure><img src="/img/person-1.png" alt="person-1"></figure>
        </div>
    </div>
</section>
<!-- Host Info Section -->
<!-- General Testimonial Section -->
<section class="general--section padding">
    <div class="container">
        <div class="general--box">
            <?php include 'includes/components/testimonial-item.php'; ?>
            <p class="col-purple text-center h3">Transparent policies and seamless payments to enable hassle-free growth.</p>
        </div>
    </div>
</section>
<!-- General Testimonial Section -->
<?php
require 'includes/sidebar/newsletter.php';
require 'includes/footer.php'
?>