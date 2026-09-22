<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\TinyMce7\Config;

use BasicApp\Core\SettingsConfig;

class Tinymce7 extends SettingsConfig
{
    public $selector = '.editor';

    public $language;

    public $toolbar = 'undo redo link styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code';

    public $plugins = 'link code';

    public $height = '450px';

    public $relative_urls = false;

    public $br_in_pre = false;

    public function __construct()
    {
        parent::__construct();
    
        $this->language ??= service('request')->getLocale();

        $this->relative_urls = (bool) $this->relative_urls;

        $this->br_in_pre = (bool) $this->br_in_pre;
    }

    public function rules() : array
    {
        return [
            'toolbar' => [
                'label' => 'Admin.TinyMce7 Toolbar',
                'rules' => ['max_length[65535]', 'permit_empty']
            ],
            'plugins' => [
                'label' => 'Admin.TinyMce7 Plugins',
                'rules' => ['max_length[65535]', 'permit_empty']
            ],
            'height' => [
                'label' => 'Admin.TinyMce7 Height',
                'rules' => ['max_length[255]', 'permit_empty']
            ]
        ];
    }
}