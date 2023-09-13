# HAPEL Builder Reference

---
## Form

### Description

The `\HAPEL\Builder\Form()` class allows for the creation of complete `<form>` components such as `<input>`, `<textarea>`, `<select>`, etc.

---


### Getting Started

HAPEL already loads the Form Class automatically so all you need to do is to create an instance of
the class like so:

```php
$F = new \HAPEL\Builder\Form();
````



### Creating Form Components

To create a form component, call the related method. For example, to create a text input:

```php
echo $F->inputText($name, $value);
````


### Form Builder Method Reference


| Tag                    | Method                                                                                              |
|------------------------|-----------------------------------------------------------------------------------------------------|
| form                   | `form($child, $method, $action, $class, $id, $style, $data, $attr)`                                 |
| input (button)         | `inputButton($name, $value, $class, $id, $style, $data, $attr)`                                     |
| input (checkbox)       | `inputCheckbox($name, $value, $label, $required, $compare, $class, $id, $style, $data, $attr)`      |
| input (checkboxes)*    | `inputCheckboxes($name, $options, $compare, $class, $id, $style, $data, $attr)`                     |
| input (color)          | `inputColor($name, $value, $required, $class, $id, $style, $data, $attr)`                           |
| input (date)           | `inputDate($name, $value, $required, $class, $id, $style, $data, $attr)`                            |
| input (datetime-local) | `inputDatetimeLocal($name, $value, $required, $class, $id, $style, $data, $attr)`                   |
| input (email)          | `inputEmail($name, $value, $required, $placeholder, $datalist, $class, $id, $style, $data, $attr)`  |
| input (file)           | `inputFile($name, $value, $required, $class, $id, $style, $data, $attr)`                            |
| input (hidden)         | `inputHidden($name, $value, $attr)`                                                                 |
| input (month)          | `inputMonth($name, $value, $required, $class, $id, $style, $data, $attr)`                           |
| input (number)         | `inputNumber($name, $value, $required, $class, $id, $style, $data, $attr)`                          |
| input (password)       | `inputPassword($name, $value, $required, $class, $id, $style, $data, $attr)`                        |
| input (radio)          | `inputRadio($name, $options, $required, $compare, $class, $id, $style, $data, $attr)`               |
| input (range)          | `inputRange($name, $value, $required, $min, $max, $class, $id, $style, $data, $attr)`               |
| input (reset)          | `inputReset($name, $value, $class, $id, $style, $data, $attr)`                                      |
| input (search)         | `inputSearch($name, $value, $required, $placeholder, $datalist, $class, $id, $style, $data, $attr)` |
| input (submit)         | `inputSubmit($name, $value, $class, $id, $style, $data, $attr)`                                     |
| input (tel)            | `inputTel($name, $value, $required, $placeholder, $datalist, $class, $id, $style, $data, $attr)`    |
| input (text)           | `inputText($name, $value, $required, $placeholder, $datalist, $class, $id, $style, $data, $attr)`   |
| input (time)           | `inputime($name, $value, $required, $class, $id, $style, $data, $attr)`                             |
| input (url)            | `inputUrl($name, $value, $required, $placeholder, $datalist, $class, $id, $style, $data, $attr)`    |
| input (week)           | `inputWeek($name, $value, $required, $class, $id, $style, $data, $attr)`                            |
| label                  | `label($label, $content, $for)`                                                                     |
| textarea               | `textarea($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`               |
| toggle*                | `toggle($name, $labels, $value, $required, $class, $id, $style, $data, $attr)`                      |
| select                 | `select($name, $options, $required, $compare, $class, $id, $style, $data, $attr)`                   |

*This is a custom HAPEL input type and not a standard HTML input.


### Form Builder Parameter Reference

