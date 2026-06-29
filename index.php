<?php
$pageTitle = "Home";
$pageStyles = "css/home.css";

require 'components/header.php';
require 'components/navbar.php';
?>

<body class="home-page">
    <section class="hero">
        <div class="hero-bg" data-parallax data-parallax-speed="-0.15"></div>
        <div class="hero-content">
            <h1 class="reveal"><span class="nobrk">Beautiful <span class="boxed-word">Moments</span>,</span> <span
                    class="nobrk">Captured <em class="accent">Forever</em></span></h1>
            <p class="reveal delay-100">Professional photography that tells your unique story, capturing authentic
                moments to elevate your
                personal brand and connect with your audience.</p>
            <div class="hero-btns reveal delay-200">
                <a href="contact.php" class="btn">Book a Session</a>
                <a href="gallery.php" class="btn btn-outline">View Gallery</a>
            </div>
    </section>

    <!-- About Section -->
    <section class="section about-section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image-wrapper reveal-left">
                    <div class="about-image-inner" data-parallax data-parallax-speed="0.08">
                        <img src="assets/about-photographer.webp" alt="Yelena Seneviratne Photographer Portrait">

                    </div>
                </div>
                <div class="about-content">
                    <span class="section-tag reveal">About Me</span>
                    <h2 class="reveal delay-100">Capturing the <em class="accent">Essence of Life</em> Through My Lens
                    </h2>
                    <p class="reveal delay-200">I am Yelena Seneviratne, a professional photographer based in Colombo,
                        Sri Lanka. With over a
                        decade of experience, my photography focuses on the interplay of natural light, raw emotion, and
                        minimalist composition.</p>
                    <p class="reveal delay-300">Whether I'm shooting editorial campaigns, fine art landscapes, or candid
                        wedding moments, my
                        philosophy remains the same: capture authentic, unposed stories that resonate with truth and
                        beauty.</p>
                    <div class="about-stats reveal delay-400">
                        <div class="stat-item">
                            <h3>10+</h3>
                            <p>Years Active</p>
                        </div>
                        <div class="stat-item">
                            <h3>200+</h3>
                            <p>Projects Done</p>
                        </div>
                        <div class="stat-item">
                            <h3>15+</h3>
                            <p>Awards won</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Service Grid -->
    <section class="section services-section" id="services">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">Services</span>
                <h2>What I Offer to <em class="accent">my Clients</em></h2>
            </div>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card reveal delay-100">
                    <div class="service-num">01</div>
                    <h3 class="service-title">Wedding Photography</h3>
                    <p class="service-desc">Capturing the magic of your special day with timeless and emotional imagery.
                    </p>
                    <div class="service-footer">
                        <div class="service-price">Starting at $2500</div>
                        <a href="contact.php" class="service-link">Book</a>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="service-card reveal delay-200">
                    <div class="service-num">02</div>
                    <h3 class="service-title">Portrait Photography</h3>
                    <p class="service-desc">Creating stunning portraits that capture your unique personality and
                        essence.</p>
                    <div class="service-footer">
                        <div class="service-price">Starting at $500</div>
                        <a href="contact.php" class="service-link">Book</a>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="service-card reveal delay-300">
                    <div class="service-num">03</div>
                    <h3 class="service-title">Event Photography</h3>
                    <p class="service-desc">Documenting events with candid and professional coverage to preserve every
                        moment.</p>
                    <div class="service-footer">
                        <div class="service-price">Starting at $800</div>
                        <a href="contact.php" class="service-link">Book</a>
                    </div>
                </div>
            </div>
            <div class="services-cta-wrapper reveal delay-200">
                <a href="services.php" class="btn">More Packages</a>
            </div>
        </div>
    </section>

    <!-- Gallery Quick View -->
    <section class="section gallery-section" id="gallery">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">Gallery</span>
                <h2>Recent <em class="accent">Masterpieces</em></h2>
            </div>
            <div class="gallery-carousel-wrapper">
                <button class="carousel-control prev" aria-label="Previous image">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                    </svg>
                </button>
                <div class="gallery-carousel-container">
                    <div class="gallery-grid">
                        <!-- Gallery Item 1 -->
                        <div class="gallery-item reveal-zoom delay-100" onclick="window.location.href='gallery.php'">
                            <img src="assets/gallery-portrait.webp" alt="Fine Art Portraiture">
                            <div class="gallery-overlay">
                                <span class="gallery-overlay-cat">Portraiture</span>
                                <h4 class="gallery-overlay-title">Quiet Reflection</h4>
                            </div>
                        </div>
                        <!-- Gallery Item 2 -->
                        <div class="gallery-item reveal-zoom delay-200" onclick="window.location.href='gallery.php'">
                            <img src="assets/gallery-landscape.webp" alt="Landscape Fine Art">
                            <div class="gallery-overlay">
                                <span class="gallery-overlay-cat">Landscape</span>
                                <h4 class="gallery-overlay-title">Misty Peaks</h4>
                            </div>
                        </div>
                        <!-- Gallery Item 3 -->
                        <div class="gallery-item reveal-zoom delay-300" onclick="window.location.href='gallery.php'">
                            <img src="assets/gallery-editorial.webp" alt="Editorial Fashion">
                            <div class="gallery-overlay">
                                <span class="gallery-overlay-cat">Editorial</span>
                                <h4 class="gallery-overlay-title">Avant-Garde Silhouette</h4>
                            </div>
                        </div>
                        <!-- Gallery Item 4 -->
                        <div class="gallery-item reveal-zoom delay-400" onclick="window.location.href='gallery.php'">
                            <img src="assets/gallery-event.webp" alt="Documentary Event">
                            <div class="gallery-overlay">
                                <span class="gallery-overlay-cat">Documentary</span>
                                <h4 class="gallery-overlay-title">Candid Celebration</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control next" aria-label="Next image">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z" />
                    </svg>
                </button>
            </div>
            <div class="gallery-cta-wrapper reveal delay-200">
                <a href="gallery.php" class="btn">View Full Gallery</a>
            </div>
        </div>
    </section>

    <!-- Client Reviews -->
    <section class="section reviews-section" id="reviews">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">Testimonials</span>
                <h2>Client <em class="accent">Stories</em></h2>
            </div>
            <div class="reviews-carousel-wrapper">
                <div class="reviews-carousel-container">
                    <div class="reviews-grid">
                        <!-- Review 1 -->
                        <div class="review-card reveal delay-100">
                            <span class="quote-icon">“</span>
                            <div class="stars">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            <p class="review-text">"Yelena has an incredible talent for capturing real emotion. She made
                                me feel
                                completely relaxed during our portrait session, and the final results exceeded all my
                                expectations."</p>
                            <div class="review-client">
                                <div class="client-avatar">SR</div>
                                <div class="client-info">
                                    <h4>Sarah Reynolds</h4>
                                    <p>Creative Director, Studio Eight</p>
                                </div>
                            </div>
                        </div>
                        <!-- Review 2 -->
                        <div class="review-card reveal delay-200">
                            <span class="quote-icon">“</span>
                            <div class="stars">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            <p class="review-text">"The editorial campaign Yelena shot for our new fashion line was
                                stunning.
                                Her minimalist style perfectly matched our brand identity. A true professional through
                                and
                                through."</p>
                            <div class="review-client">
                                <div class="client-avatar">MJ</div>
                                <div class="client-info">
                                    <h4>Marcus de Silva</h4>
                                    <p>Founder, MJ Concept Store</p>
                                </div>
                            </div>
                        </div>
                        <!-- Review 3 -->
                        <div class="review-card reveal delay-300">
                            <span class="quote-icon">“</span>
                            <div class="stars">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            <p class="review-text">"For our intimate wedding, Yelena captured candid, documentary-style
                                moments
                                that we will treasure forever. The light, the frames, and the raw emotions were so
                                poetic."</p>
                            <div class="review-client">
                                <div class="client-avatar">EC</div>
                                <div class="client-info">
                                    <h4>Elena & Chris</h4>
                                    <p>Private Event Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews-indicators">
                    <span class="indicator active" data-index="0"></span>
                    <span class="indicator" data-index="1"></span>
                    <span class="indicator" data-index="2"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick CTA Section -->
    <section class="section cta-section">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Let's Capture <em class="accent">Your Story</em></h2>
                <p>Now booking portrait sessions, brand campaigns, and intimate events. Let's collaborate to create
                    something timeless.</p>
                <a href="contact.php" class="btn btn-cta">Get in Touch</a>
            </div>
        </div>
    </section>

    <?php
    require 'components/footer.php';
    ?>