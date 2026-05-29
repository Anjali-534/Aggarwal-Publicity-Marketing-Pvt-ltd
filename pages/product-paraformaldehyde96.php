<?php $page_title = 'Paraformaldehyde 96%'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('Paraformaldehyde 96%<span>(CH₂O)ₙ</span>', 'High-purity solid polymer of formaldehyde for industrial synthesis, resin production, and specialty chemical manufacturing.', 'Paraformaldehyde'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="product-detail-layout">
      <div class="product-detail-sticky">
        <div class="product-detail-img" style="background:#0d2035;overflow:hidden;border-radius:var(--radius-md)">
          <img src="<?php echo apm_asset('images/products/paraformaldehyde96.jpg'); ?>" alt="Paraformaldehyde" style="width:100%;height:100%;object-fit:cover;display:block">
        </div>
        <div class="product-detail-actions">
          <a href="<?php echo $base; ?>/contact" class="btn btn-primary btn-block">📩 Request a Quote</a>
          <a href="<?php echo $base; ?>/contact" class="btn btn-outline-dark btn-block">📋 Download TDS / COA</a>
        </div>
        <div style="margin-top:24px;background:rgba(46,127,193,.06);border:1px solid rgba(46,127,193,.2);border-radius:var(--radius-md);padding:20px">
          <div style="font-family:var(--font-cond);font-size:11px;letter-spacing:2px;text-transform:uppercase;color:var(--sky);margin-bottom:12px">Quick Specs</div>
          <div style="display:flex;flex-direction:column;gap:8px;font-size:13px;color:var(--grey)">
            <div><strong style="color:var(--navy)">CAS No.:</strong> 30525-89-4</div>
            <div><strong style="color:var(--navy)">Purity:</strong> 91–99% CH₂O</div>
            <div><strong style="color:var(--navy)">Form:</strong> Powder / Granular</div>
            <div><strong style="color:var(--navy)">Appearance:</strong> White solid</div>
            <div><strong style="color:var(--navy)">HS Code:</strong> 2912 60 00</div>
          </div>
        </div>
      </div>

      <div>
        <div class="info-block">
          <h3>📋 Product Overview</h3>
          <p>Paraformaldehyde (PFA) 96% is the solid polymerized form of formaldehyde, consisting of chains of CH₂O units (n = 8–100). APM manufactures pharmaceutical and industrial grade PFA with purity levels of 91%, 95%, and 99% CH₂O content, supplied as fine white powder or uniform granules.</p>
        </div>

        <div class="info-block">
          <h3>🧪 Technical Specifications</h3>
          <table class="specs-table">
            <tr><td>Chemical Formula</td><td>(CH₂O)ₙ</td></tr>
            <tr><td>CAS Number</td><td>30525-89-4</td></tr>
            <tr><td>Molecular Weight</td><td>30.03 (monomer)</td></tr>
            <tr><td>Purity (CH₂O content)</td><td>96% min</td></tr>
            <tr><td>Appearance</td><td>White crystalline powder or granules</td></tr>
            <tr><td>Moisture Content</td><td>≤ 0.5% (99% grade)</td></tr>
            <tr><td>Melting Point</td><td>120–170°C (decomposes)</td></tr>
            <tr><td>Bulk Density</td><td>Powder: ~400 g/L; Granular: ~650 g/L</td></tr>
            <tr><td>pH (1% aqueous)</td><td>2.8 – 4.0</td></tr>
            <tr><td>Ash Content</td><td>≤ 0.01%</td></tr>
          </table>
        </div>

        <div class="info-block">
          <h3>🏭 Applications &amp; End Uses</h3>
          <div class="uses-list">
            <?php $uses = [
              ['icon'=>'🔩','use'=>'Urea-formaldehyde &amp; phenol-formaldehyde resins for plywood, MDF boards, and particleboard manufacturing.'],
              ['icon'=>'💊','use'=>'Pharmaceutical intermediate for synthesis of bulk drugs, disinfectants, and preservatives.'],
              ['icon'=>'🌱','use'=>'Agrochemical manufacturing — herbicide and pesticide synthesis including glyphosate.'],
              ['icon'=>'🧵','use'=>'Textile finishing agents, wrinkle-resistant and durable press fabric treatments.'],
              ['icon'=>'🔬','use'=>'Laboratory reagent and biological specimen preservation (fixative solution).'],
              ['icon'=>'⚙️','use'=>'Metal surface treatment, corrosion inhibitors, and oil-field chemical applications.'],
            ];
            foreach ($uses as $u) echo '<div class="use-item"><span class="icon">'.$u['icon'].'</span><span>'.$u['use'].'</span></div>'; ?>
          </div>
        </div>

        <div class="info-block">
          <h3>⚠️ Safety &amp; Handling</h3>
          <div class="safety-grid">
            <div class="safety-item warn"><span class="s-icon">🌡️</span><p><strong>Storage:</strong> Store in cool, dry, ventilated area below 25°C. Keep away from heat sources and open flame.</p></div>
            <div class="safety-item warn"><span class="s-icon">😷</span><p><strong>PPE Required:</strong> Use respiratory protection (P2 mask), chemical-resistant gloves, and safety goggles.</p></div>
            <div class="safety-item danger"><span class="s-icon">🔥</span><p><strong>Flammable:</strong> Combustible solid. Flash point ~71°C. Keep away from ignition sources.</p></div>
            <div class="safety-item danger"><span class="s-icon">⚕️</span><p><strong>Health:</strong> Irritant to eyes, skin, and respiratory tract. Suspected carcinogen (IARC Group 1).</p></div>
          </div>
        </div>

        <div class="info-block">
          <h3>📦 Packaging Options</h3>
          <div class="packaging-grid">
            <div class="pack-item"><span>🛍️</span><p>25 kg HDPE Bags</p><small>Standard packaging</small></div>
            <div class="pack-item"><span>🛢️</span><p>50 kg Fibre Drums</p><small>Granular grade</small></div>
            <div class="pack-item"><span>📦</span><p>500 kg Jumbo Bags</p><small>Bulk industrial</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Request Paraformaldehyde Pricing</h2>
    <p>Contact our sales team for competitive pricing, custom grades, and bulk order arrangements.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Get a Quote Now</a>
  </div></div>
</section>
