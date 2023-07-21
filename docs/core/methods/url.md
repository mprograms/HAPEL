# HAPEL Core Method Reference

---
##\<input type="url" ...>


###Description

Creates a `<input type="url">` html tag.

```php
email($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                                   | Required  | Default
--------------------------------------------|-----------|----------------
[$name](../attributes/name.md)              | no        | null
[$value](../attributes/value.md)            | no        | null
[$required](../attributes/required.md)      | no        | false
[$placeholder](../attributes/placeholder.md)| no        | null
[$class](../attributes/class.md)            | no        | null
[$id](../attributes/id.md)                  | no        | null
[$style](../attributes/style.md)            | no        | null
[$data](../attributes/data.md)              | no        | null
[$attr](../attributes/attr.md)              | no        | null

 
###Return Values

`string`


###Example

Usage:
```php
echo url('website');
```
Result:
```html
<input type="url" name="website">
```