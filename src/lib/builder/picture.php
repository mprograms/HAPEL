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
 * @subpackage Builder\Audio
 * This class provides a simple method of creating audio elements.
 *
 * @since 0.3.0
 */

namespace HAPEL\Builder;

use HAPEL\Attributes;
use HAPEL\Html;

class Picture
{


    private $_HTML;

    private $_img = null;
    private $_sources = [];


    public function __construct()
    {
        $this->_HTML = new Html();
    }



    /**
     * SET IMAGE
     * @param string $src the src value. Required.
     * @param null|string $alt the alt value.
     * @return void
     */
    public function setImg($src, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $obj = new \stdClass();
        $obj->src = $src;
        $obj->alt = $alt;
        $obj->class = $class;
        $obj->id = $id;
        $obj->style = $style;
        $obj->data = $data;
        $obj->attr = $attr;

        $this->_img = $obj;
    }

    /**
     * SET SOURCE
     * @param string $srcSet the src value. Required.
     * @param string|array $media the type value. Default: 'audio/mp3'
     * @return void
     */
    public function setSource($srcSet, $media)
    {
        $obj = new \stdClass();
        $obj->srcset = $srcSet;
        $obj->media = $media;

        $this->_sources[] = $obj;
    }



    /**
     * UNSET SRC
     * @return void
     */
    public function unsetImg()
    {
        $this->_img = null;
    }

    /**
     * UNSET SOURCE
     * @return void
     */
    public function unsetSources()
    {
        $this->_sources = [];
    }


    /**
     * SHOW COMPLETE AUDIO COMPONENT
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function get($class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = '';
        $o .= $this->_HTML->picture(true, $class, $id, $style, $data, $attr);
        $o .= $this->_getSources();
        $o .= $this->_getImg();
        $o .= $this->_HTML->picture(false);

        return $o;
    }


    /**
     * GET SRC
     * @access private
     * @return null
     */
    private function _getImg()
    {
        $img = $this->_img;
        return !is_null($this->_img) ? $this->_HTML->img($img->src, $img->alt, $img->class, $img->id, $img->style, $img->data, $img->attr) : null;
    }

    /**
     * GET SOURCES
     * @access private
     * @return string
     */
    private function _getSources()
    {
        $o = '';
        foreach ( $this->_sources as $source ) {
            $o .= $this->_HTML->source(null, null, $source->media, $source->srcset);
        }
        return $o;
    }

}