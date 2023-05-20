<?php $title = "Blogs";
require 'includes/header.php' ?>
<!-- Inner Banner Section -->
<section class="innerBanner--section" style="background: url('/img/contact-banner-bg.png')center center no-repeat; background-size:cover;">
    <div class="container">
        <div class="innerBanner--text">
            <h1>Blogs</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Section -->
<!-- Blogs Section -->
<section class="innerBlogs--section padding">
    <div class="container">
        <div class="general--box">
            <h2>Blogs</h2>
            <div class="innerBlogs--box">
                <?php for ($i = 0; $i < 10; $i++) {
                    include 'includes/components/blog-item.php';
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Blogs Section -->
<?php
require 'includes/footer.php'
?>