<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CS2\DuongDm\Api\Data;

interface CategorySearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Category list.
     * @return \CS2\DuongDm\Api\Data\CategoryInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \CS2\DuongDm\Api\Data\CategoryInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
