<?php
/**
 * Web_Grid Grid Interface.
 *
 * @category    Web
 *
 * @author      Web Software Private Limited
 */
namespace Web\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const TITLE = 'title';
    const LAST_NAME = 'last_name';
    const AGE = 'age';


    public function getEntityId();

    public function setEntityId($entityId);


    public function getTitle();


    public function setTitle($title);


    public function getLastName();


    public function setLastName($lastName);


    public function getAge();

    public function setAge($age);


}