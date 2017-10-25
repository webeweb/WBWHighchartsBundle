<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\ZAxis;

use JsonSerializable;

/**
 * Highcharts plot bands.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\ZAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsPlotBands implements JsonSerializable {

    /**
     * Border color.
     *
     * @var string
     */
    private $borderColor;

    /**
     * Border width.
     *
     * @var integer
     */
    private $borderWidth = 0;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string
     */
    private $color;

    /**
     * Events.
     *
     * @var array
     * @since 1.2
     */
    private $events;

    /**
     * From.
     *
     * @var integer
     */
    private $from;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Label.
     *
     * @var \WBW\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel
     */
    private $label;

    /**
     * To.
     *
     * @var integer
     */
    private $to;

    /**
     * Z index.
     *
     * @var integer
     * @since 1.2
     */
    private $zIndex;

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

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the events.
        $this->events = null;

        // Clear the from.
        $this->from = null;

        // Clear the id.
        $this->id = null;

        // Clear the label.
        if (!is_null($this->label)) {
            $this->label->clear();
        }

        // Clear the to.
        $this->to = null;

        // Clear the z index.
        $this->zIndex = null;
    }

    /**
     * Get the border color.
     *
     * @return string Returns the border color.
     */
    public function getBorderColor() {
        return $this->borderColor;
    }

    /**
     * Get the border width.
     *
     * @return integer Returns the border width.
     */
    public function getBorderWidth() {
        return $this->borderWidth;
    }

    /**
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
    }

    /**
     * Get the color.
     *
     * @return string Returns the color.
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the events.
     *
     * @return array Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the from.
     *
     * @return integer Returns the from.
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the label.
     *
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel Returns the label.
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Get the to.
     *
     * @return integer Returns the to.
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * Get the z index.
     *
     * @return integer Returns the z index.
     */
    public function getZIndex() {
        return $this->zIndex;
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
     * Create a new label.
     *
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel Returns the label.
     */
    public function newLabel() {
        $this->label = new \WBW\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel();
        return $this->label;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param array $events The events.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setEvents(array $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the from.
     *
     * @param integer $from The from.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param \WBW\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel $label The label.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setLabel(\WBW\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel $label = null) {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the to.
     *
     * @param integer $to The to.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setTo($to) {
        $this->to = $to;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param integer $zIndex The z index.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
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

        // Check the border color.
        if (!is_null($this->borderColor)) {
            $output["borderColor"] = $this->borderColor;
        }

        // Check the border width.
        if (!is_null($this->borderWidth)) {
            $output["borderWidth"] = $this->borderWidth;
        }

        // Check the class name.
        if (!is_null($this->className)) {
            $output["className"] = $this->className;
        }

        // Check the color.
        if (!is_null($this->color)) {
            $output["color"] = $this->color;
        }

        // Check the events.
        if (!is_null($this->events)) {
            $output["events"] = $this->events;
        }

        // Check the from.
        if (!is_null($this->from)) {
            $output["from"] = $this->from;
        }

        // Check the id.
        if (!is_null($this->id)) {
            $output["id"] = $this->id;
        }

        // Check the label.
        if (!is_null($this->label)) {
            $output["label"] = $this->label->toArray();
        }

        // Check the to.
        if (!is_null($this->to)) {
            $output["to"] = $this->to;
        }

        // Check the z index.
        if (!is_null($this->zIndex)) {
            $output["zIndex"] = $this->zIndex;
        }

        // Return the output.
        return $output;
    }

}
