<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CS2\DuongDm\Api\Data;

interface BlogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Blog list.
     * @return \CS2\DuongDm\Api\Data\BlogInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \CS2\DuongDm\Api\Data\BlogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
