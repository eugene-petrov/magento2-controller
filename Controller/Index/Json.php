<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Snippet\Controller\Model\ArgumentsContainer;

class Json implements ActionInterface
{
    /**
     * @var JsonFactory
     */
    private $jsonFactory;

    /**
     * @var ArgumentsContainer
     */
    private $argumentsContainer;

    /**
     * @param JsonFactory $jsonFactory
     * @param ArgumentsContainer $argumentsContainer
     */
    public function __construct(JsonFactory $jsonFactory, ArgumentsContainer $argumentsContainer)
    {
        $this->jsonFactory = $jsonFactory;
        $this->argumentsContainer = $argumentsContainer;
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $result = $this->jsonFactory->create();
        $result->setData([
            'string' => $this->argumentsContainer->getSnippetArgument(),
            'array' => $this->argumentsContainer->getSnippetArguments()
        ]);

        return $result;
    }
}
