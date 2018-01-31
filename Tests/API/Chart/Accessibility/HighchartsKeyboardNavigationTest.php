<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Accessibility;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts keyboard navigation test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Accessibility
 * @version 5.0.14
 */
final class HighchartsKeyboardNavigationTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(true);

        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getSkipNullPoints());
        $this->assertEquals(null, $obj1->getTabThroughChartElements());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(false);

        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(false, $obj0->getSkipNullPoints());
        $this->assertEquals(true, $obj0->getTabThroughChartElements());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation(true);

        $obj->setEnabled(1);

        $res1 = ["enabled" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setSkipNullPoints(1);

        $res2 = ["enabled" => 1, "skipNullPoints" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setTabThroughChartElements(1);

        $res3 = ["enabled" => 1, "skipNullPoints" => 1, "tabThroughChartElements" => 1];
        $this->assertEquals($res3, $obj->toArray());
    }

}