| Parameter                                    | Type          | Default          | Required | Expected Values | 
|----------------------------------------------|---------------|------------------|----------|-----------------|
| [$name](../core/attributes/name.md)          | string        |                  | Yes      |                 |
| [$value](../core/attributes/value.md)        | string        | `null`           | No       |                 |
| [$options](../core/attributes/options.md)    | array         | `null`           | No       |                 |
| [$required](../core/attributes/required.md)  | bool          | `false`          | No       |                 |
| $datalist                                    | array         | `null`           | No       |                 |
| $compare                                     | string, array | `null`           | No       |                 |
| $content                                     | string        | `null`           | No       |                 |
| $labels                                      | array         | `['Off', 'On']`  | No       |                 |
| [$max](../core/attributes/max.md)            | int           | `0`              | No       |                 |
| [$min](../core/attributes/min.md)            | int           | `100`            | No       |                 |
| [$placeholder](../core/attributes/method.md) | string        | `null`           | No       |                 |
| [$method](../core/attributes/method.md)      | string        | `null`           | No       | `get` or `post` |
| [$action](../core/attributes/action.md)      | string        | `null`           | No       |                 |
| [$class](../core/attributes/class.md)        | string, array | `null`           | No       |                 |
| [$id](../core/attributes/id.md)              | string        | `null`           | No       |                 |
| [$style](../core/attributes/style.md)        | string, array | `null`           | No       |                 |
| [$data](../core/attributes/data.md)          | array         | `null`           | No       |                 |
| [$attr](../core/attributes/attr.md)          | array         | `null`           | No       |                 |


### Form Components

#### <form ...>

```php
form('form content', 'get', 'send.php', 'myform');
```

```html
<form method="get" action="send.php" class="myform">form content</form>
```

---

#### <input type="button" ...>

```php
inputButton('button-name', 'Click Me');
```

```html
<input type="button" name="button-name" value="Click Me">
```

---

#### <input type="checkbox" ...>

Make a single checkbox:

```php
inputCheckbox('field-checkbox', '1', 'label', true, '1');
```

```html
<input type="checkbox" name="field-checkbox", value="1", required="required" checked="checked">
```

Make a group of checkboxes:

```php
$a = [
    'optionY'   =>  'Option Y',
    'optionZ'   =>  'Option Z'
];
inputCheckboxes('field-checkboxes', $a, 'option2', 'myclass');
```

```html
<input class="myclass" id="field-checkboxes-optionY" type="checkbox" name="field-checkboxes[]" value="optionY"/>
<label for="field-checkboxes-optionY">Option Y</label>

<input class="myclass" id="field-checkboxes-optionZ" type="checkbox" name="field-checkboxes[]" value="optionZ"/>
<label for="field-checkboxes-optionZ">Option Z</label>
```

---

#### <input type="color" ...>

```php
inputColor('field-color', '#128DD9');
```

```html
<input id="field-color" type="color" name="field-color" value="#128DD9"/>
```

---

#### <input type="date" ...>

```php
inputDate('field-date');
```

```html
<input id="field-date" type="date" name="field-date"/>
```

---

#### <input type="datetime-local" ...>

```php
inputDatetimeLocal('field-datetime');
```

```html
<input id="field-datetime" type="datetime-local" name="field-datetime"/>
```

---

#### <input type="email" ...>

```php
inputEmail('field-email', '', true, 'Enter your email.');
```

```html
<input id="field-email" type="url" name="field-email" value="" required="required" placeholder="Enter your email."/>
```

---

#### <input type="file" ...>

```php
inputFile('field-file' );
```

```html
<input id="field-file" type="file" name="field-file"/>
```

Set accept attributes:

```php
inputFile('field-file2', null, false, null, null, null, null, ['accept'=>'.jpg,.jpeg,.png,.gif.,webp'] );
```

```html
<input id="field-file2" accept=".jpg,.jpeg,.png,.gif.,webp" type="file" name="field-file"/>
```

---

#### <input type="hidden" ...>

```php
inputHidden('field-hidden', 'some value');
```

```html
<input type="hidden" name="field-hidden" value="some value"/>
```

---

#### <input type="month" ...>

```php
inputMonth('field-month');
```

```html
<input id="field-month" type="month" name="field-month"/>
```

---

#### <input type="number" ...>

```php
inputNumber('field-number');
```

```html
<input id="field-number" type="number" name="field-number"/>
```

---

#### <input type="number" ...>

```php
inputPassword('field-password');
```

```html
<input id="field-password" type="password" name="field-password"/>
```

---

#### <input type="radio" ...>

```php
$a = ['option1'=>'Option 1', 'option2'=>'Option 2'];
inputRadio('field-radio', $a, true, 'option2');
```

