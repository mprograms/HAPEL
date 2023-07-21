
#HAPEL Core Method Reference

---

Because HAPEL calls the majority of its core methods in the same way, it would be redundant to document every single method. As a result methods that share the same call format are documented as "standard" below. 

Other methods that use different formatting are documented separately.

---

### Root & Document Elements

Tag            | Method                                                         | Documentation
---------------|----------------------------------------------------------------|---------------------------------------
doctype        | `doctype($type)`                                               | see [doctype](methods/doctype.md)
html           | `html($child, $lang, $attr)`                                   | see [html](methods/html.md)
head           | `head($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
body           | `body($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)

### Header Elements

Tag            | Method                                                         | Documentation
---------------|----------------------------------------------------------------|---------------------------------------
meta           | `meta($name, $content, $atts)`                                 | see [meta](methods/meta.md)
link           | `link($rel, $href, $type, $attr)` (also see link - style)      | see [link](methods/link.md)
title          | `title($child)`                                                | see [title](methods/title.md)
script         | `script($child, $type, $attr)`                                 | see [script](methods/script.md)
script         | `scriptLink($src, $type, $attr)`                               | see [scriptlink](methods/scriptlink.md)
style          | `style($child, $attr)`                                         | see [style](methods/style.md)
link - style   | `getStylesheet($href, $attr)`                                  | see [stylesheet](methods/stylesheet.md)



### Block Level Elements

Tag            | Method                                                         | Documentation
---------------|----------------------------------------------------------------|---------------------------------------
article        | `article($child, $class, $id, $style, $data, $attr)`           | see [standard](methods/standard.md)
aside          | `aside($child, $class, $id, $style, $data, $attr)`             | see [standard](methods/standard.md)
div            | `div($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
footer         | `footer($child, $class, $id, $style, $data, $attr)`            | see [standard](methods/standard.md)
header         | `header($child, $class, $id, $style, $data, $attr)`            | see [standard](methods/standard.md)
hr             | `hr($class, $id, $style, $attr)`                               | see [hr](methods/hr.md)
main           | `main($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
nav            | `nav($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
section        | `section($child, $class, $id, $style, $data, $attr)`           | see [standard](methods/standard.md)

### Block Level Text Elements

Tag            | Method                                                         | Documentation
---------------|----------------------------------------------------------------|---------------------------------------
address        | `address($child, $class, $id, $style, $data, $attr)`           | see [standard](methods/standard.md)
blockquote     | `blockquote($child, $class, $id, $style, $data, $attr)`        | see [standard](methods/standard.md)
p              | `p($child, $class, $id, $style, $data, $attr)`                 | see [standard](methods/standard.md)
h1             | `h1($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
h2             | `h2($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
h3             | `h3($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
h4             | `h4($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
h5             | `h5($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
h6             | `h6($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
pre            | `pre($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)


### Inline Elements

Tag            | Method                                                         | Documentation
---------------|----------------------------------------------------------------|---------------------------------------
a              | `a($child, $href, $title, $class, $id, $style, $data, $attr)`  | see [a](methods/a.md)
abbr           | `abbr($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
acronym        | `acronym($child, $class, $id, $style, $data, $attr)`           | see [standard](methods/standard.md)
b              | `b($child, $class, $id, $style, $data, $attr)`                 | see [standard](methods/standard.md)
bdo            | `bdo($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
big            | `big($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
br             | `br($class, $id, $style, $attr)`                               | see [br](methods/br.md)
cite           | `cite($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
code           | `code($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
dfn            | `dfn($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
em             | `em($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
i              | `i($child, $class, $id, $style, $data, $attr)`                 | see [standard](methods/standard.md)
lbd            | `lbd($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
output         | `output($child, $class, $id, $style, $data, $attr)`            | see [standard](methods/standard.md)
q              | `q($child, $class, $id, $style, $data, $attr)`                 | see [standard](methods/standard.md)
samp           | `samp($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
small          | `small($child, $class, $id, $style, $data, $attr)`             | see [standard](methods/standard.md)
span           | `span($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
strong         | `strong($child, $class, $id, $style, $data, $attr)`            | see [standard](methods/standard.md)
sub            | `sub($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
sup            | `sup($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)
time           | `time($child, $class, $id, $style, $data, $attr)`              | see [standard](methods/standard.md)
tt             | `tt($child, $class, $id, $style, $data, $attr)`                | see [standard](methods/standard.md)
var            | `var($child, $class, $id, $style, $data, $attr)`               | see [standard](methods/standard.md)


### Image Elements

Tag            | Method                                                             | Documentation
---------------|--------------------------------------------------------------------|---------------------------------------
figure         | `figure($src, $alt, $caption, $class, $id, $style, $data, $attr`   | see [figure](methods/img.md)
figcaption     | `figCaption($child, $class, $id, $style, $data, $attr)`            | see [standard](methods/standard.md)
img            | `img($src, $alt, $class, $id, $style, $data, $attr)`               | see [img](methods/img.md)
picture        | `picture($source, $alt, $class, $id, $style, $data, $attr)`        | see [picture](methods/picture.md)

### Form Elements

Tag                 | Method                                                                                        | Documentation
--------------------|-----------------------------------------------------------------------------------------------|---------------------------------------
form                | `form($child, $method, $action, $class, $id, $style, $data, $attr)`                           | see [form](methods/form.md)        
button              | ``
fieldset            | ``
legend              | ``
input               | `input($name, $value, $type, $required, $placeholder, $class, $id, $style, $data, $attr)`     | see [input](methods/input.md)
checkbox            | ``
color               | `color($name, $value, $required, $class, $id, $style, $data, $attr)`                          | see [color](methods/color.md)
date                | `date($name, $value, $required, $class, $id, $style, $data, $attr)`                           | see [date](methods/date.md)
datetime-local      | `datetime($name, $value, $required, $class, $id, $style, $data, $attr)`                       | see [datetime](methods/datetime.md)
email               | `email($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`            | see [email](methods/email.md)
file                | `file($name, $class, $id, $style, $data, $attr)`                                              | see [file](methods/file.md)
hidden              | `hidden($name, $value)`                                                                       | see [hidden](methods/hidden.md)
image               | ``
month               | `month($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`            | see [month](methods/month.md)
number              | `number($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`           | see [number](methods/number.md)
password            | `password($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`         | see [password](methods/password.md)
radio               | ``
range               | ``
reset               | ``
search              | `search($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`           | see [search](methods/search.md)
select              | ``
submit              | `submit($value, $class, $id, $style, $data, $attr)`
tel                 | `tel($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`              | see [tel](methods/tel.md)
text                | `text($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`             | see [text](methods/text.md)
textarea            | ``
time                | `time($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`             | see [time](methods/time.md)
url                 | `url($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`              | see [url](methods/url.md)

datalist

submit         | `submit($value, $class, $id, $style, $data, $attr)`

label          | ``

  