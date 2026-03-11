document.addEventListener("DOMContentLoaded", () => {
    /* ======================================================
       1. ELEMENT REFERENCES
    ====================================================== */
    const header = document.getElementById("navbar");
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const progressBar = document.getElementById("scrollProgress");
    const navLinks = document.querySelectorAll("nav a, .mobile-link");
    const counters = document.querySelectorAll('.counter');
    const iconHamburger = document.getElementById("iconHamburger");
    const iconClose = document.getElementById("iconClose");

    /* ======================================================
       2. MOBILE MENU LOGIC
    ====================================================== */
    function openMobileMenu() {
        mobileMenu.classList.remove("-translate-y-[150%]");
        document.body.style.overflow = "hidden"; // Prevent background scroll
        if (iconHamburger && iconClose) {
            iconHamburger.classList.add("opacity-0", "rotate-90");
            iconHamburger.classList.remove("opacity-100", "rotate-0");
            iconClose.classList.remove("opacity-0", "rotate-90");
            iconClose.classList.add("opacity-100", "rotate-0");
        }
    }

    function closeMobileMenu() {
        mobileMenu.classList.add("-translate-y-[150%]");
        document.body.style.overflow = ""; // Restore scroll
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

        // Close menu when clicking a link (especially useful for one-page sections)
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
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                    
                    // Update Active State
                    navLinks.forEach(l => l.classList.remove("text-brand-600", "font-bold"));
                    this.classList.add("text-brand-600", "font-bold");
                }
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

        // Navbar Appearance Logic
        if (header) {
            if (scrollY > 20) {
                header.classList.add("shadow-md", "bg-white/95", "py-2");
                header.classList.remove("bg-white/80", "border-transparent");
            } else {
                header.classList.remove("shadow-md", "bg-white/95", "py-2");
                header.classList.add("bg-white/80", "border-transparent");
            }

            // Hide/Show on scroll (Smart Header)
            if (scrollY > lastScrollY && scrollY > 150) {
                header.classList.add("-translate-y-full");
            } else {
                header.classList.remove("-translate-y-full");
            }
        }
        lastScrollY = scrollY;
    }, { passive: true });

    /* ======================================================
       5. NUMBER COUNTER ANIMATION
    ====================================================== */
    const runCounterAnimation = (counter) => {
        const target = +counter.getAttribute('data-target');
        const duration = 2000; // 2 seconds animation
        const step = target / (duration / 20); 

        const updateCount = () => {
            const count = +counter.innerText;
            if (count < target) {
                counter.innerText = Math.ceil(count + step);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                runCounterAnimation(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));

    /* ======================================================
       6. AOS & FORM HANDLING (Thank You Popup)
    ====================================================== */
    if (typeof AOS !== 'undefined') {
        AOS.init({ once: true, offset: 50, duration: 800 });
    }

    const form = document.getElementById('quoteForm');
    const modal = document.getElementById('thankYouModal');
    const backdrop = document.getElementById('modalBackdrop');
    const panel = document.getElementById('modalPanel');
    const closeBtn = document.getElementById('closeModalBtn');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span>Sending...</span>';
            btn.disabled = true;

            const formData = new FormData(form);
            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.status === 200) {
                    showModal();
                    form.reset();
                } else {
                    alert("Something went wrong. Please try again.");
                }
            })
            .catch(() => alert("Network error. Please try again."))
            .finally(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
            });
        });
    }

    function showModal() {
        if (!modal) return;
        modal.classList.remove('hidden');
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            backdrop.classList.add('opacity-0');
            panel.classList.add('scale-95', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        });
    }
});