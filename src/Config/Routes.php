<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$routes->match(['GET', 'POST'], 'admin/tinymce7-settings', '\BasicApp\TinyMce7\Controllers\Admin\Tinymce7SettingsController::index');