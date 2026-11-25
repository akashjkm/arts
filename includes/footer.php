<!-- =========================================================
     JBR CATERING FOOTER
========================================================= -->

<!-- Footer fonts (you can move this line into your <head>) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<footer class="arts-footer">

    <!-- Big faded brand name behind the content -->
    <div class="arts-footer-watermark" aria-hidden="true">JBR Catering</div>

    <!-- Decorative divider -->
    <div class="arts-footer-orn" aria-hidden="true">
        <span class="orn-line"></span>
        <span class="orn-dot"></span>
        <span class="orn-diamond"><i></i></span>
        <span class="orn-dot"></span>
        <span class="orn-line"></span>
    </div>

    <div class="arts-footer-main">
        <div class="arts-footer-container">

            <!-- COLUMN 1 - ABOUT -->
            <div class="arts-footer-column arts-footer-about">
                <h3>About us</h3>

                <p>
                    JBR Catering blends fresh ingredients with warm hospitality.
                    From weddings to corporate lunches, we focus on taste,
                    presentation and on-time service, so every plate is
                    something your guests remember.
                </p>

                <div class="arts-social-icons">
                    <a href="#" aria-label="Facebook" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Twitter" title="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" aria-label="Instagram" title="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>


            <!-- COLUMN 2 - CONTACT INFO -->
            <div class="arts-footer-column arts-footer-contact">
                <h3>Contact info</h3>

                <dl class="footer-info">
                    <div>
                        <dt>Call :</dt>
                        <dd><a href="tel:+917503016060">+91 75030 16060</a></dd>
                    </div>
                    <div>
                        <dt>Find us :</dt>
                        <dd>1488, Gali Arya Samaj, Old Delhi, Kucha Pati Ram, Sitaram Bazar, New Delhi, Delhi, 110006</dd>
                    </div>
                    <div>
                        <dt>Hours :</dt>
                        <dd>Open 24/7</dd>
                    </div>
                </dl>

                <a class="footer-touch" href="contact.php">Get in Touch</a>
            </div>


            <!-- COLUMN 3 - QUICK LINKS -->
            <div class="arts-footer-column">
                <h3>Quick links</h3>

                <ul class="arts-footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="menu.php">Our Menu</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>


            <!-- COLUMN 4 - SUBSCRIBE -->
            <div class="arts-footer-column">
                <h3>Subscribe</h3>

                <p>
                    Want menu ideas and event offers? Sign up and we'll
                    send them to your email.
                </p>

                <form class="footer-subscribe" action="subscribe.php" method="post">
                    <label for="footerEmail" class="footer-sr-only">Your email</label>
                    <input type="email" id="footerEmail" name="email" placeholder="Your Email" required>
                    <button type="submit">Send</button>
                </form>
            </div>

        </div>
    </div>


    <!-- COPYRIGHT -->
    <div class="arts-footer-bottom">
        <div class="arts-footer-bottom-inner">
            <p>
                Copyright &copy; <?= date('Y'); ?>
                <strong>JBR Catering</strong>.
                All Rights Reserved. Managed by
                <strong>Rahul Thakur</strong>.
            </p>
        </div>

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

<div class="arts-floating-actions" aria-label="Quick contact">
    <a
        class="arts-floating-action arts-floating-whatsapp"
        href="https://wa.me/917503016060"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat with us on WhatsApp"
        title="WhatsApp"
    >
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>
    <a
        class="arts-floating-action arts-floating-call"
        href="tel:+919643386541"
        aria-label="Call us"
        title="Call"
    >
        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
    </a>
</div>

<!-- BACK TO TOP JAVASCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const backToTop = document.getElementById('artsBackToTop');
    if (!backToTop) return;

    backToTop.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>


<!-- JBR CATERING PRELOADER -->
<script>
(function () {

    function hideAocPreloader() {
        const preloader = document.getElementById('aoc-preloader');
        if (!preloader) return;

        preloader.classList.add('aoc-preloader-hide');
        setTimeout(function () {
            preloader.style.display = 'none';
        }, 700);
    }

    /* Normal page load */
    window.addEventListener('load', function () {
        setTimeout(hideAocPreloader, 1200);
    });

    /* Safety fallback */
    setTimeout(hideAocPreloader, 5000);

})();
</script>

</body>
</html>