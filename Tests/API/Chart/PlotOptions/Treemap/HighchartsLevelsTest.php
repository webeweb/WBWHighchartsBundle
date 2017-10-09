<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Treemap;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts levels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Treemap
 * @version 5.0.14
 */
final class HighchartsLevelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsLevels(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsLevels(false);

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderDashStyle("8c4e9f2e21a77d83fc413d4c86d1cc81");

		$res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with border dash style");

		$obj->setBorderWidth(26);

		$res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 26];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 26, "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 26, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setLayoutAlgorithm("strip");

		$res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 26, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with layout algorithm");

		$obj->setLayoutStartingDirection("horizontal");

		$res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 26, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with layout starting direction");

		$obj->setLevel(44);

		$res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 26, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "level" => 44];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with level");
	}

}
