<?php
/**
 * Created by PhpStorm.
 * User: clayder
 * Date: 02/05/19
 * Time: 23:05
 */

namespace Clayder\Office\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $employeeSetupFactory;

    public function __construct(
        \Clayder\Office\Setup\EmplyeeSetupFactory $employeeSetupFactory
    )
    {
        $this->employeeSetupFactory = $employeeSetupFactory;
    }

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
            $employeeEntity = \Clayder\Office\Model\Employee::ENTITY;
            $employeeSetup = $this->employeeSetupFactory->create(
                ['setup' => $setup]
            );
            $employeeSetup->installEntities();
            $employeeSetup->addAttribute(
                $employeeEntity, 'service_year', ['type' => 'int']
            );
            $employeeSetup->addAttribute(
                $employeeEntity, 'dob', ['type' => 'datetime']
            );
            $employeeSetup->addAttribute(
                $employeeEntity, 'salary', ['type' => 'decimal']
            );
            $employeeSetup->addAttribute(
                $employeeEntity, 'vat_number', ['type' => 'varchar']
            );
            $employeeSetup->addAttribute(
                $employeeEntity, 'note', ['type' => 'text']
            );
        $setup->endSetup();
    }
}