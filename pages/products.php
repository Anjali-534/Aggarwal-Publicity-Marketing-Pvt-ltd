<?php $page_title = 'Products'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('Our <span>Products</span>', 'Premium-grade specialty chemicals manufactured to the highest purity standards — trusted by industries across India.', 'Products'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="products-page-grid">
      <?php $products = [
  ['slug'=>'paraformaldehyde91','img'=>'images/products/paraformaldehyde91.jpg','formula'=>'(CH₂O)ₙ','cas'=>'CAS 30525-89-4','name'=>'Paraformaldehyde 91%','desc'=>'High-purity solid polymer of formaldehyde widely used in resin production, adhesives, agrochemicals, and industrial synthesis. Available in powder and granular forms with 91–99% CH₂O content.','tags'=>['Resins','Adhesives','Agrochemicals','Pharma']],
  ['slug'=>'paraformaldehyde96','img'=>'images/products/paraformaldehyde96.jpg','formula'=>'(CH₂O)ₙ','cas'=>'CAS 30525-89-4','name'=>'Paraformaldehyde 96%','desc'=>'High-purity solid polymer of formaldehyde widely used in resin production, adhesives, agrochemicals, and industrial synthesis. Available in powder and granular forms with 91–99% CH₂O content.','tags'=>['Resins','Adhesives','Agrochemicals','Pharma']],
  ['slug'=>'spray-chemicals', 'img'=>'images/products/spraychemicals.png', 'formula'=>'Blend',   'cas'=>'Custom Blend', 'name'=>'Spray Chemicals', 'desc'=>'Precision-formulated specialty spray chemical blends for agricultural pest control, industrial surface treatment, and cleaning applications. Custom formulations available.','tags'=>['Agriculture','Industrial','Surface Treatment']],
  ['slug'=>'melamine',        'img'=>'images/products/MELAMINE.jpeg',        'formula'=>'C₃H₆N₆', 'cas'=>'CAS 108-78-1', 'name'=>'Melamine',        'desc'=>'High-grade melamine powder (99.8% purity) for laminate manufacturing, melamine-formaldehyde resins, adhesives, flame retardants, and paper treatment.','tags'=>['Laminates','Flame Retardants','Resins','Coatings']],
  ['slug'=>'phthalic-acid',   'img'=>'images/products/phthalic-acid.jpg',   'formula'=>'C₈H₆O₄', 'cas'=>'CAS 88-99-3',  'name'=>'Phthalic Acid',   'desc'=>'Technical-grade phthalic acid for plasticizer manufacturing, synthetic dyes, pharmaceutical intermediates, polyester resins, and specialty chemicals production.','tags'=>['Plasticizers','Dyes','Pharma','Polyester']],
];
      foreach ($products as $i => $p) : ?>
      <div class="product-main-card anim-fade-up delay-<?php echo $i+1; ?>">
        <div class="product-main-thumb" style="background:#0d2035;position:relative;overflow:hidden">
  <img src="<?php echo apm_asset($p['img']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" style="width:100%;height:100%;object-fit:cover;display:block">
  <span class="product-formula-badge"><?php echo htmlspecialchars($p['formula']); ?></span>
  <span class="product-cas-badge"><?php echo htmlspecialchars($p['cas']); ?></span>
</div>
        <div class="product-main-body">
          <h3><?php echo htmlspecialchars($p['name']); ?></h3>
          <div class="product-tags">
            <?php foreach ($p['tags'] as $tag) echo '<span class="tag">' . htmlspecialchars($tag) . '</span>'; ?>
          </div>
          <p class="desc"><?php echo htmlspecialchars($p['desc']); ?></p>
          <div style="display:flex;gap:12px;flex-wrap:wrap">
            <a href="<?php echo $base; ?>/products/<?php echo $p['slug']; ?>" class="btn btn-primary btn-sm">View Details &rarr;</a>
            <a href="<?php echo $base; ?>/contact" class="btn btn-outline-dark btn-sm">Request Quote</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="quality-dark section-pad">
  <div class="container text-center">
    <div class="section-label center">Quality Assurance</div>
    <h2 class="section-title light">Every Product, <span>Every Batch</span></h2>
    <p class="section-sub light center" style="margin-top:12px">All products undergo rigorous in-house and third-party testing before dispatch. ISO 9001:2015 certified processes ensure you receive only the best.</p>
    <div class="grid-4" style="margin-top:52px">
      <?php $features = [
        ['icon'=>'🔬','title'=>'Purity Testing','desc'=>'GC, HPLC, and titration analysis for every batch.'],
        ['icon'=>'⚖️','title'=>'Specification Match','desc'=>'Every lot tested against customer-agreed specs.'],
        ['icon'=>'📋','title'=>'COA Provided','desc'=>'Certificate of Analysis supplied with every shipment.'],
        ['icon'=>'🏭','title'=>'GMP Compliant','desc'=>'Manufacturing follows Good Manufacturing Practice guidelines.'],
      ];
      foreach ($features as $f) : ?>
      <div class="why-card anim-fade-up">
        <div class="why-icon" style="background:rgba(46,127,193,.15)"><?php echo $f['icon']; ?></div>
        <h3 style="color:var(--white)"><?php echo $f['title']; ?></h3>
        <p style="color:var(--silver)"><?php echo $f['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Need a Custom Specification?</h2>
    <p>We work with clients to develop custom purity grades, packaging configurations, and supply agreements tailored to your production requirements.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Discuss Your Requirements</a>
  </div></div>
</section>
