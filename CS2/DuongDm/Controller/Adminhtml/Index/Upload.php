<?php
//
//namespace CS2\DuongDm\Controller\Adminhtml\Index;
//
//use Magento\Framework\Controller\ResultFactory;
//
///**
// * Class Upload
// */
//class Upload extends \Magento\Backend\App\Action
//{
//    /**
//     * Image Uploader
//     *
//     * @var \PHPCuong\BannerSlider\Model\Banner\ImageUploader
//     */
//    protected $imageUploader;
//
//    /**
//     * Upload constructor.
//     *
//     * @param \Magento\Backend\App\Action\Context $context
//     * @param \PHPCuong\BannerSlider\Model\Banner\ImageUploader $imageUploader
//     */
//    public function __construct(
//        \Magento\Backend\App\Action\Context $context,
//        \CS2\DuongDm\Model\Post\ImageUploader $imageUploader
//    ) {
//        parent::__construct($context);
//        $this->imageUploader = $imageUploader;
//    }
//
//    /**
//     * Authorization level of a basic admin session
//     *
//     * @return bool
//     */
//
//    /**
//     * Upload file controller action.
//     *
//     * @return \Magento\Framework\Controller\ResultInterface
//     */
//    public function execute()
//    {
//        $imageId = $this->_request->getParam('param_name', 'image');
//        try {
//            $result = $this->imageUploader->saveFileToTmpDir($imageId);
//
//            $result['cookie'] = [
//                'name' => $this->_getSession()->getName(),
//                'value' => $this->_getSession()->getSessionId(),
//                'lifetime' => $this->_getSession()->getCookieLifetime(),
//                'path' => $this->_getSession()->getCookiePath(),
//                'domain' => $this->_getSession()->getCookieDomain(),
//            ];
//        } catch (\Exception $e) {
//            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
//        }
//        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
//    }
//}
