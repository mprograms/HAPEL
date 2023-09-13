# HAPEL Core Method Reference

---
## \<hr ...>


### Description

Creates a `<hr>` html tag.

```php
hr($class, $id, $style, $attr);
```

### Parameters

| Parameter                        | Required  | Default  |
|----------------------------------|-----------|----------|
| [$class](../attributes/class.md) | no        | null     |
| [$id](../attributes/id.md)       | no        | null     |
| [$style](../attributes/style.md) | no        | null     |
| [$attr](../attributes/attr.md)   | no        | null     |


### Return Values

`string`


### Example

Usage:
```php
echo hr('myClass');
```
Result:
```html
<hr class="myClass">
```