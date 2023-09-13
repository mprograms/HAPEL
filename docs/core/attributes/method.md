# HAPEL Method Parameters

---

## $method
### (string), (optional), default: null

Adds the method attribute to an HTML form tag.


| Value  | Use                                                |
|--------|----------------------------------------------------|
| null   | prevents the attribute from being added to the tag |
| string | adds the value of 'string' as the attribute        |


### Examples:

```php
$method = 'get';
```
```html
<tag method="get" {...}
```