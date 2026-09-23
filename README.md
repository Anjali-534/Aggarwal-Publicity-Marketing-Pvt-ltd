# APM Chemical – PHP Website
### Aggarwal Publicity Marketing Pvt. Ltd.

A complete standalone PHP website. **No WordPress, no framework, no database required.**

---

## Quick Start (XAMPP)

1. Copy the `apm-php/` folder to `C:\xampp\htdocs\`
2. Start Apache in XAMPP Control Panel
3. Visit: **http://localhost/apm-php/**

---

## File Structure

```
apm-php/
├── index.php              ← Main router (all URLs go here)
├── .htaccess              ← URL rewriting rules (mod_rewrite)
├── includes/
│   ├── functions.php      ← Helper functions (apm_url, apm_title, etc.)
│   ├── header.php         ← Site <head> + navigation
│   ├── footer.php         ← Footer + WhatsApp button + lightbox
│   └── contact-handler.php ← AJAX/POST form processor
├── pages/
│   ├── home.php           → /
│   ├── about.php          → /about
│   ├── products.php       → /products
│   ├── product-paraformaldehyde.php → /products/paraformaldehyde
│   ├── product-spray-chemicals.php  → /products/spray-chemicals
│   ├── product-melamine.php         → /products/melamine
│   ├── product-phthalic-acid.php    → /products/phthalic-acid
│   ├── gallery.php        → /gallery
│   ├── quality.php        → /quality-certifications
│   ├── news.php           → /news
│   ├── contact.php        → /contact
│   └── 404.php            → (any unknown URL)
└── assets/
    ├── css/main.css       ← Full stylesheet (1200+ lines)
    └── js/main.js         ← Navigation, animations, lightbox, AJAX form
```

---

## Configuration

Open `index.php` and edit the `APM_CONFIG` array at the top:

```php
define('APM_CONFIG', [
    'site_name'  => 'Aggarwal Publicity Marketing Pvt. Ltd.',
    'phone'      => '+91 98765 43210',
    'email'      => 'info@aggarwalpublicity.com',
    'address'    => 'Plot No. 45, Industrial Area, Phase-II, New Delhi – 110020, India',
    'whatsapp'   => '919876543210',
    'base_url'   => '',   // Change to '/apm-php' if not at root
]);
```

If deployed in a subfolder (e.g. `http://localhost/apm-php/`), set:
```php
'base_url' => '/apm-php',
```

---

## Contact Form

The contact form submits via AJAX to `includes/contact-handler.php`.
- On **localhost**: form always shows success (mail() doesn't send on local).
- On **live server**: configure `mail()` or replace with PHPMailer/SMTP.

---

## Requirements

- PHP 7.4+ (PHP 8.x recommended)
- Apache with `mod_rewrite` enabled
- No database required

---

## Deployment on Live Server

1. Upload entire `apm-php/` folder to your web root or public_html.
2. Set `base_url` to `''` if at root, or `/folder-name` if in a subfolder.
3. Ensure `.htaccess` is present and `AllowOverride All` is set in Apache config.
4. For emails: configure SMTP in `contact-handler.php`.
