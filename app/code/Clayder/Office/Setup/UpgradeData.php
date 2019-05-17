<?php

namespace Clayder\Office\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var \Clayder\Office\Model\DepartmentFactory
     */
    protected $departmentFactory;

    /**
     * @var \Clayder\Office\Model\EmployeeFactory
     */
    protected $employeeFactory;

    /**
     * UpgradeData constructor.
     * @param \Clayder\Office\Model\DepartmentFactory $departmentFactory
     * @param \Clayder\Office\Model\EmployeeFactory $employeeFactory
     */
    public function __construct(
        \Clayder\Office\Model\DepartmentFactory $departmentFactory,
        \Clayder\Office\Model\EmployeeFactory $employeeFactory
    )
    {
       $this->departmentFactory = $departmentFactory;
       $this->employeeFactory   = $employeeFactory;
    }

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $salesDepartment = $this->departmentFactory->create();
        $salesDepartment->setName('Sales');
        $salesDepartment->save();

        $employee = $this->employeeFactory->create();
        $employee->setDepartmentId($salesDepartment->getId());
        $employee->setEmail('john@sales.loc');
        $employee->setFirstName('John');
        $employee->setLastName('Doe');
        $employee->setServiceYears(3);
        $employee->setDob('1983-03-28');
        $employee->setSalary(3800.00);
        $employee->setVatNumber('GB123456789');
        $employee->setNote('Just some notes about John');
        $employee->save();

        $setup->endSetup();
    }
}