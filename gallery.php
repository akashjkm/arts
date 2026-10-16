<?php

$page_title = 'Gallery | Arts of Catering';
$page_desc = 'Browse food, event and table-setting moments from Arts of Catering.';
$base_path = '';

include 'includes/header.php';

?>

<main class="gallery-page">
    <section class="gallery-intro">
        <div class="gallery-intro-inner">
            <div>
                <span class="gallery-eyebrow">A look at what we do</span>
                <h1>Good things <span>gather here.</span></h1>
            </div>
            <p>
                A few moments from the tables, celebrations and service
                that bring people together.
            </p>
        </div>
    </section>

    <section class="gallery-library" aria-label="Catering photo gallery">
        <div class="gallery-library-inner">
            <div class="gallery-toolbar">
                <div class="gallery-filters" role="group" aria-label="Filter gallery photos">
                    <button type="button" class="gallery-filter is-active" data-filter="all" aria-pressed="true">
                        All moments
                    </button>
                    <button type="button" class="gallery-filter" data-filter="food" aria-pressed="false">
                        Food &amp; service
                    </button>
                    <button type="button" class="gallery-filter" data-filter="events" aria-pressed="false">
                        Events
                    </button>
                    <button type="button" class="gallery-filter" data-filter="tables" aria-pressed="false">
                        Table settings
                    </button>
                </div>
                <p class="gallery-count" id="galleryCount" aria-live="polite">Showing 6 photos</p>
            </div>

            <div class="gallery-grid" id="galleryGrid">
                <button
                    type="button"
                    class="gallery-tile gallery-tile-featured"
                    data-category="food"
                    data-full="assets/images/event.png"
                    data-caption="A celebratory buffet, prepared for sharing"
                >
                    <img src="assets/images/event.png" alt="A celebratory buffet prepared for sharing" loading="lazy">
                    <span class="gallery-tile-caption">
                        <span>At the table</span>
                        <i class="bi bi-arrows-angle-expand" aria-hidden="true"></i>
                    </span>
                </button>

                <button
                    type="button"
                    class="gallery-tile"
                    data-category="food"
                    data-full="assets/images/11.png"
                    data-caption="A spread of welcome starters"
                >
                    <img src="assets/images/11.png" alt="A catering spread of welcome starters" loading="lazy">
                    <span class="gallery-tile-caption">
                        <span>Welcome starters</span>
                        <i class="bi bi-arrows-angle-expand" aria-hidden="true"></i>
                    </span>
                </button>

                <button
                    type="button"
                    class="gallery-tile"
                    data-category="events"
                    data-full="assets/images/catering-event.jpg"
                    data-caption="A venue prepared for a special gathering"
                >
                    <img src="assets/images/catering-event.jpg" alt="An event venue ready for a gathering" loading="lazy">
                    <span class="gallery-tile-caption">
                        <span>Event setting</span>
                        <i class="bi bi-arrows-angle-expand" aria-hidden="true"></i>
                    </span>
                </button>

                <button
                    type="button"
                    class="gallery-tile"
                    data-category="food"
                    data-full="assets/images/10.jpg"
                    data-caption="A colourful buffet selection"
                >
                    <img src="assets/images/10.jpg" alt="A colourful buffet selection" loading="lazy">
                    <span class="gallery-tile-caption">
                        <span>Buffet service</span>
                        <i class="bi bi-arrows-angle-expand" aria-hidden="true"></i>
                    </span>
                </button>

                <button
                    type="button"
                    class="gallery-tile"
                    data-category="tables"
                    data-full="assets/images/11.jpg"
                    data-caption="A formal table setting for a shared meal"
                >
                    <img src="assets/images/11.jpg" alt="A formal table setting prepared for dinner" loading="lazy">
                    <span class="gallery-tile-caption">
                        <span>Set for dinner</span>
                        <i class="bi bi-arrows-angle-expand" aria-hidden="true"></i>
                    </span>
                </button>

                <button
                    type="button"
                    class="gallery-tile"
                    data-category="food"
                    data-full="assets/images/about-1.jpg"
                    data-caption="A collection of catering and kitchen moments"
                >
                    <img src="assets/images/about-1.jpg" alt="A collage of catering dishes and kitchen moments" loading="lazy">
                    <span class="gallery-tile-caption">
                        <span>Made with care</span>
                        <i class="bi bi-arrows-angle-expand" aria-hidden="true"></i>
                    </span>
                </button>
            </div>

            <dialog class="gallery-dialog" id="galleryDialog" aria-label="Photo viewer">
                <div class="gallery-dialog-inner">
                    <button type="button" class="gallery-dialog-close" aria-label="Close photo viewer">
                        <i class="bi bi-x-lg" aria-hidden="true"></i>
                    </button>
                    <img class="gallery-dialog-image" src="" alt="">
                    <p class="gallery-dialog-caption"></p>
                </div>
            </dialog>
        </div>
    </section>

    <section class="gallery-cta">
        <div class="gallery-cta-inner">
            <div>
                <span class="gallery-eyebrow">Planning a celebration?</span>
                <h2>Let’s make a moment of your own.</h2>
            </div>
            <a href="contact.php" class="aoc-btn aoc-btn-primary">
                Talk to our team
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
</main>

<script src="js/gallery.js" defer></script>

<?php include 'includes/footer.php'; ?>