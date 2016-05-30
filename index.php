<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'vendor/autoload.php';

$tplDir = dirname(__FILE__).'/templates/default';
$tmpDir = './cache/';
$loader = new Twig_Loader_Filesystem($tplDir);

$template = new Twig_Environment($loader, array(
    'cache' => $tmpDir,
    'auto_reload' => true
));
$template->addExtension(new Twig_Extensions_Extension_I18n());


//// Front controller
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($path)
{
    case '/':
        echo $template->render('pocetna.twig');
        break;
    case '/proizvodi':
        echo $template->render('proizvodi.twig');
        break;
    case '/cenovnik':
        echo $template->render('cenovnik.twig');
        break;
    case '/dostava':
        echo $template->render('dostava.twig');
        break;
    case '/online-kupovina':
        echo $template->render('online_kupovina.twig');
        break;
    case '/uputstvo':
        echo $template->render('uputstvo.twig');
        break;
    case '/galerija':
        echo $template->render('galerija.twig');
        break;
    case '/kontakt':
        echo $template->render('kontakt.twig');
        break;
    default:
        echo $template->render('404.twig');
        break;
}




?>