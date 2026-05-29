<?php $page_title = 'Phthalic Acid'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('Phthalic Acid <span>C₈H₆O₄</span>', 'Technical-grade phthalic acid for plasticizers, synthetic dyes, pharmaceutical intermediates, and polyester resin manufacturing.', 'Phthalic Acid'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="product-detail-layout">
      <div class="product-detail-sticky">
        <div class="product-detail-img" style="background:#0d2035;overflow:hidden;border-radius:var(--radius-md)">
          <img src="<?php echo apm_asset('images/products/paraformaldehyde.jpg'); ?>" alt="Paraformaldehyde" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div class="product-detail-actions">
          <a href="<?php echo $base; ?>/contact" class="btn btn-primary btn-block">📩 Request a Quote</a>
          <a href="<?php echo $base; ?>/contact" class="btn btn-outline-dark btn-block">📋 Download TDS / COA</a>
        </div>
        <div style="margin-top:24px;background:rgba(46,127,193,.06);border:1px solid rgba(46,127,193,.2);border-radius:var(--radius-md);padding:20px">
          <div style="font-family:var(--font-cond);font-size:11px;letter-spacing:2px;text-transform:uppercase;color:var(--sky);margin-bottom:12px">Quick Specs</div>
          <div style="display:flex;flex-direction:column;gap:8px;font-size:13px;color:var(--grey)">
            <div><strong style="color:var(--navy)">CAS No.:</strong> 88-99-3</div>
            <div><strong style="color:var(--navy)">Purity:</strong> 99.5% min</div>
            <div><strong style="color:var(--navy)">Form:</strong> White powder/flakes</div>
            <div><strong style="color:var(--navy)">MP:</strong> 205–208°C</div>
            <div><strong style="color:var(--navy)">HS Code:</strong> 2917 35 00</div>
          </div>
        </div>
      </div>

      <div>
        <div class="info-block">
          <h3>📋 Product Overview</h3>
          <p>Phthalic acid (benzene-1,2-dicarboxylic acid) is an aromatic dicarboxylic acid that serves as a key intermediate in the synthesis of plasticizers, dyes, resins, and specialty chemicals. APM supplies technical-grade phthalic acid at 99.5%+ purity with consistent particle size and low heavy metal content.</p>
        </div>

        <div class="info-block">
          <h3>🧪 Technical Specifications</h3>
          <table class="specs-table">
            <tr><td>Chemical Formula</td><td>C₈H₆O₄</td></tr>
            <tr><td>CAS Number</td><td>88-99-3</td></tr>
            <tr><td>Molecular Weight</td><td>166.13 g/mol</td></tr>
            <tr><td>Purity</td><td>≥ 99.5%</td></tr>
            <tr><td>Appearance</td><td>White powder or flakes</td></tr>
            <tr><td>Melting Point</td><td>205–208°C</td></tr>
            <tr><td>Moisture Content</td><td>≤ 0.2%</td></tr>
            <tr><td>Ash Content</td><td>≤ 0.05%</td></tr>
            <tr><td>Iron Content</td><td>≤ 5 ppm</td></tr>
            <tr><td>Solubility</td><td>Slightly soluble in water; soluble in ethanol</td></tr>
          </table>
        </div>

        <div class="info-block">
          <h3>🏭 Applications &amp; End Uses</h3>
          <div class="uses-list">
            <?php $uses = [
              ['icon'=>'🧴','use'=>'Plasticizer production (DOP, DBP) for PVC processing, flexible tubing, and cable sheathing.'],
              ['icon'=>'🎨','use'=>'Synthetic dye and pigment intermediate — anthraquinone, alizarin, and indigo dye precursor.'],
              ['icon'=>'💊','use'=>'Pharmaceutical intermediate for synthesis of sedatives, anti-inflammatory APIs, and vitamins.'],
              ['icon'=>'🏺','use'=>'Alkyd and polyester resin production for paints, varnishes, and surface coatings.'],
              ['icon'=>'🪞','use'=>'Unsaturated polyester resins for FRP composites and fiberglass-reinforced products.'],
              ['icon'=>'🔬','use'=>'Laboratory chemical and analytical standard in quality control workflows.'],
            ];
            foreach ($uses as $u) echo '<div class="use-item"><span class="icon">'.$u['icon'].'</span><span>'.$u['use'].'</span></div>'; ?>
          </div>
        </div>

        <div class="info-block">
          <h3>⚠️ Safety &amp; Handling</h3>
          <div class="safety-grid">
            <div class="safety-item warn"><span class="s-icon">🌡️</span><p><strong>Storage:</strong> Store in cool (below 25°C), dry area away from strong oxidizers and bases. Keep sealed.</p></div>
            <div class="safety-item warn"><span class="s-icon">😷</span><p><strong>PPE:</strong> Dust respirator, chemical-resistant gloves, and eye protection required when handling.</p></div>
            <div class="safety-item"><span class="s-icon">⚡</span><p><strong>Reactivity:</strong> Avoid contact with strong alkalis and oxidising agents. Low flammability risk.</p></div>
            <div class="safety-item danger"><span class="s-icon">👁️</span><p><strong>Irritant:</strong> May cause skin and eye irritation. Dust inhalation should be avoided.</p></div>
          </div>
        </div>

        <div class="info-block">
          <h3>📦 Packaging Options</h3>
          <div class="packaging-grid">
            <div class="pack-item"><span>🛍️</span><p>25 kg Multi-wall Bags</p><small>Standard supply</small></div>
            <div class="pack-item"><span>🛢️</span><p>50 kg Fibre Drums</p><small>Export grade</small></div>
            <div class="pack-item"><span>📦</span><p>500–1000 kg FIBC</p><small>Bulk industrial</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Request Phthalic Acid Pricing</h2>
    <p>Get competitive pricing and technical data sheets from our sales team today.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Get a Quote Now</a>
  </div></div>
</section>
