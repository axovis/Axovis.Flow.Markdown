<?php
namespace Axovis\Flow\Markdown\Controller;

use Axovis\Flow\Markdown\Service\MarkdownService;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Flow\Annotations as Flow;

class PreviewController extends ActionController {

    /**
     * @Flow\Inject
     * @var MarkdownService
     */
    protected $markdownService;

    /**
     * @param string $content
     * @param bool $nofollow
     * @param int $increaseHeadlineLevelBy
     * @return string
     */
    public function previewAction($content, $nofollow = true, $increaseHeadlineLevelBy=  1)
    {
        return $this->markdownService->parse($content, $nofollow, $increaseHeadlineLevelBy);
    }

}