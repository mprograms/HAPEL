# HAPEL Core Method Reference

---
##\<figcaption ...>


###Description

Creates a `<figcaption>` html tag.

```php
figCaption($child, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                           | Required  | Default
------------------------------------|-----------|----------------
[$child](../attributes/child.md)    | yes       | true
[$class](../attributes/class.md)    | no        | null
[$id](../attributes/id.md)          | no        | null
[$style](../attributes/style.md)    | no        | null
[$data](../attributes/data.md)      | no        | null
[$attr](../attributes/attr.md)      | no        | null

 
###Return Values

`string`


###Example

Usage:
```php
echo img('myImage.jpg','altText','myClass');
```
Result:
```html
<img src="myImage.jpg", alt="altText" class="myClass">
```