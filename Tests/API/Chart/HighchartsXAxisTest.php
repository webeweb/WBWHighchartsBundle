<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts x axis test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsXAxisTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newCrosshair() method.
	 *
	 * @return void.
	 */
	public function testNewCrosshair() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

		$res = $obj->newCrosshair();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsCrosshair::class, $res, "The method newCrosshair() does not return the expected class");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newLabels() method.
	 *
	 * @return void.
	 */
	public function testNewLabels() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

		$res = $obj->newLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsLabels::class, $res, "The method newLabels() does not return the expected class");
	}

	/**
	 * Tests the newTitle() method.
	 *
	 * @return void.
	 */
	public function testNewTitle() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

		$res = $obj->newTitle();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle::class, $res, "The method newTitle() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

		$res = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");

		$res1 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with alternate grid color");

		$obj->setBreaks(["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"]);

		$res2 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with breaks");

		$obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);

		$res3 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with categories");

		$obj->setCeiling(61);

		$res4 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with ceiling");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res5 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->newCrosshair();

		$res6 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with crosshair");

		$obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

		$res7 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with date time label formats");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res8 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->newEvents();

		$res9 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setFloor(98);

		$res10 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with floor");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res11 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->newLabels();

		$res12 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => []];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with labels");

		$obj->setLinkedTo(25);

		$res13 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMax(58);

		$res14 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with max");

		$obj->setMin(65);

		$res15 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with min");

		$obj->setMinRange(72);

		$res16 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with min range");

		$obj->setMinTickInterval(9);

		$res17 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with min tick interval");

		$obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");

		$res18 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with minor tick interval");

		$obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);

		$res19 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with plot bands");

		$obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);

		$res20 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with plot lines");

		$obj->setSoftMax(27);

		$res21 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with soft max");

		$obj->setSoftMin(75);

		$res22 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with soft min");

		$obj->setTickAmount(10);

		$res23 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with tick amount");

		$obj->setTickInterval(94);

		$res24 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with tick interval");

		$obj->setTickPixelInterval(41);

		$res25 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94, "tickPixelInterval" => 41];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with tick pixel interval");

		$obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");

		$res26 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94, "tickPixelInterval" => 41, "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd"];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with tick positioner");

		$obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);

		$res27 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94, "tickPixelInterval" => 41, "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with tick positions");

		$obj->setTickmarkPlacement("between");

		$res28 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94, "tickPixelInterval" => 41, "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickmarkPlacement" => "between"];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with tickmark placement");

		$obj->newTitle();

		$res29 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94, "tickPixelInterval" => 41, "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickmarkPlacement" => "between", "title" => []];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with title");

		$obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);

		$res30 = ["allowDecimals" => true, "endOnTick" => false, "gridLineColor" => "#e6e6e6", "gridLineDashStyle" => "Solid", "gridLineWidth" => 0, "gridZIndex" => 1, "lineColor" => "#ccd6eb", "lineWidth" => 1, "maxPadding" => 0.01, "minPadding" => 0.01, "minorGridLineColor" => "#f2f2f2", "minorGridLineDashStyle" => "Solid", "minorGridLineWidth" => 1, "minorTickColor" => "#999999", "minorTickLength" => 2, "minorTickPosition" => "outside", "minorTickWidth" => 0, "offset" => 0, "opposite" => false, "reversed" => false, "showEmpty" => true, "showFirstLabel" => true, "showLastLabel" => true, "startOfWeek" => 1, "startOnTick" => false, "tickColor" => "#ccd6eb", "tickLength" => 10, "tickPosition" => "outside", "tickWidth" => 1, "type" => "linear", "uniqueNames" => true, "visible" => true, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 61, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "floor" => 98, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "linkedTo" => 25, "max" => 58, "min" => 65, "minRange" => 72, "minTickInterval" => 9, "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "softMax" => 27, "softMin" => 75, "tickAmount" => 10, "tickInterval" => 94, "tickPixelInterval" => 41, "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickmarkPlacement" => "between", "title" => [], "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with units");
	}

}
