# HAPEL Core Method Reference

---
## \<progress ...>


### Description

Creates a `<progress>` html tag.

```php
progress($value, $max, $child, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                                    | Required | Default |
|----------------------------------------------|----------|---------|
| [$child](../attributes/child.md)             | no       | false   |
| [$value](../attributes/value.md)             | yes      | 0       |
| [$max](../attributes/max.md)                 | yes      | 0       |
| [$class](../attributes/class.md)             | no       | null    |
| [$id](../attributes/id.md)                   | no       | null    |
| [$style](../attributes/style.md)             | no       | null    |
| [$data](../attributes/data.md)               | no       | null    |
| [$attr](../attributes/attr.md)               | no       | null    |

 
### Return Values

`string`


### Example

Usage:
```php
echo progress('25% Done', 25, 100, 'my-class');
```
Result:
```html
<progress value="25" max="100" class="my-class">25% Done</progress>
```