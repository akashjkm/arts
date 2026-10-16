<?php

$page_title = 'Events | Arts of Catering';
$page_desc = 'Discover wedding, corporate and private event catering from Arts of Catering.';
$base_path = '';

include 'includes/header.php';

?>

<main class="events-page">
    <section class="events-hero">
        <div class="events-hero-inner">
            <div class="events-hero-copy">
                <span class="events-eyebrow">Gather around something good</span>
                <h1>Food for the moments <span>that bring us together.</span></h1>
                <p>
                    From a once-in-a-lifetime celebration to a room full of
                    colleagues, we make catering feel thoughtful, welcoming
                    and unmistakably yours.
                </p>
                <a href="contact.php" class="aoc-btn aoc-btn-primary">
                    Plan your event
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

            <div class="events-hero-visual">
                <img
                    src="assets/images/event.png"
                    alt="A celebratory buffet prepared for a special event"
                    class="events-hero-image"
                >
                <span class="events-image-note">
                    <i class="bi bi-stars" aria-hidden="true"></i>
                    A table made for sharing
                </span>
            </div>
        </div>
        <div class="events-hero-index" aria-hidden="true">AOC / EVENTS</div>
    </section>

    <section class="events-types" aria-labelledby="events-types-title">
        <div class="events-section-heading">
            <div>
                <span class="events-eyebrow">For every kind of gathering</span>
                <h2 id="events-types-title">The occasion is yours.<br>We’ll take care of the table.</h2>
            </div>
            <p>
                Every event has its own rhythm. We work with you to shape
                the menu and service around the people, place and feeling
                you have in mind.
            </p>
        </div>

        <div class="events-card-grid">
            <article class="events-card events-card-wedding">
                <div class="events-card-image">
                    <img
                        src="assets/images/10.jpg"
                        alt="A wedding-style buffet arranged for guests"
                        loading="lazy"
                    >
                    <span class="events-card-number">01</span>
                </div>
                <div class="events-card-content">
                    <span class="events-card-label">The big day</span>
                    <h3>Weddings</h3>
                    <p>
                        A considered menu and gracious service for the
                        celebration you’ll remember for years.
                    </p>
                    <a href="contact.php" aria-label="Enquire about wedding catering">
                        Enquire about weddings
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="events-card events-card-corporate">
                <div class="events-card-image">
                    <img
                        src="assets/images/catering-event.jpg"
                        alt="A spacious event venue arranged for a formal gathering"
                        loading="lazy"
                    >
                    <span class="events-card-number">02</span>
                </div>
                <div class="events-card-content">
                    <span class="events-card-label">Work, well hosted</span>
                    <h3>Corporate events</h3>
                    <p>
                        Dependable catering for meetings, launches and
                        company celebrations, with service that keeps
                        the day moving.
                    </p>
                    <a href="contact.php" aria-label="Enquire about corporate catering">
                        Enquire about corporate events
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>

            <article class="events-card events-card-private">
                <div class="events-card-image">
                    <img
                        src="assets/images/11.jpg"
                        alt="An intimate dining table set for a private celebration"
                        loading="lazy"
                    >
                    <span class="events-card-number">03</span>
                </div>
                <div class="events-card-content">
                    <span class="events-card-label">Close to home</span>
                    <h3>Private celebrations</h3>
                    <p>
                        Birthdays, family occasions and reunions made easier
                        with food everyone can gather around.
                    </p>
                    <a href="contact.php" aria-label="Enquire about private event catering">
                        Enquire about your gathering
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="events-service-band" aria-labelledby="events-service-title">
        <div class="events-service-inner">
            <div class="events-service-copy">
                <span class="events-eyebrow">A format for your occasion</span>
                <h2 id="events-service-title">The right way to serve.</h2>
                <p>
                    Choose a relaxed buffet, a served sit-down meal or
                    easy-to-enjoy bites for a reception. We’ll help find
                    a format that suits your guests and your event.
                </p>
            </div>

            <div class="events-format-list">
                <div class="events-format">
                    <span aria-hidden="true"><i class="bi bi-grid-3x3-gap"></i></span>
                    <div>
                        <h3>Buffet</h3>
                        <p>A generous spread with room for everyone’s favourites.</p>
                    </div>
                </div>
                <div class="events-format">
                    <span aria-hidden="true"><i class="bi bi-people"></i></span>
                    <div>
                        <h3>Sit-down dining</h3>
                        <p>Thoughtful table service for a more intimate pace.</p>
                    </div>
                </div>
                <div class="events-format">
                    <span aria-hidden="true"><i class="bi bi-cup-straw"></i></span>
                    <div>
                        <h3>Cocktail reception</h3>
                        <p>Small bites and refreshments made for mingling.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events-cta">
        <div class="events-cta-inner">
            <div>
                <span class="events-eyebrow">Start with a conversation</span>
                <h2>What are you bringing people together for?</h2>
            </div>
            <a href="contact.php" class="aoc-btn aoc-btn-primary">
                Tell us about it
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>