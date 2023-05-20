<?php $title = "Hotel Detail";
require 'includes/header.php' ?>
<!-- Inner Banner Section -->
<section class="innerBanner--section" style="background: url('/img/contact-banner-bg.png')center center no-repeat; background-size:cover;">
    <div class="container">
        <div class="innerBanner--text">
            <h1>Baber Mahal Villas - The Boutique Heritage Hotel</h1>
            <span>Kathmandu, Nepal</span>
            <div class="rating">
                <ul class="reviews">
                    <li><img src="/img/icons/icon-star.svg" alt="icon-star"></li>
                    <li><img src="/img/icons/icon-star.svg" alt="icon-star"></li>
                    <li><img src="/img/icons/icon-star.svg" alt="icon-star"></li>
                    <li><img src="/img/icons/icon-star.svg" alt="icon-star"></li>
                    <li><img src="/img/icons/icon-star-outline.svg" alt="icon-star-outline"></li>
                </ul>
                <span>69 Reviews</span>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner Section -->
<!-- Hotel Detail Section -->
<section class="hotelDetail--section padding">
    <div class="container">
        <div class="hotelDetail--data">
            <div class="hotelDetail--box">
                <div class="hotelDetail--info">
                    <div class="hotelInfo">
                        <div class="info">
                            <div class="title">
                                <h3>The Boutique Heritage Hotel</h3><span>Babarmahal, Kathmandu</span>
                            </div>
                            <span>14 Rooms left</span>
                        </div>
                        <div class="offers">
                            <h3>What this place offers</h3>
                            <ul>
                                <?php for ($i = 0; $i < 8; $i++) { ?>
                                    <li>
                                        <figure><img src="/img/icons/icon-wine-glass.svg" alt=""></figure>
                                        <h6>Garden View</h6>
                                    </li>
                                <?php                                } ?>

                            </ul>
                        </div>
                    </div>
                    <div class="description">
                        <h6>Get the celebrity treatment with world-class service at Baber Mahal Vilas - </h6><br />
                        <p>

                            You're eligible for a Genius discount at Baber Mahal Vilas - The Boutique Heritage Hotel! To save at this property, all you have to do is sign in or register.

                            Located in Kathmandu, 3.7 km from Hanuman Dhoka, Baber Mahal Vilas - The Boutique Heritage Hotel provides accommodations with a restaurant, free private parking, an outdoor swimming pool and a fitness center. With a bar, the property also features a shared lounge, as well as a garden. The property has a 24-hour front desk, room service and currency exchange for guests.

                            All guest rooms at the hotel come with air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, bathrobes and slippers. Free WiFi is available to all guests, while some rooms here will provide you with a DVD player. All rooms will provide guests with a desk and an electric tea pot.

                            A continental breakfast is available daily at Baber Mahal Vilas - The Boutique Heritage Hotel.

                            The accommodation provides a range of facilities such as a wellness area including a sauna. The area is popular for cycling, and bike rental and car rental are available at Baber Mahal Vilas - The Boutique Heritage Hotel.

                            Kathmandu Durbar Square is 3.9 km from the hotel, while Patan Durbar Square is 4.2 km away.

                            Couples in particular like the location – they rated it 8.7 for a two-person trip.

                            Baber Mahal Vilas - The Boutique Heritage Hotel has been welcoming Booking.com guests since Sept 22, 2016

                            Distance in property description is calculated using © OpenStreetMap
                        </p>
                    </div>
                    <div class="hotelReviews">
                        <h5>See what guests loved the most:</h5>
                        <div class="reviewItemBox">
                            <?php for ($i = 0; $i < 3; $i++) {
                                include 'includes/components/review-item.php';
                            } ?>
                        </div>
                        <div class="btn--holder center"><a href="#" class="btn btn--primary" title="Write">Write Review</a></div>
                    </div>
                    <div class="hotelAttractions">
                        <h3>Top Attractions </h3>
                        <ul>
                            <li><span>Narayanhiti Palace Museum</span><span>2.4 km</span></li>
                            <li><span>Narayanhiti Palace Museum</span><span>2.4 km</span></li>
                            <li><span>Narayanhiti Palace Museum</span><span>2.4 km</span></li>
                            <li><span>Narayanhiti Palace Museum</span><span>2.4 km</span></li>
                        </ul>
                    </div>
                </div>
                <div class="hotelDetail--rooms">
                    <div class="title">
                        <h3 class="col-white">Starting from Rs 14,000/-</h3>
                        <span>Family Room</span>
                    </div>
                    <div class="btn--holder w-full column">
                        <a href="#" class="btn btn--primary">Reserve</a>
                        <legend class="col-white">You won't be charged yet</legend>
                    </div>
                </div>
            </div>
            <div class="hotelDetail--gallery">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <figure><a href="#" title=""><img src="/img/hotels/hotel-img-1.png" alt="hotel-img-1"></a></figure>
                <?php } ?>
                <a href="#" title="">
                    <img src="/img/hotels/hotel-img-1.png" alt="hotel-img-1">
                    <p>+47 <br />Photos</p>
                </a>
            </div>
            <div class="hotelDetail--map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27776849206!2d85.28493299963509!3d27.709030241827847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1684607797039!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </div>
</section>
<!-- Hotel Detail Section -->
<!-- Similar Places -->
<section class="general--section padding dimBg">
    <div class="container">
        <div class="general--box">
            <h2>Similar Places</h2>
            <div class="sliderBox">
                <div class="aroundYou--slider splide" id="aroundYou--slider">
                    <div class="splide__slider">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <div class="splide__slide">
                                        <?php include 'includes/components/hotel-item.php' ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Similar Places -->
<?php
require 'includes/footer.php'
?>