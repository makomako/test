<?php
class test {
	function exec() {
		echo 'ふむ';
		return;
	}
}
require_once './test2.php';


$instance = new test;
$instance2 = new test2;

$instance->exec();
$instance2->exec();
?>