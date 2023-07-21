# HAPEL Core Method Reference

---
##\<a ...>


###Description

Creates a `<a>` html tag.

```php
a($child, $href, $title, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                               | Required  | Default
----------------------------------------|-----------|--------------
[$child](../attributes/child.md)        | no        | true
[$href](../attributes/href.md)          | no        | null
[$title](../attributes/title.md)        | no        | null
[$class](../attributes/class.md)        | no        | null
[$id](../attributes/id.md)              | no        | null
[$style](../attributes/style.md)        | no        | null
[$data](../attributes/data.md)          | no        | null
[$attr](../attributes/attr.md)          | no        | null

###Return Values

`string`


###Example

Usage:
```php
echo a('click me', 'myFile.html','Click on Me', 'myClass');
```
Result:
```html
<a href="myFile.html" class="myClass" title="Click on Me">Click Me</a>
```