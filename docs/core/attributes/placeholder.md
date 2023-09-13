# HAPEL Method Parameters

---

## $placeholder
### (string), (optional), default: null

Adds the placeholder attribute to an HTML tag.


Value      | Use
-----------|-------------
null       | prevents the attribute from being added to the tag
string     | adds the value of 'string' as the attribute


### Examples:

```php
$placeholder = 'First Name';
```
```html
<tag placeholder="First Name" {...}
```

###Methods Using This Parameter
* [input()](../methods/input.md)
* [textarea()](../methods/textarea.md)