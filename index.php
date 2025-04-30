<!DOCTYPE html>
<html lang="de" data-bs-theme="auto">
<head>
  <script>
    (()=>{ const theme=localStorage.getItem('theme') || 'auto'; if (theme==='dark'){ document.documentElement.setAttribute('data-bs-theme', 'dark');} else if (theme==='light'){ document.documentElement.setAttribute('data-bs-theme', 'light');} else{ document.documentElement.removeAttribute('data-bs-theme');} const iconMap={ light: '#sun-fill', dark: '#moon-stars-fill', auto: '#circle-half'}; const setIcon=()=>{ const use=document.querySelector('.theme-icon-active use'); if (use){ use.setAttribute('href', iconMap[theme]);}}; if (document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', setIcon);} else{ setIcon();} const markThemeReady=()=>document.documentElement.classList.add('theme-ready'); if (document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', ()=>{ setIcon(); markThemeReady();});} else{ setIcon(); markThemeReady();}})();
  </script>
  <meta charset="UTF-8">
  <title>Pixeljagd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/favicon-16x16.png" type="image/png">
</head>

<body>
  <?php include_once 'helper/svg.php'; ?>
  <header class="d-flex justify-content-between align-items-center px-3 py-2">
    <span class="h5 m-0 link-logo"><a href=""><?= sitelogo('2em', 'currentColor'); ?></a></span>
    <div class="d-flex align-items-center gap-2">
      <div class="dropdown bd-mode-toggle">
        <button class="btn btn-sm d-flex align-items-center" id="bd-theme" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme">
          <svg class="bi my-1 theme-icon-active" aria-hidden="true">
            <use href=""></use> <!-- Wird gleich überschrieben -->
          </svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
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
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
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
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
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
      <div class="">
        <button id="toggleMenu" class="btn btn-sm d-flex align-items-center" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" viewBox="0 0 512 389.24">
            <path fill-rule="nonzero" d="M512 50.04H236.9V0H512v50.04zm-361.79 65.1-54.45 54.44H512v50.04H95.79l54.42 54.41-35.39 35.39L0 194.6v-.03l35.39-35.36 79.43-79.46 35.39 35.39zM512 389.24H236.9V339.2H512v50.04z" />
          </svg>
        </button>
      </div>
    </div>
  </header>
  <!-- ===== Offcanvas separat, außerhalb des Headers! ===== -->
  <div id="customOffcanvas" class="offcanvas-custom">
    <div class="offcanvas-header d-md-none justify-content-end p-2">
      <button type="button" id="closeOffcanvas" class="btn btn-sm">
        <?= getCloseIcon('2em'); ?>
      </button>
    </div>
    <div class="mt-3 mb-2 text-center align-items-center">
      <?= sitelogo('2.5em', 'currentColor'); ?>
    </div>
    <ul class="list-unstyled m-0 p-4">
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#hilfeModal">
          <div class="d-flex icon-container">
            <?= gamepad('1.5em', 'currentColor'); ?>
          </div>
          <div class="text-container">
            Willkommen
          </div>
        </a>
      </li>
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#versionModal">
          <div class="d-flex icon-container">
            <?= version('1.5em', 'currentColor'); ?>
          </div>
          <div class="text-container">
            Version
          </div>
        </a>
      </li>
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#datenschutzModal">
          <div class="d-flex icon-container">
            <?= datenschutz('1.5em', 'currentColor'); ?>
          </div>
          <div class="text-container">
            Datenschutz
          </div>
        </a>
      </li>
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#impressumModal">
          <div class="d-flex icon-container">
            <?= inprint('1.5em', 'currentColor'); ?>
          </div>
          <div class="text-container">
            Impressum
          </div>
        </a>
      </li>
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#thanksModal">
          <div class="d-flex icon-container">
            <?= heart('1.5em', '#ff4c4c', 'heart-beat'); ?>
          </div>
          <div class="text-container">
            Danke
          </div>
        </a>
      </li>
    </ul>
    <hr>
    <div class="ms-3 me-3 mb-2 d-flex flex-column align-items-center position-relative">
      <img src="images/rondev.webp" alt="RonDev" class="profil-image position-absolute top-0 start-50 translate-middle-x">
      <div class="w-100 px-4 pt-5 mt-5 text-bg-dark bg-gradient border rounded-3 text-center profil-text aboutme">
        <p class="mb-1 fw-bold fs-4">RonDev</p>
        <p class="mb-2 rotating-title">&lang;&frasl;<span id="fun-title">Pixel-Schubser</span>&rang;</p>
        <p class="mb-1 lh-sm fw-light">Zwischen Wahnsinn und Webseiten:<br>Programmieren ist für mich mehr als ein Hobby – es ist meine Art, mit einer überaktiven Birne und meiner PTBS umzugehen 🧠💻<br>Statt Therapie: HTML, PHP, CSS und gelegentliche Nervenzusammenbrüche. Arbeite immer mal wieder an Webprojekten – manche laufen rund, andere laufen Amok. Fortschritte werden gefeiert, Fails gnadenlos dokumentiert. Willkommen in meinem digitalen Selbsthilfeprogramm mit Stil und semikolongetriebener Selbsterkenntnis.</p>
        <p class="mt-3 fw-light small text-lowercase text-break"><a href="https://rondev.de" rel="noreferrer noopener" target="_blank" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover">&lang;&frasl;Web&rang;</a> <a href="https://mastodon.social/@RonDev" rel="noreferrer noopener" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" target="_blank">&lang;&frasl;Mastodon&rang;</a> <a href="#" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" data-bs-toggle="modal" data-bs-target="#projektModal">&lang;&frasl;Weitere Projekte&rang;</a><br><a href="#" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" data-bs-toggle="modal" data-bs-target="#kaffeeModal">&lang;&frasl;Kaffee spendieren&rang;</a></p>
      </div>
    </div>

    <div class="mb-3 text-center small JetBrains">
      <?= copyright('1em', 'currentColor', 'svg-icon'); ?> <?php echo date("Y"); ?> Pixeljagd by <a href="https://rondev.de" rel="noreferrer noopener" class="custom-link" target="_blank">RonDev</a><br>
    </div>

  </div>
  <main id="gameArea">
    <div id="pixel"></div>
  </main>

  <footer class="text-center small JetBrains">
    <?= copyright('1em', 'currentColor', 'svg-icon'); ?> <?php echo date("Y"); ?> Pixeljagd<sup><a href="" class="custom-link" data-bs-toggle="modal" data-bs-target="#versionModal">v.0.1</a></sup> by <a href="https://rondev.de" rel="noreferrer noopener" class="custom-link" target="_blank">RonDev</a><br>
    Finde den kleinsten Pixel der Welt!
  </footer>

  <!-- Toasts -->
  <div class="toast-container" id="toastContainer"></div>

  <script src="assets\js\bootstrap.bundle.min.js"></script>
  <script src="assets\js\js-confetti.browser.min.js"></script>
  <script src="assets\js\scripts.js"></script>
  <script src="assets\js\animation.js"></script>
  <?php include_once 'helper/modals.php'; ?>
</body>
</html>