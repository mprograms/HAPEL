# HAPEL Core Method Reference

---
## \<iframe ...>


### Description

Creates an `<iframe>` html tag.

```php
iframe($src, $name, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$src](../attributes/src.md)     | no        | null    |
| [$title](../attributes/title.md) | no        | null    |
| [$class](../attributes/class.md) | no        | null    |
| [$id](../attributes/id.md)       | no        | null    |
| [$style](../attributes/style.md) | no        | null    |
| [$data](../attributes/data.md)   | no        | null    |
| [$attr](../attributes/attr.md)   | no        | null    |

 
### Return Values

`string`

### Example

Usage:
```php
echo iframe('https://remove-host.com/file.html','Remote File', 'my-iframe');
```
Result:
```html
<iframe src="https://remote-host.com/file.html" title="Remote File" class="my-iframe"></iframe>
```