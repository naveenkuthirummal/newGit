<?php

	/**
	 * this is created only for testing purpose
	 */
	class A
	{
		
		public $name;
		public $lname;
		public $age;

		public function set($n,$l,int $a)
		{

			$this->name = $n;
			$this->name = $l;
			$this->name = $a;
		}
		
		public function __awake()
		{
			//need to write constructor;
		}

		public function __sleep()
		{
			return array('name');
		}
	}

	$obj = new A();
	$str = serialize($obj);
	
	$obj->set('nav','ku',28);
	unset($obj);
	echo $str;

	class d
	{
		//here i need to provide mul function 

		public function mul(int $a,int b)
		{
			return $mul = $a*$b;
		}
	}

	$obj = new d();
	$obj->mul(4,4);
	unset(obj);

class c 
{
	//need to create a class conatains addition logic function
	public function add(int $a,int $b)
	{
		return $sum = $a+$b;
	}
}


$obj = new c();
$obj->add(4,4);
unset($obj);


class f
{
	echo "Sample f code";
}

//this is from main branch
//this is from devone branch
