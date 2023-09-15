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
 * @subpackage Examples\Builder\Form
 *
 * Shows usage examples for the HAPEL Builder Form class.
 *
 * @since 0.3.0
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Include HAPEL's class loader.
$dir = dirname(dirname(__DIR__)) . '/src/hapel.php';
require_once($dir);


// Create a new instance of the audio builder class.
$f = new \HAPEL\Builder\Form();


echo $f->form(true);


    $o = $f->inputButton('field-button', 'Click Me');
    echo $f->fieldset($o, 'Button');



    $o = $f->inputCheckbox('field-checkbox', 'on', 'label', true, 'on', 'my-class');
    echo $f->fieldset($o, 'Checkbox');



    $o = $f->inputDate('field-date');
    $o .= 'With min attribute: ' . $f->inputDate('field-date2', null, null, null, null, null, null, ['min'=>'2020-01-01']);
    echo $f->fieldset($o, 'Date');



    $o = $f->inputDatetimeLocal('field-datetime');
    echo $f->fieldset($o, 'Datetime-Local');



    $o = $f->inputEmail('field-email');
    echo $f->fieldset($o, 'Email');



    $o = $f->inputFile('field-file');
    $o .= 'With accepts attribute: ' . $f->inputFile('field-file2', null, false, null, null, null, null, ['accept'=>'.jpg,.jpeg,.png,.gif.,webp'] );
    echo $f->fieldset($o, 'File');



    $o = $f->inputHidden('field-hidden', 'some value');
    echo $f->fieldset($o, 'Hidden');



    $o = $f->inputMonth('field-month');
    echo $f->fieldset($o, 'Month');



    $o = $f->inputPassword('field-password');
    echo $f->fieldset($o, 'Password');



    $a = ['option1'=>'Option 1', 'option2'=>'Option 2'];
    $o = $f->inputRadio('field-radio', $a, 'option2', true);
    echo $f->fieldset($o, 'Radio');



    $o = $f->inputRange('field-range', null, false, 25, 75);
    $o .= 'With step attribute: ' . $f->inputRange('field-range2', null, false, 0, 100, null, null, null, null, ['step'=>10]);
    echo $f->fieldset($o, 'Range');



    $o = $f->inputReset('field-reset', 'Reset Me');
    echo $f->fieldset($o, 'Reset Button');



    $o = $f->inputSearch('field-search');
    $o .= 'With placeholder attribute: ' . $f->inputSearch('field-search2', null, false, 'Search Here');
    echo $f->fieldset($o, 'Search');



    $o = $f->inputTel('field-tel');
    echo $f->fieldset($o, 'Tel');



    $o = $f->inputText('field-text');
    echo $f->fieldset($o, 'Text');



    $o = $f->inputTime('field-time');
    echo $f->fieldset($o, 'Time');



    $o = $f->inputUrl('field-url');
    echo $f->fieldset($o, 'Url');



    $o = $f->inputWeek('field-week');
    echo $f->fieldset($o, 'Week');



    $o = $f->inputSubmit('field-submit', 'Submit Me');
    echo $f->fieldset($o, 'Submit Button');



    $o = $f->label('My Label', null, 'field-text3' );
    $o .= $f->inputText('field-text3');

    $o .= 'Wrapping content: ' . $f->label('My Label', $f->inputText('field-text') );
    echo $f->fieldset($o, 'Label');



    $o = $f->textarea('field-textarea');
    $o .= 'With rows and cols attributes: ' . $f->textarea('field-textarea2', null, null, null, null, null, null, null, ['rows'=>10, 'cols'=>50]);
    echo $f->fieldset($o, 'Textarea');


    $o = $f->toggle('field-toggle');
    $o .= 'With custom labels:' . $f->toggle('field-toggles', '0', ['No', 'Yes']);
    echo $f->fieldset($o, 'Toggle');


    $a = ['option1'=>'Option 1','option2'=>'Option 2'];
    $o = $f->select('field-select', $a,'option2', true);

    $a = [
        [
            'Group1',
            [
                'optionA'   =>  'Option A',
                'optionB'   =>  'Option B'
            ]
        ]
    ];
    $o .= 'With optgroup:' . $f->select('field-selectopgroup', $a);
    echo $f->fieldset($o, 'Select');




    $a = [
        'optionY'   =>  'Option Y',
        'optionZ'   =>  'Option Z'
    ];
    $o = $f->inputCheckboxes('field-checkboxes', $a, 'option2', 'myclass');
    echo $f->fieldset($o, 'Submit Button');




echo $f->form();