```html
<input id="field-radio-option1" type="radio" name="field-radio" value="option1" required="required"/>
<label for="field-radio-option1">Option 1</label>

<input id="field-radio-option2" checked="checked" type="radio" name="field-radio" value="option2" required="required"/>
<label for="field-radio-option2">Option 2</label>
```

---

#### <input type="range" ...>

The range method automatically generates a `span` tag after the element providing you a container to display the output
of the range slider. Note that this method only generates the container. You must provide your own javascript code. 

```php
inputRange('field-range', '', false, 25, 75);
```

```html
<input id="field-range" min="25" max="75" type="range" name="field-range" /><span class="range-value" id="field-range-value"</span>
```

---

#### <input type="reset" ...>

```php
inputReset('field-reset', 'Reset Me');
```

```html
<input id="field-reset" type="reset" name="field-reset" value="Reset Me"/>
```

---

#### <input type="search" ...>

```php
inputSearch('field-search', null, false, 'Search Here');
```

```html
<input id="field-search" type="search" name="field-search" placeholder="Search Here"/>
```

---

#### <input type="submit" ...>

```php
inputSubmit('field-submit', 'Submit Me');
```

```html
<input type="submit" name="field-submit" value="Submit Me" placeholder="field-submit"/>
```

---

#### <input type="tel" ...>
---

#### <input type="email" ...>

```php
inputTel('field-tel');
```

```html
<input id="field-tel" type="tel" name="field-tel"/>
```

---

#### <input type="text" ...>

```php
inputText('field-text');
```

```html
<input id="field-text" type="text" name="field-text"/>
```

---

#### <input type="time" ...>

```php
inputTime('field-time');
```

```html
<input id="field-time" type="time" name="field-time"/>
```

---

#### <input type="url" ...>

```php
inputUrl('field-url');
```

```html
<input id="field-url" type="url" name="field-url"/>
```

---

#### <input type="week" ...>

```php
inputWeek('field-week');
```

```html
<input id="field-week" type="week" name="field-week"/>
```

---

#### <label ...>

```php
label('My Label', 'content');
```

```html
<label>My Label content</label>
```

With for attribute:

```php
label('My Label', null 'field-id');
```

```html
<label for="field-id">My Label</label>
```


---

#### <textarea ...>

```php
textarea('field-textarea', 'Hi there!', false, 'Enter some text here.');
```

```html
<textarea id="field-textarea" name="field-textarea" placeholder="Enter some text here.">Hi there!</textarea>
```


---

#### <toggle ...>

This method creates a radio button group with a boolean on/off value.

```php
toggle('field-toggle');
```

```html
<input id="field-toggle-0" checked="checked" type="radio" name="field-toggle" value="0"/>
<label for="field-toggle-0">Off</label>

<input id="field-toggle-1" type="radio" name="field-toggle" value="1"/>
<label for="field-toggle-1">On</label>
```
Set custom values. Note that boolean value will always be 0 or 1.

```php
toggle('field-toggle', ['No', 'Yes']);
```

```html
<input id="field-toggle-0" checked="checked" type="radio" name="field-toggle" value="0"/>
<label for="field-toggle-0">No</label>

<input id="field-toggle-1" type="radio" name="field-toggle" value="1"/>
<label for="field-toggle-1">Yes</label>
```


---

#### <select ...>

```php
$a = ['option1'=>'Option 1','option2'=>'Option 2'];
select('field-select', $a, true, 'option2', 'myclass');
```

```html
<select class="myclass" id="field-select" name="field-select" required="required">
    <option value="option1" selected="">Option 1</option>
    <option value="option2" selected="selected">Option 2</option>
</select>
```

With optgroup:

```php
$a = [
        [
            'Group1',
            [
                'optionA'   =>  'Option A',
                'optionB'   =>  'Option B'
            ]
        ]
    ];
select('field-selectopgroup', $a, true, '', 'myclass');
```

```html
<select class="myclass" id="field-selectopgroup" name="field-selectopgroup" required="required">
    <optgroup label="Group1">
        <option value="optionA" selected="">Option A</option>
        <option value="optionB" selected="">Option B</option>
    </optgroup>
</select>
```


