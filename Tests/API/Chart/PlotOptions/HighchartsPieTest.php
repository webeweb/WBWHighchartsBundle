<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts pie test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsPieTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getCenter(), "The method getCenter() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getColors(), "The method getColors() does not return the expected value");
        $this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
        $this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(null, $obj1->getDepth(), "The method getDepth() does not return the expected value");
        $this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
        $this->assertEquals(null, $obj1->getEndAngle(), "The method getEndAngle() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
        $this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
        $this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
        $this->assertEquals(null, $obj1->getIgnoreHiddenPoint(), "The method getIgnoreHiddenPoint() does not return the expected value");
        $this->assertEquals(null, $obj1->getInnerSize(), "The method getInnerSize() does not return the expected value");
        $this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
        $this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinSize(), "The method getMinSize() does not return the expected value");
        $this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
        $this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
        $this->assertEquals(null, $obj1->getSize(), "The method getSize() does not return the expected value");
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
        $this->assertEquals(null, $obj1->getSlicedOffset(), "The method getSlicedOffset() does not return the expected value");
        $this->assertEquals(null, $obj1->getStartAngle(), "The method getStartAngle() does not return the expected value");
        $this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
        $this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
        $this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
        $this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
        $this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
        $this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
        $this->assertEquals("#ffffff", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals([null, null], $obj0->getCenter(), "The method getCenter() does not return the expected value");
        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getColors(), "The method getColors() does not return the expected value");
        $this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
        $this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(0, $obj0->getDepth(), "The method getDepth() does not return the expected value");
        $this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
        $this->assertEquals(null, $obj0->getEndAngle(), "The method getEndAngle() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
        $this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
        $this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
        $this->assertEquals(true, $obj0->getIgnoreHiddenPoint(), "The method getIgnoreHiddenPoint() does not return the expected value");
        $this->assertEquals("0", $obj0->getInnerSize(), "The method getInnerSize() does not return the expected value");
        $this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
        $this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(80, $obj0->getMinSize(), "The method getMinSize() does not return the expected value");
        $this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
        $this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(false, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
        $this->assertEquals(null, $obj0->getSize(), "The method getSize() does not return the expected value");
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
        $this->assertEquals(10, $obj0->getSlicedOffset(), "The method getSlicedOffset() does not return the expected value");
        $this->assertEquals(0, $obj0->getStartAngle(), "The method getStartAngle() does not return the expected value");
        $this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(false, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
        $this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
        $this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
        $this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
        $this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $obj->newDataLabels();
        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 0, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

        $obj->setAnimationLimit(75);

        $res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBorderWidth(59);

        $res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border width");

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

        $res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with center");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColorIndex(30);

        $res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with color index");

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with colors");

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

        $obj->setDepth(55);

        $res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with depth");

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with description");

        $obj->setEnableMouseTracking(0);

        $res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

        $obj->setEndAngle(20);

        $res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with end angle");

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents());

        $res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => []];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setExposeElementToA11y(0);

        $res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

        $obj->setFindNearestPointBy("xy");

        $res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

        $obj->setGetExtremesFromAll(0);

        $res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

        $obj->setIgnoreHiddenPoint(0);

        $res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0];
        $this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with ignore hidden point");

        $obj->setInnerSize("a6d1a6164e85630d2ca35170621de672");

        $res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672"];
        $this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with inner size");

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with keys");

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

        $obj->setMinSize(74);

        $res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74];
        $this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with min size");

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint());

        $res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => []];
        $this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with point");

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

        $obj->setSelected(1);

        $res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
        $this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with selected");

        $obj->setShadow(0);

        $res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0];
        $this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

        $obj->setShowInLegend(0);

        $res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0];
        $this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

        $obj->setSize("f7bd60b75b29d79b660a2859395c1a24");

        $res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24"];
        $this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with size");

        $obj->setSkipKeyboardNavigation(1);

        $res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1];
        $this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

        $obj->setSlicedOffset(55);

        $res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55];
        $this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with sliced offset");

        $obj->setStartAngle(95);

        $res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95];
        $this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with start angle");

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates());

        $res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95, "states" => []];
        $this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with states");

        $obj->setStickyTracking(1);

        $res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95, "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

        $obj->setVisible(0);

        $res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0];
        $this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with visible");

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 59, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 30, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 55, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "endAngle" => 20, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 74, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 55, "startAngle" => 95, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with zones");
    }

}
