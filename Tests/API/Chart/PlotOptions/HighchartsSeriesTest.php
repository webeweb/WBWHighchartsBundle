<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions;

use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts series test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsSeriesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsSeries(false);

		$res = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(55);

		$res1 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(100);

		$res4 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res5 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(1);

		$res7 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res8 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res9 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res10 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res11 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with negative color');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res12 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setPointIntervalUnit("57f46eb32559c2becc4bde9e5b155d55");

		$res13 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with point interval unit');

		$obj->setPointPlacement("64275df64fd351d104b485d2fe3e3698");

		$res14 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with point placement');

		$obj->setSkipKeyboardNavigation(1);

		$res15 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setStacking("28e151a4f741899a2b6eca262c8320ae");

		$res16 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 1, "stacking" => "28e151a4f741899a2b6eca262c8320ae"];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with stacking');

		$obj->setStep("2764ca9d34e90313978d044f27ae433b");

		$res17 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 1, "stacking" => "28e151a4f741899a2b6eca262c8320ae", "step" => "2764ca9d34e90313978d044f27ae433b"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with step');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res18 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 55, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 1, "stacking" => "28e151a4f741899a2b6eca262c8320ae", "step" => "2764ca9d34e90313978d044f27ae433b", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

