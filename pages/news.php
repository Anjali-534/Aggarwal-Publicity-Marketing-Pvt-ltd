<?php $page_title = 'News & Blog'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('News &amp; <span>Insights</span>', 'Industry updates, chemical safety news, product announcements, and company milestones from the APM team.', 'News & Blog'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="blog-grid">
      <?php $posts = [
        ['icon'=>'🔬','bg'=>'bb1','cat'=>'Product Update','date'=>'Feb 2026','title'=>'APM Launches 99% Grade Paraformaldehyde for Pharmaceutical Applications','excerpt'=>'We are pleased to announce the availability of our new pharmaceutical-grade Paraformaldehyde with 99% minimum CH₂O content, specifically developed for API synthesis and laboratory use.'],
        ['icon'=>'🏆','bg'=>'bb2','cat'=>'Certifications','date'=>'Jan 2026','title'=>'ISO 45001:2018 Certification Renewed — Zero Incidents for Fifth Consecutive Year','excerpt'=>'APM has successfully renewed its ISO 45001 Occupational Health & Safety certification, marking five consecutive years of zero lost-time incidents across all manufacturing operations.'],
        ['icon'=>'🌿','bg'=>'bb3','cat'=>'Sustainability','date'=>'Dec 2025','title'=>'APM Commissions New Effluent Treatment Plant Achieving Zero Liquid Discharge','excerpt'=>'Our new ETP facility, commissioned in December 2025, ensures complete treatment and recycling of all process water, eliminating any liquid discharge to the environment.'],
        ['icon'=>'📈','bg'=>'bb4','cat'=>'Industry News','date'=>'Nov 2025','title'=>'India\'s Specialty Chemicals Market Expected to Double by 2030 — APM Positioned for Growth','excerpt'=>'The Indian specialty chemicals sector is forecast to reach USD 64 billion by 2030. APM is expanding production capacity to meet growing demand from pharma, agriculture, and construction industries.'],
        ['icon'=>'🤝','bg'=>'bb5','cat'=>'Partnerships','date'=>'Oct 2025','title'=>'APM Signs Long-Term Supply Agreement with Leading Laminate Manufacturer','excerpt'=>'We have entered into a multi-year supply agreement for high-grade Melamine with one of India\'s top decorative laminate manufacturers, expanding our client base significantly.'],
        ['icon'=>'🔧','bg'=>'bb6','cat'=>'Operations','date'=>'Sep 2025','title'=>'Capacity Expansion Complete — Paraformaldehyde Production Up 40%','excerpt'=>'The Phase 3 capacity expansion of our Paraformaldehyde production line is now operational, increasing annual output by 40% to meet growing market demand from domestic and export clients.'],
      ];
      foreach ($posts as $i => $p) : ?>
      <article class="blog-card anim-fade-up delay-<?php echo ($i%3)+1; ?>">
        <div class="blog-thumb <?php echo $p['bg']; ?>" style="font-size:52px;display:flex;align-items:center;justify-content:center"><?php echo $p['icon']; ?></div>
        <div class="blog-meta-row">
          <span class="blog-tag"><?php echo htmlspecialchars($p['cat']); ?></span>
          <span class="blog-date"><?php echo htmlspecialchars($p['date']); ?></span>
        </div>
        <div class="blog-card-body">
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <p><?php echo htmlspecialchars($p['excerpt']); ?></p>
          <a href="<?php echo $base; ?>/contact" class="blog-read-more">Read Article &rarr;</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Stay Informed</h2>
    <p>Subscribe to APM updates for the latest product news, regulatory changes, and industry insights delivered to your inbox.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📧 Subscribe to Updates</a>
  </div></div>
</section>
