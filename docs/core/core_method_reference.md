
# HAPEL Core Method Reference

---

Because HAPEL calls the majority of its core methods in the same way, it would be redundant to document every single method.
Because of this, methods that share the same call format are documented as "standard" below. 

Other methods that use different formatting are documented separately.

---

| Tag               | Method                                                                                    | Documentation                           |
|-------------------|-------------------------------------------------------------------------------------------|-----------------------------------------|
| <!--comment-->    | `comment($child)`                                                                         | see [comment](methods/comment.md)       |
| !doctype          | `doctype($type)`                                                                          | see [doctype](methods/doctype.md)       |
| a                 | `a($child, $href, $title, $class, $id, $style, $data, $attr)`                             | see [a](methods/a.md)                   |
| abbr              | `abbr($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| address           | `address($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| area              | `area($shape, $coords, $href, $rel, $alt, $attr)`                                         | see [area](methods/area.md)             |
| article           | `article($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| aside             | `aside($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| audio             | `audio($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| b                 | `b($child, $class, $id, $style, $data, $attr)`                                            | see [standard](methods/standard.md)     |
| base              | `base($href, $target)`                                                                    | see [base](methods/base.md)             |
| bdi               | `bdi($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| bdo               | `bdo($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| big               | `big($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| blockquote        | `blockquote($child, $class, $id, $style, $data, $attr)`                                   | see [standard](methods/standard.md)     |
| body              | `body($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| br                | `br($class, $id, $style, $attr)`                                                          | see [br](methods/br.md)                 |
| button            | `button($child, $name, $value, $type, $class, $id, $style, $attr)`                        | see [button](methods/button.md)         |
| canvas            | `canvas($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| caption           | `caption($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| cite              | `cite($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| code              | `code($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| col               | `col($child, $span, $class, $id, $style, $data, $attr)`                                   | see [standard](methods/standard.md)     |
| colgroup          | `colgroup($child, $class, $id, $style, $data, $attr)`                                     | see [standard](methods/standard.md)     |
| data              | `data($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| datalist          | `datalist($child, $id, $attr)`                                                            | see [datalist](methods/datalist.md)     |
| dd                | `dd($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| del               | `del($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| details           | `details($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| dfn               | `dfn($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| dialog            | `dialog($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| div               | `div($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| dl                | `dl($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| dt                | `dt($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| em                | `em($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| fieldset          | `fieldset($child, $class, $id, $style, $data, $attr)`                                     | see [standard](methods/standard.md)     |
| figcaption        | `figCaption($child, $class, $id, $style, $data, $attr)`                                   | see [standard](methods/standard.md)     |
| figure            | `figure($child, $class, $id, $style, $data, $attr`                                        | see [standard](methods/standard.md)     |
| footer            | `footer($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| form              | `form($child, $method, $action, $class, $id, $style, $data, $attr)`                       | see [form](methods/form.md)             |
| h1                | `h1($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| h2                | `h2($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| h3                | `h3($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| h4                | `h4($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| h5                | `h5($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| h6                | `h6($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| head              | `head($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| header            | `header($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| hr                | `hr($class, $id, $style, $attr)`                                                          | see [hr](methods/hr.md)                 |
| html              | `html($child, $lang, $attr)`                                                              | see [html](methods/html.md)             |
| i                 | `i($child, $class, $id, $style, $data, $attr)`                                            | see [standard](methods/standard.md)     |
| iframe            | `iframe($src, $title, $class, $id, $style, $data, $attr)`                                 | see [iframe](methods/iframe.md)         |
| img               | `img($src, $alt, $class, $id, $style, $data, $attr)`                                      | see [img](methods/img.md)               |
| input             | `input($type, $name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)` | see [input](methods/input.md)           |
| ins               | `ins($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |                                                                                          |                                         |
| kdb               | `kbd($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| label             | `label($child, $for, $class, $id, $style, $data, $attr)`                                  | see [label](methods/label.md)           |
| legend            | `legend($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| li                | `li($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| link              | `link($rel, $href, $type, $attr)`                                                         | see [link](methods/link.md)             |
| main              | `main($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| map               | `map($child, $name, $class, $id, $style, $data, $attr)`                                   | see [map](methods/map.md)               |
| mark              | `mark($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| meta              | `meta($name, $content, $atts)`                                                            | see [meta](methods/meta.md)             |
| meter             | `meter($text, $value, $min, $max, $class, $id, $style, $data, $attr)`                     | see [meter](methods/meter.md)           |
| nav               | `nav($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| noscript          | `noscript($child, $attr)`                                                                 | see [noscript](methods/noscript.md)     |
| object            | `object($data, $type, $name, $class, $id, $style, $attr)`                                 | see [object](methods/object.md)         |
| ol                | `ol($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| optgroup          | `optgroup($child, $label, $disabled)`                                                     | see [standard](methods/optgroup.md)     |
| option            | `option($child, $value, $selected)`                                                       | see [option](methods/option.md)         |
| output            | `output($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| p                 | `p($child, $class, $id, $style, $data, $attr)`                                            | see [standard](methods/standard.md)     |
| param             | `param($name, $value, $attr)`                                                             | see [param](methods/param.md)           |
| picture           | `picture($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| pre               | `pre($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| progress          | `progress($value, $max, $child, $class, $id, $style, $data, $attr)`                       | see [progress](methods/progress.md)     |    
| q                 | `q($child, $class, $id, $style, $data, $attr)`                                            | see [standard](methods/standard.md)     |
| rp                | `rp($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| rt                | `rt($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| ruby              | `ruby($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| samp              | `samp($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| script (internal) | `script($child, $type, $attr)`                                                            | see [script](methods/script.md)         |
| script (external) | `scriptLink($src, $type, $attr)`                                                          | see [scriptlink](methods/scriptlink.md) |
| section           | `section($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| select            | `select($child, $name, $required, $class, $id, $style, $data, $attr)`                     | see [select](methods/select.md)         |
| small             | `small($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| source            | `source($src, $type, $media, $srcset, $sizes, $attr)`                                     | see [source](methods/source.md)         |
| span              | `span($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| strong            | `strong($child, $class, $id, $style, $data, $attr)`                                       | see [standard](methods/standard.md)     |
| style             | `style($child, $attr)`                                                                    | see [style](methods/style.md)           |
| stylesheet        | `stylesheet($href, $attr)`                                                                | see [stylesheet](methods/stylesheet.md) |
| sub               | `sub($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| summary           | `summary($child, $class, $id, $style, $data, $attr)`                                      | see [standard](methods/standard.md)     |
| sup               | `sup($child, $class, $id, $style, $data, $attr)`                                          | see [standard](methods/standard.md)     |
| svg               |                                                                                           |                                         |
| table             | `table($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| tbody             | `tbody($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| td                | `td($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| template          | `template($child, $class, $id, $style, $data, $attr)`                                     | see [standard](methods/standard.md)     |
| textarea          | `textarea($name, $value, $required, $class, $id, $style, $data, $attr)`                   | see [textarea](methods/textarea.md)     |
| tfoot             | `tfoot($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| th                | `th($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| thead             | `thead($child, $class, $id, $style, $data, $attr)`                                        | see [standard](methods/standard.md)     |
| time              | `time($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| title             | `title($text)`                                                                            | see [title](methods/title.md)           |
| tr                | `tr($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| track             | `track($src, $king, $srclang, $label, $attr)`                                             | see [track](methods/track.md)           |
| ul                | `ul($child, $class, $id, $style, $data, $attr)`                                           | see [standard](methods/standard.md)     |
| var               | `var_($child, $class, $id, $style, $data, $attr)`                                         | see [standard](methods/standard.md)     |
| video             | `video($class = null, $id = null, $style = null, $attr = null)`                           | see [standard](methods/standard.md)     |
| wbr               | `wbr($class = null, $id = null, $style = null, $attr = null)`                             | see [wbr](methods/wbr.md)               |








### Deprecated Tags

The following tags are listed as deprecated or no longer supported by modern HTML. HAPEL still has support for some of these tags.
Consult the table below for details of what versions still have support. The use of replacement tags is encouraged,
however if you need to use a tag that is not supported by HAPEL, you can use the [myTag()](methods/myTag.md) function to create your own.

| Tag       | Method                                               | Supported in HAPEL Versions | Suggested Alternative Tag |
|-----------|------------------------------------------------------|-----------------------------|---------------------------|
| acronym   | `acronym($child, $class, $id, $style, $data, $attr)` | 0.x, 1.x                    | abbr                      |
| applet    |                                                      | -                           | object                    |
| basefont  |                                                      | -                           |                           |
| big       | `big($child, $class, $id, $style, $data, $attr)`     | 0.x, 1.x                    |                           |
| blink     |                                                      | -                           |                           |
| center    |                                                      | -                           |                           |
| dir       |                                                      | -                           | ul                        |
| embed     |                                                      | -                           | object                    |
| font      |                                                      | -                           |                           |
| frame     |                                                      | -                           | iframe                    |
| frameset  |                                                      | -                           |                           |
| noframes  |                                                      | -                           |                           |
| marquee   |                                                      | -                           |                           |
| menu      |                                                      | -                           |                           |
| plaintext |                                                      | -                           |                           |
| s         | `s($child, $class, $id, $style, $data, $attr)`       | 0.x, 1.x                    |                           |
| strike    | `strike($child, $class, $id, $style, $data, $attr)`  | 0.x, 1.x                    |                           |
| tt        |                                                      | -                           | kbd, code, samp           |
| u         | `ul($child, $class, $id, $style, $data, $attr)`      | 0.x, 1.x                    |                           |




| input (button)         | ``                                                                                               |                                         |
| input (checkbox)       | ``                                                                                               |                                         |
| input (color)          | `color($name, $value, $required, $class, $id, $style, $data, $attr)`                             | see [color](methods/color.md)           |
| input (date)           | `date($name, $value, $required, $class, $id, $style, $data, $attr)`                              | see [date](methods/date.md)             |
| input (datetime-local) | `datetime($name, $value, $required, $class, $id, $style, $data, $attr)`                          | see [datetime](methods/datetime.md)     |
| input (email)          | `email($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`               | see [email](methods/email.md)           |
| input (file)           | `file($name, $class, $id, $style, $data, $attr)`                                                 | see [file](methods/file.md)             |
| input (hidden)         | `hidden($name, $value)`                                                                          | see [hidden](methods/hidden.md)         |
| input (image)          | ``                                                                                               |                                         |
| input (month)          | `month($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`               | see [month](methods/month.md)           |
| input (number)         | `number($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`              | see [number](methods/number.md)         |
| input (password)       | `password($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`            | see [password](methods/password.md)     |
| input (radio)          | ``                                                                                               |                                         |
| input (range)          | ``                                                                                               |                                         |
| input (reset)          | ``                                                                                               |                                         |
| input (search)         | `search($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`              | see [search](methods/search.md)         |
| input (submit)         | `submit($value, $class, $id, $style, $data, $attr)`                                              |                                         |
| input (tel)            | `tel($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`                 | see [tel](methods/tel.md)               |
| input (text)           | `text($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`                | see [text](methods/text.md)             |
| input (time)           | `time($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`                | see [time](methods/time.md)             |
| input (url)            | `url($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`                 | see [url](methods/url.md)               |
| input (week)           | `url($name, $value, $required, $placeholder, $class, $id, $style, $data, $attr)`                 | see [url](methods/url.md)               |