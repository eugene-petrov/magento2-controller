<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;

class Forward implements ActionInterface
{
    /**
     * @var ForwardFactory
     */
    private $forwardFactory;

    /**
     * @param ForwardFactory $forwardFactory
     */
    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $result = $this->forwardFactory->create();
        return $result->setModule('cms')
            ->setController('index')
            ->forward('index');
    }
}
