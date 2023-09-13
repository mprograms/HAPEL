# HAPEL Core Method Reference

---
## \<datalist ...>


### Description

Creates a `<dataist>` html tag populated with `<option>` tags.

```php
datalist($child, $id, $attr;
```

### Parameters

| Parameter                          | Required  | Default |
|------------------------------------|-----------|---------|
| [$child](../attributes/options.md) | no        | false   |
| [$id](../attributes/id.md)         | no        | null    |
| [$attr](../attributes/attr.md)     | no        | null    |


 
### Return Values

`string`

### Example

Usage:
```php
echo datalist('content', 'my-id);
```
Result:
```html
<datalist id="my-id">content</datalist>
```