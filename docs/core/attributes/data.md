# HAPEL Method Parameters

---

## $data
### (null|array), (optional), default: null

Sets the data attribute for the tag.

Value      | Use
-----------|-------------
null       | prevents the attribute from being added to the tag 
array      | adds each item in the array as an attribute value


### Examples:

##### Using an array:
```php
$data = array('name'=>'felix','animal'=>'cat');
```
```html
<tag data-name="felix" data-animal="cat" {...}
```