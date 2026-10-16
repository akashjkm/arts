<?php

$page_title = 'Our Menu | Arts of Catering';
$page_desc = 'Explore catering styles from Arts of Catering, including starters, buffets, sit-down dining, cocktail receptions and bento service.';
$base_path = '';

include 'includes/header.php';

?>

<main class="menu-page">
    <section class="menu-hero">
        <div class="menu-hero-inner">
            <div class="menu-hero-copy">
                <span class="menu-eyebrow">A little something for everyone</span>
                <h1>A menu made for <span>coming together.</span></h1>
                <p>
                    From the first welcome bite to the last shared plate,
                    we shape the food and service around your occasion.
                </p>
                <a href="contact.php" class="aoc-btn aoc-btn-primary">
                    Plan a menu with us
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

            <div class="menu-hero-art">
                <span class="menu-art-rule" aria-hidden="true"></span>
                <img
                    src="assets/images/food.png"
                    alt="A collection of starters, plated dishes and catering moments"
                    class="menu-hero-image"
                >
                <span class="menu-art-caption">Prepared with care. Served with warmth.</span>
            </div>
        </div>
    </section>

    <nav class="menu-jump-nav" aria-label="Menu sections">
        <div class="menu-jump-inner">
            <a href="#starters">Welcome starters</a>
            <a href="#buffet">Buffet</a>
            <a href="#dining">Sit-down dining</a>
            <a href="#receptions">Cocktail receptions</a>
            <a href="#bento">Bento &amp; delivery</a>
        </div>
    </nav>

    <section class="menu-experiences" aria-label="Catering menu styles">
        <article id="starters" class="menu-experience">
            <div class="menu-experience-image">
                <img
                    src="assets/images/11.png"
                    alt="A buffet selection of welcome starters"
                    loading="lazy"
                >
                <span class="menu-image-index">01 / FIRST IMPRESSIONS</span>
            </div>
            <div class="menu-experience-copy">
                <span class="menu-eyebrow">Start with a welcome</span>
                <h2>Welcome starters</h2>
                <p>
                    Set the tone for the gathering with a thoughtful first
                    course. We’ll help choose a selection that suits the
                    occasion and welcomes guests to the table.
                </p>
                <a href="contact.php" class="menu-detail-link">
                    Ask about starter selections
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </article>

        <article id="buffet" class="menu-experience menu-experience-reverse">
            <div class="menu-experience-image">
                <img
                    src="assets/images/10.jpg"
                    alt="A colourful catering buffet ready to serve"
                    loading="lazy"
                >
                <span class="menu-image-index">02 / MADE TO SHARE</span>
            </div>
            <div class="menu-experience-copy">
                <span class="menu-eyebrow">A generous spread</span>
                <h2>Buffet service</h2>
                <p>
                    A relaxed, abundant way to bring guests together.
                    We’ll work with you on a varied spread, presentation
                    and service to fit your event.
                </p>
                <a href="contact.php" class="menu-detail-link">
                    Plan a buffet
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </article>

        <article id="dining" class="menu-experience">
            <div class="menu-experience-image">
                <img
                    src="assets/images/11.jpg"
                    alt="A formal table setting prepared for a sit-down meal"
                    loading="lazy"
                >
                <span class="menu-image-index">03 / TAKE YOUR SEAT</span>
            </div>
            <div class="menu-experience-copy">
                <span class="menu-eyebrow">A meal with a little ceremony</span>
                <h2>Sit-down dining</h2>
                <p>
                    For occasions that call for a shared pace and attentive
                    table service, choose a seated dining experience shaped
                    around your guests.
                </p>
                <a href="contact.php" class="menu-detail-link">
                    Discuss a seated menu
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </article>
    </section>

    <section class="menu-more-formats" aria-labelledby="menu-more-title">
        <div class="menu-more-inner">
            <div class="menu-more-heading">
                <span class="menu-eyebrow">And more ways to gather</span>
                <h2 id="menu-more-title">Find your kind of service.</h2>
                <p>Tell us what you have in mind and we’ll help shape the details.</p>
            </div>

            <div class="menu-format-list">
                <article id="receptions" class="menu-format-item">
                    <span class="menu-format-icon" aria-hidden="true">
                        <i class="bi bi-cup-straw"></i>
                    </span>
                    <div>
                        <h3>Cocktail receptions</h3>
                        <p>Easy-to-enjoy refreshments for a lively, social gathering.</p>
                    </div>
                    <a href="contact.php" aria-label="Enquire about cocktail reception catering">
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                </article>

                <article id="bento" class="menu-format-item">
                    <span class="menu-format-icon" aria-hidden="true">
                        <i class="bi bi-box-seam"></i>
                    </span>
                    <div>
                        <h3>Bento &amp; home delivery</h3>
                        <p>Convenient individual meals for teams, guests and gatherings at home.</p>
                    </div>
                    <a href="contact.php" aria-label="Enquire about bento and home delivery">
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="menu-cta">
        <div class="menu-cta-inner">
            <div>
                <span class="menu-eyebrow">Your gathering, your menu</span>
                <h2>Let’s make a menu that feels like yours.</h2>
            </div>
            <a href="contact.php" class="aoc-btn aoc-btn-primary">
                Start planning
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>