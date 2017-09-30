<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsStates;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip;

/**
 * Highcharts errorbar.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\PlotOptions
 * @version 5.0.14
 * @final
 */
final class HighchartsErrorbar implements JsonSerializable {

	/**
	 * Allow point select.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $allowPointSelect = false;

	/**
	 * Animation limit.
	 *
	 * @var integer
	 */
	private $animationLimit;

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
	 * @since 3.0
	 */
	private $color = "#000000";

	/**
	 * Color by point.
	 *
	 * @var boolean
	 * @since 2.0
	 */
	private $colorByPoint = false;

	/**
	 * Color index.
	 *
	 * @var integer
	 * @since 5.0.0
	 */
	private $colorIndex;

	/**
	 * Colors.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $colors;

	/**
	 * Crisp.
	 *
	 * @var boolean
	 * @since 5.0.10
	 */
	private $crisp = true;

	/**
	 * Cursor.
	 *
	 * @var string
	 */
	private $cursor;

	/**
	 * Depth.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $depth = 25;

	/**
	 * Description.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $description;

	/**
	 * Edge color.
	 *
	 * @var string
	 */
	private $edgeColor;

	/**
	 * Edge width.
	 *
	 * @var integer
	 */
	private $edgeWidth = 1;

	/**
	 * Enable mouse tracking.
	 *
	 * @var boolean
	 */
	private $enableMouseTracking = true;

	/**
	 * Events.
	 *
	 * @var HighchartsEvents
	 */
	private $events;

	/**
	 * Expose element to a11y.
	 *
	 * @var boolean
	 * @since 5.0.12
	 */
	private $exposeElementToA11y;

	/**
	 * Find nearest point by.
	 *
	 * @var string
	 * @since 5.0.10
	 */
	private $findNearestPointBy;

	/**
	 * Get extremes from all.
	 *
	 * @var boolean
	 * @since 4.1.6
	 */
	private $getExtremesFromAll = false;

	/**
	 * Group z padding.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $groupZPadding = 1;

	/**
	 * Keys.
	 *
	 * @var array
	 * @since 4.1.6
	 */
	private $keys;

	/**
	 * Line width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $lineWidth = 1;

	/**
	 * Linked to.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $linkedTo = ":previous";

	/**
	 * Max point width.
	 *
	 * @var integer
	 * @since 4.1.8
	 */
	private $maxPointWidth;

	/**
	 * Negative color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $negativeColor;

	/**
	 * Point.
	 *
	 * @var HighchartsPoint
	 */
	private $point;

	/**
	 * Point description formatter.
	 *
	 * @var string
	 * @since 5.0.12
	 */
	private $pointDescriptionFormatter;

	/**
	 * Point interval.
	 *
	 * @var integer
	 */
	private $pointInterval = 1;

	/**
	 * Point interval unit.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $pointIntervalUnit;

	/**
	 * Point padding.
	 *
	 * @var integer
	 */
	private $pointPadding = 0.1;

	/**
	 * Point placement.
	 *
	 * @var string|integer
	 * @since 2.3.0
	 */
	private $pointPlacement;

	/**
	 * Point range.
	 *
	 * @var integer
	 * @since 2.3
	 */
	private $pointRange;

	/**
	 * Point start.
	 *
	 * @var integer
	 */
	private $pointStart = 0;

	/**
	 * Point width.
	 *
	 * @var integer
	 * @since 1.2.5
	 */
	private $pointWidth;

	/**
	 * Selected.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $selected = false;

	/**
	 * Skip keyboard navigation.
	 *
	 * @var boolean
	 * @since 5.0.12
	 */
	private $skipKeyboardNavigation;

	/**
	 * States.
	 *
	 * @var HighchartsStates
	 */
	private $states;

	/**
	 * Stem color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $stemColor;

	/**
	 * Stem dash style.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $stemDashStyle = "Solid";

	/**
	 * Stem width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $stemWidth;

	/**
	 * Sticky tracking.
	 *
	 * @var boolean
	 * @since 2.0
	 */
	private $stickyTracking = true;

