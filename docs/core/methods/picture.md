# HAPEL Core Method Reference

---
##\<picture ...>


###Description

Creates a `<picture>` html tag.

```php
picture($source, $src, $alt, $class, $id, $style, $data, $attr);
```

###Parameters

Parameter                           | Required  | Default
------------------------------------|-----------|----------------
[$srcset](../attributes/srcset.md)  | yes       |
[$src](../attributes/src.md)        | yes       |
[$alt](../attributes/alt.md)        | no        | null
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
$source = array(
    array(
        'media' => '650px',
        'srcset' => 'large.jpg'
    ),
    array(
        'media' => '350px',
        'srcset' => 'small.jpg'
    )
);

echo picture($source, 'default.jpg','altText','myClass');
```
Result:
```html
<picture class="myClass">
    <source media="(min-width: 650px)" srcset="large.jpg">
    <source media="(min-width: 350px)" srcset="small.jpg">
    <img src="default.jpg" alt="altText" />
</picture>
```