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
        <h5 class="modal-title JetBrainsHeader"><?= version('1.7em'); ?> Version<sup><?= $version; ?></sup></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body JetBrainsVersionen">
        <p class="fw-semibold mb-1">🌈 Was erwartet dich?</p>
        <ul class="custom-list lh-1">
          <li class="mb-2">
            <span class="fw-semibold">🕹️ Ein Mini-Spiel ohne Anleitung</span><br>
            Finde den gut versteckten 1x1 Pixel auf einer ganz normalen Webseite. Keine Hinweise. Nur du, dein Bildschirm – und ein Hauch Wahnsinn.
          </li>
          <li class="mb-2">
            <span class="fw-semibold">📱 Responsives Design</span><br>
            Spielbar auf Desktop, Tablet und Smartphone.
          </li>
          <li class="mb-2">
            <span class="fw-semibold">🌙 Light & Dark Mode</span><br>
            Du entscheidest, ob du im Sonnenlicht oder im Schatten jagst.
          </li>
          <li class="mb-2">
            <span class="fw-semibold">🥳 Keine Registrierung, keine Cookies, keine Werbung</span> - Nur pure Pixel-Action.
          </li>
        </ul>
      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">
        <p><?= bug('1.2em', '#ff322e', 'me-1', 'Aktueller Bug'); ?>Bug aktuell <?= bug('1.2em', '#7fbb00', 'me-1', 'Bug behoben'); ?>Bug behoben</p>
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
        <p class="fw-light text-danger fw-semibold lh-1 small">
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
          <span class="fw-bold">RonDev.de</span><br>
          Ronny Melzer<br>
          <a href="https://osm.org/go/0MA8tL~A?m=" rel="noreferrer noopener" class="custom-link" target="_blank">Am Stadion 4<br>
            07629 Hermsdorf</a><br>
          <br>
          <span class="fw-semibold">Kontakt</span><br>
          E-Mail: <?= email('1em', 'currentColor'); ?>
        </p>
        </p>
        <p class="fw-light text-danger fw-semibold lh-1 small">
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

<!-- Modal Danke -->
<div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="thanksModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title JetBrainsHeader"><?= heart('1.7em', '#ff4c4c', 'heart-beat'); ?> Danke</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body JetBrainsVersionen">
        <p>Danke geht raus an:</p>

        <div class="d-flex border rounded overflow-hidden button-group">
          <div class="d-flex justify-content-center align-items-center svg-container">
            <?= bootstrap(); ?>
          </div>
          <a href="https://getbootstrap.com/" rel="noreferrer noopener" target="_blank" class="d-flex justify-content-center align-items-center link-button">
            Bootstrap
          </a>
          <div id="konfetti-bootstrap" class="d-flex justify-content-center align-items-center action-button">
            <?= confetti(); ?>
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
            <?= confetti(); ?>
          </div>
        </div>
        <div class="d-flex border rounded overflow-hidden button-group mt-1">
          <div class="d-flex justify-content-center align-items-center svg-container">
            <svg height="2em" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" class="h-6 w-6" viewBox="-0.17090198558635983 0.482230148717937 41.14235318283891 40.0339509076386"><text x="-9999" y="-9999">ChatGPT</text>
              <path d="M37.532 16.87a9.963 9.963 0 0 0-.856-8.184 10.078 10.078 0 0 0-10.855-4.835A9.964 9.964 0 0 0 18.306.5a10.079 10.079 0 0 0-9.614 6.977 9.967 9.967 0 0 0-6.664 4.834 10.08 10.08 0 0 0 1.24 11.817 9.965 9.965 0 0 0 .856 8.185 10.079 10.079 0 0 0 10.855 4.835 9.965 9.965 0 0 0 7.516 3.35 10.078 10.078 0 0 0 9.617-6.981 9.967 9.967 0 0 0 6.663-4.834 10.079 10.079 0 0 0-1.243-11.813zM22.498 37.886a7.474 7.474 0 0 1-4.799-1.735c.061-.033.168-.091.237-.134l7.964-4.6a1.294 1.294 0 0 0 .655-1.134V19.054l3.366 1.944a.12.12 0 0 1 .066.092v9.299a7.505 7.505 0 0 1-7.49 7.496zM6.392 31.006a7.471 7.471 0 0 1-.894-5.023c.06.036.162.099.237.141l7.964 4.6a1.297 1.297 0 0 0 1.308 0l9.724-5.614v3.888a.12.12 0 0 1-.048.103l-8.051 4.649a7.504 7.504 0 0 1-10.24-2.744zM4.297 13.62A7.469 7.469 0 0 1 8.2 10.333c0 .068-.004.19-.004.274v9.201a1.294 1.294 0 0 0 .654 1.132l9.723 5.614-3.366 1.944a.12.12 0 0 1-.114.01L7.04 23.856a7.504 7.504 0 0 1-2.743-10.237zm27.658 6.437l-9.724-5.615 3.367-1.943a.121.121 0 0 1 .113-.01l8.052 4.648a7.498 7.498 0 0 1-1.158 13.528v-9.476a1.293 1.293 0 0 0-.65-1.132zm3.35-5.043c-.059-.037-.162-.099-.236-.141l-7.965-4.6a1.298 1.298 0 0 0-1.308 0l-9.723 5.614v-3.888a.12.12 0 0 1 .048-.103l8.05-4.645a7.497 7.497 0 0 1 11.135 7.763zm-21.063 6.929l-3.367-1.944a.12.12 0 0 1-.065-.092v-9.299a7.497 7.497 0 0 1 12.293-5.756 6.94 6.94 0 0 0-.236.134l-7.965 4.6a1.294 1.294 0 0 0-.654 1.132l-.006 11.225zm1.829-3.943l4.33-2.501 4.332 2.5v5l-4.331 2.5-4.331-2.5V18z" fill="currentColor" />
            </svg>
          </div>
          <a href="https://chatgpt.com/" rel="noreferrer noopener" target="_blank" class="d-flex justify-content-center align-items-center link-button">
            ChatGPT
          </a>
          <div id="konfetti-chatgpt" class="d-flex justify-content-center align-items-center action-button">
            <?= confetti(); ?>
          </div>
        </div>

      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">

      </div>
    </div>
  </div>
