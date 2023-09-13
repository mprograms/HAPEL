# HAPEL Method Parameters

---

## $options
### (array), (optional), default: null

Provides an array of values to be used in the element's `<option>` tags.

NOTE: Some methods use both the array's keys and values while others use only the values.
For example [datalist()](../methods/datalist.md) uses only the values
while [select()](../methods/select.md) uses both the values and keys as seen below.



| Value   | Use                          |
|---------|------------------------------|
| array   | the values to create options |


### Examples:

#### Values Only
This demonstrates a method that requires only values. 

```php
$options = [
    'Foo',
    'Bar',
    'Baz'
];
```
```html
<option value="foo"/>
<option value="bar"/>
<option value="baz"/>
```

#### Key / Value Pairs
This demonstrates a method that requires a key/value pair.

```php
$options = [
    'foo'  =>  'Foo',
    'bar'  =>  'Bar',
    'baz'  =>  'Baz'
];
```
```html
<option value="foo">Foo</option>
<option value="bar">Bar</option>
<option value="baz">Baz</option>
```

#### Values Only Used On Key/Value Pair Methods
This demonstrates a method that requires a key/value pair in which only values are passed.
Note the values of the `<option>` tags are the key's numeric value. There may be times when output like this is desirable,
however, most times this is not intended.

```php
$options = [
    'Foo',
    'Bar',
    'Baz'
];
```
```html
<option value="0">Foo</option>
<option value="1">Bar</option>
<option value="2">Baz</option>
```