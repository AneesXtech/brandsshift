<?php
/**
 * Configuration & Site Settings - Brands Shift
 * 1:1 Blue Frontier PHP Architecture
 */

define('SITE_NAME', 'Brands Shift');
define('SITE_TAGLINE', 'Elevating Brands Through Creative Strategy & Conversion-Focused Marketing');
// Auto-detect dynamic domain & protocol for Local & Production (Hostinger)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost:8000';
define('SITE_URL', $protocol . $host);
define('LOGO_PATH', 'assets/images/brandss-shift-logo.webp');

// SEO Defaults
define('DEFAULT_META_TITLE', 'Web Design, Development & Digital Marketing | Brands Shift');
define('DEFAULT_META_DESC', 'Brands Shift is a leading UK digital agency providing professional web design, development, mobile app, digital marketing and IT services.');
define('DEFAULT_META_IMAGE', 'assets/images/blue-frontier-og.webp');

// Primary Brand Color Constants
define('COLOR_PURPLE', '#722C89');
define('COLOR_PINK', '#D3207C');
define('COLOR_DARK_BG', '#0A0A0B');

// Contact Information
define('CONTACT_EMAIL', 'Info@brandsshift.com');
define('CONTACT_PHONE', '(425) 270-1121');
define('CONTACT_ADDRESS', '2252 SE 64TH PL Issaquah, WA 98027');

