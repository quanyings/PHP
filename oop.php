<?php 
# 创建一个类
class Person{
	private $name; //private 私有的; protected 本类和子类能访问,外部不能访问
	// public $email;
	private $email;
	public static $age=40;
	public static function getAge(){
		return Person::$age;
	}
	public function setName($sbqname)
	{
		$this->name=$sbqname;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setEmail($sbqemail){
		$this->email=$sbqemail;
	}
	public function getEmail()
	{
		return $this->email;
	}
	#构造函数
	public function __construct($name,$email){
		$this->name=$name;
		$this->email=$email;
		// echo "Person 对象已被创建";
		echo __CLASS__."对象已被创建";
	}

	# 析构函数
	public function __destruct()
	{
		echo __CLASS__."对象已被销毁";
	}
}

// $person1=new Person;
// $person1->name="Gaochao";
// $person1->email="1183800414@qq.com";
// echo $person1->name,$person1->email;

// $person1->setName("小星");
// echo $person1->getName();
// $person1->setEmail("1183800414@qq.com");
// echo $person1->getEmail();

// $person1=new Person('miaojie','mj@qq.com');
// echo $person1->getName();

#继承
class Customers extends Person{
    private $salary;
    public function setSalary($salary)
    {
    	$this->salary=$salary;

    }
    public function getSalary(){
    	return $this->salary;
    }
    // public function setName($name){
    // 	$this->name=$name;
    // }
    public function __construct($name,$email,$salary){
    	parent::__construct($name,$email);
    	$this->salary=$salary;
	}
 }	
 $customer=new Customers("lucky","lucky@qq.com",3000);
 // $customer->setSalary(3000);
 echo $customer->getName();
 echo $customer->getEmail();
 echo $customer->getSalary();
 echo "<hr>";
 # 调用静态变量
 // echo Person::$age;
 echo Person::getAge();
 ?>









