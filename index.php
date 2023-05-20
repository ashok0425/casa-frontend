<?php $title = "Home";
require 'includes/header.php' ?>
<!-- Banner Section -->
<section class="banner--section" style="background: url('/img/banner-bg.png') center center no-repeat; background-size:cover;">
    <div class="container">
        <div class="banner--box">
            <h1>Book <i>Cheapest & Best destinations</i> Faster and securely</h1>
            <form class="banner--search">
                <div class="form--group">
                    <input type="text" name="city-hotel-keyword" class="form--control" placeholder="Search by City or Hotel" onblur="this.placeholder='Search by City or Hotel'" onfocus="this.placeholder=''">
                </div>
                <div class="form--group">
                    <select name="near-me" class="form--control" id="near-me">
                        <option value="0">Near Me</option>
                    </select>
                </div>
                <div class="multiDate--group">
                    <div class="customDate--input">
                        <input type="date" name="checkin-date" id="checkin-date" onchange="this.nextElementSibling.innerHTML=this.value">
                        <label for="checkin-date">Check in Date</label>
                    </div>
                    <strong>-</strong>
                    <div class="customDate--input">
                        <input type="date" name="checkout-date" id="checkout-date" onchange="this.nextElementSibling.innerHTML=this.value">
                        <label for="checkout-date">Check out Date</label>
                    </div>
                </div>
                <div class="form--group">
                    <select name="room-guest" id="room-guest" class="form--control">
                        <option value="1-1">1 Room, 1 Guest</option>
                    </select>
                </div>
                <div class="submit--group">
                    <button type="submit" class="btn btn--primary" aria-label="search">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Banner Section -->
<!-- Recently Viewed Section -->
<section class="general--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Recently Viewed</h2>
            <div class="sliderBox">
                <div class="recentlyViewed--slider splide" id="recentlyViewed--slider">
                    <div class="splide__slider">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide">
                                    <?php $listView = false;
                                    include 'includes/components/hotel-item.php' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn--holder center">
                <a href="#" class="btn btn--primary" title="View All">View All</a>
            </div>
        </div>
    </div>
</section>
<!-- Recently Viewed Section -->
<!-- Around You Section -->
<section class="aroundYou--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Places around you</h2>
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
            <div class="btn--holder center">
                <a href="#" class="btn btn--secondary" title="View All">View All</a>
            </div>
        </div>
    </div>
</section>
<!-- Around You Section -->
<!-- Info Section -->
<section class="info--section" style="background: url('/img/info-bg.png')center center no-repeat; background-size: cover;">
    <div class="container">
        <div class="info--text">
            <h2>Get <i>20% Off on your next stay</i> At Hotel Blue Horizon</h2>
        </div>
    </div>
</section>
<!-- Info Section -->
<!-- Featured Places -->
<section class="featured--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Featured Places</h2>
            <div class="featured--sliderBox">
                <div class="featured--slider splide" id="featured--slider">
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
            <div class="btn--holder center">
                <a href="#" class="btn btn--secondary" title="Show More">Show More</a>
            </div>
        </div>
    </div>
</section>
<!-- Featured Places -->
<!-- Hot Places -->
<section class="hotPlaces--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Hot Places</h2>
            <div class="hotPlaces--box">
                <?php for ($i = 0; $i < 3; $i++) {
                    $listView = true;
                    include 'includes/components/hotel-item.php';
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Hot Places -->
<!-- Property Section -->
<section class="property--section padding dimBg">
    <div class="container">
        <div class="general--box">
            <h2>Browse by property type</h2>
            <div class="property--box">
                <?php for ($i = 0; $i < 4; $i++) {
                    include 'includes/components/property-item.php';
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Property Section -->
<!-- Regions Section -->
<section class="region--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Search for places by Region</h2>
            <div class="region--box">
                <?php for ($i = 0; $i < 5; $i++) {
                    include 'includes/components/region-item.php';
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Regions Section -->
<!-- Download App Section -->
<section class="app--section">
    <div class="container">
        <div class="app--box">
            <div class="app--text">
                <h2>Download the app</h2>
                <p>Casa App is now available on app store & Google Play.
                    <br />Download it now using the links below:
                </p>
                <ul>
                    <li><button><img src="/img/playstore-download.png" alt="play-store-download"></button></li>
                    <li><button><img src="/img/appstore-download.png" alt="app-store-download"></button></li>
                </ul>
            </div>
            <figure class="app--images">
                <img src="/img/mobile-1.png" alt="">
                <img src="/img/mobile-1.png" alt="">
            </figure>
        </div>
    </div>
</section>
<!-- Download App Section -->
<!-- Blogs Section -->
<section class="blogs--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Get to know the story too</h2>
            <div class="blogs--box">
                <?php for ($i = 0; $i < 3; $i++) {
                    include 'includes/components/blog-item.php';
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Blogs Section -->
<!-- Why Choose Us Section -->
<section class="whyChooseUs--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Why Choose Us</h2>
            <div class="whyChooseUs--box">
                <?php $array = array(
                    ['icon' => '/img/icons/icon-tags.svg', 'label' => 'Best deals on hotels',],
                    ['icon' => '/img/icons/icon-medal.svg', 'label' => 'Trusted and free',],
                    ['icon' => '/img/icons/icon-restart.svg', 'label' => 'Free cancellation',],
                    ['icon' => '/img/icons/icon-search.svg', 'label' => 'Search without worry',],
                    ['icon' => '/img/icons/icon-home.svg', 'label' => 'Stays for every need',],
                );
                foreach ($array as $item) { ?>
                    <div class="whyChooseUs--item">
                        <figure><img src="<?php echo $item['icon']; ?>" alt="<?php echo $item['label']; ?>"></figure>
                        <h6><?php echo $item['label']; ?></h6>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Section -->
<?php
require 'includes/sidebar/newsletter.php';
require 'includes/footer.php'
?>