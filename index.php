<!DOCTYPE html>
<?php include_once 'helper/config.php'; ?>
<html lang="de" data-bs-theme="auto">

<head>
  <script>
    (() => {
      const theme = localStorage.getItem('theme') || 'auto';
      if (theme === 'dark') {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
      } else if (theme === 'light') {
        document.documentElement.setAttribute('data-bs-theme', 'light');
      } else {
        document.documentElement.removeAttribute('data-bs-theme');
      }
      const iconMap = {
        light: '#sun-fill',
        dark: '#moon-stars-fill',
        auto: '#circle-half'
      };
      const setIcon = () => {
        const use = document.querySelector('.theme-icon-active use');
        if (use) {
          use.setAttribute('href', iconMap[theme]);
        }
      };
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setIcon);
      } else {
        setIcon();
      }
      const markThemeReady = () => document.documentElement.classList.add('theme-ready');
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
          setIcon();
          markThemeReady();
        });
      } else {
        setIcon();
        markThemeReady();
      }
    })();
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixeljagd – Deine verspielte Reise durch versteckte Pixel-Welten</title>
  <meta name="description" content="Entdecke die geheime Welt von Pixeljagd – eine interaktive Web-Erfahrung mit Eastereggs, Retro-Flair und Überraschungen. Für Neugierige, Entdecker und Pixeljäger!">
  <meta name="keywords" content="Pixeljagd, Eastereggs, Geheimnisse, Retro, Spielerei, Webspiel, HTML Spiel, interaktiv, Überraschung, Technik-Demo">
  <meta name="author" content="RonDev">
  <meta property="og:title" content="Pixeljagd – Interaktive Retro-Webwelt voller Geheimnisse">
  <meta property="og:description" content="Tauche ein in eine Welt voller versteckter Eastereggs und Spielereien. Jetzt Pixeljagd starten!">
  <meta property="og:image" content="images/og-image.png">
  <meta property="og:url" content="https://pixeljagd.rondevhub.de/">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Pixeljagd – Deine Websuche nach versteckten Pixeln">
  <meta name="twitter:description" content="Eine verspielte, liebevoll gestaltete Web-Erfahrung mit Eastereggs und Geheimnissen.">
  <meta name="twitter:image" content="images/og-image.png">
  <link rel="icon" href="assets/favicon/favicon-16x16.png" type="image/png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="manifest" href="site.webmanifest">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.<?= $version; ?>.css" rel="stylesheet">
</head>
<?php include_once 'helper/svg.php'; ?>

