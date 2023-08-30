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
 * @subpackage Component
 * This class helps build more complex elements and return its compiled structure and content.
 *
 */

namespace HAPEL;


class Component
{

    /**
     * @var array $settings {@see Html::$settings}
     */
    public static $settings;

    public function __construct($settings)
    {
        self::$settings = $settings;
    }


    /**
     * CREATE ELEMENT WITH GLOBAL ATTRIBUTES
     * @param string $tag {@see Attributes::$tag}
     * @param string|bool $child {@see Attributes::$child}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function globalElement($tag = null, $child = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $e = new Element(self::$settings);
        $e::setTag($tag);
        $e::setClass($class);
        $e::setId($id);
        $e::setStyle($style);
        $e::setData($data);
        $e::setAttr($attr);
        $e::setChild($child);
        $e::setWrap(true);

        return $e::get();
    }

    /**
     * CREATE AN EMPTY ELEMENT
     * @param string $tag {@see Attributes::$tag}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function emptyElement($tag = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $e = new Element(self::$settings);
        $e::setTag($tag);
        $e::setClass($class);
        $e::setId($id);
        $e::setStyle($style);
        $e::setData($data);
        $e::setAttr($attr);
        $e::setWrap(false);

        return $e::get();
    }

    /**
     * CREATE COMMENT ELEMENT
     * @param string $child the value of the comment.
     */
    public static function commentElement($child = '')
    {
        return '<!-- ' . $child . '-->' . "\r\n";

    }

    /**
     * CREATE DOCTYPE ELEMENT
     * @param string $type the value of the doctype.
     */
    public static function doctype($type)
    {
        return '<!DOCTYPE ' . $type . '>' . "\r\n";
    }

