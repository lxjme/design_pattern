<?php

class A {

	static private $instance;

	// 防止克隆对象
	private function __clone() {}

	// 防止创建对象
	private function __construct() {}

	static public function getInstance() {

		if(!self::$instance instanceof self) {
			self::$instance = new self();
		}

		return self::$instance;

	}


}

$a1 = A::getInstance();
$a2 = A::getInstance();

// 比对同一个对象
var_dump($a1, $a2);


