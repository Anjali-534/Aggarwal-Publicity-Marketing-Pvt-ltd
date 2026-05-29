<?php $page_title = 'Gallery'; $base = APM_BASE_URL; ?>

<?php apm_page_banner('Our <span>Gallery</span>', 'A glimpse inside our manufacturing facility, quality control laboratory, and production operations.', 'Gallery'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <?php $gallery = [
      
      ['img'=>'images/gallery/1.jpg',        'title'=>'Quality Control Lab',    'desc'=>'In-house NABL accredited laboratory for batch testing and quality verification.'],
      ['img'=>'images/gallery/2.jpg',        'title'=>'Production Line A',      'desc'=>'Paraformaldehyde production line with automated temperature and pressure control.'],
      ['img'=>'images/gallery/3.jpg',        'title'=>'Packaging Unit',         'desc'=>'Automated packaging line for powder and granular chemical products.'],
      ['img'=>'images/gallery/4.png',        'title'=>'Maintenance Workshop',   'desc'=>'On-site maintenance and engineering workshop for plant upkeep.'],
     ['img'=>'images/team/anil.jpg',        'title'=>'Quality Control Lab',    'desc'=>'In-house NABL accredited laboratory for batch testing and quality verification.'],
      ['img'=>'images/team/anjali.png',        'title'=>'Production Line A',      'desc'=>'Paraformaldehyde production line with automated temperature and pressure control.'],
      ['img'=>'images/products/paraformaldehyde91.jpg',        'title'=>'Packaging Unit',         'desc'=>'Automated packaging line for powder and granular chemical products.'],
      ['img'=>'images/products/paraformaldehyde96.jpg',      'title'=>'Maintenance Workshop',   'desc'=>'On-site maintenance and engineering workshop for plant upkeep.'],
      ['img'=>'images/gallery/4.png',      'title'=>'Maintenance Workshop',   'desc'=>'On-site maintenance and engineering workshop for plant upkeep.'],  
    ];
    ?>
    <div class="gallery-page-grid">
      <?php foreach ($gallery as $i => $g) : ?>
      <div class="gallery-item anim-fade-up delay-<?php echo ($i%3)+1; ?>"
           onclick="openLightbox('<?php echo apm_asset($g['img']); ?>','<?php echo addslashes($g['title']); ?>')"
           tabindex="0" role="button" aria-label="View <?php echo htmlspecialchars($g['title']); ?>"
           style="background:#0d2035">
        <img src="<?php echo apm_asset($g['img']); ?>" alt="<?php echo htmlspecialchars($g['title']); ?>" style="width:100%;height:100%;object-fit:cover;display:block">
        <div class="gallery-item-overlay">
          <p><?php echo htmlspecialchars($g['title']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Visit Our Facility</h2>
    <p>Interested in a plant visit or audit? We welcome clients to our Delhi facility for first-hand inspection of our quality processes.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Schedule a Visit</a>
  </div></div>
</section>