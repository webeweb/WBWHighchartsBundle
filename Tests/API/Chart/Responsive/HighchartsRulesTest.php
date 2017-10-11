<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Responsive;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts rules test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Responsive
 * @version 5.0.14
 */
final class HighchartsRulesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Responsive\HighchartsRules(true);

		$this->assertEquals(null, $obj1->getChartOptions(), "The method getChartOptions() does not return the expected value");
		$this->assertEquals(null, $obj1->getCondition(), "The method getCondition() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Responsive\HighchartsRules(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Responsive\HighchartsRules(true);

		$obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);

		$res1 = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with chart options");

		$obj->setCondition(["condition" => "3f9178c25b78ed8bed19091bcb62e266"]);

		$res2 = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "condition" => ["condition" => "3f9178c25b78ed8bed19091bcb62e266"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with condition");
	}

}
