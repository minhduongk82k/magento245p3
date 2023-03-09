<?php
namespace CS2\DuongDm\Block\Frontend;

use CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\View\Element\Template\Context;

class ListCategory extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory
     */
    private $CategoryFactory;

    /**
     * @param Context $context
     * @param CollectionFactory $CategoryCollectionFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory $CategoryCollectionFactory,
        array $data = []
    ) {
        $this->CategoryFactory = $CategoryCollectionFactory;
        parent::__construct($context, $data);
    }
    public function getCategoryCollection(){
        $cate = $this->CategoryFactory->create();
        return $cate->getItems();
    }
    public function getCategoryUrlById($param , $value)
    {
        return $this->getUrl('duongdm/index/index', [$param => $value]);
    }
}
