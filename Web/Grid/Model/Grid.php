<?php

/**
 * Auction Grid Model.
 *
 * @category    Web
 *
 * @author      Web Software Private Limited
 */
namespace Web\Grid\Model;

use Web\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'grid_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'grid_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'grid_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Web\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }


    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    public function setLastName($lastName)
    {
        return $this->setData(self::LAST_NAME, $lastName);
    }

    public function getAge()
    {
        return $this->getData(self::AGE);
    }

    public function setAge($age)
    {
        return $this->setData(self::AGE, $age);
    }


}