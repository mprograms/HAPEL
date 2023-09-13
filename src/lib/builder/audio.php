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

class Audio
{


    private $_HTML;

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
     * SET PRELOAD
     * @param string $preload values are 'auto'|'metadata'|'none'. Default: 'none'.
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
     * @param string $type the type value. Default: 'audio/mp3'
     * @return void
     */
    public function setSource($src, $type = 'audio/mp3')
    {
        $obj = new \stdClass();
        $obj->src = $src;
        $obj->type = $type;

        $this->_sources[] = $obj;
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
        $attr['autoplay'] = $this->_getAutoplay();
        $attr['controls'] = $this->_getControls();
        $attr['preload'] = $this->_getPreload();
        $attr['loop'] = $this->_getLoop();
        $attr['muted'] = $this->_getMuted();
        $attr['src'] = $this->_getSrc();

        $o = '';
        $o .= $this->_HTML->audio(true, $class, $id, $style, $data, $attr);
        $o .= $this->_getSources();
        $o .= $this->_HTML->audio(false);

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