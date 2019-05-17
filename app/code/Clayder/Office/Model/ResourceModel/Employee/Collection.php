<?php

namespace Clayder\Office\Model\ResourceModel\Employee;


class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Clayder\Office\Model\Employee',
            'Clayder\Office\Model\ResourceModel\Employee'
        );
    }
}