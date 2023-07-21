<?php

/**
 * HAPEL BOILERPLATE TEMPLATE
 * This shows how to use HAPEL to create a html page.
 */


error_reporting(E_ALL);
ini_set('display_errors', '1');

$dir = dirname(__DIR__) . '/src/hapel.php';

require_once($dir);


//$time1 = microtime();

$HTML = new HAPEL\HTML(array(
    'minify'=>false,
    'xhtml'=>true
));


    echo $HTML->doctype('html');
    echo $HTML->html(true, 'en', array('bob' => '55555'));
    echo $HTML->head();


    echo $HTML->meta('robots','noindex, nofollow');

    echo $HTML->base('http://test.com','_blank');

    echo $HTML->styleLink('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array('media'=>'all'));
    echo $HTML->style('body { color: red; }');

    echo $HTML->scriptLink('//google.com/script', 'text/javascript');
    echo $HTML->script('//this is a script', 'text/javascript');

    echo $HTML->noscript('Nothing here!');


    echo $HTML->link('shortcut-icon', '/favicon.ico');

    echo $HTML->title('sample page');

    echo $HTML->comment('hi there');

    echo $HTML->head(false);
    echo $HTML->body();

    echo $HTML->div(true, 'container');



    echo $HTML->header('bobny', array('no1', 'no2'), 'myid', 'mystyle', array('name' => 'bob', 'time' => 'noon'), array('custom1'=>'mycustom'));
    echo $HTML->footer('bsaaa', array('no1', 'no2'), 'myid', 'mystyle', array('name' => 'bob', 'time' => 'noon'));



    echo $HTML->article('im an article');
    echo $HTML->aside('im an aside');
    echo $HTML->main('im a main');

    echo $HTML->nav('im a nav');


    //echo $HTML->form();
    //echo $HTML->getInput('fname','myname');
    //echo $HTML->getInput('fname','myname','tel');
    //echo $HTML->getInput('fname','myname','date');

    //echo $HTML->getInputSubmit('Submit Me');

    //echo $HTML->getButton('Click Me','btnclass','btnId');

    //echo $HTML->getSelect('fname','myname','date');


    //echo $HTML->getTextArea('fname');
    //echo $HTML->getForm(false);


    echo $HTML->hr('myhrclass');

    echo $HTML->h1('Sample Page');



    $s = new \HAPEL\Builder\Stylesheet();
    $s->addSelector('header',
        $s->addProp('color', 'white'),
        $s->addProp('background', 'red')
    );


    echo $s->get(true);

    $t = new \HAPEL\Builder\Table();





    echo $HTML->body(false);
    echo $HTML->html(false);

    $bs = new HAPEL\Plugins\Bootstrap();
    echo $bs->formGropup('my Label', $HTML->inputText('hi'), 'myClass');







