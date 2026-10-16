<!-- =========================================================
     ARTS OF CATERING FOOTER
========================================================= -->

<footer class="arts-footer">

    <!-- =====================================================
         FOOTER MAIN
    ====================================================== -->

    <div class="arts-footer-main">

        <div class="arts-footer-container">


            <!-- =================================================
                 COLUMN 1 - ABOUT
            ================================================== -->

            <div class="arts-footer-column arts-footer-about">

                <h3>About Arts Of Catering</h3>

                <div class="arts-footer-heading-line"></div>

                <p>
                    Art of Catering isn’t just a service—it’s
                    the art of creating memorable moments through
                    taste, tradition, and innovation.
                </p>


                <!-- SOCIAL ICONS -->

                <div class="arts-social-icons">

                    <a
                        href="#"
                        aria-label="Facebook"
                        title="Facebook"
                    >
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="Twitter"
                        title="Twitter"
                    >
                        <i class="bi bi-twitter"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="Instagram"
                        title="Instagram"
                    >
                        <i class="bi bi-instagram"></i>
                    </a>

                </div>

            </div>


            <!-- =================================================
                 COLUMN 2 - SPECIAL FACILITIES
            ================================================== -->

            <div class="arts-footer-column">

                <h3>Special Facilities</h3>

                <div class="arts-footer-heading-line"></div>

                <ul class="arts-footer-links">

                    <li>
                        <a href="about.php">
                            <span class="footer-arrow">→</span>
                            <span>About Us</span>
                        </a>
                    </li>

                    <li>
                        <a href="events.php">
                            <span class="footer-arrow">→</span>
                            <span>Events</span>
                        </a>
                    </li>

                    <li>
                        <a href="menu.php">
                            <span class="footer-arrow">→</span>
                            <span>Our Menu</span>
                        </a>
                    </li>

                    <li>
                        <a href="contact.php">
                            <span class="footer-arrow">→</span>
                            <span>Contact Us</span>
                        </a>
                    </li>

                </ul>

            </div>


            <!-- =================================================
                 COLUMN 3 - CONTACT
            ================================================== -->

            <div class="arts-footer-column arts-footer-contact">

                <h3>Contact Us</h3>

                <div class="arts-footer-heading-line"></div>


                <!-- ADDRESS -->

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div class="footer-contact-text">

                        <p>
                            Shop no 1901, Gali Lasua,
                            Sita Ram Bazar,
                            Old Delhi - 110006
                        </p>

                    </div>

                </div>


                <!-- PHONE -->

              
<div class="footer-contact-item">

    <div class="footer-contact-icon">
        <i class="bi bi-telephone"></i>
    </div>

    <div class="footer-contact-text">
        <a href="tel:+919643366541">
            +91 9643 366 541
        </a>

        <a href="tel:+917042208966">
              +91 7042208966
        </a>
    </div>

</div>



                <!-- HOURS -->

                <div class="footer-contact-item">

                    <div class="footer-contact-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div class="footer-contact-text">

                        <p>
                            24/7 Hours Service
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>


    <!-- =========================================================
         DECORATIVE SCALLOP BORDER
    ========================================================= -->

    <div class="arts-footer-scallop"></div>


    <!-- =========================================================
         COPYRIGHT
    ========================================================= -->

    <div class="arts-footer-bottom">

        <div class="arts-footer-bottom-inner">

            <p>
                Copyright © <?= date('Y'); ?>
                <strong>Arts of Catering</strong>
                Managed by
                <strong>Akash IT Solutions</strong>.
                All Rights Reserved.
            </p>

        </div>


        <!-- =====================================================
             BACK TO TOP
        ====================================================== -->

        <button
            type="button"
            class="arts-back-to-top"
            id="artsBackToTop"
            aria-label="Back to top"
            title="Back to top"
        >
            <i class="bi bi-chevron-up"></i>
        </button>

    </div>

</footer>


<!-- =========================================================
     BACK TO TOP JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const backToTop =
        document.getElementById('artsBackToTop');

    if (!backToTop) {
        return;
    }

    backToTop.addEventListener('click', function () {

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    });

});

</script>


<!-- =========================================================
     ARTS OF CATERING PRELOADER
========================================================= -->

<script>

(function () {

    function hideAocPreloader() {

        const preloader =
            document.getElementById('aoc-preloader');

        if (!preloader) {
            return;
        }

        preloader.classList.add('aoc-preloader-hide');

        setTimeout(function () {

            preloader.style.display = 'none';

        }, 700);

    }


    /* =====================================================
       NORMAL PAGE LOAD
    ===================================================== */

    window.addEventListener('load', function () {

        setTimeout(function () {

            hideAocPreloader();

        }, 1200);

    });


    /* =====================================================
       SAFETY FALLBACK
    ===================================================== */

    setTimeout(function () {

        hideAocPreloader();

    }, 5000);

})();

</script>


</body>
</html>