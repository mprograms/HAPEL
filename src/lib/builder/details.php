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
 * @subpackage Builder\Details
 * This class provides a simple method of creating details elements.
 *
 * @since 0.3.0
 */

namespace HAPEL\Builder;

use HAPEL\Attributes;
use HAPEL\Html;

class Details
{

    private $_HTML;

    public function __construct()
    {
        $this->_HTML = new Html();
    }


    /**
     * SHOW DETAILS COMPONENT
     * @param null|string $summary the content for the summary tag. Required.
     * @param null|string $content the content for the tag. Required.
     * @param bool $open true if the component should be rendered open. Default: false.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function details($summary, $content, $open = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['open'] = $open === true ? 'open="open"' : null;

        $o = '';
        $o .= $this->_HTML->details(true, $class, $id, $style, $data, $attr);

            $o .= $this->_HTML->summary($summary);
            $o .= $content;

        $o .= $this->_HTML->details(false);

        return $o;
    }

}