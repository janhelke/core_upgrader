<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\v95\Install\Updates;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Install\Updates\AbstractDownloadExtensionUpdate;
use TYPO3\CMS\Install\Updates\Confirmation;
use TYPO3\CMS\Install\Updates\DatabaseUpdatedPrerequisite;
use TYPO3\CMS\Install\Updates\ExtensionModel;

/**
 * Installs and downloads EXT:rsaauth if requested
 * @internal This class is only meant to be used within EXT:install and is not part of the TYPO3 Core API.
 */
class RsaauthExtractionUpdate extends AbstractDownloadExtensionUpdate
{
    /**
     * @var \TYPO3\CMS\Install\Updates\ExtensionModel
     */
    protected $extension;

    /**
     * @var \TYPO3\CMS\Install\Updates\Confirmation
     */
    protected $confirmation;

    public function __construct()
    {
        $this->extension = new ExtensionModel(
            'rsaauth',
            'Deprecated rsaauth extension',
            '10.0.0',
            'friendsoftypo3/rsaauth',
            'Contains a service to authenticate TYPO3 BE and FE users using private/public key encryption of passwords.'
        );

        $this->confirmation = new Confirmation(
            'Are you sure?',
            'Do not install this extension. Use HTTPS instead. ' . $this->extension->getDescription(),
            false
        );
    }

    /**
     * Return a confirmation message instance
     *
     * @return \TYPO3\CMS\Install\Updates\Confirmation
     */
    public function getConfirmation(): Confirmation
    {
        return $this->confirmation;
    }

    /**
     * Return the identifier for this wizard
     * This should be the same string as used in the ext_localconf class registration
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return 'rsaauthExtension';
    }

    /**
     * Return the speaking name of this wizard
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Install extension "rsaauth" from TER if the site is still not secured using HTTPS';
    }

    /**
     * Return the description for this wizard
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'The extension "rsaauth" adds a public/private key based encryption for Backend and Frontend'
               . ' login passwords. The approach is limited and has various flaws. The extension is fully'
               . ' obsolete if the instance uses HTTPS.';
    }

    /**
     * Is an update necessary?
     * Is used to determine whether a wizard needs to be run.
     *
     * @return bool
     */
    public function updateNecessary(): bool
    {
        return !ExtensionManagementUtility::isLoaded('rsaauth');
    }

    /**
     * Returns an array of class names of Prerequisite classes
     * This way a wizard can define dependencies like "database up-to-date" or
     * "reference index updated"
     *
     * @return string[]
     */
    public function getPrerequisites(): array
    {
        return [
            DatabaseUpdatedPrerequisite::class
        ];
    }
}
