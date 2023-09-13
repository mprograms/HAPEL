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
 * @subpackage Builder\Lists
 * This class provides a simple method of creating ordered, unordered, and definition lists.
 *
 * @since 0.3.0
 */

namespace HAPEL\Builder;


use HAPEL\Attributes;
use HAPEL\Html;

class Lists
{


    private $_HTML;


    public function __construct()
    {
        $this->_HTML = new Html();
    }


    /**
     * MAKE UL LIST
     *
     * @param array             $items an array that defines the list structure.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|id           $id    {@see Attributes::$id}
     * @param null|array        $attr  {@see Attributes::$attr}
     *
     * @return string
     */
    public function makeUL($items, $class = null, $id = null, $attr = null)
    {
        return $this->_makeList($items, 'ul', $class, $id, $attr);
    }

    /**
     * MAKE OL LIST
     *
     * @param array             $items an array that defines the list structure.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|id           $id    {@see Attributes::$id}
     * @param null|array        $attr  {@see Attributes::$attr}
     *
     * @return string
     */
    public function makeOL($items, $class = null, $id = null, $attr = null)
    {
        return $this->_makeList($items, 'ol', $class, $id, $attr);
    }


    /**
     * MAKE DL LIST
     *
     * @param array             $items an array that defines the list structure.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|id           $id    {@see Attributes::$id}
     * @param null|array        $attr  {@see Attributes::$attr}
     *
     * @return string
     */
    public function makeDL($items, $class= null, $id = null, $attr = null)
    {
        $o = '';
        $o .= $this->_HTML->dl(true, $class, $id, null, null, $attr);
        foreach ( $items as $item ) {
            $o .= $this->_makeDI('dt',$item[0]);
            $o .= $this->_makeDI('dd', $item[1]);
        }
        $o .= $this->_HTML->dl();

        return $o;

    }


    /**
     * MAKE DL CHILD TAG (DT / DD)
     *
     * @param string       $type the type of tag to make. Should be 'DT' or 'DD'.
     * @param string|array $item is the content to make.
     *                           If array, structure is: $item = [$item, $class, $id, $attr]
     *
     * @access private
     * @return string
     */
    private function _makeDI($type, $item)
    {

        if ( is_array($item) ) {
            $content = $item[0];
            $class = isset( $item[1] ) ? $item[1]: null;
            $id = isset( $item[2] ) ? $item[2]: null;
            $attr = isset( $item[3] ) ? $item[3]: null;
        } else {
            $content = $item;
            $class = null;
            $id = null;
            $attr = null;
        }


        return $this->_HTML->$type($content, $class, $id, null, null, $attr);
    }


    /**
     * MAKE A LIST (OL / UL)
     *
     * @param array             $items the children items (li items).
     * @param string            $type  the type of parent to create ('ul' or 'ol').
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string       $id    {@see Attributes::$id}
     * @param null|array        $attr  {@see Attributes::$attr}
     *
     * @access private
     * @return string
     */
    private function _makeList($items = null, $type = 'ul', $class = null, $id = null, $attr = null)
    {
        $o = '';

        $o .= $this->_HTML->$type(true, $class, $id, null, null, $attr);

            foreach ( $items as $item ) {
                if ( is_array($item) ) {
                    $content = $item[0];
                    $children = isset($item[1]) ? $item[1] : null;

                    if ( is_array($children)) {
                        $content = $content . $this->_makeList($children, $type);
                    }


                    $class = isset( $item[2] ) ? $item[2]: null;
                    $id = isset( $item[3] ) ? $item[3]: null;
                    $attr = isset( $item[4] ) ? $item[4]: null;
                } else {
                    $content = $item;
                    $class = null;
                    $id = null;
                    $attr = null;
                }

                $o .= $this->_HTML->li($content, $class, $id, null, null, $attr);
            }

        $o .= $this->_HTML->$type(false);

        return $o;
    }



}