<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons;

use JsonSerializable;

/**
 * Highcharts context button.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons
 * @version 5.0.14
 * @final
 */
final class HighchartsContextButton implements JsonSerializable {

    /**
     * Align.
     *
     * @var string
     * @since 2.0
     */
    private $align = "right";

    /**
     * Enabled.
     *
     * @var boolean
     * @since 2.0
     */
    private $enabled = true;

    /**
     * Height.
     *
     * @var integer
     * @since 2.0
     */
    private $height = 20;

    /**
     * Menu items.
     *
     * @var array
     * @since 2.0
     */
    private $menuItems;

    /**
     * Onclick.
     *
     * @var string
     * @since 2.0
     */
    private $onclick;

    /**
     * Symbol.
     *
     * @var string
     * @since 2.0
     */
    private $symbol = "menu";

    /**
     * Symbol fill.
     *
     * @var string
     * @since 2.0
     */
    private $symbolFill = "#666666";

    /**
     * Symbol size.
     *
     * @var integer
     * @since 2.0
     */
    private $symbolSize = 14;

    /**
     * Symbol stroke.
     *
     * @var string
     * @since 2.0
     */
    private $symbolStroke = "#666666";

    /**
     * Symbol stroke width.
     *
     * @var integer
     * @since 2.0
     */
    private $symbolStrokeWidth = 1;

    /**
     * Symbol x.
     *
     * @var integer
     * @since 2.0
     */
    private $symbolX = 12.5;

    /**
     * Symbol y.
     *
     * @var integer
     * @since 2.0
     */
    private $symbolY = 10.5;

    /**
     * Text.
     *
     * @var string
     * @since 3.0
     */
    private $text;

    /**
     * Theme.
     *
     * @var array
     * @since 3.0
     */
    private $theme;

    /**
     * Vertical align.
     *
     * @var string
     * @since 2.0
     */
    private $verticalAlign = "top";

    /**
     * Width.
     *
     * @var integer
     * @since 2.0
     */
    private $width = 24;

    /**
     * X.
     *
     * @var integer
     * @since 2.0
     */
    private $x = -10;

    /**
     * Y.
     *
     * @var integer
     * @since 2.0
     */
    private $y = 0;

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

        // Clear the height.
        $this->height = null;

        // Clear the menu items.
        $this->menuItems = null;

        // Clear the onclick.
        $this->onclick = null;

        // Clear the symbol.
        $this->symbol = null;

        // Clear the symbol fill.
        $this->symbolFill = null;

        // Clear the symbol size.
        $this->symbolSize = null;

        // Clear the symbol stroke.
        $this->symbolStroke = null;

        // Clear the symbol stroke width.
        $this->symbolStrokeWidth = null;

        // Clear the symbol x.
        $this->symbolX = null;

        // Clear the symbol y.
        $this->symbolY = null;

        // Clear the text.
        $this->text = null;

        // Clear the theme.
        $this->theme = null;

        // Clear the vertical align.
        $this->verticalAlign = null;

        // Clear the width.
        $this->width = null;

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
     * @return boolean Returns the enabled.
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Get the height.
     *
     * @return integer Returns the height.
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Get the menu items.
     *
     * @return array Returns the menu items.
     */
    public function getMenuItems() {
        return $this->menuItems;
    }

    /**
     * Get the onclick.
     *
     * @return string Returns the onclick.
     */
    public function getOnclick() {
        return $this->onclick;
    }

    /**
     * Get the symbol.
     *
     * @return string Returns the symbol.
     */
    public function getSymbol() {
        return $this->symbol;
    }

    /**
     * Get the symbol fill.
     *
     * @return string Returns the symbol fill.
     */
    public function getSymbolFill() {
        return $this->symbolFill;
    }

    /**
     * Get the symbol size.
     *
     * @return integer Returns the symbol size.
     */
    public function getSymbolSize() {
        return $this->symbolSize;
    }

    /**
     * Get the symbol stroke.
     *
     * @return string Returns the symbol stroke.
     */
    public function getSymbolStroke() {
        return $this->symbolStroke;
    }

    /**
     * Get the symbol stroke width.
     *
     * @return integer Returns the symbol stroke width.
     */
    public function getSymbolStrokeWidth() {
        return $this->symbolStrokeWidth;
    }

    /**
     * Get the symbol x.
     *
     * @return integer Returns the symbol x.
     */
    public function getSymbolX() {
        return $this->symbolX;
    }

