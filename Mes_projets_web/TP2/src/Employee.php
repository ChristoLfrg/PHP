<?php
	include 'IEmployee.php';
	include 'employee_display.php';
	include 'employee_raise.php';
	include 'employee_sort.php';
	
	
	class Employee {
		private $_id;
		private $_age;				
		public $_name;		
		protected $_salary;
		
		public function __construct(int $id, string $name, float $salary, int $age) {
			$this->_id		= $id;
			$this->_name	= $name;
			$this->_salary	= $salary;
			$this->_age		= $age;
		}
		
		//GETTERS
		public function getId() :int {
			return $this->_id;
		}
		public function getName() :string {
			return $this->_name;
		}
		public function getSalary() :float {
			return $this->_salary;
		}
		public function getAge() :int {
			return $this->_age;
		}
		//SETTERS
		public function setId(int $id) {
			$this->_id = $id;
		}
		public function setName(string $name) {
			$this->_name = $name;
		}
		public function setSalary(float $salary) {
			$this->_salary = $salary;
		}
		public function setAge(int $age) {
			$this->_age = $age;
		}
		
		public function __toString() : string {
			return "Employee : ID = ".$this->getID()." | Nom = ".$this->getName()." | Salaire = ".$this->getSalary()." | Age = ".$this->getAge()."<br>";
		}
		
	}
	
	
	 
?>
