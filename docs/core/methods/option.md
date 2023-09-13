# HAPEL Core Method Reference

---
## \<option ...>


### Description

Creates an `<option>` html tag.

```php
option($child, $value, $selected);
```

### Parameters

| Parameter                              | Required  | Default |
|----------------------------------------|-----------|---------|
| [child](../attributes/child.md)        | no        | false   |
| [$value](../attributes/value.md)       | no        | null    |
| [$selected](../attributes/selected.md) | no        | false   |

 
### Return Values

`string`

### Example

Usage:
```php
$options = [
 'Bob',
 'Joe',
 'Sarah'
 ];
 
echo datalist($options,'search-data');
```
Result:
```html
<datalist id="search-data">
    <option value="Bob" />
    <option value="Joe" />
    <option value="Sarah" />
</datalist>
```