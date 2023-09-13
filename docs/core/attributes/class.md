# HAPEL Method Parameters

---

## $class
### (null|string|array), (optional), default: null

Sets the class attribute for the tag.

| Value  | Use                                                 |
|--------|-----------------------------------------------------|
| null   | prevents the attribute from being added to the tag  | 
| string | adds the content of 'string' as the attribute value |
| array  | adds each item in the array as an attribute value   |


### Examples:

##### Using a string:
```php
$class = 'class1 class2 class3';
```
```html
<tag class="class1 class2 class3" {...}
```

##### Using an array:
```php
$class = array('class1','class2','class3');
```
```html
<tag class="class1 class2 class3" {...}
```