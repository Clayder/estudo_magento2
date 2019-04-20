<?php

namespace Clayder\Office\Model;


class Department extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init(
            'Clayder\Office\Model\ResourceModel\Department'
        );
    }



}