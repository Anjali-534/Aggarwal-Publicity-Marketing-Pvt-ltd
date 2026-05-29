<?php $page_title = 'Melamine'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('Melamine <span>C₃H₆N₆</span>', 'High-grade melamine powder for laminates, resins, flame retardants, and specialty coatings — 99.8% purity guaranteed.', 'Melamine'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="product-detail-layout">
      <div class="product-detail-sticky">
        <div class="product-detail-img" style="background:#0d2035;overflow:hidden;border-radius:var(--radius-md)">
          <img src="<?php echo apm_asset('images/products/MELAMINE.jpeg'); ?>" alt="Melamine" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div class="product-detail-actions">
          <a href="<?php echo $base; ?>/contact" class="btn btn-primary btn-block">📩 Request a Quote</a>
          <a href="<?php echo $base; ?>/contact" class="btn btn-outline-dark btn-block">📋 Download TDS / COA</a>
        </div>
        <div style="margin-top:24px;background:rgba(46,127,193,.06);border:1px solid rgba(46,127,193,.2);border-radius:var(--radius-md);padding:20px">
          <div style="font-family:var(--font-cond);font-size:11px;letter-spacing:2px;text-transform:uppercase;color:var(--sky);margin-bottom:12px">Quick Specs</div>
          <div style="display:flex;flex-direction:column;gap:8px;font-size:13px;color:var(--grey)">
            <div><strong style="color:var(--navy)">CAS No.:</strong> 108-78-1</div>
            <div><strong style="color:var(--navy)">Purity:</strong> 99.8% min</div>
            <div><strong style="color:var(--navy)">Form:</strong> White powder</div>
            <div><strong style="color:var(--navy)">Nitrogen:</strong> 66% min</div>
            <div><strong style="color:var(--navy)">HS Code:</strong> 2933 61 00</div>
          </div>
        </div>
      </div>

      <div>
        <div class="info-block">
          <h3>📋 Product Overview</h3>
          <p>Melamine (1,3,5-triazine-2,4,6-triamine) is a nitrogen-rich heterocyclic compound used extensively in resin manufacturing, surface coatings, and fire-retardant applications. APM supplies premium-grade melamine powder with 99.8% min purity, low moisture, and consistent particle size distribution.</p>
        </div>

        <div class="info-block">
          <h3>🧪 Technical Specifications</h3>
          <table class="specs-table">
            <tr><td>Chemical Formula</td><td>C₃H₆N₆</td></tr>
            <tr><td>CAS Number</td><td>108-78-1</td></tr>
            <tr><td>Molecular Weight</td><td>126.12 g/mol</td></tr>
            <tr><td>Purity (melamine)</td><td>≥ 99.8%</td></tr>
            <tr><td>Nitrogen Content</td><td>≥ 66%</td></tr>
            <tr><td>Appearance</td><td>White crystalline powder</td></tr>
            <tr><td>Moisture Content</td><td>≤ 0.1%</td></tr>
            <tr><td>Melting Point</td><td>354°C (decomposes)</td></tr>
            <tr><td>pH (10% aqueous)</td><td>7.5 – 9.0</td></tr>
            <tr><td>Ash Content</td><td>≤ 0.03%</td></tr>
          </table>
        </div>

        <div class="info-block">
          <h3>🏭 Applications &amp; End Uses</h3>
          <div class="uses-list">
            <?php $uses = [
              ['icon'=>'🪵','use'=>'High-pressure laminates (HPL) and decorative laminates for furniture and flooring surfaces.'],
              ['icon'=>'🔥','use'=>'Flame retardant additive for textiles, plastics, and intumescent coatings.'],
              ['icon'=>'🔗','use'=>'Melamine-formaldehyde (MF) resins for adhesives, binders, and surface coatings.'],
              ['icon'=>'📰','use'=>'Paper and textile treatment for wet-strength improvement and water resistance.'],
              ['icon'=>'🍽️','use'=>'Melamine dinnerware and kitchenware — FDA food-contact compliant grades available.'],
              ['icon'=>'🏗️','use'=>'Concrete superplasticizers and construction chemical additives.'],
            ];
            foreach ($uses as $u) echo '<div class="use-item"><span class="icon">'.$u['icon'].'</span><span>'.$u['use'].'</span></div>'; ?>
          </div>
        </div>

        <div class="info-block">
          <h3>⚠️ Safety &amp; Handling</h3>
          <div class="safety-grid">
            <div class="safety-item warn"><span class="s-icon">🌡️</span><p><strong>Storage:</strong> Store in dry, cool conditions below 30°C. Avoid humidity. Keep containers sealed.</p></div>
            <div class="safety-item warn"><span class="s-icon">😷</span><p><strong>PPE:</strong> Dust mask, protective gloves, and safety glasses when handling powder form.</p></div>
            <div class="safety-item"><span class="s-icon">✅</span><p><strong>Stability:</strong> Stable under normal conditions. Low acute toxicity. Non-flammable solid.</p></div>
            <div class="safety-item"><span class="s-icon">🌊</span><p><strong>Disposal:</strong> Dispose as per local industrial waste regulations. Do not discharge to waterways.</p></div>
          </div>
        </div>

        <div class="info-block">
          <h3>📦 Packaging Options</h3>
          <div class="packaging-grid">
            <div class="pack-item"><span>🛍️</span><p>25 kg PP Bags</p><small>Standard supply</small></div>
            <div class="pack-item"><span>📦</span><p>500 kg Jumbo Bags</p><small>Bulk orders</small></div>
            <div class="pack-item"><span>🏭</span><p>Bulk Tanker</p><small>On request</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Request Melamine Pricing</h2>
    <p>Talk to our team for bulk pricing, technical data sheets, and custom supply arrangements.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Get a Quote Now</a>
  </div></div>
</section>
