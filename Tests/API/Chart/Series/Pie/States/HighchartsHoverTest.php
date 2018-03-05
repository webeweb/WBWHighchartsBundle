<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Pie\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Pie\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover(true);

        $this->assertEquals(null, $obj1->getAnimation());
        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getHalo());
        $this->assertEquals(null, $obj1->getLineWidth());
        $this->assertEquals(null, $obj1->getLineWidthPlus());
        $this->assertEquals(null, $obj1->getMarker());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover(false);

        $this->assertEquals(["duration" => 50], $obj0->getAnimation());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(null, $obj0->getHalo());
        $this->assertEquals(2, $obj0->getLineWidth());
        $this->assertEquals(1, $obj0->getLineWidthPlus());
        $this->assertEquals(null, $obj0->getMarker());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover(false);

        $obj->newMarker();

        $obj->clear();

        $res = ["marker" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newMarker() method.
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\Hover\HighchartsMarker::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover(true);

        $obj->setAnimation(0);

        $res1 = ["animation" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setEnabled(1);

        $res2 = ["animation" => 0, "enabled" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setHalo(["halo" => "57f842286171094855e51fc3a541c1e2"]);

        $res3 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setLineWidth(36);

        $res4 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 36];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setLineWidthPlus(9);

        $res5 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 36, "lineWidthPlus" => 9];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\Hover\HighchartsMarker());

        $res6 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 36, "lineWidthPlus" => 9, "marker" => []];
        $this->assertEquals($res6, $obj->toArray());
    }

}
