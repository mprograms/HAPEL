<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 * @copyright 2018 MRittman
 *
 * @license GPL
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @subpackage Builder\Canvas
 * This class provides a simple method of creating canvas elements.
 *
 * @since 0.3.0
 */

namespace HAPEL\Builder;

use HAPEL\Attributes;
use HAPEL\Html;

class Canvas
{


    private $_HTML;


    public function __construct()
    {
        $this->_HTML = new Html();
    }


    /**
     * SHOW COMPLETE CANVAS COMPONENT
     * @param string $script the link to the script or the script itself. Required.
     * @param bool $external TRUE: $script is the url to the script. FALSE: $script is the script content. Default: false.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function get($script, $external = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {

        $o = '';
        $o .= $this->_HTML->canvas('Your browser does not support canvas.', $class, $id, $style, $data, $attr);
        if ( $external) {
            $o .= $this->_HTML->scriptLink($script, 'text/javascript');
        } else {
            $o .= $this->_HTML->script($script, 'text/javascript');
        }

        return $o;
    }

}