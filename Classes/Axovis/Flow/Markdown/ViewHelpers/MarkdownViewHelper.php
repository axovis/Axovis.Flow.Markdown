<?php
namespace Axovis\Flow\Markdown\ViewHelpers;

use Axovis\Flow\Markdown\Service\MarkdownService;
use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\Flow\Annotations as Flow;

class MarkdownViewHelper extends AbstractViewHelper {
    /**
     * @var MarkdownService
     * @Flow\Inject
     */
    protected $markdownService;

    /**
     * @param string $content
     * @return array
     */
    public function render($content = null) {
        if($content == null) {
            $content = $this->renderChildren();
        }

        return $this->markdownService->parse($content);
    }
}