<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Develo\Forum\Api\Data;

interface PostSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get post list.
     * @return \Develo\Forum\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * Set post_title list.
     * @param \Develo\Forum\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

