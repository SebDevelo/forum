<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Develo\Forum\Model;

use Develo\Forum\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements PostInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Develo\Forum\Model\ResourceModel\Post::class);
    }

    /**
     * @inheritDoc
     */
    public function getPostId()
    {
        return $this->_get(self::POST_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPostId($postId)
    {
        return $this->setData(self::POST_ID, $postId);
    }

    /**
     * @inheritDoc
     */
    public function getPostTitle()
    {
        return $this->_get(self::POST_TITLE);
    }

    /**
     * @inheritDoc
     */
    public function setPostTitle($postTitle)
    {
        return $this->setData(self::POST_TITLE, $postTitle);
    }
}

