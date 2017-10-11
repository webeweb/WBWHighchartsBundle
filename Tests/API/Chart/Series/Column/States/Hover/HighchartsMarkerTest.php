<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Column\States\Hover;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Column\States\Hover
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsMarker(true);

		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFillColor(), "The method getFillColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineColor(), "The method getLineColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getRadius(), "The method getRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbol(), "The method getSymbol() does not return the expected value");
		$this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsMarker(false);

		$this->assertEquals(null, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj0->getFillColor(), "The method getFillColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals("#ffffff", $obj0->getLineColor(), "The method getLineColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(4, $obj0->getRadius(), "The method getRadius() does not return the expected value");
		$this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj0->getSymbol(), "The method getSymbol() does not return the expected value");
		$this->assertEquals(null, $obj0->getWidth(), "The method getWidth() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsMarker(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsMarker(true);

		$obj->setEnabled(1);

		$res1 = ["enabled" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

		$obj->setHeight(27);

		$res3 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res4 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with line color");

		$obj->setLineWidth(20);

		$res5 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with line width");

		$obj->setRadius(70);

		$res6 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 70];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with radius");

		$obj->setStates("");

		$res7 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 70, "states" => ""];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setSymbol("triangle-down");

		$res8 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 70, "states" => "", "symbol" => "triangle-down"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with symbol");

		$obj->setWidth(13);

		$res9 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 27, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 70, "states" => "", "symbol" => "triangle-down", "width" => 13];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with width");
	}

}
