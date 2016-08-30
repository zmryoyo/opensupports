<?php
use RedBeanPHP\Facade as RedBean;

class Department extends DataStore {
    const TABLE = 'department';
    
    public static function getProps() {
        return [
            'name',
            'sharedTicketList'
        ];
    }

    public static function getDepartmentNames() {
        $departmentsQuantity = RedBean::count(Department::TABLE);
        $departmentsNameList = [];
        
        for ($departmentIndex = 1; $departmentIndex <= $departmentsQuantity; ++$departmentIndex) {
            $departmentsNameList[] = Department::getDataStore($departmentIndex)->name;
        }
        
        return $departmentsNameList;
    }
}