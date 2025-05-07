// Erweiterte Konfetti-Funktion mit "Sammeln"-Effekt und Brand-Icon-Feuerwerk
document.addEventListener("DOMContentLoaded", () => {
  const sounds = [
    "assets/sounds/applause.wav",
    "assets/sounds/cheer.wav",
    "assets/sounds/fireworks.wav",
  ];

  const brandIcons = {
    github: `<svg height="36" viewBox="0 -3.1 2490.3 2493" xmlns="http://www.w3.org/2000/svg"><ellipse cx="1245.2" cy="1243.4" fill="#fff" rx="1217.6" ry="1246.5"/><path d="m1245.2 1.6c-687.6 0-1245.2 557.4-1245.2 1245.1 0 550.2 356.8 1016.9 851.5 1181.5 62.2 11.5 85.1-27 85.1-59.9 0-29.7-1.2-127.8-1.7-231.8-346.4 75.3-419.5-146.9-419.5-146.9-56.6-143.9-138.3-182.2-138.3-182.2-113-77.3 8.5-75.7 8.5-75.7 125 8.8 190.9 128.3 190.9 128.3 111.1 190.4 291.3 135.3 362.3 103.5 11.2-80.5 43.4-135.4 79.1-166.5-276.6-31.5-567.3-138.3-567.3-615.4 0-135.9 48.6-247 128.3-334.2-12.9-31.3-55.5-157.9 12.1-329.4 0 0 104.6-33.5 342.5 127.6 99.3-27.6 205.8-41.4 311.7-41.9 105.8.5 212.4 14.3 311.9 41.9 237.7-161.1 342.1-127.6 342.1-127.6 67.8 171.5 25.1 298.2 12.2 329.5 79.8 87.2 128.1 198.3 128.1 334.2 0 478.2-291.3 583.6-568.6 614.4 44.7 38.6 84.5 114.4 84.5 230.6 0 166.6-1.4 300.7-1.4 341.7 0 33.1 22.4 72 85.5 59.7 494.5-164.8 850.8-631.4 850.8-1181.4 0-687.7-557.5-1245.1-1245.1-1245.1" fill="#5c6bc0"/></svg>`,
    chatgpt: `<svg height="36" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" class="h-6 w-6" viewBox="-0.17090198558635983 0.482230148717937 41.14235318283891 40.0339509076386"><text x="-9999" y="-9999">ChatGPT</text><path d="M37.532 16.87a9.963 9.963 0 0 0-.856-8.184 10.078 10.078 0 0 0-10.855-4.835A9.964 9.964 0 0 0 18.306.5a10.079 10.079 0 0 0-9.614 6.977 9.967 9.967 0 0 0-6.664 4.834 10.08 10.08 0 0 0 1.24 11.817 9.965 9.965 0 0 0 .856 8.185 10.079 10.079 0 0 0 10.855 4.835 9.965 9.965 0 0 0 7.516 3.35 10.078 10.078 0 0 0 9.617-6.981 9.967 9.967 0 0 0 6.663-4.834 10.079 10.079 0 0 0-1.243-11.813zM22.498 37.886a7.474 7.474 0 0 1-4.799-1.735c.061-.033.168-.091.237-.134l7.964-4.6a1.294 1.294 0 0 0 .655-1.134V19.054l3.366 1.944a.12.12 0 0 1 .066.092v9.299a7.505 7.505 0 0 1-7.49 7.496zM6.392 31.006a7.471 7.471 0 0 1-.894-5.023c.06.036.162.099.237.141l7.964 4.6a1.297 1.297 0 0 0 1.308 0l9.724-5.614v3.888a.12.12 0 0 1-.048.103l-8.051 4.649a7.504 7.504 0 0 1-10.24-2.744zM4.297 13.62A7.469 7.469 0 0 1 8.2 10.333c0 .068-.004.19-.004.274v9.201a1.294 1.294 0 0 0 .654 1.132l9.723 5.614-3.366 1.944a.12.12 0 0 1-.114.01L7.04 23.856a7.504 7.504 0 0 1-2.743-10.237zm27.658 6.437l-9.724-5.615 3.367-1.943a.121.121 0 0 1 .113-.01l8.052 4.648a7.498 7.498 0 0 1-1.158 13.528v-9.476a1.293 1.293 0 0 0-.65-1.132zm3.35-5.043c-.059-.037-.162-.099-.236-.141l-7.965-4.6a1.298 1.298 0 0 0-1.308 0l-9.723 5.614v-3.888a.12.12 0 0 1 .048-.103l8.05-4.645a7.497 7.497 0 0 1 11.135 7.763zm-21.063 6.929l-3.367-1.944a.12.12 0 0 1-.065-.092v-9.299a7.497 7.497 0 0 1 12.293-5.756 6.94 6.94 0 0 0-.236.134l-7.965 4.6a1.294 1.294 0 0 0-.654 1.132l-.006 11.225zm1.829-3.943l4.33-2.501 4.332 2.5v5l-4.331 2.5-4.331-2.5V18z" fill="currentColor"/></svg>`,
    bootstrap: `<svg height="36" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 408"><defs><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="76" y1="10" x2="523" y2="365"><stop offset="0" stop-color="#9013FE"/><stop offset="1" stop-color="#6610F2"/></linearGradient></defs><path fill="url(#a)" fill-rule="nonzero" d="M56.48 53.32C55.52 25.58 77.13 0 106.34 0H405.7c29.21 0 50.82 25.58 49.86 53.32-.93 26.65.27 61.16 8.96 89.31 8.72 28.23 23.41 46.08 47.48 48.37v26c-24.07 2.29-38.76 20.14-47.48 48.37-8.69 28.15-9.89 62.66-8.96 89.31.96 27.74-20.65 53.32-49.86 53.32H106.34c-29.21 0-50.82-25.58-49.86-53.32.93-26.65-.28-61.16-8.96-89.31C38.8 237.14 24.07 219.29 0 217v-26c24.07-2.29 38.8-20.14 47.52-48.37 8.68-28.15 9.89-62.66 8.96-89.31z"/><path fill="#fff" d="M342.9 251.1c0 38.2-28.5 61.36-75.8 61.36h-89.2v-217h88.74c39.44 0 65.32 21.35 65.32 54.13 0 23.01-17.4 43.62-39.59 47.22v1.21c30.2 3.31 50.53 24.21 50.53 53.08zm-130.49 33.84v-71.43h45.6c32.66 0 49.61 12.03 49.61 35.49s-16.48 35.94-47.6 35.94h-47.61zm0-161.96h45.91c24.96 0 39.13 11.13 39.13 31.28 0 21.5-16.48 33.53-46.37 33.53h-38.67v-64.81z"/></svg>`,
    batman: `<svg height="36" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.13 69.89"><defs><style>.cls-1{fill:#f7dd30;}</style></defs><title>batman</title><path class="cls-1" d="M121.06,35c0,18.71-26.86,33.88-60,33.88S1.06,53.66,1.06,35s26.87-33.89,60-33.89,60,15.17,60,33.89Z"/><path d="M51.72,24.46c-14.49,5.37-21.86-8-14.49-15.74-11.75,3-30.86,11.49-30.86,25.63,0,12.83,12.49,20.09,21.49,23.22-8.68-10.74,3.25-19.16,13.7-7.41C49.69,35.73,59.28,56.44,61,59.58h0c1.71-3.14,11.31-23.85,19.44-9.42,10.45-11.75,22.38-3.33,13.7,7.41,9-3.13,21.49-10.39,21.49-23.22,0-14.14-19.11-22.63-30.86-25.63,7.37,7.74,0,21.11-14.49,15.74-1.67-2-2.75-6.11-2.75-18.24-1.94,1.26-3.33,5.71-3.45,6a12,12,0,0,0-6.15,0c-.12-.32-1.51-4.77-3.45-6,0,12.13-1.08,16.25-2.75,18.24ZM122.13,35c0,9.76-6.93,18.56-18.12,24.88-11,6.22-26.2,10.06-42.95,10.06S29.13,66.05,18.12,59.83C6.92,53.51,0,44.71,0,35S6.92,16.39,18.12,10.07C29.13,3.85,44.32,0,61.06,0S93,3.85,104,10.07C115.2,16.39,122.13,25.18,122.13,35ZM103,58c10.52-5.94,17-14.09,17-23s-6.51-17.1-17-23c-10.7-6-25.52-9.78-41.91-9.78s-31.2,3.74-41.9,9.78C8.64,17.85,2.13,26,2.13,35S8.64,52,19.16,58c10.7,6.05,25.52,9.79,41.9,9.79S92.27,64,103,58Z"/></svg>`,

  };

  let isConfettiActive = false;

  const triggerConfetti = (brand) => {
    if (isConfettiActive) return;
    isConfettiActive = true;
  
    const audio = new Audio(sounds[Math.floor(Math.random() * sounds.length)]);
    audio.play().catch(() => {});
  
    const confettiCanvas = document.createElement("canvas");
    Object.assign(confettiCanvas.style, {
      position: "fixed",
      top: 0,
      left: 0,
      width: "100%",
      height: "100%",
      zIndex: 9998,
      pointerEvents: "none",
    });
    document.body.appendChild(confettiCanvas);
  
    const confettiInstance = confetti.create(confettiCanvas, {
      resize: true,
      useWorker: true,
    });
  
    const duration = 5000;
    const end = Date.now() + duration;
  
    const ground = document.createElement("div");
    Object.assign(ground.style, {
      position: "fixed",
      bottom: 0,
      left: 0,
      width: "100%",
      height: "80px",
      zIndex: 9997,
      pointerEvents: "none",
      overflow: "hidden",
    });
    document.body.appendChild(ground);
  
    const groundParticles = [];
    let groundStarted = false;
  
    (function frame() {
      const timeLeft = end - Date.now();
  
      if (timeLeft > 0) {
        confettiInstance({
          particleCount: 15, // 🔼 mehr Konfetti
          startVelocity: 30,
          spread: 360,
          origin: { x: Math.random(), y: Math.random() * 0.4 },
          ticks: 250,
          scalar: 1.1,
          gravity: 0.9,
          decay: 0.95,
          colors: ["#e91e63", "#3f51b5", "#ffc107", "#4caf50", "#00bcd4"],
        });
  
        // 🌟 Boden-Konfetti früh starten
        if (!groundStarted) {
          groundStarted = true;
          for (let i = 0; i < 80; i++) {
            const piece = document.createElement("div");
            piece.style.width = "8px";
            piece.style.height = "4px";
            piece.style.background = ["#e91e63", "#3f51b5", "#ffc107", "#4caf50", "#00bcd4"][Math.floor(Math.random() * 5)];
            piece.style.position = "absolute";
            piece.style.left = `${Math.random() * 100}%`;
            piece.style.bottom = "0";
            piece.style.transform = `translateY(20px) rotate(${Math.random() * 360}deg)`;
            piece.style.opacity = "0";
            piece.style.transition = "transform 1.5s ease-out, opacity 1.5s ease-out";
            ground.appendChild(piece);
            groundParticles.push(piece);
  
            // langsam reinfliegen lassen
            setTimeout(() => {
              piece.style.opacity = "1";
              piece.style.transform = `translateY(0) rotate(${Math.random() * 360}deg)`;
            }, 100 + Math.random() * 500);
          }
        }
  
        // gelegentlich ein Brand-Icon
        if (Math.random() < 0.07 && brandIcons[brand]) {
          const icon = document.createElement("div");
          icon.innerHTML = brandIcons[brand];
          icon.style.position = "fixed";
          icon.style.zIndex = 10000;
          icon.style.top = `${Math.random() * window.innerHeight}px`;
          icon.style.left = `${Math.random() * window.innerWidth}px`;
          icon.style.transition = "transform 4s ease-out, opacity 4s ease-out";
          document.body.appendChild(icon);
  
          setTimeout(() => {
            icon.style.transform = `scale(${1 + Math.random()}) rotate(${Math.random() * 720}deg)`;
            icon.style.opacity = "0";
          }, 75);
  
          setTimeout(() => icon.remove(), 5000);
        }
  
        requestAnimationFrame(frame);
      } else {
        // 🌙 Boden-Konfetti ausblenden
        setTimeout(() => {
          groundParticles.forEach((p) => {
            p.style.transition = "opacity 2s ease, transform 2s ease";
            p.style.opacity = "0";
            p.style.transform += " translateY(20px)";
          });
  
          setTimeout(() => {
            ground.remove();
            confettiCanvas.remove();
            isConfettiActive = false;
          }, 2500);
        }, 1500);
      }
    })();
  };
  

  document.querySelectorAll("[id^='konfetti-']").forEach((btn) => {
    btn.addEventListener("click", () => {
      const brand = btn.id.replace("konfetti-", "");
      triggerConfetti(brand);
    });
  });
});

