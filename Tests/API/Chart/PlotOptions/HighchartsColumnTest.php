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
 * Highcharts column test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsColumnTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(true);

        $this->assertEquals(null, $obj1->getAllowPointSelect());
        $this->assertEquals(null, $obj1->getAnimation());
        $this->assertEquals(null, $obj1->getAnimationLimit());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderRadius());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getColorByPoint());
        $this->assertEquals(null, $obj1->getColorIndex());
        $this->assertEquals(null, $obj1->getColors());
        $this->assertEquals(null, $obj1->getCrisp());
        $this->assertEquals(null, $obj1->getCropThreshold());
        $this->assertEquals(null, $obj1->getCursor());
        $this->assertEquals(null, $obj1->getDataLabels());
        $this->assertEquals(null, $obj1->getDepth());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEdgeColor());
        $this->assertEquals(null, $obj1->getEdgeWidth());
        $this->assertEquals(null, $obj1->getEnableMouseTracking());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getExposeElementToA11y());
        $this->assertEquals(null, $obj1->getFindNearestPointBy());
        $this->assertEquals(null, $obj1->getGetExtremesFromAll());
        $this->assertEquals(null, $obj1->getGroupPadding());
        $this->assertEquals(null, $obj1->getGroupZPadding());
        $this->assertEquals(null, $obj1->getGrouping());
        $this->assertEquals(null, $obj1->getKeys());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getMaxPointWidth());
        $this->assertEquals(null, $obj1->getMinPointLength());
        $this->assertEquals(null, $obj1->getNegativeColor());
        $this->assertEquals(null, $obj1->getPoint());
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter());
        $this->assertEquals(null, $obj1->getPointInterval());
        $this->assertEquals(null, $obj1->getPointIntervalUnit());
        $this->assertEquals(null, $obj1->getPointPadding());
        $this->assertEquals(null, $obj1->getPointPlacement());
        $this->assertEquals(null, $obj1->getPointRange());
        $this->assertEquals(null, $obj1->getPointStart());
        $this->assertEquals(null, $obj1->getPointWidth());
        $this->assertEquals(null, $obj1->getSelected());
        $this->assertEquals(null, $obj1->getShadow());
        $this->assertEquals(null, $obj1->getShowCheckbox());
        $this->assertEquals(null, $obj1->getShowInLegend());
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj1->getSoftThreshold());
        $this->assertEquals(null, $obj1->getStacking());
        $this->assertEquals(null, $obj1->getStates());
        $this->assertEquals(null, $obj1->getStickyTracking());
        $this->assertEquals(null, $obj1->getThreshold());
        $this->assertEquals(null, $obj1->getTooltip());
        $this->assertEquals(null, $obj1->getTurboThreshold());
        $this->assertEquals(null, $obj1->getVisible());
        $this->assertEquals(null, $obj1->getZoneAxis());
        $this->assertEquals(null, $obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertEquals(null, $obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertEquals(null, $obj0->getColorIndex());
        $this->assertEquals(null, $obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertEquals(50, $obj0->getCropThreshold());
        $this->assertEquals(null, $obj0->getCursor());
        $this->assertEquals(null, $obj0->getDataLabels());
        $this->assertEquals(25, $obj0->getDepth());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(null, $obj0->getEdgeColor());
        $this->assertEquals(1, $obj0->getEdgeWidth());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getExposeElementToA11y());
        $this->assertEquals(null, $obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj0->getGroupPadding());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertEquals(true, $obj0->getGrouping());
        $this->assertEquals(null, $obj0->getKeys());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(null, $obj0->getMaxPointWidth());
        $this->assertEquals(0, $obj0->getMinPointLength());
        $this->assertEquals(null, $obj0->getNegativeColor());
        $this->assertEquals(null, $obj0->getPoint());
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getPointInterval());
        $this->assertEquals(null, $obj0->getPointIntervalUnit());
        $this->assertEquals(0.1, $obj0->getPointPadding());
        $this->assertEquals(null, $obj0->getPointPlacement());
        $this->assertEquals(null, $obj0->getPointRange());
        $this->assertEquals(0, $obj0->getPointStart());
        $this->assertEquals(null, $obj0->getPointWidth());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj0->getSoftThreshold());
        $this->assertEquals(null, $obj0->getStacking());
        $this->assertEquals(null, $obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertEquals(null, $obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 1, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(34);

        $res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(31);

        $res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(52);

        $res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColorByPoint(1);

        $res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorIndex(68);

        $res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setCrisp(1);

        $res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCropThreshold(62);

        $res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setCursor("crosshair");

        $res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsDataLabels());

        $res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setDepth(31);

        $res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEdgeWidth(5);

        $res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsEvents());

        $res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setGroupPadding(89);

        $res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setGroupZPadding(71);

        $res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setGrouping(0);

        $res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setMaxPointWidth(74);

        $res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setMinPointLength(30);

        $res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsPoint());

        $res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setPointInterval(68);

        $res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year"];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPointPadding(41);

        $res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointPlacement("between");

        $res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPointRange(98);

        $res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setPointStart(41);

        $res40 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setPointWidth(13);

        $res41 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setSelected(1);

        $res42 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShadow(1);

        $res43 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res44 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setShowInLegend(1);

        $res45 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res46 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res47 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setStacking("percent");

        $res48 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent"];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsStates());

        $res49 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => []];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setStickyTracking(1);

        $res50 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setThreshold(50);

        $res51 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 50];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res52 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 50, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTurboThreshold(31);

        $res53 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 50, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 31];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setVisible(0);

        $res54 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 50, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 31, "visible" => 0];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res55 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 50, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 31, "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res56 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 34, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 31, "borderWidth" => 52, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 68, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 62, "cursor" => "crosshair", "dataLabels" => [], "depth" => 31, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 5, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 89, "groupZPadding" => 71, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 30, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 68, "pointIntervalUnit" => "year", "pointPadding" => 41, "pointPlacement" => "between", "pointRange" => 98, "pointStart" => 41, "pointWidth" => 13, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 50, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 31, "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res56, $obj->toArray());
    }

}
