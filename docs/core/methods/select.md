# HAPEL Core Method Reference

---
## \<select ...>


### Description

Creates a `<select>` html tag.

```php
select($child, $name, $required, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                              | Required | Default   |
|----------------------------------------|----------|-----------|
| [$child](../attributes/child.md)       | no       | false     |
| [$name](../attributes/name.md)         | no       | null      |
| [$required](../attributes/required.md) | no       | false     |
| [$class](../attributes/class.md)       | no       | null      |
| [$id](../attributes/id.md)             | no       | null      |
| [$style](../attributes/style.md)       | no       | null      |
| [$data](../attributes/data.md)         | no       | null      |
| [$attr](../attributes/attr.md)         | no       | null      |

NOTE: Options uses the array's key / value pair as noted in the example below.

 
### Return Values

`string`

### Example

Usage:
```php
echo select('child', 'input-field', true);
```
Result:
```html
<select name="input-field" required="required">child</select>
```