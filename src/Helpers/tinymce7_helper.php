<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\View\View;

if (!function_exists('register_tinymce7'))
{
    function register_tinymce7(array $params = [], ?View $renderer = null) : void
    {
        helper(['scripts', 'render_view']);

        add_script(render_view('BasicApp\TinyMce7\scripts', $params, $renderer), true, $renderer);
    }
}