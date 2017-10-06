<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts title.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsTitle implements JsonSerializable {

	/**
	 * Align.
	 *
	 * @var string
	 * @since 2.0
	 */
	private $align = "center";

	/**
	 * Floating.
	 *
	 * @var boolean
	 * @since 2.1
	 */
	private $floating = false;

	/**
	 * Margin.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $margin = 15;

	/**
	 * Style.
	 *
	 * @var array
	 */
	private $style = ["color" => "#333333", "fontSize" => "18px"];

	/**
	 * Text.
	 *
	 * @var string
	 */
	private $text = "Chart title";

	/**
	 * Use HTML.
	 *
	 * @var boolean
	 */
	private $useHTML = false;

	/**
	 * Vertical align.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $verticalAlign;

	/**
	 * Width adjust.
	 *
	 * @var integer
	 * @since 4.2.5
	 */
	private $widthAdjust = -44;

	/**
	 * X.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $x = 0;

	/**
	 * Y.
	 *
	 * @var integer
	 * @since 2.0
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

		// Check the align.
		if (!is_null($this->align)) {
			$this->align = null;
		}

		// Check the floating.
		if (!is_null($this->floating)) {
			$this->floating = null;
		}

		// Check the margin.
		if (!is_null($this->margin)) {
			$this->margin = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}

		// Check the text.
		if (!is_null($this->text)) {
			$this->text = null;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$this->useHTML = null;
		}

		// Check the vertical align.
		if (!is_null($this->verticalAlign)) {
			$this->verticalAlign = null;
		}

		// Check the width adjust.
		if (!is_null($this->widthAdjust)) {
			$this->widthAdjust = null;
		}

		// Check the x.
		if (!is_null($this->x)) {
			$this->x = null;
		}

		// Check the y.
		if (!is_null($this->y)) {
			$this->y = null;
		}
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
	 * Get the floating.
	 *
	 * @return boolean Returns the floating.
	 */
	public function getFloating() {
		return $this->floating;
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
	 * Get the use HTML.
	 *
	 * @return boolean Returns the use HTML.
	 */
	public function getUseHTML() {
		return $this->useHTML;
	}

	/**
	 * Get the vertical align.
	 *
	 * @return string Returns the vertical align.
	 */
	public function getVerticalAlign() {
		return $this->verticalAlign;
	}

	/**
	 * Get the width adjust.
	 *
	 * @return integer Returns the width adjust.
	 */
	public function getWidthAdjust() {
		return $this->widthAdjust;
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
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setAlign($align) {
		switch ($align) {
			case "center":
			case "left":
			case "right":
				$this->align = $align;
				break;
		}
		return $this;
	}

	/**
	 * Set the floating.
	 *
	 * @param boolean $floating The floating.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setFloating($floating) {
		$this->floating = $floating;
		return $this;
	}

	/**
	 * Set the margin.
	 *
	 * @param integer $margin The margin.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setMargin($margin) {
		$this->margin = $margin;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the text.
	 *
	 * @param string $text The text.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setText($text) {
		$this->text = $text;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
		return $this;
	}

	/**
	 * Set the vertical align.
	 *
	 * @param string $verticalAlign The vertical align.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setVerticalAlign($verticalAlign) {
		switch ($verticalAlign) {
			case "bottom":
			case "middle":
			case "top":
				$this->verticalAlign = $verticalAlign;
				break;
		}
		return $this;
	}

	/**
	 * Set the width adjust.
	 *
	 * @param integer $widthAdjust The width adjust.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setWidthAdjust($widthAdjust) {
		$this->widthAdjust = $widthAdjust;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return \WBW\HighchartsBundle\API\Chart\HighchartsTitle Returns the highcharts title.
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

		// Check the floating.
		if (!is_null($this->floating)) {
			$output["floating"] = $this->floating;
		}

		// Check the margin.
		if (!is_null($this->margin)) {
			$output["margin"] = $this->margin;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the text.
		if (!is_null($this->text)) {
			$output["text"] = $this->text;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$output["useHTML"] = $this->useHTML;
		}

		// Check the vertical align.
		if (!is_null($this->verticalAlign)) {
			$output["verticalAlign"] = $this->verticalAlign;
		}

		// Check the width adjust.
		if (!is_null($this->widthAdjust)) {
			$output["widthAdjust"] = $this->widthAdjust;
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
