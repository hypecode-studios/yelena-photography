<?php
$pageTitle = "Contact";
$pageStyles = "css/contact.css";

require 'components/header.php';
require 'components/navbar.php';

$successMsg = "";
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $errorMsg = "Please fill in all the required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg = "Please provide a valid email address.";
    } else {
        // Form submitted successfully
        $successMsg = "Thank you, " . $name . "! Your message has been sent successfully. We will get back to you shortly.";
    }
}
?>

<div class="contact-page">
    <div class="container">
        <!-- Contact Header -->
        <div class="section-header reveal">
            <span class="section-tag">Get in Touch</span>
            <h2>Let's Capture <em class="accent">Something Timeless</em></h2>
            <p>Whether you're looking to book an editorial campaign, private portrait session, or have a custom project in mind, let's connect.</p>
        </div>

        <div class="contact-grid">
            <!-- Left Column: Contact info & Platforms -->
            <div class="contact-info-col reveal delay-100">
                <div class="info-group">
                    <span class="info-label">Email</span>
                    <h3><a href="mailto:hello@yelenaseneviratne.com">hello@yelenaseneviratne.com</a></h3>
                </div>

                <div class="info-group">
                    <span class="info-label">Phone</span>
                    <h3><a href="tel:+94771234567">+94 77 123 4567</a></h3>
                </div>

                <div class="info-group">
                    <span class="info-label">Studio Address</span>
                    <h3>Colombo, Sri Lanka &bull; Available Worldwide</h3>
                </div>

                <div class="platforms-section">
                    <span class="info-label">Explore Portfolios & Socials</span>
                    <div class="platforms-grid">
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" class="platform-card platform-instagram">
                            <div class="platform-header">
                                <svg class="platform-icon" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                                <h4>Instagram</h4>
                            </div>
                            <span class="platform-handle">@yelena.seneviratne</span>
                        </a>

                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" class="platform-card platform-facebook">
                            <div class="platform-header">
                                <svg class="platform-icon" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                <h4>Facebook</h4>
                            </div>
                            <span class="platform-handle">Yelena Photography</span>
                        </a>

                        <!-- Unsplash -->
                        <a href="https://unsplash.com" target="_blank" class="platform-card platform-unsplash">
                            <div class="platform-header">
                                <svg class="platform-icon" viewBox="0 0 24 24"><path fill="currentColor" d="M7.5 6.75V0h9v6.75h-9zm9 3.75H24V24H0V10.5h7.5v6.75h9V10.5z"/></svg>
                                <h4>Unsplash</h4>
                            </div>
                            <span class="platform-handle">@yelenaseneviratne</span>
                        </a>

                        <!-- Pinterest -->
                        <a href="https://pinterest.com" target="_blank" class="platform-card platform-pinterest">
                            <div class="platform-header">
                                <svg class="platform-icon" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.966 1.406-5.966s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.168 1.777 2.168 2.128 0 3.766-2.245 3.766-5.476 0-2.861-2.056-4.86-4.996-4.86-3.398 0-5.393 2.549-5.393 5.184 0 1.024.395 2.124.89 2.729.098.119.112.224.083.342-.09.375-.291 1.19-.331 1.353-.053.219-.175.265-.402.16-1.492-.694-2.427-2.872-2.427-4.619 0-3.76 2.731-7.213 7.876-7.213 4.132 0 7.34 2.944 7.34 6.877 0 4.103-2.584 7.405-6.173 7.405-1.206 0-2.338-.627-2.726-1.372l-.744 2.828c-.269 1.045-1.002 2.352-1.498 3.156 1.127.349 2.321.537 3.56.537 6.622 0 11.988-5.367 11.988-11.987C24 5.368 18.636 0 12.017 0z"/></svg>
                                <h4>Pinterest</h4>
                            </div>
                            <span class="platform-handle">@yelenaseneviratne</span>
                        </a>

                        <!-- 500px -->
                        <a href="https://500px.com" target="_blank" class="platform-card platform-px">
                            <div class="platform-header">
                                <svg class="platform-icon" viewBox="0 0 24 24"><path fill="currentColor" d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 18c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6zm3-6c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z"/></svg>
                                <h4>500px</h4>
                            </div>
                            <span class="platform-handle">Yelena Seneviratne</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Form -->
            <div class="contact-form-col reveal delay-200">
                <?php if (!empty($successMsg)): ?>
                    <div class="status-msg success-msg">
                        <h3>Success</h3>
                        <p><?php echo $successMsg; ?></p>
                    </div>
                <?php else: ?>
                    <form action="contact.php" method="POST" class="contact-form">
                        <?php if (!empty($errorMsg)): ?>
                            <div class="status-msg error-msg">
                                <p><?php echo $errorMsg; ?></p>
                            </div>
                        <?php endif; ?>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" required placeholder="John Doe" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" required placeholder="john@example.com" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="How can we help you?" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us about your project or event details..." ><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
require 'components/footer.php';
?>
