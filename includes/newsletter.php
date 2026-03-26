<section class="py-12 bg-gradient-to-br from-[#27bcce] to-[#032f7a] relative overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-20"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="text-center md:text-left text-white">
            <h3 class="text-2xl font-heading font-bold mb-2">Join our newsletter</h3>
            <p class="text-brand-50 text-sm opacity-90">Get the latest insights on tech and growth. No spam, ever.</p>
        </div>

        <form action="https://api.web3forms.com/submit" method="POST" id="newsletter-form" class="flex w-full max-w-md gap-2">
            <input type="hidden" name="access_key" value="76db3594-910a-49b3-ba56-78b3060cb5f2">
            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
            <input type="email" name="email" placeholder="Enter your email" required
                class="w-full px-5 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:bg-white/20 transition-all backdrop-blur-sm">
            <button type="submit" class="px-6 py-3 bg-white text-brand-700 font-bold rounded-lg hover:bg-brand-50 transition-colors shadow-lg">
                Subscribe
            </button>
        </form>
        <div id="result" class="hidden text-white font-medium mt-4 md:mt-0"></div>
    </div>
</section>
