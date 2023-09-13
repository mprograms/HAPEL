# HAPEL Method Parameters

---

## $srcset
### (string), (optional), Default: null

Provides the data to build a scrset.


| Value  | Use                                          |
|--------|----------------------------------------------|
| string | adds the value of 'string' as the attribute  |

```php
    $srcset = array(
        array(
            'media'     => 'Image_Width',
            'srcset'    => 'Path_To_Image'
        )
    );
```


### Examples:

```php
    $srcset = array(
        array(
            'media' => '650px',
            'srcset' => 'large.jpg'
        ),
        array(
            'media' => '350px',
            'srcset' => 'small.jpg'
        )
    );
```
```html
<source media="(min-width: 650px)" srcset="large.jpg">
<source media="(min-width: 350px)" srcset="small.jpg">
```