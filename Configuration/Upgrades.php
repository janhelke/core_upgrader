<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;

$upgrades = [
    'v8.7' => [
        'wizardDoneToRegistry' => [
            'wizardDoneToRegistry' => \TYPO3\CMS\v87\Install\Updates\WizardDoneToRegistry::class,
        ],
        'frontendUserImageUpdateWizard' => [
            'frontendUserImageUpdateWizard' => \TYPO3\CMS\v87\Install\Updates\FrontendUserImageUpdateWizard::class,
        ],
        'databaseRowsUpdateWizard87' => [
            'databaseRowsUpdateWizard87' => \TYPO3\CMS\v87\Install\Updates\DatabaseRowsUpdateWizard::class,
        ],
        'commandLineBackendUserRemovalUpdate' => [
            'commandLineBackendUserRemovalUpdate' => \TYPO3\CMS\v87\Install\Updates\CommandLineBackendUserRemovalUpdate::class,
        ],
        'fillTranslationSourceField' => [
            'fillTranslationSourceField' => \TYPO3\CMS\v87\Install\Updates\FillTranslationSourceField::class,
        ],
        'sectionFrameToFrameClassUpdate' => [
            'sectionFrameToFrameClassUpdate' => \TYPO3\CMS\v87\Install\Updates\SectionFrameToFrameClassUpdate::class,
        ],
        'splitMenusUpdate' => [
            'splitMenusUpdate' => \TYPO3\CMS\v87\Install\Updates\SplitMenusUpdate::class,
        ],
        'bulletContentElementUpdate' => [
            'bulletContentElementUpdate' => \TYPO3\CMS\v87\Install\Updates\BulletContentElementUpdate::class,
        ],
        'uploadContentElementUpdate' => [
            'uploadContentElementUpdate' => \TYPO3\CMS\v87\Install\Updates\UploadContentElementUpdate::class,
        ],
        'migrateFscStaticTemplateUpdate' => [
            'migrateFscStaticTemplateUpdate' => \TYPO3\CMS\v87\Install\Updates\MigrateFscStaticTemplateUpdate::class,
        ],
        'fileReferenceUpdate' => [
            'fileReferenceUpdate' => \TYPO3\CMS\v87\Install\Updates\FileReferenceUpdate::class,
        ],
        'migrateFeSessionDataUpdate' => [
            'migrateFeSessionDataUpdate' => \TYPO3\CMS\v87\Install\Updates\MigrateFeSessionDataUpdate::class,
        ],
        'compatibility7Extension' => [
            'compatibility7Extension' => \TYPO3\CMS\v87\Install\Updates\Compatibility7ExtractionUpdate::class,
        ],
        'formLegacyExtractionUpdate' => [
            'formLegacyExtractionUpdate' => \TYPO3\CMS\v87\Install\Updates\FormLegacyExtractionUpdate::class,
        ],
        'rtehtmlareaExtension' => [
            'rtehtmlareaExtension' => \TYPO3\CMS\v87\Install\Updates\RteHtmlAreaExtractionUpdate::class,
        ],
        'sysLanguageSorting' => [
            'sysLanguageSorting' => \TYPO3\CMS\v87\Install\Updates\LanguageSortingUpdate::class,
        ],
    ],
];
if ((new Typo3Version)->getMajorVersion() <= 10) {
    $upgrades['v9.5'] = [
        'typo3DbLegacyExtension' => [
            'typo3DbLegacyExtension' => \TYPO3\CMS\Install\Updates\Typo3DbExtractionUpdate::class,
        ],
        'funcExtension' => [
            'funcExtension' => \TYPO3\CMS\Install\Updates\FuncExtractionUpdate::class,
        ],
        'pagesUrltypeField' => [
            'pagesUrltypeField' => \TYPO3\CMS\Install\Updates\MigrateUrlTypesInPagesUpdate::class,
        ],
        'separateSysHistoryFromLog' => [
            'separateSysHistoryFromLog' => \TYPO3\CMS\Install\Updates\SeparateSysHistoryFromSysLogUpdate::class,
        ],
        'rdctExtension' => [
            'rdctExtension' => \TYPO3\CMS\Install\Updates\RedirectExtractionUpdate::class,
        ],
        'pagesLanguageOverlay' => [
            'pagesLanguageOverlay' => \TYPO3\CMS\Install\Updates\MigratePagesLanguageOverlayUpdate::class,
        ],
        'pagesLanguageOverlayBeGroupsAccessRights' => [
            'pagesLanguageOverlayBeGroupsAccessRights' => \TYPO3\CMS\Install\Updates\MigratePagesLanguageOverlayBeGroupsAccessRights::class,
        ],
        'backendLayoutIcons' => [
            'backendLayoutIcons' => \TYPO3\CMS\Install\Updates\BackendLayoutIconUpdateWizard::class,
        ],
        'redirects' => [
            'redirects' => \TYPO3\CMS\Install\Updates\RedirectsExtensionUpdate::class,
        ],
        'adminpanelExtension' => [
            'adminpanelExtension' => \TYPO3\CMS\Install\Updates\AdminPanelInstall::class,
        ],
        'pagesSlugs' => [
            'pagesSlugs' => \TYPO3\CMS\Install\Updates\PopulatePageSlugs::class,
        ],
        'argon2iPasswordHashes' => [
            'argon2iPasswordHashes' => \TYPO3\CMS\Install\Updates\Argon2iPasswordHashes::class,
        ],
        'backendUsersConfiguration' => [
            'backendUsersConfiguration' => \TYPO3\CMS\Install\Updates\BackendUserConfigurationUpdate::class,
        ],
    ];
} else {
    $upgrades['v9.5'] = [
        'databaseRowsUpdateWizard95' => [
            'databaseRowsUpdateWizard95' => \TYPO3\CMS\v95\Install\Updates\DatabaseRowsUpdateWizard::class,
        ],
        'typo3DbLegacyExtension' => [
            'typo3DbLegacyExtension' => \TYPO3\CMS\v95\Install\Updates\Typo3DbExtractionUpdate::class,
        ],
        'funcExtension' => [
            'funcExtension' => \TYPO3\CMS\v95\Install\Updates\FuncExtractionUpdate::class,
        ],
        'pagesUrltypeField' => [
            'pagesUrltypeField' => \TYPO3\CMS\v95\Install\Updates\MigrateUrlTypesInPagesUpdate::class,
        ],
        'separateSysHistoryFromLog' => [
            'separateSysHistoryFromLog' => \TYPO3\CMS\v95\Install\Updates\SeparateSysHistoryFromSysLogUpdate::class,
        ],
        'rdctExtension' => [
            'rdctExtension' => \TYPO3\CMS\v95\Install\Updates\RedirectExtractionUpdate::class,
        ],
        'pagesLanguageOverlay' => [
            'pagesLanguageOverlay' => \TYPO3\CMS\v95\Install\Updates\MigratePagesLanguageOverlayUpdate::class,
        ],
        'pagesLanguageOverlayBeGroupsAccessRights' => [
            'pagesLanguageOverlayBeGroupsAccessRights' => \TYPO3\CMS\v95\Install\Updates\MigratePagesLanguageOverlayBeGroupsAccessRights::class,
        ],
        'backendLayoutIcons' => [
            'backendLayoutIcons' => \TYPO3\CMS\v95\Install\Updates\BackendLayoutIconUpdateWizard::class,
        ],
        'redirects' => [
            'redirects' => \TYPO3\CMS\v95\Install\Updates\RedirectsExtensionUpdate::class,
        ],
        'adminpanelExtension' => [
            'adminpanelExtension' => \TYPO3\CMS\v95\Install\Updates\AdminPanelInstall::class,
        ],
        'pagesSlugs' => [
            'pagesSlugs' => \TYPO3\CMS\v95\Install\Updates\PopulatePageSlugs::class,
        ],
        'argon2iPasswordHashes' => [
            'argon2iPasswordHashes' => \TYPO3\CMS\v95\Install\Updates\Argon2iPasswordHashes::class,
        ],
        'backendUsersConfiguration' => [
            'backendUsersConfiguration' => \TYPO3\CMS\v95\Install\Updates\BackendUserConfigurationUpdate::class,
        ],
        'rsaauthExtension' => [
            'rsaauthExtension' => \TYPO3\CMS\v95\Install\Updates\RsaauthExtractionUpdate::class,
        ],
    ];
}

