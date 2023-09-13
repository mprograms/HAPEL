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
 * @subpackage Builder\Imagemap
 * This class provides a simple method of creating image map elements.
 *
 * @since 0.3.0
 */

namespace HAPEL\Builder;

use HAPEL\Attributes;
use HAPEL\Html;

class Imagemap
{

    private $_HTML;
    private $_img = null;
    private $_areas = [];

    public function __construct()
    {
        $this->_HTML = new Html();
    }


    /**
     * SET IMAGE CONTENT
     * @param string $src the src value. Required
     * @param null|int $width the width value.
     * @param null|int $height the height value.
     * @param null|string $alt the alt value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return void
     */
    public function setImg($src, $width = null, $height = null, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $obj = new \stdClass();
        $obj->src = $src;
        $obj->width = $width;
        $obj->height = $height;
        $obj->alt = $alt;
        $obj->class = $class;
        $obj->id = $id;
        $obj->style = $style;
        $obj->data = $data;
        $obj->attr = $attr;

        $this->_img = $obj;
    }

    /**
     * SET AREA CONTENT
     * @param string $shape can be 'default', 'square', 'rect', 'circle', 'poly'. Required.
     * @param string $coords the coords value. Required.
     * @param string $href the href value. Required.
     * @param null|string $rel the rel value.
     * @param null|string $alt the alt value.
     * @param null|array $attr {@see Attributes::$attr}
     * @return void
     */
    public function addArea($shape, $coords, $href, $rel = null, $alt = null, $attr = null)
    {
        $obj = new \stdClass();
        $obj->shape    =  $shape;
        $obj->coords   =  $coords;
        $obj->alt      =  $alt;
        $obj->href     =  $href;
        $obj->rel      =  $rel;
        $obj->attr     =  $attr;

        $this->_areas[] = $obj;
    }


    /**
     * CREATE IMAGE MAP
     * @param string $name the name of the imagemap. Required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return void
     */
    public function get($name, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = '';

        $attr['name'] = $name;

        $o .= $this->_getImage($name);
        $o .= $this->_HTML->map(true, $name, $class, $id, $style, $data, $attr);
        $o .= $this->_getAreas();
        $o .= $this->_HTML->map(false);

        return $o;
    }


    /**
     * GET DEFINED IMAGE AND CREATE OUTPUT
     * @param string $name the name of the map. Required.
     * @access private
     * @return string
     */
    private function _getImage($name)
    {
        $img = $this->_img;

        $img->attr['usemap'] = '#' . $name;
        $img->attr['width'] = $img->width;
        $img->attr['height'] = $img->height;
        return $this->_HTML->img($img->src, $img->alt, $img->class, $img->id, $img->style, $img->data, $img->attr);
    }

    /**
     * GET ALL DEFINED AREAS AND CREATE OUTPUT
     * @access private
     * @return string
     */
    private function _getAreas()
    {
        $o = '';
        foreach ( $this->_areas as $area ) {
            $o .= $this->_HTML->area($area->shape, $area->coords, $area->href, $area->rel, $area->alt, $area->attr);
        }
        return $o;
    }



}