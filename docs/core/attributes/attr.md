# HAPEL Method Parameters

---

## $attr
### (null|array), (optional), default: null

Sets additional attributes for the tag.

Value      | Use
-----------|-------------
null       | prevents the attribute from being added to the tag 
array      | adds each item in the array as an attribute & value


### Examples:

##### Using an array:
```php
$attr = array('tabindex'=>'0','role'=>'button','aria-pressed'=>'false');
```
```html
<tag tabindex="0" role="button" aria-pressed="false" {...}
```