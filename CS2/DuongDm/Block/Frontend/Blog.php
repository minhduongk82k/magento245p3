<?php
namespace CS2\DuongDm\Block\Frontend;

class Blog extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \CS2\DuongDm\Model\BlogFactory
     */
    private $blogFactory;

    /**
     * @var \CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory
     */
    private $collectionCategory;

    /**
     * @var \CS2\DuongDm\Model\ResourceModel\Blog\Collection
     */
    private $resourceBLogColection;

    /**
     * @var \CS2\DuongDm\Model\ResourceModel\Blog\CollectionFactory
     */
    private $collectionResourceBlog;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \CS2\DuongDm\Model\BlogFactory $blogFactory,
        \CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory $collectionCategory,
        \CS2\DuongDm\Model\ResourceModel\Blog\Collection $resourceBLogColection,
        \CS2\DuongDm\Model\ResourceModel\Blog\CollectionFactory $collectionResourceBlog,
        array $data = []
    ) {
        $this->blogFactory = $blogFactory;
        $this->collectionCategory = $collectionCategory;
        $this->resourceBLogColection = $resourceBLogColection;
        $this->collectionResourceBlog = $collectionResourceBlog;
        parent::__construct($context, $data);
    }

    public function getBlogbyId()
    {
      $id = $this->getRequest()->getParam('blog_id');
//     return $this->collectionCategory->create()->load($id);
    return $this->getUrl('duongdm/index/blog', [$param => $value]);
    }
    public function getBlogDetails(){
        $id = $this->getRequest()->getParam('blog_id');//Load id
        return $this->blogFactory->create()->load($id); //Nhờ id trả về model tương ứng
    }
}
