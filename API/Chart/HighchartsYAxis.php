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
 * Highcharts y axis.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsYAxis implements JsonSerializable {

    /**
     * Allow decimals.
     *
     * @var boolean
     * @since 2.0
     */
    private $allowDecimals = true;

    /**
     * Alternate grid color.
     *
     * @var string
     */
    private $alternateGridColor;

    /**
     * Angle.
     *
     * @var integer
     * @since 4.2.7
     */
    private $angle = 0;

    /**
     * Breaks.
     *
     * @var array
     * @since 4.1.0
     */
    private $breaks;

    /**
     * Categories.
     *
     * @var array
     */
    private $categories;

    /**
     * Ceiling.
     *
     * @var integer
     * @since 4.0
     */
    private $ceiling;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Crosshair.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair
     * @since 4.1
     */
    private $crosshair;

    /**
     * Date time label formats.
     *
     * @var array
     */
    private $dateTimeLabelFormats;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * End on tick.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $endOnTick = true;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents
     */
    private $events;

    /**
     * Floor.
     *
     * @var integer
     * @since 4.0
     */
    private $floor;

    /**
     * Grid line color.
     *
     * @var string
     */
    private $gridLineColor = "#e6e6e6";

    /**
     * Grid line dash style.
     *
     * @var string
     * @since 1.2
     */
    private $gridLineDashStyle = "Solid";

    /**
     * Grid line interpolation.
     *
     * @var string
     */
    private $gridLineInterpolation;

    /**
     * Grid line width.
     *
     * @var integer
     */
    private $gridLineWidth = 1;

    /**
     * Grid z index.
     *
     * @var integer
     */
    private $gridZIndex = 1;

    /**
     * Id.
     *
     * @var string
     * @since 1.2.0
     */
    private $id;

    /**
     * Labels.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels
     */
    private $labels;

    /**
     * Line color.
     *
     * @var string
     */
    private $lineColor = "#ccd6eb";

    /**
     * Line width.
     *
     * @var integer
     */
    private $lineWidth = 0;

    /**
     * Linked to.
     *
     * @var integer
     * @since 2.0.2
     */
    private $linkedTo;

    /**
     * Max.
     *
     * @var integer
     */
    private $max;

    /**
     * Max color.
     *
     * @var string
     * @since 4.0
     */
    private $maxColor = "#003399";

    /**
     * Max padding.
     *
     * @var integer
     * @since 1.2.0
     */
    private $maxPadding = 0.05;

    /**
     * Max zoom.
     *
     * @var integer
     * @deprecated
     */
    private $maxZoom;

    /**
     * Min.
     *
     * @var integer
     */
    private $min;

    /**
     * Min color.
     *
     * @var string
     * @since 4.0
     */
    private $minColor = "#e6ebf5";

    /**
     * Min padding.
     *
     * @var integer
     * @since 1.2.0
     */
    private $minPadding = 0.05;

    /**
     * Min range.
     *
     * @var integer
     */
    private $minRange;

    /**
     * Min tick interval.
     *
     * @var integer
     * @since 2.3.0
     */
    private $minTickInterval;

    /**
     * Minor grid line color.
     *
     * @var string
     */
    private $minorGridLineColor = "#f2f2f2";

    /**
     * Minor grid line dash style.
     *
     * @var string
     * @since 1.2
     */
    private $minorGridLineDashStyle = "Solid";

    /**
     * Minor grid line width.
     *
     * @var integer
     */
    private $minorGridLineWidth = 1;

    /**
     * Minor tick color.
     *
     * @var string
     */
    private $minorTickColor = "#999999";

    /**
     * Minor tick interval.
     *
     * @var string|integer
     */
    private $minorTickInterval;

    /**
     * Minor tick length.
     *
     * @var integer
     */
    private $minorTickLength = 2;

    /**
     * Minor tick position.
     *
     * @var string
     */
    private $minorTickPosition = "outside";

    /**
     * Minor tick width.
     *
     * @var integer
     */
    private $minorTickWidth = 0;

    /**
     * Offset.
     *
     * @var integer
     */
    private $offset = 0;

    /**
     * Opposite.
     *
     * @var boolean
     */
    private $opposite = false;

    /**
     * Plot bands.
     *
     * @var array
     */
    private $plotBands;

    /**
     * Plot lines.
     *
     * @var array
     */
    private $plotLines;

    /**
     * Reversed.
     *
     * @var boolean
     */
    private $reversed = false;

    /**
     * Reversed stacks.
     *
     * @var boolean
     * @since 3.0.10
     */
    private $reversedStacks = true;

    /**
     * Show empty.
     *
     * @var boolean
     * @since 1.1
     */
    private $showEmpty = true;

    /**
     * Show first label.
     *
     * @var boolean
     */
    private $showFirstLabel = true;

    /**
     * Show last label.
     *
     * @var boolean
     */
    private $showLastLabel;

    /**
     * Soft max.
     *
     * @var integer
     * @since 5.0.1
     */
    private $softMax;

    /**
     * Soft min.
     *
     * @var integer
     * @since 5.0.1
     */
    private $softMin;

    /**
     * Stack labels.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels
     */
    private $stackLabels;

    /**
     * Start of week.
     *
     * @var integer
     */
    private $startOfWeek = 1;

    /**
     * Start on tick.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $startOnTick = true;

    /**
     * Stops.
     *
     * @var array
     * @since 4.0
     */
    private $stops;

    /**
     * Tick amount.
     *
     * @var integer
     * @since 4.1.0
     */
    private $tickAmount;

    /**
     * Tick color.
     *
     * @var string
     */
    private $tickColor = "#ccd6eb";

    /**
     * Tick interval.
     *
     * @var integer
     */
    private $tickInterval;

    /**
     * Tick length.
     *
     * @var integer
     */
    private $tickLength = 10;

    /**
     * Tick pixel interval.
     *
     * @var integer
     */
    private $tickPixelInterval;

    /**
     * Tick position.
     *
     * @var string
     */
    private $tickPosition = "outside";

    /**
     * Tick positioner.
     *
     * @var string
     */
    private $tickPositioner;

    /**
     * Tick positions.
     *
     * @var array
     */
    private $tickPositions;

    /**
     * Tick width.
     *
     * @var integer
     */
    private $tickWidth = 0;

    /**
     * Tickmark placement.
     *
     * @var string
     */
    private $tickmarkPlacement;

    /**
     * Title.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle
     */
    private $title;

    /**
     * Type.
     *
     * @var string
     */
    private $type = "linear";

    /**
     * Unique names.
     *
     * @var boolean
     * @since 4.2.7
     */
    private $uniqueNames = true;

    /**
     * Units.
     *
     * @var array
     */
    private $units;

    /**
     * Visible.
     *
     * @var boolean
     * @since 4.1.9
     */
    private $visible = true;

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

        // Clear the allow decimals.
        $this->allowDecimals = null;

        // Clear the alternate grid color.
        $this->alternateGridColor = null;

        // Clear the angle.
        $this->angle = null;

        // Clear the breaks.
        $this->breaks = null;

        // Clear the categories.
        $this->categories = null;

        // Clear the ceiling.
        $this->ceiling = null;

        // Clear the class name.
        $this->className = null;

        // Clear the crosshair.
        if (!is_null($this->crosshair)) {
            $this->crosshair->clear();
        }

        // Clear the date time label formats.
        $this->dateTimeLabelFormats = null;

        // Clear the description.
        $this->description = null;

        // Clear the end on tick.
        $this->endOnTick = null;

        // Clear the events.
        if (!is_null($this->events)) {
            $this->events->clear();
        }

        // Clear the floor.
        $this->floor = null;

        // Clear the grid line color.
        $this->gridLineColor = null;

        // Clear the grid line dash style.
        $this->gridLineDashStyle = null;

        // Clear the grid line interpolation.
        $this->gridLineInterpolation = null;

        // Clear the grid line width.
        $this->gridLineWidth = null;

        // Clear the grid z index.
        $this->gridZIndex = null;

        // Clear the id.
        $this->id = null;

        // Clear the labels.
        if (!is_null($this->labels)) {
            $this->labels->clear();
        }

        // Clear the line color.
        $this->lineColor = null;

        // Clear the line width.
        $this->lineWidth = null;

        // Clear the linked to.
        $this->linkedTo = null;

        // Clear the max.
        $this->max = null;

        // Clear the max color.
        $this->maxColor = null;

        // Clear the max padding.
        $this->maxPadding = null;

        // Clear the max zoom.
        $this->maxZoom = null;

        // Clear the min.
        $this->min = null;

        // Clear the min color.
        $this->minColor = null;

        // Clear the min padding.
        $this->minPadding = null;

        // Clear the min range.
        $this->minRange = null;

        // Clear the min tick interval.
        $this->minTickInterval = null;

        // Clear the minor grid line color.
        $this->minorGridLineColor = null;

        // Clear the minor grid line dash style.
        $this->minorGridLineDashStyle = null;

        // Clear the minor grid line width.
        $this->minorGridLineWidth = null;

        // Clear the minor tick color.
        $this->minorTickColor = null;

        // Clear the minor tick interval.
        $this->minorTickInterval = null;

        // Clear the minor tick length.
        $this->minorTickLength = null;

        // Clear the minor tick position.
        $this->minorTickPosition = null;

        // Clear the minor tick width.
        $this->minorTickWidth = null;

        // Clear the offset.
        $this->offset = null;

        // Clear the opposite.
        $this->opposite = null;

        // Clear the plot bands.
        $this->plotBands = null;

        // Clear the plot lines.
        $this->plotLines = null;

        // Clear the reversed.
        $this->reversed = null;

        // Clear the reversed stacks.
        $this->reversedStacks = null;

        // Clear the show empty.
        $this->showEmpty = null;

        // Clear the show first label.
        $this->showFirstLabel = null;

        // Clear the show last label.
        $this->showLastLabel = null;

        // Clear the soft max.
        $this->softMax = null;

        // Clear the soft min.
        $this->softMin = null;

        // Clear the stack labels.
        if (!is_null($this->stackLabels)) {
            $this->stackLabels->clear();
        }

        // Clear the start of week.
        $this->startOfWeek = null;

        // Clear the start on tick.
        $this->startOnTick = null;

        // Clear the stops.
        $this->stops = null;

        // Clear the tick amount.
        $this->tickAmount = null;

        // Clear the tick color.
        $this->tickColor = null;

        // Clear the tick interval.
        $this->tickInterval = null;

        // Clear the tick length.
        $this->tickLength = null;

        // Clear the tick pixel interval.
        $this->tickPixelInterval = null;

        // Clear the tick position.
        $this->tickPosition = null;

        // Clear the tick positioner.
        $this->tickPositioner = null;

        // Clear the tick positions.
        $this->tickPositions = null;

        // Clear the tick width.
        $this->tickWidth = null;

        // Clear the tickmark placement.
        $this->tickmarkPlacement = null;

        // Clear the title.
        if (!is_null($this->title)) {
            $this->title->clear();
        }

        // Clear the type.
        $this->type = null;

        // Clear the unique names.
        $this->uniqueNames = null;

        // Clear the units.
        $this->units = null;

        // Clear the visible.
        $this->visible = null;
    }

    /**
     * Get the allow decimals.
     *
     * @return boolean Returns the allow decimals.
     */
    public function getAllowDecimals() {
        return $this->allowDecimals;
    }

    /**
     * Get the alternate grid color.
     *
     * @return string Returns the alternate grid color.
     */
    public function getAlternateGridColor() {
        return $this->alternateGridColor;
    }

    /**
     * Get the angle.
     *
     * @return integer Returns the angle.
     */
    public function getAngle() {
        return $this->angle;
    }

    /**
     * Get the breaks.
     *
     * @return array Returns the breaks.
     */
    public function getBreaks() {
        return $this->breaks;
    }

    /**
     * Get the categories.
     *
     * @return array Returns the categories.
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * Get the ceiling.
     *
     * @return integer Returns the ceiling.
     */
    public function getCeiling() {
        return $this->ceiling;
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
     * Get the crosshair.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair Returns the crosshair.
     */
    public function getCrosshair() {
        return $this->crosshair;
    }

    /**
     * Get the date time label formats.
     *
     * @return array Returns the date time label formats.
     */
    public function getDateTimeLabelFormats() {
        return $this->dateTimeLabelFormats;
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
     * Get the end on tick.
     *
     * @return boolean Returns the end on tick.
     */
    public function getEndOnTick() {
        return $this->endOnTick;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the floor.
     *
     * @return integer Returns the floor.
     */
    public function getFloor() {
        return $this->floor;
    }

    /**
     * Get the grid line color.
     *
     * @return string Returns the grid line color.
     */
    public function getGridLineColor() {
        return $this->gridLineColor;
    }

    /**
     * Get the grid line dash style.
     *
     * @return string Returns the grid line dash style.
     */
    public function getGridLineDashStyle() {
        return $this->gridLineDashStyle;
    }

    /**
     * Get the grid line interpolation.
     *
     * @return string Returns the grid line interpolation.
     */
    public function getGridLineInterpolation() {
        return $this->gridLineInterpolation;
    }

    /**
     * Get the grid line width.
     *
     * @return integer Returns the grid line width.
     */
    public function getGridLineWidth() {
        return $this->gridLineWidth;
    }

    /**
     * Get the grid z index.
     *
     * @return integer Returns the grid z index.
     */
    public function getGridZIndex() {
        return $this->gridZIndex;
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
     * Get the labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the labels.
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * Get the line color.
     *
     * @return string Returns the line color.
     */
    public function getLineColor() {
        return $this->lineColor;
    }

    /**
     * Get the line width.
     *
     * @return integer Returns the line width.
     */
    public function getLineWidth() {
        return $this->lineWidth;
    }

    /**
     * Get the linked to.
     *
     * @return integer Returns the linked to.
     */
    public function getLinkedTo() {
        return $this->linkedTo;
    }

    /**
     * Get the max.
     *
     * @return integer Returns the max.
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * Get the max color.
     *
     * @return string Returns the max color.
     */
    public function getMaxColor() {
        return $this->maxColor;
    }

    /**
     * Get the max padding.
     *
     * @return integer Returns the max padding.
     */
    public function getMaxPadding() {
        return $this->maxPadding;
    }

    /**
     * Get the max zoom.
     *
     * @return integer Returns the max zoom.
     * @deprecated
     */
    public function getMaxZoom() {
        return $this->maxZoom;
    }

    /**
     * Get the min.
     *
     * @return integer Returns the min.
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * Get the min color.
     *
     * @return string Returns the min color.
     */
    public function getMinColor() {
        return $this->minColor;
    }

    /**
     * Get the min padding.
     *
     * @return integer Returns the min padding.
     */
    public function getMinPadding() {
        return $this->minPadding;
    }

    /**
     * Get the min range.
     *
     * @return integer Returns the min range.
     */
    public function getMinRange() {
        return $this->minRange;
    }

    /**
     * Get the min tick interval.
     *
     * @return integer Returns the min tick interval.
     */
    public function getMinTickInterval() {
        return $this->minTickInterval;
    }

    /**
     * Get the minor grid line color.
     *
     * @return string Returns the minor grid line color.
     */
    public function getMinorGridLineColor() {
        return $this->minorGridLineColor;
    }

    /**
     * Get the minor grid line dash style.
     *
     * @return string Returns the minor grid line dash style.
     */
    public function getMinorGridLineDashStyle() {
        return $this->minorGridLineDashStyle;
    }

    /**
     * Get the minor grid line width.
     *
     * @return integer Returns the minor grid line width.
     */
    public function getMinorGridLineWidth() {
        return $this->minorGridLineWidth;
    }

    /**
     * Get the minor tick color.
     *
     * @return string Returns the minor tick color.
     */
    public function getMinorTickColor() {
        return $this->minorTickColor;
    }

    /**
     * Get the minor tick interval.
     *
     * @return string|integer Returns the minor tick interval.
     */
    public function getMinorTickInterval() {
        return $this->minorTickInterval;
    }

    /**
     * Get the minor tick length.
     *
     * @return integer Returns the minor tick length.
     */
    public function getMinorTickLength() {
        return $this->minorTickLength;
    }

    /**
     * Get the minor tick position.
     *
     * @return string Returns the minor tick position.
     */
    public function getMinorTickPosition() {
        return $this->minorTickPosition;
    }

    /**
     * Get the minor tick width.
     *
     * @return integer Returns the minor tick width.
     */
    public function getMinorTickWidth() {
        return $this->minorTickWidth;
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
     * Get the opposite.
     *
     * @return boolean Returns the opposite.
     */
    public function getOpposite() {
        return $this->opposite;
    }

    /**
     * Get the plot bands.
     *
     * @return array Returns the plot bands.
     */
    public function getPlotBands() {
        return $this->plotBands;
    }

    /**
     * Get the plot lines.
     *
     * @return array Returns the plot lines.
     */
    public function getPlotLines() {
        return $this->plotLines;
    }

    /**
     * Get the reversed.
     *
     * @return boolean Returns the reversed.
     */
    public function getReversed() {
        return $this->reversed;
    }

    /**
     * Get the reversed stacks.
     *
     * @return boolean Returns the reversed stacks.
     */
    public function getReversedStacks() {
        return $this->reversedStacks;
    }

    /**
     * Get the show empty.
     *
     * @return boolean Returns the show empty.
     */
    public function getShowEmpty() {
        return $this->showEmpty;
    }

    /**
     * Get the show first label.
     *
     * @return boolean Returns the show first label.
     */
    public function getShowFirstLabel() {
        return $this->showFirstLabel;
    }

    /**
     * Get the show last label.
     *
     * @return boolean Returns the show last label.
     */
    public function getShowLastLabel() {
        return $this->showLastLabel;
    }

    /**
     * Get the soft max.
     *
     * @return integer Returns the soft max.
     */
    public function getSoftMax() {
        return $this->softMax;
    }

    /**
     * Get the soft min.
     *
     * @return integer Returns the soft min.
     */
    public function getSoftMin() {
        return $this->softMin;
    }

    /**
     * Get the stack labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the stack labels.
     */
    public function getStackLabels() {
        return $this->stackLabels;
    }

    /**
     * Get the start of week.
     *
     * @return integer Returns the start of week.
     */
    public function getStartOfWeek() {
        return $this->startOfWeek;
    }

    /**
     * Get the start on tick.
     *
     * @return boolean Returns the start on tick.
     */
    public function getStartOnTick() {
        return $this->startOnTick;
    }

    /**
     * Get the stops.
     *
     * @return array Returns the stops.
     */
    public function getStops() {
        return $this->stops;
    }

    /**
     * Get the tick amount.
     *
     * @return integer Returns the tick amount.
     */
    public function getTickAmount() {
        return $this->tickAmount;
    }

    /**
     * Get the tick color.
     *
     * @return string Returns the tick color.
     */
    public function getTickColor() {
        return $this->tickColor;
    }

    /**
     * Get the tick interval.
     *
     * @return integer Returns the tick interval.
     */
    public function getTickInterval() {
        return $this->tickInterval;
    }

    /**
     * Get the tick length.
     *
     * @return integer Returns the tick length.
     */
    public function getTickLength() {
        return $this->tickLength;
    }

    /**
     * Get the tick pixel interval.
     *
     * @return integer Returns the tick pixel interval.
     */
    public function getTickPixelInterval() {
        return $this->tickPixelInterval;
    }

    /**
     * Get the tick position.
     *
     * @return string Returns the tick position.
     */
    public function getTickPosition() {
        return $this->tickPosition;
    }

    /**
     * Get the tick positioner.
     *
     * @return string Returns the tick positioner.
     */
    public function getTickPositioner() {
        return $this->tickPositioner;
    }

    /**
     * Get the tick positions.
     *
     * @return array Returns the tick positions.
     */
    public function getTickPositions() {
        return $this->tickPositions;
    }

    /**
     * Get the tick width.
     *
     * @return integer Returns the tick width.
     */
    public function getTickWidth() {
        return $this->tickWidth;
    }

    /**
     * Get the tickmark placement.
     *
     * @return string Returns the tickmark placement.
     */
    public function getTickmarkPlacement() {
        return $this->tickmarkPlacement;
    }

    /**
     * Get the title.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the unique names.
     *
     * @return boolean Returns the unique names.
     */
    public function getUniqueNames() {
        return $this->uniqueNames;
    }

    /**
     * Get the units.
     *
     * @return array Returns the units.
     */
    public function getUnits() {
        return $this->units;
    }

    /**
     * Get the visible.
     *
     * @return boolean Returns the visible.
     */
    public function getVisible() {
        return $this->visible;
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
     * Create a new crosshair.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair Returns the crosshair.
     */
    public function newCrosshair() {
        $this->crosshair = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair();
        return $this->crosshair;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the labels.
     */
    public function newLabels() {
        $this->labels = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels();
        return $this->labels;
    }

    /**
     * Create a new stack labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the stack labels.
     */
    public function newStackLabels() {
        $this->stackLabels = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels();
        return $this->stackLabels;
    }

    /**
     * Create a new title.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle Returns the title.
     */
    public function newTitle() {
        $this->title = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle();
        return $this->title;
    }

    /**
     * Set the allow decimals.
     *
     * @param boolean $allowDecimals The allow decimals.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setAllowDecimals($allowDecimals) {
        $this->allowDecimals = $allowDecimals;
        return $this;
    }

    /**
     * Set the alternate grid color.
     *
     * @param string $alternateGridColor The alternate grid color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setAlternateGridColor($alternateGridColor) {
        $this->alternateGridColor = $alternateGridColor;
        return $this;
    }

    /**
     * Set the angle.
     *
     * @param integer $angle The angle.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setAngle($angle) {
        $this->angle = $angle;
        return $this;
    }

    /**
     * Set the breaks.
     *
     * @param array $breaks The breaks.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setBreaks(array $breaks = null) {
        $this->breaks = $breaks;
        return $this;
    }

    /**
     * Set the categories.
     *
     * @param array $categories The categories.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setCategories(array $categories = null) {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Set the ceiling.
     *
     * @param integer $ceiling The ceiling.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setCeiling($ceiling) {
        $this->ceiling = $ceiling;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the crosshair.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair $crosshair The crosshair.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setCrosshair(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair $crosshair = null) {
        $this->crosshair = $crosshair;
        return $this;
    }

    /**
     * Set the date time label formats.
     *
     * @param array $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setDateTimeLabelFormats(array $dateTimeLabelFormats = null) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the end on tick.
     *
     * @param boolean $endOnTick The end on tick.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setEndOnTick($endOnTick) {
        $this->endOnTick = $endOnTick;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the floor.
     *
     * @param integer $floor The floor.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setFloor($floor) {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Set the grid line color.
     *
     * @param string $gridLineColor The grid line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setGridLineColor($gridLineColor) {
        $this->gridLineColor = $gridLineColor;
        return $this;
    }

    /**
     * Set the grid line dash style.
     *
     * @param string $gridLineDashStyle The grid line dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setGridLineDashStyle($gridLineDashStyle) {
        switch ($gridLineDashStyle) {
            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
                $this->gridLineDashStyle = $gridLineDashStyle;
                break;
        }
        return $this;
    }

    /**
     * Set the grid line interpolation.
     *
     * @param string $gridLineInterpolation The grid line interpolation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setGridLineInterpolation($gridLineInterpolation) {
        switch ($gridLineInterpolation) {
            case "circle":
            case "polygon":
                $this->gridLineInterpolation = $gridLineInterpolation;
                break;
        }
        return $this;
    }

    /**
     * Set the grid line width.
     *
     * @param integer $gridLineWidth The grid line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setGridLineWidth($gridLineWidth) {
        $this->gridLineWidth = $gridLineWidth;
        return $this;
    }

    /**
     * Set the grid z index.
     *
     * @param integer $gridZIndex The grid z index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setGridZIndex($gridZIndex) {
        $this->gridZIndex = $gridZIndex;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labels.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels $labels The labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setLabels(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels $labels = null) {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string $lineColor The line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param integer $lineWidth The line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param integer $linkedTo The linked to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max.
     *
     * @param integer $max The max.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * Set the max color.
     *
     * @param string $maxColor The max color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMaxColor($maxColor) {
        $this->maxColor = $maxColor;
        return $this;
    }

    /**
     * Set the max padding.
     *
     * @param integer $maxPadding The max padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMaxPadding($maxPadding) {
        $this->maxPadding = $maxPadding;
        return $this;
    }

    /**
     * Set the max zoom.
     *
     * @param integer $maxZoom The max zoom.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     * @deprecated
     */
    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;
        return $this;
    }

    /**
     * Set the min.
     *
     * @param integer $min The min.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * Set the min color.
     *
     * @param string $minColor The min color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinColor($minColor) {
        $this->minColor = $minColor;
        return $this;
    }

    /**
     * Set the min padding.
     *
     * @param integer $minPadding The min padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinPadding($minPadding) {
        $this->minPadding = $minPadding;
        return $this;
    }

    /**
     * Set the min range.
     *
     * @param integer $minRange The min range.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinRange($minRange) {
        $this->minRange = $minRange;
        return $this;
    }

    /**
     * Set the min tick interval.
     *
     * @param integer $minTickInterval The min tick interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinTickInterval($minTickInterval) {
        $this->minTickInterval = $minTickInterval;
        return $this;
    }

    /**
     * Set the minor grid line color.
     *
     * @param string $minorGridLineColor The minor grid line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorGridLineColor($minorGridLineColor) {
        $this->minorGridLineColor = $minorGridLineColor;
        return $this;
    }

    /**
     * Set the minor grid line dash style.
     *
     * @param string $minorGridLineDashStyle The minor grid line dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorGridLineDashStyle($minorGridLineDashStyle) {
        switch ($minorGridLineDashStyle) {
            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
                $this->minorGridLineDashStyle = $minorGridLineDashStyle;
                break;
        }
        return $this;
    }

    /**
     * Set the minor grid line width.
     *
     * @param integer $minorGridLineWidth The minor grid line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorGridLineWidth($minorGridLineWidth) {
        $this->minorGridLineWidth = $minorGridLineWidth;
        return $this;
    }

    /**
     * Set the minor tick color.
     *
     * @param string $minorTickColor The minor tick color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorTickColor($minorTickColor) {
        $this->minorTickColor = $minorTickColor;
        return $this;
    }

    /**
     * Set the minor tick interval.
     *
     * @param string|integer $minorTickInterval The minor tick interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorTickInterval($minorTickInterval) {
        $this->minorTickInterval = $minorTickInterval;
        return $this;
    }

    /**
     * Set the minor tick length.
     *
     * @param integer $minorTickLength The minor tick length.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorTickLength($minorTickLength) {
        $this->minorTickLength = $minorTickLength;
        return $this;
    }

    /**
     * Set the minor tick position.
     *
     * @param string $minorTickPosition The minor tick position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorTickPosition($minorTickPosition) {
        switch ($minorTickPosition) {
            case "inside":
            case "outside":
                $this->minorTickPosition = $minorTickPosition;
                break;
        }
        return $this;
    }

    /**
     * Set the minor tick width.
     *
     * @param integer $minorTickWidth The minor tick width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setMinorTickWidth($minorTickWidth) {
        $this->minorTickWidth = $minorTickWidth;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param integer $offset The offset.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the opposite.
     *
     * @param boolean $opposite The opposite.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setOpposite($opposite) {
        $this->opposite = $opposite;
        return $this;
    }

    /**
     * Set the plot bands.
     *
     * @param array $plotBands The plot bands.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setPlotBands(array $plotBands = null) {
        $this->plotBands = $plotBands;
        return $this;
    }

    /**
     * Set the plot lines.
     *
     * @param array $plotLines The plot lines.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setPlotLines(array $plotLines = null) {
        $this->plotLines = $plotLines;
        return $this;
    }

    /**
     * Set the reversed.
     *
     * @param boolean $reversed The reversed.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setReversed($reversed) {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * Set the reversed stacks.
     *
     * @param boolean $reversedStacks The reversed stacks.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setReversedStacks($reversedStacks) {
        $this->reversedStacks = $reversedStacks;
        return $this;
    }

    /**
     * Set the show empty.
     *
     * @param boolean $showEmpty The show empty.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setShowEmpty($showEmpty) {
        $this->showEmpty = $showEmpty;
        return $this;
    }

    /**
     * Set the show first label.
     *
     * @param boolean $showFirstLabel The show first label.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setShowFirstLabel($showFirstLabel) {
        $this->showFirstLabel = $showFirstLabel;
        return $this;
    }

    /**
     * Set the show last label.
     *
     * @param boolean $showLastLabel The show last label.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setShowLastLabel($showLastLabel) {
        $this->showLastLabel = $showLastLabel;
        return $this;
    }

    /**
     * Set the soft max.
     *
     * @param integer $softMax The soft max.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setSoftMax($softMax) {
        $this->softMax = $softMax;
        return $this;
    }

    /**
     * Set the soft min.
     *
     * @param integer $softMin The soft min.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setSoftMin($softMin) {
        $this->softMin = $softMin;
        return $this;
    }

    /**
     * Set the stack labels.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels $stackLabels The stack labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setStackLabels(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels $stackLabels = null) {
        $this->stackLabels = $stackLabels;
        return $this;
    }

    /**
     * Set the start of week.
     *
     * @param integer $startOfWeek The start of week.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setStartOfWeek($startOfWeek) {
        $this->startOfWeek = $startOfWeek;
        return $this;
    }

    /**
     * Set the start on tick.
     *
     * @param boolean $startOnTick The start on tick.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setStartOnTick($startOnTick) {
        $this->startOnTick = $startOnTick;
        return $this;
    }

    /**
     * Set the stops.
     *
     * @param array $stops The stops.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setStops(array $stops = null) {
        $this->stops = $stops;
        return $this;
    }

    /**
     * Set the tick amount.
     *
     * @param integer $tickAmount The tick amount.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickAmount($tickAmount) {
        $this->tickAmount = $tickAmount;
        return $this;
    }

    /**
     * Set the tick color.
     *
     * @param string $tickColor The tick color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickColor($tickColor) {
        $this->tickColor = $tickColor;
        return $this;
    }

    /**
     * Set the tick interval.
     *
     * @param integer $tickInterval The tick interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickInterval($tickInterval) {
        $this->tickInterval = $tickInterval;
        return $this;
    }

    /**
     * Set the tick length.
     *
     * @param integer $tickLength The tick length.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickLength($tickLength) {
        $this->tickLength = $tickLength;
        return $this;
    }

    /**
     * Set the tick pixel interval.
     *
     * @param integer $tickPixelInterval The tick pixel interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickPixelInterval($tickPixelInterval) {
        $this->tickPixelInterval = $tickPixelInterval;
        return $this;
    }

    /**
     * Set the tick position.
     *
     * @param string $tickPosition The tick position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickPosition($tickPosition) {
        switch ($tickPosition) {
            case "inside":
            case "outside":
                $this->tickPosition = $tickPosition;
                break;
        }
        return $this;
    }

    /**
     * Set the tick positioner.
     *
     * @param string $tickPositioner The tick positioner.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickPositioner($tickPositioner) {
        $this->tickPositioner = $tickPositioner;
        return $this;
    }

    /**
     * Set the tick positions.
     *
     * @param array $tickPositions The tick positions.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickPositions(array $tickPositions = null) {
        $this->tickPositions = $tickPositions;
        return $this;
    }

    /**
     * Set the tick width.
     *
     * @param integer $tickWidth The tick width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickWidth($tickWidth) {
        $this->tickWidth = $tickWidth;
        return $this;
    }

    /**
     * Set the tickmark placement.
     *
     * @param string $tickmarkPlacement The tickmark placement.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTickmarkPlacement($tickmarkPlacement) {
        switch ($tickmarkPlacement) {
            case null:
            case "between":
            case "on":
                $this->tickmarkPlacement = $tickmarkPlacement;
                break;
        }
        return $this;
    }

    /**
     * Set the title.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle $title The title.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setTitle(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle $title = null) {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setType($type) {
        switch ($type) {
            case "category":
            case "datetime":
            case "linear":
            case "logarithmic":
                $this->type = $type;
                break;
        }
        return $this;
    }

    /**
     * Set the unique names.
     *
     * @param boolean $uniqueNames The unique names.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setUniqueNames($uniqueNames) {
        $this->uniqueNames = $uniqueNames;
        return $this;
    }

    /**
     * Set the units.
     *
     * @param array $units The units.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setUnits(array $units = null) {
        $this->units = $units;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param boolean $visible The visible.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsYAxis Returns the highcharts y axis.
     */
    public function setVisible($visible) {
        $this->visible = $visible;
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

        // Check the allow decimals.
        if (!is_null($this->allowDecimals)) {
            $output["allowDecimals"] = $this->allowDecimals;
        }

        // Check the alternate grid color.
        if (!is_null($this->alternateGridColor)) {
            $output["alternateGridColor"] = $this->alternateGridColor;
        }

        // Check the angle.
        if (!is_null($this->angle)) {
            $output["angle"] = $this->angle;
        }

        // Check the breaks.
        if (!is_null($this->breaks)) {
            $output["breaks"] = $this->breaks;
        }

        // Check the categories.
        if (!is_null($this->categories)) {
            $output["categories"] = $this->categories;
        }

        // Check the ceiling.
        if (!is_null($this->ceiling)) {
            $output["ceiling"] = $this->ceiling;
        }

        // Check the class name.
        if (!is_null($this->className)) {
            $output["className"] = $this->className;
        }

        // Check the crosshair.
        if (!is_null($this->crosshair)) {
            $output["crosshair"] = $this->crosshair->toArray();
        }

        // Check the date time label formats.
        if (!is_null($this->dateTimeLabelFormats)) {
            $output["dateTimeLabelFormats"] = $this->dateTimeLabelFormats;
        }

        // Check the description.
        if (!is_null($this->description)) {
            $output["description"] = $this->description;
        }

        // Check the end on tick.
        if (!is_null($this->endOnTick)) {
            $output["endOnTick"] = $this->endOnTick;
        }

        // Check the events.
        if (!is_null($this->events)) {
            $output["events"] = $this->events->toArray();
        }

        // Check the floor.
        if (!is_null($this->floor)) {
            $output["floor"] = $this->floor;
        }

        // Check the grid line color.
        if (!is_null($this->gridLineColor)) {
            $output["gridLineColor"] = $this->gridLineColor;
        }

        // Check the grid line dash style.
        if (!is_null($this->gridLineDashStyle)) {
            $output["gridLineDashStyle"] = $this->gridLineDashStyle;
        }

        // Check the grid line interpolation.
        if (!is_null($this->gridLineInterpolation)) {
            $output["gridLineInterpolation"] = $this->gridLineInterpolation;
        }

        // Check the grid line width.
        if (!is_null($this->gridLineWidth)) {
            $output["gridLineWidth"] = $this->gridLineWidth;
        }

        // Check the grid z index.
        if (!is_null($this->gridZIndex)) {
            $output["gridZIndex"] = $this->gridZIndex;
        }

        // Check the id.
        if (!is_null($this->id)) {
            $output["id"] = $this->id;
        }

        // Check the labels.
        if (!is_null($this->labels)) {
            $output["labels"] = $this->labels->toArray();
        }

        // Check the line color.
        if (!is_null($this->lineColor)) {
            $output["lineColor"] = $this->lineColor;
        }

        // Check the line width.
        if (!is_null($this->lineWidth)) {
            $output["lineWidth"] = $this->lineWidth;
        }

        // Check the linked to.
        if (!is_null($this->linkedTo)) {
            $output["linkedTo"] = $this->linkedTo;
        }

        // Check the max.
        if (!is_null($this->max)) {
            $output["max"] = $this->max;
        }

        // Check the max color.
        if (!is_null($this->maxColor)) {
            $output["maxColor"] = $this->maxColor;
        }

        // Check the max padding.
        if (!is_null($this->maxPadding)) {
            $output["maxPadding"] = $this->maxPadding;
        }

        // Check the max zoom.
        if (!is_null($this->maxZoom)) {
            $output["maxZoom"] = $this->maxZoom;
        }

        // Check the min.
        if (!is_null($this->min)) {
            $output["min"] = $this->min;
        }

        // Check the min color.
        if (!is_null($this->minColor)) {
            $output["minColor"] = $this->minColor;
        }

        // Check the min padding.
        if (!is_null($this->minPadding)) {
            $output["minPadding"] = $this->minPadding;
        }

        // Check the min range.
        if (!is_null($this->minRange)) {
            $output["minRange"] = $this->minRange;
        }

        // Check the min tick interval.
        if (!is_null($this->minTickInterval)) {
            $output["minTickInterval"] = $this->minTickInterval;
        }

        // Check the minor grid line color.
        if (!is_null($this->minorGridLineColor)) {
            $output["minorGridLineColor"] = $this->minorGridLineColor;
        }

        // Check the minor grid line dash style.
        if (!is_null($this->minorGridLineDashStyle)) {
            $output["minorGridLineDashStyle"] = $this->minorGridLineDashStyle;
        }

        // Check the minor grid line width.
        if (!is_null($this->minorGridLineWidth)) {
            $output["minorGridLineWidth"] = $this->minorGridLineWidth;
        }

        // Check the minor tick color.
        if (!is_null($this->minorTickColor)) {
            $output["minorTickColor"] = $this->minorTickColor;
        }

        // Check the minor tick interval.
        if (!is_null($this->minorTickInterval)) {
            $output["minorTickInterval"] = $this->minorTickInterval;
        }

        // Check the minor tick length.
        if (!is_null($this->minorTickLength)) {
            $output["minorTickLength"] = $this->minorTickLength;
        }

        // Check the minor tick position.
        if (!is_null($this->minorTickPosition)) {
            $output["minorTickPosition"] = $this->minorTickPosition;
        }

        // Check the minor tick width.
        if (!is_null($this->minorTickWidth)) {
            $output["minorTickWidth"] = $this->minorTickWidth;
        }

        // Check the offset.
        if (!is_null($this->offset)) {
            $output["offset"] = $this->offset;
        }

        // Check the opposite.
        if (!is_null($this->opposite)) {
            $output["opposite"] = $this->opposite;
        }

        // Check the plot bands.
        if (!is_null($this->plotBands)) {
            $output["plotBands"] = $this->plotBands;
        }

        // Check the plot lines.
        if (!is_null($this->plotLines)) {
            $output["plotLines"] = $this->plotLines;
        }

        // Check the reversed.
        if (!is_null($this->reversed)) {
            $output["reversed"] = $this->reversed;
        }

        // Check the reversed stacks.
        if (!is_null($this->reversedStacks)) {
            $output["reversedStacks"] = $this->reversedStacks;
        }

        // Check the show empty.
        if (!is_null($this->showEmpty)) {
            $output["showEmpty"] = $this->showEmpty;
        }

        // Check the show first label.
        if (!is_null($this->showFirstLabel)) {
            $output["showFirstLabel"] = $this->showFirstLabel;
        }

        // Check the show last label.
        if (!is_null($this->showLastLabel)) {
            $output["showLastLabel"] = $this->showLastLabel;
        }

        // Check the soft max.
        if (!is_null($this->softMax)) {
            $output["softMax"] = $this->softMax;
        }

        // Check the soft min.
        if (!is_null($this->softMin)) {
            $output["softMin"] = $this->softMin;
        }

        // Check the stack labels.
        if (!is_null($this->stackLabels)) {
            $output["stackLabels"] = $this->stackLabels->toArray();
        }

        // Check the start of week.
        if (!is_null($this->startOfWeek)) {
            $output["startOfWeek"] = $this->startOfWeek;
        }

        // Check the start on tick.
        if (!is_null($this->startOnTick)) {
            $output["startOnTick"] = $this->startOnTick;
        }

        // Check the stops.
        if (!is_null($this->stops)) {
            $output["stops"] = $this->stops;
        }

        // Check the tick amount.
        if (!is_null($this->tickAmount)) {
            $output["tickAmount"] = $this->tickAmount;
        }

        // Check the tick color.
        if (!is_null($this->tickColor)) {
            $output["tickColor"] = $this->tickColor;
        }

        // Check the tick interval.
        if (!is_null($this->tickInterval)) {
            $output["tickInterval"] = $this->tickInterval;
        }

        // Check the tick length.
        if (!is_null($this->tickLength)) {
            $output["tickLength"] = $this->tickLength;
        }

        // Check the tick pixel interval.
        if (!is_null($this->tickPixelInterval)) {
            $output["tickPixelInterval"] = $this->tickPixelInterval;
        }

        // Check the tick position.
        if (!is_null($this->tickPosition)) {
            $output["tickPosition"] = $this->tickPosition;
        }

        // Check the tick positioner.
        if (!is_null($this->tickPositioner)) {
            $output["tickPositioner"] = $this->tickPositioner;
        }

        // Check the tick positions.
        if (!is_null($this->tickPositions)) {
            $output["tickPositions"] = $this->tickPositions;
        }

        // Check the tick width.
        if (!is_null($this->tickWidth)) {
            $output["tickWidth"] = $this->tickWidth;
        }

        // Check the tickmark placement.
        if (!is_null($this->tickmarkPlacement)) {
            $output["tickmarkPlacement"] = $this->tickmarkPlacement;
        }

        // Check the title.
        if (!is_null($this->title)) {
            $output["title"] = $this->title->toArray();
        }

        // Check the type.
        if (!is_null($this->type)) {
            $output["type"] = $this->type;
        }

        // Check the unique names.
        if (!is_null($this->uniqueNames)) {
            $output["uniqueNames"] = $this->uniqueNames;
        }

        // Check the units.
        if (!is_null($this->units)) {
            $output["units"] = $this->units;
        }

        // Check the visible.
        if (!is_null($this->visible)) {
            $output["visible"] = $this->visible;
        }

        // Return the output.
        return $output;
    }

}
