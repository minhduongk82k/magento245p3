<?php
namespace CS2\DuongDm\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CS2\DuongDm\Model;
{
    class Post extends \Magento\Framework\View\Element\Template
    {
        const PAGE = 1;
        const PAGESIZE = 1;
        /**
         * @var \CS2\DuongDm\Model\BlogFactory
         */
        private $blogFactory;
        protected $date;

        public function __construct(
            \Magento\Framework\View\Element\Template\Context        $context,
            \Magento\Framework\Stdlib\DateTime\DateTime $date,
            \CS2\DuongDm\Model\ResourceModel\Blog\CollectionFactory $blogCollectionFactory

        )
        {
            $this->blogFactory = $blogCollectionFactory;
            $this->date = $date;
            parent::__construct($context);
        }
        protected function _prepareLayout()
        {
            parent::_prepareLayout();
            $this->pageConfig->getTitle()->set(__('Custom Pagination'));
            if ($this->getCustomCollection()) {
                $pager = $this->getLayout()->createBlock(
                    'Magento\Theme\Block\Html\Pager',
                    'duongdm.index.index'
                )->setAvailableLimit([1 => 1])
                    ->setShowPerPage(true)->setCollection(
                        $this->getCustomCollection()
                    );
                $this->setChild('pager', $pager);
                $this->getCustomCollection()->load();
            }
            return $this;
        }
        public function getPagerHtml()
        {
            return $this->getChildHtml('pager');
        }
        public function getCustomCollection()
        {
            $page = ($this->getRequest()->getParam('p')) ? $this->getRequest()->getParam('p') : self::PAGE;
            $pageSize = !$this->getRequest()->getParam('limit') ? self::PAGESIZE : $this->getRequest()->getParam('limit');
            $collection = $this->blogFactory->create();

            if ($blogId = $this->getRequest()->getParam('blog_id')) {
                $collection->addFieldToFilter('blog_id', $blogId);
            }
            if ($blogName = $this->getRequest()->getParam('name')) {
                $collection->addFieldToFilter('name', $blogName);
            }
            $now= $this->date->gmtDate();
            echo($now);
            $collection->addFieldToFilter('public_date', ['lt' => $now]);
            $collection->setPageSize($pageSize);
            $collection->setCurPage($page);
            return $collection;
        }
        public function getBlogbyId($param , $value)
        {
            return $this->getUrl('duongdm/index/blog', [$param => $value]);
        }
    }
}
