<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\XAxis\PlotLines;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts label test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\XAxis\PlotLines
 * @version 5.0.14
 */
final class HighchartsLabelTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotLines\HighchartsLabel(true);

        $this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getRotation(), "The method getRotation() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getText(), "The method getText() does not return the expected value");
        $this->assertEquals(null, $obj1->getTextAlign(), "The method getTextAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotLines\HighchartsLabel(false);

        $this->assertEquals("left", $obj0->getAlign(), "The method getAlign() does not return the expected value");
        $this->assertEquals(null, $obj0->getRotation(), "The method getRotation() does not return the expected value");
        $this->assertEquals(null, $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj0->getText(), "The method getText() does not return the expected value");
        $this->assertEquals(null, $obj0->getTextAlign(), "The method getTextAlign() does not return the expected value");
        $this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals("top", $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
        $this->assertEquals(null, $obj0->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj0->getY(), "The method getY() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotLines\HighchartsLabel(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotLines\HighchartsLabel(true);

        $obj->setAlign("f792d1afb0399dce47533bead9d71a8a");

        $res1 = ["align" => "f792d1afb0399dce47533bead9d71a8a"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

        $obj->setRotation(95);

        $res2 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res3 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res4 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with text");

        $obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");

        $res5 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with text align");

        $obj->setUseHTML(0);

        $res6 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 0];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

        $obj->setVerticalAlign("bottom");

        $res7 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 0, "verticalAlign" => "bottom"];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

        $obj->setX(15);

        $res8 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 0, "verticalAlign" => "bottom", "x" => 15];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with x");

        $obj->setY(29);

        $res9 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 95, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 0, "verticalAlign" => "bottom", "x" => 15, "y" => 29];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with y");
    }

}
