<?php

namespace WebModularity\LaravelUnify;

class UnifyHelper {

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
        $headerInclude = 'unify::partials.headers.header';
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
}