# HAPEL Core Method Reference

---
## \<textarea ...>


### Description

Creates a `<textarea>` html tag.

```php
textarea($name, $value, $required, $class, $id, $style, $data, $attr);
```

### Parameters

| Parameter                                    | Required  | Default |
|----------------------------------------------|-----------|---------|
| [$name](../attributes/name.md)               | no        | null    |
| [$value](../attributes/value.md)             | no        | null    |
| [$required](../attributes/required.md)       | no        | null    |
| [$class](../attributes/class.md)             | no        | null    |
| [$id](../attributes/id.md)                   | no        | null    |
| [$style](../attributes/style.md)             | no        | null    |
| [$data](../attributes/data.md)               | no        | null    |
| [$attr](../attributes/attr.md)               | no        | null    |


### Return Values

`string`

### Example

Usage:
```php
echo textarea('comments', 'My Comments', true, 'comment-field');
```
Result:
```html
<textarea name="comments" required="required" class="comment-field">My Comments</textarea>
```