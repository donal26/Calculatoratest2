<?php
use PHPUnit\Framework\TestCase;


final class CalculateTest extends TestCase{

	public function testAdd():void{
		include_once "src/calculate.php";
		$calculate=new Calculate();
		$this->assertEquals(  $calculate->add(8,7), 12);
	}

	public function testDivide():void{

		$calculate=new Calculate();
		$this->assertEquals(  $calculate->divide(5,0), "Error Division entre 0" );
	}

	public function testarrayAdded():void{
		$calculate=new Calculate();
		$array=[];
		$this->assertEquals(  $calculate->arrayAdded($array), 0);
	}
	public function testarrayAdded2():void{
		$calculate=new Calculate();
		$array=[5,4,8];
		$this->assertEquals(  $calculate->arrayAdded($array), 17);
	}
	public function testarrayAdded3():void{
		$calculate=new Calculate();
		$array=[5.6,6.2,4.2];
		$this->assertEquals(  $calculate->arrayAdded($array), 16);
	}
	public function testarrayAdded4():void{
		$calculate=new Calculate();
		$array=['4','4',5];
		$this->assertEquals(  $calculate->arrayAdded($array), 13);
	}

	public function testarrayAdded5():void{
		$calculate=new Calculate();
		$array=['cuatro','4',5];
		$this->assertEquals(  $calculate->arrayAdded($array), 9);
	}

	public function testarrayAdded6():void{
		$calculate=new Calculate();
		$array=null;
		$this->assertEquals(  $calculate->arrayAdded($array), 0);
	}
}
?>
