<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Waterfall;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts tooltip test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Waterfall
 * @version 5.0.14
 */
final class HighchartsTooltipTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsTooltip(true);

        $this->assertEquals(null, $obj1->getDateTimeLabelFormats());
        $this->assertEquals(null, $obj1->getFollowPointer());
        $this->assertEquals(null, $obj1->getFollowTouchMove());
        $this->assertEquals(null, $obj1->getFooterFormat());
        $this->assertEquals(null, $obj1->getHeaderFormat());
        $this->assertEquals(null, $obj1->getHideDelay());
        $this->assertEquals(null, $obj1->getPadding());
        $this->assertEquals(null, $obj1->getPointFormat());
        $this->assertEquals(null, $obj1->getPointFormatter());
        $this->assertEquals(null, $obj1->getSplit());
        $this->assertEquals(null, $obj1->getValueDecimals());
        $this->assertEquals(null, $obj1->getValuePrefix());
        $this->assertEquals(null, $obj1->getValueSuffix());
        $this->assertEquals(null, $obj1->getXDateFormat());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsTooltip(false);

        $this->assertEquals(null, $obj0->getDateTimeLabelFormats());
        $this->assertEquals(false, $obj0->getFollowPointer());
        $this->assertEquals(true, $obj0->getFollowTouchMove());
        $this->assertEquals("false", $obj0->getFooterFormat());
        $this->assertEquals(null, $obj0->getHeaderFormat());
        $this->assertEquals(500, $obj0->getHideDelay());
        $this->assertEquals(8, $obj0->getPadding());
        $this->assertEquals("<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", $obj0->getPointFormat());
        $this->assertEquals(null, $obj0->getPointFormatter());
        $this->assertEquals(false, $obj0->getSplit());
        $this->assertEquals(null, $obj0->getValueDecimals());
        $this->assertEquals(null, $obj0->getValuePrefix());
        $this->assertEquals(null, $obj0->getValueSuffix());
        $this->assertEquals(null, $obj0->getXDateFormat());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsTooltip(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsTooltip(true);

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

        $res1 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFollowPointer(1);

        $res2 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setFollowTouchMove(1);

        $res3 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");

        $res4 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");

        $res5 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setHideDelay(64);

        $res6 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setPadding(94);

        $res7 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");

        $res8 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");

        $res9 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setSplit(1);

        $res10 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 1];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setValueDecimals(1);

        $res11 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 1, "valueDecimals" => 1];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");

        $res12 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 1, "valueDecimals" => 1, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");

        $res13 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 1, "valueDecimals" => 1, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

        $res14 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 1, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 64, "padding" => 94, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 1, "valueDecimals" => 1, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];
        $this->assertEquals($res14, $obj->toArray());
    }

}
