# HAPEL Core Method Reference

---
## \<source ...>


### Description

Creates a `<source>` html tag.

```php
source($src, $type, $media, $scrset, $sizes, $attr);
```

### Parameters

| Parameter                          | Required | Default |
|------------------------------------|----------|---------|
| [$src](../attributes/src)          | no       | null    |
| [$type](../attributes/type.md)     | no       | null    |
| $media                             | no       | null    |
| [$srcset](../attributes/srcset.md) | no       | null    |
| $sizes                             | no       | null    |
| [$attr](../attributes/attr.md)     | no       | null    |

Depending on the type of source tag you are creating, (picture, audio, video, etc.),
the attributes that you use will vary.


### Return Values

`string`

### Example

#### To create an audio source:

Usage:
```php
echo source('podcast.mp3', 'audio/mpeg');
```
Result:
```html
<source src="podcast.mp3" type="audio/mpeg">
```

#### To create a picture source:

Usage:
```php
echo source(null, null, 'min-width:1200px', 'flower_lg.jpg');
echo source(null, null, 'min-width:100px', 'flower_sm.jpg');
```
Result:
```html
<source srcset="flower_lg.jpg" media="min-width:1200px">
<source srcset="flower_sm.jpg" media="min-width:100px">
```