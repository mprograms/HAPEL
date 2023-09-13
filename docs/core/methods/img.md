# HAPEL Core Method Reference

---
## \<img ...>


### Description

Creates a `<img>` html tag.

```php
img($src, $alt, $class, $id, $style, $data, $attr);
```

###Parameters

| Parameter                          | Required  | Default |
|------------------------------------|-----------|---------|
| [$src](../attributes/src.md)       | no        | null    |
| [$alt](../attributes/alt.md)       | no        | null    |
| [$class](../attributes/class.md)   | no        | null    |
| [$id](../attributes/id.md)         | no        | null    |
| [$style](../attributes/style.md)   | no        | null    |
| [$data](../attributes/data.md)     | no        | null    |
| [$attr](../attributes/attr.md)     | no        | null    |

 
### Return Values

`string`


### Example

Usage:
```php
echo img('myImage.jpg','altText','myClass');
```
Result:
```html
<img src="myImage.jpg", alt="altText" class="myClass">
```