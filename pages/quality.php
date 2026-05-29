<?php $page_title = 'Quality & Certifications'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('Quality &amp; <span>Certifications</span>', 'Our commitment to quality is not a policy — it is a culture embedded in every process, every team member, and every product we deliver.', 'Quality & Certifications'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="text-center" style="margin-bottom:52px">
      <div class="section-label center">Our Certifications</div>
      <h2 class="section-title">Internationally Recognised <span>Standards</span></h2>
    </div>
    <div class="certs-grid">
      <?php $certs = [
        ['icon'=>'🏆','title'=>'ISO 9001:2015','desc'=>'Quality Management System certification covering the full manufacturing lifecycle — from raw material receipt to finished goods dispatch.','number'=>'Cert No. IND-QMS-2024-APM01'],
        ['icon'=>'🌿','title'=>'ISO 14001:2015','desc'=>'Environmental Management System ensuring responsible chemical manufacturing with minimised ecological impact and zero liquid discharge.','number'=>'Cert No. IND-EMS-2022-APM01'],
        ['icon'=>'⛑️','title'=>'ISO 45001:2018','desc'=>'Occupational Health &amp; Safety Management System for a safe working environment. Zero lost-time incidents in 5 consecutive years.','number'=>'Cert No. IND-OHS-2023-APM01'],
        ['icon'=>'🛡️','title'=>'BIS Compliance','desc'=>'All applicable products certified and compliant with Bureau of Indian Standards specifications for chemical purity and labelling requirements.','number'=>'BIS/CHEM/2023-24'],
        ['icon'=>'🔬','title'=>'NABL Accreditation','desc'=>'In-house testing laboratory accredited by the National Accreditation Board for Testing &amp; Calibration Laboratories under ISO/IEC 17025.','number'=>'NABL No. TC-7842'],
        ['icon'=>'📋','title'=>'REACH Compliance','desc'=>'All exported products comply with EU REACH regulations for chemical safety, registration, evaluation, and authorisation requirements.','number'=>'REACH Declaration 2024'],
      ];
      foreach ($certs as $c) : ?>
      <div class="cert-main-card anim-fade-up">
        <div class="cert-badge-wrap"><?php echo $c['icon']; ?></div>
        <h3><?php echo $c['title']; ?></h3>
        <p><?php echo $c['desc']; ?></p>
        <span class="cert-number"><?php echo htmlspecialchars($c['number']); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="quality-dark section-pad">
  <div class="container">
    <div class="text-center" style="margin-bottom:10px">
      <div class="section-label center">Our QA Process</div>
      <h2 class="section-title light">Quality at <span>Every Step</span></h2>
      <p class="section-sub light center" style="margin-top:14px">A rigorous 4-stage quality management process ensures every product leaving our facility meets or exceeds specification.</p>
    </div>
    <div class="process-steps" style="margin-top:52px">
      <?php $steps = [
        ['icon'=>'📥','title'=>'Incoming Inspection','desc'=>'All raw materials tested for identity, purity, and compliance before entering production.'],
        ['icon'=>'⚙️','title'=>'In-Process Control','desc'=>'Real-time monitoring of temperature, pressure, pH, and concentration at every production stage.'],
        ['icon'=>'🧪','title'=>'Finished Product Testing','desc'=>'Complete analysis including purity, moisture, particle size, and application tests before dispatch.'],
        ['icon'=>'📦','title'=>'Release &amp; Documentation','desc'=>'Certificate of Analysis issued with every batch. Traceability records maintained for 5 years.'],
      ];
      foreach ($steps as $s) : ?>
      <div class="process-step anim-fade-up">
        <div class="step-icon"><?php echo $s['icon']; ?></div>
        <h4><?php echo $s['title']; ?></h4>
        <p><?php echo $s['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad bg-off">
  <div class="container">
    <div class="text-center" style="margin-bottom:52px">
      <div class="section-label center">Safety Performance</div>
      <h2 class="section-title">Safety Is <span>Non-Negotiable</span></h2>
    </div>
    <div class="grid-4">
      <?php $stats = [['0','Lost-Time Incidents (5 years)'],['100%','Batch Documentation Rate'],['99.8%','Average Product Purity'],['24hr','COA Turnaround Time']];
      foreach ($stats as $s) : ?>
      <div style="background:var(--white);border-radius:var(--radius-md);padding:36px 24px;text-align:center;border:1px solid rgba(11,31,58,.08);box-shadow:var(--shadow-sm)">
        <strong style="font-family:var(--font-head);font-size:52px;color:var(--sky);display:block;line-height:1"><?php echo $s[0]; ?></strong>
        <span style="font-family:var(--font-cond);font-size:12px;letter-spacing:2px;text-transform:uppercase;color:var(--grey)"><?php echo $s[1]; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Request a Quality Audit</h2>
    <p>We invite clients and auditors to inspect our facilities and quality systems. Contact us to schedule a visit.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Schedule an Audit</a>
  </div></div>
</section>
