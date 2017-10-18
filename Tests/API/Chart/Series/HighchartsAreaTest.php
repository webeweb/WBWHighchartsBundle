<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts area test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsAreaTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(true);

        $this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getConnectEnds(), "The method getConnectEnds() does not return the expected value");
        $this->assertEquals(null, $obj1->getConnectNulls(), "The method getConnectNulls() does not return the expected value");
        $this->assertEquals(null, $obj1->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
        $this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
        $this->assertEquals(null, $obj1->getDashStyle(), "The method getDashStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getData(), "The method getData() does not return the expected value");
        $this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
        $this->assertEquals(null, $obj1->getFillColor(), "The method getFillColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getFillOpacity(), "The method getFillOpacity() does not return the expected value");
        $this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
        $this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
        $this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj1->getIndex(), "The method getIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
        $this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getLineColor(), "The method getLineColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getLinecap(), "The method getLinecap() does not return the expected value");
        $this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(null, $obj1->getMarker(), "The method getMarker() does not return the expected value");
        $this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
        $this->assertEquals(null, $obj1->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getNegativeFillColor(), "The method getNegativeFillColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointInterval(), "The method getPointInterval() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointPlacement(), "The method getPointPlacement() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointStart(), "The method getPointStart() does not return the expected value");
        $this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
        $this->assertEquals(null, $obj1->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
        $this->assertEquals(null, $obj1->getStack(), "The method getStack() does not return the expected value");
        $this->assertEquals(null, $obj1->getStacking(), "The method getStacking() does not return the expected value");
        $this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(null, $obj1->getStep(), "The method getStep() does not return the expected value");
        $this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
        $this->assertEquals(null, $obj1->getThreshold(), "The method getThreshold() does not return the expected value");
        $this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
        $this->assertEquals(null, $obj1->getTrackByArea(), "The method getTrackByArea() does not return the expected value");
        $this->assertEquals(null, $obj1->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
        $this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
        $this->assertEquals(null, $obj1->getXAxis(), "The method getXAxis() does not return the expected value");
        $this->assertEquals(null, $obj1->getYAxis(), "The method getYAxis() does not return the expected value");
        $this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
        $this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
        $this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(true, $obj0->getConnectEnds(), "The method getConnectEnds() does not return the expected value");
        $this->assertEquals(false, $obj0->getConnectNulls(), "The method getConnectNulls() does not return the expected value");
        $this->assertEquals(300, $obj0->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
        $this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
        $this->assertEquals("Solid", $obj0->getDashStyle(), "The method getDashStyle() does not return the expected value");
        $this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
        $this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
        $this->assertEquals(null, $obj0->getFillColor(), "The method getFillColor() does not return the expected value");
        $this->assertEquals(0.75, $obj0->getFillOpacity(), "The method getFillOpacity() does not return the expected value");
        $this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
        $this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
        $this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj0->getIndex(), "The method getIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
        $this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getLineColor(), "The method getLineColor() does not return the expected value");
        $this->assertEquals(2, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
        $this->assertEquals("round", $obj0->getLinecap(), "The method getLinecap() does not return the expected value");
        $this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(null, $obj0->getMarker(), "The method getMarker() does not return the expected value");
        $this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
        $this->assertEquals(null, $obj0->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getNegativeFillColor(), "The method getNegativeFillColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
        $this->assertEquals(1, $obj0->getPointInterval(), "The method getPointInterval() does not return the expected value");
        $this->assertEquals(null, $obj0->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
        $this->assertEquals(null, $obj0->getPointPlacement(), "The method getPointPlacement() does not return the expected value");
        $this->assertEquals(0, $obj0->getPointStart(), "The method getPointStart() does not return the expected value");
        $this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(false, $obj0->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
        $this->assertEquals(true, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
        $this->assertEquals(false, $obj0->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
        $this->assertEquals(null, $obj0->getStack(), "The method getStack() does not return the expected value");
        $this->assertEquals(null, $obj0->getStacking(), "The method getStacking() does not return the expected value");
        $this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals("false", $obj0->getStep(), "The method getStep() does not return the expected value");
        $this->assertEquals(true, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
        $this->assertEquals(0, $obj0->getThreshold(), "The method getThreshold() does not return the expected value");
        $this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
        $this->assertEquals(false, $obj0->getTrackByArea(), "The method getTrackByArea() does not return the expected value");
        $this->assertEquals(1000, $obj0->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
        $this->assertEquals(null, $obj0->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
        $this->assertEquals("0", $obj0->getXAxis(), "The method getXAxis() does not return the expected value");
        $this->assertEquals("0", $obj0->getYAxis(), "The method getYAxis() does not return the expected value");
        $this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
        $this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
        $this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $obj->newDataLabels();
        $obj->newEvents();
        $obj->newMarker();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["dataLabels" => [], "events" => [], "marker" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
    }

    /**
     * Tests the newMarker() method.
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsMarker::class, $res, "The method newMarker() does not return the expected object");
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 1, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

        $obj->setAnimationLimit(91);

        $res3 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setColorIndex(90);

        $res6 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with color index");

        $obj->setConnectEnds(0);

        $res7 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with connect ends");

        $obj->setConnectNulls(0);

        $res8 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with connect nulls");

        $obj->setCropThreshold(66);

        $res9 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with crop threshold");

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

        $obj->setDashStyle("LongDashDotDot");

        $res11 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with dash style");

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res12 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with data");

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsDataLabels());

        $res13 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res14 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with description");

        $obj->setEnableMouseTracking(0);

        $res15 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsEvents());

        $res16 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setExposeElementToA11y(1);

        $res17 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res18 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

        $obj->setFillOpacity(46);

        $res19 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46];
        $this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with fill opacity");

        $obj->setFindNearestPointBy("xy");

        $res20 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy"];
        $this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

        $obj->setGetExtremesFromAll(1);

        $res21 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res22 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with id");

        $obj->setIndex(94);

        $res23 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94];
        $this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with index");

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res24 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with keys");

        $obj->setLegendIndex(25);

        $res25 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25];
        $this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res26 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with line color");

        $obj->setLineWidth(91);

        $res27 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91];
        $this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with line width");

        $obj->setLinecap("square");

        $res28 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square"];
        $this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with linecap");

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res29 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsMarker());

        $res30 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
        $this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with marker");

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res31 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with name");

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res32 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

        $obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");

        $res33 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a"];
        $this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with negative fill color");

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsPoint());

        $res34 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => []];
        $this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with point");

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res35 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

        $obj->setPointInterval(64);

        $res36 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64];
        $this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with point interval");

        $obj->setPointIntervalUnit("year");

        $res37 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year"];
        $this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

        $obj->setPointPlacement("between");

        $res38 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between"];
        $this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

        $obj->setPointStart(85);

        $res39 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85];
        $this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with point start");

        $obj->setSelected(0);

        $res40 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0];
        $this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with selected");

        $obj->setShadow(0);

        $res41 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0];
        $this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

        $obj->setShowCheckbox(0);

        $res42 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0];
        $this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

        $obj->setShowInLegend(1);

        $res43 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1];
        $this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

        $obj->setSkipKeyboardNavigation(1);

        $res44 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

        $obj->setSoftThreshold(1);

        $res45 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1];
        $this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with soft threshold");

        $obj->setStack("fac2a47adace059aff113283a03f6760");

        $res46 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760"];
        $this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with stack");

        $obj->setStacking("percent");

        $res47 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent"];
        $this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with stacking");

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates());

        $res48 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => []];
        $this->assertEquals($res48, $obj->toArray(), "The method toArray() does not return the expected array with states");

        $obj->setStep("right");

        $res49 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right"];
        $this->assertEquals($res49, $obj->toArray(), "The method toArray() does not return the expected array with step");

        $obj->setStickyTracking(1);

        $res50 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1];
        $this->assertEquals($res50, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

        $obj->setThreshold(93);

        $res51 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93];
        $this->assertEquals($res51, $obj->toArray(), "The method toArray() does not return the expected array with threshold");

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res52 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res52, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

        $obj->setTrackByArea(0);

        $res53 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0];
        $this->assertEquals($res53, $obj->toArray(), "The method toArray() does not return the expected array with track by area");

        $obj->setTurboThreshold(56);

        $res54 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56];
        $this->assertEquals($res54, $obj->toArray(), "The method toArray() does not return the expected array with turbo threshold");

        $obj->setType("waterfall");

        $res55 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall"];
        $this->assertEquals($res55, $obj->toArray(), "The method toArray() does not return the expected array with type");

        $obj->setVisible(0);

        $res56 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res56, $obj->toArray(), "The method toArray() does not return the expected array with visible");

        $obj->setXAxis(1);

        $res57 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall", "visible" => 0, "xAxis" => 1];
        $this->assertEquals($res57, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

        $obj->setYAxis(59);

        $res58 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall", "visible" => 0, "xAxis" => 1, "yAxis" => 59];
        $this->assertEquals($res58, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

        $obj->setZIndex(13);

        $res59 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall", "visible" => 0, "xAxis" => 1, "yAxis" => 59, "zIndex" => 13];
        $this->assertEquals($res59, $obj->toArray(), "The method toArray() does not return the expected array with z index");

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res60 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall", "visible" => 0, "xAxis" => 1, "yAxis" => 59, "zIndex" => 13, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res60, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res61 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 91, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "connectEnds" => 0, "connectNulls" => 0, "cropThreshold" => 66, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 46, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 94, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 64, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 85, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 56, "type" => "waterfall", "visible" => 0, "xAxis" => 1, "yAxis" => 59, "zIndex" => 13, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res61, $obj->toArray(), "The method toArray() does not return the expected array with zones");
    }

}
