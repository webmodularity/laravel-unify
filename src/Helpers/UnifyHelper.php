<?php

namespace WebModularity\LaravelUnify\Helpers;

class UnifyHelper {

    static $assetPath = 'vendor/unify';
    static $validHeaderVersions = [
        'v1',
        'v2',
        'v3',
        'v4',
        'v5',
        'v6',
        'v7',
        'v8'
    ];
    static $validHeaderVersionStyles = [
        'v6' => [
            'transparent',
            'dark_transparent',
            'white_transparent',
            'border_bottom',
            'classic_dark',
            'classic_white',
            'dark_dropdown',
            'dark_on_scroll',
            'dark_search_box',
            'dark_on_responsive'
        ],
        'v7' => [
            'left',
            'right'
        ]
    ];
    static $validFooterVersions = [
        'v1',
        'v2',
        'v3',
        'v4',
        'v5',
        'v6',
        'v7',
        'v8'
    ];
    static $validThemeColors = [
        'blue',
        'orange',
        'red',
        'light',
        'purple',
        'aqua',
        'brown',
        'dark-blue',
        'light-green',
        'dark-red',
        'teal'
    ];
    static $featureCssMap = [
        'cube-portfolio' => [
            'plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css',
            'plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css'
        ],
        'fancybox' => 'plugins/fancybox/source/jquery.fancybox.css',
        'owl-carousel' => 'plugins/owl-carousel/owl-carousel/owl.carousel.css',
        'parallax-slider' => 'plugins/parallax-slider/css/parallax-slider.css',
        'sky-forms' => [
            'plugins/sky-forms-pro/skyforms/css/sky-forms.css',
            'plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css',
            [
                '<!--[if lt IE 9]>',
                'plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css',
                '<![endif]-->'
            ]
        ]
    ];
    static $featureJsMap = [
        'cube-portfolio' => 'plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js',
        'fancybox' => 'plugins/fancybox/source/jquery.fancybox.pack.js',
        'gmaps' => [
            'http://maps.google.com/maps/api/js?sensor=true&.js',
            'plugins/gmap/gmap.js'
        ],
        'owl-carousel' => 'plugins/owl-carousel/owl-carousel/owl.carousel.js',
        'parallax' => 'plugins/jquery.parallax.js',
        'parallax-slider' => [
            'plugins/parallax-slider/js/modernizr.js',
            'plugins/parallax-slider/js/jquery.cslider.js'
        ],
        'wow-animations' => 'plugins/wow-animations/js/wow.min.js'
    ];

    public static function printCss($features = []) {
        foreach ($features as $feature) {
            static::printFeature($feature, 'css');
        }
    }

    public static function printJs($features = []) {
        foreach ($features as $feature) {
            static::printFeature($feature, 'js');
        }
    }

    public static function printFeature($feature, $type = 'css') {
        $featureMap = strtolower($type) == 'css'
            ? static::$featureCssMap
            : static::$featureJsMap;
        if (in_array($feature, array_keys($featureMap))) {
            $files = is_string($featureMap[$feature])
                ? [$featureMap[$feature]]
                : $featureMap[$feature];
            foreach ($files as $file) {
                $pre = $post = null;
                if (is_array($file)) {
                    $pre = array_shift($file);
                    $post = array_pop($file);
                    $file = array_shift($file);
                }
                $fullFilePath = substr($file, 0, 4) == 'http' || substr($file, 0, 2) == '//'
                    ? $file
                    : asset(static::$assetPath . DIRECTORY_SEPARATOR . $file);
                echo $pre;
                if (strtolower($type) == 'css') {
                    echo '<link rel="stylesheet" href="' . $fullFilePath . '">' . "\n";
                } else {
                    echo '<script type="text/javascript" src="' . $fullFilePath . '"></script>' . "\n";
                }
                echo $post;
            }
        }
    }

    public static function getHeaderVersion() {
        return in_array(config('unify.header_version'), static::$validHeaderVersions) ? config('unify.header_version') : null;
    }

    public static function getHeaderVersionStyle() {
        if (static::headerHasStyles()) {
            $headerVersion = static::getHeaderVersion();
            if (in_array(config('unify.header_version_style'), static::$validHeaderVersionStyles[$headerVersion])) {
                return config('unify.header_version_style');
            }
        }
        return null;
    }

    public static function getHeaderCssFile() {
        $versionName = !is_null(static::getHeaderVersion()) ? static::getHeaderVersion() : 'default';
        return 'header-' . $versionName . '.css';
    }

    public static function getHeaderInclude() {
        $headerInclude = 'unify::headers.header';
        if (!is_null(static::getHeaderVersion())) {
            $headerInclude .= '_' . static::getHeaderVersion();
            if (!is_null(static::getHeaderVersionStyle())) {
                $headerInclude .= '_' . static::getHeaderVersionStyle();
            }
        }
        return $headerInclude;
    }

    public static function headerHasStyles() {
        $headerVersion = static::getHeaderVersion();
        return in_array($headerVersion, array_keys(static::$validHeaderVersionStyles));
    }

    public static function getFooterVersion() {
        return in_array(config('unify.footer_version'), static::$validFooterVersions) ? config('unify.footer_version') : null;
    }

    public static function getFooterCssFile() {
        $versionName = !is_null(static::getFooterVersion()) ? static::getFooterVersion() : 'default';
        return 'footer-' . $versionName . '.css';
    }

    public static function getFooterInclude() {
        $footerInclude = 'unify::footers.footer';
        if (!is_null(static::getFooterVersion())) {
            $footerInclude .= '_' . static::getFooterVersion();
        }
        return $footerInclude;
    }

    public static function getThemeColor() {
        return in_array(strtolower(config('unify.theme_color')), static::$validThemeColors) ? strtolower(config('unify.theme_color')) : null;
    }

    public static function getThemeColorCssFile() {
        $themeColor = !is_null(static::getThemeColor()) ? static::getThemeColor() : 'default';
        return $themeColor . '.css';
    }

    public static function isDark() {
        return config('unify.theme_dark') === true ? true : false;
    }

    public static function hasCustomCss() {
        return file_exists(public_path() . '/css/custom.css');
    }

    public static function hasCustomJs() {
        return file_exists(public_path() . '/js/custom.js');
    }

    public static function starRating($rating = 5) {
        $stars = [];
        for ($i = 1;$i <= 5;$i++) {
            $class = $rating >= $i ? 'fa fa-star color-yellow' : 'fa fa-star';
            $stars[] = "<i class='".$class."'></i>";
        }
        return implode('', $stars);
    }

    public static function defaultUserImage() {
        return asset('vendor/unify/img/user.jpg');
    }
}