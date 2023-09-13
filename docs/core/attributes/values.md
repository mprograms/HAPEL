# HAPEL Method Parameters

---

## $values
### (string|array), (optional), default: null

Provides a string or array of values to compare on elements that have multiple options such as select tags.


| Value  | Use                       |
|--------|---------------------------|
| null   | no value                  |
| string | a single value to check   |
| array  | multiple values to check  |


### Examples:

#### As a string
Usage:
```php
$options = [
 'foo'  =>  'Foo',
 'bar'  =>  'Bar',
 'baz'  =>  'Baz'
 ];

$values = 'bar' 
 
echo select('field-name', $options, $values);
```
Result:
```html 
<select name="field-name">
    <option value="foo">Foo</option>
    <option value="bar" selected="selected">Bar</option>
    <option value="baz">Baz</option>
</select>
```


#### As an array

Usage:
```php
$options = [
 'foo'  =>  'Foo',
 'bar'  =>  'Bar',
 'baz'  =>  'Baz'
 ];

$values = [
 'bar',
 'baz'
]  
echo select('field-name', $options, $values);
```
Result:
```html 
<select name="field-name">
    <option value="foo">Foo</option>
    <option value="bar" selected="selected">Bar</option>
    <option value="baz" selected="selected">Baz</option>
</select>
```

### Also See
- [select](../methods/select.md)