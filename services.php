<?php 
  $page_title = "IT & SaaS Services | Cognora Technologies";
  $meta_desc = "Discover Cognora Technologies services: web development, mobile apps, UI/UX design, enterprise software, AI integration and cloud solutions.";
  $canonical_url = "https://cognoratech.com/services.php";
  $extra_head = '
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "provider": {
        "@type": "Organization",
        "name": "Cognora Technologies",
        "url": "https://cognoratech.com"
      },
      "serviceType": "IT & SaaS Services",
      "areaServed": "Global",
      "description": "Web development, mobile apps, UI/UX design, enterprise software, AI integration and cloud solutions."
    }
    </script>
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
    <!-- Services Home Page Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">

        <div
            class="absolute inset-0 -z-10 bg-brand-50/50 bg-grid-pattern [mask-image:linear-gradient(to_bottom,white,transparent)]">
        </div>

        <div
            class="absolute top-0 right-0 -translate-y-12 translate-x-12 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-0 left-0 translate-y-12 -translate-x-12 w-96 h-96 bg-accent/10 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <span
                class="inline-block px-3 py-1 bg-brand-50 text-brand-600 font-bold rounded-full text-xs mb-6 uppercase tracking-wider border border-brand-100">
                What We Offer
            </span>

            <h1 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">
                Our <span class="text-gradient bg-gradient-to-br from-[#27bcce] to-[#032f7a]">Services</span>
            </h1>

            <p class="text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                We build scalable digital products and strategies that help your business stay ahead in a rapidly
                evolving tech landscape.
            </p>
        </div>
    </section>

    <!-- Services Offered Sections -->
    <section id="services" class="py-24 bg-[#020c22] relative overflow-hidden">
    <div class="hidden lg:block absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-purple-600/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-blue-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up">
                <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-globe" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Website Development</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Custom websites built with modern frameworks. We ensure fast loading speeds, SEO optimization, and mobile responsiveness.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-blue-500 text-xs"></i> Corporate & E-commerce</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-blue-500 text-xs"></i> Landing Pages</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-blue-600 hover:border-blue-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Mobile App Development</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Native and cross-platform mobile applications that provide seamless user experiences on iOS and Android devices.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500 text-xs"></i> Flutter / React Native</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500 text-xs"></i> iOS & Android Native</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-cyan-600 hover:border-cyan-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-purple-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-purple-500/10 border border-purple-500/20 text-purple-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-paint-brush" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">UI/UX Design</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">We design intuitive interfaces and user journeys that enhance engagement and satisfaction, turning visitors into loyal customers.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500 text-xs"></i> Wireframing & Design</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500 text-xs"></i> User Research</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-purple-600 hover:border-purple-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-orange-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up">
                <div class="w-14 h-14 bg-orange-500/10 border border-orange-500/20 text-orange-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-server" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Enterprise Software</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Robust backend systems built with <strong>Java Spring Boot</strong>. We ensure security, scalability, and high performance.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-orange-500 text-xs"></i> Microservices & APIs</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-orange-500 text-xs"></i> Legacy Migration</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-orange-600 hover:border-orange-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-green-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-green-500/10 border border-green-500/20 text-green-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-brain" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">AI Integration</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Leveraging <strong>Spring AI</strong> to integrate LLMs and intelligent features (RAG) into your business applications seamlessly.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> LLM & RAG Setup</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> AI Chatbots</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-green-600 hover:border-green-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-emerald-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-cloud" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Cloud Solutions</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Secure and scalable cloud infrastructure setup, management, and migration services for modern businesses.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-emerald-500 text-xs"></i> AWS & Google Cloud</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-emerald-500 text-xs"></i> Docker & Kubernetes</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-emerald-600 hover:border-emerald-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-pink-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up">
                <div class="w-14 h-14 bg-pink-500/10 border border-pink-500/20 text-pink-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-bullhorn" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Digital Marketing</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Data-driven strategies for SEO, SEM, and social media growth to increase your brand's digital footprint.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-pink-500 text-xs"></i> SEO & PPC</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-pink-500 text-xs"></i> Social Media Growth</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-pink-600 hover:border-pink-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-teal-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-teal-500/10 border border-teal-500/20 text-teal-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-file-excel" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Excel VBA Automation</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Automate repetitive tasks with custom VBA macros and complex dashboards to boost your team's productivity.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-teal-500 text-xs"></i> Macro Optimization</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-teal-500 text-xs"></i> Data Processing</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-teal-600 hover:border-teal-600 transition-all">Request Quote</a>
            </article>

            <article class="group bg-white/[0.03] backdrop-blur-xl p-8 rounded-3xl border border-white/10 hover:border-yellow-500/50 hover:bg-white/[0.07] transition-all duration-500 relative" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-pen-nib" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Graphics Design</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">Visual storytelling through high-impact branding, professional logos, and creative marketing collateral.</p>
                <ul class="text-sm text-slate-500 space-y-2 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-yellow-500 text-xs"></i> Brand Identity</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-yellow-500 text-xs"></i> Visual Marketing</li>
                </ul>
                <a href="/contact" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white/5 text-white font-semibold text-sm rounded-xl border border-white/10 hover:bg-yellow-600 hover:border-yellow-600 transition-all">Request Quote</a>
            </article>

        </div>
    </div>
</section>
    <!-- logo icon -->
  <section class="py-12 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="font-heading text-2xl font-bold text-slate-900 mb-10 text-center">
            Technologies We Master
        </h2>

        <div class="flex flex-wrap justify-center items-start gap-8 md:gap-12">
            
            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-js text-4xl text-slate-400 group-hover:text-[#F7DF1E] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">JavaScript</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-react text-4xl text-slate-400 group-hover:text-[#61DAFB] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">React</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-php text-4xl text-slate-400 group-hover:text-[#777BB4] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">PHP</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-java text-4xl text-slate-400 group-hover:text-[#5382a1] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Java</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fas fa-leaf text-4xl text-slate-400 group-hover:text-[#6db33f] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Spring</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-python text-4xl text-slate-400 group-hover:text-[#3776AB] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Python</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fas fa-database text-4xl text-slate-400 group-hover:text-[#4479A1] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">SQL</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fas fa-envira text-4xl text-slate-400 group-hover:text-[#47A248] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">MongoDB</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-aws text-4xl text-slate-400 group-hover:text-[#FF9900] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">AWS</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fas fa-cloud text-4xl text-slate-400 group-hover:text-[#0089D6] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Azure</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-docker text-4xl text-slate-400 group-hover:text-[#2496ED] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Docker</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fas fa-file-excel text-4xl text-slate-400 group-hover:text-[#1D6F42] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Excel</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fab fa-google text-4xl text-slate-400 group-hover:text-[#4285F4] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Marketing</p>
            </div>

            <div class="text-center group cursor-pointer w-20">
                <i class="fas fa-bezier-curve text-4xl text-slate-400 group-hover:text-[#FF0000] transition-all duration-300 transform group-hover:scale-110 mb-3 block"></i>
                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 group-hover:text-slate-900">Design</p>
            </div>

        </div>
    </div>
</section>


    <?php include 'includes/newsletter.php'; ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>