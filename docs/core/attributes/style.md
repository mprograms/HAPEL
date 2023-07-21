# HAPEL Method Parameters

---

## $style
### (null | string | array), (optional), default: null

Sets the style attribute for the tag.

Value      | Use
-----------|-------------
null       | prevents the attribute from being added to the tag 
string     | adds the content of 'string' as the attribute value
array      | adds each item in the array as an attribute value


### Examples:

##### Using a string:
```php
$style = 'color: red; font-size: 120%';
```
```html
<tag style="color:red; font-size:120%" {...}
```

##### Using an array:
```php
$style = array('color'=>'red','font-size'=>'120%');
```
```html
<tag style="color:red; font-size:120%" {...}
```