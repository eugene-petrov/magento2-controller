<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;

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
     * @inheridoc
     */
    public function execute()
    {
        $result = $this->forwardFactory->create();
        return $result->setModule('cms')
            ->setController('index')
            ->forward('index');
    }
}
