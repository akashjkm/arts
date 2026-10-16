<?php

$current_page = basename($_SERVER['PHP_SELF'], '.php');

if (strpos($_SERVER['PHP_SELF'], '/services/') !== false) {
    $current_page = 'services';
}

$base_path = $base_path ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($page_title ?? 'Arts of Catering'); ?>
    </title>

    <meta name="description"
          content="<?= htmlspecialchars($page_desc ?? 'Arts of Catering'); ?>">

    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- =====================================================
         HEADER CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="<?= $base_path; ?>css/header.css">


    <!-- =====================================================
         MAIN CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="<?= $base_path; ?>css/style.css">



<link
    rel="stylesheet"
    href="<?= $base_path; ?>css/footer.css">


    <link rel="stylesheet"
      href="<?= $base_path; ?>css/index.css">

    <?php if ($current_page === 'about'): ?>
        <link rel="stylesheet" href="<?= $base_path; ?>css/about.css">
    <?php endif; ?>

    <?php if ($current_page === 'contact'): ?>
        <link rel="stylesheet" href="<?= $base_path; ?>css/contact.css">
    <?php endif; ?>

    <?php if ($current_page === 'events'): ?>
        <link rel="stylesheet" href="<?= $base_path; ?>css/events.css">
    <?php endif; ?>

    <?php if ($current_page === 'menu'): ?>
        <link rel="stylesheet" href="<?= $base_path; ?>css/menu.css">
    <?php endif; ?>

    <?php if ($current_page === 'gallery'): ?>
        <link rel="stylesheet" href="<?= $base_path; ?>css/gallery.css">
    <?php endif; ?>

</head>


<body>


<body>

    <!-- =====================================================
         ARTS OF CATERING PRELOADER
    ====================================================== -->
    <div id="aoc-preloader">

        <div class="aoc-preloader-logo">
            <img
                src="<?= $base_path; ?>assets/images/logo.png"
                alt="Arts of Catering"
            >
        </div>

    </div>


    <!-- YOUR HEADER STARTS HERE -->


<!-- =========================================================
     HEADER
========================================================= -->

<header class="arts-header">

    <div class="arts-header-container">


        <!-- =================================================
             LOGO
        ================================================== -->

        <a
            href="<?= $base_path; ?>index.php"
            class="arts-logo"
            aria-label="Arts of Catering">

            <img
                src="<?= $base_path; ?>assets/images/logo.png"
                alt="Arts of Catering Logo">

        </a>


        <!-- =================================================
             DESKTOP NAVIGATION
        ================================================== -->

        <nav
            class="arts-navigation"
            aria-label="Main Navigation">

            <ul>


                <!-- HOME -->

                <li>

                    <a
                        href="<?= $base_path; ?>index.php"
                        class="<?= $current_page === 'index' ? 'active' : ''; ?>">

                        Home

                    </a>

                </li>


                <!-- ABOUT -->

                <li>

                    <a
                        href="<?= $base_path; ?>about.php"
                        class="<?= $current_page === 'about' ? 'active' : ''; ?>">

                        About Us

                    </a>

                </li>


                <!-- MENU -->

                <li>

                    <a
                        href="<?= $base_path; ?>menu.php"
                        class="<?= $current_page === 'menu' ? 'active' : ''; ?>">

                        Our Menu

                    </a>

                </li>


                <!-- EVENTS -->

                <li>

                    <a
                        href="<?= $base_path; ?>events.php"
                        class="<?= $current_page === 'events' ? 'active' : ''; ?>">

                        Events

                    </a>

                </li>


                <!-- GALLERY -->

                <li>

                    <a
                        href="<?= $base_path; ?>gallery.php"
                        class="<?= $current_page === 'gallery' ? 'active' : ''; ?>">

                        Gallery

                    </a>

                </li>


                <!-- CONTACT -->

                <li>

                    <a
                        href="<?= $base_path; ?>contact.php"
                        class="<?= $current_page === 'contact' ? 'active' : ''; ?>">

                        Contact Us

                    </a>

                </li>

            </ul>

        </nav>


        <!-- =================================================
             GET FREE QUOTE
        ================================================== -->

        <a
            href="<?= $base_path; ?>contact.php"
            class="arts-quote-btn">

            Get Free Quote

        </a>


        <!-- =================================================
             MOBILE TOGGLE
        ================================================== -->

        <button
            type="button"
            class="arts-mobile-toggle"
            aria-label="Open Navigation"
            aria-expanded="false">

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>


<!-- =========================================================
     MOBILE NAVIGATION
========================================================= -->

<div class="arts-mobile-menu">

    <nav aria-label="Mobile Navigation">


        <a
            href="<?= $base_path; ?>index.php"
            class="<?= $current_page === 'index' ? 'active' : ''; ?>">

            Home

        </a>


        <a
            href="<?= $base_path; ?>about.php"
            class="<?= $current_page === 'about' ? 'active' : ''; ?>">

            About Us

        </a>


        <a
            href="<?= $base_path; ?>menu.php"
            class="<?= $current_page === 'menu' ? 'active' : ''; ?>">

            Our Menu

        </a>


        <a
            href="<?= $base_path; ?>events.php"
            class="<?= $current_page === 'events' ? 'active' : ''; ?>">

            Events

        </a>


        <a
            href="<?= $base_path; ?>gallery.php"
            class="<?= $current_page === 'gallery' ? 'active' : ''; ?>">

            Gallery

        </a>


        <a
            href="<?= $base_path; ?>contact.php"
            class="<?= $current_page === 'contact' ? 'active' : ''; ?>">

            Contact Us

        </a>


        <a
            href="<?= $base_path; ?>contact.php"
            class="mobile-quote-btn">

            Get Free Quote

        </a>

    </nav>

</div>


<!-- =========================================================
     MOBILE MENU SCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const toggle =
        document.querySelector('.arts-mobile-toggle');

    const mobileMenu =
        document.querySelector('.arts-mobile-menu');


    if (!toggle || !mobileMenu) {
        return;
    }


    toggle.addEventListener('click', function () {

        const opened =
            mobileMenu.classList.toggle('show');

        toggle.classList.toggle(
            'open',
            opened
        );

        toggle.setAttribute(
            'aria-expanded',
            opened ? 'true' : 'false'
        );

    });


    /* Close menu after clicking */

    const mobileLinks =
        mobileMenu.querySelectorAll('a');


    mobileLinks.forEach(function (link) {

        link.addEventListener('click', function () {

            mobileMenu.classList.remove('show');

            toggle.classList.remove('open');

            toggle.setAttribute(
                'aria-expanded',
                'false'
            );

        });

    });

});

</script>


<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>