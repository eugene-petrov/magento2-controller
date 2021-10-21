<?php

declare(strict_types=1);

namespace Snippet\Controller\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action
{
    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Snippet_Controller::snippet_backend_controller');
        $resultPage->getConfig()->getTitle()->prepend((__('Title From Controller')));

        return $resultPage;
    }
}
