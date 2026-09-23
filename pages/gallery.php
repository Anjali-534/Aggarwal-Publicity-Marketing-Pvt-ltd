<?php
$page_title = 'Gallery';
$base = APM_BASE_URL;
$meta_description = 'See our facility, products, and operations — Aggarwal Publicity & Marketing Pvt. Ltd., ISO certified chemical manufacturer in Delhi NCR.';
$meta_keywords = 'APM chemical facility Delhi NCR, ISO certified chemical manufacturer';
?>

<?php apm_page_banner('Our <span>Gallery</span>', 'A glimpse inside our manufacturing facility, quality control laboratory, and production operations.', 'Gallery'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <?php
    $gallery = [
      ['img' => 'images/gallery/1.jpg',                       'title' => 'Quality Control Lab',    'desc' => 'In-house NABL accredited laboratory for batch testing and quality verification.'],
      ['img' => 'images/gallery/2.jpg',                       'title' => 'Production Line A',       'desc' => 'Paraformaldehyde production line with automated temperature and pressure control.'],
      ['img' => 'images/gallery/3.jpg',                       'title' => 'Packaging Unit',          'desc' => 'Automated packaging line for powder and granular chemical products.'],
      ['img' => 'images/gallery/4.png',                       'title' => 'Maintenance Workshop',    'desc' => 'On-site maintenance and engineering workshop for plant upkeep.'],
      ['img' => 'images/gallery/8.jpeg',                      'title' => 'APM Manufacturing Facility', 'desc' => 'Aggarwal Publicity Marketing Pvt. Ltd. — manufacturing and distribution facility.'],
      ['img' => 'images/team/anil.jpg',                       'title' => 'Our Leadership',          'desc' => 'Leadership behind the Hamara Book Bank community initiative.'],
      ['img' => 'images/products/Paraformaldehyde91.jpg',     'title' => 'Paraformaldehyde 91%',    'desc' => 'High-purity solid polymer of formaldehyde for resin production and industrial synthesis.'],
      ['img' => 'images/products/Paraformaldehyde96.jpg',     'title' => 'Paraformaldehyde 96%',    'desc' => 'High-purity solid polymer of formaldehyde for resin production and industrial synthesis.'],
      ['img' => 'images/products/91-ercros-paraformaldehyde-chemical.jpg',     'title' => 'Paraformaldehyde 91% (Ercros)',    'desc' => 'Paraformaldehyde 91% – high purity chemical powder, Ercros packaging.'],
      ['img' => 'images/products/Paraformaldehyde-96-Chemical-ercros.jpg',     'title' => 'Paraformaldehyde 96% (Ercros)',    'desc' => 'Paraformaldehyde 96% – high purity chemical powder, Ercros packaging.'],
      ['img' => 'images/products/spraychemicals.png',         'title' => 'Spray Chemicals',         'desc' => 'Precision-formulated specialty sprays for agricultural and industrial surface treatment.'],
      ['img' => 'images/products/MELAMINE.jpeg',               'title' => 'Melamine',                'desc' => 'High-grade melamine powder for laminates, adhesives, and flame retardants.'],
      ['img' => 'images/products/paraformaldehyde.jpg',        'title' => 'Phthalic Acid',           'desc' => 'Technical-grade phthalic acid for plasticizers, dyes, and polyesters.'],
      ['img' => 'images/APM_GROUP_logo_transparent.png',       'title' => 'APM Group',               'desc' => 'Company logo — Aggarwal Publicity & Marketing Pvt. Ltd.'],
    ];
    $lb_set = array_map(function ($g) {
        return ['src' => apm_asset($g['img']), 'caption' => $g['title'] . ' — ' . $g['desc']];
    }, $gallery);
    $lb_json = str_replace('</', '<\/', json_encode($lb_set, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    ?>
    <script>window.apmGalleryImages = <?php echo $lb_json; ?>;</script>

    <div class="gallery-masonry">
      <?php foreach ($gallery as $i => $g) : ?>
      <div class="gallery-masonry-item anim-fade-up delay-<?php echo ($i % 3) + 1; ?>"
           onclick="openLightbox('<?php echo apm_asset($g['img']); ?>', '<?php echo addslashes($g['title'] . ' — ' . $g['desc']); ?>', <?php echo $i; ?>, window.apmGalleryImages)"
           onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();this.click();}"
           tabindex="0" role="button"
           aria-label="View <?php echo htmlspecialchars($g['title']); ?> — image <?php echo $i + 1; ?> of <?php echo count($gallery); ?>">
        <img src="<?php echo apm_asset($g['img']); ?>"
             alt="<?php echo htmlspecialchars($g['desc']); ?>"
             loading="<?php echo $i === 0 ? 'eager' : 'lazy'; ?>"
             decoding="async">
        <div class="gallery-masonry-overlay">
          <div class="gallery-masonry-caption">
            <p><?php echo htmlspecialchars($g['title']); ?></p>
            <span><?php echo htmlspecialchars($g['desc']); ?></span>
          </div>
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
