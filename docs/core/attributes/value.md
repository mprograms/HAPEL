# HAPEL Method Parameters

---

## $value
### (string), (optional), default: null

Adds the value attribute to an HTML tag.


| Value    | Use                                                 |
|----------|-----------------------------------------------------|
| null     | prevents the attribute from being added to the tag  |
| string   | adds the value of 'string' as the attribute         |


### Examples:

```php
$value = 'My Name';
```
```html
<tag value="My Name" {...}
```