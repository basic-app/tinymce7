<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 *
 * @var CodeIgniter\Router\RouteCollection $routes
 */

$routes->match(['GET', 'POST'], 'admin/tinymce7-settings', '\BasicApp\TinyMce7\Controllers\Admin\Tinymce7SettingsController::index');
