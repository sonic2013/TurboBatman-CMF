<?php
/**
 * Associative array
 */
return array(
    /**
     * Developer Mode
     * - no twig cache
     * - dev resources
     * - page execution time after page (commented)
     */
    'developer_mode' => true,

    /**
     * Mobile template detection configuration
     * Set always_mobile as true for using permament mobile templates
     * Default false
     */
    'always_mobile' => true,

    /**
     * CDN configuration
     * http://api.yandex.ru/jslibs/?ncrnd=7105
     */
    'resources' => array(
        'jquery_js' => 'http://yandex.st/jquery/1.7.2/jquery.min.js',
        'jquery_mobile_js' => 'http://yandex.st/jquery/mobile/1.1.0/jquery.mobile.min.js',
        'jquery_mobile_css' => 'http://yandex.st/jquery/mobile/1.1.0/jquery.mobile.min.css',
        'jquery_mobile_structure_css' => 'http://yandex.st/jquery/mobile/1.1.0/jquery.mobile.structure.min.css',
        'jquery_mobile_theme_css' => 'http://yandex.st/jquery/mobile/1.1.0/jquery.mobile.theme.min.css',
        'jquery_fancybox_js' => 'http://yandex.st/jquery/fancybox/2.0.5/jquery.fancybox.min.js',
        'jquery_fancybox_css' => 'http://yandex.st/jquery/fancybox/2.0.5/jquery.fancybox.min.css',
    ),

    /**
     * PDO configuration
     */
    'pdo' => array('mysql:host=localhost;dbname=turbo', 'root', ''),
);