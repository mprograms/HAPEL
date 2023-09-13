# HAPEL Method Parameters

---

## $selected
### (bool), (optional), default: false

Provides a true/false value of whether the item has been selected.


| Value | Use                         |
|-------|-----------------------------|
| bool  | should the item be selected |


### Examples:

Usage:
```php
 
$selected = true;
echo option('foo', 'Foo', $selected);
```
Result:
```html 
<option value="foo" selected="selected">Foo</option>

```