# HAPEL Core Method Reference

---
## \<meta ...>


### Description

Creates a `<meta>` html tag.

```php
meta($name, $content, $attr);
```

### Parameters

| Parameter                            | Required  | Default |
|--------------------------------------|-----------|---------|
| [$name](../attributes/name.md)       | yes       | null    |
| [$content](../attributes/content.md) | yes       | null    |
| [$attr](../attributes/attr.md)       | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo meta('robots', 'index, follow');
```
Result:
```html
<meta name="robots" content="index, follow">
```