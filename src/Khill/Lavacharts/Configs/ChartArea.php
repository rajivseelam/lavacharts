<?php namespace Khill\Lavacharts\Configs;

/**
 * ChartArea Properties Object
 *
 * An object containing all the values for the chartArea which can be
 * passed into the chart's options.
 *
 *
 * @package    Lavacharts
 * @subpackage Configs
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2014, KHill Designs
 * @link       http://github.com/kevinkhill/Lavacharts GitHub Repository Page
 * @link       http://kevinkhill.github.io/Lavacharts  GitHub Project Page
 * @license    http://opensource.org/licenses/MIT MIT
 */

use Khill\Lavacharts\Helpers\Helpers as H;
use Khill\Lavacharts\Exceptions\InvalidConfigValue;

class ChartArea extends ConfigObject
{
    /**
     * How far to draw the chart from the left border.
     *
     * @var int|string
     */
    public $left;

    /**
     * How far to draw the chart from the top border.
     *
     * @var int|string
     */
    public $top;

    /**
     * Width of the chart.
     *
     * @var int|string
     */
    public $width;

    /**
     * Height of the chart.
     *
     * @var int|string
     */
    public $height;


    /**
     * Builds the chartArea object when passed an array of configuration options.
     *
     * @param  array     $config
     * @return ChartArea
     */
    public function __construct($config = array())
    {
        parent::__construct($this, $config);
    }

    /**
     * Sets the left padding of the chart in the container.
     *
     * @param  int                $left Amount in pixels
     * @throws InvalidConfigValue
     * @return ChartArea
     */
    public function left($left)
    {
        if (H::isIntOrPercent($left)) {
            $this->left = $left;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | string',
                'representing pixels or a percent.'
            );
        }

        return $this;
    }

    /**
     * Sets the top padding of the chart in the container.
     *
     * @param  int                $top Amount in pixels
     * @throws InvalidConfigValue
     * @return ChartArea
     */
    public function top($top)
    {
        if (H::isIntOrPercent($top)) {
            $this->top = $top;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | string',
                'representing pixels or a percent.'
            );
        }

        return $this;
    }

    /**
     * Sets the width of the chart in the container.
     *
     * @param  int                $width Amount in pixels
     * @throws InvalidConfigValue
     * @return ChartArea
     */
    public function width($width)
    {
        if (H::isIntOrPercent($width)) {
            $this->width = $width;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | string',
                'representing pixels or a percent.'
            );
        }

        return $this;
    }

    /**
     * Sets the height of the chart in the container.
     *
     * @param  int                $height Amount in pixels
     * @throws InvalidConfigValue
     * @return ChartArea
     */
    public function height($height)
    {
        if (H::isIntOrPercent($height)) {
            $this->height = $height;
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'int | string',
                'representing pixels or a percent.'
            );
        }

        return $this;
    }
}
