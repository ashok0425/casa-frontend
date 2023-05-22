<?php $title = "Search Result";
require 'includes/header.php' ?>
<!-- Search Result Section -->
<section class="search--section padding">
    <div class="container">
        <div class="search--box">
            <aside class="search--sidebarBox">
                <div class="search--sidebar">
                    <div class="search--menuTitte">
                        <h6>Filter</h6>
                        <button onclick="document.querySelector('.search--sidebarBox').classList.remove('open')"><img src="/img/icons/icon-close.svg" alt=""></button>
                    </div>
                    <div class="search--sort">
                        <div class="form--group">
                            <label for="sort-by-1">Sort By</label>
                            <select name="sort-by-1" id="sort-by-1" class="form--control gray">
                                <option value="0">Pricing</option>
                            </select>
                        </div>
                        <div class="form--group">
                            <label for="sort-by-2">Sort By</label>
                            <select name="sort-by-2" id="sort-by-2" class="form--control gray">
                                <option value="0">Popuparity</option>
                            </select>
                        </div>
                    </div>
                    <div class="search--formBox">
                        <h3>Search</h3>
                        <form action="" class="search--form">
                            <div class="form--group">
                                <label for="destination-property-name">Destination/Property Name:</label>
                                <input type="text" name="destination-property-name" class="form--control" id="destination-property-name">
                            </div>
                            <div class="form--group">
                                <label for="check-in-date">Check-In Date</label>
                                <input type="text" class="form--control" id="check-in-date" name="check-in-date">
                            </div>
                            <div class="form--group">
                                <label for="check-out-date">Check-Out Date</label>
                                <input type="text" class="form--control" id="check-out-date" name="check-out-date">
                            </div>
                            <div class="form--group">
                                <label for="guests">Guests</label>
                                <input type="text" class="form--control" id="guests" name="guests">
                            </div>
                            <div class="checkbox--group">
                                <input type="checkbox" name="travelling-for-work" id="travelling-for-work">
                                <label for="travelling-for-work">I’m travelling for work</label>
                            </div>
                            <div class="submit--holder w-full">
                                <button type="submit" class="btn btn--primary" aria-label="search-submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="search--filterBox">
                        <h3>Filter</h3>
                        <form action="" class="search--filter">
                            <div class="radio--set">
                                <h6>Budget</h6>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="0-500">
                                    <label for="0-500">NRs 0 - 5000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="5000-10000">
                                    <label for="5000-10000">NRs 5000 - 10,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="10000-20000">
                                    <label for="10000-20000">NRs 10,000 - 20,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="20000-50000">
                                    <label for="20000-50000">NRs 20,000 - 50,000</label>
                                </div>
                            </div>
                            <div class="radio--set">
                                <h6>Budget</h6>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="0-500">
                                    <label for="0-500">NRs 0 - 5000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="5000-10000">
                                    <label for="5000-10000">NRs 5000 - 10,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="10000-20000">
                                    <label for="10000-20000">NRs 10,000 - 20,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="20000-50000">
                                    <label for="20000-50000">NRs 20,000 - 50,000</label>
                                </div>
                            </div>
                            <div class="radio--set">
                                <h6>Budget</h6>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="0-500">
                                    <label for="0-500">NRs 0 - 5000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="5000-10000">
                                    <label for="5000-10000">NRs 5000 - 10,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="10000-20000">
                                    <label for="10000-20000">NRs 10,000 - 20,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="20000-50000">
                                    <label for="20000-50000">NRs 20,000 - 50,000</label>
                                </div>
                            </div>
                            <div class="radio--set">
                                <h6>Budget</h6>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="0-500">
                                    <label for="0-500">NRs 0 - 5000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="5000-10000">
                                    <label for="5000-10000">NRs 5000 - 10,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="10000-20000">
                                    <label for="10000-20000">NRs 10,000 - 20,000</label>
                                </div>
                                <div class="radio--group">
                                    <input type="radio" name="budget" id="20000-50000">
                                    <label for="20000-50000">NRs 20,000 - 50,000</label>
                                </div>
                            </div>
                        </form>
                        <button class="btn btn--secondary" aria-label="search-filter">Apply Filters</button>
                    </div>
                </div>
            </aside>
            <div class="search--results">
                <div class="search--sort">
                    <div class="form--group">
                        <label for="sort-by-1">Sort By</label>
                        <select name="sort-by-1" id="sort-by-1" class="form--control gray">
                            <option value="0">Pricing</option>
                        </select>
                    </div>
                    <div class="form--group">
                        <label for="sort-by-2">Sort By</label>
                        <select name="sort-by-2" id="sort-by-2" class="form--control gray">
                            <option value="0">Popuparity</option>
                        </select>
                    </div>
                </div>
                <div class="search--sortBar">
                    <div class="title">
                        <h2>59 properties found </h2>
                        <span>Find hotels around you with ease </span>
                    </div>
                    <button onclick="document.querySelector('.search--sidebarBox').classList.add('open')"><img src="img/icons/icon-menu.svg" alt=""></button>
                </div>
                <div class="search--itemBox">
                    <?php for ($i = 0; $i < 3; $i++) {
                        $listView = true;
                        include 'includes/components/hotel-item.php';
                    } ?>
                    <div class="search--info" style="background: url('/img/info-bg.png')center center no-repeat; background-size:cover;">
                        <h2>Not sure where to stay in <br />Kathmandu?</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed tempore nihil, delectus iste facilis dolores!</p>
                        <div class="btn--holder">
                            <a href="#" title="" class="btn btn--primary">Explore</a>
                        </div>
                    </div>
                    <div class="search--notFound">
                        <img src="/img/icons/icon-information.svg" alt="icon-information">
                        <p>No properties left in Kathmandu on our site! Tip: try these nearby properties…</p>
                    </div>
                    <?php for ($i = 0; $i < 7; $i++) {
                        $listView = true;
                        include 'includes/components/hotel-item.php';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Search Result Section -->
<?php
require 'includes/footer.php'
?>