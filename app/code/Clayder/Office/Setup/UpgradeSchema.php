<?php

namespace Clayder\Office\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $employeeEntityTable = \Clayder\Office\Model\Employee::ENTITY.'_entity';
        $departmentEntityTable = "clayder_office_department";
        $setup->getConnection()
            ->addForeignKey(
                $setup->getFkName(
                    $employeeEntityTable,
                    'department_id',
                    $departmentEntityTable,
                    'entity_id'
                ),
                'department_id',
                $setup->getTable($departmentEntityTable),
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            );
        $setup->endSetup();
    }
}