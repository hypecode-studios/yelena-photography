<?php
$pageTitle = "Services";
$pageStyles = "css/services.css";

require 'components/header.php';
require 'components/navbar.php';
?>

<div class="services-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-tag">Our Services</div>
            <h2>Comprehensive Photography Services <em class="accent">Tailored to Every Need</em></h2>
            <p>Explore the range of professional photography services we offer, capturing moments with precision and
                creativity.</p>
        </div>

        <div class="services-grid">
            <div class="service-card reveal delay-100">
                <div class="service-num">01</div>
                <h3 class="service-title">Wedding Photography</h3>
                <p class="service-desc">Capturing the magic of your special day with timeless and emotional imagery.</p>
                <div class="service-footer">
                    <div class="service-price">Starting at $2500</div>
                    <a href="contact.php" class="service-link">Book</a>
                </div>
            </div>

            <div class="service-card reveal delay-200">
                <div class="service-num">02</div>
                <h3 class="service-title">Portrait Photography</h3>
                <p class="service-desc">Creating stunning portraits that capture your unique personality and essence.
                </p>
                <div class="service-footer">
                    <div class="service-price">Starting at $500</div>
                    <a href="contact.php" class="service-link">Book</a>
                </div>
            </div>

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

            <div class="service-card reveal delay-100">
                <div class="service-num">04</div>
                <h3 class="service-title">Product Photography</h3>
                <p class="service-desc">Showcasing your products with high-quality, professional imagery that sells.</p>
                <div class="service-footer">
                    <div class="service-price">Custom Pricing</div>
                    <a href="contact.php" class="service-link">Book</a>
                </div>
            </div>

            <div class="service-card reveal delay-200">
                <div class="service-num">05</div>
                <h3 class="service-title">Landscape Photography</h3>
                <p class="service-desc">Capturing the beauty of nature with breathtaking landscape and travel
                    photography.</p>
                <div class="service-footer">
                    <div class="service-price">Prints Available</div>
                    <a href="contact.php" class="service-link">Book</a>
                </div>
            </div>

            <div class="service-card reveal delay-300">
                <div class="service-num">06</div>
                <h3 class="service-title">Commercial Photography</h3>
                <p class="service-desc">Professional commercial photography for brands and businesses seeking
                    high-quality visuals.</p>
                <div class="service-footer">
                    <div class="service-price">Custom Pricing</div>
                    <a href="contact.php" class="service-link">Book</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="custom-package-section">
    <div class="container">
        <div class="custom-package-card reveal">
            <div class="custom-package-content">
                <span class="section-tag">Custom Package</span>
                <h2>Need Something <em class="accent">Tailored</em> to Your Vision?</h2>
                <p>If our standard packages don't fully match your goals, let's build a custom collection. Whether you
                    require bespoke lighting, multiple locations, destination travel coverage, or extended timelines, we
                    can design a proposal tailored specifically to you.</p>
                <a href="contact.php" class="btn">Request Custom Quote</a>
            </div>
            <div class="custom-package-image">
                <img src="assets/custom-pkg.webp" alt="Creative Photography Session Mockup">
            </div>
        </div>
    </div>
</section>

<?php
require 'components/footer.php';
?>