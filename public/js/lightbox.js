/**
 * Lightbox Viewer untuk Portfolio Items
 */
document.addEventListener('DOMContentLoaded', () => {
  // 1. Buat elemen Modal Lightbox secara dinamis
  const lightboxOverlay = document.createElement('div');
  lightboxOverlay.id = 'lightbox-modal';
  lightboxOverlay.className = `
    fixed inset-0 z-[100] hidden items-center justify-center 
    bg-black/90 p-4 backdrop-blur-md transition-all duration-300 opacity-0
  `;

  lightboxOverlay.innerHTML = `
    <!-- Tombol Close -->
    <button id="lightbox-close" class="absolute top-6 right-6 z-[101] text-white hover:text-secondary-container transition-colors focus:outline-none" aria-label="Close modal">
      <span class="material-symbols-outlined text-4xl">close</span>
    </button>
    
    <!-- Container Gambar & Captions -->
    <div class="relative max-w-5xl max-h-[90vh] flex flex-col items-center justify-center">
      <img id="lightbox-img" class="max-h-[80vh] w-auto max-w-full rounded-lg object-contain shadow-2xl transition-transform duration-300 scale-95" src="" alt="">
      <div id="lightbox-caption" class="mt-4 text-center">
        <span id="lightbox-tag" class="text-xs uppercase tracking-wider text-secondary-container font-semibold"></span>
        <h3 id="lightbox-title" class="text-xl font-bold text-white mt-1"></h3>
      </div>
    </div>
  `;

  document.body.appendChild(lightboxOverlay);

  const modalImg = document.getElementById('lightbox-img');
  const modalTag = document.getElementById('lightbox-tag');
  const modalTitle = document.getElementById('lightbox-title');
  const closeBtn = document.getElementById('lightbox-close');

  // 2. Fungsi Buka Lightbox
  function openLightbox(src, alt, title = '', tag = '') {
    modalImg.src = src;
    modalImg.alt = alt;
    modalTitle.textContent = title;
    modalTag.textContent = tag;

    // Tampilkan modal
    lightboxOverlay.classList.remove('hidden');
    lightboxOverlay.classList.add('flex');
    
    // Trigger animasi fade & scale
    setTimeout(() => {
      lightboxOverlay.classList.remove('opacity-0');
      lightboxOverlay.classList.add('opacity-100');
      modalImg.classList.remove('scale-95');
      modalImg.classList.add('scale-100');
    }, 10);

    // Kunci scroll body saat modal terbuka
    document.body.style.overflow = 'hidden';
  }

  // 3. Fungsi Tutup Lightbox
  function closeLightbox() {
    lightboxOverlay.classList.remove('opacity-100');
    lightboxOverlay.classList.add('opacity-0');
    modalImg.classList.remove('scale-100');
    modalImg.classList.add('scale-95');

    setTimeout(() => {
      lightboxOverlay.classList.remove('flex');
      lightboxOverlay.classList.add('hidden');
      modalImg.src = '';
      document.body.style.overflow = '';
    }, 300);
  }

  // 4. Hubungkan Event Listener ke Semua Kartu Work/Portofolio
  // Menargetkan link/card project di dalam section #work
  const projectCards = document.querySelectorAll('#work a.group');

  projectCards.forEach((card) => {
    card.addEventListener('click', (e) => {
      e.preventDefault(); // Mencegah reload/navigasi jika tautan "#"

      const img = card.querySelector('img');
      const tagElement = card.querySelector('span');
      const titleElement = card.querySelector('h2, h3');

      if (img) {
        const src = img.getAttribute('src');
        const alt = img.getAttribute('alt') || '';
        const tag = tagElement ? tagElement.innerText : '';
        const title = titleElement ? titleElement.innerText : '';

        openLightbox(src, alt, title, tag);
      }
    });
  });

  // 5. Event Listener untuk Tutup Modal
  closeBtn.addEventListener('click', closeLightbox);

  // Klik di luar gambar untuk menutup
  lightboxOverlay.addEventListener('click', (e) => {
    if (e.target === lightboxOverlay) {
      closeLightbox();
    }
  });

  // Tekan tombol ESC keyboard untuk menutup
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !lightboxOverlay.classList.contains('hidden')) {
      closeLightbox();
    }
  });
});