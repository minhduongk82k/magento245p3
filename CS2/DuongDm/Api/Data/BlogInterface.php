<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CS2\DuongDm\Api\Data;

interface BlogInterface
{

    const AUTHOR = 'author';
    const SHORT_DES = 'short_des';
    const URL = 'url';
    const STATUS = 'status';
    const NAME = 'name';
    const BLOG_ID = 'blog_id';
    const BLOG_CAT_ID = 'blog_cat_id';
    const CREATE_AT = 'create_at';
    const DESCRIPTION = 'description';
    const PUBLIC_DATE = 'public_date';
    const UPDATE_AT = 'update_at';
    const CATEGORY = 'category';
    const TAG = 'tag';
    const IMAGE = 'image';

    /**
     * Get blog_id
     * @return string|null
     */
    public function getBlogId();

    /**
     * Set blog_id
     * @param string $blogId
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setBlogId($blogId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setName($name);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setStatus($status);

    /**
     * Get image
     * @return string|null
     */
    public function getImage();

    /**
     * Set image
     * @param string $image
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setImage($image);

    /**
     * Get category
     * @return string|null
     */
    public function getCategory();

    /**
     * Set category
     * @param string $category
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setCategory($category);

    /**
     * Get short_des
     * @return string|null
     */
    public function getShortDes();

    /**
     * Set short_des
     * @param string $shortDes
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setShortDes($shortDes);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setDescription($description);

    /**
     * Get tag
     * @return string|null
     */
    public function getTag();

    /**
     * Set tag
     * @param string $tag
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setTag($tag);

    /**
     * Get url
     * @return string|null
     */
    public function getUrl();

    /**
     * Set url
     * @param string $url
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setUrl($url);

    /**
     * Get author
     * @return string|null
     */
    public function getAuthor();

    /**
     * Set author
     * @param string $author
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setAuthor($author);

    /**
     * Get public_date
     * @return string|null
     */
    public function getPublicDate();

    /**
     * Set public_date
     * @param string $publicDate
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setPublicDate($publicDate);

    /**
     * Get create_at
     * @return string|null
     */
    public function getCreateAt();

    /**
     * Set create_at
     * @param string $createAt
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setCreateAt($createAt);

    /**
     * Get update_at
     * @return string|null
     */
    public function getUpdateAt();

    /**
     * Set update_at
     * @param string $updateAt
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setUpdateAt($updateAt);

    /**
     * Get blog_cat_id
     * @return string|null
     */
    public function getBlogCatId();

    /**
     * Set blog_cat_id
     * @param string $blogCatId
     * @return \CS2\DuongDm\Blog\Api\Data\BlogInterface
     */
    public function setBlogCatId($blogCatId);
}
