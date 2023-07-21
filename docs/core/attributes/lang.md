# HAPEL Method Parameters

---

## $lang
### (null|string), (optional), default: null

Adds the lang attribute to an HTML tag.

***Note: This is only used for \<html\> tags.*** 

Value      | Use
-----------|-------------
null       | prevents the attribute from being added
string     | adds the value of 'string' as the attribute


### Examples:

```php
$lang = 'en';
```
```html
<tag lang="en" {...}
```

###Methods Using This Parameter
* [html()](../methods/html.md)