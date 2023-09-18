# HAPEL Core Method Reference

---
## \<button ...>


### Description

Creates a `<button>` html tag.

```php
button($child, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required | Default   |
|----------------------------------|----------|-----------|
| [$child](../attributes/child.md) | no       | false     |
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