<?php
/**
 * Created by PhpStorm.
 * User: clayder
 * Date: 25/04/19
 * Time: 22:53
 */

namespace Clayder\Office\Model\ResourceModel\Department;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Clayder\Office\Model\Department',
            'Clayder\Office\Model\ResourceModel\Department'
        );
    }
}