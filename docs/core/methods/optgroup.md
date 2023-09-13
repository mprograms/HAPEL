# HAPEL Core Method Reference

---
## \<option ...>


### Description

Creates an `<optgroup>` html tag.

```php
optgroup($child, $value, $disabled);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [child](../attributes/child.md)  | no        | false   |
| [$label](../attributes/label.md) | no        | null    |
| $disabled                        | no        | false   |

 
### Return Values

`string`

### Example

Usage:
```php
echo optgroup('...','Winter Months');
```
Result:
```html
<optgroup label="Winter Months">
    ...
</optgroup>
```