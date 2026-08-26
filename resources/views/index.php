<!doctype html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hixed.nd</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="<?= asset('js/tailwind-config.js') ?>"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body class="min-h-screen font-sans antialiased selection:bg-secondary-container selection:text-white">
  <nav class="fixed top-0 z-50 w-full border-b border-white/10 bg-surface/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-container-max items-center justify-between px-margin-mobile py-6 md:px-margin-desktop">
      <a class="text-headline font-extrabold tracking-tighter" href="/">Hixed.nd</a>
      <div class="hidden items-center gap-8 text-lg md:flex">
        <a class="border-b-2 border-secondary-container pb-1 font-bold text-secondary-container" href="/">Home</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/work">Work</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/about">About</a>
        <a class="text-on-surface-variant hover:text-on-surface" href="/contact">Contact</a>
      </div>
      <a class="hidden bg-secondary-container px-6 py-3 text-label text-white hover:opacity-80 md:block" href="/contact">HIRE ME</a>
      <button class="md:hidden" aria-label="Open menu"><span class="material-symbols-outlined">menu</span></button>
    </div>
  </nav>

  <main id="home" class="pt-[120px]">

    <section class="scroll-reveal relative overflow-hidden mx-auto flex min-h-[750px] max-w-container-max flex-col items-center justify-center px-margin-mobile py-section-gap md:px-margin-desktop text-center">
  <!-- BACKGROUND BUBBLE ANIMATION START -->
  <div class="pointer-events-none absolute -inset-20 -z-10 overflow-hidden">
    <div class="absolute top-0 left-12 h-96 w-96 animate-blob rounded-full bg-secondary-container/20 mix-blend-screen filter blur-3xl opacity-70"></div>
    <div class="absolute top-1/4 right-0 h-[500px] w-[500px] animate-blob animation-delay-2000 rounded-full bg-purple-600/15 mix-blend-screen filter blur-3xl opacity-60"></div>
    <div class="absolute -bottom-10 left-1/3 h-96 w-96 animate-blob animation-delay-4000 rounded-full bg-blue-500/15 mix-blend-screen filter blur-3xl opacity-50"></div>
  </div>
  <!-- BACKGROUND BUBBLE ANIMATION END -->

  <!-- CONTAINER FOTO DAN TEKS BACKDROP -->
  <div class="relative w-full flex items-center justify-center min-h-[420px] md:min-h-[550px] my-4">
    
    <!-- TEKS DI BELAKANG FOTO (Layer Z-0 dengan Efek Pop Up & Glow) -->
    <h1 class="absolute z-0 w-full text-center text-5xl font-black uppercase tracking-tighter sm:text-7xl md:text-9xl lg:text-[11rem] select-none text-white/15 drop-shadow-2xl leading-none transition-transform duration-700 hover:scale-105">
      <span id="typed-text" data-part1="PORTOFOLIO " data-part2="GUAHHHHH"></span><span class="animate-pulse text-secondary-container">|</span>
    </h1>

    <!-- WRAPPER FOTO ORANG (Layer Z-10 dengan Efek Pop Up / Zoom Hover) -->
    <div class="group relative z-10 mx-auto w-80 md:w-[620px] lg:w-[720px] max-w-full overflow-hidden transition-all duration-500 ease-out hover:scale-105 hover:-translate-y-2">
      
      <!-- FOTO ORANG -->
      <img 
        src="<?= asset('image/jacket.png') ?>" 
        alt="Profile" 
        class="w-full h-auto object-cover block relative z-10 transition-transform duration-500 group-hover:scale-105" 
      />

      <!-- EFEK GRADIENT PUDAR (Presisi di bagian bawah baju) -->      
    </div>
  </div>

  <!-- KONTEN TEKS & BUTTON -->
  <div class="relative z-20 flex flex-col items-center mt-4">
    <p class="scroll-reveal mb-8 max-w-2xl text-center text-base md:text-lg leading-relaxed text-on-surface-variant">
      Forging digital experiences with architectural precision. We operate at the intersection of stark minimalism and fluid interaction, crafting interfaces that command attention and elevate brand presence through meticulous engineering and pure aesthetic intent.
    </p>

    <div class="scroll-reveal flex flex-wrap justify-center gap-4">
      <a class="bg-secondary-container px-8 py-4 text-label text-white hover:opacity-80 transition-all hover:scale-105 active:scale-95" href="/work">VIEW ARCHIVE</a>
      <a class="glass px-8 py-4 text-label text-white hover:bg-white/10 transition-all hover:scale-105 active:scale-95" href="/contact">INITIATE CONTACT</a>
    </div>
  </div>
</section>
    <section id="work" class="mx-auto max-w-container-max px-margin-mobile py-section-gap md:px-margin-desktop">
      <div class="scroll-reveal mb-12 border-b border-white/10 pb-4">
        <h2 class="text-display-mobile tracking-tighter md:text-display">Work Results</h2>
      </div>
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
      <div class="scroll-reveal mt-gutter flex justify-center">
        <button class="border border-outline px-8 py-4 text-label text-on-surface transition hover:border-secondary-container hover:bg-surface-container">LOAD MORE WORKS</button>
      </div>
    </section>

    <section id="work" class="mx-auto max-w-container-max px-margin-mobile py-section-gap md:px-margin-desktop">
      <div class="scroll-reveal mb-12 border-b border-white/10 pb-4">
        <h4 class="text-display-mobile tracking-tighter md:text-display">Software Skill</h4>
      </div>
    </section>
