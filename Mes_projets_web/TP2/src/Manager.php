<?php
	include 'IManager.php';
	
	class Manager {
		private $_id;				
		public $_name;		
		protected $_salary;
		private $_age;
		
	    public function __construct(int $id, string $name,float $salary, int $age) {
			$this->_id		= $id;
			$this->_name	= $name;
			$this->_salary	= $salary;
			$this->_age		= $age;
		}
		// J'EN SUIS À LÀ COUCOU ICI 
		public function add(int $employeeId) {
			
		}
		public function getArrEmployeesId() : array {
			
		}
		
	}
	
	
	 
?>
