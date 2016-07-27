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

    public function __construct() {
        $this->_header = config('unify.header');
        $this->_footer = config('unify.footer');
        $this->_theme = config('unify.theme');
    }

    /**
     * Header
     * See Unify Template documentation for more info
     * @return string css filename to be loaded
     */

    public function getHeaderCssFile() {
        if (is_int($this->_header->version) && in_array($this->_header->version, static::$validHeaderVersions)) {
            $versionName = 'v' . $this->_header->version;
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
        if (is_int($this->_footer->version) && in_array($this->_footer->version, static::$validFooterVersions)) {
            $versionName = 'v' . $this->_footer->version;
        } else {
            $versionName = 'default';
        }
        return 'footer-' . $versionName . '.css';
    }

}