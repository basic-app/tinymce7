<?php

namespace BasicApp\TinyMce7\Config;

use BasicApp\Admin\Events\AdminMenu;

AdminMenu::on(static function(AdminMenu $event) :void {
    $event->items[lang('Admin.Settings')]['tinymce7-settings'] = [
        'label' => lang('Admin.TinyMCE 7 Settings'),
        'url' => site_url('admin/tinymce7-settings'),
        'icon' => 'fa fa-regular fa-file-word'
    ];
});