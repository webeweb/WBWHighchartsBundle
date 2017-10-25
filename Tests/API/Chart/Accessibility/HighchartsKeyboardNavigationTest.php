<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Accessibility;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts keyboard navigation test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Accessibility
 * @version 5.0.14
 */
final class HighchartsKeyboardNavigationTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(true);

        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getSkipNullPoints(), "The method getSkipNullPoints() does not return the expected value");
        $this->assertEquals(null, $obj1->getTabThroughChartElements(), "The method getTabThroughChartElements() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(false);

        $this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(false, $obj0->getSkipNullPoints(), "The method getSkipNullPoints() does not return the expected value");
        $this->assertEquals(true, $obj0->getTabThroughChartElements(), "The method getTabThroughChartElements() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(true);

        $obj->setEnabled(0);

        $res1 = ["enabled" => 0];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setSkipNullPoints(0);

        $res2 = ["enabled" => 0, "skipNullPoints" => 0];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with skip null points");

        $obj->setTabThroughChartElements(1);

        $res3 = ["enabled" => 0, "skipNullPoints" => 0, "tabThroughChartElements" => 1];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with tab through chart elements");
    }

}
