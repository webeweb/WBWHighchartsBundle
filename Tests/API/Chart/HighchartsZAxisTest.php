<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts z axis test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsZAxisTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(true);

        $this->assertNull($obj1->getAllowDecimals());
        $this->assertNull($obj1->getAlternateGridColor());
        $this->assertNull($obj1->getCategories());
        $this->assertNull($obj1->getCeiling());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getCrosshair());
        $this->assertNull($obj1->getDateTimeLabelFormats());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEndOnTick());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getFloor());
        $this->assertNull($obj1->getGridLineColor());
        $this->assertNull($obj1->getGridLineDashStyle());
        $this->assertNull($obj1->getGridLineWidth());
        $this->assertNull($obj1->getGridZIndex());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getLabels());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMax());
        $this->assertNull($obj1->getMaxPadding());
        $this->assertNull($obj1->getMaxZoom());
        $this->assertNull($obj1->getMin());
        $this->assertNull($obj1->getMinPadding());
        $this->assertNull($obj1->getMinRange());
        $this->assertNull($obj1->getMinTickInterval());
        $this->assertNull($obj1->getMinorGridLineColor());
        $this->assertNull($obj1->getMinorGridLineDashStyle());
        $this->assertNull($obj1->getMinorGridLineWidth());
        $this->assertNull($obj1->getMinorTickColor());
        $this->assertNull($obj1->getMinorTickInterval());
        $this->assertNull($obj1->getMinorTickLength());
        $this->assertNull($obj1->getMinorTickPosition());
        $this->assertNull($obj1->getMinorTickWidth());
        $this->assertNull($obj1->getOffset());
        $this->assertNull($obj1->getOpposite());
        $this->assertNull($obj1->getPlotBands());
        $this->assertNull($obj1->getPlotLines());
        $this->assertNull($obj1->getReversed());
        $this->assertNull($obj1->getShowEmpty());
        $this->assertNull($obj1->getShowFirstLabel());
        $this->assertNull($obj1->getShowLastLabel());
        $this->assertNull($obj1->getSoftMax());
        $this->assertNull($obj1->getSoftMin());
        $this->assertNull($obj1->getStartOfWeek());
        $this->assertNull($obj1->getStartOnTick());
        $this->assertNull($obj1->getTickAmount());
        $this->assertNull($obj1->getTickColor());
        $this->assertNull($obj1->getTickInterval());
        $this->assertNull($obj1->getTickLength());
        $this->assertNull($obj1->getTickPixelInterval());
        $this->assertNull($obj1->getTickPosition());
        $this->assertNull($obj1->getTickPositioner());
        $this->assertNull($obj1->getTickPositions());
        $this->assertNull($obj1->getTickWidth());
        $this->assertNull($obj1->getTickmarkPlacement());
        $this->assertNull($obj1->getTitle());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getUniqueNames());
        $this->assertNull($obj1->getUnits());
        $this->assertNull($obj1->getVisible());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $this->assertEquals(true, $obj0->getAllowDecimals());
        $this->assertNull($obj0->getAlternateGridColor());
        $this->assertNull($obj0->getCategories());
        $this->assertNull($obj0->getCeiling());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getCrosshair());
        $this->assertNull($obj0->getDateTimeLabelFormats());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(false, $obj0->getEndOnTick());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getFloor());
        $this->assertEquals("#e6e6e6", $obj0->getGridLineColor());
        $this->assertEquals("Solid", $obj0->getGridLineDashStyle());
        $this->assertEquals(0, $obj0->getGridLineWidth());
        $this->assertEquals(1, $obj0->getGridZIndex());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getLabels());
        $this->assertEquals("#ccd6eb", $obj0->getLineColor());
        $this->assertEquals(1, $obj0->getLineWidth());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMax());
        $this->assertEquals(0.01, $obj0->getMaxPadding());
        $this->assertNull($obj0->getMaxZoom());
        $this->assertNull($obj0->getMin());
        $this->assertEquals(0.01, $obj0->getMinPadding());
        $this->assertNull($obj0->getMinRange());
        $this->assertNull($obj0->getMinTickInterval());
        $this->assertEquals("#f2f2f2", $obj0->getMinorGridLineColor());
        $this->assertEquals("Solid", $obj0->getMinorGridLineDashStyle());
        $this->assertEquals(1, $obj0->getMinorGridLineWidth());
        $this->assertEquals("#999999", $obj0->getMinorTickColor());
        $this->assertNull($obj0->getMinorTickInterval());
        $this->assertEquals(2, $obj0->getMinorTickLength());
        $this->assertEquals("outside", $obj0->getMinorTickPosition());
        $this->assertEquals(0, $obj0->getMinorTickWidth());
        $this->assertEquals(0, $obj0->getOffset());
        $this->assertEquals(false, $obj0->getOpposite());
        $this->assertNull($obj0->getPlotBands());
        $this->assertNull($obj0->getPlotLines());
        $this->assertEquals(false, $obj0->getReversed());
        $this->assertEquals(true, $obj0->getShowEmpty());
        $this->assertEquals(true, $obj0->getShowFirstLabel());
        $this->assertEquals(true, $obj0->getShowLastLabel());
        $this->assertNull($obj0->getSoftMax());
        $this->assertNull($obj0->getSoftMin());
        $this->assertEquals(1, $obj0->getStartOfWeek());
        $this->assertEquals(false, $obj0->getStartOnTick());
        $this->assertNull($obj0->getTickAmount());
        $this->assertEquals("#ccd6eb", $obj0->getTickColor());
        $this->assertNull($obj0->getTickInterval());
        $this->assertEquals(10, $obj0->getTickLength());
        $this->assertNull($obj0->getTickPixelInterval());
        $this->assertEquals("outside", $obj0->getTickPosition());
        $this->assertNull($obj0->getTickPositioner());
        $this->assertNull($obj0->getTickPositions());
        $this->assertEquals(1, $obj0->getTickWidth());
        $this->assertNull($obj0->getTickmarkPlacement());
        $this->assertNull($obj0->getTitle());
        $this->assertEquals("linear", $obj0->getType());
        $this->assertEquals(true, $obj0->getUniqueNames());
        $this->assertNull($obj0->getUnits());
        $this->assertEquals(true, $obj0->getVisible());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $obj->newCrosshair();
        $obj->newEvents();
        $obj->newLabels();
        $obj->newTitle();

        $obj->clear();

        $res = ["crosshair" => [], "events" => [], "labels" => [], "title" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newCrosshair() method.
     *
     * @return void.
     */
    public function testNewCrosshair() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newCrosshair();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newLabels() method.
     *
     * @return void.
     */
    public function testNewLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels::class, $res);
    }

    /**
     * Tests the newTitle() method.
     *
     * @return void.
     */
    public function testNewTitle() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(true);

        $obj->setAllowDecimals(0);

        $res1 = ["allowDecimals" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");

        $res2 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);

        $res3 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setCeiling(79);

        $res4 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res5 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setCrosshair(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair());

        $res6 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => []];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

        $res7 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res8 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setEndOnTick(0);

        $res9 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents());

        $res10 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => []];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setFloor(65);

        $res11 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");

        $res12 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setGridLineDashStyle("LongDashDotDot");

        $res13 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setGridLineWidth(17);

        $res14 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setGridZIndex(93);

        $res15 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res16 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels());

        $res17 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => []];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res18 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setLineWidth(6);

        $res19 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setLinkedTo(36);

        $res20 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setMax(86);

        $res21 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setMaxPadding(76);

        $res22 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setMaxZoom(84);

        $res23 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setMin(15);

        $res24 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setMinPadding(87);

        $res25 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setMinRange(58);

        $res26 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setMinTickInterval(13);

        $res27 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");

        $res28 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setMinorGridLineDashStyle("LongDashDotDot");

        $res29 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setMinorGridLineWidth(42);

        $res30 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");

        $res31 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");

        $res32 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setMinorTickLength(21);

        $res33 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setMinorTickPosition("outside");

        $res34 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setMinorTickWidth(47);

        $res35 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setOffset(28);

        $res36 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setOpposite(0);

        $res37 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);

        $res38 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);

        $res39 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"]];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setReversed(0);

        $res40 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setShowEmpty(1);

        $res41 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setShowFirstLabel(0);

        $res42 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShowLastLabel(1);

        $res43 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setSoftMax(51);

        $res44 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setSoftMin(76);

        $res45 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setStartOfWeek(38);

        $res46 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setStartOnTick(0);

        $res47 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setTickAmount(11);

        $res48 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setTickColor("3569a8266538a625569574b2c96e237c");

        $res49 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c"];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setTickInterval(97);

        $res50 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setTickLength(93);

        $res51 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setTickPixelInterval(39);

        $res52 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTickPosition("outside");

        $res53 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside"];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");

        $res54 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd"];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);

        $res55 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setTickWidth(75);

        $res56 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setTickmarkPlacement("between");

        $res57 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75, "tickmarkPlacement" => "between"];
        $this->assertEquals($res57, $obj->toArray());

        $obj->setTitle(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle());

        $res58 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75, "tickmarkPlacement" => "between", "title" => []];
        $this->assertEquals($res58, $obj->toArray());

        $obj->setType("category");

        $res59 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75, "tickmarkPlacement" => "between", "title" => [], "type" => "category"];
        $this->assertEquals($res59, $obj->toArray());

        $obj->setUniqueNames(1);

        $res60 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1];
        $this->assertEquals($res60, $obj->toArray());

        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);

        $res61 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]];
        $this->assertEquals($res61, $obj->toArray());

        $obj->setVisible(0);

        $res62 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 79, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 0, "events" => [], "floor" => 65, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 17, "gridZIndex" => 93, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 6, "linkedTo" => 36, "max" => 86, "maxPadding" => 76, "maxZoom" => 84, "min" => 15, "minPadding" => 87, "minRange" => 58, "minTickInterval" => 13, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 42, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 21, "minorTickPosition" => "outside", "minorTickWidth" => 47, "offset" => 28, "opposite" => 0, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 51, "softMin" => 76, "startOfWeek" => 38, "startOnTick" => 0, "tickAmount" => 11, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 97, "tickLength" => 93, "tickPixelInterval" => 39, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 75, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], "visible" => 0];
        $this->assertEquals($res62, $obj->toArray());
    }

}
