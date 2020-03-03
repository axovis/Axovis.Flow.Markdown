<?php
namespace Axovis\Flow\Markdown\ViewHelpers;

use Axovis\Flow\Markdown\Service\MarkdownService;
use Neos\Flow\Annotations as Flow;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;

class MarkdownViewHelper extends AbstractViewHelper {
    /**
     * @Flow\Inject
     * @var MarkdownService
     */
    protected $markdownService;

    public function initializeArguments()
    {
        $this->registerArgument('content', 'string', 'The Markdown string');
        $this->registerArgument('nofollow', 'bool', 'Add nofollow to links');
        $this->registerArgument('increaseHeadlineLevelBy', 'int', 'If added <h1> tags will be build like <h(1+value)>, good to prevent duplicated h1 tags');
    }

    /**
     * @param string $content
     * @param boolean $nofollow Add nofollow to links
     * @param integer $increaseHeadlineLevelBy If added <h1> tags will be build like <h(1+value)>, good to prevent duplicated h1 tags
     * @return array
     */
    public function render($content = null, $nofollow = false, $increaseHeadlineLevelBy = 0) {
        if(!$this->arguments['content']) {
            $content = $this->renderChildren();
        } else {
            $content = $this->arguments['content'];
        }

        return $this->markdownService->parse($content, $this->arguments['nofollow'], $this->arguments['increaseHeadlineLevelBy']);
    }
}