<!-- Dock Software Slide Section -->
<!-- Dock Software Slide Section -->
<section class="flex flex-col items-center justify-center py-16">    
  <!-- Track Slide Icon -->
  <div id="dock-track" class="scroll-reveal flex items-center justify-center gap-3 md:gap-4">
    
    <!-- Photoshop -->
    <button type="button" 
            class="app-icon group relative flex h-20 w-20 md:h-24 md:w-24 shrink-0 items-center justify-center overflow-hidden rounded-2xl bg-[#002140] transition-all duration-300 ease-out hover:-translate-y-3 hover:scale-110 hover:shadow-[0_15px_30px_rgba(0,0,0,0.5)] active:scale-95 focus:outline-none" 
            title="Photoshop">
      <img src="<?= asset('image/ps.png') ?>" alt="Photoshop" class="h-12 w-12 md:h-16 md:w-16 object-contain pointer-events-none transition-transform duration-300 group-hover:scale-110" />
    </button>

    <!-- Illustrator -->
    <button type="button" 
            class="app-icon group relative flex h-20 w-20 md:h-24 md:w-24 shrink-0 items-center justify-center overflow-hidden rounded-2xl bg-[#320001] transition-all duration-300 ease-out hover:-translate-y-3 hover:scale-110 hover:shadow-[0_15px_30px_rgba(0,0,0,0.5)] active:scale-95 focus:outline-none" 
            title="Illustrator">
      <img src="<?= asset('image/ai.png') ?>" alt="Illustrator" class="h-12 w-12 md:h-16 md:w-16 object-contain pointer-events-none transition-transform duration-300 group-hover:scale-110" />
    </button>

    <!-- Figma -->
    <button type="button" 
            class="app-icon active group relative flex h-20 w-20 md:h-24 md:w-24 shrink-0 items-center justify-center overflow-hidden rounded-2xl bg-[#000000] transition-all duration-300 ease-out hover:-translate-y-3 hover:scale-110 hover:shadow-[0_15px_30px_rgba(0,0,0,0.5)] active:scale-95 focus:outline-none" 
            title="Figma">
      <img src="<?= asset('image/figma.png') ?>" alt="Figma" class="h-12 w-12 md:h-16 md:w-16 object-contain pointer-events-none transition-transform duration-300 group-hover:scale-110" />
    </button>

    <!-- Procreate -->
    <button type="button" 
            class="app-icon group relative flex h-20 w-20 md:h-24 md:w-24 shrink-0 items-center justify-center overflow-hidden rounded-2xl bg-[#242424] transition-all duration-300 ease-out hover:-translate-y-3 hover:scale-110 hover:shadow-[0_15px_30px_rgba(0,0,0,0.5)] active:scale-95 focus:outline-none" 
            title="Procreate">
      <img src="<?= asset('image/procreate.png') ?>" alt="Procreate" class="h-12 w-12 md:h-16 md:w-16 object-contain pointer-events-none transition-transform duration-300 group-hover:scale-110" />
    </button>

    <!-- CapCut -->
    <button type="button" 
            class="app-icon group relative flex h-20 w-20 md:h-24 md:w-24 shrink-0 items-center justify-center overflow-hidden rounded-2xl bg-[#ffffff] transition-all duration-300 ease-out hover:-translate-y-3 hover:scale-110 hover:shadow-[0_15px_30px_rgba(0,0,0,0.5)] active:scale-95 focus:outline-none" 
            title="CapCut">
      <img src="<?= asset('image/capcut.png') ?>" alt="CapCut" class="h-12 w-12 md:h-16 md:w-16 object-contain pointer-events-none transition-transform duration-300 group-hover:scale-110" />
    </button>
    
  </div>
</section>

    <section id="contact" class="mx-auto max-w-container-max px-margin-mobile py-section-gap md:px-margin-desktop">
      <div class="scroll-reveal border-t border-white/10 pt-12">
        <p class="text-label text-secondary-container">START A PROJECT</p>
        <h2 class="my-4 max-w-2xl text-display-mobile md:text-display">Let’s build something exceptional.</h2>
        <a class="inline-block bg-secondary-container px-8 py-4 text-label text-white" href="mailto:hello@studiox.com">HELLO@STUDIOX.COM</a>
      </div>
    </section>
  </main>

  <footer class="border-t border-white/5 bg-surface py-16">
    <div class="mx-auto flex max-w-container-max flex-col items-center justify-between gap-6 px-margin-mobile text-label text-on-surface-variant md:flex-row md:px-margin-desktop">
      <strong class="text-headline text-on-surface">STUDIO_X</strong>
      <div class="flex gap-6">
        <a href="#">Instagram</a>
        <a href="#">LinkedIn</a>
        <a href="#">Dribbble</a>
      </div>
      <span>&copy; <?php echo date('Y'); ?> Creative Monolith.</span>
    </div>
  </footer>

  <script src="<?= asset('js/animations.js') ?>"></script>
  <script src="<?= asset('js/lightbox.js') ?>"></script>
</body>
</html>
