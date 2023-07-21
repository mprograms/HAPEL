# HAPEL Core Method Reference

---
##\<input type="color" ...>


###Description

Creates a `<input type="color">` html tag.

```php
color($name, $value, $required, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                                   | Required  | Default
--------------------------------------------|-----------|----------------
[$name](../attributes/name.md)              | no        | null
[$value](../attributes/value.md)            | no        | null
[$required](../attributes/required.md)      | no        | false
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
echo color('font-color','#696CCC');
```
Result:
```html
<input type="color" name="font-color" value="#696CCC">
```