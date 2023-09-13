# HAPEL Method Parameters

---

## $sources
### (array), (optional), default: null

Adds the sources attribute to an HTML tag.

The $sources array can contain any of the [source()](../methods/source.md) attributes.
The values to use in the array will depend on the type of source you are creating.



| Value | Use                                     |
|-------|-----------------------------------------|
| array | provides an array of sources to create  |


### Examples:

```php
$sources = [
    [
        'srcset'    =>  'flower_lg.jpg',
        'media'     =>  'min-width:1200px'
    ],
    [
        'srcset'    =>  'flower_sm.jpg',
        'media'     =>  'min-width:100px'
    ]
];
```
```html
<source srcset="flower_lg.jpg" media="min-width:1200px">
<source srcset="flower_sm.jpg" media="min-width:100px">
```