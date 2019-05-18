<?php

namespace Clayder\Office\Model\ResourceModel;


class Department extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('clayder_office_department', 'entity_id');
    }
}