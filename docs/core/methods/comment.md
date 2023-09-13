# HAPEL Core Method Reference

---
## \<!--comment-->


### Description

Creates a `<!--comment-->` html tag.

```php
comment($child);
```

### Parameters

| Parameter                         | Required  | Default |
|-----------------------------------|-----------|---------|
| [$child](../attributes/child.md)  | no        | false   |

### Return Values

`string`


### Example

Usage:
```php
echo comment('begin gallery');
```
Result:
```html
<!-- begin gallery -->
```