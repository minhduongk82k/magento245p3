<?php
namespace CS2\DuongDm\Block\Frontend;

class Search extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    public function getBlogNamebySearch($param , $value)
    {
        return $this->getUrl('duongdm/index/index', [$param => $value]);
    }
}
