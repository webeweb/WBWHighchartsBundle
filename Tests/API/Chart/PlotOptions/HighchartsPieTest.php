<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts pie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsPieTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $this->assertEquals(null, $obj1->getAllowPointSelect());
        $this->assertEquals(null, $obj1->getAnimation());
        $this->assertEquals(null, $obj1->getAnimationLimit());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getCenter());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColorIndex());
        $this->assertEquals(null, $obj1->getColors());
        $this->assertEquals(null, $obj1->getCursor());
        $this->assertEquals(null, $obj1->getDataLabels());
        $this->assertEquals(null, $obj1->getDepth());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEnableMouseTracking());
        $this->assertEquals(null, $obj1->getEndAngle());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getExposeElementToA11y());
        $this->assertEquals(null, $obj1->getFindNearestPointBy());
        $this->assertEquals(null, $obj1->getGetExtremesFromAll());
        $this->assertEquals(null, $obj1->getIgnoreHiddenPoint());
        $this->assertEquals(null, $obj1->getInnerSize());
        $this->assertEquals(null, $obj1->getKeys());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getMinSize());
        $this->assertEquals(null, $obj1->getPoint());
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter());
        $this->assertEquals(null, $obj1->getSelected());
        $this->assertEquals(null, $obj1->getShadow());
        $this->assertEquals(null, $obj1->getShowInLegend());
        $this->assertEquals(null, $obj1->getSize());
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj1->getSlicedOffset());
        $this->assertEquals(null, $obj1->getStartAngle());
        $this->assertEquals(null, $obj1->getStates());
        $this->assertEquals(null, $obj1->getStickyTracking());
        $this->assertEquals(null, $obj1->getTooltip());
        $this->assertEquals(null, $obj1->getVisible());
        $this->assertEquals(null, $obj1->getZoneAxis());
        $this->assertEquals(null, $obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertEquals(null, $obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertEquals([null, null], $obj0->getCenter());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColorIndex());
        $this->assertEquals(null, $obj0->getColors());
        $this->assertEquals(null, $obj0->getCursor());
        $this->assertEquals(null, $obj0->getDataLabels());
        $this->assertEquals(0, $obj0->getDepth());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertEquals(null, $obj0->getEndAngle());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getExposeElementToA11y());
        $this->assertEquals(null, $obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(true, $obj0->getIgnoreHiddenPoint());
        $this->assertEquals("0", $obj0->getInnerSize());
        $this->assertEquals(null, $obj0->getKeys());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(80, $obj0->getMinSize());
        $this->assertEquals(null, $obj0->getPoint());
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowInLegend());
        $this->assertEquals(null, $obj0->getSize());
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
        $this->assertEquals(10, $obj0->getSlicedOffset());
        $this->assertEquals(0, $obj0->getStartAngle());
        $this->assertEquals(null, $obj0->getStates());
        $this->assertEquals(false, $obj0->getStickyTracking());
        $this->assertEquals(null, $obj0->getTooltip());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertEquals(null, $obj0->getZones());
    }

    /**
     * Tests the clear() method.
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
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 0, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(40);

        $res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderWidth(98);

        $res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

        $res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColorIndex(25);

        $res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDepth(20);

        $res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEndAngle(94);

        $res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents());

        $res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setIgnoreHiddenPoint(1);

        $res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setInnerSize("a6d1a6164e85630d2ca35170621de672");

        $res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setMinSize(31);

        $res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint());

        $res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => []];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setSelected(1);

        $res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setShadow(0);

        $res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setShowInLegend(1);

        $res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setSize("f7bd60b75b29d79b660a2859395c1a24");

        $res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24"];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setSlicedOffset(23);

        $res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setStartAngle(63);

        $res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates());

        $res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63, "states" => []];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setStickyTracking(0);

        $res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63, "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setVisible(1);

        $res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 40, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 98, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 25, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 20, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 94, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "ignoreHiddenPoint" => 1, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 31, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "startAngle" => 63, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res39, $obj->toArray());
    }

}
