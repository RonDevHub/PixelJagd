let found = false;

    const pixel = document.getElementById('pixel');
    const gameArea = document.getElementById('gameArea');
    const areaRect = gameArea.getBoundingClientRect();
    const posX = Math.floor(Math.random() * (areaRect.width - 1));
    const posY = Math.floor(Math.random() * (areaRect.height - 1));
    pixel.style.left = `${posX}px`;
    pixel.style.top = `${posY}px`;

    pixel.addEventListener('click', (e) => {
      e.stopPropagation();
      found = true;
      const modal = new bootstrap.Modal(document.getElementById('foundModal'));
      modal.show();
    });

    gameArea.addEventListener('click', (e) => {
      if (!found && e.target !== pixel) {
        showToast("Da bin ich nicht – such weiter!");
      }
    });

    // Toast Funktion
    function showToast(message) {
      const toastContainer = document.getElementById('toastContainer');
      toastContainer.innerHTML = ''; // Alte Toasts vorher entfernen

      const toast = document.createElement('div');
      toast.className = 'toast align-items-center text-white bg-primary bg-opacity-75 bg-gradient border-0';
      toast.role = 'alert';
      toast.ariaLive = 'assertive';
      toast.ariaAtomic = 'true';
      toast.innerHTML = `
    <div class="d-flex">
      <div class="toast-body">${message}</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>`;

      toastContainer.appendChild(toast);
      const bsToast = new bootstrap.Toast(toast);
      bsToast.show();
    }

    function berechneOnlineZeit(startDatumString) {
        const startDatum = new Date(startDatumString);
        const heute = new Date();
        const differenzMs = heute.getTime() - startDatum.getTime();
        const sekundenProTag = 1000 * 60 * 60 * 24;
  
        const differenzTage = Math.floor(differenzMs / sekundenProTag);
  
        if (differenzTage < 30) {
          return `${differenzTage} Tag${differenzTage === 1 ? '' : 'en'}`;
        } else if (differenzTage < 365) {
          const differenzMonate = Math.floor(differenzTage / 30);
          return `${differenzMonate} Monat${differenzMonate === 1 ? '' : 'en'}`;
        } else {
          const differenzJahre = Math.floor(differenzTage / 365.25);
          return `${differenzJahre} Jahr${differenzJahre === 1 ? '' : 'en'}`;
        }
      }
  
      // Startdatum deiner Webseite
      const startDatum = "2025-04-26";
  
      // Alle Elemente mit der Klasse "onlineZeit" auswählen
      const onlineZeitElemente = document.querySelectorAll(".onlineZeit");
  
      // Über alle Elemente drübergehen und Text setzen
      onlineZeitElemente.forEach(el => {
        el.textContent = berechneOnlineZeit(startDatum);
      });

      (() => {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
        const getPreferredTheme = () => prefersDark.matches ? 'dark' : 'light';
        const getStoredTheme = () => localStorage.getItem('theme');
        const setStoredTheme = (theme) => localStorage.setItem('theme', theme);
        const applyTheme = (theme) => {
          const actualTheme = theme === 'auto' ? getPreferredTheme() : theme;
          document.documentElement.setAttribute('data-bs-theme', actualTheme);
        };
        const updateActiveIcon = (theme) => {
          const themeIcon = document.querySelector('.theme-icon-active use');
          const activeTheme = theme === 'auto' ? getPreferredTheme() : theme;
  
          // Icons
          const iconMap = {
            light: '#sun-fill',
            dark: '#moon-stars-fill',
            auto: '#circle-half'
          };
  
          // Set the correct icon in button
          themeIcon.setAttribute('href', iconMap[theme]);
  
          // Set aria-pressed and check mark visibility
          document.querySelectorAll('[data-bs-theme-value]').forEach(btn => {
            const btnTheme = btn.getAttribute('data-bs-theme-value');
            const isActive = btnTheme === theme;
            btn.setAttribute('aria-pressed', isActive);
            btn.querySelector('svg.ms-auto').classList.toggle('d-none', !isActive);
          });
        };
  
        const setTheme = (theme) => {
          setStoredTheme(theme);
          applyTheme(theme);
          updateActiveIcon(theme);
        };
  
        // Initial Theme Setup
        const initTheme = () => {
          const storedTheme = getStoredTheme() || 'auto';
          applyTheme(storedTheme);
          updateActiveIcon(storedTheme);
        };
  
        // Listen for dropdown clicks
        window.addEventListener('DOMContentLoaded', () => {
          initTheme();
          document.querySelectorAll('[data-bs-theme-value]').forEach(btn => {
            btn.addEventListener('click', () => {
              const theme = btn.getAttribute('data-bs-theme-value');
              setTheme(theme);
            });
          });
        });
  
        // Listen to system preference changes if auto is active
        prefersDark.addEventListener('change', () => {
          if (getStoredTheme() === 'auto') {
            applyTheme('auto');
            updateActiveIcon('auto');
          }
        });
      })();

      document.addEventListener('DOMContentLoaded', () => {
        const modals = document.querySelectorAll('.modal');
  
        modals.forEach(modal => {
          modal.addEventListener('hide.bs.modal', () => {
            if (document.activeElement && modal.contains(document.activeElement)) {
              document.activeElement.blur();
            }
          });
        });
      });

      // Tooltip erscheint nun auch bei anderen Objekten außer bei a & button Atributen
      document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        })
      })

      document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleMenu');
        const offcanvas = document.getElementById('customOffcanvas');
        const closeButton = document.getElementById('closeOffcanvas');
        
        toggleButton.addEventListener('click', function() {
          offcanvas.classList.toggle('active');
          document.body.classList.toggle('body-shift');
          
          // Buttontext wechseln
          if (offcanvas.classList.contains('active')) {
            toggleButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 389.24"><path fill-rule="nonzero" d="M0 0h275.1v50.04H0V0zm361.79 115.14 54.44 54.44H0v50.04h416.2l-54.41 54.41 35.39 35.39L512 194.6v-.03l-35.39-35.36-79.43-79.46-35.39 35.39zM0 339.2h275.1v50.04H0V339.2z"/></svg>';
          } else {
            toggleButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 389.24"><path fill-rule="nonzero" d="M512 50.04H236.9V0H512v50.04zm-361.79 65.1-54.45 54.44H512v50.04H95.79l54.42 54.41-35.39 35.39L0 194.6v-.03l35.39-35.36 79.43-79.46 35.39 35.39zM512 389.24H236.9V339.2H512v50.04z"/></svg>';
          }
        });
      
        // Neu: Close-Button
        closeButton.addEventListener('click', function() {
          offcanvas.classList.remove('active');
          document.body.classList.remove('body-shift');
          toggleButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 389.24"><path fill-rule="nonzero" d="M512 50.04H236.9V0H512v50.04zm-361.79 65.1-54.45 54.44H512v50.04H95.79l54.42 54.41-35.39 35.39L0 194.6v-.03l35.39-35.36 79.43-79.46 35.39 35.39zM512 389.24H236.9V339.2H512v50.04z"/></svg>'; // Buttontext zurücksetzen
        });
      });
      
      const words = [
        "Pixel-Schubser",
        "CSS-Magier",
        "Bug-Bändiger",
        "Semikolon-Therapeut",
        "404 Error Fixer",
        "Digital Nomad – aber mit Couch",
        "Frontend Ninja"
      ];
      
      let index = 0;
      const title = document.getElementById("fun-title");
      
      function animateWord(word) {
        title.style.animation = "none"; // Reset Animation
        title.offsetHeight; // Trigger Reflow
        title.textContent = word;
        title.style.opacity = 0;
        title.style.animation = "slideIn 0.4s ease forwards";
      
        // Nach kurzer Zeit ausblenden
        setTimeout(() => {
          title.style.animation = "slideOut 0.4s ease forwards";
        }, 2600); // Wort bleibt 1.6s sichtbar
      }
      
      function loopWords() {
        animateWord(words[index]);
        index = (index + 1) % words.length;
        setTimeout(loopWords, 3000); // alle 2 Sekunden neues Wort
      }
      
      loopWords();