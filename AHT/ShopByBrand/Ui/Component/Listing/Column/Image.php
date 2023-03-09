<?php

namespace AHT\ShopByBrand\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;


class Image extends \Magento\Ui\Component\Listing\Columns\Column
{


    protected $brand;
    protected $_storeManager;
    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        \AHT\ShopByBrand\Model\Brand $brand,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
        $this->brand = $brand;
        $this->_storeManager = $storeManager;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {

        if (isset($dataSource['data']['items'])) {
            $fieldName = $this->getData('image');
            foreach ($dataSource['data']['items'] as & $item) {
                $brand = new \Magento\Framework\DataObject($item);
                $item[$fieldName . '_src'] = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA)."catalog/tmp/category/".$brand['image'];
                $item[$fieldName . '_orig_src'] = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA)."catalog/tmp/category/".$brand['image'];
                $item[$fieldName . '_link'] = $this->urlBuilder->getUrl("brand/brand/",
                    ['brand-id' => $brand['brand-id']]
                );
                $item[$fieldName . '_alt'] = $brand['name'];
            }
        }

        return $dataSource;
    }
}
