<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CS2\DuongDm\Controller\Adminhtml\Index;

use Magento\Framework\Exception\LocalizedException;
class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;


    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor

    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('blog_id');
            $model = $this->_objectManager->create(\CS2\DuongDm\Model\Blog::class)->load($id);
            if (!$model->getDataByKey('blog_id') && $id) {
                $this->messageManager->addErrorMessage(__('This Blog no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }
            if (!empty($data['category'])) {
                $data['category'] = implode(',', $data['category']);
            }

            $model->setData($data);

            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Blog.'));
                $this->dataPersistor->clear('cs2_duongdm_blog');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['blog_id' => $model->getDataByKey('blog_id')]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Blog.'));
            }

            $this->dataPersistor->set('cs2_duongdm_blog', $data);
            return $resultRedirect->setPath('*/*/edit', ['blog_id' => $this->getRequest()->getParam('blog_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}

