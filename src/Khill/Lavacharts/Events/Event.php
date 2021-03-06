<?php namespace Khill\Lavacharts\Events;

/**
 * Event Parent Object
 *
 * The base class for the individual event objects, providing common
 * functions to the child objects.
 *
 *
 * @package    Lavacharts
 * @subpackage Events
 * @since      v2.0.0
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2014, KHill Designs
 * @link       http://github.com/kevinkhill/Lavacharts GitHub Repository Page
 * @link       http://kevinkhill.github.io/Lavacharts  GitHub Project Page
 * @license    http://opensource.org/licenses/MIT MIT
 */

use Khill\Lavacharts\Helpers\Helpers as h;
use Khill\Lavacharts\Exceptions\InvalidConfigValue;

class Event
{
    /**
     * Javascript callback function name.
     *
     * @var string
     */
    public $callback;

    /**
     * Builds the Event object.
     *
     * @param  string             $c Name of Javascript callback function.
     * @throws InvalidConfigValue
     * @return Event
     */
    public function __construct($c)
    {
        if (h::nonEmptyString($c)) {
            $this->callback = $c;
        } else {
            throw new InvalidConfigValue(
                'an Event',
                'string'
            );
        }
    }
}
