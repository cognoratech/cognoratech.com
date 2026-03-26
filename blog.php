<?php 
  $page_title = "Blog & Insights | Cognora Technologies";
  $meta_desc = "Cognora - Elevating your digital presence with modern web development, UI/UX design, and innovative IT solutions.";
  $canonical_url = "https://cognoratech.com/blog.php";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body class="font-sans text-slate-700 antialiased bg-slate-950/5 overflow-x-hidden selection:bg-brand-600 selection:text-white">
    <?php include 'includes/header.php'; ?>
    <main>

    <section class="relative pt-32 pb-16 bg-brand-50">
        <div class="absolute inset-0 bg-grid-pattern opacity-50"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">
                Insights & <span class="text-gradient">News</span>
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Explore our latest thoughts on technology, development, and digital innovation.
            </p>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden grid lg:grid-cols-2 group"
                data-aos="fade-up">
                <div class="relative h-64 lg:h-auto overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        alt="AI Technology" width="1200" height="630"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-brand-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                        FEATURED</div>
                </div>
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-2 text-sm text-slate-400 mb-4">
                        <span><i class="far fa-calendar mr-1"></i> Oct 24, 2025</span>
                        <span>•</span>
                        <span class="text-brand-600 font-medium">Artificial Intelligence</span>
                    </div>
                    <h2
                        class="font-heading text-2xl lg:text-3xl font-bold text-brand-900 mb-4 hover:text-brand-600 transition-colors">
                        <a href="#">Building Smarter Apps with Spring AI and Java</a>
                    </h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Discover how the new Spring AI framework is revolutionizing Java development by making it easier
                        than ever to integrate Large Language Models (LLMs) into your enterprise applications.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-brand-600 font-semibold hover:gap-3 transition-all">
                        Read Article <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 pb-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-wrap gap-2 mb-10">
                <button class="px-4 py-1.5 rounded-full bg-brand-900 text-white text-sm font-medium">All</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:bg-slate-50 transition">Development</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:bg-slate-50 transition">Cloud</button>
                <button
                    class="px-4 py-1.5 rounded-full bg-white border border-slate-200 text-slate-600 text-sm font-medium hover:bg-slate-50 transition">Design</button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <article
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-glow transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Coding" width="600" height="400" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-brand-900">DevOps</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-400 mb-3">Oct 10, 2025 • 5 min read</div>
                        <h3
                            class="font-heading text-xl font-bold text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">
                            <a href="#">Why Microservices? A Spring Boot Perspective</a>
                        </h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                            Breaking down monolithic architectures into scalable microservices using Spring Boot and
                            Spring Cloud.
                        </p>
                        <a href="#" class="text-sm font-semibold text-brand-600 hover:underline">Read More</a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-glow transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1555421689-d68471e189f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Design" width="600" height="400" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-brand-900">UI/UX</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-400 mb-3">Sep 28, 2025 • 4 min read</div>
                        <h3
                            class="font-heading text-xl font-bold text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">
                            <a href="#">The Future of Web Design in 2026</a>
                        </h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                            Exploring glassmorphism, dark mode standardization, and AI-generated assets in modern web
                            interfaces.
                        </p>
                        <a href="#" class="text-sm font-semibold text-brand-600 hover:underline">Read More</a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-glow transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Cloud" width="600" height="400" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-brand-900">Cloud</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-400 mb-3">Sep 15, 2025 • 6 min read</div>
                        <h3
                            class="font-heading text-xl font-bold text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">
                            <a href="#">Scaling Applications on AWS</a>
                        </h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                            Best practices for deploying Java Spring applications on AWS Elastic Beanstalk and EC2.
                        </p>
                        <a href="#" class="text-sm font-semibold text-brand-600 hover:underline">Read More</a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-glow transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Mobile" width="600" height="400" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-brand-900">Mobile</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-400 mb-3">Sep 01, 2025 • 5 min read</div>
                        <h3
                            class="font-heading text-xl font-bold text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">
                            <a href="#">Flutter vs React Native: 2026 Edition</a>
                        </h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                            A comprehensive comparison of the two leading cross-platform mobile frameworks.
                        </p>
                        <a href="#" class="text-sm font-semibold text-brand-600 hover:underline">Read More</a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-glow transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Security" width="600" height="400" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-brand-900">Security</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-400 mb-3">Aug 20, 2025 • 7 min read</div>
                        <h3
                            class="font-heading text-xl font-bold text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">
                            <a href="#">Securing APIs with OAuth2</a>
                        </h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                            How to implement robust security standards in your REST APIs using Spring Security.
                        </p>
                        <a href="#" class="text-sm font-semibold text-brand-600 hover:underline">Read More</a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-glow transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Team" width="600" height="400" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-brand-900">Culture</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-400 mb-3">Aug 10, 2025 • 3 min read</div>
                        <h3
                            class="font-heading text-xl font-bold text-brand-900 mb-3 group-hover:text-brand-600 transition-colors">
                            <a href="#">Cognora Tech: One Year Journey</a>
                        </h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                            Reflecting on our growth, challenges, and the milestones we've achieved together.
                        </p>
                        <a href="#" class="text-sm font-semibold text-brand-600 hover:underline">Read More</a>
                    </div>
                </article>

            </div>

            <div class="flex justify-center mt-16 gap-2">
                <button
                    class="w-10 h-10 rounded-lg flex items-center justify-center border border-slate-200 text-slate-500 hover:bg-slate-50">
                    << /button>
                        <button
                            class="w-10 h-10 rounded-lg flex items-center justify-center bg-brand-600 text-white font-bold">1</button>
                        <button
                            class="w-10 h-10 rounded-lg flex items-center justify-center border border-slate-200 text-slate-600 hover:bg-slate-50">2</button>
                        <button
                            class="w-10 h-10 rounded-lg flex items-center justify-center border border-slate-200 text-slate-600 hover:bg-slate-50">3</button>
                        <button
                            class="w-10 h-10 rounded-lg flex items-center justify-center border border-slate-200 text-slate-500 hover:bg-slate-50">></button>
            </div>

        </div>
    </section>

    <?php include 'includes/newsletter.php'; ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>