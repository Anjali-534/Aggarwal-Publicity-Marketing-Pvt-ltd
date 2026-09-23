<?php
$page_title = '';
$page_title_raw = 'Aggarwal Publicity & Marketing Pvt. Ltd. – Chemical Traders';
$base = APM_BASE_URL;
$meta_description = 'ISO certified manufacturer & trader in high-purity Paraformaldehyde, Melamine, Phthalic Acid & Spray Chemicals in Delhi NCR, India since 1994.';
$meta_keywords = 'chemical supplier Delhi NCR, industrial chemicals trader New Delhi, ISO certified chemical manufacturer, Paraformaldehyde supplier India, Melamine trader India, high purity industrial chemicals India, Ercros Paraformaldehyde, Balaji Paraformaldehyde';
?>

<section class="hero-section" aria-label="Hero">
  <video class="hero-video-bg" id="hero-video" muted loop playsinline preload="metadata" poster="<?php echo apm_asset('images/hero-poster.jpg'); ?>" aria-hidden="true">
    <source src="<?php echo apm_asset('videos/aggarwalpublicity.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-video-overlay" aria-hidden="true"></div>
  <script>
  (function () {
    var v = document.getElementById('hero-video');
    if (v && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      v.setAttribute('autoplay', '');
      var p = v.play();
      if (p && p.catch) p.catch(function () {});
    }
  })();
  </script>
  <div class="hero-grid-overlay" aria-hidden="true"></div>
  <div class="hero-particles" id="hero-particles" aria-hidden="true"></div>
  <div class="container">
    <div class="hero-layout">
      <div class="hero-left">
        <div class="hero-badge">
          <span class="hero-badge-dot" aria-hidden="true"></span>
          ISO Certified Manufacturer &mdash; Est. 1994
        </div>
        <h1 class="hero-title">
          <span class="line-gold">Industrial </span>
          <span class="line-accent">Laboratory Chemicals</span>
          & Solvents
        </h1>
        <p class="hero-desc">Aggarwal Publicity & Marketing Pvt. Ltd. &mdash; India's trusted chemical Distributors,Traders,Importers and Exporters — supplying high-purity Paraformaldehyde, Spray Chemicals, Melamine, and Phthalic Acid. Delivering quality to industries since 2001.</p>
        <div class="hero-stats">
          <div class="hero-stat"><strong>20<sup>+</sup></strong><small>Years Experience</small></div>
          <div class="hero-stat"><strong>500<sup>+</sup></strong><small>Clients Served</small></div>
          <div class="hero-stat"><strong>4</strong><small>Core Products</small></div>
        </div>
      </div>
      <div class="hero-right">
      <div class="hero-actions">
        <a href="<?php echo $base; ?>/products" class="btn btn-primary btn-lg">⚗️ Our Products</a>
        <a href="<?php echo $base; ?>/contact" class="btn btn-outline btn-lg">📞 Get a Quote</a>
      </div>
      </div>
    </div>
  </div>
</section>

<div class="ticker-bar" aria-hidden="true">
  <div class="ticker-track">
    <?php $items = ['Paraformaldehyde','Melamine','Phthalic Acid','Spray Chemicals','ISO Certified','Pan India Delivery','20+ Years Experience'];
    $full = array_merge($items,$items);
    foreach ($full as $it) echo '<span class="ticker-item"><span class="ticker-dot"></span>'.htmlspecialchars($it).'</span>'; ?>
  </div>
</div>

