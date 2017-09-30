<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series;

use WBW\HighchartsBundle\API\Chart\Series\HighchartsTreemap;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts treemap test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsTreemapTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsTreemap(false);

		$res = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(27);

		$res1 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(37);

		$res4 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res6 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res7 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with data');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res8 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(0);

		$res9 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res10 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res11 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setIndex(88);

		$res12 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with index');

		$obj->setInteractByLeaf(1);

		$res13 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with interact by leaf');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res14 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLegendIndex(81);

		$res15 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with legend index');

		$obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

		$res16 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with levels');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res17 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setMaxPointWidth(50);

		$res18 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with max point width');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res19 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res20 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setSkipKeyboardNavigation(1);

		$res21 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setSortIndex(71);

		$res22 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with sort index');

		$obj->setType("599dcce2998a6b40b1e38e8c6006cb0a");

		$res23 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "type" => "599dcce2998a6b40b1e38e8c6006cb0a"];
		$this->assertEquals($res23, $obj->toArray(), 'The method toArray() does not return the expected array with type');

		$obj->setZIndex(86);

		$res24 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 86];
		$this->assertEquals($res24, $obj->toArray(), 'The method toArray() does not return the expected array with z index');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res25 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 27, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 37, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 88, "interactByLeaf" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 81, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 50, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 86, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res25, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

