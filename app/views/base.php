<?php if(isset($page) && isset($bundle) && isset($content) && isset($section)): ?>
    <?php $bundle->start(); ?>
        <script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/vendor/blz-std/blz.js"></script>
        <script type="text/javascript" src="assets/vendor/fomantic-ui/semantic.min.js"></script>
        <?php if(file_exists(DOCROOT . 'assets/js/sections/section-' . $section . '.js')): ?>
            <script type="text/javascript" src="assets/js/sections/section-<?php echo $section; ?>.js"></script>
        <?php endif; ?>
        <?php if(file_exists(DOCROOT . 'assets/js/pages/page-' . $page . '.js')): ?>
            <script type="text/javascript" src="assets/js/pages/page-<?php echo $page; ?>.js"></script>
        <?php endif; ?>
        <script type="text/javascript" src="assets/js/components/header.js"></script>
        <script type="text/javascript" src="assets/js/base.js"></script>
        <?php if($section === 4): ?>
            <!-- Watch -->
            <script type="text/javascript" src="assets/vendor/clappr/clappr.min.js"></script>
            <script type="text/javascript" src="assets/vendor/clappr/plugins/clappr-thumbnails-plugin/clappr-thumbnails-plugin.min.js"></script>
            <script type="text/javascript" src="assets/js/components/video.js"></script>        
        <?php endif; ?>
        <link media="screen" type="text/css" href="assets/vendor/blz-std/blz.css">
        <link media="screen" type="text/css" href="assets/vendor/fomantic-ui/semantic.min.css">
        <link media="screen" type="text/css" href="assets/css/base.css">
        <link media="screen" type="text/css" href="assets/css/components/header.css">
        <?php if(file_exists(DOCROOT . 'assets/css/sections/section-' . $section . '.css')): ?>
            <link media="screen" type="text/css" href="assets/css/sections/section-<?php echo $section; ?>.css">
        <?php endif; ?>
        <?php if(file_exists(DOCROOT . 'assets/css/pages/page-' . $page . '.css')): ?>
            <link media="screen" type="text/css" href="assets/css/pages/page-<?php echo $page; ?>.css">
        <?php endif; ?>
        <?php if($page === 21): ?>
            <script type="text/javascript" src="assets/vendor/dropzone/dropzone.min.js"></script>
            <link media="screen" type="text/css" href="assets/vendor/dropzone/dropzone.min.css">
            <link media="screen" type="text/css" href="assets/vendor/dropzone/basic.min.css">
        <?php endif; ?>
    <?php $bundle->end(); ?>

    <!DOCTYPE html>
    <html lang="en" itemscope itemtype="https://schema.org/Organization" dir="ltr">
        <head>
            <meta charset="UTF-8">        <base href="<?php echo Uri::base(); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Corporation",
                    "name": "Blazed Labs LLC",
                    "url": "https://blazed.watch/",
                    "logo": "https://www.blazedlabs.com/images/blz-Beaker-Red.png",
                    "sameAs": [
                        "https://www.facebook.com/blazedlabs/",
                        "https://www.linkedin.com/company/blazed-labs",
                        "https://github.com/blazed-labs/",
                        "https://blazedlabs.com/"
                    ]
                }
            </script>

            <?php echo $bundle->renderCss(); ?>
            
            <!-- 
                Favicon 
                https://www.favicon-generator.org/
            -->
            <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Uri::base(); ?>assets/img/icons/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo Uri::base(); ?>assets/img/icons/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Uri::base(); ?>assets/img/icons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="<?php echo Uri::base(); ?>assets/img/icons/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Uri::base(); ?>assets/img/icons/favicon-16x16.png">
            <link rel="manifest" href="<?php echo Uri::base(); ?>assets/manifest.json">
            <meta name="msapplication-TileColor" content="<?php echo $color; ?>">
            <meta name="msapplication-TileImage" content="<?php echo Uri::base(); ?>assets/img/icons/ms-icon-144x144.png">
            <meta name="theme-color" content="<?php echo $color; ?>">

            <meta name="generator" content="blz">
            <meta name="robots" content="index,follow">
            <meta name="googlebot" content="index,follow">
            <link rel="author" href="<?php echo Uri::base(); ?>assets/txt/humans.txt">
            <link rel="license" href="<?php echo Uri::base(); ?>assets/txt/license.txt">
            <link rel="me" href="https://blazed.info/" type="text/html">
            <link rel="me" href="mailto:<?php echo $contact_email; ?>">
            
            <title><?php echo $t; ?></title>
            
            <meta name="description" content="<?php echo $d; ?>">
            <?php /*
            <meta name="google-site-verification" content="<?php echo $google_site_verification; ?>" />
            <meta property="fb:app_id" content="<?php echo $fb_app_id; ?>">
            */ ?>
            <meta property="og:url" content="<?php echo $actual_url; ?>">
            <meta property="og:type" content="website">
            <meta property="og:title" content="<?php echo $t; ?>">
            <meta property="og:image" content="<?php echo Uri::base(); ?>assets/img/icons/android-chrome-192x192.png">
            <meta property="og:image:alt" content="A description of what is in the image (not a caption)">
            <meta property="og:description" content="<?php echo $d; ?>">
            <meta property="og:site_name" content="Blazed TV">
            <meta property="og:locale" content="en_US">
            <meta property="article:author" content="Blazed Labs LLC">

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@BlazedLabs">
            <meta name="twitter:creator" content="@BlazedLabs">
            <meta name="twitter:url" content="<?php echo $actual_url; ?>">
            <meta name="twitter:title" content="<?php echo $t; ?>">
            <meta name="twitter:description" content="<?php echo $d; ?>">
            <meta name="twitter:image" content="<?php echo Uri::base(); ?>assets/img/icons/android-chrome-192x192.png">
            <meta name="twitter:image:alt" content="<?php echo $d; ?>">

            <link rel="author" href="Blazed Labs LLC">
            <link rel="publisher" href="Blazed Publishing BD">
            <meta itemprop="name" content="<?php echo $t; ?>">
            <meta itemprop="description" content="<?php echo $d; ?>">
            <meta itemprop="image" content="<?php echo Uri::base(); ?>assets/img/icons/android-chrome-192x192.png">

            <meta name="mobile-web-app-capable" content="yes">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="msapplication-config" content="<?php echo Uri::base(); ?>assets/browserconfig.xml">
            
            <style>
                /* Relative URL Fix */
                @font-face{font-family:Icons;src:url('<?php echo Uri::base(); ?>assets/vendor/fomantic-ui/themes/default/assets/fonts/icons.eot');src:url('<?php echo Uri::base(); ?>assets/vendor/fomantic-ui/themes/default/assets/fonts/icons.eot?#iefix') format('embedded-opentype'),url('<?php echo Uri::base(); ?>assets/vendor/fomantic-ui/themes/default/assets/fonts/icons.woff2') format('woff2'),url('<?php echo Uri::base(); ?>assets/vendor/fomantic-ui/themes/default/assets/fonts/icons.woff') format('woff'),url('<?php echo Uri::base(); ?>assets/vendor/fomantic-ui/themes/default/assets/fonts/icons.ttf') format('truetype'),url('<?php echo Uri::base(); ?>assets/vendor/fomantic-ui/themes/default/assets/fonts/icons.svg#icons') format('svg');font-style:normal;font-weight:400;font-variant:normal;text-decoration:inherit;text-transform:none}
            </style>

        </head>
        <body>
            <blz-app>                
                <header>
                    <?php echo Layout_Main::do_header($page); ?>
                </header>
                <main>

                    <?php echo $content; ?>
                
                </main>
                <footer>
                    <?php echo Layout_Main::do_footer(); ?>
                </footer>
            </blz-app>
            <section id="blz-js">
                <noscript>
                    <h1>Oh snap!</h1>
                    <p>
                        For the best browsing experience, please enable Javascript.
                    </p>
                </noscript>

                <?php
                    echo $bundle->renderJs();
                ?>

                <!-- Load reCAPTCHA API -->
                <?php if(isset($rc_sdk)): echo $rc_sdk; endif; ?>
                <script src="//instant.page/5.1.0" type="module" integrity="sha384-by67kQnR+pyfy8yWP4kPO12fHKRLHZPfEsiSXR8u2IKcTdxD805MGUXBzVPnkLHw"></script>
            </section>
        </body>
    </html>
<?php endif; ?>