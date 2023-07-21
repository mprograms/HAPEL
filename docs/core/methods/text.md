# HAPEL Core Method Reference

---
##\<input type="text" ...>


###Description

Creates a `<input type="text">` html tag.

```php
text($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr);
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
echo text('name','My Name');
```
Result:
```html
<input type="text" name="name" value="My Name" required="required">
```