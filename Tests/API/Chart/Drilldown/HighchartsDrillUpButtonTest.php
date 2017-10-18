<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Drilldown;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts drill up button test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Drilldown
 * @version 5.0.14
 */
final class HighchartsDrillUpButtonTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Drilldown\HighchartsDrillUpButton(true);

        $this->assertEquals(null, $obj1->getPosition(), "The method getPosition() does not return the expected value");
        $this->assertEquals(null, $obj1->getRelativeTo(), "The method getRelativeTo() does not return the expected value");
        $this->assertEquals(null, $obj1->getTheme(), "The method getTheme() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Drilldown\HighchartsDrillUpButton(false);

        $this->assertEquals(null, $obj0->getPosition(), "The method getPosition() does not return the expected value");
        $this->assertEquals("plotBox", $obj0->getRelativeTo(), "The method getRelativeTo() does not return the expected value");
        $this->assertEquals(null, $obj0->getTheme(), "The method getTheme() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Drilldown\HighchartsDrillUpButton(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Drilldown\HighchartsDrillUpButton(true);

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

        $res1 = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with position");

        $obj->setRelativeTo("d098f82c4a6c152bd581295856dc869a");

        $res2 = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "relativeTo" => "d098f82c4a6c152bd581295856dc869a"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with relative to");

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

        $res3 = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "relativeTo" => "d098f82c4a6c152bd581295856dc869a", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with theme");
    }

}
