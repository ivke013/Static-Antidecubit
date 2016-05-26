<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


require_once 'vendor/autoload.php';

$tplDir = dirname(__FILE__).'/templates/default';
$tmpDir = './cache/';
$loader = new Twig_Loader_Filesystem($tplDir);

$template = new Twig_Environment($loader, array(
    'cache' => $tmpDir,
    'auto_reload' => true
));
$template->addExtension(new Twig_Extensions_Extension_I18n());
echo $template->render('home.twig');


//// Front controller
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($path)
{
    case '/about-us':
        echo $template->render('about_us.twig');
        break;
    case '/contact':
        echo $template->render('contact.twig');
        break;
    default:
        echo $template->render('homepage.twig', array(
            'title' => 1
        ));
        break;
}




?>