<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Develo\Forum\Api\Data;

interface PostInterface
{

    const POST_TITLE = 'post_title';
    const POST_ID = 'post_id';

    /**
     * Get post_id
     * @return string|null
     */
    public function getPostId();

    /**
     * Set post_id
     * @param string $postId
     * @return \Develo\Forum\Post\Api\Data\PostInterface
     */
    public function setPostId($postId);

    /**
     * Get post_title
     * @return string|null
     */
    public function getPostTitle();

    /**
     * Set post_title
     * @param string $postTitle
     * @return \Develo\Forum\Post\Api\Data\PostInterface
     */
    public function setPostTitle($postTitle);
}

