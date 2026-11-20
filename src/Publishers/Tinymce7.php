<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Tinymce7\Publishers;

use BasicApp\Publisher\Publisher;

class Tinymce7 extends Publisher
{
    /**
     * Custom restrictions.
     */
    protected ?string $customRestrictions = '*';

    /**
     * Tell Publisher where to create destination directory.
     */
    protected bool $createDestination = true;

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
        if (!$this->isEmpty($this->destination)) {
            return true; // already installed
        }

        return $this->addUri('https://download.tiny.cloud/tinymce/community/tinymce_7.9.3.zip')
            ->extractZip('tinymce_7.9.3.zip')
            ->removeScratchFile('tinymce_7.9.3.zip')
            ->setSource($this->getScratch() . 'tinymce/js/tinymce')
            ->addPath('/')
            ->merge(true);
    }
}
