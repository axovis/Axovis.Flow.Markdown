<?php
namespace Axovis\Flow\Markdown\Service;

use Axovis\Flow\Markdown\Util\Parsedown;
use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class MarkdownService {
    /**
     * @var Parsedown
     */
    protected $parsedown;

    public function __construct() {
        $this->parsedown = new Parsedown();
    }

    /**
     * This will parse the markdown $content and return it as html.
     *
     * @param string $content some md content
     * @return string the created html content
     */
    public function parse($content) {
        return $this->parsedown->text($content);
    }
}