<section class="about-preview section-pad bg-off">
  <div class="container">
    <div class="grid-2" style="align-items:center">
      <div class="about-img-wrap anim-fade-left">
        <img src="<?php echo apm_asset('images/gallery/8.jpeg'); ?>" alt="APM Manufacturing Facility" class="about-img-main" style="width:100%;height:auto;border-radius:8px;display:block">
        <div class="about-exp-badge"><strong>1994</strong><span>Founded</span></div>
      </div>
      <div class="anim-fade-right">
        <div class="section-label">About Our Company</div>
        <h2 class="section-title">Building Bonds Through <span>Chemistry</span></h2>
        <div class="divider"></div>
        <p class="section-sub">Aggarwal Publicity Marketing Pvt. Ltd. is a premier chemical Distribution company headquartered in Delhi. For over two decades, we have delivered high-purity chemical solutions to industries across India.</p>
        <div class="about-features" style="margin-top:28px">
          <div class="about-feature"><div class="about-feature-icon">🏗️</div><div><h4>State-of-the-Art Manufacturing</h4><p>Modern plant with advanced equipment and stringent quality controls at every stage.</p></div></div>
          <div class="about-feature"><div class="about-feature-icon">🔬</div><div><h4>In-House R&amp;D Laboratory</h4><p>Dedicated research team ensuring purity and consistent product performance.</p></div></div>
          <div class="about-feature"><div class="about-feature-icon">🚚</div><div><h4>Pan-India Distribution</h4><p>Robust logistics network ensuring timely, safe delivery of chemicals nationwide.</p></div></div>
        </div>
        <a href="<?php echo $base; ?>/about" class="btn btn-primary" style="margin-top:28px">Read More About Us</a>
      </div>
    </div>
  </div>
</section>

<section class="products-dark section-pad">
  <div class="container">
    <div class="text-center">
      <div class="section-label center">Our Product Range</div>
      <h2 class="section-title light">Premium <span>Chemical</span> Products</h2>
      <p class="section-sub light center">From industrial intermediates to specialty chemicals — engineered to deliver results.</p>
    </div>
    <div class="products-scroll-wrapper" style="margin-top:56px;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;scrollbar-width:none;-ms-overflow-style:none">
      <div class="products-scroll-track" style="display:flex;gap:24px;padding-bottom:8px;min-width:min-content">
        <?php $products = [
          ['slug'=>'paraformaldehyde91','img'=>'images/products/Paraformaldehyde91.jpg','name'=>'Paraformaldehyde 91%','desc'=>'High-purity solid polymer of formaldehyde for resin production, adhesives, and industrial synthesis.','formula'=>'(CH2O)n'],
          ['slug'=>'paraformaldehyde96','img'=>'images/products/Paraformaldehyde96.jpg','name'=>'Paraformaldehyde 96%','desc'=>'High-purity solid polymer of formaldehyde for resin production, adhesives, and industrial synthesis.','formula'=>'(CH2O)n'],
          ['slug'=>'spray-chemicals', 'img'=>'images/products/spraychemicals.png', 'name'=>'Spray Chemicals', 'desc'=>'Precision-formulated specialty sprays for agricultural, industrial, and surface treatment use.','formula'=>''],
          ['slug'=>'melamine', 'img'=>'images/products/MELAMINE.jpeg', 'name'=>'Melamine','desc'=>'High-grade melamine powder for laminates, adhesives, flame retardants, and resins.','formula'=>'C3H6N6'],
          ['slug'=>'phthalic-acid', 'img'=>'images/products/phthalic-acid.jpg', 'name'=>'Phthalic Acid', 'desc'=>'Technical-grade phthalic acid for plasticizers, dyes, pharmaceuticals, and polyesters.','formula'=>'C8H6O4'],
        ];
        foreach ($products as $i => $p) : ?>
        <div class="product-card anim-fade-up" style="flex-shrink:0;width:280px">
         <div class="product-card-thumb" style="background:#0d2035;position:relative;overflow:hidden">
  <img src="<?php echo apm_asset($p['img']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" style="width:100%;height:100%;object-fit:cover;display:block">
  <span class="product-card-formula" style="position:absolute;bottom:8px;right:8px"><?php echo htmlspecialchars($p['formula']); ?></span>
</div>
          <div class="product-card-body">
            <h3><?php echo htmlspecialchars($p['name']); ?></h3>
            <p><?php echo htmlspecialchars($p['desc']); ?></p>
            <a href="<?php echo $base; ?>/products/<?php echo $p['slug']; ?>" class="btn btn-primary btn-sm btn-block">Know More &rarr;</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="text-center" style="margin-top:44px"><a href="<?php echo $base; ?>/products" class="btn btn-outline">View All Products</a></div>
  </div>
</section>

