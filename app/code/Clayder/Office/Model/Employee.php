<?php

namespace Clayder\Office\Model;


class Employee extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = "clayder_office_employee";

    protected function _construct()
    {
        $this->_init('Clayder\Office\Model\ResourceModel\Employee');
    }
}