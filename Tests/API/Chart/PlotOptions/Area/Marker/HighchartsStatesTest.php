<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Area\Marker;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts states test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Area\Marker
 * @version 5.0.14
 */
final class HighchartsStatesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\HighchartsStates(true);

		$this->assertEquals(null, $obj1->getHover(), "The method getHover() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelect(), "The method getSelect() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\HighchartsStates(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newHover() method.
	 *
	 * @return void.
	 */
	public function testNewHover() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\HighchartsStates(false);

		$res = $obj->newHover();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\States\HighchartsHover::class, $res, "The method newHover() does not return the expected object");
	}

	/**
	 * Tests the newSelect() method.
	 *
	 * @return void.
	 */
	public function testNewSelect() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\HighchartsStates(false);

		$res = $obj->newSelect();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\States\HighchartsSelect::class, $res, "The method newSelect() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\HighchartsStates(true);

		$obj->setHover(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\States\HighchartsHover());

		$res1 = ["hover" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with hover");

		$obj->setSelect(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Area\Marker\States\HighchartsSelect());

		$res2 = ["hover" => [], "select" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with select");
	}

}