    /**
     * Get the symbol y.
     *
     * @return integer Returns the symbol y.
     */
    public function getSymbolY() {
        return $this->symbolY;
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
     * Get the theme.
     *
     * @return array Returns the theme.
     */
    public function getTheme() {
        return $this->theme;
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
     * Get the width.
     *
     * @return integer Returns the width.
     */
    public function getWidth() {
        return $this->width;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
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
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param integer $height The height.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the menu items.
     *
     * @param array $menuItems The menu items.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setMenuItems(array $menuItems = null) {
        $this->menuItems = $menuItems;
        return $this;
    }

    /**
     * Set the onclick.
     *
     * @param string $onclick The onclick.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setOnclick($onclick) {
        $this->onclick = $onclick;
        return $this;
    }

    /**
     * Set the symbol.
     *
     * @param string $symbol The symbol.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbol($symbol) {
        switch ($symbol) {
            case "circle":
            case "diamond":
            case "menu":
            case "square":
            case "triangle":
            case "triangle-down":
                $this->symbol = $symbol;
                break;
        }
        return $this;
    }

    /**
     * Set the symbol fill.
     *
     * @param string $symbolFill The symbol fill.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbolFill($symbolFill) {
        $this->symbolFill = $symbolFill;
        return $this;
    }

    /**
     * Set the symbol size.
     *
     * @param integer $symbolSize The symbol size.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbolSize($symbolSize) {
        $this->symbolSize = $symbolSize;
        return $this;
    }

    /**
     * Set the symbol stroke.
     *
     * @param string $symbolStroke The symbol stroke.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbolStroke($symbolStroke) {
        $this->symbolStroke = $symbolStroke;
        return $this;
    }

    /**
     * Set the symbol stroke width.
     *
     * @param integer $symbolStrokeWidth The symbol stroke width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbolStrokeWidth($symbolStrokeWidth) {
        $this->symbolStrokeWidth = $symbolStrokeWidth;
        return $this;
    }

    /**
     * Set the symbol x.
     *
     * @param integer $symbolX The symbol x.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbolX($symbolX) {
        $this->symbolX = $symbolX;
        return $this;
    }

    /**
     * Set the symbol y.
     *
     * @param integer $symbolY The symbol y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setSymbolY($symbolY) {
        $this->symbolY = $symbolY;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string $text The text.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the theme.
     *
     * @param array $theme The theme.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setTheme(array $theme = null) {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string $verticalAlign The vertical align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
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
     * Set the width.
     *
     * @param integer $width The width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param integer $x The x.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param integer $y The y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the highcharts context button.
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

        // Check the height.
        if (!is_null($this->height)) {
            $output["height"] = $this->height;
        }

        // Check the menu items.
        if (!is_null($this->menuItems)) {
            $output["menuItems"] = $this->menuItems;
        }

        // Check the onclick.
        if (!is_null($this->onclick)) {
            $output["onclick"] = $this->onclick;
        }

        // Check the symbol.
        if (!is_null($this->symbol)) {
            $output["symbol"] = $this->symbol;
        }

        // Check the symbol fill.
        if (!is_null($this->symbolFill)) {
            $output["symbolFill"] = $this->symbolFill;
        }

        // Check the symbol size.
        if (!is_null($this->symbolSize)) {
            $output["symbolSize"] = $this->symbolSize;
        }

        // Check the symbol stroke.
        if (!is_null($this->symbolStroke)) {
            $output["symbolStroke"] = $this->symbolStroke;
        }

        // Check the symbol stroke width.
        if (!is_null($this->symbolStrokeWidth)) {
            $output["symbolStrokeWidth"] = $this->symbolStrokeWidth;
        }

        // Check the symbol x.
        if (!is_null($this->symbolX)) {
            $output["symbolX"] = $this->symbolX;
        }

        // Check the symbol y.
        if (!is_null($this->symbolY)) {
            $output["symbolY"] = $this->symbolY;
        }

        // Check the text.
        if (!is_null($this->text)) {
            $output["text"] = $this->text;
        }

        // Check the theme.
        if (!is_null($this->theme)) {
            $output["theme"] = $this->theme;
        }

        // Check the vertical align.
        if (!is_null($this->verticalAlign)) {
            $output["verticalAlign"] = $this->verticalAlign;
        }

        // Check the width.
        if (!is_null($this->width)) {
            $output["width"] = $this->width;
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
