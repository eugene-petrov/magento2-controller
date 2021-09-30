<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Message\ManagerInterface as MessageManager;

class Redirect implements ActionInterface
{
    /**
     * @var MessageManager
     */
    private $managerManager;

    /**
     * @var RedirectFactory
     */
    private $redirectFactory;

    /**
     * @param MessageManager $managerManager
     * @param RedirectFactory $redirectFactory
     */
    public function __construct(MessageManager $managerManager, RedirectFactory $redirectFactory)
    {
        $this->managerManager = $managerManager;
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * @inheridoc
     */
    public function execute()
    {
        $result = $this->redirectFactory->create();
        $result->setUrl('/');
        $this->managerManager->addSuccessMessage(__('You has been redirected to the home page'));

        return $result;
    }
}
