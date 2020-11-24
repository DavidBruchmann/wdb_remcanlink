<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'wdb_remcanlink';

    $ll = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf';
    
    $tempColumns = [
        'show_canonical' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => $ll . ':pages.show_canonical',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'invertStateDisplay' => '1',
                'items' => [
                    0 => [
                        0 => '',
                        1 => '',
                    ]
                ],
            ]
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',  $tempColumns, 1);

    $GLOBALS['TCA']['pages']['palettes']['canonical']['showitem'] .= ', --linebreak--, show_canonical;' . $ll . ':pages.show_canonical';
});