	/**
	 * Tooltip.
	 *
	 * @var HighchartsTooltip
	 * @since 2.3
	 */
	private $tooltip;

	/**
	 * Turbo threshold.
	 *
	 * @var integer
	 * @since 2.2
	 */
	private $turboThreshold = 1000;

	/**
	 * Visible.
	 *
	 * @var boolean
	 */
	private $visible = true;

	/**
	 * Whisker color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $whiskerColor;

	/**
	 * Whisker length.
	 *
	 * @var integer|string
	 * @since 3.0
	 */
	private $whiskerLength = "50%";

	/**
	 * Whisker width.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $whiskerWidth;

	/**
	 * Zone axis.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $zoneAxis = "y";

	/**
	 * Zones.
	 *
	 * @var array
	 * @since 4.1.0
	 */
	private $zones;

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
	 */
	public function clear() {

		// Check the allow point select.
		if (!is_null($this->allowPointSelect)) {
			$this->allowPointSelect = null;
		}

		// Check the animation limit.
		if (!is_null($this->animationLimit)) {
			$this->animationLimit = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the color by point.
		if (!is_null($this->colorByPoint)) {
			$this->colorByPoint = null;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$this->colorIndex = null;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$this->colors = null;
		}

		// Check the crisp.
		if (!is_null($this->crisp)) {
			$this->crisp = null;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$this->cursor = null;
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$this->depth = null;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the edge color.
		if (!is_null($this->edgeColor)) {
			$this->edgeColor = null;
		}

		// Check the edge width.
		if (!is_null($this->edgeWidth)) {
			$this->edgeWidth = null;
		}

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$this->enableMouseTracking = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}

		// Check the expose element to a11y.
		if (!is_null($this->exposeElementToA11y)) {
			$this->exposeElementToA11y = null;
		}

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$this->findNearestPointBy = null;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$this->getExtremesFromAll = null;
		}

		// Check the group z padding.
		if (!is_null($this->groupZPadding)) {
			$this->groupZPadding = null;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$this->keys = null;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$this->lineWidth = null;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$this->linkedTo = null;
		}

		// Check the max point width.
		if (!is_null($this->maxPointWidth)) {
			$this->maxPointWidth = null;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$this->negativeColor = null;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$this->point->clear();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$this->pointDescriptionFormatter = null;
		}

		// Check the point interval.
		if (!is_null($this->pointInterval)) {
			$this->pointInterval = null;
		}

		// Check the point interval unit.
		if (!is_null($this->pointIntervalUnit)) {
			$this->pointIntervalUnit = null;
		}

		// Check the point padding.
		if (!is_null($this->pointPadding)) {
			$this->pointPadding = null;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$this->pointPlacement = null;
		}

		// Check the point range.
		if (!is_null($this->pointRange)) {
			$this->pointRange = null;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$this->pointStart = null;
		}

		// Check the point width.
		if (!is_null($this->pointWidth)) {
			$this->pointWidth = null;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$this->selected = null;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$this->skipKeyboardNavigation = null;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$this->states->clear();
		}

		// Check the stem color.
		if (!is_null($this->stemColor)) {
			$this->stemColor = null;
		}

		// Check the stem dash style.
		if (!is_null($this->stemDashStyle)) {
			$this->stemDashStyle = null;
		}

		// Check the stem width.
		if (!is_null($this->stemWidth)) {
			$this->stemWidth = null;
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$this->stickyTracking = null;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$this->tooltip->clear();
		}

		// Check the turbo threshold.
		if (!is_null($this->turboThreshold)) {
			$this->turboThreshold = null;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$this->visible = null;
		}

		// Check the whisker color.
		if (!is_null($this->whiskerColor)) {
			$this->whiskerColor = null;
		}

		// Check the whisker length.
		if (!is_null($this->whiskerLength)) {
			$this->whiskerLength = null;
		}

		// Check the whisker width.
		if (!is_null($this->whiskerWidth)) {
			$this->whiskerWidth = null;
		}

		// Check the zone axis.
		if (!is_null($this->zoneAxis)) {
			$this->zoneAxis = null;
		}

		// Check the zones.
		if (!is_null($this->zones)) {
			$this->zones = null;
		}
	}

