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

<!-- Modal Impressum -->
<div class="modal fade user-select-none" data-bs-backdrop="static" data-bs-keyboard="false" id="impressumModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content pt-5 pb-1 px-3">
      <div class="modal-times-wrapper">
        <button type="button" class="btn modal-close-button rounded-circle position-absolute top-0 start-50 translate-middle" data-bs-dismiss="modal" aria-label="Close" style="width: 48px; height: 48px; transform: translate(-50%, -50%);">
          <?= getCloseIcon(); ?>
        </button>
      </div>
      <div class="modal-header">
        <h5 class="modal-title JetBrainsHeader"><?= version(); ?> Impressum</h5>
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
          E-Mail: <?= email('10.5em', '', 'currentColor'); ?>
        </p>
        <p class="fw-light text-danger-emphasis lh-1 small">
        Die Nutzung der angegebenen Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung, Spam-E-Mails oder sonstigen unerwünschten Nachrichten ist ausdrücklich untersagt. Bei Verstößen gegen dieses Verbot behalte ich mir rechtliche Schritte vor.
        </p>
      </div>
      <div class="modal-footer fw-lighter JetBrainsFooter">
        <p>Diese Webseite ist seit <span class="fw-bold onlineZeit"></span> online.</p>
      </div>
    </div>
  </div>
</div>