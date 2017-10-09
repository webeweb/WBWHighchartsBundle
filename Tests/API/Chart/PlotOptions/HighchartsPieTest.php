<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts pie test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsPieTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected class");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

		$res = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(45);

		$res1 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColorIndex(65);

		$res3 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCursor("crosshair");

		$res5 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->newDataLabels();

		$res6 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEndAngle(36);

		$res8 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with end angle");

		$obj->newEvents();

		$res9 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res10 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res12 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res13 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->newPoint();

		$res14 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => []];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res15 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setSize("f7bd60b75b29d79b660a2859395c1a24");

		$res16 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with size");

		$obj->setSkipKeyboardNavigation(1);

		$res17 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->newStates();

		$res18 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "states" => []];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res19 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res20 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 45, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 65, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 36, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
