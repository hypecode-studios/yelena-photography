document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar-container');

    if (navbar) {
        const handleScroll = () => {
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Add past-hero when scrolling past the hero section (80% viewport height threshold)
            if (window.scrollY > window.innerHeight * 0.8) {
                navbar.classList.add('past-hero');
            } else {
                navbar.classList.remove('past-hero');
            }

            // Hide top fade when overlapping dark sections (CTA section or Footer)
            const topFade = document.querySelector('.top-fade');
            if (topFade) {
                let overlap = false;
                const darkSections = document.querySelectorAll('.cta-section, footer');
                darkSections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= 110) {
                        overlap = true;
                    }
                });
                
                if (overlap) {
                    topFade.style.opacity = '0';
                } else if (!document.body.classList.contains('home-page') || navbar.classList.contains('past-hero')) {
                    topFade.style.opacity = '1';
                } else {
                    topFade.style.opacity = '0';
                }
            }
        };

        // Initialize state on page load in case the page is already scrolled
        handleScroll();

        // Listen to scroll events with passive listener for performance
        window.addEventListener('scroll', handleScroll, { passive: true });
    }

    // Mobile Navigation Toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navLinks.classList.toggle('open');

            // Toggle body scroll locking & navbar open state
            if (navLinks.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
                if (navbar) navbar.classList.add('menu-open');
            } else {
                document.body.style.overflow = '';
                if (navbar) navbar.classList.remove('menu-open');
            }
        });

        // Close menu when clicking a link
        const links = navLinks.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navLinks.classList.remove('open');
                document.body.style.overflow = '';
                if (navbar) navbar.classList.remove('menu-open');
            });
        });
    }

    // Parallax Effect Logic
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    if (parallaxElements.length > 0) {
        let scrollY = window.scrollY;
        let ticking = false;

        const updateParallax = () => {
            const viewportHeight = window.innerHeight;

            parallaxElements.forEach(el => {
                const parent = el.parentElement;
                if (!parent) return;

                const rect = parent.getBoundingClientRect();

                // Only animate if the parent container is in/near the viewport
                if (rect.top < viewportHeight && rect.bottom > 0) {
                    const speed = parseFloat(el.getAttribute('data-parallax-speed')) || 0.15;

                    // Calculate relative displacement based on viewport center
                    const parentCenter = rect.top + rect.height / 2;
                    const viewportCenter = viewportHeight / 2;
                    const offset = parentCenter - viewportCenter;

                    const translateVal = offset * speed;

                    // Apply translation using 3D transform for hardware acceleration
                    el.style.transform = `translate3d(0, ${translateVal}px, 0)`;
                }
            });

            ticking = false;
        };

        const onScroll = () => {
            scrollY = window.scrollY;
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        };

        // Run initial alignment
        updateParallax();

        // Listen for scroll & resize events
        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll, { passive: true });
    }

    // Scroll Reveal (Appear Animations) using Intersection Observer
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom');

    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Trigger animation once
                }
            });
        }, {
            root: null,
            threshold: 0.05, // Trigger as soon as 5% of the element enters the viewport
            rootMargin: '0px 0px -40px 0px' // Offsets trigger slightly for clean UX
        });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // ==========================================
    // GALLERY PAGE FILTER & LIGHTBOX SYSTEM
    // ==========================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryCards = document.querySelectorAll('.gallery-card');
    const lightbox = document.getElementById('lightbox');

    if (galleryCards.length > 0 && lightbox) {
        const lightboxImg = lightbox.querySelector('.lightbox-img');
        const lightboxCategory = lightbox.querySelector('.lightbox-category');
        const lightboxTitle = lightbox.querySelector('.lightbox-title');
        const lightboxDesc = lightbox.querySelector('.lightbox-desc');
        const lightboxMeta = lightbox.querySelector('.lightbox-meta');
        const closeBtn = lightbox.querySelector('.lightbox-close');
        const prevBtn = lightbox.querySelector('.lightbox-prev');
        const nextBtn = lightbox.querySelector('.lightbox-next');

        let currentFilteredCards = Array.from(galleryCards);
        let currentIndex = 0;

        // --- Filtering Logic ---
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Active Button styling
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                // Filter elements
                galleryCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filterValue === 'all' || category === filterValue) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });

                // Update the list of active cards for lightbox navigation
                currentFilteredCards = Array.from(galleryCards).filter(card => !card.classList.contains('hidden'));
            });
        });

        // --- Lightbox Logic ---
        const openLightbox = (index) => {
            currentIndex = index;
            const card = currentFilteredCards[currentIndex];
            if (!card) return;

            const img = card.querySelector('img');
            if (!img) return;

            // Load resources
            lightboxImg.src = img.src;
            lightboxImg.alt = img.alt;

            // Set plaque meta text
            lightboxCategory.textContent = card.getAttribute('data-category') || '';
            lightboxTitle.textContent = img.getAttribute('data-title') || '';
            lightboxDesc.textContent = img.getAttribute('data-desc') || '';
            lightboxMeta.textContent = img.getAttribute('data-meta') || '';

            // Open Modal
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Lock background scroll
        };

        const closeLightbox = () => {
            lightbox.classList.remove('active');
            document.body.style.overflow = ''; // Unlock background scroll
        };

        const showPrev = (e) => {
            if (e) e.stopPropagation();
            currentIndex = (currentIndex - 1 + currentFilteredCards.length) % currentFilteredCards.length;
            openLightbox(currentIndex);
        };

        const showNext = (e) => {
            if (e) e.stopPropagation();
            currentIndex = (currentIndex + 1) % currentFilteredCards.length;
            openLightbox(currentIndex);
        };

        // Attach Click to wrappers
        galleryCards.forEach(card => {
            const wrapper = card.querySelector('.gallery-img-wrapper');
            if (wrapper) {
                wrapper.addEventListener('click', () => {
                    const idx = currentFilteredCards.indexOf(card);
                    if (idx !== -1) {
                        openLightbox(idx);
                    }
                });
            }
        });

        // Controls click listeners
        closeBtn.addEventListener('click', closeLightbox);
        prevBtn.addEventListener('click', showPrev);
        nextBtn.addEventListener('click', showNext);

        // Click outside image to close
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('lightbox-content')) {
                closeLightbox();
            }
        });

        // Keyboard Controls
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;

            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showPrev();
            if (e.key === 'ArrowRight') showNext();
        });
    }

    // Homepage Gallery Carousel Logic
    const carouselContainer = document.querySelector('.gallery-carousel-container');
    const prevBtn = document.querySelector('.carousel-control.prev');
    const nextBtn = document.querySelector('.carousel-control.next');

    if (carouselContainer) {
        let autoScrollTimer = null;

        const getScrollStep = () => {
            const firstItem = carouselContainer.querySelector('.gallery-item');
            if (firstItem) {
                const grid = carouselContainer.querySelector('.gallery-grid');
                const style = window.getComputedStyle(grid);
                const gapVal = parseFloat(style.gap) || 24;
                return firstItem.offsetWidth + gapVal;
            }
            return 344;
        };

        const startAutoScroll = () => {
            stopAutoScroll();
            autoScrollTimer = setInterval(() => {
                const maxScroll = carouselContainer.scrollWidth - carouselContainer.clientWidth;
                if (carouselContainer.scrollLeft >= maxScroll - 10) {
                    carouselContainer.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    carouselContainer.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
                }
            }, 3500);
        };

        const stopAutoScroll = () => {
            if (autoScrollTimer) {
                clearInterval(autoScrollTimer);
                autoScrollTimer = null;
            }
        };

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                carouselContainer.scrollBy({ left: -getScrollStep(), behavior: 'smooth' });
                startAutoScroll();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                carouselContainer.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
                startAutoScroll();
            });
        }

        carouselContainer.addEventListener('mouseenter', stopAutoScroll);
        carouselContainer.addEventListener('mouseleave', startAutoScroll);
        carouselContainer.addEventListener('touchstart', stopAutoScroll, { passive: true });
        carouselContainer.addEventListener('touchend', startAutoScroll, { passive: true });

        startAutoScroll();
    }

    // Reviews Testimonials Carousel Logic
    const reviewsContainer = document.querySelector('.reviews-carousel-container');
    const indicators = document.querySelectorAll('.reviews-indicators .indicator');

    if (reviewsContainer && indicators.length > 0) {
        let activeIdx = 0;
        let autoScrollTimer = null;

        const getScrollStep = () => {
            const firstCard = reviewsContainer.querySelector('.review-card');
            if (firstCard) {
                const grid = reviewsContainer.querySelector('.reviews-grid');
                const style = window.getComputedStyle(grid);
                const gapVal = parseFloat(style.gap) || 16;
                return firstCard.offsetWidth + gapVal;
            }
            return window.innerWidth - 24;
        };

        const updateIndicators = (index) => {
            indicators.forEach((ind, i) => {
                if (i === index) {
                    ind.classList.add('active');
                } else {
                    ind.classList.remove('active');
                }
            });
        };

        const startAutoScroll = () => {
            stopAutoScroll();
            autoScrollTimer = setInterval(() => {
                activeIdx = (activeIdx + 1) % indicators.length;
                reviewsContainer.scrollTo({
                    left: activeIdx * getScrollStep(),
                    behavior: 'smooth'
                });
                updateIndicators(activeIdx);
            }, 4500);
        };

        const stopAutoScroll = () => {
            if (autoScrollTimer) {
                clearInterval(autoScrollTimer);
                autoScrollTimer = null;
            }
        };

        // Click indicators to scroll
        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => {
                activeIdx = i;
                reviewsContainer.scrollTo({
                    left: activeIdx * getScrollStep(),
                    behavior: 'smooth'
                });
                updateIndicators(activeIdx);
                startAutoScroll(); // reset timer
            });
        });

        // Sync indicators on manual scroll/swipe
        let scrollTimeout = null;
        reviewsContainer.addEventListener('scroll', () => {
            if (scrollTimeout) clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                const scrollLeft = reviewsContainer.scrollLeft;
                const step = getScrollStep();
                if (step > 0) {
                    const currentIdx = Math.round(scrollLeft / step);
                    if (currentIdx !== activeIdx && currentIdx >= 0 && currentIdx < indicators.length) {
                        activeIdx = currentIdx;
                        updateIndicators(activeIdx);
                    }
                }
            }, 100);
        });

        // Touch/Mouse events to pause scroll
        reviewsContainer.addEventListener('mouseenter', stopAutoScroll);
        reviewsContainer.addEventListener('mouseleave', startAutoScroll);
        reviewsContainer.addEventListener('touchstart', stopAutoScroll, { passive: true });
        reviewsContainer.addEventListener('touchend', startAutoScroll, { passive: true });

        // Initial setup (only auto-scroll on mobile viewports where container is scrollable)
        const checkResolution = () => {
            if (window.innerWidth <= 768) {
                startAutoScroll();
            } else {
                stopAutoScroll();
                reviewsContainer.scrollTo({ left: 0 });
            }
        };

        checkResolution();
        window.addEventListener('resize', checkResolution);
    }

    // Custom Interactive Blending Cursor
    if (window.matchMedia('(hover: hover)').matches) {
        const cursor = document.createElement('div');
        cursor.className = 'custom-cursor';
        document.body.appendChild(cursor);

        window.addEventListener('mousemove', (e) => {
            cursor.style.transform = `translate3d(${e.clientX}px, ${e.clientY}px, 0)`;
        });

        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });

        document.addEventListener('mouseenter', () => {
            cursor.style.opacity = '1';
        });
    }
});

