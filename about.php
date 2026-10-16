<?php

$page_title = 'About Us | Arts of Catering';
$page_desc = 'Meet Arts of Catering, where thoughtful menus, fresh ingredients and warm service make every gathering memorable.';
$base_path = '';

include 'includes/header.php';

?>

<main class="about-page">

    <section class="about-hero">
        <div class="about-hero-inner">
            <div class="about-hero-copy">
                <span class="about-eyebrow">Our story</span>
                <h1>Good food brings people <span>closer.</span></h1>
                <p>
                    We create thoughtful catering experiences shaped by
                    generous flavours, careful presentation and the joy
                    of sharing a table.
                </p>
                <a href="index.php#booking" class="aoc-btn aoc-btn-primary">
                    Plan your event
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

            <div class="about-hero-image-wrap">
                <img
                    src="assets/images/about-1.jpg"
                    alt="A collage of dishes, chefs and catering moments"
                    class="about-hero-image"
                >
                <div class="about-image-caption">
                    <span class="about-caption-mark" aria-hidden="true">
                        <i class="bi bi-stars"></i>
                    </span>
                    <span>Made for moments worth sharing</span>
                </div>
            </div>
        </div>
    </section>

    <section class="about-story" aria-labelledby="about-story-title">
        <div class="about-story-inner">
            <div class="about-story-heading">
                <span class="about-eyebrow">More than a meal</span>
                <h2 id="about-story-title">Every gathering has a story. We help make it memorable.</h2>
            </div>
            <div class="about-story-copy">
                <p>
                    Arts of Catering brings people together through food
                    that feels considered, welcoming and full of character.
                    From the first menu conversation to the final plate,
                    we pay attention to the details that make an occasion
                    feel like yours.
                </p>
                <p>
                    Rooted in the flavours and traditions of Old Delhi,
                    our approach pairs familiar favourites with fresh ideas
                    and polished service. Whether it is an intimate gathering
                    or a lively celebration, we make space for everyone
                    around the table.
                </p>
                <a href="index.php#services" class="about-text-link">
                    Explore our services <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="about-values" aria-labelledby="about-values-title">
        <div class="about-values-inner">
            <div class="about-values-intro">
                <span class="about-eyebrow">What matters to us</span>
                <h2 id="about-values-title">Care in every detail.</h2>
            </div>

            <div class="about-value-list">
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <i class="bi bi-flower1"></i>
                    </span>
                    <div>
                        <h3>Fresh, thoughtful food</h3>
                        <p>Seasoned with care and prepared to be enjoyed together.</p>
                    </div>
                </article>

                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <i class="bi bi-person-heart"></i>
                    </span>
                    <div>
                        <h3>Made around you</h3>
                        <p>Menus and service shaped around your people and occasion.</p>
                    </div>
                </article>

                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <i class="bi bi-stars"></i>
                    </span>
                    <div>
                        <h3>Warm, polished service</h3>
                        <p>A welcoming team looking after the little things.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="about-contact-band">
        <div class="about-contact-inner">
            <div>
                <span class="about-eyebrow">Let’s get together</span>
                <h2>Tell us what you’re celebrating.</h2>
            </div>
            <a href="index.php#booking" class="aoc-btn aoc-btn-primary">
                Talk to our team
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>