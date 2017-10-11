<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot bands test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsPlotBandsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands(true);

		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getFrom(), "The method getFrom() does not return the expected value");
		$this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj1->getLabel(), "The method getLabel() does not return the expected value");
		$this->assertEquals(null, $obj1->getTo(), "The method getTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands(false);

		$this->assertEquals(null, $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getFrom(), "The method getFrom() does not return the expected value");
		$this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj0->getLabel(), "The method getLabel() does not return the expected value");
		$this->assertEquals(null, $obj0->getTo(), "The method getTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newLabel() method.
	 *
	 * @return void.
	 */
	public function testNewLabel() {

		$obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands(false);

		$res = $obj->newLabel();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel::class, $res, "The method newLabel() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands(true);

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderWidth(31);

		$res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

		$res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setFrom(71);

		$res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 71];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with from");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 71, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setLabel(new \WBW\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel());

		$res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 71, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with label");

		$obj->setTo(32);

		$res9 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 71, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "to" => 32];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with to");

		$obj->setZIndex(70);

		$res10 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 31, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 71, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "to" => 32, "zIndex" => 70];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with z index");
	}

}
