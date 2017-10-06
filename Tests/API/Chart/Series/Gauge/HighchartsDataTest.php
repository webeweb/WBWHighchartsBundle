<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Gauge;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Gauge
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData(false);

		$res = ["selected" => false];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(51);

		$res3 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res4 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res5 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->newEvents();

		$res6 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res7 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setLabelrank(96);

		$res8 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 96];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with labelrank");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res9 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 96, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setY(13);

		$res10 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 51, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 96, "name" => "b068931cc450442b63f5b3d276ea4297", "y" => 13];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
