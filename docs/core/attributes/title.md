# HAPEL Method Parameters

---

## $title
### (string), (optional), default: null

Adds the title attribute to an HTML tag.


| Value  | Use                                                |
|--------|----------------------------------------------------|
| null   | prevents the attribute from being added to the tag |
| string | adds the value of 'string' as the attribute        |


### Examples:

```php
$title = 'Click Me';
```
```html
<tag title="Click Me" {...}
```

###Methods Using This Parameter
* [a()](../methods/a.md)