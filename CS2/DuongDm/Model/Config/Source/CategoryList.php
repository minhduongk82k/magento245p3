<?php
namespace CS2\DuongDm\Model\Config\Source;

class CategoryList implements \Magento\Framework\Option\ArrayInterface
{
    const CACHE_TAG = 'cs2_duongdm_category_list';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'category_list';

    /**
     * @var \CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory
     */
    protected $categoryCollectionFactory;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \CS2\DuongDm\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
    }


    public function toOptionArray()
    {
        $result = [];
        $categoryCollection = $this->categoryCollectionFactory->create();
        foreach ($categoryCollection as $cate){
            $result[] =
                ['value' => $cate->getCategoryId(), 'label' => __($cate->getName())]
            ;
        }
        return $result;
    }
}
