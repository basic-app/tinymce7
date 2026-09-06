<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use BasicApp\TinyMce7\Config\Tinymce7;

?>
<script type="text/javascript" src="<?= base_url('assets/tinymce7/tinymce.min.js');?>"></script>
<script type="text/javascript">
    tinymce.init(<?= json_encode(config(Tinymce7::class));?>);
</script>