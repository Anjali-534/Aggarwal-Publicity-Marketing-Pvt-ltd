<?php $page_title = 'About Us'; $base = APM_CONFIG['base_url']; ?>

<?php apm_page_banner('About <span>APM</span>', 'Over two decades of chemical manufacturing excellence — built on integrity, innovation, and an uncompromising commitment to quality.', 'About Us'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="grid-2" style="align-items:center">
      <div class="anim-fade-left">
  <div class="section-label">Our Story</div>
  <h2 class="section-title">From <span>Advertising Roots</span> to Chemical Excellence</h2>
  <div class="divider"></div>

  <p style="font-size:15px;color:var(--grey);line-height:1.8;margin-bottom:18px">
    Founded in 1994 by the Aggarwal family in Delhi, APM began its journey as an advertising and publicity company, building strong relationships and a solid market presence over two decades.
  </p>

  <p style="font-size:15px;color:var(--grey);line-height:1.8;margin-bottom:18px">
    In 2014, the company strategically diversified into the chemical industry, evolving into a trusted manufacturer and supplier of Paraformaldehyde, Spray Chemicals, Melamine, and Phthalic Acid.
  </p>

  <p style="font-size:15px;color:var(--grey);line-height:1.8;margin-bottom:18px">
    Today, we serve 500+ clients across pharmaceuticals, agriculture, plastics, textiles, and construction — delivering high-quality products with consistency and reliability across India.
  </p>

  <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:32px">
    <?php 
    $stats = [
      ['500+','Happy Clients'],
      ['4','Core Products'],
      ['30+','Years Legacy'],
      ['ISO','9001:2015']
    ];
    foreach ($stats as $s) : ?>
    <div style="background:var(--white);border-radius:var(--radius-md);padding:22px;border:1px solid rgba(11,31,58,.08);box-shadow:var(--shadow-sm);text-align:center">
      <strong style="font-family:var(--font-head);font-size:42px;color:var(--sky);display:block"><?php echo $s[0]; ?></strong>
      <span style="font-family:var(--font-cond);font-size:12px;letter-spacing:2px;text-transform:uppercase;color:var(--grey)"><?php echo $s[1]; ?></span>
    </div>
    <?php endforeach; ?>
  </div>
</div>
      <div class="anim-fade-right">
  <div style="border-radius:var(--radius-md);overflow:hidden;min-height:420px">
    <img src="<?php echo apm_asset('images/team/anil.jpg'); ?>" alt="APM Chemical Facility" style="width:100%;height:100%;object-fit:cover;display:block;min-height:420px">
  </div>
</div>

    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="text-center" style="margin-bottom:60px">
      <div class="section-label center">Our Journey</div>
      <h2 class="section-title">A Timeline of <span>Growth</span></h2>
    </div>
    <?php 
$timeline = [
  [
    'year' => '1994',
    'title' => 'Company Founded',
    'desc' => 'Aggarwal Publicity Marketing Pvt. Ltd. was established in Delhi as an advertising and publicity company.'
  ],
  [
    'year' => '2014',
    'title' => 'Advertising Era',
    'desc' => 'Successfully operated as an advertising company, building strong client relationships and market presence over two decades.'
  ],
  [
    'year' => '2014',
    'title' => 'Entry into Chemical Industry',
    'desc' => 'Strategically diversified into the chemical industry, marking a new phase of business growth and expansion.'
  ],
  [
    'year' => '2016',
    'title' => 'Manufacturing & Distribution Expansion',
    'desc' => 'Established production capabilities and built a strong distribution network across multiple states in India.'
  ],
  [
    'year' => '2020',
    'title' => 'R&D Laboratory',
    'desc' => 'Set up an in-house R&D laboratory to ensure product quality and innovation in chemical manufacturing.'
  ],
  [
    'year' => '2024',
    'title' => 'Sustainability Drive',
    'desc' => 'Implemented environmentally responsible practices, focusing on reducing waste and improving efficiency.'
  ],
];
    foreach ($timeline as $i => $t) : ?>
    <div class="timeline-item anim-fade-up delay-<?php echo ($i%3)+1; ?>">
      <div class="timeline-dot"><?php echo $t['year']; ?></div>
      <div class="timeline-content" style="padding-top:6px">
        <h4><?php echo htmlspecialchars($t['title']); ?></h4>
        <p><?php echo htmlspecialchars($t['desc']); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section-pad bg-off">
  
  <div class="container">
    <div class="text-center" style="margin-bottom:50px">
      <div class="section-label center">Our Foundation</div>
      <h2 class="section-title">Vision, Mission <span>&</span> Values</h2>
    </div>
    <div class="vm-grid">
      <?php $cards = [
        ['data-bg'=>'VISION',  'icon'=>'🔭','title'=>'Our Vision', 'body'=>'To be India\'s most trusted specialty chemical manufacturer — known for unmatched purity, safety, and innovation that enables our clients\' industries to grow with confidence.'],
        ['data-bg'=>'MISSION', 'icon'=>'🎯','title'=>'Our Mission','body'=>'Delivering high-purity chemicals through rigorous quality control, responsible manufacturing, and a customer-centric approach that builds long-term partnerships across all industries we serve.'],
        ['data-bg'=>'VALUES',  'icon'=>'💎','title'=>'Our Values', 'body'=>'Integrity in every transaction. Quality without compromise. Safety at the forefront. Sustainability for future generations. These are not just words — they are the standards we hold ourselves to every day.'],
        ['data-bg'=>'TEAM',    'icon'=>'👥','title'=>'Our Team',   'body'=>'A dedicated team of chemists, engineers, and logistics professionals united by a passion for excellence. Over 50 skilled employees working together to deliver the best possible products and service.'],
      ];
      foreach ($cards as $c) : ?>
      <div class="vm-card anim-fade-up" data-bg="<?php echo $c['data-bg']; ?>">
        <h3><?php echo $c['icon']; ?> <?php echo $c['title']; ?></h3>
        <p><?php echo htmlspecialchars($c['body']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<section class="section-pad bg-off">
  <div class="container">
    <div class="text-center" style="margin-bottom:52px">
      <div class="section-label center">Giving Back</div>
      <h2 class="section-title">Our <span>Social Initiatives</span></h2>
      <p class="section-sub center" style="margin-top:14px">At APM, we believe business success comes with a responsibility to give back to the community and environment we operate in.</p>
    </div>

    <!-- Hamara Book Bank – Featured Initiative -->
    <div style="background:var(--navy);border-radius:var(--radius-md);padding:48px;margin-bottom:48px;display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center">
      <div>
        <div style="display:inline-flex;align-items:center;gap:10px;background:rgba(232,160,32,.15);border:1px solid rgba(232,160,32,.3);border-radius:100px;padding:6px 18px;margin-bottom:20px">
          <span>📚</span>
          <span style="font-family:var(--font-cond);font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--accent)">Featured Initiative</span>
        </div>
        <h3 style="font-family:var(--font-head);font-size:clamp(32px,4vw,52px);color:var(--white);letter-spacing:1px;line-height:1;margin-bottom:16px">Hamara <span style="color:var(--accent)">Book Bank</span></h3>
        <p style="font-size:15px;color:var(--silver);line-height:1.8;margin-bottom:16px">Hamara Book Bank is APM's flagship community initiative — a free book lending and donation drive dedicated to making quality education accessible for every child, regardless of financial background.</p>
        <p style="font-size:15px;color:var(--silver);line-height:1.8;margin-bottom:24px">We collect used textbooks, notebooks, and study materials from donors and distribute them free of cost to underprivileged students in Delhi's Paharganj, Multani Dhanda, and surrounding areas — ensuring no child misses out on learning due to lack of resources.</p>
        <div style="display:flex;flex-wrap:wrap;gap:12px;margin-bottom:28px">
          <span style="padding:6px 16px;background:rgba(232,160,32,.12);border:1px solid rgba(232,160,32,.25);border-radius:100px;font-family:var(--font-cond);font-size:12px;color:var(--accent);letter-spacing:1px">Free Book Distribution</span>
          <span style="padding:6px 16px;background:rgba(232,160,32,.12);border:1px solid rgba(232,160,32,.25);border-radius:100px;font-family:var(--font-cond);font-size:12px;color:var(--accent);letter-spacing:1px">Book Donation Drive</span>
          <span style="padding:6px 16px;background:rgba(232,160,32,.12);border:1px solid rgba(232,160,32,.25);border-radius:100px;font-family:var(--font-cond);font-size:12px;color:var(--accent);letter-spacing:1px">Community Education</span>
        </div>
        <a href="<?php echo $base; ?>/contact" class="btn btn-accent">📖 Donate Books / Partner With Us</a>
      </div>
      <div style="border-radius:var(--radius-md);overflow:hidden;min-height:340px;background:#0d2035">
        <img src="<?php echo apm_asset('images/team/anil.jpg'); ?>" alt="Hamara Book Bank" style="width:100%;height:100%;object-fit:cover;display:block;min-height:340px">
      </div>
    </div>

   

    <!-- Impact Numbers -->
    <div style="background:var(--white);border-radius:var(--radius-md);padding:40px;margin-top:48px;border:1px solid rgba(11,31,58,.08);box-shadow:var(--shadow-sm);display:grid;grid-template-columns:repeat(4,1fr);gap:32px;text-align:center">
      <?php $impact = [
        ['1000+','Books Distributed'],
        ['500+','Children Supported'],
        ['1000+','Trees Planted'],
        ['10+','NGO Partnerships'],
      ];
      foreach ($impact as $imp) : ?>
      <div>
        <strong style="font-family:var(--font-head);font-size:48px;color:var(--sky);display:block;line-height:1"><?php echo $imp[0]; ?></strong>
        <span style="font-family:var(--font-cond);font-size:12px;letter-spacing:2px;text-transform:uppercase;color:var(--grey)"><?php echo $imp[1]; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="text-center" style="margin-bottom:10px">
      <div class="section-label center">The People Behind APM</div>
      <h2 class="section-title">Our Leadership <span>Team</span></h2>
    </div>
    <div class="team-grid">
      <?php $team = [
    ['avatar'=>'images/team/anil.jpg', 'name'=>'Anil Aggarwal', 'role'=>' Director',  'bio'=>'Founder with 25+ years in specialty chemicals. Drives strategy, quality vision, and pan-India partnerships.'],
    ['avatar'=>'images/team/priya.jpg',  'name'=>'Dhriti Aggarwal',    'role'=>'Head of R&D',         'bio'=>'PhD Chemistry, IIT Delhi. Leads product innovation, formulation, and in-house laboratory operations.'],
    ['avatar'=>'images/team/anjali.png', 'name'=>'Anjali Aggarwal',    'role'=>'Plant Manager',       'bio'=>'15+ years in chemical production. Oversees daily manufacturing, safety protocols, and capacity planning.'],
    ['avatar'=>'images/team/anjali.jpg', 'name'=>'Tushar Aggarwal',    'role'=>'Sales Director',      'bio'=>'Pan-India sales network. Manages 500+ client relationships across pharma, agriculture, and construction.'],
    ['avatar'=>'images/team/suresh.jpg', 'name'=>'Suresh Gupta',    'role'=>'Quality Assurance',   'bio'=>'NABL-certified QA lead. Ensures every batch meets ISO, BIS, and customer specification requirements.'],
    ['avatar'=>'images/team/rekha.jpg',  'name'=>'Rekha Joshi',     'role'=>'Logistics Head',      'bio'=>'20 years in chemical logistics. Manages safe, compliant delivery across 25+ states with zero-incident record.'],
];
      foreach ($team as $m) : ?>
      <div class="team-card anim-fade-up">
        <div class="team-avatar" style="background:#f0f4f8;overflow:hidden">
  <img src="<?php echo apm_asset($m['avatar']); ?>" alt="<?php echo htmlspecialchars($m['name']); ?>" style="width:100%;height:100%;object-fit:cover">
</div>
        <div class="team-card-body">
          <h3><?php echo htmlspecialchars($m['name']); ?></h3>
          <span><?php echo htmlspecialchars($m['role']); ?></span>
          <p><?php echo htmlspecialchars($m['bio']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container"><div class="cta-inner">
    <h2>Let's Work Together</h2>
    <p>Partner with India's trusted chemical manufacturer for consistent quality, reliable supply, and expert support.</p>
    <a href="<?php echo $base; ?>/contact" class="btn btn-accent btn-lg">📩 Get In Touch</a>
  </div></div>
</section>
