/**
 * Centralized Animations & Interactions
 * Handles Typewriter Effects, Scroll Reveal, and UI interactions.
 */

document.addEventListener("DOMContentLoaded", () => {
  // ==========================================================================
  // 1. Typewriter Animation
  // ==========================================================================
  const typedElement = document.getElementById("typed-text");
  if (typedElement) {
    const textPart1 = typedElement.getAttribute("data-part1") || "PORTOFOLIO ";
    const textPart2 = typedElement.getAttribute("data-part2") || "";
    let index = 0;
    const speed = 100; // milliseconds per character

    const span2 = document.createElement("span");
    span2.className = "text-secondary-container";

    function typeWriter() {
      const totalFirstLength = textPart1.length;
      const totalLength = textPart1.length + textPart2.length;

      if (index < totalFirstLength) {
        typedElement.appendChild(document.createTextNode(textPart1.charAt(index)));
        index++;
        setTimeout(typeWriter, speed);
      } else if (index < totalLength) {
        if (index === totalFirstLength) {
          typedElement.appendChild(span2);
        }
        const secondIndex = index - totalFirstLength;
        span2.textContent += textPart2.charAt(secondIndex);
        index++;
        setTimeout(typeWriter, speed);
      }
    }

    typeWriter();
  }

  // ==========================================================================
  // 2. Scroll Reveal Animations (IntersectionObserver)
  // ==========================================================================
  const revealElements = document.querySelectorAll(
    ".scroll-reveal, .scroll-animate, .reveal-up"
  );

  if (revealElements.length > 0) {
    if ("IntersectionObserver" in window) {
      const observerOptions = {
        root: null,
        rootMargin: "0px 0px -50px 0px",
        threshold: 0.1,
      };

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("revealed", "active", "visible", "is-visible");
            obs.unobserve(entry.target);
          }
        });
      }, observerOptions);

      revealElements.forEach((el) => observer.observe(el));
    } else {
      // Fallback for browsers without IntersectionObserver
      revealElements.forEach((el) => {
        el.classList.add("revealed", "active", "visible", "is-visible");
      });
    }
  }

  // ==========================================================================
  // 3. Bubble Slide / App Icons Dock Interaction (Click Membesar / Mengecil)
  // ==========================================================================
  const appIcons = document.querySelectorAll(".app-icon");
  const dockContainer = document.getElementById("dock-container");

  if (appIcons.length > 0) {
    appIcons.forEach((icon) => {
      icon.addEventListener("click", (event) => {
        event.stopPropagation(); // Cegah event bubbling ke document

        const isCurrentlyActive = icon.classList.contains("active");

        // Hapus kelas 'active' dari semua ikon agar mengecil
        appIcons.forEach((item) => item.classList.remove("active"));

        // Jika ikon ini sebelumnya belum aktif, jadikan 'active' agar membesar.
        // Jika sebelumnya sudah aktif, dibiarkan tanpa 'active' (mengecil kembali).
        if (!isCurrentlyActive) {
          icon.classList.add("active");
        }
      });
    });

    // Jika mengklik di luar area dock, semua ikon akan mengecil kembali
    document.addEventListener("click", (event) => {
      if (!dockContainer || !dockContainer.contains(event.target)) {
        appIcons.forEach((item) => item.classList.remove("active"));
      }
    });
  }
});