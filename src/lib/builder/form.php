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
 * @subpackage Builder\Form
 * This class provides a simple method of creating form and form elements.
 *
 * @since 0.2.0
 */

namespace HAPEL\Builder;

use HAPEL\Attributes;
use HAPEL\Html;


class Form
{

    private $_HTML;


    public function __construct()
    {
        $this->_HTML = new Html();
    }


    /**
     * FORM
     * Note: This is just a reference to the core method form(). It is here just for convenience.
     * @see Html::form()
     * @param bool|string $child {@see Attributes::$child}
     * @param null|string $method {@see Attributes::$method}
     * @param null|string $action {@see Attributes::$action}
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function form($child = false, $method = null, $action = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        return $this->_HTML->form($child, $method, $action, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (BUTTON)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputButton($name, $value = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->input('button', $name, $value, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (CHECKBOX)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $label the label value.
     * @param string $required makes the element required if true.
     * @param string $compare the value to compare $value against to create a 'checked' status.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputCheckbox($name, $value = null, $label = null, $compare = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        $attr['checked'] = $this->_getCompare($value, $compare);
        return $this->label(
            $label,
            $this->_HTML->input('checkbox', $name, $value, $required, null, $class, $id, $style, $data, $attr),
            $id
        );
    }



    /**
     * CHECKBOXES (GROUP OF CHECKBOX INPUTS)
     * @param string $name the name value. Required.
     * @param null|array $options the value's and labels value.
     * @param null|string|array $compare the value to compare $options[$value] against to create a 'checked' status.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputCheckboxes($name, $options = null, $compare = null, $class = null, $id = null, $attr = null)
    {
        $o = '';
        $id = $this->_getId($name, $id);
        $name = $name . '[]';

        foreach ( $options as $value => $label ) {
            $itemId = $id . '-' . $value;
            $o .= $this->inputCheckbox($name, $value, $label, null, $compare, $class, $itemId, null, null, $attr );
        }

        return $o;
    }


    /**
     * INPUT (COLOR)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputColor($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->input('color', $name, $value, $required, null, $class, $id, $style, $data, $attr);
    }

    /**
     * INPUT (DATE)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputDate($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        // Pattern & placeholder are for backwards compatibility.
        $attr['pattern'] = '\d{4}-\d{2}-\d{2}';
        return $this->_HTML->input('date', $name, $value, $required, 'YYYY-mm-dd', $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (DATETIME-LOCAL)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputDatetimeLocal($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        // Pattern & placeholder are for backwards compatibility.
        $attr['pattern'] = '\d{4}-\d{2}-\d{2}T\d{2}:\d{2}';
        $placeholder = 'YYYY-MM-DDTHH:MM';
        return $this->_HTML->input('datetime-local', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (EMAIL)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|array $datalist the datalist name.
     * @param null|string $placeholder the placeholder value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputEmail($name, $value = null, $required = false, $placeholder = null, $datalist = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        $dlName = $this->_getDataListName($datalist, $id);
        $attr['list'] = $dlName;
        return $this->_HTML->input('url', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr) . $this->_getDatalist($datalist, $dlName);
    }


    /**
     * INPUT (FILE)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param bool $required sets the required value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputFile($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);

        return $this->_HTML->input('file', $name, $value, $required, null, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (HIDDEN)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputHidden($name, $value = null, $attr = null)
    {
        return $this->_HTML->input('hidden', $name, $value, false, null, null, null, null, null, $attr);
    }


    /**
     * INPUT (MONTH)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputMonth($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        // Pattern & placeholder are for backwards compatibility.
        $attr['pattern'] = '\d{4}-\d{2}';
        $placeholder = 'YYYY-MM';
        return $this->_HTML->input('month', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (NUMBER)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputNumber($name, $value = null, $required = false, $placeholder = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->input('number', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (PASSWORD)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputPassword($name, $value = null, $required = false, $placeholder = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->input('password', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (RADIO)
     * @param string $name the name value.
     * @param array $options an array of radio inputs to create. Required. Format: ['value' => 'Label']
     * @param string $required makes the element required if true.
     * @param string $compare the value to compare $value against to create a 'checked' status.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputRadio($name, $options = null, $compare = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = '';
        $id = $this->_getId($name, $id);

        if ( is_array($options) ) {
            foreach ($options as $value => $label) {

                $itemId = $this->_getId($id, null, $value);
                $attr['checked'] = $this->_getCompare($value, $compare);

                $o .= $this->_HTML->input('radio', $name, $value, $required, null, $class, $itemId, $style, $data, $attr) . $this->_HTML->label($label, $itemId);

                unset($attr['checked']);
            }
        }

        return $o;
    }


    /**
     * INPUT (RANGE)
     * @param string $name the name value.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|int $min the min value.
     * @param null|int $max the max value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputRange($name, $value = null, $required = false, $min = 0, $max = 100, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        $attr['min'] = $min;
        $attr['max'] = $max;
        return $this->_HTML->input('range', $name, $value, $required, null, $class, $id, $style, $data, $attr) . $this->_HTML->span('','range-value',$id . '-value');
    }



    /**
     * INPUT (RESET)
     * @param string $name the name value.
     * @param string $value the value's value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputReset($name, $value = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->input('reset', $name, $value, false, null, $class, $id, $style, $data, $attr);
    }



    /**
     * INPUT (SEARCH)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|array $datalist the datalist name.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputSearch($name, $value = null, $required = false, $placeholder = null, $datalist = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        $dlName = $this->_getDataListName($datalist, $id);
        $attr['list'] = $dlName;
        return $this->_HTML->input('search', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr) . $this->_getDatalist($datalist, $dlName);
    }



    /**
     * INPUT (SUBMIT)
     * @param string $name the name value.
     * @param string $value the value's value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputSubmit($name, $value = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->input('submit', $name, $value, false, null, $class, $id, $style, $data, $attr);
    }



    /**
     * INPUT (TEL)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|array $datalist the datalist name.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputTel($name, $value = null, $required = false, $placeholder = null, $datalist = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        // Pattern & placeholder are for backwards compatibility.
        $dlName = $this->_getDataListName($datalist, $id);
        $attr['list'] = $dlName;
        return $this->_HTML->input('tel', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr) . $this->_getDatalist($datalist, $dlName);
    }



    /**
     * INPUT (TEXT)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|array $datalist the datalist name.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputText($name, $value = null, $required = false, $placeholder = null, $datalist = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        $dlName = $this->_getDataListName($datalist, $id);
        $attr['list'] = $dlName;
        return $this->_HTML->input('text', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr) . $this->_getDatalist($datalist, $dlName);
    }


    /**
     * INPUT (TIME)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputTime($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        // Pattern & placeholder are for backwards compatibility.
        $attr['pattern'] = '\d{2}:\d{2}:\d{2}';
        $placeholder = 'HH:MM:SS';
        return $this->_HTML->input('time', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }


    /**
     * INPUT (URL)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|array $datalist the datalist name.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputUrl($name, $value = null, $required = false, $placeholder = null, $datalist = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        $dlName = $this->_getDataListName($datalist, $id);
        $attr['list'] = $dlName;
        return $this->_HTML->input('url', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr) . $this->_getDatalist($datalist, $dlName);
    }


    /**
     * INPUT (WEEK)
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function inputWeek($name, $value = null, $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        // Pattern & placeholder are for backwards compatibility.
        $attr['pattern'] = '\d{4}-W\d{2}';
        $placeholder = 'YYYY-Www';
        return $this->_HTML->input('week', $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }



    /**
     * LABEL
     * @see Html::label()
     * @param string $label the text for the label.
     * @param null|string $content the content inside the label.
     * @param null|string $for the for value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @return string
     */
    public function label($label, $content = null, $for = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $content = !is_null($content) ? ' ' . $content : null;
        return $this->_HTML->label($label . $content, $for, $class, $id, $style, $data, $attr);
    }



