<?php

/**
 * HAPEL BOILERPLATE TEMPLATE
 * This shows how to use HAPEL to create a html page.
 */


error_reporting(E_ALL);
ini_set('display_errors', '1');

$dir = dirname(__DIR__) . '/src/hapel.php';



require_once($dir);




$h = new HAPEL\HTML();
$l = new \HAPEL\Builder\Lists();



echo $h->doctype('html');
echo $h->html(true, 'en', array('bob' => '55555'));

echo $h->head(true);
echo $h->meta('robots', 'noindex, nofollow');
echo $h->title('HAPEL Boilerplate');
echo $h->head();

echo $h->body(true);

    echo $h->h1('HAPEL Boilerplate');

    echo $h->h2('What is HAPEL?');
    echo $h->p('');

    echo $h->h2('HAPEL Documentation');
    echo $h->p('All of the components that are provided in the HAPEL core are fully documented. You can find documentation below:');
    echo $l->makeUL([
        $h->a('Core Method Reference', '../docs/core/core_method_reference.md'),
        $h->a('Core Attribute Reference', '../docs/core/core_attribute_reference.md'),
        $h->a('Standard Methods', '../docs/core/methods/standard.md'),
        $h->a('a', '../docs/core/methods/a.md'),
        $h->a('base', '../docs/core/methods/area.md'),
        $h->a('br', '../docs/core/methods/br.md'),
        $h->a('button', '../docs/core/methods/button.md'),
        $h->a('comment', '../docs/core/methods/comment.md'),
        $h->a('datalist', '../docs/core/methods/datalist.md'),
        $h->a('doctype', '../docs/core/methods/doctype.md'),
        $h->a('form', '../docs/core/methods/form.md'),
        $h->a('hr', '../docs/core/methods/hr.md'),
        $h->a('html', '../docs/core/methods/html.md'),
        $h->a('iframe', '../docs/core/methods/iframe.md'),
        $h->a('img', '../docs/core/methods/img.md'),
        $h->a('input', '../docs/core/methods/input.md'),
        $h->a('label', '../docs/core/methods/label.md'),
        $h->a('link', '../docs/core/methods/link.md'),
        $h->a('map', '../docs/core/methods/map.md'),
        $h->a('meta', '../docs/core/methods/meta.md'),
        $h->a('meter', '../docs/core/methods/meter.md'),
        $h->a('myTag', '../docs/core/methods/myTag.md'),
        $h->a('Noscript', '../docs/core/methods/noscript.md'),
        $h->a('object', '../docs/core/methods/object.md'),
        $h->a('optgroup', '../docs/core/methods/optgroup.md'),
        $h->a('param', '../docs/core/methods/param.md'),
        $h->a('picture', '../docs/core/methods/picture.md'),
        $h->a('progress', '../docs/core/methods/progress.md'),
        $h->a('script', '../docs/core/methods/script.md'),
        $h->a('scriptlink', '../docs/core/methods/scriptlink.md'),
        $h->a('select', '../docs/core/methods/select.md'),
        $h->a('source', '../docs/core/methods/source.md'),
        $h->a('standard', '../docs/core/methods/standard.md'),
        $h->a('style', '../docs/core/methods/style.md'),
        $h->a('stylesheet', '../docs/core/methods/stylesheet.md'),
        $h->a('textarea', '../docs/core/methods/textarea.md'),
        $h->a('time', '../docs/core/methods/time.md'),
        $h->a('track', '../docs/core/methods/track.md'),
        $h->a('wbr', '../docs/core/methods/wbr.md'),
    ]);


    echo $h->h2('HAPEL Builders');
    echo $h->p('HAPEL comes with several Builders that makes creating more complex components easier. Below is a list of available Builders.');
    echo $l->makeUL([
        $h->a('Audio', 'builder/audio.php'),
        $h->a('Canvas', 'builder/canvas.php'),
        $h->a('Details', 'builder/details.php'),
        $h->a('Form', 'builder/form.php'),
        $h->a('Image Map', 'builder/imagemap.php'),
        $h->a('Picture', 'builder/picture.php'),
        $h->a('Stylesheet', 'builder/stylesheet.php'),
        $h->a('Table (Basics)', 'builder/table-basic.php'),
        $h->a('Table (Loop)', 'builder/table-loop.php'),
        $h->a('Video', 'builder/video.php'),
    ]);



echo $h->body();
echo $h->html(false);