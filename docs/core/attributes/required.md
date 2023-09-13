# HAPEL Method Parameters

---

## $required
### (bool), (optional), default: false

Adds the required attribute to an HTML tag.


| Value | Use                                        |
|-------|--------------------------------------------|
| true  | sets the element to `required="required"`  |
| false | does not add anything to the element       |


### Examples:

```php
$required = true;
```
```html
<tag required="required" {...}
```