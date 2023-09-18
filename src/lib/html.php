<?php
/**
 * @package HAPEL
 * @author MRittman
 * @link https://github.com/mprograms/HAPEL
 *
 * @copyright 2018 MRittman
 *
 * @license GPL
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @subpackage Html
 * This class provides methods for all of HAPEL's basic html element creation tasks.
 */

namespace HAPEL;


class Html
{

    /**
     * @var null|array $settings
     *
     * [xhtml]  bool            Appends a closing slash to html tags to make them xhtml.
     *                              {true] turns closing slash on
     *                              {false} turns closing slash off
     *                                  Default: true
     *
     * [minify] bool            Minifies the created html code.
     *                              {true} turns on minify
     *                              {false} turns off minify
     *                                  Default: false
     */
    private $settings;


    /**
     * HTML CLASS CONSTRUCTOR
     *
     * @param array $settings @see $this->settings
     *
     */
    public function __construct($settings = null)
    {
        $this->settings['xhtml'] = isset($settings['xhtml']) ? $settings['xhtml'] : true;
        $this->settings['minify'] = isset($settings['minify']) ? $settings['minify'] : false;

    }



    /**
     * !--COMMENT--
     * @param bool|string $child {@see Attributes::$child}
     * @return string
     */
    public function comment($child = '')
    {
        return '<!--' . $child . '-->';
    }



    /**
     * !DOCTYPE
     * @param string $type the doctype value.
     * @return string
     */
    public function doctype($type = 'html')
    {
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::emptyElement('!doctype', null, null, null, null, $attr);
    }



