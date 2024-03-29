<?php

namespace AHT\ShopByBrand\Controller\Adminhtml\Brand {

    use AHT\ShopByBrand\Model\Brand\ImageUploader;
    use Exception;
    use Magento\Backend\App\Action;
    use Magento\Backend\App\Action\Context;
    use Magento\Framework\Controller\ResultFactory;
    use Magento\Framework\Controller\ResultInterface;

    /**
     * Class Upload
     */
    class Uploader extends Action
    {
        /**
         * Image Uploader
         */
        protected ImageUploader $imageUploader;

        /**
         * Upload constructor.
         *
         * @param Context $context
         * @param ImageUploader $imageUploader
         */
        public function __construct(
            Context $context,
            ImageUploader $imageUploader
        ) {
            parent::__construct($context);
            $this->imageUploader = $imageUploader;
        }

        /**
         * Authorization level of a basic admin session
         *
         * @return bool
         */

        /**
         * Upload file controller action.
         *
         * @return ResultInterface
         */
        public function execute()
        {
            $imageId = $this->_request->getParam('param_name', 'image');
            try {
                $result = $this->imageUploader->saveFileToTmpDir($imageId);

                $result['cookie'] = [
                    'name' => $this->_getSession()->getName(),
                    'value' => $this->_getSession()->getSessionId(),
                    'lifetime' => $this->_getSession()->getCookieLifetime(),
                    'path' => $this->_getSession()->getCookiePath(),
                    'domain' => $this->_getSession()->getCookieDomain(),
                ];
            } catch (Exception $e) {
                $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
            }
            return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
        }
    }
}
