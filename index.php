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
<?php include_once 'helper/modals.php'; ?>

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

  <!-- Toasts -->
  <div class="toast-container" id="toastContainer"></div>

  <script src="assets\js\bootstrap.bundle.min.js"></script>
  <script src="assets\js\scripts.js"></script>

</body>

</html>