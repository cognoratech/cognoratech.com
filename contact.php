<?php 
  $page_title = "Contact Cognora Technologies | Get a Quote";
  $meta_desc = "Contact Cognora Technologies to discuss your project, request a quote or talk to our team about web, mobile and cloud solutions.";
  $canonical_url = "https://cognoratech.com/contact.php";
  $extra_head = '
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "name": "Contact Cognora Technologies",
      "url": "https://cognoratech.com/contact",
      "description": "Contact Cognora Technologies for project discussions, quotes, and support."
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
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-brand-50">
        <div class="absolute inset-0 bg-grid-pattern opacity-50"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
          <h1 class="font-heading text-4xl md:text-5xl font-bold text-brand-900 mb-6">
    Get in <span class="bg-gradient-to-br from-[#27bcce] to-[#032f7a] bg-clip-text text-transparent">Touch</span>
</h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Have a project in mind or want to learn more about our services? We’d love to hear from you.
            </p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16">

            <div data-aos="fade-right">
                <h2 class="font-heading text-2xl font-bold text-brand-900 mb-6">Contact Information</h2>
                <p class="text-slate-600 mb-10 leading-relaxed">
                    Fill out the form and our team will get back to you within 24 hours. Alternatively, you can reach us
                    directly via email or phone.
                </p>

                <div class="space-y-6">


                    <div
                        class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 bg-white text-brand-600 rounded-full flex items-center justify-center text-xl shadow-sm shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Email Us</h4>
                            <p class="text-sm text-slate-500">info@cognoratech.com<br>support@cognoratech.com</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 bg-white text-brand-600 rounded-full flex items-center justify-center text-xl shadow-sm shrink-0">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Call Us</h4>
                            <p class="text-sm text-slate-500">+91 88859 37030<br>Mon - Fri (9am - 6pm)</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h4 class="font-bold text-slate-900 mb-4">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="https://www.linkedin.com/company/cognora-technologies/"
                            class="w-10 h-10 bg-brand-900 text-white rounded-lg flex items-center justify-center hover:bg-brand-600 transition-colors"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-brand-900 text-white rounded-lg flex items-center justify-center hover:bg-brand-600 transition-colors"><i
                                class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/cognoratech"
                            class="w-10 h-10 bg-brand-900 text-white rounded-lg flex items-center justify-center hover:bg-brand-600 transition-colors"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#"
                            class="w-10 h-10 bg-brand-900 text-white rounded-lg flex items-center justify-center hover:bg-brand-600 transition-colors"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>

            <div class="relative " data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-brand-600 rounded-2xl blur opacity-30">
                </div>

                <div
                    class="relative bg-gradient-to-br from-[#27bcce] to-[#032f7a] rounded-2xl p-8 shadow-2xl border border-white/20 backdrop-blur-sm">
                    <div class="text-center mb-6">
                        <h3 class="font-heading text-2xl font-bold text-white">Get a Free Quote</h3>
                        <p class="text-white/80 text-sm mt-1">Fill out the form and we'll get back to you within 24
                            hours.</p>
                    </div>

                    <form id="quoteForm" action="https://api.web3forms.com/submit" method="POST" class="space-y-4">
                        <input type="hidden" name="access_key" value="ff3f1138-b3a3-41dc-bd4d-8bc16f05d8e0">

                        <input type="hidden" name="redirect" value="https://cognoratech.com/thank-you.html">

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-[11px] font-bold text-white/90 uppercase tracking-wide">Name</label>
                                <input type="text" name="name" placeholder="Your Name" required
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-white/50 focus:border-white outline-none transition-all text-sm text-white placeholder-white/40 backdrop-blur-md hover:border-white/40">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[11px] font-bold text-white/90 uppercase tracking-wide">Phone</label>
                                <input type="tel" name="phone" placeholder="+91..." required
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-white/50 focus:border-white outline-none transition-all text-sm text-white placeholder-white/40 backdrop-blur-md hover:border-white/40">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-white/90 uppercase tracking-wide">Email
                                Address</label>
                            <input type="email" name="email" placeholder="Your Email " required
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-white/50 focus:border-white outline-none transition-all text-sm text-white placeholder-white/40 backdrop-blur-md hover:border-white/40">
                        </div>

                        <div class="space-y-1">
                            <label class="text-[11px] font-bold text-white/90 uppercase tracking-wide">Service
                                Needed</label>
                            <select name="service"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:ring-2 focus:ring-white/50 focus:border-white outline-none transition-all text-sm text-white backdrop-blur-md hover:border-white/40">
                                <option value="" disabled selected class="text-slate-500">Select a service...
                                </option>
                                <option value="Web Development" class="text-slate-900">Web Development</option>
                                <option value="Mobile App Development" class="text-slate-900">Mobile App Development
                                </option>
                                <option value="UI/UX Design" class="text-slate-900">UI/UX Design</option>
                                <option value="Digital Marketing" class="text-slate-900">Digital Marketing</option>
                                <option value="Excel Customisation" class="text-slate-900">Excel Customisation
                                </option>
                            </select>
                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-white text-[#032f7a] font-bold rounded-lg hover:bg-cyan-50 transition-all shadow-lg hover:shadow-cyan-500/20 flex justify-center items-center gap-2 group mt-2">
                            <span>Request Consultation</span>
                            <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </button>

                        <p class="text-center text-xs text-white/60 mt-3">
                            <i class="fas fa-lock text-[10px]"></i> Your data is secure. No spam.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/newsletter.php'; ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>