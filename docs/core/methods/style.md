# HAPEL Core Method Reference

---
## \<style ...>


### Description

Creates a `<style>` html tag.

```php
style($child, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$child](../attributes/child.md) | yes       | false   |
| [$attr](../attributes/attr.md)   | no        | null    |


### Return Values

`string`


### Example

Usage:
```php
echo style('body { color: red;}');
```
Result:
```html
<style type="text/css">
body { color: red;}
</style>
```