<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\XAxis;

use JsonSerializable;

/**
 * Highcharts crosshair.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\XAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsCrosshair implements JsonSerializable {

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
	 * @since 4.1
	 */
	private $color;

	/**
	 * Dash style.
	 *
	 * @var string
	 * @since 4.1
	 */
	private $dashStyle = "Solid";

	/**
	 * Snap.
	 *
	 * @var boolean
	 * @since 4.1
	 */
	private $snap = true;

	/**
	 * Width.
	 *
	 * @var integer
	 * @since 4.1
	 */
	private $width;

	/**
	 * Z index.
	 *
	 * @var integer
	 * @since 4.1
	 */
	private $zIndex = 2;

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

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$this->dashStyle = null;
		}

		// Check the snap.
		if (!is_null($this->snap)) {
			$this->snap = null;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$this->width = null;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$this->zIndex = null;
		}
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
	 * Get the dash style.
	 *
	 * @return string Returns the dash style.
	 */
	public function getDashStyle() {
		return $this->dashStyle;
	}

	/**
	 * Get the snap.
	 *
	 * @return boolean Returns the snap.
	 */
	public function getSnap() {
		return $this->snap;
	}

	/**
	 * Get the width.
	 *
	 * @return integer Returns the width.
	 */
	public function getWidth() {
		return $this->width;
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
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsCrosshair Returns the highcharts crosshair.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsCrosshair Returns the highcharts crosshair.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the dash style.
	 *
	 * @param string $dashStyle The dash style.
	 * @return HighchartsCrosshair Returns the highcharts crosshair.
	 */
	public function setDashStyle($dashStyle) {
		$this->dashStyle = $dashStyle;
		return $this;
	}

	/**
	 * Set the snap.
	 *
	 * @param boolean $snap The snap.
	 * @return HighchartsCrosshair Returns the highcharts crosshair.
	 */
	public function setSnap($snap) {
		$this->snap = $snap;
		return $this;
	}

	/**
	 * Set the width.
	 *
	 * @param integer $width The width.
	 * @return HighchartsCrosshair Returns the highcharts crosshair.
	 */
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return HighchartsCrosshair Returns the highcharts crosshair.
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

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$output["dashStyle"] = $this->dashStyle;
		}

		// Check the snap.
		if (!is_null($this->snap)) {
			$output["snap"] = $this->snap;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$output["width"] = $this->width;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
		}

		// Return the output.
		return $output;
	}
}

