<!-- Modal Gefunden -->
<div class="modal fade" id="foundModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title">Gefunden!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title JetBrainsHeader"><?= version('1.7em'); ?> Version<sup>0.1</sup></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body JetBrainsVersionen">
        <p class="fw-semibold mb-0">Version 0.1</p>
        <p class="fw-light mb-0"><?= bug('1.2em', '#ff322e', 'me-1', 'Aktueller Bug'); ?>Bug aktuell</p>
        <p class="fw-light mb-0"><?= bug('1.2em', '#7fbb00', 'me-1', 'Bug behoben'); ?>Bug behoben</p>
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title JetBrainsVersionen">Willkommen bei Pixeljagd!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

<!-- Modal Impressum -->
<div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="impressumModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title JetBrainsHeader"><?= inprint('1.7em'); ?> Impressum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body JetBrainsVersionen">
        <p class="fw-semibold mb-3">Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG):</p>
        <p class="fw-light lh-1 mb-2">
          <span class="fw-semibold">Seitenbetreiber:</span><br>
          Ronny Melzer<br>
          <a href="https://osm.org/go/0MA8tL~A?m=" rel="noreferrer noopener" class="custom-link" target="_blank">Am Stadion 4<br>
          07629 Hermsdorf</a><br>
          <br>
          <span class="fw-semibold">Kontakt</span><br>
          E-Mail: <?= email('1em', 'currentColor'); ?>
        </p>
        <p class="fw-light text-danger-emphasis lh-1 small">
          Die Nutzung der angegebenen Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung, Spam-E-Mails oder sonstigen unerwünschten Nachrichten ist ausdrücklich untersagt. Bei Verstößen gegen dieses Verbot behalte ich mir rechtliche Schritte vor.
        </p>
      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">

      </div>
    </div>
  </div>
</div>

<!-- Modal Datenschutz -->
<div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="datenschutzModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title JetBrainsHeader"><?= datenschutz('1.7em'); ?> Datenschutz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body JetBrainsVersionen">
        <p class="fw-semibold mb-3">Datenschutzerklärung "PixelJagd"</p>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">1. Allgemeine Hinweise</p>
        <p class="ms-2 lh-1">Der Schutz deiner persönlichen Daten ist mir wichtig. Diese Datenschutzerklärung erläutert, welche Daten beim Besuch und der Nutzung dieser Seite verarbeitet werden.</p>
        </p>
        <hr>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">2. Verantwortliche Stelle</p>
        <p class="ms-2 lh-1">
          <span class=" fw-semibold">RonDev.de</span><br>
          Ronny Melzer<br>
          Am Stadion 4<br>
          07629 Hermsdorf<br>
          <br>
          <span class="fw-semibold">Kontakt</span><br>
          E-Mail: <?= email('1em', 'currentColor'); ?>
        </p>
        </p>
        <p class="fw-light text-danger-emphasis lh-1 small">
          Die Nutzung der angegebenen Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung, Spam-E-Mails oder sonstigen unerwünschten Nachrichten ist ausdrücklich untersagt. Bei Verstößen gegen dieses Verbot behalte ich mir rechtliche Schritte vor.
        </p>
        <hr>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">3. Erhebung und Speicherung von Daten</p>
        <ul class="custom-list lh-1">
          <li class="mb-1">
            Es werden keine personenbezogenen Daten gespeichert oder erhoben.
          </li>
          <li>
            Es werden keine Cookies verwendet.
          </li>
        </ul>
        </p>
        <hr>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">4. Analysedienste</p>
        <p class="ms-2 lh-1">Ich setzte auf dieser Seite <span class="fw-semibold">keinerlei</span> Analyse-Tools oder ähnliche Dienste ein.</p>
        </p>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">5. Verschlüsselung und Sicherheit</p>
        <p class="ms-2 lh-1">Die Webseite nutzt eine <span class="fw-semibold">SSL</span>-Verschlüsselung, um die Sicherheit der übertragenen Daten zu gewährleisten. Eingabedaten werden nur für die aktuelle Sitzung genutzt und danach verworfen.</p>
        </p>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">6. CSP (Content Security Policy)</p>
        <p class="ms-2 lh-1">Die <span class="fw-semibold">Content Security Policy</span> <span class="fst-italic">(CSP)</span> ist eine Sicherheitsfunktion, die moderne Webseiten vor bestimmten Arten von Angriffen schützt – insbesondere vor sogenannten Cross-Site Scripting (XSS)- und Code-Injection-Angriffen.<br>
          Ich nutze keine zusätzlichen Javascripte und es werden keine Tastatureingaben geloggt. Die Server Logs sind auf dieser Seite deaktiviert. Alle Dateien werden selbst gehostet und senden keine Daten an Dritte.</p>
        </p>
        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">7. Deine Rechte</p>
        <p class="ms-2 lh-1">Da ich keine Daten speichern oder weiterverarbeiten, sind keine Maßnahmen zur Auskunft oder Löschung erforderlich. Falls du dennoch Fragen hast, kannst du mich jederzeit kontaktieren.</p>
        </p>

        <p class="fw-light lh-1 mb-3">
        <p class="fw-semibold mb-1">8. Änderungen dieser Datenschutzerklärung</p>
        <p class="ms-2 lh-1">Ich behalte mir vor, diese Datenschutzerklärung bei Bedarf zu aktualisieren. Die jeweils aktuelle Version ist auf dieser Webseite abrufbar.</p>
        </p>

      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">
        Stand: 29.04.2025
      </div>
    </div>
  </div>
