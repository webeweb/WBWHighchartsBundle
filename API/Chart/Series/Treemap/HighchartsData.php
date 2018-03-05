<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap;

use JsonSerializable;

/**
 * Highcharts data.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap
 * @version 5.0.14
 * @final
 */
final class HighchartsData implements JsonSerializable {

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
     * Color index.
     *
     * @var integer
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Color value.
     *
     * @var integer
     * @since 4.1.0
     */
    private $colorValue;

    /**
     * Data labels.
     *
     * @var array
     */
    private $dataLabels;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * Drilldown.
     *
     * @var string
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents
     */
    private $events;

    /**
     * Id.
     *
     * @var string
     * @since 1.2.0
     */
    private $id;

    /**
     * Labelrank.
     *
     * @var integer
     */
    private $labelrank;

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Parent.
     *
     * @var string
     * @since 4.1.0
     */
    private $parent;

    /**
     * Selected.
     *
     * @var boolean
     */
    private $selected = false;

    /**
     * Value.
     *
     * @var integer
     */
    private $value;

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

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the color index.
        $this->colorIndex = null;

        // Clear the color value.
        $this->colorValue = null;

        // Clear the data labels.
        $this->dataLabels = null;

        // Clear the description.
        $this->description = null;

        // Clear the drilldown.
        $this->drilldown = null;

        // Clear the events.
        if (!is_null($this->events)) {
            $this->events->clear();
        }

        // Clear the id.
        $this->id = null;

        // Clear the labelrank.
        $this->labelrank = null;

        // Clear the name.
        $this->name = null;

        // Clear the parent.
        $this->parent = null;

        // Clear the selected.
        $this->selected = null;

        // Clear the value.
        $this->value = null;
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
     * Get the color index.
     *
     * @return integer Returns the color index.
     */
    public function getColorIndex() {
        return $this->colorIndex;
    }

    /**
     * Get the color value.
     *
     * @return integer Returns the color value.
     */
    public function getColorValue() {
        return $this->colorValue;
    }

    /**
     * Get the data labels.
     *
     * @return array Returns the data labels.
     */
    public function getDataLabels() {
        return $this->dataLabels;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the drilldown.
     *
     * @return string Returns the drilldown.
     */
    public function getDrilldown() {
        return $this->drilldown;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
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
     * Get the labelrank.
     *
     * @return integer Returns the labelrank.
     */
    public function getLabelrank() {
        return $this->labelrank;
    }

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the parent.
     *
     * @return string Returns the parent.
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Get the selected.
     *
     * @return boolean Returns the selected.
     */
    public function getSelected() {
        return $this->selected;
    }

    /**
     * Get the value.
     *
     * @return integer Returns the value.
     */
    public function getValue() {
        return $this->value;
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
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents();
        return $this->events;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param integer $colorIndex The color index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setColorIndex($colorIndex) {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the color value.
     *
     * @param integer $colorValue The color value.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setColorValue($colorValue) {
        $this->colorValue = $colorValue;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param array $dataLabels The data labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setDataLabels(array $dataLabels = null) {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param string $drilldown The drilldown.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setDrilldown($drilldown) {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labelrank.
     *
     * @param integer $labelrank The labelrank.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setLabelrank($labelrank) {
        $this->labelrank = $labelrank;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param string $parent The parent.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param boolean $selected The selected.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setSelected($selected) {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the value.
     *
     * @param integer $value The value.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData Returns the highcharts data.
     */
    public function setValue($value) {
        $this->value = $value;
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

        // Check the class name.
        if (!is_null($this->className)) {
            $output["className"] = $this->className;
        }

        // Check the color.
        if (!is_null($this->color)) {
            $output["color"] = $this->color;
        }

        // Check the color index.
        if (!is_null($this->colorIndex)) {
            $output["colorIndex"] = $this->colorIndex;
        }

        // Check the color value.
        if (!is_null($this->colorValue)) {
            $output["colorValue"] = $this->colorValue;
        }

        // Check the data labels.
        if (!is_null($this->dataLabels)) {
            $output["dataLabels"] = $this->dataLabels;
        }

        // Check the description.
        if (!is_null($this->description)) {
            $output["description"] = $this->description;
        }

        // Check the drilldown.
        if (!is_null($this->drilldown)) {
            $output["drilldown"] = $this->drilldown;
        }

        // Check the events.
        if (!is_null($this->events)) {
            $output["events"] = $this->events->toArray();
        }

        // Check the id.
        if (!is_null($this->id)) {
            $output["id"] = $this->id;
        }

        // Check the labelrank.
        if (!is_null($this->labelrank)) {
            $output["labelrank"] = $this->labelrank;
        }

        // Check the name.
        if (!is_null($this->name)) {
            $output["name"] = $this->name;
        }

        // Check the parent.
        if (!is_null($this->parent)) {
            $output["parent"] = $this->parent;
        }

        // Check the selected.
        if (!is_null($this->selected)) {
            $output["selected"] = $this->selected;
        }

        // Check the value.
        if (!is_null($this->value)) {
            $output["value"] = $this->value;
        }

        // Return the output.
        return $output;
    }

}
