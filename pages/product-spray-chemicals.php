<?php $page_title = 'Spray Chemicals'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('Spray <span>Chemicals</span>', 'Precision-formulated specialty spray blends for agriculture, industrial surface treatment, and pest control — custom formulations available.', 'Spray Chemicals'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="product-detail-layout">
      <div class="product-detail-sticky">
        <div class="product-detail-img" style="background:#0d2035;overflow:hidden;border-radius:var(--radius-md)">
          <img src="<?php echo apm_asset('images/products/spraychemicals.png'); ?>" alt="Spray Chemicals" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div class="product-detail-actions">
          <a href="<?php echo $base; ?>/contact" class="btn btn-primary btn-block">📩 Request a Quote</a>
          <a href="<?php echo $base; ?>/contact" class="btn btn-outline-dark btn-block">📋 Download TDS / SDS</a>
        </div>
        <div style="margin-top:24px;background:rgba(46,127,193,.06);border:1px solid rgba(46,127,193,.2);border-radius:var(--radius-md);padding:20px">
          <div style="font-family:var(--font-cond);font-size:11px;letter-spacing:2px;text-transform:uppercase;color:var(--sky);margin-bottom:12px">Quick Specs</div>
          <div style="display:flex;flex-direction:column;gap:8px;font-size:13px;color:var(--grey)">
            <div><strong style="color:var(--navy)">Type:</strong> Custom Blend</div>
            <div><strong style="color:var(--navy)">Form:</strong> Liquid concentrate</div>
            <div><strong style="color:var(--navy)">pH Range:</strong> 5.5 – 8.5</div>
            <div><strong style="color:var(--navy)">Grades:</strong> AG / Industrial</div>
            <div><strong style="color:var(--navy)">MOQ:</strong> 200 kg</div>
          </div>
        </div>
      </div>

      <div>
        <div class="info-block">
          <h3>📋 Product Overview</h3>
          <p>APM's Spray Chemicals are precision-engineered liquid formulations developed for agricultural pest control, industrial surface treatment, and specialty cleaning applications. Each blend is developed using high-purity active ingredients, emulsifiers, and stabilizers to ensure consistent efficacy and shelf stability. Custom formulations are available to meet specific client requirements.</p>
        </div>

        <div class="info-block">
          <h3>🧪 Available Grades &amp; Specifications</h3>
          <table class="specs-table">
            <tr><td>AG Grade (Agriculture)</td><td>Herbicide / insecticide emulsifiable concentrates, EC &amp; SC formulations</td></tr>
            <tr><td>Industrial Grade</td><td>Surface cleaners, degreaser concentrates, anti-corrosion sprays</td></tr>
            <tr><td>pH Range</td><td>5.5 – 8.5 (grade-dependent)</td></tr>
            <tr><td>Active Content</td><td>Customised to specification</td></tr>
            <tr><td>Shelf Life</td><td>24 months (sealed, stored correctly)</td></tr>
            <tr><td>Flash Point</td><td>Grade-dependent (&gt;61°C standard)</td></tr>
            <tr><td>Density</td><td>0.95 – 1.15 g/mL (grade-dependent)</td></tr>
            <tr><td>Solubility</td><td>Water-dispersible (all grades)</td></tr>
          </table>
        </div>

        <div class="info-block">
          <h3>🏭 Applications &amp; End Uses</h3>
          <div class="uses-list">
            <?php $uses = [
              ['icon'=>'🌾','use'=>'Agricultural herbicide and pesticide formulations — pre- and post-emergence crop protection.'],
              ['icon'=>'🏭','use'=>'Industrial metal degreaser and surface preparation sprays for manufacturing operations.'],
              ['icon'=>'🏗️','use'=>'Construction and infrastructure anti-corrosion coatings and rust-inhibitor sprays.'],
              ['icon'=>'🦟','use'=>'Public health vector control — mosquito larvicide and residual insecticide formulations.'],
              ['icon'=>'🚗','use'=>'Automotive surface cleaners, pre-treatment sprays, and underbody protective coatings.'],
              ['icon'=>'🏥','use'=>'Disinfectant and sanitation spray formulations for healthcare and food processing facilities.'],
            ];
            foreach ($uses as $u) echo '<div class="use-item"><span class="icon">'.$u['icon'].'</span><span>'.$u['use'].'</span></div>'; ?>
          </div>
        </div>

        <div class="info-block">
          <h3>⚠️ Safety &amp; Handling</h3>
          <div class="safety-grid">
            <div class="safety-item warn"><span class="s-icon">🌡️</span><p><strong>Storage:</strong> Store in original containers at 5–35°C. Keep away from heat, sparks, and direct sunlight.</p></div>
            <div class="safety-item warn"><span class="s-icon">😷</span><p><strong>PPE:</strong> Chemical-resistant gloves, safety goggles, and appropriate respiratory protection mandatory.</p></div>
            <div class="safety-item"><span class="s-icon">🚿</span><p><strong>Spill Response:</strong> Contain spill, absorb with inert material, dispose per local hazardous waste regulations.</p></div>
            <div class="safety-item danger"><span class="s-icon">🚫</span><p><strong>Incompatibility:</strong> Keep away from strong acids, oxidizers. Do not mix grades without technical guidance.</p></div>
          </div>
        </div>

        <div class="info-block">
          <h3>📦 Packaging Options</h3>
          <div class="packaging-grid">
            <div class="pack-item"><span>🧴</span><p>5 L / 20 L HDPE Jerry</p><small>Small quantity</small></div>
            <div class="pack-item"><span>🛢️</span><p>200 L HDPE Drum</p><small>Standard bulk</small></div>
            <div class="pack-item"><span>🏭</span><p>1000 L IBC Tote</p><small>Industrial bulk</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Need a Custom Spray Formulation?</h2>
    <p>Our R&D team can develop spray chemical blends to your exact specification. Contact us to discuss your requirements.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Discuss Your Requirements</a>
  </div></div>
</section>
