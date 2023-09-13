# HAPEL Core Method Reference

---
## \<tag ...>


### Description

HAPEL calls the majority of its methods in the same way. This is known as the HAPEL Standard Parameter Schema.
It would be redundant to document every method that uses this schema. As a result, a single example is shown below.

Simply replace `method_name` with the desired function call as found in the [HAPEL Core Method Reference Index](../core_method_reference.md). 

```php
method_name($child, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                        | Required  | Default |
|----------------------------------|-----------|---------|
| [$child](../attributes/child.md) | no        | false   |
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
echo tag('my-class','my-id');
```
Result:
```html
<tag class="my-class" id="my-id">
```