<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\YAxis;

use JsonSerializable;

/**
 * Highcharts title.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsTitle implements JsonSerializable {

    /**
     * Align.
     *
     * @var string
     */
    private $align = "middle";

    /**
     * Enabled.
     *
     * @var string
     * @deprecated
     */
    private $enabled = "middle";

    /**
     * Margin.
     *
     * @var integer
     */
    private $margin = 40;

    /**
     * Offset.
     *
     * @var integer
     * @since 2.2.0
     */
    private $offset;

    /**
     * Reserve space.
     *
     * @var boolean
     * @since 5.0.11
     */
    private $reserveSpace = true;

    /**
     * Rotation.
     *
     * @var integer
     */
    private $rotation = 270;

    /**
     * Style.
     *
     * @var array
     */
    private $style = ["color" => "#666666"];

    /**
     * Text.
     *
     * @var string
     */
    private $text = "Values";

    /**
     * X.
     *
     * @var integer
     * @since 4.1.6
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var integer
     */
    private $y;

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

        // Clear the align.
        $this->align = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the margin.
        $this->margin = null;

        // Clear the offset.
        $this->offset = null;

        // Clear the reserve space.
        $this->reserveSpace = null;

        // Clear the rotation.
        $this->rotation = null;

        // Clear the style.
        $this->style = null;

        // Clear the text.
        $this->text = null;

        // Clear the x.
        $this->x = null;

        // Clear the y.
        $this->y = null;
    }

    /**
     * Get the align.
     *
     * @return string Returns the align.
     */
    public function getAlign() {
        return $this->align;
    }

    /**
     * Get the enabled.
     *
     * @return string Returns the enabled.
     * @deprecated
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Get the margin.
     *
     * @return integer Returns the margin.
     */
    public function getMargin() {
        return $this->margin;
    }

    /**
     * Get the offset.
     *
     * @return integer Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * Get the reserve space.
     *
     * @return boolean Returns the reserve space.
     */
    public function getReserveSpace() {
        return $this->reserveSpace;
    }

    /**
     * Get the rotation.
     *
     * @return integer Returns the rotation.
     */
    public function getRotation() {
        return $this->rotation;
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
     * Get the text.
     *
     * @return string Returns the text.
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Get the x.
     *
     * @return integer Returns the x.
     */
    public function getX() {
        return $this->x;
    }

    /**
     * Get the y.
     *
     * @return integer Returns the y.
     */
    public function getY() {
        return $this->y;
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
     * Set the align.
     *
     * @param string $align The align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setAlign($align) {
        switch ($align) {
            case "high":
            case "low":
            case "middle":
                $this->align = $align;
                break;
        }
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param string $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     * @deprecated
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the margin.
     *
     * @param integer $margin The margin.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setMargin($margin) {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param integer $offset The offset.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the reserve space.
     *
     * @param boolean $reserveSpace The reserve space.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setReserveSpace($reserveSpace) {
        $this->reserveSpace = $reserveSpace;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param integer $rotation The rotation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setRotation($rotation) {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string $text The text.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param integer $x The x.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param integer $y The y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the highcharts title.
     */
    public function setY($y) {
        $this->y = $y;
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

        // Check the align.
        if (!is_null($this->align)) {
            $output["align"] = $this->align;
        }

        // Check the enabled.
        if (!is_null($this->enabled)) {
            $output["enabled"] = $this->enabled;
        }

        // Check the margin.
        if (!is_null($this->margin)) {
            $output["margin"] = $this->margin;
        }

        // Check the offset.
        if (!is_null($this->offset)) {
            $output["offset"] = $this->offset;
        }

        // Check the reserve space.
        if (!is_null($this->reserveSpace)) {
            $output["reserveSpace"] = $this->reserveSpace;
        }

        // Check the rotation.
        if (!is_null($this->rotation)) {
            $output["rotation"] = $this->rotation;
        }

        // Check the style.
        if (!is_null($this->style)) {
            $output["style"] = $this->style;
        }

        // Check the text.
        if (!is_null($this->text)) {
            $output["text"] = $this->text;
        }

        // Check the x.
        if (!is_null($this->x)) {
            $output["x"] = $this->x;
        }

        // Check the y.
        if (!is_null($this->y)) {
            $output["y"] = $this->y;
        }

        // Return the output.
        return $output;
    }

}
