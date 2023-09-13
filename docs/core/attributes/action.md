# HAPEL Method Parameters

---

## $action
### (string), (optional), default: null

Adds the action attribute to an HTML form tag.


| Value  | Use                                                |
|--------|----------------------------------------------------|
| null   | prevents the attribute from being added to the tag |
| string | adds the value of 'string' as the attribute        |


### Examples:

```php
$action = 'send.php';
```
```html
<tag action="send.php" {...}
```