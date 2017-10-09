<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Waterfall;

use JsonSerializable;

/**
 * Highcharts point.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Waterfall
 * @version 5.0.14
 * @final
 */
final class HighchartsPoint implements JsonSerializable {

	/**
	 * Events.
	 *
	 * @var \WBW\HighchartsBundle\API\Chart\Series\Waterfall\Point\HighchartsEvents
	 */
	private $events;

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

		// Clear the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}
	}

	/**
	 * Get the events.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Waterfall\Point\HighchartsEvents Returns the events.
	 */
	public function getEvents() {
		return $this->events;
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
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Waterfall\Point\HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new \WBW\HighchartsBundle\API\Chart\Series\Waterfall\Point\HighchartsEvents();
		return $this->events;
	}

	/**
	 * Set the events.
	 *
	 * @param \WBW\HighchartsBundle\API\Chart\Series\Waterfall\Point\HighchartsEvents $events The events.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint Returns the highcharts point.
	 */
	public function setEvents(\WBW\HighchartsBundle\API\Chart\Series\Waterfall\Point\HighchartsEvents $events = null) {
		$this->events = $events;
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

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events->toArray();
		}

		// Return the output.
		return $output;
	}

}
