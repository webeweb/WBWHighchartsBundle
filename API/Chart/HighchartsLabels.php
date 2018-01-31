<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts labels.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsLabels implements JsonSerializable {

    /**
     * Items.
     *
     * @var array
     */
    private $items;

    /**
     * Style.
     *
     * @var array
     */
    private $style = ["color" => "#333333"];

    /**
     * Constructor.
     *
     * @param boolean $ignoreDefaultValues Ignore the default values.
     */
    public function __construct($ignoreDefaultValues = true) {
        if ($ignoreDefaultValues === true) {
            $this->clear();
        }
    }

    /**
     * Clear.
     *
     * @return void
     */
    public function clear() {

        // Clear the items.
        $this->items = null;

        // Clear the style.
        $this->style = null;
    }

    /**
     * Get the items.
     *
     * @return array Returns the items.
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * Get the style.
     *
     * @return array Returns the style.
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Serialize this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function jsonSerialize() {
        return $this->toArray();
    }

    /**
     * Set the items.
     *
     * @param array $items The items.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels Returns the highcharts labels.
     */
    public function setItems(array $items = null) {
        $this->items = $items;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels Returns the highcharts labels.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the items.
        if (!is_null($this->items)) {
            $output["items"] = $this->items;
        }

        // Check the style.
        if (!is_null($this->style)) {
            $output["style"] = $this->style;
        }

        // Return the output.
        return $output;
    }

}
