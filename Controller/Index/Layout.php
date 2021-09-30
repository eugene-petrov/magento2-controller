<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\LayoutFactory;

class Layout implements ActionInterface
{
    /**
     * @var LayoutFactory
     */
    private $layoutFactory;

    /**
     * @param LayoutFactory $layoutFactory
     */
    public function __construct(LayoutFactory $layoutFactory)
    {
        $this->layoutFactory = $layoutFactory;
    }

    /**
     * @inheridoc
     */
    public function execute()
    {
        return $this->layoutFactory->create();
    }
}
