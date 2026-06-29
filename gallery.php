<?php
$pageTitle = "Gallery";
$pageStyles = "css/gallery.css";

require 'components/header.php';
require 'components/navbar.php';
?>

<div class="gallery-page">
    <div class="container">
        <!-- Gallery Header -->
        <div class="section-header reveal">
            <span class="section-tag">Portfolio</span>
            <h2>Captured <em class="accent">Frames</em></h2>
            <p>A curated selection of our work across fine art portraiture, editorial fashion, raw landscapes, and
                documentary storytelling.</p>
        </div>

        <!-- Filter Controls -->
        <div class="filter-controls reveal delay-100">
            <button class="filter-btn active" data-filter="all">All Works</button>
            <button class="filter-btn" data-filter="portrait">Portraits</button>
            <button class="filter-btn" data-filter="landscape">Landscapes</button>
            <button class="filter-btn" data-filter="editorial">Editorial</button>
            <button class="filter-btn" data-filter="documentary">Documentary</button>
        </div>

        <!-- Gallery Masonry Grid -->
        <div class="gallery-grid reveal delay-200">
            <!-- Item 1: Portrait (Tall Collage Item) -->
            <div class="gallery-card portrait tall" data-category="portrait">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-portrait.webp" alt="Quiet Reflection" data-title="Quiet Reflection"
                        data-desc="Fine art portrait capturing natural light shadows." data-meta="Colombo, 2025">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Portrait</span>
                            <h4 class="card-title">Quiet Reflection</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2: Landscape (Wide Collage Item) -->
            <div class="gallery-card landscape wide" data-category="landscape">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-landscape.webp" alt="Misty Peaks" data-title="Misty Peaks"
                        data-desc="High altitude mountain ridges blanketed in fog." data-meta="Knuckles Range, 2024">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Landscape</span>
                            <h4 class="card-title">Misty Peaks</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3: Editorial (Standard Collage Item) -->
            <div class="gallery-card editorial standard" data-category="editorial">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-editorial.webp" alt="Avant-Garde Silhouette"
                        data-title="Avant-Garde Silhouette"
                        data-desc="High fashion silhouette under high-contrast studio lights."
                        data-meta="Studio Session, 2025">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Editorial</span>
                            <h4 class="card-title">Avant-Garde Silhouette</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4: Documentary (Standard Collage Item) -->
            <div class="gallery-card documentary standard" data-category="documentary">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-event.webp" alt="Candid Celebration" data-title="Candid Celebration"
                        data-desc="Documenting raw emotional laughter in mid-celebration." data-meta="Galle, 2024">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Documentary</span>
                            <h4 class="card-title">Candid Celebration</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 5: Fashion (Tall Collage Item) -->
            <div class="gallery-card editorial tall" data-category="editorial">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-fashion.webp" alt="Monochromatic Elegance"
                        data-title="Monochromatic Elegance"
                        data-desc="Minimalist studio fashion with dramatic softbox lighting." data-meta="Colombo, 2025">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Editorial</span>
                            <h4 class="card-title">Monochromatic Elegance</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 6: Street (Wide Collage Item) -->
            <div class="gallery-card documentary wide" data-category="documentary">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-street.webp" alt="Golden Hour Reflection"
                        data-title="Golden Hour Reflection"
                        data-desc="Candid street portrait reflecting golden light in rain puddles."
                        data-meta="Pettah, 2025">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Documentary</span>
                            <h4 class="card-title">Golden Hour Reflection</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 7: Nature (Standard Collage Item) -->
            <div class="gallery-card landscape standard" data-category="landscape">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-nature.webp" alt="Mystic Woodlands" data-title="Mystic Woodlands"
                        data-desc="Moody deep forest under misty dawn fog." data-meta="Ella, 2024">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Landscape</span>
                            <h4 class="card-title">Mystic Woodlands</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 8: Architecture (Standard Collage Item) -->
            <div class="gallery-card landscape standard" data-category="landscape">
                <div class="gallery-img-wrapper">
                    <img src="assets/gallery-architecture.webp" alt="Geometric Concrete" data-title="Geometric Concrete"
                        data-desc="Abstract minimalist composition of concrete and shadows."
                        data-meta="Modern Art Museum, 2025">
                    <div class="card-overlay">
                        <div class="card-info">
                            <span class="card-category">Landscape</span>
                            <h4 class="card-title">Geometric Concrete</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" aria-label="Close Lightbox">&times;</button>
    <button class="lightbox-prev" aria-label="Previous Image">&#10229;</button>
    <button class="lightbox-next" aria-label="Next Image">&#10230;</button>
    <div class="lightbox-content">
        <img class="lightbox-img" src="" alt="">
        <div class="lightbox-details">
            <div class="lightbox-text">
                <span class="lightbox-category">Category</span>
                <h3 class="lightbox-title">Title</h3>
                <p class="lightbox-desc">Description text</p>
            </div>
            <div class="lightbox-meta">Meta Info</div>
        </div>
    </div>
</div>

<?php
require 'components/footer.php';
?>