<section class="quality-dark section-pad">
  <div class="container">
    <div class="grid-2" style="align-items:center">
      <div class="anim-fade-left">
        <div class="section-label">Quality &amp; Safety</div>
        <h2 class="section-title light">Uncompromising <span>Standards</span></h2>
        <div class="divider"></div>
        <p class="section-sub light">Every batch undergoes rigorous testing to meet Indian and international regulatory standards.</p>
        <div class="quality-items">
          <div class="quality-item"><div class="quality-num">01</div><div><h4>Raw Material Verification</h4><p>All incoming materials tested for purity, moisture, and chemical composition before production begins.</p></div></div>
          <div class="quality-item"><div class="quality-num">02</div><div><h4>In-Process Quality Control</h4><p>Continuous monitoring at each production stage ensures consistent quality throughout manufacturing.</p></div></div>
          <div class="quality-item"><div class="quality-num">03</div><div><h4>Final Product Testing</h4><p>Finished goods tested against specifications before dispatch to guarantee purity and performance.</p></div></div>
        </div>
        <a href="<?php echo $base; ?>/quality-certifications" class="btn btn-outline" style="margin-top:32px">View Certifications</a>
      </div>
      <div class="cert-cards anim-fade-right">
        <?php $certs = [
          ['icon'=>'🏆','title'=>'ISO 9001:2015 Certified',   'desc'=>'Quality Management System certified for consistent manufacturing processes and customer satisfaction.'],
          ['icon'=>'🛡️','title'=>'BIS / Industry Compliance', 'desc'=>'All products comply with relevant Bureau of Indian Standards and industry-specific regulations.'],
          ['icon'=>'🔬','title'=>'NABL Accredited Testing',    'desc'=>'In-house laboratory with NABL accreditation ensuring traceable, accurate results for all products.'],
          ['icon'=>'♻️','title'=>'Environment &amp; Safety',   'desc'=>'ISO 14001 environmental management and ISO 45001 safety management systems fully implemented.'],
        ];
        foreach ($certs as $c) : ?>
        <div class="cert-card">
          <div class="cert-icon"><?php echo $c['icon']; ?></div>
          <div><h4><?php echo $c['title']; ?></h4><p><?php echo $c['desc']; ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<section class="why-us-light section-pad">
  <div class="container">
    <div class="text-center">
      <div class="section-label center">Why Choose Us</div>
      <h2 class="section-title">The <span>APM</span> Advantage</h2>
      <div class="divider center"></div>
    </div>
    <div class="grid-3" style="margin-top:52px">
      <?php $reasons = [
        ['icon'=>'⚗️','title'=>'High Purity Products',  'desc'=>'99%+ purity in all chemical products, verified by in-house and third-party testing laboratories.'],
        ['icon'=>'⏱️','title'=>'On-Time Delivery',       'desc'=>'Reliable logistics network ensuring prompt delivery across India, minimising your production downtime.'],
        ['icon'=>'💼','title'=>'Technical Expertise',    'desc'=>'20+ years of chemical industry experience, backed by a skilled R&D and production team.'],
        ['icon'=>'🤝','title'=>'Customer First',         'desc'=>'Dedicated account managers and responsive after-sales support for every client, large or small.'],
        ['icon'=>'💰','title'=>'Competitive Pricing',    'desc'=>'Direct manufacturer pricing with flexible order quantities to suit businesses of all sizes.'],
        ['icon'=>'🛡️','title'=>'Safe &amp; Compliant',  'desc'=>'Full regulatory compliance with REACH, BIS, and ISO standards ensuring safe handling and usage.'],
      ];
      foreach ($reasons as $i => $r) : ?>
      <div class="why-card anim-fade-up delay-<?php echo ($i%3)+1; ?>">
        <div class="why-icon"><?php echo $r['icon']; ?></div>
        <h3><?php echo $r['title']; ?></h3>
        <p><?php echo $r['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Ready to Place an Order?</h2>
    <p>Contact our sales team today for custom quotes, bulk orders, and technical specifications tailored to your needs.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Send an Inquiry</a>
      <a href="<?php echo $base; ?>/products" class="btn btn-outline btn-lg">⚗️ View Products</a>
    </div>
    <div class="cta-meta">
      <div class="cta-meta-item"><span>📞</span><div><strong><?php echo apm('phone'); ?></strong>Mon–Sat, 9 AM – 6 PM</div></div>
      <div class="cta-meta-item"><span>📧</span><div><strong><?php echo apm('email'); ?></strong>Response within 24 hours</div></div>
      <div class="cta-meta-item"><span>📍</span><div><strong>Delhi, India</strong>Pan India Delivery</div></div>
    </div>
  </div></div>
</section>
