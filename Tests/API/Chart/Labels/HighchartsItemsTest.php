<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Labels;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts items test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Labels
 * @version 5.0.14
 */
final class HighchartsItemsTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems(true);

        $this->assertEquals(null, $obj1->getHtml(), "The method getHtml() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems(true);

        $obj->setHtml("fc35fdc70d5fc69d269883a822c7a53e");

        $res1 = ["html" => "fc35fdc70d5fc69d269883a822c7a53e"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with html");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res2 = ["html" => "fc35fdc70d5fc69d269883a822c7a53e", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with style");
    }

}
