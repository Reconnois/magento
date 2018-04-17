<?php
namespace Esgi\Storelocator\Controller\Adminhtml\Store;
use Magento\Backend\App\Action;
use Esgi\Storelocator\Model\Store as Store;

class Add extends \Magento\Backend\App\Action
{
    /**
     * Edit A Store Page
     *
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        $contactDatas = $this->getRequest()->getParam('contact');
        if(is_array($contactDatas)) {
            $contact = $this->_objectManager->create(Contact::class);
            $contact->setData($contactDatas)->save();
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}