</div>

<!-- Modal Version -->
<div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="thanksModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title JetBrainsHeader"><?= version('1.7em'); ?> Danke</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body JetBrainsVersionen">
        <p>Danke geht raus an:</p>

        <div class="d-flex border rounded overflow-hidden button-group">
          <div class="d-flex justify-content-center align-items-center svg-container">
            <svg height="2em" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 408">
              <defs>
                <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="76" y1="10" x2="523" y2="365">
                  <stop offset="0" stop-color="#9013FE" />
                  <stop offset="1" stop-color="#6610F2" />
                </linearGradient>
              </defs>
              <path fill="url(#a)" fill-rule="nonzero" d="M56.48 53.32C55.52 25.58 77.13 0 106.34 0H405.7c29.21 0 50.82 25.58 49.86 53.32-.93 26.65.27 61.16 8.96 89.31 8.72 28.23 23.41 46.08 47.48 48.37v26c-24.07 2.29-38.76 20.14-47.48 48.37-8.69 28.15-9.89 62.66-8.96 89.31.96 27.74-20.65 53.32-49.86 53.32H106.34c-29.21 0-50.82-25.58-49.86-53.32.93-26.65-.28-61.16-8.96-89.31C38.8 237.14 24.07 219.29 0 217v-26c24.07-2.29 38.8-20.14 47.52-48.37 8.68-28.15 9.89-62.66 8.96-89.31z" />
              <path fill="#fff" d="M342.9 251.1c0 38.2-28.5 61.36-75.8 61.36h-89.2v-217h88.74c39.44 0 65.32 21.35 65.32 54.13 0 23.01-17.4 43.62-39.59 47.22v1.21c30.2 3.31 50.53 24.21 50.53 53.08zm-130.49 33.84v-71.43h45.6c32.66 0 49.61 12.03 49.61 35.49s-16.48 35.94-47.6 35.94h-47.61zm0-161.96h45.91c24.96 0 39.13 11.13 39.13 31.28 0 21.5-16.48 33.53-46.37 33.53h-38.67v-64.81z" />
            </svg>
          </div>
          <a href="https://getbootstrap.com/" rel="noreferrer noopener" target="_blank" class="d-flex justify-content-center align-items-center link-button">
            Bootstrap
          </a>
          <div id="konfetti-bootstrap" class="d-flex justify-content-center align-items-center action-button">
            Konfetti
          </div>
        </div>
        <div class="d-flex border rounded overflow-hidden button-group mt-1">
          <div class="d-flex justify-content-center align-items-center svg-container">
            <svg height="2em" xmlns="http://www.w3.org/2000/svg" width="64" height="64" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
              <path d="M319.988 7.973C143.293 7.973 0 151.242 0 327.96c0 141.392 91.678 261.298 218.826 303.63 16.004 2.964 21.886-6.957 21.886-15.414 0-7.63-.319-32.835-.449-59.552-89.032 19.359-107.8-37.772-107.8-37.772-14.552-36.993-35.529-46.831-35.529-46.831-29.032-19.879 2.209-19.442 2.209-19.442 32.126 2.245 49.04 32.954 49.04 32.954 28.56 48.922 74.883 34.76 93.131 26.598 2.882-20.681 11.15-34.807 20.315-42.803-71.08-8.067-145.797-35.516-145.797-158.14 0-34.926 12.52-63.485 32.965-85.88-3.33-8.078-14.291-40.606 3.083-84.674 0 0 26.87-8.61 88.029 32.8 25.512-7.075 52.878-10.642 80.056-10.76 27.2.118 54.614 3.673 80.162 10.76 61.076-41.386 87.922-32.8 87.922-32.8 17.398 44.08 6.485 76.631 3.154 84.675 20.516 22.394 32.93 50.953 32.93 85.879 0 122.907-74.883 149.93-146.117 157.856 11.481 9.921 21.733 29.398 21.733 59.233 0 42.792-.366 77.28-.366 87.804 0 8.516 5.764 18.473 21.992 15.354 127.076-42.354 218.637-162.274 218.637-303.582 0-176.695-143.269-319.988-320-319.988l-.023.107z" />
            </svg>
          </div>
          <a href="https://github.com/" rel="noreferrer noopener" target="_blank" class="d-flex justify-content-center align-items-center link-button">
            Github
          </a>
          <div id="konfetti-github" class="d-flex justify-content-center align-items-center action-button">
            Konfetti
          </div>
        </div>

      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">
        <p>Diese Webseite ist seit <span class="fw-bold onlineZeit"></span> online.</p>
      </div>
    </div>
  </div>
</div>