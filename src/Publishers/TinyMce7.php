<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\TinyMce7\Publishers;

use BasicApp\Core\Publisher;

class TinyMce7 extends Publisher
{
    /**
     * Custom restrictions.
     */
    protected $customRestrictions = '*';
    
    /**
     * Tell Publisher where to create destination directory.
     */
    protected $createDestination = true;

    /**
     * Tell Publisher where to get the files.
     * Since we will use Composer to download
     * them we point to the "vendor" directory.
     *
     * @var string
     */
    protected $source = VENDORPATH . '/tinymce/tinymce';

    /**
     * FCPATH is always the default destination,
     * but we may want them to go in a sub-folder
     * to keep things organized.
     *
     * @var string
     */
    protected $destination = FCPATH . 'assets/tinymce7';

    /**
     * Use the "publish" method to indicate that this
     * class is ready to be discovered and automated.
     */
    public function publish(): bool
    {
        if (!$this->directoryIsEmpty($this->destination))
        {
            return true; // already installed
        }

        return parent::publish();
    }
}