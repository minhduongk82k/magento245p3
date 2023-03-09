<?php
namespace CS2\DuongDm\Model\ResourceModel\Category;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'category_id';
    protected $_eventPrefix = 'cs2_duongdm_category_collection';
    protected $_eventObject = 'category_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('CS2\DuongDm\Model\Category', 'CS2\DuongDm\Model\ResourceModel\Category');
    }
}
