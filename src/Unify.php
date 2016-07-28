<?php

namespace WebModularity\LaravelUnify;

class Unify {

    static $validHeaderVersions = [1, 2, 3 ,4 , 5, 6, 7, 8];
    static $validFooterVersions = [1, 2, 3 ,4 , 5, 6, 7, 8];
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

    private $_header;
    private $_footer;
    private $_theme;

    /**
     * Header
     * See Unify Template documentation for more info
     * @return string css filename to be loaded
     */

    public function getHeaderCssFile() {
        if (is_int($this->getHeader()['version']) && in_array($this->getHeader()['version'], static::$validHeaderVersions)) {
            $versionName = 'v' . $this->getHeader()['version'];
        } else {
            $versionName = 'default';
        }
        return 'header-' . $versionName . '.css';
    }

    /**
     * Footer
     * See Unify Template documentation for more info
     * @return string css filename to be loaded
     */

    public function getFooterCssFile() {
        if (is_int($this->getFooter()['version']) && in_array($this->getFooter()['version'], static::$validFooterVersions)) {
            $versionName = 'v' . $this->getFooter()['version'];
        } else {
            $versionName = 'default';
        }
        return 'footer-' . $versionName . '.css';
    }

    /**
     * Theme Color
     * See Unify Template documentation for more info
     * @return string css filename to be loaded
     */

    public function getThemeColorCssFile() {
        if (is_string($this->getTheme()['color']) && in_array(strtolower($this->getTheme()['color']), static::$validThemeColors)) {
            $colorName = strtolower($this->getTheme()['color']);
        } else {
            $colorName = 'default';
        }
        return $colorName . '.css';
    }

    /**
     * Theme Skin: Dark
     * See Unify Template documentation for more info
     * @return bool if dark theme skin should be applied
     */

    public function isDark() {
        return $this->getTheme()['dark'] === true ? true : false;
    }

    public function hasCustomCss() {
        return file_exists(public_path() . '/css/custom.css');
    }

    public function hasCustomJs() {
        return file_exists(public_path() . '/js/custom.js');
    }

    protected function getHeader() {
        if (is_null($this->_header)) {
            $this->_header = config('unify.header');
        }
        return $this->_header;
    }

    protected function getFooter() {
        if (is_null($this->_footer)) {
            $this->_footer = config('unify.footer');
        }
        return $this->_footer;
    }

    protected function getTheme() {
        if (is_null($this->_theme)) {
            $this->_theme = config('unify.theme');
        }
        return $this->_theme;
    }
}