<!DOCTYPE html>
<html lang="de">
<script>
  (function() {
    const storedTheme = localStorage.getItem('theme') || 'auto';
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const theme = storedTheme === 'auto' ? (prefersDark ? 'dark' : 'light') : storedTheme;
    document.documentElement.setAttribute('data-bs-theme', theme);
  })();
</script>
<?php include_once 'helper/svg.php'; ?>

<head>
  <meta charset="UTF-8">
  <title>Pixeljagd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @font-face {
      font-family: 'JetBrains Mono';
      src: url('assets/fonts/JetBrainsMono-VariableFont_wght.ttf') format('truetype');
      font-style: normal;
    }

    .JetBrains {
      font-family: 'JetBrains Mono', sans-serif;
      font-weight: 400;
      font-size: .7em;
      color: rgba(var(--bs-body-color-rgb), 0.85);
    }

    .JetBrainsHeader {
      font-family: 'JetBrains Mono', sans-serif;
      font-weight: 400;
      font-size: 1.2em;
    }

    .JetBrainsVersionen {
      font-family: 'JetBrains Mono', sans-serif;
      font-weight: 400;
      font-size: .9em;
    }

    .JetBrainsFooter {
      font-family: 'JetBrains Mono', sans-serif;
      font-weight: 400;
      font-size: .74em;
    }

    html,
    body {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    main#gameArea {
      flex: 1;
      position: relative;
      background: var(--bs-body-bg);
      overflow: hidden;
    }

    header,
    footer {
      background-color: var(--bs-body-bg);
      border-bottom: 1px solid var(--bs-border-color-translucent);
      border-top: 1px solid var(--bs-border-color-translucent);
      padding: 0.75rem 1rem;
    }

    #gameArea {
      position: relative;
      height: calc(100vh - 112px);
      background: var(--bs-body-bg);
      overflow: hidden;
      cursor: crosshair
    }

    #pixel {
      position: absolute;
      width: 1px;
      height: 1px;
      background: transparent;
      z-index: 10;
    }

    .toast-container {
      position: fixed;
      top: 1rem;
      right: 1rem;
      z-index: 1055;
    }

    .custom-link {
      text-decoration: underline;
      text-decoration-color: rgba(var(--bs-body-color-rgb), 0.50);
      color: rgba(var(--bs-body-color-rgb), 0.85);
    }

    @media (max-width: 576px) {
      footer {
        padding: 0.5rem 0.25rem;
        font-size: 0.75rem;
        line-height: 1.5;
      }
    }

    .modal-close-button {
      background-color: var(--bs-body-bg);
      /* Modal-Farbe */
      border: none;
      box-shadow: none;
      display: flex;
      align-items: center;
      /* vertikal */
      justify-content: center;
      /* horizontal */
      padding: 0;
      overflow: hidden;
    }

    .modal-close-button:hover,
    .modal-close-button:focus {
      background-color: var(--bs-body-bg);
      box-shadow: none;
    }

    .modal-close-button svg {
      width: 28px;
      height: 28px;
      color: var(--bs-body-color);
    }

    .modal-times-wrapper {
      position: relative;
      width: 100%;
      height: 20px;
      margin-top: -50px;
      /* Bild ragt oben aus dem Modal */
      display: flex;
      justify-content: center;
      z-index: 1;
    }

    /* Globales SVG-Styling */

    .svg-icon,
    .icon {
      height: 1em;
      width: 1em;
      vertical-align: -0.125em;
    }

    .bd-mode-toggle .bi {
      width: 1em;
      height: 1em;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>
</head>

<body>

<header class="d-flex justify-content-between align-items-center px-3 py-2">
  <!-- Titel links -->
  <span class="h5 m-0">🎯 PixelJagd</span>

  <!-- Button-Container rechts -->
  <div class="d-flex align-items-center gap-3">
    <!-- Menü-Button -->
    <div class="dropdown">
      <button class="btn btn-sm d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Menü
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#hilfeModal"><?= gamepad('1.6em', '1.6em', 'currentColor', 'me-1'); ?> Willkommen</a></li>
        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#versionModal"><?= version('1.6em', '1.6em', 'currentColor', 'me-1'); ?> Versionen</a></li>
      </ul>
    </div>

    <!-- Theme-Button -->
    <div class="dropdown bd-mode-toggle">
      <button class="btn btn-sm d-flex align-items-center"
        id="bd-theme"
        type="button"
        aria-expanded="false"
        data-bs-toggle="dropdown"
        aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" aria-hidden="true">
          <use href="#circle-half"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#sun-fill"></use>
            </svg>
            Light
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#moon-stars-fill"></use>
            </svg>
            Dark
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#circle-half"></use>
            </svg>
            Auto
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
      </ul>
    </div>
  </div>
</header>


  <main id="gameArea">
    <div id="pixel"></div>
  </main>

  <footer class="text-center small JetBrains">
    <?= copyright('1em', '1em', 'currentColor', 'svg-icon'); ?> <?php echo date("Y"); ?> Pixeljagd<sup><a href="" class="custom-link" data-bs-toggle="modal" data-bs-target="#versionModal">v.0.1</a></sup> by <a href="https://rondev.de" class="custom-link" target="_blank">RonDev</a><br>
    Finde den kleinsten Pixel der Welt!
  </footer>

  <!-- Modal Gefunden -->
  <div class="modal fade" id="foundModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center">
        <div class="modal-header">
          <h5 class="modal-title">Gefunden!</h5>
        </div>
        <div class="modal-body">
          <p>Du hast mich gefunden!</p>
          <div style="font-size: 3rem;">🟧</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Version -->
  <div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="versionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content pt-5 pb-1 px-3">
        <div class="modal-times-wrapper">
          <button type="button" class="btn modal-close-button rounded-circle position-absolute top-0 start-50 translate-middle" data-bs-dismiss="modal" aria-label="Close" style="width: 48px; height: 48px; transform: translate(-50%, -50%);">
            <?= getCloseIcon(); ?>
          </button>
        </div>
        <div class="modal-header">
          <h5 class="modal-title JetBrainsHeader"><?= version(); ?> Versionen</h5>
        </div>
        <div class="modal-body JetBrainsVersionen">
          <p class="fw-semibold mb-0">Version 0.1</p>
          <p class="fw-light mb-0"><?= bug('1.2em', '1.2em', '#ff322e', 'me-1', 'Aktueller Bug'); ?>Bug aktuell</p>
          <p class="fw-light mb-0"><?= bug('1.2em', '1.2em', '#7fbb00', 'me-1', 'Bug behoben'); ?>Bug behoben</p>
        </div>
        <div class="modal-footer fw-lighter JetBrainsFooter">
          <p>Diese Webseite ist seit <span class="fw-bold onlineZeit"></span> online.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Anleitung -->
  <div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="hilfeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content pt-5 pb-1 px-3">
        <div class="modal-img-wrapper">
          <button type="button" class="btn modal-close-button rounded-circle position-absolute top-0 start-50 translate-middle" data-bs-dismiss="modal" aria-label="Close" style="width: 48px; height: 48px; transform: translate(-50%, -50%);">
            <?= getCloseIcon(); ?>
          </button>
        </div>
        <div class="modal-header">
          <h5 class="modal-title JetBrainsVersionen">Willkommen bei Pixeljagd!</h5>
        </div>
        <div class="modal-body lh-1 JetBrainsVersionen">
          <p class="fw-light mb-2">
            Deine Aufgabe ist einfach – und doch herausfordernd: Finde den winzig kleinen, fast unsichtbaren Pixel auf dem Spielfeld! 🕵️‍♂️
          </p>
          <p class="fw-light mb-2">
            Klicke einfach auf die Fläche. Wenn du daneben klickst, bekommst du einen kleinen Hinweis. Hast du den Pixel gefunden, erwartet dich eine kleine Belohnung!
          </p>
          <p class="fw-light mb-2">
            Über das Menü oben kannst du auch zwischen hellen und dunklen Designs wechseln – je nachdem, was für deine Augen am angenehmsten ist. Der Pixel bleibt aber dennoch fast usichtbar!
          </p>
          <p class="fw-light mb-0">
            Viel Spaß und viel Erfolg bei der Suche! 🎯
          </p>
        </div>
        <div class="modal-footer fw-lighter JetBrainsFooter">
          <p>Diese Webseite ist seit <span class="fw-bold onlineZeit"></span> online.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Toasts -->
  <div class="toast-container" id="toastContainer"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
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
  </script>

  <script>
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
  </script>

  <script>
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
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const modalShown = localStorage.getItem('hilfeModalShown');

      if (!modalShown) {
        const hilfeModal = new bootstrap.Modal(document.getElementById('hilfeModal'));
        hilfeModal.show();

        // Setze den Marker, damit es beim nächsten Laden nicht mehr automatisch erscheint
        localStorage.setItem('hilfeModalShown', 'true');
      }
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    })
  </script>

  <script>
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
  </script>

</body>

</html>