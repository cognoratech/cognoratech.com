document.addEventListener("DOMContentLoaded", () => {
    /* ======================================================
       1. ELEMENT REFERENCES
    ====================================================== */
    const header = document.getElementById("navbar");
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const progressBar = document.getElementById("scrollProgress");
    const navLinks = document.querySelectorAll("nav a, .mobile-link");
    const counters = document.querySelectorAll('.counter'); // New: Select all counters

    /* ======================================================
       2. MOBILE MENU TOGGLE (Smooth Slide)
    ====================================================== */
    const iconHamburger = document.getElementById("iconHamburger");
    const iconClose = document.getElementById("iconClose");
    const mobileMenuCloseBtn = document.getElementById("mobileMenuCloseBtn");

    function openMobileMenu() {
        mobileMenu.classList.remove("-translate-y-[150%]");
        if (iconHamburger && iconClose) {
            iconHamburger.classList.add("opacity-0", "rotate-90");
            iconHamburger.classList.remove("opacity-100", "rotate-0");
            iconClose.classList.remove("opacity-0", "rotate-90");
            iconClose.classList.add("opacity-100", "rotate-0");
        }
    }

    function closeMobileMenu() {
        mobileMenu.classList.add("-translate-y-[150%]");
        if (iconHamburger && iconClose) {
            iconHamburger.classList.remove("opacity-0", "rotate-90");
            iconHamburger.classList.add("opacity-100", "rotate-0");
            iconClose.classList.add("opacity-0", "rotate-90");
            iconClose.classList.remove("opacity-100", "rotate-0");
        }
    }

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            const isClosed = mobileMenu.classList.contains("-translate-y-[150%]");
            isClosed ? openMobileMenu() : closeMobileMenu();
        });

        if (mobileMenuCloseBtn) {
            mobileMenuCloseBtn.addEventListener("click", closeMobileMenu);
        }

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }

    /* ======================================================
       3. ACTIVE NAV LINK HIGHLIGHTER
    ====================================================== */
    const currentPath = window.location.pathname.split("/").pop() || "index.html";

    navLinks.forEach(link => {
        // Highlight current page
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("text-brand-600", "font-bold");
        }

        // Smooth scroll for anchor links
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#') && href.length > 1) {
                // Remove active class from all
                navLinks.forEach(l => l.classList.remove("text-brand-600", "font-bold"));
                this.classList.add("text-brand-600", "font-bold");
            }
        });
    });

    /* ======================================================
       4. SCROLL EFFECTS (Navbar & Progress)
    ====================================================== */
    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;

        // Progress Bar
        if (progressBar) {
            const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollY / docHeight) * 100;
            progressBar.style.width = `${scrolled}%`;
        }

        // Navbar Glass Effect
        if (header) {
            if (scrollY > 20) {
                header.classList.add("shadow-md", "bg-white/95");
                header.classList.remove("bg-white/80", "border-transparent");
            } else {
                header.classList.remove("shadow-md", "bg-white/95");
                header.classList.add("bg-white/80", "border-transparent");
            }

            // Hide/Show on scroll
            if (scrollY > lastScrollY && scrollY > 100) {
                header.classList.add("-translate-y-full");
            } else {
                header.classList.remove("-translate-y-full");
            }
        }
        lastScrollY = scrollY;
    });

    /* ======================================================
       5. NUMBER COUNTER ANIMATION (With Observer)
    ====================================================== */
    const runCounterAnimation = (counter) => {
        const target = +counter.getAttribute('data-target');
        const speed = 200; // Adjust speed (higher = slower)

        const updateCount = () => {
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    };

    // Use Intersection Observer to start counting only when visible
    const observerOptions = {
        threshold: 0.5 // Trigger when 50% of the item is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                runCounterAnimation(counter);
                observer.unobserve(counter); // Run only once
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        observer.observe(counter);
    });

    /* ======================================================
       6. INITIALIZE AOS (Animations)
    ====================================================== */
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
        });
    }
});
/* ======================================================
       7. Thank You  POP UP (Animations)
    ====================================================== */

document.addEventListener("DOMContentLoaded", function () {

    // Select Elements
    const form = document.getElementById('quoteForm');
    const modal = document.getElementById('thankYouModal');
    const backdrop = document.getElementById('modalBackdrop');
    const panel = document.getElementById('modalPanel');
    const closeBtn = document.getElementById('closeModalBtn'); // We will add this ID to your HTML button below

    // 1. Handle Form Submission
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Stop page reload

            // Show loading state on button
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span>Sending...</span>';
            btn.disabled = true;

            const formData = new FormData(form);

            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                body: formData
            })
                .then(async (response) => {
                    if (response.status === 200) {
                        // Success! Show Modal
                        showModal();
                        form.reset(); // Clear the form
                    } else {
                        console.log("Error", response);
                        alert("Something went wrong. Please try again later.");
                    }
                })
                .catch(error => {
                    console.log(error);
                    alert("Something went wrong. Please try again later.");
                })
                .finally(() => {
                    // Reset button
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                });
        });
    }

    // 2. Handle Closing the Modal
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    // --- Helper Functions ---

    function showModal() {
        if (!modal) return;
        modal.classList.remove('hidden');
        // Simple animation
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeModal() {
        if (!modal) return;
        // Reverse animation
        backdrop.classList.add('opacity-0');
        panel.classList.remove('scale-100', 'opacity-100');
        panel.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Wait for transition to finish
    }
});