<?php

namespace Clayder\Office\Model\ResourceModel;


use phpDocumentor\Reflection\Types\Parent_;

class Employee extends \Magento\Eav\Model\Entity\AbstractEntity
{

    protected function _construct()
    {
        $this->_read = 'clayder_office_employee_read';
        $this->_write = 'clayder_office_employee_write';
    }

    /**
     * @return \Magento\Eav\Model\Entity\Type
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getEntityType()
    {
        if(empty($this->_type)){
            $this->setType(\Clayder\Office\Model\Employee::ENTITY);
        }
        return parent::getEntityType();
    }
}