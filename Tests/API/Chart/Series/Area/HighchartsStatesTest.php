<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Area;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts states test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Area
 * @version 5.0.14
 */
final class HighchartsStatesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates(true);

        $this->assertNull($obj1->getHover());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates(false);

        $obj->newHover();

        $obj->clear();

        $res = ["hover" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newHover() method.
     *
     * @return void.
     */
    public function testNewHover() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates(false);

        $res = $obj->newHover();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\States\HighchartsHover::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates(true);

        $obj->setHover(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\States\HighchartsHover());

        $res1 = ["hover" => []];
        $this->assertEquals($res1, $obj->toArray());
    }

}
