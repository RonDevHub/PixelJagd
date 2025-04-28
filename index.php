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
  <link href="assets\css\style.css" rel="stylesheet">
  <link href="assets\css\bootstrap.min.css" rel="stylesheet">
  
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

  <script src="assets\js\bootstrap.bundle.min.js"></script>
  <script src="assets\js\scripts.js"></script>

</body>

</html>