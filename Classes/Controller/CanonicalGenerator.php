<?php

namespace WDB\RemoveCanonicalLink\Controller;

class CanonicalGenerator extends \TYPO3\CMS\Seo\Canonical\CanonicalGenerator
{
    public function generate(): string
    {
        if ((int)$this->typoScriptFrontendController->page['show_canonical'] === 0) {
            return '';
        } else {
            return parent::generate();
        }
    }
}
