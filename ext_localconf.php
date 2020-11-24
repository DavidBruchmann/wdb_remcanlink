<?php

defined('TYPO3_MODE') || die();

/***************
 * Canonical Links
 * Xclass to handle additional field 'show_canonical'
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical'] =
    'WDB\RemoveCanonicalLink\Controller\CanonicalGenerator->generate';
