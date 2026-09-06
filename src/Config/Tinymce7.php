<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\TinyMce7\Config;

use BasicApp\Core\SettingableConfig;
use BasicApp\TinyMce7\Settings\TinyMce7Settings;

class Tinymce7 extends SettingableConfig
{
    protected $settingsClass = TinyMce7Settings::class;

    public $selector = '.editor';

    public $language;

    public $toolbar = 'undo redo link styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code';

    public $relative_urls = false;

    public $plugins = 'link code';

    public $br_in_pre = false;

    public $height = 450;

    public function __construct()
    {
        parent::__construct();
    
        $this->language ??= service('request')->getLocale();

        $this->relative_urls = (bool) $this->relative_urls;

        $this->br_in_pre = (bool) $this->br_in_pre;
    }
}