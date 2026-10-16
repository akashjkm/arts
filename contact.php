<?php

$page_title = 'Contact Us | Arts of Catering';
$page_desc = 'Contact Arts of Catering to plan catering for your next gathering, celebration or event.';
$base_path = '';

include 'includes/header.php';

?>

<main class="contact-page">
    <section class="contact-hero">
        <div class="contact-hero-inner">
            <span class="contact-eyebrow">We would love to hear from you</span>
            <h1>Let’s plan something <span>memorable.</span></h1>
            <p>Tell us a little about your occasion and our team will be in touch.</p>
        </div>
    </section>

    <section class="contact-main" aria-label="Contact Arts of Catering">
        <div class="contact-layout">
            <div class="contact-details">
                <span class="contact-eyebrow">Get in touch</span>
                <h2>Good conversations make great gatherings.</h2>
                <p class="contact-intro">
                    Call us directly or send an enquiry with a few details
                    about your event. We are available around the clock.
                </p>

                <div class="contact-detail-list">
                    <div class="contact-detail">
                        <span class="contact-detail-icon" aria-hidden="true">
                            <i class="bi bi-telephone"></i>
                        </span>
                        <div>
                            <h3>Call our team</h3>
                            <a href="tel:+919643366541">+91 9643 366 541</a>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail-icon" aria-hidden="true">
                            <i class="bi bi-geo-alt"></i>
                        </span>
                        <div>
                            <h3>Visit us</h3>
                            <a
                                href="https://www.google.com/maps/search/?api=1&amp;query=Shop%20no%201901%2C%20Gali%20Lasua%2C%20Sita%20Ram%20Bazar%2C%20Old%20Delhi%20110006"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Shop no 1901, Gali Lasua,<br>
                                Sita Ram Bazar, Old Delhi - 110006
                            </a>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-detail-icon" aria-hidden="true">
                            <i class="bi bi-clock"></i>
                        </span>
                        <div>
                            <h3>Service hours</h3>
                            <p>Available 24 hours, every day</p>
                        </div>
                    </div>
                </div>

                <a class="contact-whatsapp-link" href="https://wa.me/919643366541">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                    Chat with us on WhatsApp
                    <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                </a>
            </div>

            <div class="contact-form-panel">
                <div class="contact-form-heading">
                    <span class="contact-eyebrow">Event enquiry</span>
                    <h2>How can we help?</h2>
                </div>

                <form id="contactEnquiryForm" class="contact-form">
                    <div class="contact-form-row">
                        <div class="contact-field">
                            <label for="contactName">Your name</label>
                            <input id="contactName" name="name" type="text" autocomplete="name" required>
                        </div>

                        <div class="contact-field">
                            <label for="contactPhone">Phone number</label>
                            <input id="contactPhone" name="phone" type="tel" autocomplete="tel" required>
                        </div>
                    </div>

                    <div class="contact-form-row">
                        <div class="contact-field">
                            <label for="contactEvent">What are you planning?</label>
                            <select id="contactEvent" name="event" required>
                                <option value="" selected disabled>Select an occasion</option>
                                <option>Wedding</option>
                                <option>Corporate event</option>
                                <option>Private celebration</option>
                                <option>Other gathering</option>
                            </select>
                        </div>

                        <div class="contact-field">
                            <label for="contactGuests">Approx. number of guests</label>
                            <select id="contactGuests" name="guests">
                                <option value="Not sure yet" selected>Not sure yet</option>
                                <option>Under 50</option>
                                <option>50-100</option>
                                <option>101-250</option>
                                <option>251-500</option>
                                <option>More than 500</option>
                            </select>
                        </div>
                    </div>

                    <div class="contact-field">
                        <label for="contactMessage">A few details about your event</label>
                        <textarea
                            id="contactMessage"
                            name="message"
                            rows="4"
                            placeholder="Date, location, menu ideas or anything else we should know"
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="aoc-btn aoc-btn-primary contact-submit">
                        Continue in WhatsApp
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </button>
                    <p class="contact-form-note">
                        Your message will be prepared in WhatsApp for you to review and send.
                    </p>
                </form>
            </div>
        </div>
    </section>
</main>

<script>
document.getElementById('contactEnquiryForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(event.currentTarget);
    const message = [
        'Hello Arts of Catering, I would like to enquire about an event.',
        '',
        `Name: ${formData.get('name')}`,
        `Phone: ${formData.get('phone')}`,
        `Occasion: ${formData.get('event')}`,
        `Guests: ${formData.get('guests')}`,
        `Details: ${formData.get('message')}`
    ].join('\n');

    window.location.href = `https://wa.me/919643366541?text=${encodeURIComponent(message)}`;
});
</script>

<?php include 'includes/footer.php'; ?>