if ((new Typo3Version)->getMajorVersion() <= 11) {
    $upgrades['v10.4'] = [
        'feeditExtension' => [
            'feeditExtension' => \TYPO3\CMS\Install\Updates\FeeditExtractionUpdate::class,
        ],
        'taskcenterExtension' => [
            'taskcenterExtension' => \TYPO3\CMS\Install\Updates\TaskcenterExtractionUpdate::class,
        ],
        'sysActionExtension' => [
            'sysActionExtension' => \TYPO3\CMS\Install\Updates\SysActionExtractionUpdate::class,
        ],
        'databaseRowsUpdateWizard' => [
            'databaseRowsUpdateWizard' => \TYPO3\CMS\Install\Updates\DatabaseRowsUpdateWizard::class,
        ],
    ];
}

if ((new Typo3Version)->getMajorVersion() <= 12) {
    $upgrades['v11.5'] = [
        'backendUserLanguageMigration' => [
            'backendUserLanguageMigration' => \TYPO3\CMS\Install\Updates\BackendUserLanguageMigration::class,
        ],
        'collectionsExtractionUpdate' => [
            'collectionsExtractionUpdate' => \TYPO3\CMS\Install\Updates\CollectionsExtractionUpdate::class,
        ],
        'feeditExtractionUpdate' => [
            'feeditExtractionUpdate' => \TYPO3\CMS\Install\Updates\FeeditExtractionUpdate::class,
        ],
        'shortcutRecordsMigration' => [
            'shortcutRecordsMigration' => \TYPO3\CMS\Install\Updates\ShortcutRecordsMigration::class,
        ],
        'sysLogChannel' => [
            'sysLogChannel' => \TYPO3\CMS\Install\Updates\SysLogChannel::class,
        ],
        'taskcenterExtractionUpdate' => [
            'taskcenterExtractionUpdate' => \TYPO3\CMS\Install\Updates\TaskcenterExtractionUpdate::class,
        ],
    ];
}

$additionalUpgrades = [
    'v10.4' => [
        'TYPO3\\CMS\\Felogin\\Updates\\MigrateFeloginPlugins' => [
            'TYPO3\\CMS\\Felogin\\Updates\\MigrateFeloginPlugins' => TYPO3\CMS\Felogin\Updates\MigrateFeloginPlugins::class,
        ],
        'TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPluginsCtype' => [
            'TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPluginsCtype' => TYPO3\CMS\FrontendLogin\Updates\MigrateFeloginPluginsCtype::class,
        ],
        'formFileExtension' => [
            'formFileExtension' => \TYPO3\CMS\Form\Hooks\FormFileExtensionUpdate::class,
        ],
    ],
];

foreach ($additionalUpgrades as $version => $versionUpgrades) {
    foreach ($versionUpgrades as $key => $upgradeArray) {
        foreach ($upgradeArray as $identifier => $class) {
            if (class_exists($class)) {
                $upgrades[$version][$key] = $upgradeArray;
            }
        }
    }
}

return $upgrades;
