<?php

namespace Clayder\Office\Controller\Test;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Crud extends \Clayder\Office\Controller\Test
{

    /**
     * @var \Clayder\Office\Model\EmployeeFactory
     */
    protected $employeeFactory;

    /**
     * @var \Clayder\Office\Model\DepartmentFactory
     */
    protected $departmentFactory;

    /**
     * Crud constructor.
     * @param Context $context
     * @param \Clayder\Office\Model\EmployeeFactory $employeeFactory
     * @param \Clayder\Office\Model\DepartmentFactory $departmentFactory
     */
    public function __construct(
        Context $context,
        \Clayder\Office\Model\EmployeeFactory $employeeFactory,
        \Clayder\Office\Model\DepartmentFactory $departmentFactory
    )
    {
        $this->employeeFactory   = $employeeFactory;
        $this->departmentFactory = $departmentFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $department = $this->departmentFactory->create();
        $department->setName("Finance");
       // $department->save();

        $employee1 = $this->employeeFactory->create();
        $employee1->setDepartment_id($department->getId());
        $employee1->setEmail('goran@mail.loc');
        $employee1->setFirstName('Goran');
        $employee1->setLastName('Gorvat');
        $employee1->setServiceYears(3);
        $employee1->setDob('1984-04-18');
        $employee1->setSalary(3800.00);
        $employee1->setVatNumber('GB123451234');
        $employee1->setNote('Note #1');
        // $employee1->save();

        $department->load(1);
        var_dump($department->toArray());
    }
}