    /**
     * CREATE IMAGE ELEMENT
     * @param string $src the src value.
     * @param string $alt the alt value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function imgElement($src = '', $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['src'] = $src;
        $attr['alt'] = $alt;
        return self::emptyElement('img',$class, $id, $style, $data, $attr);
    }

    /**
     * CREATE IMAGE ELEMENT
     * @param string $sources {@see self::source()}
     * @param string $src the src value.
     * @param string $alt the alt value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function pictureElement($sources, $src, $alt = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = self::source($sources);
        $o .= self::imgElement($src, $alt, $class);

        return self::globalElement('picture', $o, $class, $id, $style, $data, $attr);
    }

    /**
     * CREATE AN INPUT ELEMENT
     * @param string $type the type of input.
     * @param string $name the name of the element.
     * @param null|string $value the value of the element.
     * @param bool $required is the input required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function inputElement($type, $name, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['type'] = $type;
        $attr['name'] = $name;
        $attr['value'] = $value;
        $attr['required'] = $required === true ? 'required' : null;
        return self::emptyElement('input', $class, $id, $style, $data, $attr);
    }

    /**
     * CREATE A TEXT AREA ELEMENT
     * @param string $name the name of the element.
     * @param null|string $value the value of the element.
     * @param bool $required is the input required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function textAreaElement($name, $value = '', $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['required'] = $required === true ? 'required' : null;
        return self::globalElement('textarea', $value, $class, $id, $style, $data, $attr);
    }

    /**
     * CREATE A CHECKBOX ELEMENT
     * @param string $name the name of the element.
     * @param null|string $label the label for the element.
     * @param null|string $value the value of the element.
     * @param null|string $retrievedValue the value that is compared to $value to determine if the element is checked.
     * @param bool $required is the input required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function checkBoxElement($name, $label, $value = null, $retrievedValue = null, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $attr['name'] = $name;
        $attr['value'] = $value;

        $labelClass = str_replace('[]', '', $name) . '-' . $value;
        $checked = self::_checkValues($value, $retrievedValue);

        $attr['checked'] = $checked === true ? 'checked' : null;
        $attr['required'] = $required === true ? 'required' : null;

        return self::globalElement('label', true, $labelClass) . self::inputElement('checkbox', $name, $value, $required, $class, $id, null, $data, $attr) . $label . self::globalElement('label', false);
    }

    /**
     * CREATE A CHECKBOX ELEMENT
     * @param string $name the name of the element.
     * @param null|array $options an array to use as element options.
     * @param null|string|array $retrievedValues the values that are compared to each $options to determine if the option has been selected.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function checkBoxListElement($name, $options = null, $retrievedValues = null, $class = null, $id = null, $data = null, $attr = null)
    {
        $o = '';
        foreach ( $options as $k=>$v) {
            $o .= self::checkBoxElement($name.'[]', $v, $k, $retrievedValues, false, $class, $id, $data, $attr);
        }
        return $o;
    }

    /**
     * CREATE A SELECT ELEMENT
     * @param string $name the name of the element.
     * @param null|array $options an array to use as element options.
     * @param null|string|array $retrievedValues the values that are compared to each $options to determine if the option has been selected.
     * @param bool $required is the input required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function inputSelectElement($name, $options = null, $retrievedValues = null, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $o = '';

        $attr['name'] = $name;
        $attr['required'] = $required === true ? 'required' : null;

        $o .= self::globalElement('select', true, $class, $id, null, $data, $attr);

        foreach ( $options as $k=>$v) {

            $selected = self::_checkValues($k, $retrievedValues);

            $itemAttr['value'] = $k;
            $itemAttr['selected'] = $selected === true ? 'selected' : null;
            $o .= self::globalElement('option', (string)$v, null, null, null, null, $itemAttr);
            unset($itemAttr);
        }

        $o .= self::globalElement('select', false);
        return $o;
    }

    /**
     * CREATE A RADIO ELEMENT
     * @param string $name the name of the element.
     * @param null|array $options an array to use as element options.
     * @param null|string|array $retrievedValues the values that are compared to each $options to determine if the option has been selected.
     * @param bool $required is the input required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function inputRadioElement($name, $options = null, $retrievedValues = null, $required = false, $class = null, $id = null, $data = null, $attr = null)
    {
        $o = '';

        $attr['required'] = $required === true ? 'required' : null;

        $id = !is_null($id) ? $id : $name;

        foreach ( $options as $k=>$v) {

            $tempId = $id . $k;
            $tempClass = $class . ' ' . $class . '-' . $k;

            unset($attr['checked']);

            if ( $retrievedValues == $k ) {
                $attr['checked'] = 'checked';
            }

            $o .= self::inputElement('radio', $name, $k, $required, $tempClass, $tempId, null, $data, $attr);
            $o .= self::globalElement('label', $v, '', '', '', '', ['for'=>$tempId]);
        }

        return $o;
    }

    /**
     * CREATE A DATALIST ELEMENT
     * @param string $name the name of the element.
     * @param null|string $value the value of the element.
     * @param null|array $options an array to use as element options.
     * @param bool $required is the input required.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     */
    public static function inputDatalistElement($name, $value, $options, $required, $class, $id, $style, $data, $attr)
    {
        $o = '';

        $listId = !is_null($id) ? $id : $name;
        $attr['list'] = $listId . '-list';

        $o .= self::inputElement('text', $name, $value, $required, $class, $id, $style, $data, $attr);

        $o .= self::globalElement('datalist ', true, null, $attr['list']);

        foreach ( $options as $v) {
            $o .= self::emptyElement('option ', null, null, null, null, array('value'=>$v));
        }

        $o .= self::globalElement('datalist', false);
        return $o;
    }





        /**
     * @param array $sources sets the sources data for a picture element.
     *
     *      $sources
     *          [media]
     *          [src]
     *          [srcset]
     *          [type]
     *          [sizes]
     *
     * @return string
     */
    public static function source($sources)
    {
        $o = '';
        foreach ($sources as $item) {

            $sourceAttr['media'] = isset($item['media']) ? $item['media'] : null;
            $sourceAttr['src'] = isset($item['src']) ? $item['src'] : null;
            $sourceAttr['srcset'] = isset($item['srcset']) ? $item['srcset'] : null;
            $sourceAttr['type'] = isset($item['type']) ? $item['type'] : null;
            $sourceAttr['sizes'] = isset($item['sizes']) ? $item['sizes'] : null;

            $o .= self::emptyElement('source', null, null, null, null, $sourceAttr);
            unset($sourceAttr);
        }
        return $o;
    }


    /**
     * SET VALUES OF CHECKBOXES & SELECT BOXES
     * @param string $value is the value of the element.
     * @param string $retrievedValue is the value retrieved to check against.
     * @return bool
     */
    private static function _checkValues($value, $retrievedValue) {

        $isMatch = false;

        if ( is_array($retrievedValue) ){
            // See if the value of the checkbox is in the array of values.
            if ( in_array($value, $retrievedValue) ) {
                $isMatch = true;
            }
        } else {
            // Check to see if checkbox should be checked based on previous value.
            if ($value == $retrievedValue) {
                $isMatch = true;
            }
        }

        return $isMatch;
    }

}