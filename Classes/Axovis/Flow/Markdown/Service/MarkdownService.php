<?php
namespace Axovis\Flow\Markdown\Service;

use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class MarkdownService {
    public function __construct() {
    }

    /**
     * This will parse the markdown $content and return it as html.
     *
     * @param string $content some md content
     * @return string the created html content
     */
    public function parse($content) {
        /*$document = $this->parser->parse($content);

        return $document->render();*/
    }
}