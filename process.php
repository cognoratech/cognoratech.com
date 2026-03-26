<?php 
  $page_title = "Our Process | Cognora Technologies";
  $meta_desc = "Cognora - Elevating your digital presence with modern web development, UI/UX design, and innovative IT solutions.";
  $canonical_url = "https://cognoratech.com/process.php";
  $extra_head = '
    <style>
        /* Timeline Line */
        .timeline-line::before {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
            z-index: 0;
        }

        @media (max-width: 768px) {
            .timeline-line::before {
                left: 20px;
            }
        }
    </style>
  ';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body class="font-sans text-slate-700 antialiased bg-slate-950/5 overflow-x-hidden selection:bg-brand-600 selection:text-white">
    <?php include 'includes/header.php'; ?>
    <main>

    <section class="relative pt-32 pb-20 bg-brand-900 overflow-hidden text-white">
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="font-heading text-4xl md:text-5xl font-bold mb-6">
                From Concept to <span class="text-accent">Code</span>
            </h1>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                We follow a structured Agile methodology to ensure transparency, flexibility, and high-quality delivery
                for every project.
            </p>
        </div>
    </section>

    <section class="py-24 bg-white relative timeline-line">
        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="grid md:grid-cols-2 gap-12 items-center mb-24 relative">
                <div
                    class="hidden md:block absolute left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-brand-600 rounded-full border-4 border-white shadow-lg z-10">
                </div>

                <div class="text-right md:pr-16 order-1" data-aos="fade-right">
                    <span
                        class="inline-block px-3 py-1 bg-blue-50 text-brand-600 font-bold rounded-full text-xs mb-3">STEP
                        01</span>
                    <h3 class="font-heading text-3xl font-bold text-brand-900 mb-4">Discovery & Strategy</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We start by understanding your vision, business goals, and target audience. We conduct market
                        research and feasibility studies to define a solid roadmap.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2 inline-block text-left">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Requirement
                            Gathering</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Competitor
                            Analysis</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Tech Stack
                            Selection</li>
                    </ul>
                </div>
                <div class="md:pl-16 order-2" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Discovery" width="600" height="400" loading="lazy" class="rounded-2xl shadow-lg border border-slate-100 w-full">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-24 relative">
                <div
                    class="hidden md:block absolute left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-white border-4 border-brand-600 rounded-full shadow-lg z-10">
                </div>

                <div class="md:pr-16 order-1 md:order-2 text-left" data-aos="fade-left">
                    <span
                        class="inline-block px-3 py-1 bg-purple-50 text-purple-600 font-bold rounded-full text-xs mb-3">STEP
                        02</span>
                    <h3 class="font-heading text-3xl font-bold text-brand-900 mb-4">UI/UX Design</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We create wireframes and interactive prototypes to visualize the user journey. Our design
                        focuses on aesthetics, accessibility, and user experience.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500"></i> Wireframing &
                            Prototyping</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500"></i> Visual Design
                            System</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500"></i> User Feedback
                            Loop</li>
                    </ul>
                </div>
                <div class="md:pl-16 order-2 md:order-1" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Design" width="600" height="400" loading="lazy" class="rounded-2xl shadow-lg border border-slate-100 w-full">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-24 relative">
                <div
                    class="hidden md:block absolute left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-brand-600 rounded-full border-4 border-white shadow-lg z-10">
                </div>

                <div class="text-right md:pr-16 order-1" data-aos="fade-right">
                    <span
                        class="inline-block px-3 py-1 bg-green-50 text-green-600 font-bold rounded-full text-xs mb-3">STEP
                        03</span>
                    <h3 class="font-heading text-3xl font-bold text-brand-900 mb-4">Development</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Our engineers bring the design to life using clean, scalable code. We follow Agile sprints,
                        ensuring regular updates and flexibility.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2 inline-block text-left">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Frontend &
                            Backend Dev</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> API Integration
                        </li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Database Setup
                        </li>
                    </ul>
                </div>
                <div class="md:pl-16 order-2" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Development" width="600" height="400" loading="lazy" class="rounded-2xl shadow-lg border border-slate-100 w-full">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-24 relative">
                <div
                    class="hidden md:block absolute left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-white border-4 border-brand-600 rounded-full shadow-lg z-10">
                </div>

                <div class="md:pr-16 order-1 md:order-2 text-left" data-aos="fade-left">
                    <span
                        class="inline-block px-3 py-1 bg-orange-50 text-orange-600 font-bold rounded-full text-xs mb-3">STEP
                        04</span>
                    <h3 class="font-heading text-3xl font-bold text-brand-900 mb-4">Quality Assurance</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Rigorous testing to ensure your product is bug-free, secure, and performs well under load. We
                        test across devices and browsers.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-orange-500"></i> Unit &
                            Integration Testing</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-orange-500"></i> Performance
                            Testing</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-orange-500"></i> Security Audits
                        </li>
                    </ul>
                </div>
                <div class="md:pl-16 order-2 md:order-1" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Testing" width="600" height="400" loading="lazy" class="rounded-2xl shadow-lg border border-slate-100 w-full">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center relative">
                <div
                    class="hidden md:block absolute left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-brand-600 rounded-full border-4 border-white shadow-lg z-10">
                </div>

                <div class="text-right md:pr-16 order-1" data-aos="fade-right">
                    <span class="inline-block px-3 py-1 bg-cyan-50 text-accent font-bold rounded-full text-xs mb-3">STEP
                        05</span>
                    <h3 class="font-heading text-3xl font-bold text-brand-900 mb-4">Deployment & Support</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We handle the cloud deployment and ensure a smooth go-live. Post-launch, we provide ongoing
                        maintenance and updates.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2 inline-block text-left">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500"></i> Cloud Setup
                            (AWS/GCP)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500"></i> Monitoring &
                            Alerts</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500"></i> 24/7 Support</li>
                    </ul>
                </div>
                <div class="md:pl-16 order-2" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Deployment" width="600" height="400" loading="lazy" class="rounded-2xl shadow-lg border border-slate-100 w-full">
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-heading text-2xl font-bold text-slate-800 mb-10">Tools That Power Our Process</h2>
            <div class="flex flex-wrap justify-center gap-8 text-slate-400">
                <div class="flex flex-col items-center gap-2"><i class="fab fa-jira text-3xl"></i><span
                        class="text-xs font-semibold">Jira</span></div>
                <div class="flex flex-col items-center gap-2"><i class="fab fa-slack text-3xl"></i><span
                        class="text-xs font-semibold">Slack</span></div>
                <div class="flex flex-col items-center gap-2"><i class="fab fa-figma text-3xl"></i><span
                        class="text-xs font-semibold">Figma</span></div>
                <div class="flex flex-col items-center gap-2"><i class="fab fa-github text-3xl"></i><span
                        class="text-xs font-semibold">GitHub</span></div>
                <div class="flex flex-col items-center gap-2"><i class="fab fa-jenkins text-3xl"></i><span
                        class="text-xs font-semibold">Jenkins</span></div>
                <div class="flex flex-col items-center gap-2"><i class="fab fa-docker text-3xl"></i><span
                        class="text-xs font-semibold">Docker</span></div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-gradient-to-r from-brand-600 to-brand-700 rounded-3xl p-12 text-center text-white shadow-2xl relative overflow-hidden"
                data-aos="zoom-in">
                <h3 class="relative z-10 text-3xl font-heading font-bold mb-6">Ready to Start Your Journey?</h3>
                <p class="relative z-10 text-brand-100 mb-8 max-w-xl mx-auto">Our process is designed to minimize risk
                    and maximize value. Let's discuss your project today.</p>
                <a href="/contact"
                    class="relative z-10 inline-block px-8 py-3 bg-white text-brand-700 font-bold rounded-lg hover:bg-brand-50 transition-colors shadow-lg">
                    Schedule a Discovery Call
                </a>
            </div>
        </div>
    </section>

    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>