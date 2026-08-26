<!doctype html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hixed.nd - Work</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="<?= asset('js/tailwind-config.js') ?>"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body class="flex min-h-screen flex-col overflow-x-hidden font-sans antialiased selection:bg-secondary-container selection:text-white">

  <!-- Header -->
  <header class="fixed top-0 z-50 w-full border-b border-white/10 bg-surface/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-container-max items-center justify-between px-margin-mobile py-6 md:px-margin-desktop">
      <a class="text-headline font-extrabold tracking-tighter transition hover:opacity-80" href="/">Hixed.nd</a>
      <nav class="hidden items-center gap-gutter text-lg md:flex">
        <a class="text-on-surface-variant transition hover:text-on-surface" href="/">Home</a>
        <a class="border-b-2 border-secondary-container pb-1 font-bold text-secondary-container" href="/work">Work</a>
        <a class="text-on-surface-variant transition hover:text-on-surface" href="/about">About</a>
        <a class="text-on-surface-variant transition hover:text-on-surface" href="/contact">Contact</a>
      </nav>
      <a class="hidden bg-secondary-container px-6 py-3 text-label text-white transition hover:opacity-80 md:inline-flex" href="/contact">HIRE ME</a>
      <button class="md:hidden" aria-label="Open menu"><span class="material-symbols-outlined">menu</span></button>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow pb-section-gap pt-32">
    <section class="mx-auto mb-gutter max-w-container-max px-margin-mobile md:px-margin-desktop">
      <h1 class="mb-8 max-w-4xl text-display-mobile leading-tight md:text-display">
        <span id="typed-text" data-part1="KERJAAN " data-part2="GUAHHHH"></span><span class="animate-pulse text-secondary-container">|</span>
      </h1>
      <p class="mt-4 max-w-2xl text-lg leading-relaxed text-on-surface-variant">A curated gallery of recent projects spanning digital product design, architectural visualization, and interactive spatial experiences. Highlighting precision and void.</p>
    </section>

    <section class="mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop">
      <div class="grid auto-rows-[400px] grid-cols-1 gap-gutter md:auto-rows-[500px] md:grid-cols-12">
      
      <a class="scroll-animate group relative overflow-hidden border border-transparent bg-surface transition duration-700 hover:border-secondary-container md:col-span-8" href="#">
          <!-- 1. Gambar dengan Filter Cinematic / Efek Film -->
          <img class="h-full w-full object-cover grayscale contrast-125 sepia-[0.25] brightness-90 transition-all duration-1000 ease-out group-hover:scale-[1.03] group-hover:grayscale-0 group-hover:sepia-0 group-hover:brightness-100 group-hover:contrast-100" 
               src="<?= asset('image/peace_03.jpg') ?>" 
               alt="Brutalist monolithic observatory">
          <!-- 2. Overlay Grain & Vignette Cinematic -->
          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/20 opacity-90 transition-opacity duration-700 group-hover:opacity-60"></div>
          <!-- 3. Teks Info -->
          <div class="absolute bottom-0 left-0 w-full translate-y-2 p-8 transition duration-500 group-hover:translate-y-0">
            <span class="mb-3 inline-block border border-outline bg-surface/50 px-3 py-1 text-label text-on-surface-variant backdrop-blur-md">T-Shirt Design</span>
            <h2 class="text-headline">Freedom</h2>
          </div>
        </a>

        <a class="scroll-animate group relative overflow-hidden border border-transparent bg-surface transition duration-700 hover:border-secondary-container md:col-span-4" href="#">
         <!-- Filter ditambahkan di elemen img: contrast-105 brightness-95 sepia-[0.20] hue-rotate-[-10deg] -->
          <img class="h-full w-full object-cover grayscale contrast-125 brightness-95 sepia-[0.20] transition-all duration-1000 ease-out group-hover:scale-[1.03] group-hover:grayscale-0 group-hover:sepia-0 group-hover:brightness-100 group-hover:contrast-100"
                src="<?= asset('image/dobermanfeed_03.jpg') ?>"
                alt="Nexus data platform">
  
          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/20 opacity-90 transition-opacity duration-700 group-hover:opacity-60"></div>
          <div class="absolute bottom-0 left-0 w-full translate-y-2 p-8 transition duration-500 group-hover:translate-y-0">
            <span class="mb-3 inline-block border border-outline bg-surface/50 px-3 py-1 text-label text-on-surface-variant backdrop-blur-md">T-Shirt Design</span>
              <h3 class="text-headline">Doberman</h3>
         </div>
        </a>

        <a class="project scroll-reveal group relative overflow-hidden border border-transparent bg-surface transition duration-700 hover:border-secondary-container md:col-span-5" href="#">
          <img class="h-full w-full object-cover grayscale contrast-125 brightness-95 sepia-[0.20] transition-all duration-1000 ease-out group-hover:scale-[1.03] group-hover:grayscale-0 group-hover:sepia-0 group-hover:brightness-100 group-hover:contrast-100"
               src="<?= asset('image/The Vessel.jpg') ?>"
               alt="Titanium mechanism">
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 w-full translate-y-2 p-8 transition duration-500 group-hover:translate-y-0">
            <span class="mb-3 inline-block border border-outline bg-surface/50 px-3 py-1 text-label text-on-surface-variant backdrop-blur-md">Illustratation Art</span>
            <h3 class="text-headline">The Vessel Many</h3>
          </div>
        </a>

        <a class="project scroll-reveal group relative overflow-hidden border border-transparent bg-surface transition duration-700 hover:border-secondary-container md:col-span-7" href="#">
          <img class="h-full w-full object-cover grayscale contrast-125 sepia-[0.25] brightness-90 transition-all duration-1000 ease-out group-hover:scale-[1.03] group-hover:grayscale-0 group-hover:sepia-0 group-hover:brightness-100 group-hover:contrast-100" 
          src="<?= asset('image/medusa.jpg') ?>"
          alt="Void residence interior">
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
          <div class="absolute bottom-0 left-0 w-full translate-y-2 p-8 transition duration-500 group-hover:translate-y-0">
            <span class="mb-3 inline-block border border-outline bg-surface/50 px-3 py-1 text-label text-on-surface-variant backdrop-blur-md">Illustratation Art</span>
            <h3 class="text-headline">Medusa</h3>
          </div>
        </a>
        

      </div>

      <div class="scroll-animate mt-gutter flex justify-center">
        <button class="border border-outline px-8 py-4 text-label transition hover:border-secondary-container hover:bg-surface-variant">LOAD MORE WORKS</button>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="border-t border-white/5 bg-surface py-section-gap">
    <div class="mx-auto flex max-w-container-max flex-col items-center justify-between gap-8 px-margin-mobile md:flex-row md:px-margin-desktop">
      <a class="text-headline" href="/">STUDIO_X</a>
      <div class="flex gap-6 text-label text-on-surface-variant">
        <a class="hover:text-secondary-container" href="#">Instagram</a>
        <a class="hover:text-secondary-container" href="#">LinkedIn</a>
        <a class="hover:text-secondary-container" href="#">Dribbble</a>
        <a class="hover:text-secondary-container" href="mailto:hello@studiox.com">Email</a>
      </div>
      <span class="text-label text-on-surface-variant">&copy; <?php echo date('Y'); ?> Creative Monolith.</span>
    </div>
  </footer>

  <script src="<?= asset('js/animations.js') ?>"></script>
  <script src="<?= asset('js/lightbox.js') ?>"></script>
</body>
</html>