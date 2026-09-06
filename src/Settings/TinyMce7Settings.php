<?php

namespace BasicApp\TinyMce7\Settings;

use BasicApp\Core\Settings;

class TinyMce7Settings extends Settings
{
    public $toolbar = 'undo redo link styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code';

    public $plugins = 'link code';

    public $height = '450px';

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