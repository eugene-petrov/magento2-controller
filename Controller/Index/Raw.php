<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Controller\ResultInterface;

class Raw implements ActionInterface
{
    /**
     * @var RawFactory
     */
    private $rawFactory;

    /**
     * @param RawFactory $rawFactory
     */
    public function __construct(RawFactory $rawFactory)
    {
        $this->rawFactory = $rawFactory;
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $result = $this->rawFactory->create();
        $result->setContents('Go to the controller and see how this content is rendered');

        return $result;
    }
}
