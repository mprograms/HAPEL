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
 * @subpackage Builder\Video
 * This class provides a simple method of creating video elements.
 *
 * @since 0.3.0
 */

namespace HAPEL\Builder;

use HAPEL\Attributes;
use HAPEL\Html;

class Video
{


    private $_HTML;

    private $_height = null;
    private $_width = null;
    private $_poster = null;
    private $_autoplay = false;
    private $_controls = false;
    private $_loop = false;
    private $_muted = false;
    private $_preload = 'none';
    private $_src = null;
    private $_sources = [];


    public function __construct()
    {
        $this->_HTML = new Html();
    }




    /**
     * SET AUTOPLAY
     * @return void
     */
    public function setAutoplay()
    {
        $this->_autoplay = true;
    }


    /**
     * SET CONTROLS
     * @return void
     */
    public function setControls()
    {
        $this->_controls = true;
    }

    /**
     * SET HEIGHT
     * @param int $height the height value. Required.
     * @return void
     */
    public function setHeight($height)
    {
        $this->_height = $height;
    }

    /**
     * SET LOOP
     * @return void
     */
    public function setLoop()
    {
        $this->_loop = true;
    }


    /**
     * SET MUTED
     * @return void
     */
    public function setMuted()
    {
        $this->_muted = true;
    }


    /**
     * SET POSTER
     * @param string $src the src value. Required.
     * @return void
     */
    public function setPoster($src)
    {
        $this->_poster = $src;
    }


    /**
     * SET PRELOAD
     * @param string $v values are 'auto'|'metadata'|'none'.
     * @return void
     */
    public function setPreload($preload = 'none')
    {
        $this->_preload = $preload;
    }

    /**
     * SET SRC
     * @param string $src the src value. Required.
     * @return void
     */
    public function setSrc($src)
    {
        $this->_src = $src;
    }

    /**
     * SET SOURCE
     * @param string $src the src value. Required.
     * @param string $type the type value.
     * @return void
     */
    public function setSource($src, $type = 'video/mp4')
    {
        $obj = new \stdClass();
        $obj->src = $src;
        $obj->type = $type;

        $this->_sources[] = $obj;
    }


    /**
     * SET WIDTH
     * @param int $width the width value. Required.
     * @return void
     */
    public function setWidth($width)
    {
        $this->_width = $width;
    }



    /**
     * UNSET AUTOPLAY
     * @return void
     */
    public function unsetAutoplay()
    {
        $this->_autoplay = false;
    }


    /**
     * UNSET CONTROLS
     * @return void
     */
    public function unsetControls()
    {
        $this->_controls = false;
    }


    /**
     * UNSET HEIGHT
     * @return void
     */
    public function unsetHeight()
    {
        $this->_height = null;
    }


    /**
     * UNSET LOOP
     * @return void
     */
    public function unsetLoop()
    {
        $this->_loop = false;
    }


    /**
     * UNSET MUTED
     * @return void
     */
    public function unsetMuted()
    {
        $this->_muted = false;
    }


    /**
     * UNSET POSTER
     * @return void
     */
    public function unsetPoster()
    {
        $this->_poster = null;
    }


    /**
     * UNSET PRELOAD
     * @return void
     */
    public function unsetPreload()
    {
        $this->_preload = false;
    }

    /**
     * UNSET SRC
     * @return void
     */
    public function unsetSrc()
    {
        $this->_src = null;
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
     * UNSET WIDTH
     * @return void
     */
    public function unsetWidth()
    {
        $this->_width = 500;
    }


    /**
     * SHOW COMPLETE VIDEO COMPONENT
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function get($class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['autoplay'] = $this->_getAutoplay();
        $attr['controls'] = $this->_getControls();
        $attr['height'] = $this->_getHeight();
        $attr['preload'] = $this->_getPreload();
        $attr['loop'] = $this->_getLoop();
        $attr['poster'] = $this->_getPoster();
        $attr['muted'] = $this->_getMuted();
        $attr['src'] = $this->_getSrc();
        $attr['width'] = $this->_getWidth();

        $o = '';
        $o .= $this->_HTML->video(true, $class, $id, $style, $data, $attr);
        $o .= $this->_getSources();
        $o .= $this->_HTML->video(false);

        return $o;
    }


    /**
     * GET AUTOPLAY
     * @access private
     * @return string|null
     */
    private function _getAutoplay()
    {
        return $this->_autoplay === true ? 'autoplay' : null;
    }

    /**
     * GET CONTROLS
     * @access private
     * @return string|null
     */
    private function _getControls()
    {
        return $this->_controls === true ? 'controls' : null;
    }

    /**
     * GET HEIGHT
     * @access private
     * @return string|null
     */
    private function _getHeight()
    {
        return !is_null($this->_height) ? $this->_height : null;
    }

    /**
     * GET LOOP
     * @access private
     * @return string|null
     */
    private function _getLoop()
    {
        return $this->_loop === true ? 'loop' : null;
    }

    /**
     * GET MUTED
     * @access private
     * @return string|null
     */
    private function _getMuted()
    {
        return $this->_muted === true ? 'muted' : null;
    }

    /**
     * GET POSTER
     * @access private
     * @return string|null
     */
    private function _getPoster()
    {
        return !is_null($this->_poster) ? $this->_poster : null;
    }


    /**
     * GET PRELOAD
     * @access private
     * @return string|null
     */
    private function _getPreload()
    {
        return !is_null($this->_preload) ? $this->_preload : null;
    }

    /**
     * GET SRC
     * @access private
     * @return null
     */
    private function _getSrc()
    {
        return !is_null($this->_src) ? $this->_src : null;
    }

    /**
     * GET WIDTH
     * @access private
     * @return string|null
     */
    private function _getWidth()
    {
        return !is_null($this->_width) ? $this->_width : null;
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
            $o .= $this->_HTML->source($source->src, $source->type);
        }
        return $o;
    }
    
}