<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(true);

        $this->assertEquals(null, $obj1->getAllowDecimals(), "The method getAllowDecimals() does not return the expected value");
        $this->assertEquals(null, $obj1->getAlternateGridColor(), "The method getAlternateGridColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBreaks(), "The method getBreaks() does not return the expected value");
        $this->assertEquals(null, $obj1->getCategories(), "The method getCategories() does not return the expected value");
        $this->assertEquals(null, $obj1->getCeiling(), "The method getCeiling() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getCrosshair(), "The method getCrosshair() does not return the expected value");
        $this->assertEquals(null, $obj1->getDateTimeLabelFormats(), "The method getDateTimeLabelFormats() does not return the expected value");
        $this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(null, $obj1->getEndOnTick(), "The method getEndOnTick() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getFloor(), "The method getFloor() does not return the expected value");
        $this->assertEquals(null, $obj1->getGridLineColor(), "The method getGridLineColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getGridLineDashStyle(), "The method getGridLineDashStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getGridLineWidth(), "The method getGridLineWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getGridZIndex(), "The method getGridZIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj1->getLabels(), "The method getLabels() does not return the expected value");
        $this->assertEquals(null, $obj1->getLineColor(), "The method getLineColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(null, $obj1->getMax(), "The method getMax() does not return the expected value");
        $this->assertEquals(null, $obj1->getMaxPadding(), "The method getMaxPadding() does not return the expected value");
        $this->assertEquals(null, $obj1->getMaxZoom(), "The method getMaxZoom() does not return the expected value");
        $this->assertEquals(null, $obj1->getMin(), "The method getMin() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinPadding(), "The method getMinPadding() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinRange(), "The method getMinRange() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinTickInterval(), "The method getMinTickInterval() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorGridLineColor(), "The method getMinorGridLineColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorGridLineDashStyle(), "The method getMinorGridLineDashStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorGridLineWidth(), "The method getMinorGridLineWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorTickColor(), "The method getMinorTickColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorTickInterval(), "The method getMinorTickInterval() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorTickLength(), "The method getMinorTickLength() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorTickPosition(), "The method getMinorTickPosition() does not return the expected value");
        $this->assertEquals(null, $obj1->getMinorTickWidth(), "The method getMinorTickWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getOffset(), "The method getOffset() does not return the expected value");
        $this->assertEquals(null, $obj1->getOpposite(), "The method getOpposite() does not return the expected value");
        $this->assertEquals(null, $obj1->getPlotBands(), "The method getPlotBands() does not return the expected value");
        $this->assertEquals(null, $obj1->getPlotLines(), "The method getPlotLines() does not return the expected value");
        $this->assertEquals(null, $obj1->getReversed(), "The method getReversed() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowEmpty(), "The method getShowEmpty() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowFirstLabel(), "The method getShowFirstLabel() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowLastLabel(), "The method getShowLastLabel() does not return the expected value");
        $this->assertEquals(null, $obj1->getSoftMax(), "The method getSoftMax() does not return the expected value");
        $this->assertEquals(null, $obj1->getSoftMin(), "The method getSoftMin() does not return the expected value");
        $this->assertEquals(null, $obj1->getStartOfWeek(), "The method getStartOfWeek() does not return the expected value");
        $this->assertEquals(null, $obj1->getStartOnTick(), "The method getStartOnTick() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickAmount(), "The method getTickAmount() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickColor(), "The method getTickColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickInterval(), "The method getTickInterval() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickLength(), "The method getTickLength() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickPixelInterval(), "The method getTickPixelInterval() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickPosition(), "The method getTickPosition() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickPositioner(), "The method getTickPositioner() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickPositions(), "The method getTickPositions() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickWidth(), "The method getTickWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getTickmarkPlacement(), "The method getTickmarkPlacement() does not return the expected value");
        $this->assertEquals(null, $obj1->getTitle(), "The method getTitle() does not return the expected value");
        $this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(null, $obj1->getUniqueNames(), "The method getUniqueNames() does not return the expected value");
        $this->assertEquals(null, $obj1->getUnits(), "The method getUnits() does not return the expected value");
        $this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

        $this->assertEquals(true, $obj0->getAllowDecimals(), "The method getAllowDecimals() does not return the expected value");
        $this->assertEquals(null, $obj0->getAlternateGridColor(), "The method getAlternateGridColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getBreaks(), "The method getBreaks() does not return the expected value");
        $this->assertEquals(null, $obj0->getCategories(), "The method getCategories() does not return the expected value");
        $this->assertEquals(null, $obj0->getCeiling(), "The method getCeiling() does not return the expected value");
        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getCrosshair(), "The method getCrosshair() does not return the expected value");
        $this->assertEquals(null, $obj0->getDateTimeLabelFormats(), "The method getDateTimeLabelFormats() does not return the expected value");
        $this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(false, $obj0->getEndOnTick(), "The method getEndOnTick() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getFloor(), "The method getFloor() does not return the expected value");
        $this->assertEquals("#e6e6e6", $obj0->getGridLineColor(), "The method getGridLineColor() does not return the expected value");
        $this->assertEquals("Solid", $obj0->getGridLineDashStyle(), "The method getGridLineDashStyle() does not return the expected value");
        $this->assertEquals(0, $obj0->getGridLineWidth(), "The method getGridLineWidth() does not return the expected value");
        $this->assertEquals(1, $obj0->getGridZIndex(), "The method getGridZIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj0->getLabels(), "The method getLabels() does not return the expected value");
        $this->assertEquals("#ccd6eb", $obj0->getLineColor(), "The method getLineColor() does not return the expected value");
        $this->assertEquals(1, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
        $this->assertEquals(null, $obj0->getMax(), "The method getMax() does not return the expected value");
        $this->assertEquals(0.01, $obj0->getMaxPadding(), "The method getMaxPadding() does not return the expected value");
        $this->assertEquals(null, $obj0->getMaxZoom(), "The method getMaxZoom() does not return the expected value");
        $this->assertEquals(null, $obj0->getMin(), "The method getMin() does not return the expected value");
        $this->assertEquals(0.01, $obj0->getMinPadding(), "The method getMinPadding() does not return the expected value");
        $this->assertEquals(null, $obj0->getMinRange(), "The method getMinRange() does not return the expected value");
        $this->assertEquals(null, $obj0->getMinTickInterval(), "The method getMinTickInterval() does not return the expected value");
        $this->assertEquals("#f2f2f2", $obj0->getMinorGridLineColor(), "The method getMinorGridLineColor() does not return the expected value");
        $this->assertEquals("Solid", $obj0->getMinorGridLineDashStyle(), "The method getMinorGridLineDashStyle() does not return the expected value");
        $this->assertEquals(1, $obj0->getMinorGridLineWidth(), "The method getMinorGridLineWidth() does not return the expected value");
        $this->assertEquals("#999999", $obj0->getMinorTickColor(), "The method getMinorTickColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getMinorTickInterval(), "The method getMinorTickInterval() does not return the expected value");
        $this->assertEquals(2, $obj0->getMinorTickLength(), "The method getMinorTickLength() does not return the expected value");
        $this->assertEquals("outside", $obj0->getMinorTickPosition(), "The method getMinorTickPosition() does not return the expected value");
        $this->assertEquals(0, $obj0->getMinorTickWidth(), "The method getMinorTickWidth() does not return the expected value");
        $this->assertEquals(0, $obj0->getOffset(), "The method getOffset() does not return the expected value");
        $this->assertEquals(false, $obj0->getOpposite(), "The method getOpposite() does not return the expected value");
        $this->assertEquals(null, $obj0->getPlotBands(), "The method getPlotBands() does not return the expected value");
        $this->assertEquals(null, $obj0->getPlotLines(), "The method getPlotLines() does not return the expected value");
        $this->assertEquals(false, $obj0->getReversed(), "The method getReversed() does not return the expected value");
        $this->assertEquals(true, $obj0->getShowEmpty(), "The method getShowEmpty() does not return the expected value");
        $this->assertEquals(true, $obj0->getShowFirstLabel(), "The method getShowFirstLabel() does not return the expected value");
        $this->assertEquals(true, $obj0->getShowLastLabel(), "The method getShowLastLabel() does not return the expected value");
        $this->assertEquals(null, $obj0->getSoftMax(), "The method getSoftMax() does not return the expected value");
        $this->assertEquals(null, $obj0->getSoftMin(), "The method getSoftMin() does not return the expected value");
        $this->assertEquals(1, $obj0->getStartOfWeek(), "The method getStartOfWeek() does not return the expected value");
        $this->assertEquals(false, $obj0->getStartOnTick(), "The method getStartOnTick() does not return the expected value");
        $this->assertEquals(null, $obj0->getTickAmount(), "The method getTickAmount() does not return the expected value");
        $this->assertEquals("#ccd6eb", $obj0->getTickColor(), "The method getTickColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getTickInterval(), "The method getTickInterval() does not return the expected value");
        $this->assertEquals(10, $obj0->getTickLength(), "The method getTickLength() does not return the expected value");
        $this->assertEquals(null, $obj0->getTickPixelInterval(), "The method getTickPixelInterval() does not return the expected value");
        $this->assertEquals("outside", $obj0->getTickPosition(), "The method getTickPosition() does not return the expected value");
        $this->assertEquals(null, $obj0->getTickPositioner(), "The method getTickPositioner() does not return the expected value");
        $this->assertEquals(null, $obj0->getTickPositions(), "The method getTickPositions() does not return the expected value");
        $this->assertEquals(1, $obj0->getTickWidth(), "The method getTickWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getTickmarkPlacement(), "The method getTickmarkPlacement() does not return the expected value");
        $this->assertEquals(null, $obj0->getTitle(), "The method getTitle() does not return the expected value");
        $this->assertEquals("linear", $obj0->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(true, $obj0->getUniqueNames(), "The method getUniqueNames() does not return the expected value");
        $this->assertEquals(null, $obj0->getUnits(), "The method getUnits() does not return the expected value");
        $this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

        $obj->newCrosshair();
        $obj->newEvents();
        $obj->newLabels();
        $obj->newTitle();

        $obj->clear();

        $res = ["crosshair" => [], "events" => [], "labels" => [], "title" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newCrosshair() method.
     *
     * @return void.
     */
    public function testNewCrosshair() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

        $res = $obj->newCrosshair();
        $this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsCrosshair::class, $res, "The method newCrosshair() does not return the expected object");
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
    }

    /**
     * Tests the newLabels() method.
     *
     * @return void.
     */
    public function testNewLabels() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsLabels::class, $res, "The method newLabels() does not return the expected object");
    }

    /**
     * Tests the newTitle() method.
     *
     * @return void.
     */
    public function testNewTitle() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(false);

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle::class, $res, "The method newTitle() does not return the expected object");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsXAxis(true);

        $obj->setAllowDecimals(1);

        $res1 = ["allowDecimals" => 1];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow decimals");

        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");

        $res2 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with alternate grid color");

        $obj->setBreaks(["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"]);

        $res3 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with breaks");

        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);

        $res4 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with categories");

        $obj->setCeiling(46);

        $res5 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with ceiling");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res6 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setCrosshair(new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsCrosshair());

        $res7 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => []];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with crosshair");

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

        $res8 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with date time label formats");

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res9 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with description");

        $obj->setEndOnTick(1);

        $res10 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with end on tick");

        $obj->setEvents(new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsEvents());

        $res11 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => []];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setFloor(48);

        $res12 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with floor");

        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");

        $res13 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870"];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with grid line color");

        $obj->setGridLineDashStyle("LongDashDotDot");

        $res14 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with grid line dash style");

        $obj->setGridLineWidth(89);

        $res15 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with grid line width");

        $obj->setGridZIndex(58);

        $res16 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with grid z index");

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res17 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with id");

        $obj->setLabels(new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsLabels());

        $res18 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => []];
        $this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with labels");

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res19 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with line color");

        $obj->setLineWidth(84);

        $res20 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84];
        $this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with line width");

        $obj->setLinkedTo(60);

        $res21 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60];
        $this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

        $obj->setMax(55);

        $res22 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55];
        $this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with max");

        $obj->setMaxPadding(24);

        $res23 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24];
        $this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with max padding");

        $obj->setMaxZoom(11);

        $res24 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11];
        $this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with max zoom");

        $obj->setMin(31);

        $res25 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31];
        $this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with min");

        $obj->setMinPadding(74);

        $res26 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74];
        $this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with min padding");

        $obj->setMinRange(38);

        $res27 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38];
        $this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with min range");

        $obj->setMinTickInterval(21);

        $res28 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21];
        $this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with min tick interval");

        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");

        $res29 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60"];
        $this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with minor grid line color");

        $obj->setMinorGridLineDashStyle("LongDashDotDot");

        $res30 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with minor grid line dash style");

        $obj->setMinorGridLineWidth(66);

        $res31 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66];
        $this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with minor grid line width");

        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");

        $res32 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5"];
        $this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with minor tick color");

        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");

        $res33 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d"];
        $this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with minor tick interval");

        $obj->setMinorTickLength(62);

        $res34 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62];
        $this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with minor tick length");

        $obj->setMinorTickPosition("outside");

        $res35 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside"];
        $this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with minor tick position");

        $obj->setMinorTickWidth(44);

        $res36 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44];
        $this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with minor tick width");

        $obj->setOffset(25);

        $res37 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25];
        $this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with offset");

        $obj->setOpposite(0);

        $res38 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0];
        $this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with opposite");

        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);

        $res39 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]];
        $this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with plot bands");

        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);

        $res40 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"]];
        $this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with plot lines");

        $obj->setReversed(0);

        $res41 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0];
        $this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with reversed");

        $obj->setShowEmpty(1);

        $res42 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1];
        $this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with show empty");

        $obj->setShowFirstLabel(0);

        $res43 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0];
        $this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with show first label");

        $obj->setShowLastLabel(1);

        $res44 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1];
        $this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with show last label");

        $obj->setSoftMax(14);

        $res45 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14];
        $this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with soft max");

        $obj->setSoftMin(94);

        $res46 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94];
        $this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with soft min");

        $obj->setStartOfWeek(1);

        $res47 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1];
        $this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with start of week");

        $obj->setStartOnTick(1);

        $res48 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1];
        $this->assertEquals($res48, $obj->toArray(), "The method toArray() does not return the expected array with start on tick");

        $obj->setTickAmount(23);

        $res49 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23];
        $this->assertEquals($res49, $obj->toArray(), "The method toArray() does not return the expected array with tick amount");

        $obj->setTickColor("3569a8266538a625569574b2c96e237c");

        $res50 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c"];
        $this->assertEquals($res50, $obj->toArray(), "The method toArray() does not return the expected array with tick color");

        $obj->setTickInterval(34);

        $res51 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34];
        $this->assertEquals($res51, $obj->toArray(), "The method toArray() does not return the expected array with tick interval");

        $obj->setTickLength(61);

        $res52 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61];
        $this->assertEquals($res52, $obj->toArray(), "The method toArray() does not return the expected array with tick length");

        $obj->setTickPixelInterval(94);

        $res53 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94];
        $this->assertEquals($res53, $obj->toArray(), "The method toArray() does not return the expected array with tick pixel interval");

        $obj->setTickPosition("outside");

        $res54 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside"];
        $this->assertEquals($res54, $obj->toArray(), "The method toArray() does not return the expected array with tick position");

        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");

        $res55 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd"];
        $this->assertEquals($res55, $obj->toArray(), "The method toArray() does not return the expected array with tick positioner");

        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);

        $res56 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]];
        $this->assertEquals($res56, $obj->toArray(), "The method toArray() does not return the expected array with tick positions");

        $obj->setTickWidth(81);

        $res57 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81];
        $this->assertEquals($res57, $obj->toArray(), "The method toArray() does not return the expected array with tick width");

        $obj->setTickmarkPlacement("between");

        $res58 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81, "tickmarkPlacement" => "between"];
        $this->assertEquals($res58, $obj->toArray(), "The method toArray() does not return the expected array with tickmark placement");

        $obj->setTitle(new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle());

        $res59 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81, "tickmarkPlacement" => "between", "title" => []];
        $this->assertEquals($res59, $obj->toArray(), "The method toArray() does not return the expected array with title");

        $obj->setType("category");

        $res60 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81, "tickmarkPlacement" => "between", "title" => [], "type" => "category"];
        $this->assertEquals($res60, $obj->toArray(), "The method toArray() does not return the expected array with type");

        $obj->setUniqueNames(1);

        $res61 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1];
        $this->assertEquals($res61, $obj->toArray(), "The method toArray() does not return the expected array with unique names");

        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);

        $res62 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]];
        $this->assertEquals($res62, $obj->toArray(), "The method toArray() does not return the expected array with units");

        $obj->setVisible(0);

        $res63 = ["allowDecimals" => 1, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "breaks" => ["breaks" => "dcf8474d3027660de5c36ab1cfd6a9e6"], "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 46, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 48, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 89, "gridZIndex" => 58, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 84, "linkedTo" => 60, "max" => 55, "maxPadding" => 24, "maxZoom" => 11, "min" => 31, "minPadding" => 74, "minRange" => 38, "minTickInterval" => 21, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 66, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 62, "minorTickPosition" => "outside", "minorTickWidth" => 44, "offset" => 25, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 14, "softMin" => 94, "startOfWeek" => 1, "startOnTick" => 1, "tickAmount" => 23, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 34, "tickLength" => 61, "tickPixelInterval" => 94, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 81, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], "visible" => 0];
        $this->assertEquals($res63, $obj->toArray(), "The method toArray() does not return the expected array with visible");
    }

}
