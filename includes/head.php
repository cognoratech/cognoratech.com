<!-- Basic Meta -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo isset($page_title) ? $page_title : 'Cognora Technologies'; ?></title>
<meta name="description" content="<?php echo isset($meta_desc) ? $meta_desc : 'Elevating your digital presence with modern web development, UI/UX design, and innovative IT solutions.'; ?>" />

<?php if(isset($canonical_url)): ?>
<link rel="canonical" href="<?php echo $canonical_url; ?>" />
<?php endif; ?>

<meta name="robots" content="index, follow" />
<meta name="author" content="Cognora Technologies" />

<!-- Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Cognora Technologies'; ?>" />
<meta property="og:description" content="<?php echo isset($meta_desc) ? $meta_desc : ''; ?>" />
<?php if(isset($canonical_url)): ?>
<meta property="og:url" content="<?php echo $canonical_url; ?>" />
<?php endif; ?>
<meta property="og:image" content="https://cognoratech.com/assets/images/og-banner.webp" />
<meta property="og:site_name" content="Cognora Technologies" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'Cognora Technologies'; ?>" />
<meta name="twitter:description" content="<?php echo isset($meta_desc) ? $meta_desc : ''; ?>" />
<meta name="twitter:image" content="https://cognoratech.com/assets/images/og-banner.webp" />

<!-- Theme -->
<meta name="theme-color" content="#060a14" />

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png" />

<!-- Performance preconnects -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com" />
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Styles & Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="/assets/css/tailwind-build.css">

<?php if(isset($extra_head)) echo $extra_head; ?>
