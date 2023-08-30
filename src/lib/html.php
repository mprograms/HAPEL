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
     * Setup other classes
     *
     * @param array $settings @see $this->settings
     *
     */
    public function __construct($settings = null)
    {
        $this->settings['xhtml'] = isset($settings['xhtml']) ? $settings['xhtml'] : true;
        $this->settings['minify'] = isset($settings['minify']) ? $settings['minify'] : false;

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// ROOT & DOCUMENT ELEMENTS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * CREATE A DOCTYPE
     * @param string $type the doctype value.
     * @return string
     */
    public function doctype($type = 'html')
    {
        $c = new Component($this->settings);
        return $c::doctype($type);
    }

    /**
     * CREATE A BASE
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
     * CREATE A BODY TAG
     * @param bool | string $child {@see Attributes::$child}
     * @param string | null $class {@see Attributes::$class}
     * @param string | null $id {@see Attributes::$id}
     * @param string | array | null $style {@see Attributes::$style}
     * @param array | null $data {@see Attributes::$data}
     * @param array | null $attr {@see Attributes::$attr}
     * @return string
     */
    public function body($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('body',$child, $class, $id, $style, $data, $attr);
    }

    public function head($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('head',$child, $class, $id, $style, $data, $attr);
    }

    public function html($child = true, $lang = 'en', $attr = null)
    {
        $attr['lang'] = $lang;
        $c = new Component($this->settings);
        return $c::globalElement('html',$child, null, null, null, null, $attr);
    }

    public function link($rel = null, $href = null, $type = null, $attr = null)
    {
        $attr['rel'] = $rel;
        $attr['href'] = $href;
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::emptyElement('link', null, null, null, null, $attr);
    }

    public function meta($name = null, $content = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['content'] = $content;
        $c = new Component($this->settings);
        return $c::emptyElement('meta', null, null, null, null, $attr);
    }

    public function noscript($child, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('noscript',$child, null,null, null, null, $attr);
    }

    public function script($child, $type = 'text/javascript', $attr = null)
    {
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::globalElement('script',$child, null,null, null, null, $attr);
    }

    public function scriptLink($src = null, $type = 'text/javascript', $attr = null)
    {
        $attr['src'] = $src;
        $attr['type'] = $type;
        $c = new Component($this->settings);
        return $c::globalElement('script','', null,null, null, null, $attr);
    }

    public function style($child = true, $attr = null)
    {
        $attr['type'] = 'text/css';
        $c = new Component($this->settings);
        return $c::globalElement('style',$child, null,null, null, null, $attr);
    }

    public function styleLink($href = null, $attr = null)
    {
        return $this->link('stylesheet', $href, 'text/css', $attr);
    }

    public function title($child)
    {
        $c = new Component($this->settings);
        return $c::globalElement('title',$child);
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// MAIN LAYOUT ELEMENTS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function article($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('article',$child, $class, $id, $style, $data, $attr);
    }

    public function aside($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('aside',$child, $class, $id, $style, $data, $attr);
    }

    public function div($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('div',$child, $class, $id, $style, $data, $attr);
    }

    public function footer($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('footer',$child, $class, $id, $style, $data, $attr);
    }

    public function header($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('header',$child, $class, $id, $style, $data, $attr);
    }

    public function hr($class = null, $id = null, $style = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::emptyElement('hr', $class, $id, $style, null, $attr);
    }

    public function main($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('main',$child, $class, $id, $style, $data, $attr);
    }

    public function nav($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('nav',$child, $class, $id, $style, $data, $attr);
    }

    public function section($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('section',$child, $class, $id, $style, $data, $attr);
    }

    public function span($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('span',$child, $class, $id, $style, $data, $attr);
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// TABLES
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function table($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('table',$child, $class, $id, $style, $data, $attr);
    }

    public function tr($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('tr',$child, $class, $id, $style, $data, $attr);
    }
    public function td($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('td',$child, $class, $id, $style, $data, $attr);
    }
    public function th($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('th',$child, $class, $id, $style, $data, $attr);
    }
    public function thead($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('thead',$child, $class, $id, $style, $data, $attr);
    }
    public function tbody($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('tbody',$child, $class, $id, $style, $data, $attr);
    }
    public function tfoot($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('tfoot',$child, $class, $id, $style, $data, $attr);
    }
    public function caption($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('caption',$child, $class, $id, $style, $data, $attr);
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// TEXT
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function h1($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h1',$child, $class, $id, $style, $data, $attr);
    }

    public function h2($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h2',$child, $class, $id, $style, $data, $attr);
    }

    public function h3($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h3',$child, $class, $id, $style, $data, $attr);
    }

    public function h4($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h4',$child, $class, $id, $style, $data, $attr);
    }

    public function h5($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h5',$child, $class, $id, $style, $data, $attr);
    }

    public function h6($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('h6',$child, $class, $id, $style, $data, $attr);
    }

    public function p($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('p',$child, $class, $id, $style, $data, $attr);
    }




    public function comment($child = '')
    {
        $c = new Component($this->settings);
        return $c::commentElement($child);
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// TEXT FORMATTING ELEMENTS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function abbr($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('abbr',$child, $class, $id, $style, $data, $attr);
    }

    public function address($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('address',$child, $class, $id, $style, $data, $attr);
    }

    public function b($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('b',$child, $class, $id, $style, $data, $attr);
    }

    public function blockquote($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('blockquote',$child, $class, $id, $style, $data, $attr);
    }

    public function cite($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('cite',$child, $class, $id, $style, $data, $attr);
    }

    public function code($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('code',$child, $class, $id, $style, $data, $attr);
    }

    public function del($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('del',$child, $class, $id, $style, $data, $attr);
    }

    public function em($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('em',$child, $class, $id, $style, $data, $attr);
    }

    public function i($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('i',$child, $class, $id, $style, $data, $attr);
    }

    public function ins($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ins',$child, $class, $id, $style, $data, $attr);
    }

    public function mark($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('mark',$child, $class, $id, $style, $data, $attr);
    }

    public function meter()
    {
        //todo meter();
    }

    public function pre($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('pre',$child, $class, $id, $style, $data, $attr);
    }

    public function progress()
    {
        //todo progress();
    }

    public function s($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('s',$child, $class, $id, $style, $data, $attr);
    }

    public function strong($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('strong',$child, $class, $id, $style, $data, $attr);
    }

    public function sub($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('sub',$child, $class, $id, $style, $data, $attr);
    }

    public function sup($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('sup',$child, $class, $id, $style, $data, $attr);
    }

    public function time($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('time',$child, $class, $id, $style, $data, $attr);
    }

    public function u($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('u',$child, $class, $id, $style, $data, $attr);
    }

    public function q($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('q',$child, $class, $id, $style, $data, $attr);
    }













    public function a($child = true, $href = null, $title = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['href'] = $href;
        $attr['title'] = $title;
        $c = new Component($this->settings);
        return $c::globalElement('a',$child, $class, $id, $style, $data, $attr);
    }

    public function br($class = null, $id = null, $style = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::emptyElement('br', $class, $id, $style, null, $attr);
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// LIST NodeS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function ul($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ul',$child, $class, $id, $style, $data, $attr);
    }

    public function ol($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('ol',$child, $class, $id, $style, $data, $attr);
    }
    public function li($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('li',$child, $class, $id, $style, $data, $attr);
    }
    public function dt($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dt',$child, $class, $id, $style, $data, $attr);
    }
    public function dd($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('dd',$child, $class, $id, $style, $data, $attr);
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// IMAGE NODES
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function figure($src = null, $alt = null, $caption = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = $this->img($src, $alt);
        $o .= $this->figCaption($caption);

        $c = new Component($this->settings);
        return $c::globalElement('figure',$o, $class, $id, $style, $data, $attr);
    }

    public function figCaption($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('figcaption',$child, $class, $id, $style, $data, $attr);
    }

    public function img($src = null, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::imgElement($src, $alt, $class, $id, $style, $data, $attr);
    }


    public function picture($source, $src, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::pictureElement($source, $src, $alt, $class, $id, $style, $data, $attr);
    }






    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// FORM NODES
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function form($child = true, $method = null, $action = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['method'] = $method;
        $attr['action'] = $action;
        $c = new Component($this->settings);
        return $c::globalElement('form',$child, $class, $id, $style, $data, $attr);
    }



    public function fieldset($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('fieldset',$child, $class, $id, $style, $data, $attr);
    }
    public function legend($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('legend',$child, $class, $id, $style, $data, $attr);
    }



    public function inputText($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('text', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputButton($name = null, $value = '', $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('button', $name, $value, false, $class, $id, $style, $data, $attr);
    }

    public function inputColor($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('color', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputDate($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('date', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputDateTime($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('datetime-local', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputEmail($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('email', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputFile($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('file', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputHidden($name = null, $value = '')
    {
        $c = new Component($this->settings);
        return $c::inputElement('hidden', $name, $value);
    }

    public function inputMonth($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('month', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputNumber($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('number', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputPassword($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('password', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputTel($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('tel', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputTime($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('time', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputUrl($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('url', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputSearch($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('search', $name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputSubmit($value = '', $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('submit', null, $value, false, $class, $id, $style, $data, $attr);
    }

    public function inputReset($value = '', $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputElement('reset', null, $value, $class, $id, $style, $data, $attr);
    }

    public function inputTextarea($name = null, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::textAreaElement($name, $value, $required, $class, $id, $style, $data, $attr);
    }

    public function inputCheckBox($name, $label, $value = null, $retrievedValue = null, $checked = false, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::checkBoxElement($name, $label, $value, $retrievedValue, $checked, $required, $class, $id, $data, $attr);
    }

    public function inputCheckboxList($name, $options, $retrievedValues = null, $class = null, $id = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::checkBoxListElement($name, $options, $retrievedValues, $class , $id, $attr);
    }

    public function inputSelect($name, $options, $retrievedValues = null, $required = false, $class = null, $id = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputSelectElement($name, $options, $retrievedValues, $required, $class , $id, $attr);
    }

    public function inputRadio($name, $options, $retrievedValues = null, $required = false, $class = null, $id = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputRadioElement($name, $options, $retrievedValues, $required, $class , $id, $attr);
    }

    public function inputLabel($child, $for = null, $class = null)
    {
        $attr['for'] = $for;
        $c = new Component($this->settings);
        return $c::globalElement('label',$child, $class, '', '', '', $attr);
    }

    public function inputDatalist($name, $value = '', $options, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::inputDatalistElement($name, $value, $options, $required, $class, $id, $style, $data, $attr);
    }

    /**
     * @param bool|string $child
     * @param null|string|array $class
     * @param null|string $id
     * @param null|string $style
     * @param null|array $data
     * @param null|array $attr
     * @return string
     */
    public function button($child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement('button',$child, $class, $id, $style, $data, $attr);
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// AUDIO / VIDEO NodeS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function audio()
    {
        //todo audio()
    }
    public function video()
    {
        //todo video()
    }

    public function track()
    {
        //todo track()
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// IFRAME NodeS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function iframe()
    {
        //todo iframe()
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// CUSTOM NodeS
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function myTag($tag, $child = true, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $c = new Component($this->settings);
        return $c::globalElement($tag,$child, $class, $id, $style, $data, $attr);
    }





}