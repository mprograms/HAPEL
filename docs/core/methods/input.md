# HAPEL Core Method Reference

---
##\<input ...>


###Description

Creates a `<input>` html tag.

```php
input($name, $value, $type, $placeholder, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                                   | Required  | Default
--------------------------------------------|-----------|----------------
[$name](../attributes/name.md)              | no        | null
[$value](../attributes/value.md)            | no        | null
[$type](../attributes/type.md)              | no        | null
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
echo input('fname','First Name','text','Enter your First Name','inputClass');
```
Result:
```html
<input type="text" name="fname" value="First Name" placeholder="Enter your First Name" class="inputClass">
```