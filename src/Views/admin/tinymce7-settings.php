<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$this->setVar('title', lang('Admin.Cells') . ' / ' . lang('Admin.TinyMCE 7 Settings'));
$this->setVar('h1', lang('Admin.Cells'));
$this->setVar('description', lang('Admin.TinyMCE 7 Settings'));
$this->setVar('activeMenu', 'tinymce7-settings');

helper(['form']);

?>
<?php $this->extend('BasicApp\Admin\layout');?>
<?php $this->section('content');?>

<?= form_open('admin/tinymce7-settings');?>

<?= view_cell('AdminInput', [
    'label' => $labels['toolbar'] ?? 'toolbar',
    'error' => $errors['toolbar'] ?? null,
    'attributes' => [
        'name' => 'toolbar',
        'value' => set_value('toolbar', $data->toolbar)
    ]
]);?>

<?= view_cell('AdminInput', [
    'label' => $labels['plugins'] ?? 'plugins',
    'error' => $errors['plugins'] ?? null,
    'attributes' => [
        'name' => 'plugins',
        'value' => set_value('plugins', $data->plugins)
    ]
]);?>

<?= view_cell('AdminInput', [
    'label' => $labels['height'] ?? 'height',
    'error' => $errors['height'] ?? null,
    'attributes' => [
        'name' => 'height',
        'value' => set_value('height', $data->height)
    ]
]);?>

<?= view_cell('AdminValidationErrors', [
    'errors' => $errors
]);?>

<?= view_cell('AdminFormButton', [
    'label' => lang('Admin.Save'),
    'attributes' => [
        'type' => 'submit'
    ]
]);?>

<?= form_close();?>

<?php $this->endSection();?>