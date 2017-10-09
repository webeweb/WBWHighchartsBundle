<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Bubble;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Bubble
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Bubble\HighchartsMarker(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Bubble\HighchartsMarker(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Bubble\HighchartsMarker(false);

		$res = ["lineColor" => "#ffffff", "lineWidth" => 0, "symbol" => "circle"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setEnabled(1);

		$res1 = ["lineColor" => "#ffffff", "lineWidth" => 0, "symbol" => "circle", "enabled" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["lineColor" => "#ffffff", "lineWidth" => 0, "symbol" => "circle", "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

		$obj->setHeight(96);

		$res3 = ["lineColor" => "#ffffff", "lineWidth" => 0, "symbol" => "circle", "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 96];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->newStates();

		$res4 = ["lineColor" => "#ffffff", "lineWidth" => 0, "symbol" => "circle", "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 96, "states" => []];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setWidth(37);

		$res5 = ["lineColor" => "#ffffff", "lineWidth" => 0, "symbol" => "circle", "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 96, "states" => [], "width" => 37];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with width");
	}

}