</div>

<!-- Kaffee Modal -->
<div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="kaffeeModal" z-index="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">☕ Unterstütze mich</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
      </div>
      <div class="modal-body link-logo">
        <div class="row">
          <div class="col-md-12">
            <b>Kostenlose Tools benötigen Unterstützung</b>
            <p>Die Bereitstellung <span class="fw-semibold">kostenloser</span> und <span class="fw-semibold">werbebreier</span> Online-Tools erfordert nicht nur Zeit und Engagement, sondern verursacht auch laufende Kosten – zum Beispiel für Hosting, Domain und Weiterentwicklung.
              Wenn dir diese <span class="fw-bold">PixelJagd</span> gefällt und du seine weitere Entwicklung unterstützen möchtest, kannst du dies gerne über PayPal tun.
              Einfach auf den Button klicken und einen festen oder individuellen Betrag wählen – jeder Beitrag hilft weiter.<br>
              💡 Hinweis: Du kannst selbstverständlich auch einen frei wählbaren Betrag eingeben – jede Unterstützung ist wertvoll und wird sehr geschätzt!</p>
          </div>
          <!-- Erste Spende -->
          <div class="col-md-6">
            <a href="https://www.paypal.com/paypalme/Depressionist1/0,99" rel="noreferrer noopener" target="_blank">
              <div class="donation-container">
                <div>
                  <h4>Kaffee-Boost</h4>
                  <p>Treibstoff zum Schreiben ☕</p>
                </div>
                <span class="badge bg-primary badge-vertical">0,99€</span>
              </div>
            </a>
          </div>

          <div class="col-md-6">
            <a href="https://www.paypal.com/paypalme/Depressionist1/1,99" rel="noreferrer noopener" target="_blank">
              <div class="donation-container">
                <div>
                  <h4>Snack-Angriff</h4>
                  <p>Für nächtliche Zuckergelüste 🍪</p>
                </div>
                <span class="badge bg-primary badge-vertical">1,99€</span>
              </div>
            </a>
          </div>
          <!-- Zweite Spende -->
          <div class="col-md-6">
            <a href="https://www.paypal.com/paypalme/Depressionist1/4,99" rel="noreferrer noopener" target="_blank">
              <div class="donation-container">
                <div>
                  <h4>Pizza-Power</h4>
                  <p>Ein Stück Kreativität 🍕</p>
                </div>
                <span class="badge bg-success badge-vertical">4,99€</span>
              </div>
            </a>
          </div>
          <!-- Dritte Spende -->
          <div class="col-md-6">
            <a href="https://www.paypal.com/paypalme/Depressionist1/9,99" rel="noreferrer noopener" target="_blank">
              <div class="donation-container">
                <div>
                  <h4>Hosting-Helden</h4>
                  <p>Für bessere Performance 🖥️</p>
                </div>
                <span class="badge bg-danger badge-vertical">9,99€</span>
              </div>
            </a>
          </div>
          <!-- Vierte Spende -->
          <div class="col-md-6">
            <a href="https://www.paypal.com/paypalme/Depressionist1/14,99" rel="noreferrer noopener" target="_blank">
              <div class="donation-container">
                <div>
                  <h4>Langfristiger Support</h4>
                  <p>Helfen, die Zukunft zu sichern 🚀</p>
                </div>
                <span class="badge bg-warning text-dark badge-vertical">14,99€</span>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="https://www.paypal.com/paypalme/Depressionist1/" rel="noreferrer noopener" target="_blank">
              <div class="donation-container">
                <div>
                  <h4>Individuellen Support</h4>
                  <p>Gib was du magst und kannst ❤️</p>
                </div>
                <span class="badge bg-warning text-dark badge-vertical">❤️</span>
              </div>
            </a>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal mit iFrame -->
<div class="modal fade user-select-none" id="projektModal" tabindex="-1" aria-labelledby="projektModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projektModalLabel">Meine Projekte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
      </div>
      <div class="modal-body p-0" style="overflow: hidden; padding: 0 !important;">
        <iframe src="https://projekte.rondev.de/projekte/_modal-projekte.php" style="border:0;width:100%;height:65vh;" loading="lazy"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>