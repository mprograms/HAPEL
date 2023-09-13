# HAPEL Core Method Reference

---
## \<button ...>


### Description

Creates a `<button>` html tag.

```php
button($child, $name, $value, $type, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required | Default   |
|----------------------------------|----------|-----------|
| [$child](../attributes/child.md) | no       | false     |
| [$name](../attributes/name.md)   | no       | null      |
| [$value](../attributes/value.md) | no       | null      |
| [$type](../attributes/type.md)   | no       | 'button'  |
| [$class](../attributes/class.md) | no       | null      |
| [$id](../attributes/id.md)       | no       | null      |
| [$style](../attributes/style.md) | no       | null      |
| [$data](../attributes/data.md)   | no       | null      |
| [$attr](../attributes/attr.md)   | no       | null      |

 
### Return Values

`string`


### Example

Usage:
```php
echo button('Click Me');
```
Result:
```html
<button>Click Me</button>
```