    /**
     * TEXTAREA
     * @param string $name the name value. Required.
     * @param string $value the value's value.
     * @param string $required makes the element required if true.
     * @param null|string $placeholder the placeholder value.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function textarea($name, $value = null, $required = false, $placeholder = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $id = $this->_getId($name, $id);
        return $this->_HTML->textarea($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
    }



    /**
     * SELECT
     * @param string $name the name value. Required.
     * @param array $options an array of select optons to create. Required. Format: ['value' => 'Label']
     * @param string $required makes the element required if true.
     * @param string $compare the value to compare $value against to create a 'checked' status.
     * @param null|string|array $class {@see Attributes::$class}
     * @param null|string $id {@see Attributes::$id}
     * @param null|string|array $style {@see Attributes::$style}
     * @param null|array $data {@see Attributes::$data}
     * @param null|array $attr {@see Attributes::$attr}
     * @since 0.2.0
     * @return string
     */
    public function select($name, $options = null, $compare = null, $required = false,  $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = '';
        $id = $this->_getId($name, $id);

        $o .= $this->_HTML->select(true, $name, $required, $class, $id, $style, $data, $attr);
        $o .= $this->_getOptionContent($options, $compare);
        $o .= $this->_HTML->select(false);

        return $o;
    }



    public function fieldset($child, $legend = null, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        $o = $this->_HTML->fieldset(true, $class, $id, $style, $data, $attr);
        $o .= $this->_HTML->legend($legend);
        $o .= $child;
        $o .= $this->_HTML->fieldset(false);

        return $o;
    }



