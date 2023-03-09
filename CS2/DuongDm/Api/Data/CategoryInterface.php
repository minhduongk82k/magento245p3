<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CS2\DuongDm\Api\Data;

interface CategoryInterface
{

    const ID = 'id';
    const CATE_BLOG_ID = 'cate_blog_id';
    const CATEGORY_ID = 'category_id';
    const NAME = 'name';

    /**
     * Get category_id
     * @return string|null
     */
    public function getCategoryId();

    /**
     * Set category_id
     * @param string $categoryId
     * @return \CS2\DuongDm\Category\Api\Data\CategoryInterface
     */
    public function setCategoryId($categoryId);

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \CS2\DuongDm\Category\Api\Data\CategoryInterface
     */
    public function setId($id);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \CS2\DuongDm\Category\Api\Data\CategoryInterface
     */
    public function setName($name);

    /**
     * Get cate_blog_id
     * @return string|null
     */
    public function getCateBlogId();

    /**
     * Set cate_blog_id
     * @param string $cateBlogId
     * @return \CS2\DuongDm\Category\Api\Data\CategoryInterface
     */
    public function setCateBlogId($cateBlogId);
}
