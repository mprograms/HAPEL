# HAPEL Method Parameters

---

## $href
### (string), (optional), default: null

Adds the href attribute to an HTML tag.


Value      | Use
-----------|-------------
null       | prevents the attribute from being added to the tag
string     | adds the value of 'string' as the attribute


### Examples:

```php
$href = 'mylink.html';
```
```html
<tag href="mylink.html" {...}
```

###Methods Using This Parameter
* [link()](../methods/link.md)
* [styleLink()](../methods/stylesheet.md)
* [a()](../methods/a.md) 