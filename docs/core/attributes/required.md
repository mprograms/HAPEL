# HAPEL Method Parameters

---

## $required
### (bool), (optional), default: false

Adds the required attribute to an HTML tag.


Value      | Use
-----------|-------------
true       | sets the element to `required="required"`
false      | does not add anything to the element


### Examples:

```php
$required = true;
```
```html
<tag required="required" {...}
```

###Methods Using This Parameter
* [input()](../methods/input.md)
* checkbox
* [color](methods/color.md)
* [date](methods/date.md)
* [datetime](methods/datetime.md)
* [email](methods/email.md)
* [month](methods/month.md)
* [number](methods/number.md)
* [password](methods/password.md)
* radio
* range
* [search](methods/search.md)
* select
* [tel](methods/tel.md)
* [text](methods/text.md)
* textarea
* see [time](methods/time.md)
* url           