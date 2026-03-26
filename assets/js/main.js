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

    // Modal References (for quoteForm)
    const modal = document.getElementById('thankYouModal');
    const backdrop = document.getElementById('modalBackdrop');
    const panel = document.getElementById('modalPanel');
    const closeBtn = document.getElementById('closeModalBtn');

    /* ======================================================
       2. MOBILE MENU LOGIC
    ====================================================== */
    function openMobileMenu() {
        mobileMenu.classList.remove("translate-x-full");
        mobileMenu.classList.add("translate-x-0");
        document.body.style.overflow = "hidden";

        if (iconHamburger && iconClose) {
            iconHamburger.classList.add("opacity-0", "rotate-90");
            iconHamburger.classList.remove("opacity-100", "rotate-0");

            iconClose.classList.remove("opacity-0", "rotate-90");
            iconClose.classList.add("opacity-100", "rotate-0");
        }
    }

    function closeMobileMenu() {
        mobileMenu.classList.add("translate-x-full");
        mobileMenu.classList.remove("translate-x-0");
        document.body.style.overflow = "";

        if (iconHamburger && iconClose) {
            iconHamburger.classList.remove("opacity-0", "rotate-90");
            iconHamburger.classList.add("opacity-100", "rotate-0");

            iconClose.classList.add("opacity-0", "rotate-90");
            iconClose.classList.remove("opacity-100", "rotate-0");
        }
    }

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            const isClosed = mobileMenu.classList.contains("translate-x-full");
            isClosed ? openMobileMenu() : closeMobileMenu();
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }
    /* ======================================================
       3. ACTIVE NAV LINK HIGHLIGHTER
    ====================================================== */
    const currentPath = window.location.pathname.split("/").pop() || "index.html";
    navLinks.forEach(link => {
        // do not force active color/bold:
        if (link.getAttribute("href") === currentPath) {
            // nothing added
        }

        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // remove previously forced classes just in case (clean state)
            navLinks.forEach(l =>
                l.classList.remove('font-bold', 'active-nav', 'text-brand-600')
            );

            // no style class add here either
            // this.classList.add('active-nav'); // remove this line
            if (href.startsWith('#') && href.length > 1) {
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({ behavior: 'smooth' });
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
        if (progressBar) {
            const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollY / docHeight) * 100;
            progressBar.style.width = `${scrolled}%`;
        }
        if (header) {
            if (scrollY > 20) {
                header.classList.add("shadow-md", "bg-white/95", "py-2");
                header.classList.remove("bg-white/80", "border-transparent");
            } else {
                header.classList.remove("shadow-md", "bg-white/95", "py-2");
                header.classList.add("bg-white/80", "border-transparent");
            }
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
        const duration = 2000;
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
       6. NEWSLETTER FORM HANDLING (Your Specific Fetch)
    ====================================================== */
    const newsletterForm = document.getElementById('newsletter-form');
    const result = document.getElementById('result');

    if (newsletterForm && result) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(newsletterForm);
            const object = Object.fromEntries(formData);
            const json = JSON.stringify(object);

            result.innerHTML = "Please wait...";
            result.classList.remove('hidden');

            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
                .then(async (response) => {
                    let jsonResponse = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = "Thanks! You've been subscribed.";
                        newsletterForm.reset();
                    } else {
                        console.log(response);
                        result.innerHTML = jsonResponse.message;
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.innerHTML = "Something went wrong!";
                })
                .finally(() => {
                    setTimeout(() => {
                        result.classList.add('hidden');
                    }, 5000);
                });
        });
    }

    /* ======================================================
       7. MAIN QUOTE FORM HANDLING (Modal Trigger)
    ====================================================== */
    if (typeof AOS !== 'undefined') {
        AOS.init({ once: true, offset: 50, duration: 800 });
    }

    const quoteForm = document.getElementById('quoteForm');
    if (quoteForm) {
        quoteForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = quoteForm.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span>Sending...</span>';
            btn.disabled = true;

            const formData = new FormData(quoteForm);
            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    if (response.status === 200) {
                        showModal();
                        quoteForm.reset();
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