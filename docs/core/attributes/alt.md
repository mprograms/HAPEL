# HAPEL Method Parameters

---

## $alt
### (string), (optional), default: null

Adds the alt attribute to an HTML tag.


Value      | Use
-----------|-------------
null       | prevents the attribute from being added to the tag
string     | adds the value of 'string' as the attribute


### Examples:

```php
$alt = 'Alt Text';
```
```html
<tag alt="Alt Text" {...}
```

###Methods Using This Parameter
* [img()](../methods/img.md)