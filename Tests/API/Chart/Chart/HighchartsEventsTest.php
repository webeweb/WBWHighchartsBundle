<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart;

use WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts events test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsEventsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsEvents(false);

		$obj->setAddSeries("2a12e68b66ba3a0ab168c1ab1d3a0588");

		$res1 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with add series');

		$obj->setAfterPrint("6e9249730f6d40e35aed0e957a7d82ea");

		$res2 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with after print');

		$obj->setBeforePrint("74c828520c5583314685b27d6963c154");

		$res3 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with before print');

		$obj->setClick("a8affc088cbca89fa20dbd98c91362e4");

		$res4 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with click');

		$obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");

		$res5 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with drilldown');

		$obj->setDrillup("e4d1aecbb5d06c101b0038fd3c0a2f16");

		$res6 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with drillup');

		$obj->setDrillupall("af30f9f8132eb100a93f2cf9fd5a80ee");

		$res7 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16", "drillupall" => "af30f9f8132eb100a93f2cf9fd5a80ee"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with drillupall');

		$obj->setLoad("ec4d1eb36b22d19728e9d1d23ca84d1c");

		$res8 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16", "drillupall" => "af30f9f8132eb100a93f2cf9fd5a80ee", "load" => "ec4d1eb36b22d19728e9d1d23ca84d1c"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with load');

		$obj->setRedraw("daa55f45b87ef593dd961238ee16d83f");

		$res9 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16", "drillupall" => "af30f9f8132eb100a93f2cf9fd5a80ee", "load" => "ec4d1eb36b22d19728e9d1d23ca84d1c", "redraw" => "daa55f45b87ef593dd961238ee16d83f"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with redraw');

		$obj->setRender("9e5f0bb330344d580b9e30d338d6ab6d");

		$res10 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16", "drillupall" => "af30f9f8132eb100a93f2cf9fd5a80ee", "load" => "ec4d1eb36b22d19728e9d1d23ca84d1c", "redraw" => "daa55f45b87ef593dd961238ee16d83f", "render" => "9e5f0bb330344d580b9e30d338d6ab6d"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with render');

		$obj->setSelection("ef5714e0519bfaa645cdff7d28843b70");

		$res11 = ["addSeries" => "2a12e68b66ba3a0ab168c1ab1d3a0588", "afterPrint" => "6e9249730f6d40e35aed0e957a7d82ea", "beforePrint" => "74c828520c5583314685b27d6963c154", "click" => "a8affc088cbca89fa20dbd98c91362e4", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "drillup" => "e4d1aecbb5d06c101b0038fd3c0a2f16", "drillupall" => "af30f9f8132eb100a93f2cf9fd5a80ee", "load" => "ec4d1eb36b22d19728e9d1d23ca84d1c", "redraw" => "daa55f45b87ef593dd961238ee16d83f", "render" => "9e5f0bb330344d580b9e30d338d6ab6d", "selection" => "ef5714e0519bfaa645cdff7d28843b70"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with selection');
	}
}

