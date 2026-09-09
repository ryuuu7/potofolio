<!DOCTYPE html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Hixed.nd - About</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="<?= asset('js/tailwind-config.js') ?>"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body class="min-h-screen font-sans antialiased selection:bg-secondary-container selection:text-white">
  <!-- Nav Menu -->
  <nav class="fixed top-0 z-50 w-full border-b border-white/10 bg-surface/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-container-max items-center justify-between px-margin-mobile py-6 md:px-margin-desktop">
      <a class="text-headline font-extrabold tracking-tighter" href="/">Hixed.nd</a>
      <div class="hidden items-center gap-8 text-lg md:flex">
        <a class="text-on-surface-variant hover:text-on-surface" href="/">Home</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/work">Work</a>
        <a class="border-b-2 border-secondary-container pb-1 font-bold text-secondary-container" href="/about">About</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/contact">Contact</a>
      </div>
      <a class="hidden bg-secondary-container px-6 py-3 text-label text-white hover:opacity-80 md:block" href="/contact">HIRE ME</a>
      <button class="md:hidden" aria-label="Open menu"><span class="material-symbols-outlined">menu</span></button>
    </div>
  </nav>

  <main class="pt-[140px] md:pt-[200px]">
    <!-- About Me Split Layout -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
        <!-- Left: Professional Placeholder Image -->
        <div class="col-span-1 md:col-span-5 h-[500px] md:h-[700px] w-full relative rounded-DEFAULT overflow-hidden group reveal-up">
          <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="A high-contrast, black and white portrait" src="<?= asset('image/me.jpeg') ?>"/>
          <div class="absolute inset-0 bg-primary-container/10 group-hover:bg-transparent transition-colors duration-700"></div>
        </div>
        <!-- Right: Minimalist Biography -->
        <div class="col-span-1 md:col-span-6 md:col-start-7 mt-12 md:mt-0 flex flex-col justify-center reveal-up delay-100">
          <h1 class="mb-8 max-w-4xl text-display-mobile leading-tight md:text-display">
            <span id="typed-text" data-part1="Darma Abdi " data-part2="Negara"></span><span class="animate-pulse text-secondary-container">|</span>
          </h1>
          <div class="space-y-6 text-on-surface-variant font-body-lg text-body-lg">
            <p>
              I design digital monoliths. My practice is rooted in extreme minimalism, leveraging expansive negative space and sharp architectural grids to command focus and convey uncompromising quality.
            </p>
            <p>
              Based at the intersection of visual design and creative engineering, I strip away the superfluous until only the essential remains. The result is high-end, atmospheric interfaces built for brands that demand authority.
            </p>
          </div>
          <div class="mt-12 flex flex-wrap gap-4">
            <a href="/work" class="inline-block bg-secondary-container text-white px-8 py-4 rounded-DEFAULT font-label-caps text-label-caps hover:bg-secondary-container/90 transition-colors">
              View Monoliths
            </a>
            <a href="/contact" class="inline-block border border-white/20 bg-surface/5 backdrop-blur-md text-on-surface px-8 py-4 rounded-DEFAULT font-label-caps text-label-caps hover:bg-white/10 hover:border-white/40 transition-all">
              Download Dossier
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <h2 class="font-headline-md text-headline-md text-on-surface">Capabilities</h2>
        <p class="font-body-md text-body-md text-on-surface-variant mt-4 md:mt-0 max-w-sm text-left md:text-right">
          Disciplined execution across spatial interaction and structural interface design.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Service Card 1 -->
        <div class="bg-surface/5 backdrop-blur-[20px] border border-white/10 p-8 rounded-lg min-h-[320px] flex flex-col justify-between group hover:bg-surface/10 hover:border-secondary-container/50 transition-all duration-500 cursor-pointer reveal-up delay-100">
          <div class="w-12 h-12 rounded-DEFAULT bg-primary-container border border-white/5 flex items-center justify-center group-hover:bg-secondary-container/10 transition-colors">
            <span class="material-symbols-outlined text-[24px] text-on-surface group-hover:text-secondary-container transition-colors">architecture</span>
          </div>
          <div>
            <h3 class="font-body-lg text-body-lg text-on-surface font-semibold mb-3 group-hover:text-secondary-container transition-colors">Structural UI</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Architecting rigid, scalable design systems that thrive in high-contrast environments and absolute blackness.</p>
          </div>
        </div>
        <!-- Service Card 2 -->
        <div class="bg-surface/5 backdrop-blur-[20px] border border-white/10 p-8 rounded-lg min-h-[320px] flex flex-col justify-between group hover:bg-surface/10 hover:border-secondary-container/50 transition-all duration-500 cursor-pointer md:transform md:translate-y-8 reveal-up delay-200">
          <div class="w-12 h-12 rounded-DEFAULT bg-primary-container border border-white/5 flex items-center justify-center group-hover:bg-secondary-container/10 transition-colors">
            <span class="material-symbols-outlined text-[24px] text-on-surface group-hover:text-secondary-container transition-colors">motion_photos_on</span>
          </div>
          <div>
            <h3 class="font-body-lg text-body-lg text-on-surface font-semibold mb-3 group-hover:text-secondary-container transition-colors">Fluid Interaction</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Implementing subtle, physics-based micro-interactions that breathe life into static monoliths without breaking the silence.</p>
          </div>
        </div>
        <!-- Service Card 3 -->
        <div class="bg-surface/5 backdrop-blur-[20px] border border-white/10 p-8 rounded-lg min-h-[320px] flex flex-col justify-between group hover:bg-surface/10 hover:border-secondary-container/50 transition-all duration-500 cursor-pointer reveal-up delay-300">
          <div class="w-12 h-12 rounded-DEFAULT bg-primary-container border border-white/5 flex items-center justify-center group-hover:bg-secondary-container/10 transition-colors">
            <span class="material-symbols-outlined text-[24px] text-on-surface group-hover:text-secondary-container transition-colors">deployed_code</span>
          </div>
          <div>
            <h3 class="font-body-lg text-body-lg text-on-surface font-semibold mb-3 group-hover:text-secondary-container transition-colors">Creative Engineering</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Bridging the gap between conceptual design and performant code, ensuring the vision is executed with absolute precision.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer Component -->
  <footer class="w-full py-section-gap border-t border-white/5 bg-surface dark:bg-surface text-secondary-container dark:text-secondary-container font-label-caps text-label-caps transition-all duration-200">
    <div class="flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto gap-8 md:gap-0">
      <div class="text-headline-md font-headline-md text-on-surface">
        STUDIO_X
      </div>
      <div class="flex flex-wrap justify-center gap-6 md:gap-8">
        <a class="text-on-surface-variant hover:text-secondary-container transition-colors" href="#">Instagram</a>
        <a class="text-on-surface-variant hover:text-secondary-container transition-colors" href="#">LinkedIn</a>
        <a class="text-on-surface-variant hover:text-secondary-container transition-colors" href="#">Dribbble</a>
        <a class="text-on-surface-variant hover:text-secondary-container transition-colors" href="mailto:hello@studiox.com">Email</a>
      </div>
      <div class="text-on-surface-variant text-center md:text-right">
        &copy; <?php echo date('Y'); ?> Creative Monolith. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="<?= asset('js/animations.js') ?>"></script>
</body>
</html>