    public function toggle($name, $value = null, $labels = ['Off', 'On'], $required = false, $class = null, $id = null, $style = null, $data = null, $attr = null)
    {
        return $this->inputRadio($name, $labels, $value, $required, $class, $id, $style, $data, $attr);
    }





    private function _getDataListName($datalist, $id)
    {
        return !is_null($datalist) ? $id . '-dl' : null;
    }

    private function _getDatalist($options, $id)
    {
        if ( is_array($options)) {

            $o = $this->_HTML->datalist(true, $id);
            foreach ($options as $option) {
                $o .= $this->_HTML->option($option);
            }
            $o .= $this->_HTML->datalist(false);

            return $o;

        } else {

            return null;

        }
    }



    /**
     * GET OPTION CONTENT
     * This will check to see if the content is options or option groups + options.
     * @param array $options is options. Required.
     * @param null|string|array $compares is values to compare $options[$value]. Required.
     * @access private
     * @return string
     */
    private function _getOptionContent($options, $compares)
    {
        if ( count($options) == count($options, COUNT_RECURSIVE) ){
            return $this->_getOptions($options, $compares);
        } else {
            return $this->_getOptgroup($options, $compares);
        }
    }

    /**
     * CREATE OPTGROUPS
     * @param array $options the option values. Required.
     * @param null|string|array $compares the value(s) to compare to $options[$value].
     * @access private
     * @return string
     */
    private function _getOptgroup($options, $compares)
    {
        $o = '';
        foreach ( $options as $optgroup ) {
            $o .= $this->_HTML->optgroup(true, $optgroup[0]);
            $o .= $this->_getOptions($optgroup[1], $compares);
            $o .= $this->_HTML->optgroup(false);
        }

        return $o;
    }

    /**
     * CREATE OPTIONS
     * @param array $options the option values. Required.
     * @param null|string|array $compares the value(s) to compare to $options[$value].
     * @access private
     * @return string
     */
    private function _getOptions($options, $compares)
    {
        $o = '';
        foreach ( $options as $value => $label) {

            if ( is_array($compares) ) {
                $selected = in_array($value, $compares);
            } else {
                $selected = $value == $compares;
            }

            $o .= $this->_HTML->option($label, $value, $selected);
        }

        return $o;

    }




    /**
     * COMPARE VALUES
     * @param string $value the value of the element. Required.
     * @param null|string $compare the value to compare $value against. This might be from the user input, database, etc. Required.
     * @param string $type the string to return. Default: 'checked'.
     * @return string
     */
    private function _getCompare($value, $compare, $type = 'checked')
    {
        return (string)$value == (string)$compare ? $type : null;
    }


    /**
     * SET ID
     * @param string $name the name value. Required.
     * @param string $id the id value.
     * @access private
     * @since 0.3.0
     * @return string
     */
    private function _getId($name, $id = null, $append = null)
    {
        if ( is_null($id) ) {
            $name = str_replace('[]', '', $name);
            $append = !is_null($append) ? '-' . $append : null;
            $id = $name . $append;
        }
        return $id;
    }




}