	/**
	 * Get the allow point select.
	 *
	 * @return boolean Returns the allow point select.
	 */
	public function getAllowPointSelect() {
		return $this->allowPointSelect;
	}

	/**
	 * Get the animation limit.
	 *
	 * @return integer Returns the animation limit.
	 */
	public function getAnimationLimit() {
		return $this->animationLimit;
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
	 * Get the color by point.
	 *
	 * @return boolean Returns the color by point.
	 */
	public function getColorByPoint() {
		return $this->colorByPoint;
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
	 * Get the colors.
	 *
	 * @return array Returns the colors.
	 */
	public function getColors() {
		return $this->colors;
	}

	/**
	 * Get the crisp.
	 *
	 * @return boolean Returns the crisp.
	 */
	public function getCrisp() {
		return $this->crisp;
	}

	/**
	 * Get the cursor.
	 *
	 * @return string Returns the cursor.
	 */
	public function getCursor() {
		return $this->cursor;
	}

	/**
	 * Get the depth.
	 *
	 * @return integer Returns the depth.
	 */
	public function getDepth() {
		return $this->depth;
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
	 * Get the edge color.
	 *
	 * @return string Returns the edge color.
	 */
	public function getEdgeColor() {
		return $this->edgeColor;
	}

	/**
	 * Get the edge width.
	 *
	 * @return integer Returns the edge width.
	 */
	public function getEdgeWidth() {
		return $this->edgeWidth;
	}

	/**
	 * Get the enable mouse tracking.
	 *
	 * @return boolean Returns the enable mouse tracking.
	 */
	public function getEnableMouseTracking() {
		return $this->enableMouseTracking;
	}

	/**
	 * Get the events.
	 *
	 * @return HighchartsEvents Returns the events.
	 */
	public function getEvents() {
		return $this->events;
	}

	/**
	 * Get the expose element to a11y.
	 *
	 * @return boolean Returns the expose element to a11y.
	 */
	public function getExposeElementToA11y() {
		return $this->exposeElementToA11y;
	}

	/**
	 * Get the find nearest point by.
	 *
	 * @return string Returns the find nearest point by.
	 */
	public function getFindNearestPointBy() {
		return $this->findNearestPointBy;
	}

	/**
	 * Get the get extremes from all.
	 *
	 * @return boolean Returns the get extremes from all.
	 */
	public function getGetExtremesFromAll() {
		return $this->getExtremesFromAll;
	}

	/**
	 * Get the group z padding.
	 *
	 * @return integer Returns the group z padding.
	 */
	public function getGroupZPadding() {
		return $this->groupZPadding;
	}

	/**
	 * Get the keys.
	 *
	 * @return array Returns the keys.
	 */
	public function getKeys() {
		return $this->keys;
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
	 * @return string Returns the linked to.
	 */
	public function getLinkedTo() {
		return $this->linkedTo;
	}

	/**
	 * Get the max point width.
	 *
	 * @return integer Returns the max point width.
	 */
	public function getMaxPointWidth() {
		return $this->maxPointWidth;
	}

	/**
	 * Get the negative color.
	 *
	 * @return string Returns the negative color.
	 */
	public function getNegativeColor() {
		return $this->negativeColor;
	}

	/**
	 * Get the point.
	 *
	 * @return HighchartsPoint Returns the point.
	 */
	public function getPoint() {
		return $this->point;
	}

	/**
	 * Get the point description formatter.
	 *
	 * @return string Returns the point description formatter.
	 */
	public function getPointDescriptionFormatter() {
		return $this->pointDescriptionFormatter;
	}

	/**
	 * Get the point interval.
	 *
	 * @return integer Returns the point interval.
	 */
	public function getPointInterval() {
		return $this->pointInterval;
	}

	/**
	 * Get the point interval unit.
	 *
	 * @return string Returns the point interval unit.
	 */
	public function getPointIntervalUnit() {
		return $this->pointIntervalUnit;
	}

	/**
	 * Get the point padding.
	 *
	 * @return integer Returns the point padding.
	 */
	public function getPointPadding() {
		return $this->pointPadding;
	}

	/**
	 * Get the point placement.
	 *
	 * @return string|integer Returns the point placement.
	 */
	public function getPointPlacement() {
		return $this->pointPlacement;
	}

	/**
	 * Get the point range.
	 *
	 * @return integer Returns the point range.
	 */
	public function getPointRange() {
		return $this->pointRange;
	}

	/**
	 * Get the point start.
	 *
	 * @return integer Returns the point start.
	 */
	public function getPointStart() {
		return $this->pointStart;
	}

	/**
	 * Get the point width.
	 *
	 * @return integer Returns the point width.
	 */
	public function getPointWidth() {
		return $this->pointWidth;
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
	 * Get the skip keyboard navigation.
	 *
	 * @return boolean Returns the skip keyboard navigation.
	 */
	public function getSkipKeyboardNavigation() {
		return $this->skipKeyboardNavigation;
	}

	/**
	 * Get the states.
	 *
	 * @return HighchartsStates Returns the states.
	 */
	public function getStates() {
		return $this->states;
	}

	/**
	 * Get the stem color.
	 *
	 * @return string Returns the stem color.
	 */
	public function getStemColor() {
		return $this->stemColor;
	}

	/**
	 * Get the stem dash style.
	 *
	 * @return string Returns the stem dash style.
	 */
	public function getStemDashStyle() {
		return $this->stemDashStyle;
	}

	/**
	 * Get the stem width.
	 *
	 * @return integer Returns the stem width.
	 */
	public function getStemWidth() {
		return $this->stemWidth;
	}

	/**
	 * Get the sticky tracking.
	 *
	 * @return boolean Returns the sticky tracking.
	 */
	public function getStickyTracking() {
		return $this->stickyTracking;
	}

	/**
	 * Get the tooltip.
	 *
	 * @return HighchartsTooltip Returns the tooltip.
	 */
	public function getTooltip() {
		return $this->tooltip;
	}

	/**
	 * Get the turbo threshold.
	 *
	 * @return integer Returns the turbo threshold.
	 */
	public function getTurboThreshold() {
		return $this->turboThreshold;
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
	 * Get the whisker color.
	 *
	 * @return string Returns the whisker color.
	 */
	public function getWhiskerColor() {
		return $this->whiskerColor;
	}

	/**
	 * Get the whisker length.
	 *
	 * @return integer|string Returns the whisker length.
	 */
	public function getWhiskerLength() {
		return $this->whiskerLength;
	}

	/**
	 * Get the whisker width.
	 *
	 * @return integer Returns the whisker width.
	 */
	public function getWhiskerWidth() {
		return $this->whiskerWidth;
	}

	/**
	 * Get the zone axis.
	 *
	 * @return string Returns the zone axis.
	 */
	public function getZoneAxis() {
		return $this->zoneAxis;
	}

	/**
	 * Get the zones.
	 *
	 * @return array Returns the zones.
	 */
	public function getZones() {
		return $this->zones;
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
	 * @return HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new point.
	 *
	 * @return HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new HighchartsPoint();
		return $this->point;
	}

	/**
	 * Create a new states.
	 *
	 * @return HighchartsStates Returns the states.
	 */
	public function newStates() {
		$this->states = new HighchartsStates();
		return $this->states;
	}

	/**
	 * Create a new tooltip.
	 *
	 * @return HighchartsTooltip Returns the tooltip.
	 */
	public function newTooltip() {
		$this->tooltip = new HighchartsTooltip();
		return $this->tooltip;
	}

	/**
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the color by point.
	 *
	 * @param boolean $colorByPoint The color by point.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setColorByPoint($colorByPoint) {
		$this->colorByPoint = $colorByPoint;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the crisp.
	 *
	 * @param boolean $crisp The crisp.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setCrisp($crisp) {
		$this->crisp = $crisp;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setCursor($cursor) {
		$this->cursor = $cursor;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the edge color.
	 *
	 * @param string $edgeColor The edge color.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setEdgeColor($edgeColor) {
		$this->edgeColor = $edgeColor;
		return $this;
	}

	/**
	 * Set the edge width.
	 *
	 * @param integer $edgeWidth The edge width.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setEdgeWidth($edgeWidth) {
		$this->edgeWidth = $edgeWidth;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setFindNearestPointBy($findNearestPointBy) {
		$this->findNearestPointBy = $findNearestPointBy;
		return $this;
	}

	/**
	 * Set the get extremes from all.
	 *
	 * @param boolean $getExtremesFromAll The get extremes from all.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the group z padding.
	 *
	 * @param integer $groupZPadding The group z padding.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setGroupZPadding($groupZPadding) {
		$this->groupZPadding = $groupZPadding;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the max point width.
	 *
	 * @param integer $maxPointWidth The max point width.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setMaxPointWidth($maxPointWidth) {
		$this->maxPointWidth = $maxPointWidth;
		return $this;
	}

	/**
	 * Set the negative color.
	 *
	 * @param string $negativeColor The negative color.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setNegativeColor($negativeColor) {
		$this->negativeColor = $negativeColor;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param HighchartsPoint $point The point.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPoint(HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the point interval.
	 *
	 * @param integer $pointInterval The point interval.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointInterval($pointInterval) {
		$this->pointInterval = $pointInterval;
		return $this;
	}

	/**
	 * Set the point interval unit.
	 *
	 * @param string $pointIntervalUnit The point interval unit.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointIntervalUnit($pointIntervalUnit) {
		$this->pointIntervalUnit = $pointIntervalUnit;
		return $this;
	}

	/**
	 * Set the point padding.
	 *
	 * @param integer $pointPadding The point padding.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointPadding($pointPadding) {
		$this->pointPadding = $pointPadding;
		return $this;
	}

	/**
	 * Set the point placement.
	 *
	 * @param string|integer $pointPlacement The point placement.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointPlacement($pointPlacement) {
		$this->pointPlacement = $pointPlacement;
		return $this;
	}

	/**
	 * Set the point range.
	 *
	 * @param integer $pointRange The point range.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointRange($pointRange) {
		$this->pointRange = $pointRange;
		return $this;
	}

	/**
	 * Set the point start.
	 *
	 * @param integer $pointStart The point start.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointStart($pointStart) {
		$this->pointStart = $pointStart;
		return $this;
	}

	/**
	 * Set the point width.
	 *
	 * @param integer $pointWidth The point width.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setPointWidth($pointWidth) {
		$this->pointWidth = $pointWidth;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param HighchartsStates $states The states.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setStates(HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the stem color.
	 *
	 * @param string $stemColor The stem color.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setStemColor($stemColor) {
		$this->stemColor = $stemColor;
		return $this;
	}

	/**
	 * Set the stem dash style.
	 *
	 * @param string $stemDashStyle The stem dash style.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setStemDashStyle($stemDashStyle) {
		$this->stemDashStyle = $stemDashStyle;
		return $this;
	}

	/**
	 * Set the stem width.
	 *
	 * @param integer $stemWidth The stem width.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setStemWidth($stemWidth) {
		$this->stemWidth = $stemWidth;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param HighchartsTooltip $tooltip The tooltip.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setTooltip(HighchartsTooltip $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the turbo threshold.
	 *
	 * @param integer $turboThreshold The turbo threshold.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setTurboThreshold($turboThreshold) {
		$this->turboThreshold = $turboThreshold;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the whisker color.
	 *
	 * @param string $whiskerColor The whisker color.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setWhiskerColor($whiskerColor) {
		$this->whiskerColor = $whiskerColor;
		return $this;
	}

	/**
	 * Set the whisker length.
	 *
	 * @param integer|string $whiskerLength The whisker length.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setWhiskerLength($whiskerLength) {
		$this->whiskerLength = $whiskerLength;
		return $this;
	}

	/**
	 * Set the whisker width.
	 *
	 * @param integer $whiskerWidth The whisker width.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setWhiskerWidth($whiskerWidth) {
		$this->whiskerWidth = $whiskerWidth;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return HighchartsErrorbar Returns the highcharts errorbar.
	 */
	public function setZones(array $zones = null) {
		$this->zones = $zones;
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

		// Check the allow point select.
		if (!is_null($this->allowPointSelect)) {
			$output["allowPointSelect"] = $this->allowPointSelect;
		}

		// Check the animation limit.
		if (!is_null($this->animationLimit)) {
			$output["animationLimit"] = $this->animationLimit;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the color by point.
		if (!is_null($this->colorByPoint)) {
			$output["colorByPoint"] = $this->colorByPoint;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$output["colors"] = $this->colors;
		}

		// Check the crisp.
		if (!is_null($this->crisp)) {
			$output["crisp"] = $this->crisp;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$output["cursor"] = $this->cursor;
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$output["depth"] = $this->depth;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the edge color.
		if (!is_null($this->edgeColor)) {
			$output["edgeColor"] = $this->edgeColor;
		}

		// Check the edge width.
		if (!is_null($this->edgeWidth)) {
			$output["edgeWidth"] = $this->edgeWidth;
		}

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$output["enableMouseTracking"] = $this->enableMouseTracking;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events->toArray();
		}

		// Check the expose element to a11y.
		if (!is_null($this->exposeElementToA11y)) {
			$output["exposeElementToA11y"] = $this->exposeElementToA11y;
		}

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$output["findNearestPointBy"] = $this->findNearestPointBy;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$output["getExtremesFromAll"] = $this->getExtremesFromAll;
		}

		// Check the group z padding.
		if (!is_null($this->groupZPadding)) {
			$output["groupZPadding"] = $this->groupZPadding;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the max point width.
		if (!is_null($this->maxPointWidth)) {
			$output["maxPointWidth"] = $this->maxPointWidth;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$output["negativeColor"] = $this->negativeColor;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$output["point"] = $this->point->toArray();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
		}

		// Check the point interval.
		if (!is_null($this->pointInterval)) {
			$output["pointInterval"] = $this->pointInterval;
		}

		// Check the point interval unit.
		if (!is_null($this->pointIntervalUnit)) {
			$output["pointIntervalUnit"] = $this->pointIntervalUnit;
		}

		// Check the point padding.
		if (!is_null($this->pointPadding)) {
			$output["pointPadding"] = $this->pointPadding;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$output["pointPlacement"] = $this->pointPlacement;
		}

		// Check the point range.
		if (!is_null($this->pointRange)) {
			$output["pointRange"] = $this->pointRange;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$output["pointStart"] = $this->pointStart;
		}

		// Check the point width.
		if (!is_null($this->pointWidth)) {
			$output["pointWidth"] = $this->pointWidth;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$output["skipKeyboardNavigation"] = $this->skipKeyboardNavigation;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$output["states"] = $this->states->toArray();
		}

		// Check the stem color.
		if (!is_null($this->stemColor)) {
			$output["stemColor"] = $this->stemColor;
		}

		// Check the stem dash style.
		if (!is_null($this->stemDashStyle)) {
			$output["stemDashStyle"] = $this->stemDashStyle;
		}

		// Check the stem width.
		if (!is_null($this->stemWidth)) {
			$output["stemWidth"] = $this->stemWidth;
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$output["stickyTracking"] = $this->stickyTracking;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$output["tooltip"] = $this->tooltip->toArray();
		}

		// Check the turbo threshold.
		if (!is_null($this->turboThreshold)) {
			$output["turboThreshold"] = $this->turboThreshold;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the whisker color.
		if (!is_null($this->whiskerColor)) {
			$output["whiskerColor"] = $this->whiskerColor;
		}

		// Check the whisker length.
		if (!is_null($this->whiskerLength)) {
			$output["whiskerLength"] = $this->whiskerLength;
		}

		// Check the whisker width.
		if (!is_null($this->whiskerWidth)) {
			$output["whiskerWidth"] = $this->whiskerWidth;
		}

		// Check the zone axis.
		if (!is_null($this->zoneAxis)) {
			$output["zoneAxis"] = $this->zoneAxis;
		}

		// Check the zones.
		if (!is_null($this->zones)) {
			$output["zones"] = $this->zones;
		}

		// Return the output.
		return $output;
	}
}