<body>
  <header class="d-flex justify-content-between align-items-center px-3 py-2">
    <span class="h5 m-0 link-logo"><a href="<?= $baseUrl;?>"><?= sitelogo('2em', 'currentColor'); ?></a></span>
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
    <ul class="list-unstyled m-0 p-3">
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#hilfeModal">
          <div class="d-flex icon-container">
            <?= gamepad('1.5em', 'currentColor'); ?>
          </div>
          <div class="text-container">
            Anleitung
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
      <li>
        <a class="dropdown-item d-flex align-items-center menu-link" href="#" data-bs-toggle="modal" data-bs-target="#kaffeeModal">
          <div class="d-flex icon-container">
            <?= coffee('2em'); ?>
          </div>
          <div class="text-container">
            Kaffee spendieren
          </div>
        </a>
      </li>
    </ul>
    
      <ul class="share-buttons m-0 p-4">
        <li>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $baseUrl;?>" target="_blank" class="share-button share-facebook" title="Auf Facebook teilen">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
            <span class="sr-only">Facebook</span>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/intent/tweet?url=<?= $baseUrl;?>&text=Entdecke die geheime Welt von Pixeljagd – eine interaktive Web-Erfahrung mit Eastereggs, Retro-Flair und Überraschungen. Für Neugierige, Entdecker und Pixeljäger!" target="_blank" class="share-button share-twitter" title="Auf X teilen">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
            <span class="sr-only">X</span>
          </a>
        </li>
        <li>
          <a href="https://www.threads.net/intent/post?url=<?= $baseUrl;?>&text=»Entdecke die geheime Welt von Pixeljagd – eine interaktive Web-Erfahrung mit Eastereggs, Retro-Flair und Überraschungen. Für Neugierige, Entdecker und Pixeljäger!«" class="share-button share-threads" target="_blank" title="Auf Threads teilen">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.5-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 146.1 58.5 194.3 58 256c.5 61.7 14.1 109.9 40.3 143.3c28 35.6 71.2 53.9 128.2 54.4c51.4-.4 85.4-12.6 113.7-40.9c32.3-32.2 31.7-71.8 21.4-95.9c-6.1-14.2-17.1-26-31.9-34.9c-3.7 26.9-11.8 48.3-24.7 64.8c-17.1 21.8-41.4 33.6-72.7 35.3c-23.6 1.3-46.3-4.4-63.9-16c-20.8-13.8-33-34.8-34.3-59.3c-2.5-48.3 35.7-83 95.2-86.4c21.1-1.2 40.9-.3 59.2 2.8c-2.4-14.8-7.3-26.6-14.6-35.2c-10-11.7-25.6-17.7-46.2-17.8H227c-16.6 0-39 4.6-53.3 26.3l-34.4-23.6c19.2-29.1 50.3-45.1 87.8-45.1h.8c62.6 .4 99.9 39.5 103.7 107.7l-.2 .2zm-156 68.8c1.3 25.1 28.4 36.8 54.6 35.3c25.6-1.4 54.6-11.4 59.5-73.2c-13.2-2.9-27.8-4.4-43.4-4.4c-4.8 0-9.6 .1-14.4 .4c-42.9 2.4-57.2 23.2-56.2 41.8l-.1 .1z"/></svg>
            <span class="sr-only">Threads</span>
          </a>
        </li>
        <li>
          <a href="#" id="mastodonShareButton" data-bs-toggle="modal" data-bs-target="#mastodonShareModal" class="share-button share-mastodon" title="Auf Mastodon teilen">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M433 179.11c0-97.2-63.71-125.7-63.71-125.7-62.52-28.7-228.56-28.4-290.48 0 0 0-63.72 28.5-63.72 125.7 0 115.7-6.6 259.4 105.63 289.1 40.51 10.7 75.32 13 103.33 11.4 50.81-2.8 79.32-18.1 79.32-18.1l-1.7-36.9s-36.31 11.4-77.12 10.1c-40.41-1.4-83-4.4-89.63-54a102.54 102.54 0 0 1-.9-13.9c85.63 20.9 158.65 9.1 178.75 6.7 56.12-6.7 105-41.3 111.23-72.9 9.8-49.8 9-121.5 9-121.5zm-75.12 125.2h-46.63v-114.2c0-49.7-64-51.6-64 6.9v62.5h-46.33V197c0-58.5-64-56.6-64-6.9v114.2H90.19c0-122.1-5.2-147.9 18.41-175 25.9-28.9 79.82-30.8 103.83 6.1l11.6 19.5 11.6-19.5c24.11-37.1 78.12-34.8 103.83-6.1 23.71 27.3 18.4 53 18.4 175z"/></svg>
            <span class="sr-only">Mastodon</span>
          </a>
        </li>
        <li>
          <a href="https://bsky.app/intent/compose?text=»Entdecke die geheime Welt von Pixeljagd – eine interaktive Web-Erfahrung mit Eastereggs, Retro-Flair und Überraschungen. Für Neugierige, Entdecker und Pixeljäger!« — +<?= $baseUrl;?>" target="_blank" class="share-button share-bluesky" title="Auf Bluesky teilen">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M111.8 62.2C170.2 105.9 233 194.7 256 242.4c23-47.6 85.8-136.4 144.2-180.2c42.1-31.6 110.3-56 110.3 21.8c0 15.5-8.9 130.5-14.1 149.2C478.2 298 412 314.6 353.1 304.5c102.9 17.5 129.1 75.5 72.5 133.5c-107.4 110.2-154.3-27.6-166.3-62.9l0 0c-1.7-4.9-2.6-7.8-3.3-7.8s-1.6 3-3.3 7.8l0 0c-12 35.3-59 173.1-166.3 62.9c-56.5-58-30.4-116 72.5-133.5C100 314.6 33.8 298 15.7 233.1C10.4 214.4 1.5 99.4 1.5 83.9c0-77.8 68.2-53.4 110.3-21.8z"/></svg>
            <span class="sr-only">Bluesky</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="window.location.href = mailtoLink;" class="share-button share-mail" title="Per E-Mail teilen">
          <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 497 511.86"><path fill-rule="nonzero" d="M497 227.28c0 29.39-4.56 56.35-13.58 80.75-9.13 24.51-22.07 43.5-38.62 56.98-16.56 13.47-35.66 20.16-57.2 20.16-17.82 0-32.78-5.41-45.09-16.13-12.2-10.82-19.42-24.62-21.75-41.38h-2.44c-8.28 18.04-20.16 32.15-35.66 42.34-15.38 10.07-33.73 15.17-54.85 15.17-31.09 0-55.39-10.62-72.9-31.83-17.5-21.23-26.21-50.08-26.21-86.59 0-42.23 12.21-76.61 36.61-103.03 24.51-26.42 56.66-39.58 96.45-39.58 14.01 0 30.03 1.28 47.86 3.93 17.82 2.55 33.85 6.16 48.17 10.72l-7.75 146v6.79c0 36.92 13.8 55.39 41.28 55.39 18.89 0 34.27-11.14 46.05-33.43 11.78-22.28 17.72-51.24 17.72-86.89 0-37.57-7.64-70.35-23.03-98.58-15.28-28.22-37.13-49.87-65.47-65.15-28.22-15.17-60.69-22.81-97.4-22.81-46.26 0-86.48 9.55-120.64 28.75-34.17 19.21-60.27 46.59-78.31 82.13-18.04 35.54-27.05 76.61-27.05 123.29 0 63.25 16.65 111.84 50.08 145.9 33.32 33.96 81.38 50.93 144.19 50.93 43.51 0 88.71-8.91 135.5-26.74v41.38c-39.79 17.41-84.89 26.11-135.5 26.11-75.23 0-133.58-20.7-175.18-62.08C20.69 408.51 0 350.68 0 276.41c0-53.9 11.04-101.86 33.21-143.99 22.18-42.01 53.8-74.59 94.86-97.72C169.03 11.57 216.14 0 269.19 0c44.56 0 84.14 9.34 118.95 28.12 34.69 18.78 61.53 45.41 80.42 79.9 19 34.48 28.44 74.27 28.44 119.26zm-321.4 40.75c0 52.62 20.17 78.94 60.59 78.94 42.97 0 66.21-32.47 69.93-97.3l4.45-81.07c-14.96-4.14-31.19-6.26-48.81-6.26-26.95 0-48.06 9.34-63.34 28.02-15.18 18.56-22.82 44.56-22.82 77.67z"/></svg>
            <span class="sr-only">E-Mail</span>
          </a>
        </li>
        <li>
          <a href="#" id="QrShareButton" data-bs-toggle="modal" data-bs-target="#QrShareModal" class="share-button share-qrcode" title="Per QRCode teilen">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.7" style="enable-background:new 0 0 122.88 122.7" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M0.18,0h44.63v44.45H0.18V0L0.18,0z M111.5,111.5h11.38v11.2H111.5V111.5L111.5,111.5z M89.63,111.48h11.38 v10.67H89.63h-0.01H78.25v-21.82h11.02V89.27h11.21V67.22h11.38v10.84h10.84v11.2h-10.84v11.2h-11.21h-0.17H89.63V111.48 L89.63,111.48z M55.84,89.09h11.02v-11.2H56.2v-11.2h10.66v-11.2H56.02v11.2H44.63v-11.2h11.2V22.23h11.38v33.25h11.02v11.2h10.84 v-11.2h11.38v11.2H89.63v11.2H78.25v22.05H67.22v22.23H55.84V89.09L55.84,89.09z M111.31,55.48h11.38v11.2h-11.38V55.48 L111.31,55.48z M22.41,55.48h11.38v11.2H22.41V55.48L22.41,55.48z M0.18,55.48h11.38v11.2H0.18V55.48L0.18,55.48z M55.84,0h11.38 v11.2H55.84V0L55.84,0z M0,78.06h44.63v44.45H0V78.06L0,78.06z M10.84,88.86h22.95v22.86H10.84V88.86L10.84,88.86z M78.06,0h44.63 v44.45H78.06V0L78.06,0z M88.91,10.8h22.95v22.86H88.91V10.8L88.91,10.8z M11.02,10.8h22.95v22.86H11.02V10.8L11.02,10.8z"/></g></svg>
            <span class="sr-only">QRCode</span>
          </a>
        </li>
      </ul>
    <hr>
    <div class="ms-3 me-3 mb-2 d-flex flex-column align-items-center position-relative">
      <img src="images/rondev.webp" alt="RonDev" class="profil-image position-absolute top-0 start-50 translate-middle-x">
      <div class="w-100 px-4 pt-5 mt-5 text-bg-dark bg-gradient border rounded-3 text-center profil-text aboutme">
        <p class="mb-1 fw-bold fs-4">RonDev</p>
        <p class="mb-2 rotating-title">&lang;&frasl;<span id="fun-title">Pixel-Schubser</span>&rang;</p>
        <p class="mb-1 lh-sm fw-light">Zwischen Wahnsinn und Webseiten:<br>Programmieren ist für mich mehr als ein Hobby – es ist meine Art, mit einer überaktiven Birne und meiner PTBS umzugehen 🧠💻<br>Zusätzlich zur Therapie: HTML, PHP, CSS und gelegentliche Nervenzusammenbrüche. Arbeite immer mal wieder an Webprojekten – manche laufen rund, andere laufen Amok. Fortschritte werden gefeiert, Fails gnadenlos auf Github dokumentiert.<br>Willkommen in meinem digitalen Selbsthilfeprogramm mit Stil und semikolongetriebener Selbsterkenntnis.</p>
        <p class="mt-3 fw-light small text-lowercase text-break"><a href="https://rondev.de" rel="noreferrer noopener" target="_blank" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover">&lang;&frasl;Web&rang;</a> <a href="https://mastodon.social/@RonDev" rel="noreferrer noopener" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" target="_blank">&lang;&frasl;Mastodon&rang;</a> <a href="https://github.com/HerrStoeckchen" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" target="_blank">&lang;&frasl;Github&rang;</a><br><a href="#" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" data-bs-toggle="modal" data-bs-target="#projektModal">&lang;&frasl;Weitere Projekte&rang;</a> <a href="#" class="link-light link-offset-2 link-underline-opacity-50 link-underline-opacity-100-hover" data-bs-toggle="modal" data-bs-target="#kaffeeModal">&lang;&frasl;Kaffee spendieren&rang;</a></p>
      </div>
    </div>

    <div class="mb-3 text-center JetBrains">
      <?= copyright('1em', 'currentColor', 'svg-icon'); ?> <?php echo date("Y"); ?> PixelJagd by <a href="https://rondev.de" rel="noreferrer noopener" class="custom-link" target="_blank">RonDev</a><br>
    </div>

  </div>
  <main id="gameArea">
    <div id="pixel"></div>
  </main>

  <footer class="text-center JetBrains">
    <?= copyright('1em', 'currentColor', 'svg-icon'); ?> <?= date("Y"); ?> PixelJagd<sup><a href="" class="custom-link" data-bs-toggle="modal" data-bs-target="#versionModal">v<?= $version; ?></a></sup> by <a href="https://rondev.de" rel="noreferrer noopener" class="custom-link" target="_blank">RonDev</a><br>
    Finde den kleinsten Pixel der Welt!
  </footer>

  <!-- Toasts -->
  <div class="toast-container" id="toastContainer"></div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/js-confetti.browser.min.js"></script>
  <script src="assets/js/scripts.<?= $version; ?>.js"></script>
  <script src="assets/js/animation.<?= $version; ?>.js"></script>
  <script src="assets/js/qr-code/qr-code-styling.js"></script>
  <?php include_once 'helper/modals.php'; ?>
<script>
  const subject = encodeURIComponent("Schau mal hier:");
const body = encodeURIComponent(
  "Entdecke die geheime Welt von Pixeljagd – eine interaktive Web-Erfahrung mit Eastereggs, Retro-Flair und Überraschungen. Für Neugierige, Entdecker und Pixeljäger! Besuch die Seite: https://pixeljagd.rondevhub.de"
);
const mailtoLink = `mailto:?subject=${subject}&body=${body}`;
</script>
</body>

</html>