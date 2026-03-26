<?php 
  $page_title = "About Cognora Technologies | Our Story & Leadership";
  $meta_desc = "Learn about Cognora Technologies, our mission, vision and leadership team building scalable digital solutions for modern businesses.";
  $canonical_url = "https://cognoratech.com/about.php";
  $extra_head = '
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Cognora Technologies",
      "url": "https://cognoratech.com",
      "logo": "https://cognoratech.com/assets/images/logo-nobg.png"
    }
    </script>
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
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

    <!-- Hero Section -->
    <section class="relative pt-40 pb-24 overflow-hidden bg-slate-50">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-cyan-100/40 via-transparent to-transparent opacity-70">
        </div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center" data-aos="zoom-out-up">
                <span
                    class="inline-flex items-center gap-2 px-4 py-1.5 bg-white border border-slate-200 text-brand-600 text-[10px] font-black uppercase tracking-[0.3em] rounded-full mb-8 shadow-xl">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                    </span>
                    EST. 2025
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 mb-8 tracking-tight">
                    Engineering <span
                        class="text-transparent bg-clip-text bg-gradient-to-br from-[#27bcce] to-[#032f7a]">Digital
                        Dominance</span>
                </h1>
                <p class="text-xl text-slate-500 max-w-3xl mx-auto leading-relaxed font-light">
                    We don't just build websites. We architect scalable digital ecosystems that turn startups into
                    industry leaders.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-8 items-stretch">
                <div class="lg:col-span-7 bg-slate-900 rounded-[2.5rem] p-10 md:p-16 text-white relative overflow-hidden group"
                    data-aos="fade-right">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-cyan-500/10 blur-[80px] group-hover:bg-cyan-500/20 transition-all">
                    </div>
                    <h2 class="text-4xl font-bold mb-6">Transforming Ideas into <br><span class="text-cyan-400">Digital
                            Reality.</span></h2>
                    <p class="text-slate-400 text-lg leading-relaxed mb-10 max-w-xl">
                        Cognora Technologies focuses on helping enterprises transform ideas into powerful digital
                        products. We specialize in Full-stack Dev, Cloud Solutions, and AI integration.
                    </p>
                    <div class="flex gap-10">
                        <div>
                            <p class="text-4xl font-black text-white">75+</p>
                            <p class="text-xs uppercase tracking-widest text-slate-500 mt-2">Projects</p>
                        </div>
                        <div class="w-px h-12 bg-white/10"></div>
                        <div>
                            <p class="text-4xl font-black text-white">98%</p>
                            <p class="text-xs uppercase tracking-widest text-slate-500 mt-2">Satisfaction</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 rounded-[2.5rem] overflow-hidden relative" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                        width="800" height="533" loading="lazy"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-110"
                        alt="Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission & Vision -->

    <section class="py-16 bg-slate-950 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_0%_0%,#032f7a_0%,transparent_40%)]"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-2 gap-6">

                <div
                    class="group backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-[1.5rem] hover:border-[#27bcce]/50 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-[#27bcce] rounded-xl mb-6 flex items-center justify-center shadow-lg shadow-[#27bcce]/20 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Our Mission</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        To deliver <span class="text-[#27bcce] font-medium">cost-effective digital solutions</span> that
                        empower businesses to achieve sustainable growth in the digital era.
                    </p>
                </div>

                <div
                    class="group backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-[1.5rem] hover:border-[#032f7a]/50 transition-all duration-300">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-[#27bcce] to-[#032f7a] rounded-xl mb-6 flex items-center justify-center shadow-lg shadow-[#032f7a]/20 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Our Vision</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        To become a <span class="text-[#27bcce] font-medium">trusted global technology partner</span>
                        known for quality, innovation, and customer-centric solutions.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Meet the founder -->
    <section id="our-team" class="py-20 bg-white relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-slate-50 rounded-full blur-3xl opacity-70"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-600 font-bold tracking-[0.2em] text-[10px] uppercase mb-3 block">Executive
                    Board</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">Meet the <span
                        class="text-transparent bg-clip-text bg-gradient-to-br from-[#27bcce] to-[#032f7a]">Leadership</span>
                </h2>
            </div>

            <div class="flex flex-wrap justify-center gap-10">

                <div class="group w-full max-w-[280px]" data-aos="fade-up">
                    <div
                        class="bg-white rounded-[2.5rem] p-6 shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-50 transition-transform duration-500 hover:-translate-y-2">

                        <div
                            class="relative mx-auto w-32 h-32 mb-6 overflow-hidden rounded-full ring-4 ring-slate-50 ring-offset-2">
                            <img src="/assets/images/Board Of Member/SRIDHAR SIR.png" alt="Sridhar Panigrahi"
                                width="128" height="128" loading="lazy"
                                class="w-full h-full object-cover grayscale transition-all duration-700 ease-out group-hover:grayscale-0 group-hover:scale-125">
                        </div>

                        <div class="text-center">
                            <h3 class="text-xl font-bold text-slate-900 tracking-tight">Sridhar Panigrahi</h3>
                            <p class="text-brand-600 font-semibold text-[10px] uppercase tracking-[0.15em] mb-6">
                                Industry Expert</p>

                            <div class="flex justify-center gap-4 pt-4 border-t border-slate-100">
                                <a href="https://www.linkedin.com/in/sridhar-panigrahi-a5b9a3142/"
                                    class="text-[#0077b5]">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group w-full max-w-[280px]" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-white rounded-[2.5rem] p-6 shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-50 transition-transform duration-500 hover:-translate-y-2">

                        <div
                            class="relative mx-auto w-32 h-32 mb-6 overflow-hidden rounded-full ring-4 ring-slate-50 ring-offset-2">
                            <img src="/assets/images/Board Of Member/KP_SIR Marketing.jpg" alt="Krushna Pattnaik"
                                width="128" height="128" loading="lazy"
                                class="w-full h-full object-cover grayscale transition-all duration-700 ease-out group-hover:grayscale-0 group-hover:scale-125">
                        </div>

                        <div class="text-center">
                            <h3 class="text-xl font-bold text-slate-900 tracking-tight">Krushna Pattnaik</h3>
                            <p class="text-brand-600 font-semibold text-[10px] uppercase tracking-[0.15em] mb-6">
                                Marketing Lead</p>

                            <div class="flex justify-center gap-4 pt-4 border-t border-slate-100">
                                <a href="https://www.linkedin.com/in/krushna-pattnaik-438016145/"
                                    class="text-[#0077b5]">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="group w-full max-w-[280px]" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-white rounded-[2.5rem] p-6 shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-50 transition-transform duration-500 hover:-translate-y-2">

                        <div
                            class="relative mx-auto w-32 h-32 mb-6 overflow-hidden rounded-full ring-4 ring-slate-50 ring-offset-2">
                            <img src="/assets/images/Board Of Member/Rudra_Prasad_Mahapatra.jpeg" alt="Rudra Prasad Mahapatra"
                                width="128" height="128" loading="lazy"
                                class="w-full h-full object-cover grayscale transition-all duration-700 ease-out group-hover:grayscale-0 group-hover:scale-125">
                        </div>

                        <div class="text-center">
                            <h3 class="text-xl font-bold text-slate-900 tracking-tight">Rudra Prasad Mahapatra</h3>
                            <p class="text-brand-600 font-semibold text-[10px] uppercase tracking-[0.15em] mb-6">
                                Full Stack Developer</p>

                            <div class="flex justify-center gap-4 pt-4 border-t border-slate-100">
                                <a href="https://www.linkedin.com/in/rudra-prasad-mahapatra/"
                                    class="text-[#0077b5]">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>

    <!-- Our Core Values -->
    <section class="py-20 bg-gradient-to-br from-[#031233] via-[#0f2859] to-[#1e40af] relative overflow-hidden">

        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:24px_24px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="text-center mb-20" data-aos="fade-up">
                <span
                    class="inline-block px-3 py-1 bg-white/10 border border-white/20 text-accent font-bold rounded-full text-xs mb-4 uppercase tracking-[0.2em] backdrop-blur-md">
                    Our DNA
                </span>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-white">
                    Core <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Values</span>
                </h2>
            </div>

            <div class="hidden lg:block absolute top-[60%] left-6 right-6 h-[1px] bg-white/10 -z-0"></div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:-translate-y-2 hover:bg-white/10 hover:border-cyan-400/50 transition-all duration-300 z-10"
                    data-aos="fade-up">
                    <div
                        class="w-20 h-20 mx-auto bg-[#020c22] rounded-full border-2 border-cyan-500/30 flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(6,182,212,0.2)] group-hover:scale-110 group-hover:border-cyan-400 group-hover:shadow-[0_0_30px_rgba(6,182,212,0.6)] transition-all duration-500">
                        <svg class="w-10 h-10 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold text-xl text-white mb-2">Integrity</h5>
                        <p class="text-sm text-slate-300 leading-relaxed">Honesty and transparency in every line of
                            code.</p>
                    </div>
                </div>

                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:-translate-y-2 hover:bg-white/10 hover:border-yellow-400/50 transition-all duration-300 z-10"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-20 h-20 mx-auto bg-[#020c22] rounded-full border-2 border-yellow-500/30 flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 group-hover:border-yellow-400 group-hover:shadow-[0_0_30px_rgba(250,204,21,0.6)] transition-all duration-500">
                        <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold text-xl text-white mb-2">Innovation</h5>
                        <p class="text-sm text-slate-300 leading-relaxed">We don't just follow trends; we set them.</p>
                    </div>
                </div>

                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:-translate-y-2 hover:bg-white/10 hover:border-pink-400/50 transition-all duration-300 z-10"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-20 h-20 mx-auto bg-[#020c22] rounded-full border-2 border-pink-500/30 flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(236,72,153,0.2)] group-hover:scale-110 group-hover:border-pink-400 group-hover:shadow-[0_0_30px_rgba(236,72,153,0.6)] transition-all duration-500">
                        <svg class="w-10 h-10 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold text-xl text-white mb-2">Focus</h5>
                        <p class="text-sm text-slate-300 leading-relaxed">Your success is our priority. We align with
                            your goals.</p>
                    </div>
                </div>

                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:-translate-y-2 hover:bg-white/10 hover:border-purple-400/50 transition-all duration-300 z-10"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-20 h-20 mx-auto bg-[#020c22] rounded-full border-2 border-purple-500/30 flex items-center justify-center mb-6 shadow-[0_0_20px_rgba(168,85,247,0.2)] group-hover:scale-110 group-hover:border-purple-400 group-hover:shadow-[0_0_30px_rgba(168,85,247,0.6)] transition-all duration-500">
                        <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold text-xl text-white mb-2">Excellence</h5>
                        <p class="text-sm text-slate-300 leading-relaxed">Quality in every pixel. Never "good enough."
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- newsletter -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-gradient-to-br from-[#031233] via-[#0f2859] to-[#1e40af] rounded-3xl p-12 text-center text-white shadow-2xl relative overflow-hidden border border-white/10"
                data-aos="zoom-in">

                <div
                    class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:24px_24px]">
                </div>

                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-accent/10 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-40 h-40 bg-brand-600/20 rounded-full translate-y-1/2 -translate-x-1/4 blur-3xl">
                </div>

                <h3 class="relative z-10 text-3xl font-heading font-bold mb-6">Let’s Build Something Great Together</h3>
                <p class="relative z-10 text-brand-100/80 mb-8 max-w-xl mx-auto leading-relaxed">
                    Have a project in mind? We'd love to hear about it and help you achieve your goals.
                </p>

                <a href="/contact"
                    class="relative z-10 inline-block px-8 py-3.5 bg-white text-[#031233] font-bold rounded-lg hover:bg-brand-50 hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>