    /**
     * A
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $href the href value.
     * @param null|string $title the title value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function a($child = false, $href = null, $title = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['href'] = $href;
        $attr['title'] = $title;
        $c = new Component($this->settings);
        return $c::globalElement('a',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * ABBR
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function abbr($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('abbr',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * ACRONYM
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     *
     * @deprecated This method may be removed in future versions of HAPEL. Use {@see self::abbr()} instead.
     */
    public function acronym($child, $class, $id, $style, $data, $attr)
    {
        $c = new Component($this->settings);
        return $c::globalElement('acronym',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * ADDRESS
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function address($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('address',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * AREA
     * @param null|string $shape can be 'default', 'rect', 'circle', 'poly'
     * @param null|string $coords the coords value.
     * @param null|string $href the gref value.
     * @param null|string $rel the rel value.
     * @param null|array $alt the alt value.
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function area($shape = null, $coords = null, $href = null, $rel = null, $alt = null, $attr = null)
    {
        $attr['shape'] = $shape;
        $attr['coords'] = $coords;
        $attr['href'] = $href;
        $attr['rel'] = $rel;
        $attr['alt'] = $alt;
        $c = new Component($this->settings);
        return $c::emptyElement('area',null, null, null, null, $attr);
    }


    /**
     * ARTICLE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function article($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('article',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * ASIDE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function aside($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('aside',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * AUDIO
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function audio($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('audio',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * B
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function b($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('b',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * BASE
     * @param string $href sets the url of the base.
     * @param string $target sets the target.
     * @return string
     */
    public function base($href = null, $target = '_self')
    {
        $attr['href'] = $href;
        $attr['target'] = $target;
        $c = new Component($this->settings);
        return $c::emptyElement('base', null, null, null, null, $attr);
    }



    /**
     * BDI
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function bdi($child, $class, $id, $style, $data, $attr)
    {
        $c = new Component($this->settings);
        return $c::globalElement('bdi',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * BDO
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function bdo($child, $class, $id, $style, $data, $attr)
    {
        $c = new Component($this->settings);
        return $c::globalElement('bdo',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * BIG
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     *
     * @deprecated This method may be removed in future versions of HAPEL. Use css "font-size:" to adjust fontsize instead.
     */
    public function big($child, $class, $id, $style, $data, $attr)
    {
        $c = new Component($this->settings);
        return $c::globalElement('big',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * BLOCKQUOTE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function blockquote($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('blockquote',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * BODY
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function body($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('body',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * BR
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function br($class = null, $id = null, $style = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::emptyElement('br', $class, $id, $style, null, $attr);
    }



    /**
     * BUTTON
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function button($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['type'] = 'button';
        $c = new Component($this->settings);
        return $c::globalElement('button', $child, $class, $id, $style, $data, $attr);
    }



    /**
     * CANVAS
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function canvas($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('canvas',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * CAPTION
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function caption($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('caption',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * CENTER
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     *
     * @deprecated This method may be removed in future versions of HAPEL. Use css "text-align:center;" instead.
     */
    public function center($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('center',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * CITE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function cite($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('cite',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * CODE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function code($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('code',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * COL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|int $span the number of columns to span.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function col($child = false, $span = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['span'] = $span;
        $c = new Component($this->settings);
        return $c::globalElement('col',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * COLGROUP
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function colgroup($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('colgroup',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DATA
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function data($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('data',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DATA
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function datalist($child = false, $id = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('datalist',$child, null, $id, null, null, $attr);
    }



    /**
     * DD
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function dd($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dd',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DEL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function del($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('del',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * DETAILS
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function details($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('details',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DFN
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function dfn($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dfn',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DIALOG
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function dialog($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dialog',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DIV
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function div($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('div',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function dl($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dl',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * DT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function dt($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dt',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * EM
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function em($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('em',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * FIELDSET
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function fieldset($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('fieldset',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * FIGCAPTION
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function figcaption($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('figcaption',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * FIGURE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function figure($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('figure',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * FOOTER
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function footer($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('footer',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * FORM
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $method the method value.
     * @param null|string $action the action value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function form($child = false, $method = null, $action = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['method'] = $method;
        $attr['action'] = $action;
        $c = new Component($this->settings);
        return $c::globalElement('form',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * H1
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function h1($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h1',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * H2
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function h2($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h2',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * H3
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function h3($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h3',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * H4
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function h4($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h4',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * H5
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function h5($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h5',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * H6
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function h6($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h6',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * HEAD
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function head($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('head',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * HEADER
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function header($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('header',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * HR
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function hr($class = null, $id = null, $style = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::emptyElement('hr', $class, $id, $style, null, $attr);
    }




    /**
     * HTML
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $lang the language of the document. Default 'en'.
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function html($child = false, $lang = 'en', $attr = null)
    {
        $attr['lang'] = $lang;
        $c = new Component($this->settings);
        return $c::globalElement('html',$child, null, null, null, null, $attr);
    }



    /**
     * I
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function i($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('i',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * I
     * @param null|string $src the src value.
     * @param null|string $title the title value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
        public function iframe($src = null, $title = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['src'] = $src;
        $attr['title'] = $title;
        $c = new Component($this->settings);
        return $c::globalElement('iframe','', $class, $id, $style, $data, $attr);
    }



    /**
     * IMAGE
     * @param null|string $src the src value.
     * @param null|string $alt the alt value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function img($src = null, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['src'] = $src;
        $attr['alt'] = $alt;
        $c = new Component($this->settings);
        return $c::emptyElement('img', $class, $id, $style, $data, $attr);
    }



    /**
     * INPUT
     * @param null|string $type the type value.
     * @param null|string $name the alt value.
     * @param null|string $value the value.
     * @param bool $required should the element be required.
     * @param null|string $placeholder the placeholder value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function input($type, $name = null, $value = '', $required = false, $placeholder = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['type'] = $type;
        $attr['name'] = $name;
        $attr['value'] = $value;
        $attr['required'] = $required === true ? 'required' : null;
        $attr['placeholder'] = !is_null($placeholder) ? $placeholder : null;

        $c = new Component($this->settings);
        return $c::emptyElement('input', $class, $id, $style, $data, $attr);
    }



    /**
     * INS
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function ins($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ins',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * KBD
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function kbd($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ins',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * LABEL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $for the for value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function label($child, $for = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['for'] = $for;
        $c = new Component($this->settings);
        return $c::globalElement('label',$child, $class, '', '', '', $attr);
    }



    /**
     * LEGEND
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function legend($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('legend',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * LI
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function li($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('li',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * LINK
     * @param null|string $rel the rel value.
     * @param null|string $href the href value.
     * @param null|string $type the type value.
     * @param null|string $attr {@see Attributes::$attr}
     * @return string
     */
    public function link($rel = null, $href = null, $type = null, $attr = null)
    {
        $attr['rel'] = $rel;
        $attr['href'] = $href;
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::emptyElement('link', null, null, null, null, $attr);
    }


    /**
     * MAIN
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function main($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('main',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * MAP
     * @param bool|string $child {@see Attributes::$child}
     * @param bool|string $name the name value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function map($child = false, $name = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('map',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * MARK
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function mark($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('mark',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * META
     * @param null|string $name the name value.
     * @param null|string $content the content value.
     * @param null|string $attr {@see Attributes::$attr}
     * @return string
     */
    public function meta($name = null, $content = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['content'] = $content;
        $c = new Component($this->settings);
        return $c::emptyElement('meta', null, null, null, null, $attr);
    }



    /**
     * METER
     * @param string $text the text within the element.
     * @param int $value the meter value.
     * @param int $min the min value.
     * @param int $max the max value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function meter($text = '', $value = 0, $min = 0, $max = 100, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['value'] = $value;
        $attr['min'] = $min;
        $attr['max'] = $max;
        $c = new Component($this->settings);
        return $c::globalElement('meter',$text, $class, $id, $style, $data, $attr);
    }



    /**
     * NAV
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function nav($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('nav',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * NOSCRIPT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $attr {@see Attributes::$attr}
     * @return string
     */
    public function noscript($child, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('noscript',$child, null,null, null, null, $attr);
    }



    /**
     * OBJECT
     * @param null|string $data the data value.
     * @param null|type $type the type value.
     * @param null|name $name the name value..
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function object($data = false, $type = null, $name = null, $class = null, $id = null, $style = null, $attr = null)
    {
        $attr['data'] = $data;
        $attr['type'] = $type;
        $attr['name'] = $name;
        $c = new Component($this->settings);
        return $c::globalElement('object','', $class, $id, $style, null, $attr);
    }



    /**
     * OL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function ol($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ol',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * OPTGROUP
     * @param null|bool|string $child {@see Attributes::$child}
     * @param null|string $label the label value.
     * @param bool $disabled the disabled value.
     * @return string
     */
    public function optgroup($child = false, $label = null, $disabled = false)
    {
        $attr['label'] = $label;
        $attr['disabled'] = $disabled ? 'disabled' : null;
        $c = new Component($this->settings);
        return $c::globalElement('optgroup', $child, null, null, null, null, $attr);
    }



    /**
     * OPTION
     * @param string $child {@see Attributes::$child}
     * @param null|string $value
     * @param bool $selected
     * @return string
     */
    public function option($child = false, $value = null, $selected = false)
    {
        $attr['value'] = !is_null($value) ? $value : $child;
        $attr['selected'] = $selected === true ? 'selected' : null;
        $c = new Component($this->settings);
        return $c::globalElement('option', $child, null, null, null, null, $attr);
    }


    /**
     * OUTPUT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function output($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('p',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * P
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function p($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('p',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * PARAM
     * @param null|string $name the name value.
     * @param null|string $value the value.
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function param($name = null, $value = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['value'] = $value;
        $c = new Component($this->settings);
        return $c::emptyElement('param', null, null, null, null, $attr);
    }


    /**
     * PICTURE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     * @return string
     */
    public function picture($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('picture', $child, $class, $id, $style, $data, $attr);
    }



    /**
     * PRE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function pre($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('pre',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * PROGRESS
     *@param string $child {@see Attributes::$child}
     * @param int $value the value.
     * @param int $max the max value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function progress($child = false, $value = 0, $max = 0, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['value'] = $value;
        $attr['max'] = $max;
        $c = new Component($this->settings);
        return $c::globalElement('progress',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * Q
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function q($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('q',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * RP
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function rp($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('rp',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * RT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function rt($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('rt',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * RUBY
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function ruby($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ruby',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * S
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     *
     * @deprecated May be removed from future versions of HAPEL. Use {@see self::del()} or {@see self::s()} instead.
     */
    public function s($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('s',$child, $class, $id, $style, $data, $attr);
    }




    /**
     * SAMP
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function samp($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('samp',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * SCRIPT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $type the type value.
     * @param null|string $attr {@see Attributes::$attr}
     * @return string
     */
    public function script($child, $type = 'text/javascript', $attr = null)
    {
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::globalElement('script',$child, null,null, null, null, $attr);
    }



    /**
     * SCRIPT (LINK)
     * @param null|string $src the path to script.
     * @param null|string $type the type value.
     * @param null|string $attr {@see Attributes::$attr}
     * @return string
     */
    public function scriptLink($src = null, $type = 'text/javascript', $attr = null)
    {
        $attr['src'] = $src;
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::globalElement('script','', null,null, null, null, $attr);
    }


    /**
     * SECTION
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function section($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('section',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * SELECT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $name the name value.
     * @param null|array $required the required value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function select($child = false, $name = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['required'] = $required === true ? 'required' : null;
        $c = new Component($this->settings);
        return $c::globalElement('select', $child, $class, $id, $style, $data, $attr);
    }



    /**
     * SMALL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function small($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('small',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * SOURCE
     * @param null|string $src the src value.
     * @param null|string $type the type value.
     * @param null|string|array $media the media value.
     * @param null|string $srcset the scrset value.
     * @param null|string $sizes the sizes value.
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function source($src = null, $type = null, $media = null, $srcset = null, $sizes = null, $attr = null)
    {
        $attr['src'] = $src;
        $attr['type'] = $type;
        $attr['srcset'] = $srcset;
        $attr['sizes'] = $sizes;

        if ( is_array($media) ) {
            $total = count($media);
            $i = 0;
            $parts = '';
            foreach ($media as $k=>$v ) {
                $i++;
                $parts .= '(' . $k . ':' . $v . ')';
                $parts .= $i < $total ? ' AND ' : '';
            }
            $media = $parts;
        }

        $attr['media'] = $media;
        
        
        $c = new Component($this->settings);
        return $c::emptyElement('source', null, null, null, null, $attr);
    }



    /**
     * SPAN
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function span($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('span',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * STRIKE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     *
     * @deprecated This method may be removed in future versions of HAPEL. Use {@see self::del()} or {@see self::s()} instead.
     */
    public function strike($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('strike',$child, $class, $id, $style, $data, $attr);
    }


    /**
     * STRONG
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function strong($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('strong',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * STYLE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $attr {@see Attributes::$attr}
     * @return string
     */
    public function style($child = false, $attr = null)
    {
        $attr['type'] = 'text/css';
        $c = new Component($this->settings);
        return $c::globalElement('style', $child, null,null, null, null, $attr);
    }



    /**
     * STYLESHEET LINK
     * @param string $href the content.
     * @param null|string $attr {@see Attributes::$attr}
     * @uses self::link()
     * @return string
     */
    public function stylesheet($href = null, $attr = null)
    {
        return $this->link('stylesheet', $href, 'text/css', $attr);
    }



    /**
     * SUB
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function sub($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('sub',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * SUMMARY
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function summary($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('summary',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * SUP
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function sup($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('sup',$child, $class, $id, $style, $data, $attr);
    }




    public function svg()
    {
        //todo svg;
    }



    /**
     * TABLE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function table($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('table',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TBODY
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function tbody($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('tbody',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TD
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function td($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('td',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TEMPLATE
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function template($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
    $c = new Component($this->settings);
    return $c::globalElement('template',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TEXTAREA
     * @param string $name the name value.
     * @param null|string $value the value.
     * @param bool $required is the input required.
     * @param null|string $placeholder is placeholder value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function textarea($name = null, $value = '', $required = false, $placeholder = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['required'] = $required === true ? 'required' : null;
        $attr['placeholder'] = !is_null($placeholder) ? $placeholder : null;
        $c = new Component($this->settings);
        return $c::globalElement('textarea', $value, $class, $id, $style, $data, $attr);
    }



    /**
     * TFOOT
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function tfoot($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('tfoot',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TH
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function th($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('th',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * THEAD
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function thead($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('thead',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TIME
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function time($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('time',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TITLE
     * @param string $text the content.
     * @return string
     */
    public function title($text)
    {
        $c = new Component($this->settings);
        return $c::globalElement('title',$text);
    }







    /**
     * TR
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function tr($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('tr',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * TRACK
     * @param null|string $src the src value.
     * @param null|string $kind the kind value.
     * @param null|string $srclang the srclang value.
     * @param null|string $label the label value.
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function track($src = false, $kind = 'subtitles', $srclang = 'en', $label='English', $attr = null)
    {
        $attr['src'] = $src;
        $attr['kind'] = $kind;
        $attr['srclang'] = $srclang;
        $attr['label'] = $label;
        $c = new Component($this->settings);
        return $c::emptyElement('track', null, null, null, null, $attr);
    }



    /**
     * U
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     *
     * @deprecated May be removed in future releases of HAPEL. Use css "text-decoration:underline;" instead.
     */
    public function u($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('u',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * UL
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function ul($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ul',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * VAR
     * Note: This method is called var_ due to var being a reserved name in php.
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function var_($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ul',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * VIDEO
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function video($child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('video',$child, $class, $id, $style, $data, $attr);
    }



    /**
     * WBR
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function wbr($class = null, $id = null, $style = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::emptyElement('wbr', $class, $id, $style, null, $attr);
    }



    public function myTag($tag, $child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement($tag,$child, $class, $id, $style, $data, $attr);
    }



}