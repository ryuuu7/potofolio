<!DOCTYPE html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Hixed.nd</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="<?= asset('js/tailwind-config.js') ?>"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Material+Symbols+Outlined&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body class="min-h-screen font-sans antialiased selection:bg-secondary-container selection:text-white">

  <!-- Nav Disamakan Persis dengan Index -->
  <nav class="fixed top-0 z-50 w-full border-b border-white/10 bg-surface/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-container-max items-center justify-between px-margin-mobile py-6 md:px-margin-desktop">
      <a class="text-headline font-extrabold tracking-tighter" href="/">Hixed.nd</a>
      <div class="hidden items-center gap-8 text-lg md:flex">
        <a class="text-on-surface-variant hover:text-on-surface" href="/">Home</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/work">Work</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/about">About</a>
        <a class="border-b-2 border-secondary-container pb-1 font-bold text-secondary-container" href="/contact">Contact</a>
      </div>
      <a class="hidden bg-secondary-container px-6 py-3 text-label text-white hover:opacity-80 md:block" href="#contact">HIRE ME</a>
      <button class="md:hidden" aria-label="Open menu"><span class="material-symbols-outlined">menu</span></button>
    </div>
  </nav>

  <main class="flex-grow pt-[120px] pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
    <!-- Hero Section -->
    <section class="mb-section-gap">
      <h1 class="mb-8 max-w-4xl text-display-mobile leading-tight md:text-display">
        <span id="typed-text" data-part1="CONTACT " data-part2="GUAHHHHH"></span><span class="animate-pulse text-secondary-container">|</span>
      </h1>
      <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
        Ready to start your next project? We are always looking for new challenges and interesting partnerships.
      </p>
    </section>

    <!-- Contact Grid -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
      <!-- Form Area (8 cols) -->
      <div class="lg:col-span-8 lg:pr-12">
        <form class="flex flex-col gap-12 scroll-animate">
          <div class="flex flex-col gap-2 relative">
            <label class="font-label-caps text-label-caps text-on-surface-variant absolute -top-6" for="name">Name</label>
            <input class="form-input-minimal w-full font-body-lg text-body-lg py-3 bg-transparent border-b border-outline-variant focus:border-secondary-container outline-none" id="name" name="name" placeholder="Enter your full name" required="" type="text"/>
          </div>
          <div class="flex flex-col gap-2 relative">
            <label class="font-label-caps text-label-caps text-on-surface-variant absolute -top-6" for="email">Email Address</label>
            <input class="form-input-minimal w-full font-body-lg text-body-lg py-3 bg-transparent border-b border-outline-variant focus:border-secondary-container outline-none" id="email" name="email" placeholder="hello@example.com" required="" type="email"/>
          </div>
          <div class="flex flex-col gap-2 relative">
            <label class="font-label-caps text-label-caps text-on-surface-variant absolute -top-6" for="message">Message</label>
            <textarea class="form-input-minimal w-full font-body-lg text-body-lg py-3 bg-transparent border-b border-outline-variant focus:border-secondary-container outline-none resize-none" id="message" name="message" placeholder="Tell us about your project..." required="" rows="4"></textarea>
          </div>
          <div>
            <button class="bg-secondary-container text-on-secondary-container px-12 py-4 rounded font-bold hover:bg-opacity-90 transition-all duration-300 flex items-center gap-3 interactive-element" type="submit">
              Send Message
              <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
          </div>
        </form>
      </div>

      <!-- Details Area (4 cols) -->
      <div class="lg:col-span-4 flex flex-col gap-16 mt-16 lg:mt-0">
        <!-- Location Glass Card -->
        <div class="glass-panel p-8 rounded-lg relative overflow-hidden group scroll-animate" style="transition-delay: 0.2s;">
          <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <div class="relative z-10 flex flex-col gap-6">
            <div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">location_on</span>
              <h3 class="font-headline-md text-headline-md text-on-surface text-[24px]">HQ</h3>
            </div>
            <div class="font-body-md text-body-md text-on-surface-variant flex flex-col gap-1">
              <span>123 Innovation Drive</span>
              <span>Suite 400</span>
              <span>San Francisco, CA 94103</span>
            </div>
            <div class="mt-4 pt-6 border-t border-white/10 flex flex-col gap-3">
              <a class="font-body-md text-body-md text-on-surface hover:text-secondary-container transition-colors interactive-element flex items-center gap-2" href="mailto:hello@studiox.com">
                <span class="material-symbols-outlined text-[18px]">mail</span> hello@studiox.com
              </a>
              <a class="font-body-md text-body-md text-on-surface hover:text-secondary-container transition-colors interactive-element flex items-center gap-2" href="tel:+14155550198">
                <span class="material-symbols-outlined text-[18px]">phone</span> +1 (415) 555-0198
              </a>
            </div>
          </div>
        </div>

        <!-- Socials -->
        <div class="flex flex-col gap-6 scroll-animate" style="transition-delay: 0.4s;">
          <h3 class="font-label-caps text-label-caps text-on-surface-variant">Connect</h3>
          <div class="flex flex-wrap gap-4">
            <a class="px-6 py-3 border border-outline-variant rounded hover:border-secondary-container hover:text-secondary-container transition-all duration-300 font-label-caps text-label-caps interactive-element" href="#">Instagram</a>
            <a class="px-6 py-3 border border-outline-variant rounded hover:border-secondary-container hover:text-secondary-container transition-all duration-300 font-label-caps text-label-caps interactive-element" href="#">LinkedIn</a>
            <a class="px-6 py-3 border border-outline-variant rounded hover:border-secondary-container hover:text-secondary-container transition-all duration-300 font-label-caps text-label-caps interactive-element" href="#">Dribbble</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer Shared Component -->
  <footer class="bg-surface dark:bg-surface w-full py-section-gap border-t border-white/5">
    <div class="flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto gap-8 md:gap-0">
      <div class="text-headline-md font-headline-md text-on-surface hover:opacity-80 transition-all duration-200">
        STUDIO_X
      </div>
      <div class="flex gap-6">
        <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-secondary-container transition-colors duration-200 interactive-element" href="#">Instagram</a>
        <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-secondary-container transition-colors duration-200 interactive-element" href="#">LinkedIn</a>
        <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-secondary-container transition-colors duration-200 interactive-element" href="#">Dribbble</a>
        <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-secondary-container transition-colors duration-200 interactive-element" href="#">Email</a>
      </div>
      <div class="font-label-caps text-label-caps text-on-surface-variant">
        &copy; <?php echo date('Y'); ?> Creative Monolith. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="<?= asset('js/animations.js') ?>"></script>
</body>
</html>