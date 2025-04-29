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
          Am Stadion 4<br>
          07629 Hermsdorf<br>
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

        <div class="btn-group btn-group-sm mb-1" role="group" aria-label="Small button group">
          <button class="btn btn-outline-primary">Bootstrap Logo</button>
          <a type="button" class="btn btn-outline-primary">Name & Link Button</a>
          <button id="konfetti-bootstrap" class="btn btn-outline-primary">Konfetti mit Bootstrap-Logo</button>
        </div>
        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
          <button type="button" class="btn btn-outline-primary">Github</button>
          <button type="button" class="btn btn-outline-primary">Name & Link Button</button>
          <button type="button" id="konfetti-github" class="btn btn-outline-primary">Konfetti mit Github-Logo</button>
        </div>

        <div class="mt-2 row ms-0">
    <div class="col bg-primary-subtle col-lg-2">col-sm</div>
    <div class="col col-lg-2">col-sm</div>
    <div class="col col-lg-2">col-sm</div>
  </div>

      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">
        <p>Diese Webseite ist seit <span class="fw-bold onlineZeit"></span> online.</p>
      </div>
    </div>
  </div>
</div>